<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/findAll']], [], []],
    'categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], []],
    'categorie_show' => [['id_categorie'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id_categorie'], ['text', '/categorie']], [], []],
    'categorie_edit' => [['id_categorie'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_categorie'], ['text', '/categorie']], [], []],
    'categorie_delete' => [['id_categorie'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id_categorie'], ['text', '/categorie']], [], []],
    'Front' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/Front']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_home'], [], [['text', '/']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_contact'], [], [['text', '/contact']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_about'], [], [['text', '/about']], [], []],
    'feature' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_feature'], [], [['text', '/feature']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_team'], [], [['text', '/team']], [], []],
    'list_restaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], [], [['text', '/list_restaurant']], [], []],
    'back' => [[], ['_controller' => 'App\\Controller\\ProductController::index2'], [], [['text', '/back']], [], []],
    'GestionUser' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionUser'], [], [['text', '/GestionUser']], [], []],
    'GestionOffreTravail' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionOffreTravail'], [], [['text', '/GestionOffreTravail']], [], []],
    'GestionProduit' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionProduit'], [], [['text', '/GestionProduit']], [], []],
    'GestionEvenement' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionEvenement'], [], [['text', '/GestionEvenement']], [], []],
    'GestionMenu' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionMenu'], [], [['text', '/GestionMenu']], [], []],
    'GestionCommande' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionCommande'], [], [['text', '/GestionCommande']], [], []],
    'GestionArtiste' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionArtiste'], [], [['text', '/GestionArtiste']], [], []],
    'produit_plat_index' => [[], ['_controller' => 'App\\Controller\\ProduitPlatController::index'], [], [['text', '/produit/plat/finAll']], [], []],
    'produit_plat_new' => [[], ['_controller' => 'App\\Controller\\ProduitPlatController::new'], [], [['text', '/produit/plat/new']], [], []],
    'stat' => [[], ['_controller' => 'App\\Controller\\ProduitPlatController::stat'], [], [['text', '/produit/plat/stat']], [], []],
    'produit_plat_show' => [['id_produitplat'], ['_controller' => 'App\\Controller\\ProduitPlatController::show'], [], [['variable', '/', '[^/]++', 'id_produitplat'], ['text', '/produit/plat']], [], []],
    'showProduitPlatCategorie' => [['id_restaurant', 'id_categorie'], ['_controller' => 'App\\Controller\\ProduitPlatController::showPDT'], [], [['variable', '/', '[^/]++', 'id_categorie'], ['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/produit/plat/showpdtCAT']], [], []],
    'produit_plat_edit' => [['id_produitplat'], ['_controller' => 'App\\Controller\\ProduitPlatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_produitplat'], ['text', '/produit/plat']], [], []],
    'produit_plat_delete' => [['id_produitplat'], ['_controller' => 'App\\Controller\\ProduitPlatController::delete'], [], [['variable', '/', '[^/]++', 'id_produitplat'], ['text', '/produit/plat']], [], []],
    'reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/findAll']], [], []],
    'statReservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::stat'], [], [['text', '/reservation/statReservation']], [], []],
    'calendar' => [[], ['_controller' => 'App\\Controller\\ReservationController::calendrier'], [], [['text', '/reservation/calendar']], [], []],
    'reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], []],
    'reservation_show' => [['id_reservation'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id_reservation'], ['text', '/reservation']], [], []],
    'reservation_edit' => [['id_reservation'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_reservation'], ['text', '/reservation']], [], []],
    'reservation_delete' => [['id_reservation'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id_reservation'], ['text', '/reservation']], [], []],
    'produit_json' => [[], ['_controller' => 'App\\Controller\\RestaurantController::ListRestaurantJson'], [], [['text', '/restaurant/listjson']], [], []],
    'restaurant_index' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index'], [], [['text', '/restaurant/findAll']], [], []],
    'restaurant_new' => [[], ['_controller' => 'App\\Controller\\RestaurantController::new'], [], [['text', '/restaurant/new']], [], []],
    'restaurant_liste' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index2'], [], [['text', '/restaurant/liste']], [], []],
    'restaurant3' => [['id_restaurant'], ['_controller' => 'App\\Controller\\RestaurantController::show3'], [], [['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/restaurant/detail']], [], []],
    'restaurant_show' => [['id_restaurant'], ['_controller' => 'App\\Controller\\RestaurantController::show'], [], [['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/restaurant']], [], []],
    'details_menu' => [['id_restaurant'], ['_controller' => 'App\\Controller\\RestaurantController::show2'], [], [['text', '/aff'], ['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/restaurant']], [], []],
    'restaurant_edit' => [['id_restaurant'], ['_controller' => 'App\\Controller\\RestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/restaurant']], [], []],
    'restaurant_delete' => [['id_restaurant'], ['_controller' => 'App\\Controller\\RestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id_restaurant'], ['text', '/restaurant']], [], []],
    'GestionRestaurant' => [[], ['_controller' => 'App\\Controller\\RestaurantController::btn_GestionRestaurant'], [], [['text', '/restaurant/back/GestionRestaurant']], [], []],
];
