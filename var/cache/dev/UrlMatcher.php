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
        '/act' => [[['_route' => 'act', '_controller' => 'App\\Controller\\ActController::index'], null, null, null, false, false, null]],
        '/actualite' => [[['_route' => 'actualite_index', '_controller' => 'App\\Controller\\ActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actualite/filtreact' => [[['_route' => 'filtreact', '_controller' => 'App\\Controller\\ActualiteController::filtreact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/actualite/pdfact' => [[['_route' => 'pdfact', '_controller' => 'App\\Controller\\ActualiteController::pdfact'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/indextri' => [[['_route' => 'indextri', '_controller' => 'App\\Controller\\ActualiteController::indextri'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/searchact' => [[['_route' => 'searchact', '_controller' => 'App\\Controller\\ActualiteController::searchact'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/indexback' => [[['_route' => 'actualite_indexdash', '_controller' => 'App\\Controller\\ActualiteController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/back' => [[['_route' => 'actualite_indexBack', '_controller' => 'App\\Controller\\ActualiteController::back'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/new' => [[['_route' => 'actualite_new', '_controller' => 'App\\Controller\\ActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/categorie/actualite' => [[['_route' => 'categorie_actualite_index', '_controller' => 'App\\Controller\\CategorieActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/actualite/new' => [[['_route' => 'categorie_actualite_new', '_controller' => 'App\\Controller\\CategorieActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment/act' => [[['_route' => 'comment_act_index', '_controller' => 'App\\Controller\\CommentActController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/act/new' => [[['_route' => 'comment_act_new', '_controller' => 'App\\Controller\\CommentActController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\ForumController::index'], null, null, null, false, false, null]],
        '/image/act' => [[['_route' => 'image_act_index', '_controller' => 'App\\Controller\\ImageActController::index'], null, ['GET' => 0], null, true, false, null]],
        '/image/act/new' => [[['_route' => 'image_act_new', '_controller' => 'App\\Controller\\ImageActController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/new/controlle' => [[['_route' => 'new_controlle', '_controller' => 'App\\Controller\\NewControlleController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\NewController::index'], null, null, null, false, false, null]],
        '/shop/controll' => [[['_route' => 'shop_controll', '_controller' => 'App\\Controller\\ShopControllController::index'], null, null, null, false, false, null]],
        '/shop/controlle' => [[['_route' => 'shop_controlle', '_controller' => 'App\\Controller\\ShopControlleController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
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
                .'|/actualite/(?'
                    .'|actu/frontact/([^/]++)(*:205)'
                    .'|like/([^/]++)(*:226)'
                    .'|dislike/([^/]++)(*:250)'
                    .'|([^/]++)(?'
                        .'|(*:269)'
                        .'|/edit(*:282)'
                        .'|(*:290)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/actualite/([^/]++)(?'
                        .'|(*:335)'
                        .'|/edit(*:348)'
                        .'|(*:356)'
                    .')'
                    .'|omment/act/([^/]++)(?'
                        .'|(*:387)'
                        .'|/edit(*:400)'
                        .'|(*:408)'
                    .')'
                .')'
                .'|/image/act/([^/]++)(?'
                    .'|(*:440)'
                    .'|/edit(*:453)'
                    .'|(*:461)'
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
        205 => [[['_route' => 'actualite_front', '_controller' => 'App\\Controller\\ActualiteController::indexFront'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'like', '_controller' => 'App\\Controller\\ActualiteController::like'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'dislike', '_controller' => 'App\\Controller\\ActualiteController::dislike'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['idActualite'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'actualite_edit', '_controller' => 'App\\Controller\\ActualiteController::edit'], ['idActualite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'actualite_delete', '_controller' => 'App\\Controller\\ActualiteController::delete'], ['idActualite'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'categorie_actualite_show', '_controller' => 'App\\Controller\\CategorieActualiteController::show'], ['idCatActualite'], ['GET' => 0], null, false, true, null]],
        348 => [[['_route' => 'categorie_actualite_edit', '_controller' => 'App\\Controller\\CategorieActualiteController::edit'], ['idCatActualite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [[['_route' => 'categorie_actualite_delete', '_controller' => 'App\\Controller\\CategorieActualiteController::delete'], ['idCatActualite'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'comment_act_show', '_controller' => 'App\\Controller\\CommentActController::show'], ['idComment'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'comment_act_edit', '_controller' => 'App\\Controller\\CommentActController::edit'], ['idComment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'comment_act_delete', '_controller' => 'App\\Controller\\CommentActController::delete'], ['idComment'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => 'image_act_show', '_controller' => 'App\\Controller\\ImageActController::show'], ['idImage'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'image_act_edit', '_controller' => 'App\\Controller\\ImageActController::edit'], ['idImage'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [
            [['_route' => 'image_act_delete', '_controller' => 'App\\Controller\\ImageActController::delete'], ['idImage'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
