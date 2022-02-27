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
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/catFront' => [[['_route' => 'categorie_front', '_controller' => 'App\\Controller\\CategorieController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/nouveau' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contactr' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index_contact'], null, null, null, false, false, null]],
        '/Front' => [[['_route' => 'Front', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ProductController::btn_home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ProductController::btn_about'], null, null, null, false, false, null]],
        '/feature' => [[['_route' => 'feature', '_controller' => 'App\\Controller\\ProductController::btn_feature'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\ProductController::btn_team'], null, null, null, false, false, null]],
        '/details_menu' => [[['_route' => 'details_menu', '_controller' => 'App\\Controller\\ProductController::btn_details_menu'], null, null, null, false, false, null]],
        '/list_restaurant' => [[['_route' => 'list_restaurant', '_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'restaurant', '_controller' => 'App\\Controller\\ProductController::btn_restaurant'], null, null, null, false, false, null]],
        '/produitDma9' => [[['_route' => 'produitDma9', '_controller' => 'App\\Controller\\ProductController::btn_produitDma9'], null, null, null, false, false, null]],
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
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/produitsFront' => [[['_route' => 'produit_front', '_controller' => 'App\\Controller\\ProduitController::index_front'], null, null, null, false, false, null]],
        '/produit/nouveau' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/listjson' => [[['_route' => 'produit_json', '_controller' => 'App\\Controller\\ProduitController::test_json'], null, null, null, false, false, null]],
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
                .'|/categorie/([^/]++)(?'
                    .'|(*:191)'
                    .'|/modifier(*:208)'
                    .'|(*:216)'
                .')'
                .'|/produit/(?'
                    .'|showProduit/([^/]++)(*:257)'
                    .'|produits/([^/]++)(*:282)'
                    .'|([^/]++)(?'
                        .'|(*:301)'
                        .'|/modifier(*:318)'
                        .'|(*:326)'
                    .')'
                .')'
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
        191 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        257 => [[['_route' => 'showProduit', '_controller' => 'App\\Controller\\ProduitController::showProduit'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'showProduitByCategory', '_controller' => 'App\\Controller\\ProduitController::showProduitByCategory'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [
            [['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
