<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        if (0 === strpos($pathinfo, '/log_back_end')) {
            // easyadmin
            if ('/log_back_end/backend' === $pathinfo) {
                return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            if (0 === strpos($pathinfo, '/log_back_end/categorieadmin')) {
                // categorie_admin_index
                if ('/log_back_end/categorieadmin' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_categorie_admin_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'categorie_admin_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_admin_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::index',  '_route' => 'categorie_admin_index',);
                }
                not_categorie_admin_index:

                // categorie_admin_new
                if ('/log_back_end/categorieadmin/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_admin_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::newAction',  '_route' => 'categorie_admin_new',);
                }
                not_categorie_admin_new:

                // categorie_admin_edit
                if (preg_match('#^/log_back_end/categorieadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_admin_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_admin_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::edit',));
                }
                not_categorie_admin_edit:

                // categorie_admin_disable
                if (preg_match('#^/log_back_end/categorieadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_admin_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_admin_disable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::disableAction',));
                }
                not_categorie_admin_disable:

                // categorie_admin_delete
                if (preg_match('#^/log_back_end/categorieadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_admin_delete')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::deleteAction',));
                }
                not_categorie_admin_delete:

                // ExportCategorieAdmin
                if ('/log_back_end/categorieadmin/Liste_des_categories' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_categories',  '_controller' => 'BackendBundle\\Controller\\Admin\\CategorieController::ExportModeleAction',  '_route' => 'ExportCategorieAdmin',);
                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/admin')) {
                // admin_index
                if ('/log_back_end/admin' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::homePageAction',  '_route' => 'admin_index',);
                }
                not_admin_index:

                if (0 === strpos($pathinfo, '/log_back_end/admin/produit')) {
                    // admin_post_index
                    if ('/log_back_end/admin/produit' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_post_index;
                        }

                        return array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::indexAction',  '_route' => 'admin_post_index',);
                    }
                    not_admin_post_index:

                    // admin_post_index_paginated
                    if (0 === strpos($pathinfo, '/log_back_end/admin/produit/page') && preg_match('#^/log_back_end/admin/produit/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_post_index_paginated;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_index_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::indexAction',));
                    }
                    not_admin_post_index_paginated:

                    // admin_post_new
                    if ('/log_back_end/admin/produit/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_post_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::newAction',  '_route' => 'admin_post_new',);
                    }
                    not_admin_post_new:

                    // admin_post_show
                    if (preg_match('#^/log_back_end/admin/produit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::showAction',));
                    }
                    not_admin_post_show:

                    // admin_post_edit
                    if (preg_match('#^/log_back_end/admin/produit/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::editAction',));
                    }
                    not_admin_post_edit:

                    // admin_post_delete
                    if (0 === strpos($pathinfo, '/log_back_end/admin/produit/delete') && preg_match('#^/log_back_end/admin/produit/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::deleteAction',));
                    }

                }

                // update_affectation
                if ('/log_back_end/admin/update-affactation' === $pathinfo) {
                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\GestionController::updateAffectationAction',  '_route' => 'update_affectation',);
                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/p')) {
                if (0 === strpos($pathinfo, '/log_back_end/pays')) {
                    // pays_index
                    if ('/log_back_end/pays' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_pays_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'pays_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pays_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::indexAction',  '_route' => 'pays_index',);
                    }
                    not_pays_index:

                    // pays_new
                    if ('/log_back_end/pays/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pays_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::newAction',  '_route' => 'pays_new',);
                    }
                    not_pays_new:

                    // pays_edit
                    if (preg_match('#^/log_back_end/pays/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pays_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::edit',));
                    }
                    not_pays_edit:

                    // pays_delete
                    if (preg_match('#^/log_back_end/pays/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pays_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_delete')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::delete',));
                    }
                    not_pays_delete:

                    // pays_enable
                    if (preg_match('#^/log_back_end/pays/(?P<id>[^/]++)/enable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pays_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_enable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::enableAction',));
                    }
                    not_pays_enable:

                    // pays_disable
                    if (preg_match('#^/log_back_end/pays/(?P<id>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pays_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_disable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::disableAction',));
                    }
                    not_pays_disable:

                    // fr_en
                    if ('/log_back_end/pays/translate' === $pathinfo) {
                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::translationAction',  '_route' => 'fr_en',);
                    }

                    // sendmailtest
                    if ('/log_back_end/pays/sendmailtest' === $pathinfo) {
                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::sendMailttest',  '_route' => 'sendmailtest',);
                    }

                    // edit_country
                    if ('/log_back_end/pays/edit_country' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_edit_country;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\PaysController::editgestio',  '_route' => 'edit_country',);
                    }
                    not_edit_country:

                }

                if (0 === strpos($pathinfo, '/log_back_end/produitadmin')) {
                    // produit_admin_index
                    if ('/log_back_end/produitadmin' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_produit_admin_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'produit_admin_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_admin_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::indexAction',  '_route' => 'produit_admin_index',);
                    }
                    not_produit_admin_index:

                    // activateall_admin
                    if ('/log_back_end/produitadmin/activateall_admin' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_activateall_admin;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::activateall_admin',  '_route' => 'activateall_admin',);
                    }
                    not_activateall_admin:

                    // get_sous_categorie_from_categorie_admin
                    if ('/log_back_end/produitadmin/get_sous_categorie_from_categorie_admin' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_sous_categorie_from_categorie_admin;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::getSousCategorieFromCategorie',  '_route' => 'get_sous_categorie_from_categorie_admin',);
                    }
                    not_get_sous_categorie_from_categorie_admin:

                    // new_produit_admin
                    if ('/log_back_end/produitadmin/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_new_produit_admin;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::newAction',  '_route' => 'new_produit_admin',);
                    }
                    not_new_produit_admin:

                    // produit_admin_edit
                    if (preg_match('#^/log_back_end/produitadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_admin_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::editAction',));
                    }
                    not_produit_admin_edit:

                    // delete_couleur_admin
                    if (preg_match('#^/log_back_end/produitadmin/(?P<idcouleur>[^/]++)/(?P<idproduit>[^/]++)/delete_couleur_admin$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_delete_couleur_admin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_couleur_admin')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::deleteCouleurAction',));
                    }
                    not_delete_couleur_admin:

                    // delete_size_admin
                    if (preg_match('#^/log_back_end/produitadmin/(?P<id>[^/]++)/(?P<idproduit>[^/]++)/delete_size_admin$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_delete_size_admin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_size_admin')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::deleteSizeAction',));
                    }
                    not_delete_size_admin:

                    // edit_size_admin
                    if ('/log_back_end/produitadmin/edit_size_admin' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_edit_size_admin;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::editSizeAction',  '_route' => 'edit_size_admin',);
                    }
                    not_edit_size_admin:

                    // produit_admin_disable
                    if (preg_match('#^/log_back_end/produitadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_admin_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_disable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::disableAction',));
                    }
                    not_produit_admin_disable:

                    // enableadmin
                    if (preg_match('#^/log_back_end/produitadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/enableadmin$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_enableadmin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enableadmin')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::enbleAction',));
                    }
                    not_enableadmin:

                    // deleteproduitadmin
                    if (preg_match('#^/log_back_end/produitadmin/(?P<id>[^/]++)/(?P<page>[^/]++)/deleteproduitadmin$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_deleteproduitadmin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteproduitadmin')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::deleteAction',));
                    }
                    not_deleteproduitadmin:

                    // ExportProduit_admin
                    if ('/log_back_end/produitadmin/Liste_des_produits_admin' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_stations',  '_controller' => 'BackendBundle\\Controller\\Admin\\ProduitController::ExportModeleAction',  '_route' => 'ExportProduit_admin',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/sous_categorie_admin')) {
                // sous_categorie_admin_index
                if ('/log_back_end/sous_categorie_admin' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_sous_categorie_admin_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'sous_categorie_admin_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sous_categorie_admin_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::index',  '_route' => 'sous_categorie_admin_index',);
                }
                not_sous_categorie_admin_index:

                // sous_categorie_admin_new
                if ('/log_back_end/sous_categorie_admin/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sous_categorie_admin_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::newAction',  '_route' => 'sous_categorie_admin_new',);
                }
                not_sous_categorie_admin_new:

                // sous_categorie_admin_edit
                if (preg_match('#^/log_back_end/sous_categorie_admin/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sous_categorie_admin_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_admin_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::edit',));
                }
                not_sous_categorie_admin_edit:

                // sous_categorie_admin_disable
                if (preg_match('#^/log_back_end/sous_categorie_admin/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sous_categorie_admin_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_admin_disable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::disableAction',));
                }
                not_sous_categorie_admin_disable:

                // sous_categorie_admin_delete
                if (preg_match('#^/log_back_end/sous_categorie_admin/(?P<id>[^/]++)/(?P<page>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sous_categorie_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_admin_delete')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::deleteAction',));
                }
                not_sous_categorie_admin_delete:

                // ExportSousCategorieAdmin
                if ('/log_back_end/sous_categorie_admin/Liste_des_sous_categories' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_sous_categories',  '_controller' => 'BackendBundle\\Controller\\Admin\\SousCategorieController::ExportModeleAction',  '_route' => 'ExportSousCategorieAdmin',);
                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/user')) {
                // user_index
                if ('/log_back_end/user' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_user_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'user_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\UserController::index',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_new
                if ('/log_back_end/user/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\Admin\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/log_back_end/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\UserController::edit',));
                }
                not_user_edit:

                // utilisateurs_enable
                if (preg_match('#^/log_back_end/user/(?P<id>[^/]++)/enable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_utilisateurs_enable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_enable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\UserController::enableAction',));
                }
                not_utilisateurs_enable:

                // utilisateurs_disable
                if (preg_match('#^/log_back_end/user/(?P<id>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_utilisateurs_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_disable')), array (  '_controller' => 'BackendBundle\\Controller\\Admin\\UserController::disableAction',));
                }
                not_utilisateurs_disable:

            }

            // admin_dashboard
            if ('/log_back_end/dashboard' === $pathinfo) {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_dashboard',);
            }

            // activate_subcat
            if ('/log_back_end/activate_subcat' === $pathinfo) {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::sendMailTestAction',  '_route' => 'activate_subcat',);
            }

            // update_password
            if ('/log_back_end/update_password' === $pathinfo) {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::UpdatePasswordAction',  '_route' => 'update_password',);
            }

            // activate_produit
            if ('/log_back_end/activate_produit' === $pathinfo) {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::activateproduit',  '_route' => 'activate_produit',);
            }

            if (0 === strpos($pathinfo, '/log_back_end/c')) {
                // client_gerant_index
                if ('/log_back_end/client_gerant' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_client_gerant_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'client_gerant_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_gerant_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ClientController::index',  '_route' => 'client_gerant_index',);
                }
                not_client_gerant_index:

                if (0 === strpos($pathinfo, '/log_back_end/commandegerant')) {
                    // commande_gerant_index
                    if ('/log_back_end/commandegerant' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_commande_gerant_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'commande_gerant_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commande_gerant_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::indexAction',  '_route' => 'commande_gerant_index',);
                    }
                    not_commande_gerant_index:

                    // commande_gerant_show
                    if (0 === strpos($pathinfo, '/log_back_end/commandegerant/show') && preg_match('#^/log_back_end/commandegerant/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commande_gerant_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_gerant_show')), array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::showAction',));
                    }
                    not_commande_gerant_show:

                    // commandes_gerant_show_paginated
                    if (0 === strpos($pathinfo, '/log_back_end/commandegerant/page') && preg_match('#^/log_back_end/commandegerant/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commandes_gerant_show_paginated;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_gerant_show_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::showAction',));
                    }
                    not_commandes_gerant_show_paginated:

                    // commnde_gerant_edit
                    if (0 === strpos($pathinfo, '/log_back_end/commandegerant/edit') && preg_match('#^/log_back_end/commandegerant/edit/(?P<id>[^/]++)/(?P<statut>[^/]++)/(?P<page>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_commnde_gerant_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commnde_gerant_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::editAction',));
                    }
                    not_commnde_gerant_edit:

                    // ExportGerantCommande
                    if ('/log_back_end/commandegerant/Liste_gerant_des_commandes' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_gerant_des_commandes',  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::ExportModeleAction',  '_route' => 'ExportGerantCommande',);
                    }

                    // ExportDetailsGerantCommande
                    if (0 === strpos($pathinfo, '/log_back_end/commandegerant/Details_gerant_commandes') && preg_match('#^/log_back_end/commandegerant/Details_gerant_commandes/(?P<_filename>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ExportDetailsGerantCommande')), array (  '_format' => 'xls',  '_filename' => 'Details_gerant_commandes',  '_controller' => 'BackendBundle\\Controller\\GerantStation\\CommandeController::ExportDetailsCommandeAction',));
                    }

                }

            }

            // dashboard_gerant_index
            if ('/log_back_end/dashboard_gerant' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_dashboard_gerant_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'dashboard_gerant_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dashboard_gerant_index;
                }

                return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\DashboardController::index',  '_route' => 'dashboard_gerant_index',);
            }
            not_dashboard_gerant_index:

            if (0 === strpos($pathinfo, '/log_back_end/horaire_gerant')) {
                // horaire_gerant_index
                if ('/log_back_end/horaire_gerant' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_horaire_gerant_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'horaire_gerant_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_horaire_gerant_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\HoraireController::index',  '_route' => 'horaire_gerant_index',);
                }
                not_horaire_gerant_index:

                // pick_up_time
                if ('/log_back_end/horaire_gerant/pick' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pick_up_time;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\HoraireController::pickUpTime',  '_route' => 'pick_up_time',);
                }
                not_pick_up_time:

                // ExportClient_gerant
                if ('/log_back_end/horaire_gerant/Liste_des_clients_gerant' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_clients',  '_controller' => 'BackendBundle\\Controller\\GerantStation\\HoraireController::ExportModeleAction',  '_route' => 'ExportClient_gerant',);
                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/produitgerant')) {
                // produit_gerant_index
                if ('/log_back_end/produitgerant' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_produit_gerant_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'produit_gerant_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produit_gerant_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::indexAction',  '_route' => 'produit_gerant_index',);
                }
                not_produit_gerant_index:

                // get_sous_categorie_from_categorie_gerant
                if ('/log_back_end/produitgerant/get_sous_categorie_from_categorie_gerant' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_sous_categorie_from_categorie_gerant;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::getSousCategorieFromCategorie',  '_route' => 'get_sous_categorie_from_categorie_gerant',);
                }
                not_get_sous_categorie_from_categorie_gerant:

                // new_produit_gerant
                if ('/log_back_end/produitgerant/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_new_produit_gerant;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::newAction',  '_route' => 'new_produit_gerant',);
                }
                not_new_produit_gerant:

                // produit_gerant_edit
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produit_gerant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_gerant_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::editAction',));
                }
                not_produit_gerant_edit:

                // delete_couleur_gerant
                if (preg_match('#^/log_back_end/produitgerant/(?P<idcouleur>[^/]++)/(?P<idproduit>[^/]++)/(?P<page>[^/]++)/delete_couleur_gerant$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_delete_couleur_gerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_couleur_gerant')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::deleteCouleurAction',));
                }
                not_delete_couleur_gerant:

                // delete_size_gerant
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/(?P<idproduit>[^/]++)/(?P<page>[^/]++)/delete_size_gerant$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_delete_size_gerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_size_gerant')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::deleteSizeAction',));
                }
                not_delete_size_gerant:

                // edit_size_gerant
                if ('/log_back_end/produitgerant/edit_size_gerant' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_edit_size_gerant;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::editSizeAction',  '_route' => 'edit_size_gerant',);
                }
                not_edit_size_gerant:

                // produit_gerant_disable
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produit_gerant_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_gerant_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::disableAction',));
                }
                not_produit_gerant_disable:

                // delete_p_gerant
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/(?P<page>[^/]++)/delete_p_gerant$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_delete_p_gerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_p_gerant')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::deleteProduitAction',));
                }
                not_delete_p_gerant:

                // ExportProduit_gerant
                if ('/log_back_end/produitgerant/Liste_des_produits_gerant' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_stations',  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::ExportModeleAction',  '_route' => 'ExportProduit_gerant',);
                }

                if (0 === strpos($pathinfo, '/log_back_end/produitgerant/activate')) {
                    if (0 === strpos($pathinfo, '/log_back_end/produitgerant/activate_produits')) {
                        // produit_toactivate_index
                        if ('/log_back_end/produitgerant/activate_produits' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_toactivate_index;
                            }

                            return array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::listproduitAction',  '_route' => 'produit_toactivate_index',);
                        }
                        not_produit_toactivate_index:

                        // produit_toactivate_index_paginated
                        if (0 === strpos($pathinfo, '/log_back_end/produitgerant/activate_produits/page') && preg_match('#^/log_back_end/produitgerant/activate_produits/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_toactivate_index_paginated;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_toactivate_index_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::listproduitAction',));
                        }
                        not_produit_toactivate_index_paginated:

                    }

                    // activateall
                    if ('/log_back_end/produitgerant/activateall' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_activateall;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::activate_all',  '_route' => 'activateall',);
                    }
                    not_activateall:

                    // activate_checked
                    if ('/log_back_end/produitgerant/activate_checked' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_activate_checked;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::activate_checked',  '_route' => 'activate_checked',);
                    }
                    not_activate_checked:

                }

                // editallstation
                if ('/log_back_end/produitgerant/editallstation' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editallstation;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::editall',  '_route' => 'editallstation',);
                }
                not_editallstation:

                // Activer_produits
                if ('/log_back_end/produitgerant/Activer_produits' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_Activer_produits;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::Activer_produits',  '_route' => 'Activer_produits',);
                }
                not_Activer_produits:

                // activateproduit_gerant
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/activateproduit_gerant$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_activateproduit_gerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activateproduit_gerant')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::activateproduit_gerant',));
                }
                not_activateproduit_gerant:

                // enablegerant
                if (preg_match('#^/log_back_end/produitgerant/(?P<id>[^/]++)/(?P<page>[^/]++)/enablegerant$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_enablegerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enablegerant')), array (  '_controller' => 'BackendBundle\\Controller\\GerantStation\\ProduitController::enable',));
                }
                not_enablegerant:

            }

            if (0 === strpos($pathinfo, '/log_back_end/c')) {
                if (0 === strpos($pathinfo, '/log_back_end/categorie')) {
                    // categorie_index
                    if ('/log_back_end/categorie' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_categorie_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'categorie_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorie_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::index',  '_route' => 'categorie_index',);
                    }
                    not_categorie_index:

                    // categorie_new
                    if ('/log_back_end/categorie/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_categorie_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::newAction',  '_route' => 'categorie_new',);
                    }
                    not_categorie_new:

                    // categorie_activer
                    if ('/log_back_end/categorie/activer' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorie_activer;
                        }

                        return array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::activerindex',  '_route' => 'categorie_activer',);
                    }
                    not_categorie_activer:

                    // categorie_activer_index_paginated
                    if (0 === strpos($pathinfo, '/log_back_end/categorie/page') && preg_match('#^/log_back_end/categorie/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorie_activer_index_paginated;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_activer_index_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::activerindex',));
                    }
                    not_categorie_activer_index_paginated:

                    // categorie_edit
                    if (preg_match('#^/log_back_end/categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_categorie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::edit',));
                    }
                    not_categorie_edit:

                    // categorie_disable
                    if (preg_match('#^/log_back_end/categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorie_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::disableAction',));
                    }
                    not_categorie_disable:

                    // categorie_delete
                    if (preg_match('#^/log_back_end/categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::deleteAction',));
                    }
                    not_categorie_delete:

                    // ExportCategorie
                    if ('/log_back_end/categorie/Liste_des_categories' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_categories',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CategorieController::ExportModeleAction',  '_route' => 'ExportCategorie',);
                    }

                }

                if (0 === strpos($pathinfo, '/log_back_end/client')) {
                    // client_index
                    if ('/log_back_end/client' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_client_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'client_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_client_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ClientController::index',  '_route' => 'client_index',);
                    }
                    not_client_index:

                    // client_detail
                    if (preg_match('#^/log_back_end/client/(?P<id>[^/]++)/detail$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_client_detail;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_detail')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ClientController::edit',));
                    }
                    not_client_detail:

                    // ExportClient
                    if ('/log_back_end/client/Liste_des_clients' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_clients',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ClientController::ExportModeleAction',  '_route' => 'ExportClient',);
                    }

                }

                if (0 === strpos($pathinfo, '/log_back_end/co')) {
                    if (0 === strpos($pathinfo, '/log_back_end/commande')) {
                        // commande_index
                        if ('/log_back_end/commande' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_commande_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'commande_index');
                            }

                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commande_index;
                            }

                            return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::indexAction',  '_route' => 'commande_index',);
                        }
                        not_commande_index:

                        // commande_show
                        if (0 === strpos($pathinfo, '/log_back_end/commande/show') && preg_match('#^/log_back_end/commande/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commande_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::showAction',));
                        }
                        not_commande_show:

                        // commandes_show_paginated
                        if (0 === strpos($pathinfo, '/log_back_end/commande/page') && preg_match('#^/log_back_end/commande/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commandes_show_paginated;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_show_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::showAction',));
                        }
                        not_commandes_show_paginated:

                        // commnde_edit
                        if (0 === strpos($pathinfo, '/log_back_end/commande/edit') && preg_match('#^/log_back_end/commande/edit/(?P<id>[^/]++)/(?P<page>[^/]++)/(?P<remboursement>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_commnde_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commnde_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::editAction',));
                        }
                        not_commnde_edit:

                        // rembourserCommande
                        if ('/log_back_end/commande/rembourser' === $pathinfo) {
                            return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::rembouserAction',  '_route' => 'rembourserCommande',);
                        }

                        // ExportCommande
                        if ('/log_back_end/commande/Liste_des_commandes' === $pathinfo) {
                            return array (  '_format' => 'xls',  '_filename' => 'Liste_des_commandes',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::ExportModeleAction',  '_route' => 'ExportCommande',);
                        }

                        // ExportDetailsCommande
                        if (0 === strpos($pathinfo, '/log_back_end/commande/Details_commandes') && preg_match('#^/log_back_end/commande/Details_commandes/(?P<_filename>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ExportDetailsCommande')), array (  '_format' => 'xls',  '_filename' => 'Details_commandes',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CommandeController::ExportDetailsCommandeAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/log_back_end/coupon')) {
                        // coupon_index
                        if ('/log_back_end/coupon' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_coupon_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'coupon_index');
                            }

                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coupon_index;
                            }

                            return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::indexAction',  '_route' => 'coupon_index',);
                        }
                        not_coupon_index:

                        // new_coupon
                        if ('/log_back_end/coupon/new' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_new_coupon;
                            }

                            return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::newAction',  '_route' => 'new_coupon',);
                        }
                        not_new_coupon:

                        // coupon_edit
                        if (preg_match('#^/log_back_end/coupon/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_coupon_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::editAction',));
                        }
                        not_coupon_edit:

                        if (0 === strpos($pathinfo, '/log_back_end/coupon/generer')) {
                            if (0 === strpos($pathinfo, '/log_back_end/coupon/genererparp')) {
                                // generer_coupon_prix
                                if ('/log_back_end/coupon/genererparprix' === $pathinfo) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                        goto not_generer_coupon_prix;
                                    }

                                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::genererparprixAction',  '_route' => 'generer_coupon_prix',);
                                }
                                not_generer_coupon_prix:

                                // generer_coupon_pourcentage
                                if ('/log_back_end/coupon/genererparpourcentage' === $pathinfo) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                        goto not_generer_coupon_pourcentage;
                                    }

                                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::genererparpourcentageAction',  '_route' => 'generer_coupon_pourcentage',);
                                }
                                not_generer_coupon_pourcentage:

                            }

                            // generer_coupon
                            if ('/log_back_end/coupon/generer_coupon' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_generer_coupon;
                                }

                                return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::genererCoupanAction',  '_route' => 'generer_coupon',);
                            }
                            not_generer_coupon:

                        }

                        // coupon_delete
                        if (preg_match('#^/log_back_end/coupon/(?P<id>[^/]++)/(?P<page>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coupon_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_delete')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::deleteAction',));
                        }
                        not_coupon_delete:

                        // ExportCoupon
                        if ('/log_back_end/coupon/ExportCoupon' === $pathinfo) {
                            return array (  '_format' => 'xls',  '_filename' => 'Liste_des_stations',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\CouponController::ExportModeleAction',  '_route' => 'ExportCoupon',);
                        }

                    }

                }

            }

            // dashboard_index
            if ('/log_back_end/dashboard' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_dashboard_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'dashboard_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dashboard_index;
                }

                return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\DashboardController::index',  '_route' => 'dashboard_index',);
            }
            not_dashboard_index:

            if (0 === strpos($pathinfo, '/log_back_end/gerant')) {
                // gerant_index
                if ('/log_back_end/gerant' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_gerant_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'gerant_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gerant_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\GerantController::index',  '_route' => 'gerant_index',);
                }
                not_gerant_index:

                // gerant_new
                if ('/log_back_end/gerant/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gerant_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\GerantController::newAction',  '_route' => 'gerant_new',);
                }
                not_gerant_new:

                // gerant_edit
                if (preg_match('#^/log_back_end/gerant/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gerant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\GerantController::edit',));
                }
                not_gerant_edit:

                // gerant_disable
                if (preg_match('#^/log_back_end/gerant/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gerant_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\GerantController::disableAction',));
                }
                not_gerant_disable:

                // ExportGerant
                if ('/log_back_end/gerant/Liste_des_gerants' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_gerants',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\GerantController::ExportModeleAction',  '_route' => 'ExportGerant',);
                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/p')) {
                if (0 === strpos($pathinfo, '/log_back_end/parametre/parametre_')) {
                    // parametre_sms
                    if ('/log_back_end/parametre/parametre_sms' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_parametre_sms;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ParametreController::parametreSMS',  '_route' => 'parametre_sms',);
                    }
                    not_parametre_sms:

                    // parametre_mail
                    if ('/log_back_end/parametre/parametre_mail' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_parametre_mail;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ParametreController::parametreMail',  '_route' => 'parametre_mail',);
                    }
                    not_parametre_mail:

                }

                if (0 === strpos($pathinfo, '/log_back_end/produit')) {
                    // produit_index
                    if ('/log_back_end/produit' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_produit_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'produit_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::index',  '_route' => 'produit_index',);
                    }
                    not_produit_index:

                    // produit_gestion_index
                    if ('/log_back_end/produit/produit_gestion' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_gestion_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::Myproduit',  '_route' => 'produit_gestion_index',);
                    }
                    not_produit_gestion_index:

                    // get_sous_categorie_from_categorie
                    if ('/log_back_end/produit/get_sous_categorie_from_categorie' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_sous_categorie_from_categorie;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::getSousCategorieFromCategorie',  '_route' => 'get_sous_categorie_from_categorie',);
                    }
                    not_get_sous_categorie_from_categorie:

                    // produit_edit
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::editAction',));
                    }
                    not_produit_edit:

                    // produit_disable
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::disableAction',));
                    }
                    not_produit_disable:

                    // delete_couleur
                    if (preg_match('#^/log_back_end/produit/(?P<idcouleur>[^/]++)/(?P<idproduit>[^/]++)/delete_couleur$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_delete_couleur;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_couleur')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::deleteCouleurAction',));
                    }
                    not_delete_couleur:

                    // delete_size
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/(?P<idproduit>[^/]++)/delete_size$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_delete_size;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_size')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::deleteSizeAction',));
                    }
                    not_delete_size:

                    // edit_size
                    if ('/log_back_end/produit/edit_size' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_edit_size;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::editSizeAction',  '_route' => 'edit_size',);
                    }
                    not_edit_size:

                    // ExportProduit
                    if ('/log_back_end/produit/Liste_des_produits' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_stations',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::ExportModeleAction',  '_route' => 'ExportProduit',);
                    }

                    // activateproduit
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/activateproduit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_activateproduit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activateproduit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::activateproduit',));
                    }
                    not_activateproduit:

                    // enable
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/(?P<page>[^/]++)/enable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::enable',));
                    }
                    not_enable:

                    // activate_all
                    if ('/log_back_end/produit/activate_all' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_activate_all;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::activate_all',  '_route' => 'activate_all',);
                    }
                    not_activate_all:

                    // editallpays
                    if ('/log_back_end/produit/editallpays' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_editallpays;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::editall',  '_route' => 'editallpays',);
                    }
                    not_editallpays:

                    if (0 === strpos($pathinfo, '/log_back_end/produit/activate_produits')) {
                        // produit_gestion_toactivate_index
                        if ('/log_back_end/produit/activate_produits' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_gestion_toactivate_index;
                            }

                            return array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::listproduitAction',  '_route' => 'produit_gestion_toactivate_index',);
                        }
                        not_produit_gestion_toactivate_index:

                        // produit_gestion_toactivate_index_paginated
                        if (0 === strpos($pathinfo, '/log_back_end/produit/activate_produits/page') && preg_match('#^/log_back_end/produit/activate_produits/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_gestion_toactivate_index_paginated;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_gestion_toactivate_index_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::listproduitAction',));
                        }
                        not_produit_gestion_toactivate_index_paginated:

                    }

                    // new_produit_gstionnaire
                    if ('/log_back_end/produit/newptoduit' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_new_produit_gstionnaire;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::newAction',  '_route' => 'new_produit_gstionnaire',);
                    }
                    not_new_produit_gstionnaire:

                    // delete_p_gestionnaire
                    if (preg_match('#^/log_back_end/produit/(?P<id>[^/]++)/(?P<page>[^/]++)/delete_p_gestionnaire$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_delete_p_gestionnaire;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_p_gestionnaire')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ProduitController::deleteProduitAction',));
                    }
                    not_delete_p_gestionnaire:

                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/s')) {
                if (0 === strpos($pathinfo, '/log_back_end/sous_categorie')) {
                    // sous_categorie_index
                    if ('/log_back_end/sous_categorie' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_sous_categorie_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'sous_categorie_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sous_categorie_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::index',  '_route' => 'sous_categorie_index',);
                    }
                    not_sous_categorie_index:

                    // sous_categorie_activer
                    if ('/log_back_end/sous_categorie/activer' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sous_categorie_activer;
                        }

                        return array (  'page' => 1,  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::activerindex',  '_route' => 'sous_categorie_activer',);
                    }
                    not_sous_categorie_activer:

                    // sous_categorie_ctiv_index_paginated
                    if (0 === strpos($pathinfo, '/log_back_end/sous_categorie/page') && preg_match('#^/log_back_end/sous_categorie/page/(?P<page>[1-9]\\d*)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sous_categorie_ctiv_index_paginated;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_ctiv_index_paginated')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::activerindex',));
                    }
                    not_sous_categorie_ctiv_index_paginated:

                    // sous_categorie_new
                    if ('/log_back_end/sous_categorie/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sous_categorie_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::newAction',  '_route' => 'sous_categorie_new',);
                    }
                    not_sous_categorie_new:

                    // sous_categorie_edit
                    if (preg_match('#^/log_back_end/sous_categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sous_categorie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::edit',));
                    }
                    not_sous_categorie_edit:

                    // sous_categorie_disable
                    if (preg_match('#^/log_back_end/sous_categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sous_categorie_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::disableAction',));
                    }
                    not_sous_categorie_disable:

                    // sous_categorie_delete
                    if (preg_match('#^/log_back_end/sous_categorie/(?P<id>[^/]++)/(?P<page>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sous_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sous_categorie_delete')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::deleteAction',));
                    }
                    not_sous_categorie_delete:

                    // ExportSousCategorie
                    if ('/log_back_end/sous_categorie/Liste_des_sous_categories' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_sous_categories',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\SousCategorieController::ExportModeleAction',  '_route' => 'ExportSousCategorie',);
                    }

                }

                if (0 === strpos($pathinfo, '/log_back_end/station')) {
                    // station_index
                    if ('/log_back_end/station' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_station_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'station_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_station_index;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::index',  '_route' => 'station_index',);
                    }
                    not_station_index:

                    // station_new
                    if ('/log_back_end/station/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_station_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::newAction',  '_route' => 'station_new',);
                    }
                    not_station_new:

                    // station_edit
                    if (preg_match('#^/log_back_end/station/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_station_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'station_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::edit',));
                    }
                    not_station_edit:

                    // station_pdf
                    if ('/log_back_end/station/pdf' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_station_pdf;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::pdf',  '_route' => 'station_pdf',);
                    }
                    not_station_pdf:

                    // station_disable
                    if (preg_match('#^/log_back_end/station/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_station_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'station_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::disableAction',));
                    }
                    not_station_disable:

                    // station_descative
                    if (preg_match('#^/log_back_end/station/(?P<id>[^/]++)/(?P<page>[^/]++)/descative$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_station_descative;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'station_descative')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::descativeAction',));
                    }
                    not_station_descative:

                    // ExportStation
                    if ('/log_back_end/station/Liste_des_stations' === $pathinfo) {
                        return array (  '_format' => 'xls',  '_filename' => 'Liste_des_stations',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\StationController::ExportModeleAction',  '_route' => 'ExportStation',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/log_back_end/zone')) {
                // zone_index
                if ('/log_back_end/zone' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_zone_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'zone_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zone_index;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::index',  '_route' => 'zone_index',);
                }
                not_zone_index:

                // zone_new
                if ('/log_back_end/zone/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_zone_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::newAction',  '_route' => 'zone_new',);
                }
                not_zone_new:

                // zone_edit
                if (preg_match('#^/log_back_end/zone/(?P<id>[^/]++)/(?P<page>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_zone_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_edit')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::edit',));
                }
                not_zone_edit:

                // zone_pdf
                if ('/log_back_end/zone/pdf' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zone_pdf;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::pdf',  '_route' => 'zone_pdf',);
                }
                not_zone_pdf:

                // zone_disable
                if (preg_match('#^/log_back_end/zone/(?P<id>[^/]++)/(?P<page>[^/]++)/disable$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zone_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_disable')), array (  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::disableAction',));
                }
                not_zone_disable:

                // ExportZone
                if ('/log_back_end/zone/Liste_des_zones' === $pathinfo) {
                    return array (  '_format' => 'xls',  '_filename' => 'Liste_des_zones',  '_controller' => 'BackendBundle\\Controller\\GestionnairePays\\ZoneController::ExportModeleAction',  '_route' => 'ExportZone',);
                }

            }

        }

        // send_mail_test
        if (0 === strpos($pathinfo, '/mail_test') && preg_match('#^/mail_test/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_mail_test')), array (  '_controller' => 'FrontendBundle\\Controller\\CommandesController::sendMailTestAction',));
        }

        // validation_commande
        if ('/validation_commande' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\CommandesController::validationCommandeAction',  '_route' => 'validation_commande',);
        }

        // choosestation
        if ('/choosestation' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::choosestationAction',  '_route' => 'choosestation',);
        }

        // modalStationMapAction
        if ('/modalStationMapAction' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::modalStationMapAction',  '_route' => 'modalStationMapAction',);
        }

        // getliststation
        if ('/getliststation' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_getliststation;
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::getStationAction',  '_route' => 'getliststation',);
        }
        not_getliststation:

        // select_country
        if ('/country' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::selectCountryAction',  '_route' => 'select_country',);
        }

        // select_country_trans
        if ('/select_country' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::selectCountryFromtransAction',  '_route' => 'select_country_trans',);
        }

        // homepage_frontend
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage_frontend;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage_frontend');
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage_frontend',);
        }
        not_homepage_frontend:

        // view_all
        if ('/ViewAll' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::ViewAllAction',  '_route' => 'view_all',);
        }

        // detail_produits
        if ('/detail_produits' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_detail_produits;
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::DetailProductAction',  '_route' => 'detail_produits',);
        }
        not_detail_produits:

        // view_products
        if ('/view_products' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::ViewOurProdAction',  '_route' => 'view_products',);
        }

        // frontend_default_cart
        if ('/cart' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::cartAction',  '_route' => 'frontend_default_cart',);
        }

        // list_produits
        if ('/produits' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::produitsAction',  '_route' => 'list_produits',);
        }

        // details_produit
        if ('/detailsproduit' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::detailsproduitAction',  '_route' => 'details_produit',);
        }

        // setStation
        if ('/setStation' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::setStationAction',  '_route' => 'setStation',);
        }

        // getConditionVente
        if ('/getConditionVente' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::getConditionVenteAction',  '_route' => 'getConditionVente',);
        }

        if (0 === strpos($pathinfo, '/translate')) {
            // translate
            if ('/translate' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::translationAction',  '_route' => 'translate',);
            }

            if (0 === strpos($pathinfo, '/translatel')) {
                // translatelogin
                if ('/translatelogin' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::translationLoginAction',  '_route' => 'translatelogin',);
                }

                // translatelanding
                if ('/translatelanding' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::translatelandingAction',  '_route' => 'translatelanding',);
                }

            }

        }

        // sendSmstest
        if ('/sendSmstest' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::sendSmstest',  '_route' => 'sendSmstest',);
        }

        // updatePasswordApi
        if ('/forgetPassword' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::updatePasswordAction',  '_route' => 'updatePasswordApi',);
        }

        // getPublicCommandByUid
        if (0 === strpos($pathinfo, '/commandes') && preg_match('#^/commandes/(?P<uid>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'getPublicCommandByUid')), array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::getPublicCommandByUidAction',));
        }

        if (0 === strpos($pathinfo, '/size')) {
            // getSizeCouleur
            if ('/size' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::getSizeCouleur',  '_route' => 'getSizeCouleur',);
            }

            // size_from_id
            if ('/size_from_id' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::getSizeFromId',  '_route' => 'size_from_id',);
            }

        }

        // promotion
        if (0 === strpos($pathinfo, '/promotion') && preg_match('#^/promotion/(?P<id>[^/]++)/(?P<qte>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotion')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::getPricePromotion',));
        }

        // delete_item_from_cart
        if (0 === strpos($pathinfo, '/delete_item_from_cart') && preg_match('#^/delete_item_from_cart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_item_from_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::supprimerAction',));
        }

        // verificationCoupon
        if ('/verificationCoupon' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::verificationCoupon',  '_route' => 'verificationCoupon',);
        }

        // executeCoupon
        if ('/executeCoupon' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::executeCoupon',  '_route' => 'executeCoupon',);
        }

        // delete_size_from_cart
        if (0 === strpos($pathinfo, '/delete_size_from_cart') && preg_match('#^/delete_size_from_cart/(?P<id>[^/]++)/(?P<sizeid>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_size_from_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::supprimersizeAction',));
        }

        if (0 === strpos($pathinfo, '/add_')) {
            // add_favoris
            if (0 === strpos($pathinfo, '/add_favoris') && preg_match('#^/add_favoris/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_favoris')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::addfavorisAction',));
            }

            // add_item_to_cart
            if (0 === strpos($pathinfo, '/add_item_to_cart') && preg_match('#^/add_item_to_cart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_item_to_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::ajouterAction',));
            }

        }

        // delete_quantity_to_cart
        if (0 === strpos($pathinfo, '/delete_quantity_to_cart') && preg_match('#^/delete_quantity_to_cart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_quantity_to_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::quantiydeleteAction',));
        }

        if (0 === strpos($pathinfo, '/add_')) {
            // add_quantity_to_cart
            if (0 === strpos($pathinfo, '/add_quantity_to_cart') && preg_match('#^/add_quantity_to_cart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_quantity_to_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::quantiyaddAction',));
            }

            // add_many_quantity_to_cart
            if (0 === strpos($pathinfo, '/add_many_quantity_to_cart') && preg_match('#^/add_many_quantity_to_cart/(?P<id>[^/]++)/(?P<qte>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_many_quantity_to_cart')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::quantiyaddManyAction',));
            }

            // add_quantity_to_cart_with_size
            if (0 === strpos($pathinfo, '/add_quantity_to_cart_with_size') && preg_match('#^/add_quantity_to_cart_with_size/(?P<id>[^/]++)/(?P<sizeid>[^/]++)/(?P<qte>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_quantity_to_cart_with_size')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::addtocartwithsizeAction',));
            }

        }

        // update_cart
        if ('/update_cart' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::updateAction',  '_route' => 'update_cart',);
        }

        // panier
        if ('/panier' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
        }

        // deleteAdresse
        if (0 === strpos($pathinfo, '/deleteAdresse') && preg_match('#^/deleteAdresse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteAdresse')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::adresseSuppressionAction',));
        }

        // verification_panier
        if ('/verification_panier' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::verifPanierAction',  '_route' => 'verification_panier',);
        }

        // livraison
        if ('/livraison' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
        }

        // modereception
        if ('/modereception' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::modereceptionAction',  '_route' => 'modereception',);
        }

        if (0 === strpos($pathinfo, '/validationAdresse')) {
            // validationAdresse
            if ('/validationAdresse' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::validationAction',  '_route' => 'validationAdresse',);
            }

            // validationAdresseLivraison
            if ('/validationAdresseLivraison' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::validationLivraisonAction',  '_route' => 'validationAdresseLivraison',);
            }

        }

        // delegations
        if (0 === strpos($pathinfo, '/delegations') && preg_match('#^/delegations/(?P<cp>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delegations')), array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::delegationsAction',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            // payement_commande
            if ('/payment' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\PanierController::PayementCommandeAction',  '_route' => 'payement_commande',);
            }

            if (0 === strpos($pathinfo, '/pro')) {
                if (0 === strpos($pathinfo, '/produit')) {
                    // list_produit
                    if ('/produit' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_list_produit;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'list_produit');
                        }

                        return array (  '_controller' => 'FrontendBundle\\Controller\\ProduitController::indexAction',  '_route' => 'list_produit',);
                    }
                    not_list_produit:

                    // showproduit
                    if (preg_match('#^/produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'showproduit')), array (  '_controller' => 'FrontendBundle\\Controller\\ProduitController::showAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/profile')) {
                    // compte
                    if ('/profile' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_compte;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'compte');
                        }

                        return array (  '_controller' => 'FrontendBundle\\Controller\\UserController::indexAction',  '_route' => 'compte',);
                    }
                    not_compte:

                    if (0 === strpos($pathinfo, '/profile/fa')) {
                        // favoris
                        if ('/profile/favoris' === $pathinfo) {
                            return array (  '_controller' => 'FrontendBundle\\Controller\\UserController::favorisAction',  '_route' => 'favoris',);
                        }

                        if (0 === strpos($pathinfo, '/profile/facture')) {
                            // facture
                            if ('/profile/facture' === $pathinfo) {
                                return array (  '_controller' => 'FrontendBundle\\Controller\\UserController::factureAction',  '_route' => 'facture',);
                            }

                            // facture_detail
                            if (preg_match('#^/profile/facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_detail')), array (  '_controller' => 'FrontendBundle\\Controller\\UserController::factureDetailAction',));
                            }

                        }

                    }

                    // profile_adresse
                    if ('/profile/adresse' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\UserController::adresseAction',  '_route' => 'profile_adresse',);
                    }

                    // facturepdf
                    if (0 === strpos($pathinfo, '/profile/facturepdf') && preg_match('#^/profile/facturepdf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturepdf')), array (  '_controller' => 'FrontendBundle\\Controller\\UserController::facturesPDFAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FrontendBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FrontendBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FrontendBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FrontendBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/generate-captcha') && preg_match('#^/generate\\-captcha/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_profile_admin
            if ('/log_back_end/profil' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_admin',);
            }

            // logout_user
            if ('/logoutUser' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout_user',);
            }

            if (0 === strpos($pathinfo, '/log_back_end/log')) {
                if (0 === strpos($pathinfo, '/log_back_end/login')) {
                    // admin_login
                    if ('/log_back_end/login' === $pathinfo) {
                        return array (  '_controller' => 'BackendBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
                    }

                    // admin_login_check
                    if ('/log_back_end/login_check' === $pathinfo) {
                        return array (  '_controller' => 'BackendBundle\\Controller\\SecurityController::log_back_endAction',  '_route' => 'admin_login_check',);
                    }

                }

                // admin_logout
                if ('/log_back_end/logout' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'admin_logout',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
