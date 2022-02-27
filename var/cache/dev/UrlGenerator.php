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
    'categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], []],
    'categorie_front' => [[], ['_controller' => 'App\\Controller\\CategorieController::indexFront'], [], [['text', '/categorie/catFront']], [], []],
    'categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/nouveau']], [], []],
    'categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index_contact'], [], [['text', '/contactr']], [], []],
    'Front' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/Front']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_home'], [], [['text', '/']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_about'], [], [['text', '/about']], [], []],
    'feature' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_feature'], [], [['text', '/feature']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_team'], [], [['text', '/team']], [], []],
    'details_menu' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_details_menu'], [], [['text', '/details_menu']], [], []],
    'list_restaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], [], [['text', '/list_restaurant']], [], []],
    'restaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_restaurant'], [], [['text', '/restaurant']], [], []],
    'produitDma9' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_produitDma9'], [], [['text', '/produitDma9']], [], []],
    'booking' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_booking'], [], [['text', '/booking']], [], []],
    'back' => [[], ['_controller' => 'App\\Controller\\ProductController::index2'], [], [['text', '/back']], [], []],
    'GestionUser' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionUser'], [], [['text', '/GestionUser']], [], []],
    'GestionRestaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionResaturant'], [], [['text', '/GestionRestaurant']], [], []],
    'GestionOffreTravail' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionOffreTravail'], [], [['text', '/GestionOffreTravail']], [], []],
    'GestionProduit' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionProduit'], [], [['text', '/GestionProduit']], [], []],
    'GestionEvenement' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionEvenement'], [], [['text', '/GestionEvenement']], [], []],
    'GestionMenu' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionMenu'], [], [['text', '/GestionMenu']], [], []],
    'GestionCommande' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionCommande'], [], [['text', '/GestionCommande']], [], []],
    'GestionArtiste' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_GestionArtiste'], [], [['text', '/GestionArtiste']], [], []],
    'produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], []],
    'produit_front' => [[], ['_controller' => 'App\\Controller\\ProduitController::index_front'], [], [['text', '/produit/produitsFront']], [], []],
    'produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/nouveau']], [], []],
    'produit_json' => [[], ['_controller' => 'App\\Controller\\ProduitController::test_json'], [], [['text', '/produit/listjson']], [], []],
    'showProduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::showProduit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/showProduit']], [], []],
    'showProduitByCategory' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::showProduitByCategory'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/produits']], [], []],
    'produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit']], [], []],
    'produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id'], ['text', '/produit']], [], []],
    'produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit']], [], []],
];
