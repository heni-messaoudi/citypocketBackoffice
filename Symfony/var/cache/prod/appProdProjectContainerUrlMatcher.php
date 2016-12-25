<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::indexAction',  '_route' => 'index',);
        }

        // list
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::listAction',  '_route' => 'list',);
        }

        if (0 === strpos($pathinfo, '/etab')) {
            // get
            if (preg_match('#^/etab/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::getAction',));
            }

            // delete
            if (0 === strpos($pathinfo, '/etab/delete') && preg_match('#^/etab/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::deleteAction',));
            }

            // create
            if (rtrim($pathinfo, '/') === '/etab/create') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'create');
                }

                return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::createAction',  '_route' => 'create',);
            }

            // edit
            if (0 === strpos($pathinfo, '/etab/edit') && preg_match('#^/etab/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::editAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
