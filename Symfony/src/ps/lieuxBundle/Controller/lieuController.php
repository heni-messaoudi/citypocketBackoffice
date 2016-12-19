<?php

namespace ps\lieuxBundle\Controller;

require 'C:/wamp64/www/Symfony/vendor/autoload.php';

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Google\Cloud\Datastore\DatastoreClient;

class lieuController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute("list");
    }

    public function listAction()
    {
        $pathToCredential  = $this->container->getParameter('kernel.root_dir') . '/../credentials.json';
        $datastore = new DatastoreClient(['projectId' => 'citypocketgabon',
            'keyFilePath' => $pathToCredential]);
        $query = $datastore->query();
        $query->kind('Etablissement')->order('categorie');
        $results = $datastore->runQuery($query);
        $lieux = [];
        foreach ($results as $entity) {
            $lieu = $entity->get();
            $lieu['id'] = $entity->key()->pathEndIdentifier();
            $lieux[] = $lieu;
        }
        return $this->render('pslieuxBundle:lieu:list.html.twig', array('lieux' => $lieux));
    }

    public function listFilterAction($categorie)
    {
        $pathToCredential  = $this->container->getParameter('kernel.root_dir') . '/../credentials.json';
        $datastore = new DatastoreClient(['projectId' => 'citypocketgabon',
            'keyFilePath' => $pathToCredential]);
        $query = $datastore->query();
        $key = $datastore->key('Categorie', $categorie);
        $query->kind('Etablissement')->filter("categorie","=",$key);
        $results = $datastore->runQuery($query);
        $lieux = [];
        foreach ($results as $entity) {
            $lieu = $entity->get();
            $lieu['id'] = $entity->key()->pathEndIdentifier();
            $lieux[] = $lieu;
        }
        return $this->render('pslieuxBundle:lieu:list.html.twig', array('lieux' => $lieux, 'categorie' => $key));
    }

}
