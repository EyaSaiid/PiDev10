<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/Ajoutercommande' => [[['_route' => 'Ajoutercommande', '_controller' => 'App\\Controller\\CommandeController::AjouterCommande'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livraison/new' => [[['_route' => 'livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::getPanier'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/ajout' => [[['_route' => 'panier_ajout', '_controller' => 'App\\Controller\\PanierController::ajoutauPanier'], null, null, null, false, false, null]],
        '/panier/remove}' => [[['_route' => 'remove_all', '_controller' => 'App\\Controller\\PanierController::deleteAll'], null, null, null, false, false, null]],
        '/panier/plus' => [[['_route' => 'panier_plus', '_controller' => 'App\\Controller\\PanierController::plusPanier'], null, null, null, false, false, null]],
        '/panier/minus' => [[['_route' => 'panier_minus', '_controller' => 'App\\Controller\\PanierController::minusPanier'], null, null, null, false, false, null]],
        '/Front' => [[['_route' => 'Front', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ProductController::btn_home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ProductController::btn_contact'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ProductController::btn_about'], null, null, null, false, false, null]],
        '/feature' => [[['_route' => 'feature', '_controller' => 'App\\Controller\\ProductController::btn_feature'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\ProductController::btn_team'], null, null, null, false, false, null]],
        '/details_menu' => [[['_route' => 'details_menu', '_controller' => 'App\\Controller\\ProductController::btn_details_menu'], null, null, null, false, false, null]],
        '/list_restaurant' => [[['_route' => 'list_restaurant', '_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'restaurant', '_controller' => 'App\\Controller\\ProductController::btn_restaurant'], null, null, null, false, false, null]],
        '/booking' => [[['_route' => 'booking', '_controller' => 'App\\Controller\\ProductController::btn_booking'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\ProductController::index2'], null, null, null, false, false, null]],
        '/GestionUser' => [[['_route' => 'GestionUser', '_controller' => 'App\\Controller\\ProductController::btn_GestionUser'], null, null, null, false, false, null]],
        '/GestionRestaurant' => [[['_route' => 'GestionRestaurant', '_controller' => 'App\\Controller\\ProductController::btn_GestionResaturant'], null, null, null, false, false, null]],
        '/GestionOffreTravail' => [[['_route' => 'GestionOffreTravail', '_controller' => 'App\\Controller\\ProductController::btn_GestionOffreTravail'], null, null, null, false, false, null]],
        '/GestionProduit' => [[['_route' => 'GestionProduit', '_controller' => 'App\\Controller\\ProductController::btn_GestionProduit'], null, null, null, false, false, null]],
        '/GestionEvenement' => [[['_route' => 'GestionEvenement', '_controller' => 'App\\Controller\\ProductController::btn_GestionEvenement'], null, null, null, false, false, null]],
        '/GestionMenu' => [[['_route' => 'GestionMenu', '_controller' => 'App\\Controller\\ProductController::btn_GestionMenu'], null, null, null, false, false, null]],
        '/GestionCommande' => [[['_route' => 'GestionCommande', '_controller' => 'App\\Controller\\ProductController::btn_GestionCommande'], null, null, null, false, false, null]],
        '/GestionArtiste' => [[['_route' => 'GestionArtiste', '_controller' => 'App\\Controller\\ProductController::btn_GestionArtiste'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/fetchProduits' => [[['_route' => 'fetchProduits', '_controller' => 'App\\Controller\\ProduitController::fetchProduits'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ListByPoroduit/([^/]++)(*:193)'
                .'|/livraison/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/panier/remove/([^/]++)(*:276)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'ListByProduit', '_controller' => 'App\\Controller\\CommandeController::ListProduitByCommande'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        276 => [
            [['_route' => 'cart_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
