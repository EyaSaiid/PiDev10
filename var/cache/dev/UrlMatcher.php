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
        '/categorie/findAll' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Front' => [[['_route' => 'Front', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ProductController::btn_home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ProductController::btn_contact'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ProductController::btn_about'], null, null, null, false, false, null]],
        '/feature' => [[['_route' => 'feature', '_controller' => 'App\\Controller\\ProductController::btn_feature'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\ProductController::btn_team'], null, null, null, false, false, null]],
        '/list_restaurant' => [[['_route' => 'list_restaurant', '_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\ProductController::index2'], null, null, null, false, false, null]],
        '/GestionUser' => [[['_route' => 'GestionUser', '_controller' => 'App\\Controller\\ProductController::btn_GestionUser'], null, null, null, false, false, null]],
        '/GestionOffreTravail' => [[['_route' => 'GestionOffreTravail', '_controller' => 'App\\Controller\\ProductController::btn_GestionOffreTravail'], null, null, null, false, false, null]],
        '/GestionProduit' => [[['_route' => 'GestionProduit', '_controller' => 'App\\Controller\\ProductController::btn_GestionProduit'], null, null, null, false, false, null]],
        '/GestionEvenement' => [[['_route' => 'GestionEvenement', '_controller' => 'App\\Controller\\ProductController::btn_GestionEvenement'], null, null, null, false, false, null]],
        '/GestionMenu' => [[['_route' => 'GestionMenu', '_controller' => 'App\\Controller\\ProductController::btn_GestionMenu'], null, null, null, false, false, null]],
        '/GestionCommande' => [[['_route' => 'GestionCommande', '_controller' => 'App\\Controller\\ProductController::btn_GestionCommande'], null, null, null, false, false, null]],
        '/GestionArtiste' => [[['_route' => 'GestionArtiste', '_controller' => 'App\\Controller\\ProductController::btn_GestionArtiste'], null, null, null, false, false, null]],
        '/produit/plat/finAll' => [[['_route' => 'produit_plat_index', '_controller' => 'App\\Controller\\ProduitPlatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produit/plat/new' => [[['_route' => 'produit_plat_new', '_controller' => 'App\\Controller\\ProduitPlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/findAll' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant/findAll' => [[['_route' => 'restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant/liste' => [[['_route' => 'restaurant_liste', '_controller' => 'App\\Controller\\RestaurantController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant/back/GestionRestaurant' => [[['_route' => 'GestionRestaurant', '_controller' => 'App\\Controller\\RestaurantController::btn_GestionRestaurant'], null, null, null, false, false, null]],
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
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/produit/plat/(?'
                    .'|([^/]++)(*:246)'
                    .'|showpdtCAT/([^/]++)/([^/]++)(*:282)'
                    .'|([^/]++)(?'
                        .'|/edit(*:306)'
                        .'|(*:314)'
                    .')'
                .')'
                .'|/res(?'
                    .'|ervation/([^/]++)(?'
                        .'|(*:351)'
                        .'|/edit(*:364)'
                        .'|(*:372)'
                    .')'
                    .'|taurant/([^/]++)(?'
                        .'|(*:400)'
                        .'|/(?'
                            .'|aff(*:415)'
                            .'|edit(*:427)'
                        .')'
                        .'|(*:436)'
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
        191 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id_categorie'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id_categorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id_categorie'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'produit_plat_show', '_controller' => 'App\\Controller\\ProduitPlatController::show'], ['id_produitplat'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'showProduitPlatCategorie', '_controller' => 'App\\Controller\\ProduitPlatController::showPDT'], ['id_restaurant', 'id_categorie'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'produit_plat_edit', '_controller' => 'App\\Controller\\ProduitPlatController::edit'], ['id_produitplat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'produit_plat_delete', '_controller' => 'App\\Controller\\ProduitPlatController::delete'], ['id_produitplat'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        400 => [[['_route' => 'restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id_restaurant'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => 'details_menu', '_controller' => 'App\\Controller\\RestaurantController::show2'], ['id_restaurant'], ['GET' => 0], null, false, false, null]],
        427 => [[['_route' => 'restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id_restaurant'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [
            [['_route' => 'restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id_restaurant'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
