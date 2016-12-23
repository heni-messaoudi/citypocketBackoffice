<?php

namespace ps\lieuxBundle\CloudControlers;

use Google\Cloud\Datastore\DatastoreClient;
use ps\lieuxBundle\EntitysControlers\lieu\Etablissement;

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
            $desc = $this->datastore->lookup($etab['description'])->get();
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

    public function transformNumtel(Etablissement $etab)
    {
        $res = $etab->getNumtel();
        $changes = array(":", "Code", "National", "Number", " ");
        $res = str_replace($changes, "", $res);
        $res = str_replace("Country", "+", $res);
        $etab->setNumtel($res);
    }

    public function getDescrFromEtab(Etablissement $etab)
    {
        $descr = array();
        $descr['adresse'] = $etab->getAdresse();
        $descr['email'] = $etab->getEmail();
        $descr['presentation'] = $etab->getPresentation();
        if ($etab->getNumtel() != '')
            $descr['numTel'] = $etab->getNumtel();
        else
            $descr['numTel'] = null;
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
        $newEtablissement = $this->getEtabFromEtab($etab,$desc,$categorie);
        $key = $this->datastore->key('Etablissement');
        $entity = $this->datastore->entity($key, $newEtablissement);
        $this->datastore->insert($entity);
        return $entity->key()->pathEndIdentifier();
    }


}