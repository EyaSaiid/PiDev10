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
    'commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], []],
    'Ajoutercommande' => [[], ['_controller' => 'App\\Controller\\CommandeController::AjouterCommande'], [], [['text', '/Ajoutercommande']], [], []],
    'ListByProduit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::ListProduitByCommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/ListByPoroduit']], [], []],
    'livraison_index' => [[], ['_controller' => 'App\\Controller\\LivraisonController::index'], [], [['text', '/livraison/']], [], []],
    'livraison_new' => [[], ['_controller' => 'App\\Controller\\LivraisonController::new'], [], [['text', '/livraison/new']], [], []],
    'livraison_show' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison']], [], []],
    'livraison_edit' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/livraison']], [], []],
    'livraison_delete' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison']], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\PanierController::getPanier'], [], [['text', '/panier']], [], []],
    'panier_ajout' => [[], ['_controller' => 'App\\Controller\\PanierController::ajoutauPanier'], [], [['text', '/panier/ajout']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\PanierController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/panier/remove']], [], []],
    'remove_all' => [[], ['_controller' => 'App\\Controller\\PanierController::deleteAll'], [], [['text', '/panier/remove}']], [], []],
    'panier_plus' => [[], ['_controller' => 'App\\Controller\\PanierController::plusPanier'], [], [['text', '/panier/plus']], [], []],
    'panier_minus' => [[], ['_controller' => 'App\\Controller\\PanierController::minusPanier'], [], [['text', '/panier/minus']], [], []],
    'cmd_client' => [[], ['_controller' => 'App\\Controller\\PanierController::cmdclient'], [], [['text', '/commandedetatil']], [], []],
    'Front' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/Front']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_home'], [], [['text', '/']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_contact'], [], [['text', '/contact']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_about'], [], [['text', '/about']], [], []],
    'feature' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_feature'], [], [['text', '/feature']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_team'], [], [['text', '/team']], [], []],
    'details_menu' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_details_menu'], [], [['text', '/details_menu']], [], []],
    'list_restaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_list_restaurant'], [], [['text', '/list_restaurant']], [], []],
    'restaurant' => [[], ['_controller' => 'App\\Controller\\ProductController::btn_restaurant'], [], [['text', '/restaurant']], [], []],
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
    'produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit']], [], []],
    'fetchProduits' => [[], ['_controller' => 'App\\Controller\\ProduitController::fetchProduits'], [], [['text', '/fetchProduits']], [], []],
];
