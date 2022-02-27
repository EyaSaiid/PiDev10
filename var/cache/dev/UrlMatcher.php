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
        '/offre/travail' => [[['_route' => 'offre_travail_index', '_controller' => 'App\\Controller\\OffreTravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/travail/showAll' => [[['_route' => 'offre_travail_showAll', '_controller' => 'App\\Controller\\OffreTravailController::ShowAll'], null, ['GET' => 0], null, false, false, null]],
        '/offre/travail/new' => [[['_route' => 'offre_travail_new', '_controller' => 'App\\Controller\\OffreTravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/reset_pass_page' => [[['_route' => 'app_reset_password_page', '_controller' => 'App\\Controller\\SecurityController::resetPasswordPage'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/download' => [[['_route' => 'user_download', '_controller' => 'App\\Controller\\UserController::download'], null, null, null, false, false, null]],
        '/admin/stat' => [[['_route' => 'user_stat', '_controller' => 'App\\Controller\\UserController::statistic'], null, null, null, false, false, null]],
        '/admin/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/offre/travail/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/verify/email/([^/]++)(*:247)'
                .'|/reset_pass/([^/]++)(*:275)'
                .'|/admin/([^/]++)(?'
                    .'|(*:301)'
                    .'|/edit(*:314)'
                    .'|(*:322)'
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
        195 => [[['_route' => 'offre_travail_show', '_controller' => 'App\\Controller\\OffreTravailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'offre_travail_edit', '_controller' => 'App\\Controller\\OffreTravailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'offre_travail_delete', '_controller' => 'App\\Controller\\OffreTravailController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], ['token'], null, null, false, true, null]],
        275 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['reset_token'], null, null, false, true, null]],
        301 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
