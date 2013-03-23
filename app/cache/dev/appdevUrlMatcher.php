<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // comments
        if (rtrim($pathinfo, '/') === '/comments') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comments');
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments',);
        }

        // comments_show
        if (0 === strpos($pathinfo, '/comments') && preg_match('#^/comments/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::showAction',)), array('_route' => 'comments_show'));
        }

        // comments_new
        if ($pathinfo === '/comments/new') {
            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments_new',);
        }

        // comments_create
        if ($pathinfo === '/comments/create') {
            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::createAction',  '_route' => 'comments_create',);
        }

        // comments_edit
        if (0 === strpos($pathinfo, '/comments') && preg_match('#^/comments/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::editAction',)), array('_route' => 'comments_edit'));
        }

        // comments_update
        if (0 === strpos($pathinfo, '/comments') && preg_match('#^/comments/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comments_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::updateAction',)), array('_route' => 'comments_update'));
        }
        not_comments_update:

        // comments_delete
        if (0 === strpos($pathinfo, '/comments') && preg_match('#^/comments/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comments_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\CommentsController::deleteAction',)), array('_route' => 'comments_delete'));
        }
        not_comments_delete:

        // wbi_forum_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'wbi_forum_default_index'));
        }

        // domain
        if (rtrim($pathinfo, '/') === '/domain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'domain');
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::indexAction',  '_route' => 'domain',);
        }

        // domain_show
        if (0 === strpos($pathinfo, '/domain') && preg_match('#^/domain/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::showAction',)), array('_route' => 'domain_show'));
        }

        // domain_new
        if ($pathinfo === '/domain/new') {
            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::newAction',  '_route' => 'domain_new',);
        }

        // domain_create
        if ($pathinfo === '/domain/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domain_create;
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::createAction',  '_route' => 'domain_create',);
        }
        not_domain_create:

        // domain_edit
        if (0 === strpos($pathinfo, '/domain') && preg_match('#^/domain/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::editAction',)), array('_route' => 'domain_edit'));
        }

        // domain_update
        if (0 === strpos($pathinfo, '/domain') && preg_match('#^/domain/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domain_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::updateAction',)), array('_route' => 'domain_update'));
        }
        not_domain_update:

        // domain_delete
        if (0 === strpos($pathinfo, '/domain') && preg_match('#^/domain/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domain_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\DomainController::deleteAction',)), array('_route' => 'domain_delete'));
        }
        not_domain_delete:

        // posts
        if (rtrim($pathinfo, '/') === '/posts') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'posts');
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::indexAction',  '_route' => 'posts',);
        }

        // posts_show
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::showAction',)), array('_route' => 'posts_show'));
        }

        // posts_new
        if ($pathinfo === '/posts/new') {
            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::newAction',  '_route' => 'posts_new',);
        }

        // posts_create
        if ($pathinfo === '/posts/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_posts_create;
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::createAction',  '_route' => 'posts_create',);
        }
        not_posts_create:

        // posts_edit
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::editAction',)), array('_route' => 'posts_edit'));
        }

        // posts_update
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_posts_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::updateAction',)), array('_route' => 'posts_update'));
        }
        not_posts_update:

        // posts_delete
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_posts_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\PostsController::deleteAction',)), array('_route' => 'posts_delete'));
        }
        not_posts_delete:

        // underdomain
        if (rtrim($pathinfo, '/') === '/underdomain') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'underdomain');
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::indexAction',  '_route' => 'underdomain',);
        }

        // underdomain_show
        if (0 === strpos($pathinfo, '/underdomain') && preg_match('#^/underdomain/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::showAction',)), array('_route' => 'underdomain_show'));
        }

        // underdomain_new
        if ($pathinfo === '/underdomain/new') {
            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::newAction',  '_route' => 'underdomain_new',);
        }

        // underdomain_create
        if ($pathinfo === '/underdomain/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_underdomain_create;
            }

            return array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::createAction',  '_route' => 'underdomain_create',);
        }
        not_underdomain_create:

        // underdomain_edit
        if (0 === strpos($pathinfo, '/underdomain') && preg_match('#^/underdomain/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::editAction',)), array('_route' => 'underdomain_edit'));
        }

        // underdomain_update
        if (0 === strpos($pathinfo, '/underdomain') && preg_match('#^/underdomain/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_underdomain_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::updateAction',)), array('_route' => 'underdomain_update'));
        }
        not_underdomain_update:

        // underdomain_delete
        if (0 === strpos($pathinfo, '/underdomain') && preg_match('#^/underdomain/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_underdomain_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wbi\\ForumBundle\\Controller\\UnderdomainController::deleteAction',)), array('_route' => 'underdomain_delete'));
        }
        not_underdomain_delete:

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
