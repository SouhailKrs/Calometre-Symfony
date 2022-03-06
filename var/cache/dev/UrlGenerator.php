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
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\AdminHomeController::index'], [], [['text', '/admin/home']], [], []],
    'app_alim_front' => [[], ['_controller' => 'App\\Controller\\AlimFrontController::index'], [], [['text', '/alim/front']], [], []],
    'aliment_index' => [[], ['_controller' => 'App\\Controller\\AlimentController::index'], [], [['text', '/aliment/']], [], []],
    'aliment_new' => [[], ['_controller' => 'App\\Controller\\AlimentController::new'], [], [['text', '/aliment/new']], [], []],
    'aliment_show' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/aliment']], [], []],
    'aliment_edit' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/aliment']], [], []],
    'aliment_delete' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/aliment']], [], []],
    'categories_index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories/']], [], []],
    'categories_new' => [[], ['_controller' => 'App\\Controller\\CategoriesController::new'], [], [['text', '/categories/new']], [], []],
    'categories_show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categories']], [], []],
    'categories_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/categories']], [], []],
    'categories_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categories']], [], []],
    'event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event/']], [], []],
    'event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], []],
    'event_show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'event_edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'exercice_index' => [[], ['_controller' => 'App\\Controller\\ExerciceController::index'], [], [['text', '/exercice/']], [], []],
    'exercice_new' => [[], ['_controller' => 'App\\Controller\\ExerciceController::new'], [], [['text', '/exercice/new']], [], []],
    'exercice_show' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/exercice']], [], []],
    'exercice_edit' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/exercice']], [], []],
    'exercice_delete' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/exercice']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], []],
    'post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], []],
    'post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/post']], [], []],
    'post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/post']], [], []],
    'post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/post']], [], []],
    'product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product/']], [], []],
    'product_new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/product/new']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product']], [], []],
    'product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/product']], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product']], [], []],
    'app_rece_front' => [[], ['_controller' => 'App\\Controller\\ReceFrontController::index'], [], [['text', '/rece/front']], [], []],
    'recette_pdf' => [[], ['_controller' => 'App\\Controller\\ReceFrontController::getPDF'], [], [['text', '/']], [], []],
    'recette_index' => [[], ['_controller' => 'App\\Controller\\RecetteController::index'], [], [['text', '/recette/']], [], []],
    'recette_new' => [[], ['_controller' => 'App\\Controller\\RecetteController::new'], [], [['text', '/recette/new']], [], []],
    'recette_show' => [['id'], ['_controller' => 'App\\Controller\\RecetteController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recette_edit' => [['id'], ['_controller' => 'App\\Controller\\RecetteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'recette_delete' => [['id'], ['_controller' => 'App\\Controller\\RecetteController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], []],
    'reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], []],
    'reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], []],
    'reponse_new' => [[], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/reponse/new']], [], []],
    'reponse_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'type_exercice_index' => [[], ['_controller' => 'App\\Controller\\TypeExerciceController::index'], [], [['text', '/type/exercice/']], [], []],
    'type_exercice_new' => [[], ['_controller' => 'App\\Controller\\TypeExerciceController::new'], [], [['text', '/type/exercice/new']], [], []],
    'type_exercice_show' => [['id'], ['_controller' => 'App\\Controller\\TypeExerciceController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/type/exercice']], [], []],
    'type_exercice_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeExerciceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/type/exercice']], [], []],
    'type_exercice_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeExerciceController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/type/exercice']], [], []],
];
