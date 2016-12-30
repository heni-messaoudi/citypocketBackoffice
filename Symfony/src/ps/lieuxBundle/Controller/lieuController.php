<?php

namespace ps\lieuxBundle\Controller;


use ps\lieuxBundle\EntitysControlers\lieu\Categorie;
use ps\lieuxBundle\EntitysControlers\lieu\Etablissement;
use ps\lieuxBundle\EntitysControlers\lieu\UserEtab;
use ps\lieuxBundle\EntitysControlers\user\User;
use ps\lieuxBundle\Form\lieu\EtablissementType;
use ps\lieuxBundle\CloudControlers\EtablissementModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class lieuController extends Controller
{
    public function indexAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute("list");
        } else {
            $idUser = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('pslieuxBundle:lieu\UserEtab');
            $etab = $repository->find($idUser);
            if ($etab) {
                $etab = $etab->getIdEtab();
                return $this->redirectToRoute("get", array('id' => $etab));
            } else
                return $this->redirectToRoute("create");
        }
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listAction(Request $request)
    {
        $categorieBuilder = new Categorie();
        $cursor = $request->query->get('page_token');
        $filter = $request->query->get('categorie');
        $etablissement = new EtablissementModel($this->container);
        $lieux = $etablissement->listEtablissement($cursor, $filter);
        return $this->render('pslieuxBundle:lieu:list.html.twig', array(
            'categories' => $categorieBuilder->getCategories(),
            'lieux' => $lieux['etablissements'],
            'next_page_token' => $lieux['cursor']
        ));
    }

    public function getAction($id)
    {
        $categorieBuilder = new Categorie();
        $etablissement = new EtablissementModel($this->container);
        $etab = $etablissement->getEtablissement($id);
        $desc = $etab['desc'];
        $etab = $etab['etab'];
        if (!$etab) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }
        return $this->render('pslieuxBundle:lieu:view.html.twig', array(
            'categories' => $categorieBuilder->getCategories(),
            'lieu' => $etab,
            'desc' => $desc));
    }

    public function deleteAction($id)
    {
        $etablissement = new EtablissementModel($this->container);
        $etablissement->deleteEtablissement($id);
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute("list");
        } else {
            $idUser = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('pslieuxBundle:lieu\UserEtab');
            $etab = $repository->find($idUser);
            $this->getDoctrine()->getEntityManager()->remove($etab);
            $this->getDoctrine()->getEntityManager()->flush();
            return $this->redirectToRoute("create");
        }
    }

    public function createAction(Request $request)
    {
        $categorieBuilder = new Categorie();
        $etabcloudControler = new EtablissementModel($this->container);
        $etab = new Etablissement();
        $form = $this->createForm(EtablissementType::class, $etab);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $idEtab = $etabcloudControler->addEtablissement($etab);
            if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                $em = $this->getDoctrine()->getManager();
                $userEtab = new UserEtab();
                $userEtab->setIdEtab($idEtab);
                $userEtab->setUserId($this->get('security.token_storage')->getToken()->getUser()->getUsername());
                $em->persist($userEtab);
                $em->flush();
            }
            return $this->redirectToRoute('get', array('id' => $idEtab));
        }

        return $this->render('pslieuxBundle:lieu:form.html.twig', array(
                'categories' => $categorieBuilder->getCategories(),
                'action' => 'Ajout',
                'form' => $form->createView(),
            )
        );
    }

    public function editAction(Request $request, $id)
    {
        $categorieBuilder = new Categorie();
        $etabcloudControler = new EtablissementModel($this->container);
        $etab = $etabcloudControler->getEtablissement($id);
        if (!$etab)
            return new Response('', Response::HTTP_NOT_FOUND);
        $desc = $etab['desc'];
        $etab = $etab['etab'];
        $etablissement = $etabcloudControler->transformEtab($etab, $desc);
        $form = $this->createForm(EtablissementType::class, $etablissement);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $etabcloudControler->editEtablissement($etab, $desc, $etablissement);
            return $this->redirectToRoute('get', array('id' => $id));
        }
        return $this->render('pslieuxBundle:lieu:form.html.twig', array(
            'categories' => $categorieBuilder->getCategories(),
            'action' => 'Modification',
            'form' => $form->createView(),
        ));
    }

    public function loginAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('index');
        }
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('pslieuxBundle:lieu:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

}
