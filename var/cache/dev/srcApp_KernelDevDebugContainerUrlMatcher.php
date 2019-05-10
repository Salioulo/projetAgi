<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/secteur/nouveau' => [[['_route' => 'admin_secteur_new', 'template' => 'admin\\secteur\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/secteur/index' => [[['_route' => 'admin_secteur_index', 'template' => 'admin\\secteur\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::index'], null, ['GET' => 0], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/admin/secteur/([^/]++)/(?'
                        .'|edit(*:73)'
                        .'|show(*:84)'
                        .'|delete(*:97)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            73 => [[['_route' => 'admin_secteur_edit', 'template' => 'admin\\secteur\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            84 => [[['_route' => 'admin_secteur_show', 'template' => 'admin\\secteur\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::show'], ['id'], ['GET' => 0], null, false, false, null]],
            97 => [[['_route' => 'admin_secteur_delete', 'template' => 'admin\\secteur\\_delete_form.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        ];
    }
}
