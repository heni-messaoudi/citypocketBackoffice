<?php

namespace ps\lieuxBundle\CloudControlers;

use Google\Cloud\Datastore\DatastoreClient;
use ps\lieuxBundle\EntitysControlers\lieu\Etablissement;
use ps\lieuxBundle\EntitysControlers\user\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class EtablissementModel
{
    private $datastore;

    public function __construct($container)
    {
        $datasetId = 'citypocketgabon';
        $pathToCredential = $container->getParameter('kernel.root_dir') . '/../credentials.json';
        $this->datastore = new DatastoreClient([
            'projectId' => $datasetId,
            'keyFilePath' => $pathToCredential
        ]);
    }

    public function listEtablissement($cursor = null, $filter)
    {
        $query = $this->datastore->query()
            ->kind('Etablissement')
            ->order('nom');
        if ($filter != null)
            $query->filter('categorie', '=', $this->datastore->key('Categorie', $filter));
        else
            $query->limit(50)->start($cursor);
        $results = $this->datastore->runQuery($query);
        $etablissements = [];
        $nextPageCursor = null;
        foreach ($results as $entity) {
            $etab = $entity->get();
            $etab['id'] = $entity->key()->pathEndIdentifier();
            $etablissements[] = $etab;
            $nextPageCursor = $entity->cursor();
        }
        if ($filter != null)
            $nextPageCursor = null;
        return [
            'etablissements' => $etablissements,
            'cursor' => $nextPageCursor,
        ];
    }

    public function getEtablissement($id)
    {
        $key = $this->datastore->key('Etablissement', $id);
        $entity = $this->datastore->lookup($key);
        if ($entity) {
            $etab = $entity->get();
            $etab['id'] = $entity->key()->pathEndIdentifier();
            $etab['categorie'] = $etab['categorie']->pathEndIdentifier();
            $descentity = $this->datastore->lookup($etab['description']);
            $desc = $descentity->get();
            $desc['id'] = $descentity->key()->pathEndIdentifier();
            return ['etab' => $etab, 'desc' => $desc];
        }
        return false;
    }

    public function deleteEtablissement($id)
    {
        $keyetab = $this->datastore->key('Etablissement', $id);
        $entity = $this->datastore->lookup($keyetab);
        if ($entity) {
            $idDesc = $entity->get()['description']->pathEndIdentifier();
            $keydecr = $this->datastore->key('Description', $idDesc);
            $this->datastore->delete($keydecr);
            $this->datastore->delete($keyetab);
            return true;
        }
        return false;
    }


    public function getDescrFromEtab(Etablissement $etab)
    {
        $descr = array();
        $descr['adresse'] = $etab->getAdresse();
        $descr['email'] = $etab->getEmail();
        $descr['presentation'] = $etab->getPresentation();
        $descr['numTel'] = $etab->getNumtel();
        return $descr;
    }

    public function getEtabFromEtab(Etablissement $etab, $desc, $categorie)
    {
        $e = array();
        $e['latitude'] = $etab->getLatitude();
        $e['longitude'] = $etab->getLongitude();
        $e['nom'] = $etab->getNom();
        $e['categorie'] = $categorie;
        $e['description'] = $desc;
        return $e;
    }

    public function insertDescr(Etablissement $etab)
    {
        $desc = $this->getDescrFromEtab($etab);
        $keyDesc = $this->datastore->key('Description');
        $entityDesc = $this->datastore->entity($keyDesc, $desc);
        $this->datastore->insert($entityDesc);
        $descid = $entityDesc->key()->pathEndIdentifier();
        return $this->datastore->key('Description', $descid);
    }

    public function addEtablissement(Etablissement $etab)
    {
        $categorie = $this->datastore->key('Categorie', $etab->getCategorie());
        $desc = $this->insertDescr($etab);
        $newEtablissement = $this->getEtabFromEtab($etab, $desc, $categorie);
        $key = $this->datastore->key('Etablissement');
        $entity = $this->datastore->entity($key, $newEtablissement);
        $this->datastore->insert($entity);
        return $entity->key()->pathEndIdentifier();
    }

    public function transformEtab($etab, $descr)
    {
        $etablissement = new Etablissement();
        if ($descr['numTel'] != null)
            $etablissement->setNumtel($descr['numTel']);
        else
            $etablissement->setNumtel(null);
        if ($descr['adresse'] != null)
            $etablissement->setAdresse($descr['adresse']);
        else
            $etablissement->setAdresse(null);
        if ($descr['email'] != null)
            $etablissement->setEmail($descr['email']);
        else
            $etablissement->setEmail(null);
        if ($descr['presentation'] != null)
            $etablissement->setPresentation($descr['presentation']);
        else
            $etablissement->setPresentation(null);
        $etablissement->setCategorie($etab['categorie']);
        $etablissement->setLatitude($etab['latitude']);
        $etablissement->setLongitude($etab['longitude']);
        $etablissement->setNom($etab['nom']);
        return $etablissement;
    }

    public function updateDesc($desc, $etablissement)
    {
        $transaction = $this->datastore->transaction();
        $key = $this->datastore->key('Description', $desc['id']);
        $desc = $this->getDescrFromEtab($etablissement);
        $entity = $this->datastore->entity($key, $desc);
        $transaction->upsert($entity);
        $transaction->commit();
        return $key;
    }

    public function updateEtab($etab, $etablissement, $keydesc)
    {
        $transaction = $this->datastore->transaction();
        $key = $this->datastore->key('Etablissement', $etab['id']);
        unset($etab['id']);
        $etab['nom'] = $etablissement->getNom();
        $etab['longitude'] = $etablissement->getLongitude();
        $etab['latitude'] = $etablissement->getLatitude();
        $categorie = $this->datastore->key('Categorie', $etablissement->getCategorie());
        $etab['categorie'] = $categorie;
        $etab['description'] = $keydesc;
        $entity = $this->datastore->entity($key, $etab);
        $transaction->upsert($entity);
        $transaction->commit();
    }

    public function editEtablissement($etab, $desc, $etablissement)
    {
        $key = $this->updateDesc($desc, $etablissement);
        $this->updateEtab($etab, $etablissement, $key);
    }

    public function getUser($username, $request){
        $key = $this->datastore->key('Inscrit', $username);
        $entity = $this->datastore->lookup($key);
        if ($entity) {
            $user = new User();
            $usrEntity = $entity->get();
            $usrEntity['email'] = $entity->key()->pathEndIdentifier();
            $user->setEmail($usrEntity['email']);
            $user->setNom($usrEntity['nom']);
            $user->setMdp($usrEntity['mdp']);
            $user->setIsComercial($entity['isComercial']);
            return $user;
        }
        throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $username)
        );
    }

}