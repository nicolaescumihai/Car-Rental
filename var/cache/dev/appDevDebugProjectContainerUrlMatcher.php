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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        elseif (0 === strpos($pathinfo, '/car')) {
            // car_index
            if ('/car' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_car_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\CarController::indexAction',  '_route' => 'car_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'car_index'));
                }

                return $ret;
            }
            not_car_index:

            // car_new
            if ('/car/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_car_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CarController::newAction',  '_route' => 'car_new',);
            }
            not_car_new:

            // car_show
            if (preg_match('#^/car/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_car_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_show')), array (  '_controller' => 'AppBundle\\Controller\\CarController::showAction',));
            }
            not_car_show:

            // car_edit
            if (preg_match('#^/car/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_car_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_edit')), array (  '_controller' => 'AppBundle\\Controller\\CarController::editAction',));
            }
            not_car_edit:

            // car_delete
            if (preg_match('#^/car/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_car_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_delete')), array (  '_controller' => 'AppBundle\\Controller\\CarController::deleteAction',));
            }
            not_car_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/extras')) {
            // extras_index
            if ('/extras' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_extras_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::indexAction',  '_route' => 'extras_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'extras_index'));
                }

                return $ret;
            }
            not_extras_index:

            // extras_new
            if ('/extras/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_extras_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::newAction',  '_route' => 'extras_new',);
            }
            not_extras_new:

            // extras_show
            if (preg_match('#^/extras/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_extras_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_show')), array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::showAction',));
            }
            not_extras_show:

            // extras_edit
            if (preg_match('#^/extras/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_extras_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_edit')), array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::editAction',));
            }
            not_extras_edit:

            // extras_delete
            if (preg_match('#^/extras/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_extras_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'extras_delete')), array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::deleteAction',));
            }
            not_extras_delete:

        }

        elseif (0 === strpos($pathinfo, '/orders')) {
            // orders_index
            if ('/orders' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_orders_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\OrdersController::indexAction',  '_route' => 'orders_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'orders_index'));
                }

                return $ret;
            }
            not_orders_index:

            if (0 === strpos($pathinfo, '/orders/new')) {
                // orders_new
                if (preg_match('#^/orders/new/(?P<carId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_orders_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_new')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::newAction',));
                }
                not_orders_new:

                // orders_new2
                if (preg_match('#^/orders/new/(?P<orderId>[^/]++)/(?P<extraId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_orders_new2;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_new2')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::newAction2',));
                }
                not_orders_new2:

            }

            // app_orders_finishpay
            if (0 === strpos($pathinfo, '/orders/finish') && preg_match('#^/orders/finish/(?P<orderId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_orders_finishpay')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::finishPay',));
            }

            // orders_show
            if (preg_match('#^/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_orders_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_show')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::showAction',));
            }
            not_orders_show:

            // orders_edit
            if (preg_match('#^/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_orders_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_edit')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::editAction',));
            }
            not_orders_edit:

            // orders_delete
            if (preg_match('#^/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_orders_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_delete')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::deleteAction',));
            }
            not_orders_delete:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        elseif (0 === strpos($pathinfo, '/logout')) {
            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
