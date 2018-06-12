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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
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

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/problem')) {
            // problem_index
            if ('/problem' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ProblemBundle\\Controller\\ProblemController::indexAction',  '_route' => 'problem_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_problem_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'problem_index'));
                }

                return $ret;
            }
            not_problem_index:

            // problem_show
            if (preg_match('#^/problem/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'problem_show')), array (  '_controller' => 'ProblemBundle\\Controller\\ProblemController::showAction',));
            }

        }

        // userdetail
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'userdetail')), array (  '_controller' => 'UserBundle\\Controller\\UserController::userDetailAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'HomePageBundle\\Controller\\HomePageController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/authentication')) {
                if (0 === strpos($pathinfo, '/authentication/login')) {
                    // fos_user_security_login
                    if ('/authentication/login' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_security_login;
                        }

                        return $ret;
                    }
                    not_fos_user_security_login:

                    // fos_user_security_check
                    if ('/authentication/login_check' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_fos_user_security_check;
                        }

                        return $ret;
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ('/authentication/logout' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_logout;
                    }

                    return $ret;
                }
                not_fos_user_security_logout:

                if (0 === strpos($pathinfo, '/authentication/profile')) {
                    // fos_user_profile_show
                    if ('/authentication/profile' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_fos_user_profile_show;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_profile_show;
                        }

                        return $ret;
                    }
                    not_fos_user_profile_show:

                    // fos_user_profile_edit
                    if ('/authentication/profile/edit' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_profile_edit;
                        }

                        return $ret;
                    }
                    not_fos_user_profile_edit:

                    // fos_user_change_password
                    if ('/authentication/profile/change-password' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_change_password;
                        }

                        return $ret;
                    }
                    not_fos_user_change_password:

                }

                elseif (0 === strpos($pathinfo, '/authentication/register')) {
                    // fos_user_registration_register
                    if ('/authentication/register' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_fos_user_registration_register;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                        }

                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_registration_register;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_register:

                    // fos_user_registration_check_email
                    if ('/authentication/register/check-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_check_email;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/authentication/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/authentication/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $ret;
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/authentication/register/confirmed' === $pathinfo) {
                            $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return $ret;
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

                elseif (0 === strpos($pathinfo, '/authentication/resetting')) {
                    // fos_user_resetting_request
                    if ('/authentication/resetting/request' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_resetting_request;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/authentication/resetting/reset') && preg_match('#^/authentication/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_reset:

                    // fos_user_resetting_send_email
                    if ('/authentication/resetting/send-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_fos_user_resetting_send_email;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ('/authentication/resetting/check-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_check_email:

                }

            }

            // problemadmin_edit
            if (0 === strpos($pathinfo, '/admin/problem/edit') && preg_match('#^/admin/problem/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'problemadmin_edit')), array (  '_controller' => 'ProblemBundle\\Controller\\ProblemAdminController::editAction',));
            }

            // problemadmin_new
            if ('/admin/problem/new' === $pathinfo) {
                return array (  '_controller' => 'ProblemBundle\\Controller\\ProblemAdminController::newAction',  '_route' => 'problemadmin_new',);
            }

            // problemapi_list
            if ('/api/problem/list' === $pathinfo) {
                return array (  '_controller' => 'ProblemBundle\\Controller\\ProblemAPIController::listAction',  '_route' => 'problemapi_list',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
