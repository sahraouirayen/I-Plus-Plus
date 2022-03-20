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
        '/Backoffice/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/Backoffice/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/delete' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/categorie/actualite' => [[['_route' => 'categorie_actualite_index', '_controller' => 'App\\Controller\\CategorieActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/actualite/new' => [[['_route' => 'categorie_actualite_new', '_controller' => 'App\\Controller\\CategorieActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbot' => [[['_route' => 'chatbot', '_controller' => 'App\\Controller\\ChatbotController::index'], null, null, null, false, false, null]],
        '/commande/print' => [[['_route' => 'listcommandes', '_controller' => 'App\\Controller\\CommandeController::list'], null, null, null, false, false, null]],
        '/commande/add' => [[['_route' => 'commande_add', '_controller' => 'App\\Controller\\CommandeController::success'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/QR' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/evenement/back' => [[['_route' => 'evenement_index_back', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, true, false, null]],
        '/evenement/affiche' => [[['_route' => 'affichage', '_controller' => 'App\\Controller\\EvenementController::affichage'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/e/statkarim' => [[['_route' => 'statkarim', '_controller' => 'App\\Controller\\EvenementController::reclamation_stat'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/r/search_event' => [[['_route' => 'search_event', '_controller' => 'App\\Controller\\EvenementController::search_event'], null, ['GET' => 0], null, false, false, null]],
        '/image/act' => [[['_route' => 'image_act_index', '_controller' => 'App\\Controller\\ImageActController::index'], null, ['GET' => 0], null, true, false, null]],
        '/image/act/new' => [[['_route' => 'image_act_new', '_controller' => 'App\\Controller\\ImageActController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/commande' => [[['_route' => 'app_ligne_commande_index', '_controller' => 'App\\Controller\\LigneCommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/commande/new' => [[['_route' => 'app_ligne_commande_new', '_controller' => 'App\\Controller\\LigneCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mobile' => [[['_route' => 'mobileindex', '_controller' => 'App\\Controller\\MobileController::index'], null, null, null, true, false, null]],
        '/mobile/inscription' => [[['_route' => 'mobileinscription', '_controller' => 'App\\Controller\\MobileController::inscription'], null, null, null, false, false, null]],
        '/mobile/connexion' => [[['_route' => 'mobileconnexion', '_controller' => 'App\\Controller\\MobileController::login'], null, null, null, false, false, null]],
        '/mobile/give-user' => [[['_route' => 'mobilegive_user', '_controller' => 'App\\Controller\\MobileController::giveuser'], null, null, null, false, false, null]],
        '/mobile/edit-user' => [[['_route' => 'mobileedit_user', '_controller' => 'App\\Controller\\MobileController::edituser'], null, null, null, false, false, null]],
        '/mobile/motpasseoublie' => [[['_route' => 'mobilemobile_mot_de_passe_oublié', '_controller' => 'App\\Controller\\MobileController::forgottenPassword'], null, null, null, false, false, null]],
        '/user/compte' => [[['_route' => 'compte_user', '_controller' => 'App\\Controller\\ModifyUserController::index'], null, null, null, false, false, null]],
        '/user/compte/modifier' => [[['_route' => 'modifier_user', '_controller' => 'App\\Controller\\ModifyUserController::modifier'], null, null, null, false, false, null]],
        '/user/compte/modifier/mdp' => [[['_route' => 'compte_password', '_controller' => 'App\\Controller\\ModifyUserController::modifPass'], null, null, null, false, false, null]],
        '/prod' => [[['_route' => 'prod', '_controller' => 'App\\Controller\\ProdController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\ProdController::search'], null, null, null, false, false, null]],
        '/admin/ajouterProd' => [[['_route' => 'ajouterProd', '_controller' => 'App\\Controller\\ProdController::AjouterProduit'], null, null, null, false, false, null]],
        '/admin/afficherProd' => [[['_route' => 'afficherProd', '_controller' => 'App\\Controller\\ProdController::AfficherProduit'], null, null, null, false, false, null]],
        '/afficherProdfront' => [[['_route' => 'afficherProdfront', '_controller' => 'App\\Controller\\ProdController::AfficherProduitfront'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\ProdController::AfficherProduit2'], null, null, null, false, false, null]],
        '/admrecherchelivr1' => [[['_route' => 'admrecherchelivr1', '_controller' => 'App\\Controller\\ProdController::searchLivAction'], null, null, null, false, false, null]],
        '/facture/pdfnav' => [[['_route' => 'panier_pdfnav', '_controller' => 'App\\Controller\\ProdController::pdfnav'], null, ['GET' => 0], null, false, false, null]],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/admin/ajouterPromo' => [[['_route' => 'ajouterPromo', '_controller' => 'App\\Controller\\PromoController::AjouterPromotion'], null, null, null, false, false, null]],
        '/admin/afficherPromo' => [[['_route' => 'afficherPromo', '_controller' => 'App\\Controller\\PromoController::AfficherPromotion'], null, null, null, false, false, null]],
        '/admrecherchelivr2' => [[['_route' => 'admrecherchelivr2', '_controller' => 'App\\Controller\\PromoController::searchLivAction'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mot-passe-oublié' => [[['_route' => 'mot_de_passe_oublié', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/typereclamations' => [[['_route' => 'app_typereclamations_index', '_controller' => 'App\\Controller\\TypereclamationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/typereclamations/new' => [[['_route' => 'app_typereclamations_new', '_controller' => 'App\\Controller\\TypereclamationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/notfound' => [[['_route' => 'not_found', '_controller' => 'App\\Controller\\UserController::notfound'], null, null, null, false, false, null]],
        '/push' => [[['_route' => 'push', '_controller' => 'App\\Controller\\UserController::push'], null, null, null, false, false, null]],
        '/notif' => [[['_route' => 'notif', '_controller' => 'App\\Controller\\UserController::notif'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\ValidComaandeController::registrer'], null, null, null, false, false, null]],
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
                    .'|dmin/(?'
                        .'|u(?'
                            .'|sers/(?'
                                .'|([^/]++)(*:331)'
                                .'|delete/([^/]++)(*:354)'
                            .')'
                            .'|pdate/([^/]++)(*:377)'
                        .')'
                        .'|supprimer/([^/]++)(*:404)'
                        .'|modifier/([^/]++)(*:429)'
                        .'|delete/([^/]++)(*:452)'
                    .')'
                .')'
                .'|/Backoffice/calendar/([^/]++)(?'
                    .'|(*:494)'
                    .'|/edit(*:507)'
                    .'|(*:515)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:551)'
                            .'|remove/([^/]++)(*:574)'
                            .'|delete/([^/]++)(*:597)'
                        .')'
                        .'|tegorie/actualite/([^/]++)(?'
                            .'|(*:635)'
                            .'|/edit(*:648)'
                            .'|(*:656)'
                        .')'
                    .')'
                    .'|ommande/(?'
                        .'|([^/]++)(?'
                            .'|(*:688)'
                            .'|/edit(*:701)'
                            .'|(*:709)'
                        .')'
                        .'|stats(*:723)'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|([^/]++)(*:755)'
                    .'|show/([^/]++)(*:776)'
                    .'|([^/]++)(?'
                        .'|/edit(*:800)'
                        .'|(*:808)'
                    .')'
                .')'
                .'|/image/act/([^/]++)(?'
                    .'|(*:840)'
                    .'|/edit(*:853)'
                    .'|(*:861)'
                .')'
                .'|/ligne/commande/([^/]++)(?'
                    .'|(*:897)'
                    .'|/edit(*:910)'
                    .'|(*:918)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:954)'
                        .'|/edit(*:967)'
                        .'|(*:975)'
                    .')'
                    .'|servation/(?'
                        .'|new/([^/]++)/([^/]++)(*:1018)'
                        .'|([^/]++)(?'
                            .'|(*:1038)'
                            .'|/edit(*:1052)'
                            .'|(*:1061)'
                        .')'
                    .')'
                    .'|initialiser\\-mot\\-de\\-passe/([^/]++)(*:1108)'
                .')'
                .'|/typereclamations/([^/]++)(?'
                    .'|(*:1147)'
                    .'|/edit(*:1161)'
                    .'|(*:1170)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1208)'
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
        331 => [[['_route' => 'admin_users_modify', '_controller' => 'App\\Controller\\AdminUsersController::modifier'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\AdminUsersController::deleteUser'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'update', '_controller' => 'App\\Controller\\PromoController::Update'], ['id'], null, null, false, true, null]],
        404 => [[['_route' => 'supprimer', '_controller' => 'App\\Controller\\ProdController::Delete'], ['id'], null, null, false, true, null]],
        429 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\ProdController::Update'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\PromoController::Delete'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        515 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        551 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        574 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        597 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'categorie_actualite_show', '_controller' => 'App\\Controller\\CategorieActualiteController::show'], ['idCatActualite'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'categorie_actualite_edit', '_controller' => 'App\\Controller\\CategorieActualiteController::edit'], ['idCatActualite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [[['_route' => 'categorie_actualite_delete', '_controller' => 'App\\Controller\\CategorieActualiteController::delete'], ['idCatActualite'], ['POST' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        701 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        709 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        723 => [[['_route' => 'stats', '_controller' => 'App\\Controller\\CommandeController::statistiques'], [], null, null, false, false, null]],
        755 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        776 => [[['_route' => 'evenement_show1', '_controller' => 'App\\Controller\\EvenementController::showFront'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        800 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        808 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        840 => [[['_route' => 'image_act_show', '_controller' => 'App\\Controller\\ImageActController::show'], ['idImage'], ['GET' => 0], null, false, true, null]],
        853 => [[['_route' => 'image_act_edit', '_controller' => 'App\\Controller\\ImageActController::edit'], ['idImage'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        861 => [[['_route' => 'image_act_delete', '_controller' => 'App\\Controller\\ImageActController::delete'], ['idImage'], ['POST' => 0], null, false, true, null]],
        897 => [[['_route' => 'app_ligne_commande_show', '_controller' => 'App\\Controller\\LigneCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        910 => [[['_route' => 'app_ligne_commande_edit', '_controller' => 'App\\Controller\\LigneCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        918 => [[['_route' => 'app_ligne_commande_delete', '_controller' => 'App\\Controller\\LigneCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        954 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        967 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        975 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1018 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idevent', 'idUser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1038 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idReservation'], ['GET' => 0], null, false, true, null]],
        1052 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idReservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1061 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idReservation'], ['POST' => 0], null, false, true, null]],
        1108 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1147 => [[['_route' => 'app_typereclamations_show', '_controller' => 'App\\Controller\\TypereclamationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1161 => [[['_route' => 'app_typereclamations_edit', '_controller' => 'App\\Controller\\TypereclamationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1170 => [[['_route' => 'app_typereclamations_delete', '_controller' => 'App\\Controller\\TypereclamationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1208 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
