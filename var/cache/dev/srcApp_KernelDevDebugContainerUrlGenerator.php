<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        'admin_secteur_new' => [[], ['template' => 'admin\\secteur\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::new'], [], [['text', '/admin/secteur/new']], [], []],
        'admin_secteur_edit' => [['id'], ['template' => 'admin\\secteur\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/secteur']], [], []],
        'admin_secteur_index' => [[], ['template' => 'admin\\secteur\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::index'], [], [['text', '/admin/secteur/index']], [], []],
        'admin_secteur_show' => [['id'], ['template' => 'admin\\secteur\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/secteur']], [], []],
        'admin_secteur_delete' => [['id'], ['template' => 'admin\\secteur\\_delete_form.html.twig', '_controller' => 'App\\Controller\\Admin\\SecteurController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/secteur']], [], []],
        'admin_technicien_new' => [[], ['template' => 'admin\\technicien\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\TechnicienController::new'], [], [['text', '/admin/technicien/new']], [], []],
        'admin_technicien_edit' => [['id'], ['template' => 'admin\\technicien\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\TechnicienController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/technicien']], [], []],
        'admin_technicien_index' => [[], ['template' => 'admin\\technicien\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\TechnicienController::index'], [], [['text', '/admin/technicien/index']], [], []],
        'admin_technicien_show' => [['id'], ['template' => 'admin\\technicien\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\TechnicienController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/technicien']], [], []],
        'admin_technicien_delete' => [['id'], ['template' => 'admin\\technicien\\_delete.html.twig', '_controller' => 'App\\Controller\\Admin\\TechnicienController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/technicien']], [], []],
        'admin_entreprise_new' => [[], ['template' => 'admin\\entreprise\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\EntrepriseController::new'], [], [['text', '/admin/entreprise/new']], [], []],
        'admin_entreprise_edit' => [['id'], ['template' => 'admin\\entreprise\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\EntrepriseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/entreprise']], [], []],
        'admin_entreprise_index' => [[], ['template' => 'admin\\entreprise\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\EntrepriseController::index'], [], [['text', '/admin/entreprise/index']], [], []],
        'admin_entreprise_show' => [['id'], ['template' => 'admin\\entreprise\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\EntrepriseController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/entreprise']], [], []],
        'admin_entreprise_delete' => [['id'], ['template' => 'admin\\entreprise\\_delete.html.twig', '_controller' => 'App\\Controller\\Admin\\EntrepriseController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/entreprise']], [], []],
        'admin_materiel_new' => [[], ['template' => 'admin\\materiel\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\MaterielController::new'], [], [['text', '/admin/materiel/new']], [], []],
        'admin_materiel_edit' => [['id'], ['template' => 'admin\\materiel\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\MaterielController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/materiel']], [], []],
        'admin_materiel_index' => [[], ['template' => 'admin\\materiel\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\MaterielController::index'], [], [['text', '/admin/materiel/index']], [], []],
        'admin_materiel_show' => [['id'], ['template' => 'admin\\materiel\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\MaterielController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/materiel']], [], []],
        'admin_materiel_delete' => [['id'], ['template' => 'admin\\materiel\\_delete.html.twig', '_controller' => 'App\\Controller\\Admin\\MaterielController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/materiel']], [], []],
        'admin_intervention_new' => [[], ['template' => 'admin\\intervention\\new.html.twig', '_controller' => 'App\\Controller\\Admin\\InterventionController::new'], [], [['text', '/admin/intervention/new']], [], []],
        'admin_intervention_edit' => [['id'], ['template' => 'admin\\intervention\\edit.html.twig', '_controller' => 'App\\Controller\\Admin\\InterventionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/intervention']], [], []],
        'admin_intervention_index' => [[], ['template' => 'admin\\intervention\\index.html.twig', '_controller' => 'App\\Controller\\Admin\\InterventionController::index'], [], [['text', '/admin/intervention/index']], [], []],
        'admin_intervention_show' => [['id'], ['template' => 'admin\\intervention\\show.html.twig', '_controller' => 'App\\Controller\\Admin\\InterventionController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/intervention']], [], []],
        'admin_intervention_delete' => [['id'], ['template' => 'admin\\intervention\\_delete.html.twig', '_controller' => 'App\\Controller\\Admin\\InterventionController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/intervention']], [], []],
        'demande_nouveau' => [[], ['template' => 'visitor\\demande\\new.html.twig', '_controller' => 'App\\Controller\\Visitor\\DemandeController::new'], [], [['text', '/demande/new']], [], []],
        'demande_edit' => [['id'], ['template' => 'visitor\\demande\\edit.html.twig', '_controller' => 'App\\Controller\\Visitor\\DemandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/demande']], [], []],
        'demande_index' => [[], ['template' => 'visitor\\demande\\index.html.twig', '_controller' => 'App\\Controller\\Visitor\\DemandeController::index'], [], [['text', '/demande/index']], [], []],
        'demande_show' => [[], ['template' => 'visitor\\demande\\show.html.twig', '_controller' => 'App\\Controller\\Visitor\\DemandeController::show'], [], [['text', '/demande/show']], [], []],
        'demande_delete' => [['id'], ['template' => 'visitor\\demande\\_delete.html.twig', '_controller' => 'App\\Controller\\Visitor\\DemandeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/demande']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
