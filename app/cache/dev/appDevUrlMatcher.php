<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/anuncios')) {
            // anuncios
            if (rtrim($pathinfo, '/') === '/anuncios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'anuncios');
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::indexAction',  '_route' => 'anuncios',);
            }

            // anuncios_show
            if (preg_match('#^/anuncios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_show')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::showAction',));
            }

            // anuncios_new
            if ($pathinfo === '/anuncios/new') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::newAction',  '_route' => 'anuncios_new',);
            }

            // anuncios_create
            if ($pathinfo === '/anuncios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anuncios_create;
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::createAction',  '_route' => 'anuncios_create',);
            }
            not_anuncios_create:

            // anuncios_edit
            if (preg_match('#^/anuncios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_edit')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::editAction',));
            }

            // anuncios_update
            if (preg_match('#^/anuncios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_anuncios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_update')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::updateAction',));
            }
            not_anuncios_update:

            // anuncios_delete
            if (preg_match('#^/anuncios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_anuncios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_delete')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\anunciosController::deleteAction',));
            }
            not_anuncios_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/comentarios')) {
                // comentarios
                if (rtrim($pathinfo, '/') === '/comentarios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comentarios');
                    }

                    return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::indexAction',  '_route' => 'comentarios',);
                }

                // comentarios_show
                if (preg_match('#^/comentarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_show')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::showAction',));
                }

                if (0 === strpos($pathinfo, '/comentarios/conSeguridad')) {
                    // comentarios_new
                    if ($pathinfo === '/comentarios/conSeguridad/new') {
                        return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::newAction',  '_route' => 'comentarios_new',);
                    }

                    // comentarios_create
                    if ($pathinfo === '/comentarios/conSeguridad/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_comentarios_create;
                        }

                        return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::createAction',  '_route' => 'comentarios_create',);
                    }
                    not_comentarios_create:

                    // comentarios_edit
                    if (preg_match('#^/comentarios/conSeguridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_edit')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::editAction',));
                    }

                    // comentarios_update
                    if (preg_match('#^/comentarios/conSeguridad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_comentarios_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_update')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::updateAction',));
                    }
                    not_comentarios_update:

                    // comentarios_delete
                    if (preg_match('#^/comentarios/conSeguridad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_comentarios_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_delete')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\comentariosController::deleteAction',));
                    }
                    not_comentarios_delete:

                }

            }

            if (0 === strpos($pathinfo, '/categorias')) {
                // categorias
                if (rtrim($pathinfo, '/') === '/categorias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorias');
                    }

                    return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::indexAction',  '_route' => 'categorias',);
                }

                // categorias_show
                if (preg_match('#^/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::showAction',));
                }

                if (0 === strpos($pathinfo, '/categorias/conSeguridad')) {
                    // categorias_new
                    if ($pathinfo === '/categorias/conSeguridad/new') {
                        return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::newAction',  '_route' => 'categorias_new',);
                    }

                    // categorias_create
                    if ($pathinfo === '/categorias/conSeguridad/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_categorias_create;
                        }

                        return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::createAction',  '_route' => 'categorias_create',);
                    }
                    not_categorias_create:

                    // categorias_edit
                    if (preg_match('#^/categorias/conSeguridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_edit')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::editAction',));
                    }

                    // categorias_update
                    if (preg_match('#^/categorias/conSeguridad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_categorias_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_update')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::updateAction',));
                    }
                    not_categorias_update:

                    // categorias_delete
                    if (preg_match('#^/categorias/conSeguridad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_categorias_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_delete')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\categoriasController::deleteAction',));
                    }
                    not_categorias_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticias
            if (rtrim($pathinfo, '/') === '/noticias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticias');
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::indexAction',  '_route' => 'noticias',);
            }

            // noticias_show
            if (preg_match('#^/noticias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_show')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::showAction',));
            }

            // noticias_buscar_autor
            if ($pathinfo === '/noticias/buscarautor') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscarAutorAction',  '_route' => 'noticias_buscar_autor',);
            }

            // noticias_responder_autor
            if ($pathinfo === '/noticias/responderautor') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder_autor;
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::responderAutorAction',  '_route' => 'noticias_responder_autor',);
            }
            not_noticias_responder_autor:

            // noticias_buscar_titulo
            if ($pathinfo === '/noticias/buscartitulo') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscarTituloAction',  '_route' => 'noticias_buscar_titulo',);
            }

            // noticias_responder_titulo
            if ($pathinfo === '/noticias/respondertitulo') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder_titulo;
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::responderTituloAction',  '_route' => 'noticias_responder_titulo',);
            }
            not_noticias_responder_titulo:

            // noticias_buscar_titulolike
            if ($pathinfo === '/noticias/buscartitulolike') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscarTitulolikeAction',  '_route' => 'noticias_buscar_titulolike',);
            }

            // noticias_responder_titulolike
            if ($pathinfo === '/noticias/respondertitulolike') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder_titulolike;
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::responderTitulolikeAction',  '_route' => 'noticias_responder_titulolike',);
            }
            not_noticias_responder_titulolike:

            if (0 === strpos($pathinfo, '/noticias/conSeguridad')) {
                // noticias_new
                if ($pathinfo === '/noticias/conSeguridad/new') {
                    return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::newAction',  '_route' => 'noticias_new',);
                }

                // noticias_create
                if ($pathinfo === '/noticias/conSeguridad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_noticias_create;
                    }

                    return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::createAction',  '_route' => 'noticias_create',);
                }
                not_noticias_create:

                // noticias_edit
                if (preg_match('#^/noticias/conSeguridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_edit')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::editAction',));
                }

                // noticias_update
                if (preg_match('#^/noticias/conSeguridad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_noticias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_update')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::updateAction',));
                }
                not_noticias_update:

                // noticias_delete
                if (preg_match('#^/noticias/conSeguridad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_noticias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_delete')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::deleteAction',));
                }
                not_noticias_delete:

            }

        }

        // uni_marca_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_marca_homepage')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\DefaultController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
