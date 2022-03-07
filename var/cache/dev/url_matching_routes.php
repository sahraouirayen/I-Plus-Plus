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
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminUsersController::index'], null, null, null, false, false, null]],
        '/admin/compte/modifier' => [[['_route' => 'modifier_admin', '_controller' => 'App\\Controller\\AdminUsersController::modifierAdmin'], null, null, null, false, false, null]],
        '/admin/compte/modifier/mdp' => [[['_route' => 'compte_password_admin', '_controller' => 'App\\Controller\\AdminUsersController::modifPass'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/Backoffice/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/Backoffice/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/actualite' => [[['_route' => 'categorie_actualite_index', '_controller' => 'App\\Controller\\CategorieActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/actualite/new' => [[['_route' => 'categorie_actualite_new', '_controller' => 'App\\Controller\\CategorieActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbot' => [[['_route' => 'chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/QR' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/evenement/back' => [[['_route' => 'evenement_index_back', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, true, false, null]],
        '/evenement/affiche' => [[['_route' => 'affichage', '_controller' => 'App\\Controller\\EvenementController::affichage'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/e/statkarim' => [[['_route' => 'statkarim', '_controller' => 'App\\Controller\\EvenementController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/r/search_event' => [[['_route' => 'search_event', '_controller' => 'App\\Controller\\EvenementController::search_event'], null, ['GET' => 0], null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\ForumController::index'], null, null, null, false, false, null]],
        '/image/act' => [[['_route' => 'image_act_index', '_controller' => 'App\\Controller\\ImageActController::index'], null, ['GET' => 0], null, true, false, null]],
        '/image/act/new' => [[['_route' => 'image_act_new', '_controller' => 'App\\Controller\\ImageActController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mobile' => [[['_route' => 'mobileindex', '_controller' => 'App\\Controller\\MobileController::index'], null, null, null, true, false, null]],
        '/mobile/inscription' => [[['_route' => 'mobileinscription', '_controller' => 'App\\Controller\\MobileController::inscription'], null, null, null, false, false, null]],
        '/mobile/connexion' => [[['_route' => 'mobileconnexion', '_controller' => 'App\\Controller\\MobileController::login'], null, null, null, false, false, null]],
        '/user/compte' => [[['_route' => 'compte_user', '_controller' => 'App\\Controller\\ModifyUserController::index'], null, null, null, false, false, null]],
        '/user/compte/modifier' => [[['_route' => 'modifier_user', '_controller' => 'App\\Controller\\ModifyUserController::modifier'], null, null, null, false, false, null]],
        '/user/compte/modifier/mdp' => [[['_route' => 'compte_password', '_controller' => 'App\\Controller\\ModifyUserController::modifPass'], null, null, null, false, false, null]],
        '/new/controlle' => [[['_route' => 'new_controlle', '_controller' => 'App\\Controller\\NewControlleController::index'], null, null, null, false, false, null]],
        '/prod' => [[['_route' => 'prod', '_controller' => 'App\\Controller\\ProdController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\ProdController::search'], null, null, null, false, false, null]],
        '/ajouterProd' => [[['_route' => 'ajouterProd', '_controller' => 'App\\Controller\\ProdController::AjouterProduit'], null, null, null, false, false, null]],
        '/afficherProd' => [[['_route' => 'afficherProd', '_controller' => 'App\\Controller\\ProdController::AfficherProduit'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\ProdController::AfficherProduit2'], null, null, null, false, false, null]],
        '/admrecherchelivr1' => [[['_route' => 'admrecherchelivr1', '_controller' => 'App\\Controller\\ProdController::searchLivAction'], null, null, null, false, false, null]],
        '/facture/pdfnav' => [[['_route' => 'panier_pdfnav', '_controller' => 'App\\Controller\\ProdController::pdfnav'], null, ['GET' => 0], null, false, false, null]],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/ajouterPromo' => [[['_route' => 'ajouterPromo', '_controller' => 'App\\Controller\\PromoController::AjouterPromotion'], null, null, null, false, false, null]],
        '/afficherPromo' => [[['_route' => 'afficherPromo', '_controller' => 'App\\Controller\\PromoController::AfficherPromotion'], null, null, null, false, false, null]],
        '/admrecherchelivr2' => [[['_route' => 'admrecherchelivr2', '_controller' => 'App\\Controller\\PromoController::searchLivAction'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mot-passe-oublié' => [[['_route' => 'mot_de_passe_oublié', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/shop/controll' => [[['_route' => 'shop_controll', '_controller' => 'App\\Controller\\ShopControllController::index'], null, null, null, false, false, null]],
        '/shop/controlle' => [[['_route' => 'shop_controlle', '_controller' => 'App\\Controller\\ShopControlleController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/typereclamations' => [[['_route' => 'app_typereclamations_index', '_controller' => 'App\\Controller\\TypereclamationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typereclamations/new' => [[['_route' => 'app_typereclamations_new', '_controller' => 'App\\Controller\\TypereclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/notfound' => [[['_route' => 'not_found', '_controller' => 'App\\Controller\\UserController::notfound'], null, null, null, false, false, null]],
        '/push' => [[['_route' => 'push', '_controller' => 'App\\Controller\\UserController::push'], null, null, null, false, false, null]],
        '/notif' => [[['_route' => 'notif', '_controller' => 'App\\Controller\\UserController::notif'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ctualite/(?'
                        .'|actu/frontact/([^/]++)(*:208)'
                        .'|like/([^/]++)(*:229)'
                        .'|dislike/([^/]++)(*:253)'
                        .'|([^/]++)(?'
                            .'|(*:272)'
                            .'|/edit(*:285)'
                            .'|(*:293)'
                        .')'
                    .')'
                    .'|dmin/users/(?'
                        .'|([^/]++)(*:325)'
                        .'|delete/([^/]++)(*:348)'
                    .')'
                .')'
                .'|/Backoffice/calendar/([^/]++)(?'
                    .'|(*:390)'
                    .'|/edit(*:403)'
                    .'|(*:411)'
                .')'
                .'|/categorie/actualite/([^/]++)(?'
                    .'|(*:452)'
                    .'|/edit(*:465)'
                    .'|(*:473)'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:504)'
                    .'|/edit(*:517)'
                    .'|(*:525)'
                .')'
                .'|/image/act/([^/]++)(?'
                    .'|(*:556)'
                    .'|/edit(*:569)'
                    .'|(*:577)'
                .')'
                .'|/supprimer/([^/]++)(*:605)'
                .'|/modifier/([^/]++)(*:631)'
                .'|/delete/([^/]++)(*:655)'
                .'|/update/([^/]++)(*:679)'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:714)'
                        .'|/edit(*:727)'
                        .'|(*:735)'
                    .')'
                    .'|servation/(?'
                        .'|new/([^/]++)/([^/]++)(*:778)'
                        .'|([^/]++)(?'
                            .'|(*:797)'
                            .'|/edit(*:810)'
                            .'|(*:818)'
                        .')'
                    .')'
                    .'|initialiser\\-mot\\-de\\-passe/([^/]++)(*:864)'
                .')'
                .'|/typereclamations/([^/]++)(?'
                    .'|(*:902)'
                    .'|/edit(*:915)'
                    .'|(*:923)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:960)'
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
        208 => [[['_route' => 'actualite_front', '_controller' => 'App\\Controller\\ActualiteController::indexFront'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'like', '_controller' => 'App\\Controller\\ActualiteController::like'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'dislike', '_controller' => 'App\\Controller\\ActualiteController::dislike'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['idActualite'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'actualite_edit', '_controller' => 'App\\Controller\\ActualiteController::edit'], ['idActualite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        293 => [[['_route' => 'actualite_delete', '_controller' => 'App\\Controller\\ActualiteController::delete'], ['idActualite'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'admin_users_modify', '_controller' => 'App\\Controller\\AdminUsersController::modifier'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\AdminUsersController::deleteUser'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        411 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        452 => [[['_route' => 'categorie_actualite_show', '_controller' => 'App\\Controller\\CategorieActualiteController::show'], ['idCatActualite'], ['GET' => 0], null, false, true, null]],
        465 => [[['_route' => 'categorie_actualite_edit', '_controller' => 'App\\Controller\\CategorieActualiteController::edit'], ['idCatActualite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'categorie_actualite_delete', '_controller' => 'App\\Controller\\CategorieActualiteController::delete'], ['idCatActualite'], ['POST' => 0], null, false, true, null]],
        504 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        517 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        525 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        556 => [[['_route' => 'image_act_show', '_controller' => 'App\\Controller\\ImageActController::show'], ['idImage'], ['GET' => 0], null, false, true, null]],
        569 => [[['_route' => 'image_act_edit', '_controller' => 'App\\Controller\\ImageActController::edit'], ['idImage'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        577 => [[['_route' => 'image_act_delete', '_controller' => 'App\\Controller\\ImageActController::delete'], ['idImage'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'supprimer', '_controller' => 'App\\Controller\\ProdController::Delete'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\ProdController::Update'], ['id'], null, null, false, true, null]],
        655 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\PromoController::Delete'], ['id'], null, null, false, true, null]],
        679 => [[['_route' => 'update', '_controller' => 'App\\Controller\\PromoController::Update'], ['id'], null, null, false, true, null]],
        714 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        778 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idevent', 'idUser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        797 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idReservation'], ['GET' => 0], null, false, true, null]],
        810 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idReservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        818 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idReservation'], ['POST' => 0], null, false, true, null]],
        864 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        902 => [[['_route' => 'app_typereclamations_show', '_controller' => 'App\\Controller\\TypereclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        915 => [[['_route' => 'app_typereclamations_edit', '_controller' => 'App\\Controller\\TypereclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        923 => [[['_route' => 'app_typereclamations_delete', '_controller' => 'App\\Controller\\TypereclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        960 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
