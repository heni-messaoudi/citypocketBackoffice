<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/f3b6057')) {
                // _assetic_f3b6057
                if ($pathinfo === '/css/f3b6057.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f3b6057',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f3b6057',);
                }

                // _assetic_f3b6057_0
                if ($pathinfo === '/css/f3b6057_description_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f3b6057',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f3b6057_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/40e784b')) {
                // _assetic_40e784b
                if ($pathinfo === '/css/40e784b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40e784b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_40e784b',);
                }

                // _assetic_40e784b_0
                if ($pathinfo === '/css/40e784b_mytable_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40e784b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_40e784b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/b73ea08')) {
                // _assetic_b73ea08
                if ($pathinfo === '/css/b73ea08.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b73ea08',);
                }

                if (0 === strpos($pathinfo, '/css/b73ea08_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/b73ea08_part_1_bootstrap')) {
                        // _assetic_b73ea08_0
                        if ($pathinfo === '/css/b73ea08_part_1_bootstrap-theme.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b73ea08_0',);
                        }

                        // _assetic_b73ea08_1
                        if ($pathinfo === '/css/b73ea08_part_1_bootstrap.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b73ea08_1',);
                        }

                    }

                    // _assetic_b73ea08_2
                    if ($pathinfo === '/css/b73ea08_part_1_description_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b73ea08_2',);
                    }

                    // _assetic_b73ea08_3
                    if ($pathinfo === '/css/b73ea08_part_1_font-awesome_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_b73ea08_3',);
                    }

                    // _assetic_b73ea08_4
                    if ($pathinfo === '/css/b73ea08_part_1_login_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_b73ea08_4',);
                    }

                    // _assetic_b73ea08_5
                    if ($pathinfo === '/css/b73ea08_part_1_mytable_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b73ea08',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_b73ea08_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/images/d3974a0')) {
            // _assetic_d3974a0
            if ($pathinfo === '/images/d3974a0.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3974a0',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_d3974a0',);
            }

            // _assetic_d3974a0_0
            if ($pathinfo === '/images/d3974a0_cplogo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3974a0',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_d3974a0_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/5fbc15d')) {
            // _assetic_5fbc15d
            if ($pathinfo === '/js/5fbc15d.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5fbc15d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5fbc15d',);
            }

            if (0 === strpos($pathinfo, '/js/5fbc15d_part_1_')) {
                // _assetic_5fbc15d_0
                if ($pathinfo === '/js/5fbc15d_part_1_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5fbc15d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5fbc15d_0',);
                }

                // _assetic_5fbc15d_1
                if ($pathinfo === '/js/5fbc15d_part_1_jquery.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5fbc15d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5fbc15d_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/50cb29f')) {
            // _assetic_50cb29f
            if ($pathinfo === '/css/50cb29f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '50cb29f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_50cb29f',);
            }

            // _assetic_50cb29f_0
            if ($pathinfo === '/css/50cb29f_bootstrap.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '50cb29f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_50cb29f_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/lieu')) {
                // list
                if ($pathinfo === '/lieu/list') {
                    return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::listAction',  '_route' => 'list',);
                }

                // get
                if (preg_match('#^/lieu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::getAction',));
                }

                // delete
                if (0 === strpos($pathinfo, '/lieu/delete') && preg_match('#^/lieu/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::deleteAction',));
                }

                // create
                if (rtrim($pathinfo, '/') === '/lieu/create') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'create');
                    }

                    return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::createAction',  '_route' => 'create',);
                }

                // edit
                if (0 === strpos($pathinfo, '/lieu/edit') && preg_match('#^/lieu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
