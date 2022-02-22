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
        '/evenements/front' => [[['_route' => 'evenements_front', '_controller' => 'App\\Controller\\EvenementsController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/evenements' => [[['_route' => 'evenements_index', '_controller' => 'App\\Controller\\EvenementsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenements/new' => [[['_route' => 'evenements_new', '_controller' => 'App\\Controller\\EvenementsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/commentaire/(?'
                    .'|([^/]++)/edit/([^/]++)(*:207)'
                    .'|delete/([^/]++)/([^/]++)(*:239)'
                .')'
                .'|/evenements/(?'
                    .'|details/([^/]++)(*:279)'
                    .'|([^/]++)(?'
                        .'|(*:298)'
                        .'|/edit(*:311)'
                    .')'
                    .'|delete/([^/]++)(*:335)'
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
        207 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id', 'ide'], null, null, false, true, null]],
        239 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['ide', 'idc'], null, null, false, true, null]],
        279 => [[['_route' => 'evenements_details', '_controller' => 'App\\Controller\\EvenementsController::indexDetails'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'evenements_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'evenements_edit', '_controller' => 'App\\Controller\\EvenementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [
            [['_route' => 'evenements_delete', '_controller' => 'App\\Controller\\EvenementsController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
