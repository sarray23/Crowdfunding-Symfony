<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            // esprit_back_office_homepage
            if (0 === strpos($pathinfo, '/back/hello') && preg_match('#^/back/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_homepage')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\DefaultController::indexAction',));
            }

            // esprit_back_office_security_login
            if ($pathinfo === '/back/connect') {
                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'esprit_back_office_security_login',);
            }

            if (0 === strpos($pathinfo, '/back/log')) {
                // esprit_back_office_security_check
                if ($pathinfo === '/back/login-check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_esprit_back_office_security_check;
                    }

                    return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\SecurityController::checkAction',  '_route' => 'esprit_back_office_security_check',);
                }
                not_esprit_back_office_security_check:

                // esprit_back_office_security_logout
                if ($pathinfo === '/back/logout') {
                    return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'esprit_back_office_security_logout',);
                }

            }

            // esprit_backofficebundle_home
            if (rtrim($pathinfo, '/') === '/back') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_esprit_backofficebundle_home;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_backofficebundle_home');
                }

                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_backofficebundle_home',);
            }
            not_esprit_backofficebundle_home:

            // esprit_back_office_list
            if ($pathinfo === '/back/list') {
                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\UserController::listAction',  '_route' => 'esprit_back_office_list',);
            }

            if (0 === strpos($pathinfo, '/back/s')) {
                if (0 === strpos($pathinfo, '/back/stat')) {
                    // esprit_back_office_stat
                    if ($pathinfo === '/back/stat') {
                        return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\StatisticController::chartAction',  '_route' => 'esprit_back_office_stat',);
                    }

                    // esprit_back_office_stat_idee
                    if ($pathinfo === '/back/statidee') {
                        return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\StatisticController::charttAction',  '_route' => 'esprit_back_office_stat_idee',);
                    }

                    // esprit_back_office_stat_vote
                    if ($pathinfo === '/back/statvote') {
                        return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\StatisticController::chartvoteAction',  '_route' => 'esprit_back_office_stat_vote',);
                    }

                }

                // esprit_back_office_sup
                if (0 === strpos($pathinfo, '/back/sup') && preg_match('#^/back/sup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_sup')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\UserController::deleteAction',));
                }

            }

            // esprit_back_office_list_idee
            if ($pathinfo === '/back/idee') {
                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Idee2Controller::listAction',  '_route' => 'esprit_back_office_list_idee',);
            }

            // esprit_back_office_edit_idee
            if (0 === strpos($pathinfo, '/back/editidee') && preg_match('#^/back/editidee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_edit_idee')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::updateBackAction',));
            }

            // esprit_back_office_desc_idee
            if ($pathinfo === '/back/descidee') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::dscBackAction',  '_route' => 'esprit_back_office_desc_idee',);
            }

            if (0 === strpos($pathinfo, '/back/a')) {
                // esprit_back_office_asc_idee
                if ($pathinfo === '/back/ascidee') {
                    return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::ascBackAction',  '_route' => 'esprit_back_office_asc_idee',);
                }

                // esprit_back_office_accepter
                if (0 === strpos($pathinfo, '/back/accepter') && preg_match('#^/back/accepter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_accepter')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Idee2Controller::accepterAction',));
                }

            }

            // esprit_back_office_refuser
            if (0 === strpos($pathinfo, '/back/refuser') && preg_match('#^/back/refuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_refuser')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Idee2Controller::refuserAction',));
            }

            // esprit_back_office_block
            if (0 === strpos($pathinfo, '/back/block') && preg_match('#^/back/block/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_block')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\UserController::blockAction',));
            }

            // esprit_back_office_activer
            if (0 === strpos($pathinfo, '/back/activer') && preg_match('#^/back/activer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_activer')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\UserController::activerAction',));
            }

            // esprit_back_office_sup_idee
            if (0 === strpos($pathinfo, '/back/supidee') && preg_match('#^/back/supidee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_sup_idee')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Idee2Controller::deleteAction',));
            }

            // esprit_back_office_list_projet
            if ($pathinfo === '/back/projet') {
                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\ProjetController::listAction',  '_route' => 'esprit_back_office_list_projet',);
            }

            // esprit_back_office_accepter_projet
            if (0 === strpos($pathinfo, '/back/accepterprojet') && preg_match('#^/back/accepterprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_accepter_projet')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\ProjetController::accepterAction',));
            }

            // esprit_back_office_refuser_projet
            if (0 === strpos($pathinfo, '/back/refuserprojet') && preg_match('#^/back/refuserprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_refuser_projet')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\ProjetController::refuserAction',));
            }

            if (0 === strpos($pathinfo, '/back/s')) {
                // esprit_back_office_sup_projet
                if (0 === strpos($pathinfo, '/back/supprojet') && preg_match('#^/back/supprojet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_sup_projet')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\ProjetController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/back/stat')) {
                    // esprit_application_stat
                    if (rtrim($pathinfo, '/') === '/back/statistiques') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_stat');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::startAction',  '_route' => 'esprit_application_stat',);
                    }

                    // esprit_application_statLine
                    if (rtrim($pathinfo, '/') === '/back/statline') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_statLine');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::lineCharAction',  '_route' => 'esprit_application_statLine',);
                    }

                    // esprit_application_statUg
                    if (rtrim($pathinfo, '/') === '/back/statug') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_statUg');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::unifiedGraphAction',  '_route' => 'esprit_application_statUg',);
                    }

                    // esprit_application_statbar
                    if (rtrim($pathinfo, '/') === '/back/statBar') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_statbar');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::barChartAction',  '_route' => 'esprit_application_statbar',);
                    }

                    // esprit_application_stathisto
                    if (rtrim($pathinfo, '/') === '/back/stathisto') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_stathisto');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::chartHistogrammeAction',  '_route' => 'esprit_application_stathisto',);
                    }

                    // esprit_application_statPie
                    if (rtrim($pathinfo, '/') === '/back/statPie') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'esprit_application_statPie');
                        }

                        return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\StatController::chartPieAction',  '_route' => 'esprit_application_statPie',);
                    }

                }

            }

            // esprit_application_listCompetences
            if (rtrim($pathinfo, '/') === '/back/competences') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_application_listCompetences');
                }

                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::listeAction',  '_route' => 'esprit_application_listCompetences',);
            }

            // esprit_application_update_competence
            if (0 === strpos($pathinfo, '/back/updateComp') && preg_match('#^/back/updateComp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_update_competence')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::updateAction',));
            }

            // esprit_application_delete_competence
            if (0 === strpos($pathinfo, '/back/deleteComp') && preg_match('#^/back/deleteComp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_delete_competence')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::deleteAction',));
            }

            // esprit_application_ajout_competence
            if (rtrim($pathinfo, '/') === '/back/addComp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_application_ajout_competence');
                }

                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::ajoutAction',  '_route' => 'esprit_application_ajout_competence',);
            }

            // esprit_back_office_list_reclamation
            if ($pathinfo === '/back/listrec') {
                return array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Reclamation2Controller::listAction',  '_route' => 'esprit_back_office_list_reclamation',);
            }

            // esprit_back_office_accepter_reclamation
            if (0 === strpos($pathinfo, '/back/accepterrec') && preg_match('#^/back/accepterrec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_accepter_reclamation')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Reclamation2Controller::accepterAction',));
            }

            // esprit_back_office_supprimer_reclamation
            if (0 === strpos($pathinfo, '/back/supprimerrec') && preg_match('#^/back/supprimerrec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_back_office_supprimer_reclamation')), array (  '_controller' => 'Esprit\\BackOfficeBundle\\Controller\\Reclamation2Controller::supprimerAction',));
            }

        }

        // dcs_rating_add_vote
        if (0 === strpos($pathinfo, '/vote/add') && preg_match('#^/vote/add/(?P<id>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dcs_rating_add_vote')), array (  '_controller' => 'DCS\\RatingBundle\\Controller\\RatingController::addVoteAction',));
        }

        if (0 === strpos($pathinfo, '/hel')) {
            // esprit_front_office_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_office_homepage')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\DefaultController::indexAction',));
            }

            // esprit_front_office_help
            if ($pathinfo === '/help') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\helpController::indexAction',  '_route' => 'esprit_front_office_help',);
            }

        }

        // esprit_front_office_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::contacterAdminAction',  '_route' => 'esprit_front_office_contact',);
        }

        if (0 === strpos($pathinfo, '/idee')) {
            // esprit_ideeLayout
            if ($pathinfo === '/idee') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::testAction',  '_route' => 'esprit_ideeLayout',);
            }

            // esprit_application_afficher_idee
            if (rtrim($pathinfo, '/') === '/ideeaff') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_application_afficher_idee');
                }

                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::afficherAction',  '_route' => 'esprit_application_afficher_idee',);
            }

        }

        // esprit_application_rechercher_idee
        if ($pathinfo === '/rech') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::rechAction',  '_route' => 'esprit_application_rechercher_idee',);
        }

        // esprit_application_add_idee
        if ($pathinfo === '/addidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::ajout2Action',  '_route' => 'esprit_application_add_idee',);
        }

        // esprit_application_type_idee
        if ($pathinfo === '/typeidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::rechTypeAction',  '_route' => 'esprit_application_type_idee',);
        }

        // esprit_application_mes_idee
        if ($pathinfo === '/mesidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::afficher2Action',  '_route' => 'esprit_application_mes_idee',);
        }

        // esprit_application_tri_idee
        if ($pathinfo === '/triidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::triAction',  '_route' => 'esprit_application_tri_idee',);
        }

        // esprit_application_vote_idee
        if ($pathinfo === '/voteidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::triAction',  '_route' => 'esprit_application_vote_idee',);
        }

        // esprit_application_oneidee_idee
        if ($pathinfo === '/oneidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::oneIdeeAction',  '_route' => 'esprit_application_oneidee_idee',);
        }

        // esprit_application_update_idee
        if (0 === strpos($pathinfo, '/up') && preg_match('#^/up/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_update_idee')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::updateAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            // esprit_application_delete_idee
            if (0 === strpos($pathinfo, '/del') && preg_match('#^/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_delete_idee')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::deleteAction',));
            }

            // esprit_application_trivotedesc_idee
            if ($pathinfo === '/descidee') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::triVoteDESCAction',  '_route' => 'esprit_application_trivotedesc_idee',);
            }

        }

        // esprit_application_trivoteasc_idee
        if ($pathinfo === '/ascidee') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::triVoteASCAction',  '_route' => 'esprit_application_trivoteasc_idee',);
        }

        // esprit_application_list_expert
        if ($pathinfo === '/experts') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ExpertController::listAction',  '_route' => 'esprit_application_list_expert',);
        }

        // esprit_application_post_expert
        if (0 === strpos($pathinfo, '/postuler') && preg_match('#^/postuler/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_post_expert')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::postulerAction',));
        }

        if (0 === strpos($pathinfo, '/experts')) {
            // esprit_application_tri_expert_asc
            if ($pathinfo === '/expertsasc') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ExpertController::listAscAction',  '_route' => 'esprit_application_tri_expert_asc',);
            }

            // esprit_application_tri_expert_dsc
            if ($pathinfo === '/expertsdsc') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ExpertController::listDscAction',  '_route' => 'esprit_application_tri_expert_dsc',);
            }

        }

        // esprit_application_tri_expert
        if ($pathinfo === '/triexpert') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ExpertController::listTriAction',  '_route' => 'esprit_application_tri_expert',);
        }

        // esprit_application_mail
        if (0 === strpos($pathinfo, '/mail') && preg_match('#^/mail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_mail')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\IdeeController::contacterAction',));
        }

        // esprit_ajout_reclamation
        if ($pathinfo === '/ajoutrec') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::ajoutAction',  '_route' => 'esprit_ajout_reclamation',);
        }

        if (0 === strpos($pathinfo, '/listrec')) {
            // esprit_list_reclamation
            if ($pathinfo === '/listrec') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::listAction',  '_route' => 'esprit_list_reclamation',);
            }

            // esprit_list1_reclamation
            if ($pathinfo === '/listrec1') {
                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::list1Action',  '_route' => 'esprit_list1_reclamation',);
            }

        }

        // esprit_modifier_reclamation
        if (0 === strpos($pathinfo, '/modifierrec') && preg_match('#^/modifierrec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_modifier_reclamation')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::modifierAction',));
        }

        // esprit_supprimer_reclamation
        if (0 === strpos($pathinfo, '/supprimerrec') && preg_match('#^/supprimerrec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_supprimer_reclamation')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::supprimerAction',));
        }

        // esprit_rechercher_reclamation
        if ($pathinfo === '/rechercherrec') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ReclamationController::rechercherAction',  '_route' => 'esprit_rechercher_reclamation',);
        }

        // esprit_application_probleme
        if (rtrim($pathinfo, '/') === '/probleme') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_application_probleme');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeController::problemeAction',  '_route' => 'esprit_application_probleme',);
        }

        // esprit_application_listeprobleme
        if (rtrim($pathinfo, '/') === '/lstprobleme') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_application_listeprobleme');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeController::listeprobAction',  '_route' => 'esprit_application_listeprobleme',);
        }

        // esprit_application_deleteprobleme
        if (0 === strpos($pathinfo, '/deleteProb') && preg_match('#^/deleteProb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_deleteprobleme')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeController::deleteAction',));
        }

        // esprit_application_updateprobleme
        if (0 === strpos($pathinfo, '/updateProb') && preg_match('#^/updateProb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_updateprobleme')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeController::updateAction',));
        }

        if (0 === strpos($pathinfo, '/listProbSol')) {
            // esprit_application_ProbSol
            if (rtrim($pathinfo, '/') === '/listProbSol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_application_ProbSol');
                }

                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeSolutionController::affichAction',  '_route' => 'esprit_application_ProbSol',);
            }

            // esprit_application_ProbSoln
            if (rtrim($pathinfo, '/') === '/listProbSol1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'esprit_application_ProbSoln');
                }

                return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeSolutionController::affich1Action',  '_route' => 'esprit_application_ProbSoln',);
            }

        }

        // esprit_application_SingleProb
        if (0 === strpos($pathinfo, '/singleProbSol') && preg_match('#^/singleProbSol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_SingleProb')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProblemeSolutionController::affichOneAction',));
        }

        // esprit_application_ProfilExpert
        if ($pathinfo === '/profilExpert') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::CompetenceAction',  '_route' => 'esprit_application_ProfilExpert',);
        }

        // esprit_application_funding
        if (0 === strpos($pathinfo, '/funding') && preg_match('#^/funding/(?P<idprojet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_application_funding')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\FinancementController::fundAction',));
        }

        // esprit_application_rech_parcomp
        if ($pathinfo === '/usersByComp') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\CompetenceController::rechercheAction',  '_route' => 'esprit_application_rech_parcomp',);
        }

        // esprit_front_office_ajout
        if (rtrim($pathinfo, '/') === '/Ajoutprojet') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_ajout');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::AjouterProjetAction',  '_route' => 'esprit_front_office_ajout',);
        }

        // esprit_front_office_liste
        if (rtrim($pathinfo, '/') === '/listeprojet') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_liste');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::LiseProjetAction',  '_route' => 'esprit_front_office_liste',);
        }

        // esprit_front_office_tableau
        if (rtrim($pathinfo, '/') === '/tableauprojet') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_tableau');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::Lise1ProjetAction',  '_route' => 'esprit_front_office_tableau',);
        }

        // esprit_front_office_delete
        if (0 === strpos($pathinfo, '/deleteprojet') && preg_match('#^/deleteprojet(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_delete');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_office_delete')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::DeleteAction',));
        }

        // esprit_front_office_update
        if (0 === strpos($pathinfo, '/updateprojet') && preg_match('#^/updateprojet(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_update');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_office_update')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::UpdateAction',));
        }

        // esprit_front_office_rechercheP
        if (rtrim($pathinfo, '/') === '/Rechercheprojet') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_rechercheP');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::RechercheProjetAction',  '_route' => 'esprit_front_office_rechercheP',);
        }

        // esprit_front_office_myProject
        if (rtrim($pathinfo, '/') === '/myProjects') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_myProject');
            }

            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::myProjetsAction',  '_route' => 'esprit_front_office_myProject',);
        }

        // esprit_front_office_detail
        if (0 === strpos($pathinfo, '/detailP') && preg_match('#^/detailP(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_front_office_detail');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_office_detail')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ProjetController::detailPAction',));
        }

        // esprit_front_office_forum_homepage
        if ($pathinfo === '/addtopic') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ForumController::addtopicAction',  '_route' => 'esprit_front_office_forum_homepage',);
        }

        // esprit_front_office_forum_homepage_topics
        if ($pathinfo === '/homepageforum') {
            return array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ForumController::viewtopicsAction',  '_route' => 'esprit_front_office_forum_homepage_topics',);
        }

        if (0 === strpos($pathinfo, '/comment')) {
            // esprit_front_office_forum_homepage_commenttopics
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_office_forum_homepage_commenttopics')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ForumController::viewtopicAction',));
            }

            // fesprit_front_office_orum_homepage_add_response
            if (0 === strpos($pathinfo, '/comment2') && preg_match('#^/comment2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fesprit_front_office_orum_homepage_add_response')), array (  '_controller' => 'Esprit\\FrontOfficeBundle\\Controller\\ForumController::addcommentAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
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
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
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
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _imagine_my_thumb
        if (0 === strpos($pathinfo, '/media/cache') && preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__imagine_my_thumb;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'my_thumb',));
        }
        not__imagine_my_thumb:

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

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
