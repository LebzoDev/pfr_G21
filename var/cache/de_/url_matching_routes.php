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
        '/api/addApprenant' => [[['_route' => 'addApprenant', 'controller' => 'App\\Controller\\ApprenantController::addApprenant', '__api_resource_class' => 'App\\Entity\\Apprenant', '__api_collection_operation_name' => 'add_apprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], null, ['POST' => 0], null, false, false, null]],
        '/formateurs/brief' => [[['_route' => 'get_brief', '_controller' => 'App\\Controller\\BriefController::getBriefs'], null, ['GET' => 0], null, false, false, null]],
        '/api/competences/add' => [
            [['_route' => 'PostCompentence', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_PostCompetence_collection', '_controller' => 'App\\Controller\\CompetenceController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'PostCompetence'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/group_competences/add' => [[['_route' => 'PostGroupCompentence', '_controller' => 'App\\Controller\\CompetenceController::indexGroup'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/groupe_tags/add' => [
            [['_route' => 'GroupeTag_add', '_controller' => 'App\\Controller\\GroupeTagController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_GroupeTag_add_collection', '_controller' => 'App\\Controller\\GroupeTagController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/profilsorties' => [
            [['_route' => 'Affiche_ProfilSortie', '_controller' => 'App\\Controller\\ProfilSortieController::afficheProfilSortie'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'Add_ProfilSortie', '_controller' => 'App\\Controller\\ProfilSortieController::addProfilSortie'], null, ['POST' => 0], null, false, false, null],
        ],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/admin/referentiels' => [[['_route' => 'list_referentiels', '_controller' => 'App\\Controller\\ReferentielController::listReferentiels'], null, ['GET' => 0], null, false, false, null]],
        '/admin/referentiels/id/competences' => [[['_route' => 'list_competences_referentiel', '_controller' => 'App\\Controller\\ReferentielController::listCompetencesReferentiel'], null, ['GET' => 0], null, false, false, null]],
        '/reglages' => [[['_route' => 'reglages', '_controller' => 'App\\Controller\\ReglagesController::index'], null, ['PUT' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/admin/tags/add' => [
            [['_route' => 'api_tags_PostTag_collection', '_controller' => 'App\\Controller\\TagController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_tags_api_tags_PostTag_collection_collection', '_controller' => 'App\\Controller\\TagController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'api_tags_PostTag_collection'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/addUser' => [[['_route' => 'addUser', 'controller' => 'App\\Controller\\UtilisateurController::add', '__api_resource_class' => 'App\\Entity\\Utilisateur', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UtilisateurController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/reglages' => [[['_route' => 'api_apprenants_reglages_item', '_controller' => 'App\\Controller\\ReglagesController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'reglages'], null, ['PUT' => 0], null, false, false, null]],
        '/api/formateurs/briefs' => [[['_route' => 'api_briefs_get_briefs_collection', '_controller' => 'App\\Controller\\BriefController::getBriefs', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get_briefs'], null, ['GET' => 0], null, false, false, null]],
        '/api/api/competences' => [[['_route' => 'api_competences_GetCompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'GetCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/groupe_tags' => [[['_route' => 'api_groupe_tags_get_role_admin_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get_role_admin'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_get_role_admin_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_role_admin'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_post_admin_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_post_admin'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/profilsorties' => [
            [['_route' => 'api_profil_sorties_Add_ProfilSortie_collection', '_controller' => 'App\\Controller\\ProfilSortieController::addProfilSortie', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'Add_ProfilSortie'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_Affiche_ProfilSortie_collection', '_controller' => 'App\\Controller\\ProfilSortieController::afficheProfilSortie', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'Affiche_ProfilSortie'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/referentiels' => [[['_route' => 'api_referentiels_list_referentiels_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'list_referentiels'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/referentiels/id/competences' => [[['_route' => 'api_referentiels_list_competences_referentiel_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'list_competences_referentiel'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/tags' => [[['_route' => 'api_tags_get_role_admin_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get_role_admin'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                    .'|p(?'
                        .'|prenant(?'
                            .'|s/([^/]++)/(?'
                                .'|livrablepartiels/([^/]++)(*:227)'
                                .'|promo/([^/]++)/referentiel/([^/]++)/statistiques/briefs(*:290)'
                                .'|groupe/(?'
                                    .'|livrables/([^/]++)(*:326)'
                                    .'|([^/]++)/livrables/([^/]++)(*:361)'
                                .')'
                            .')'
                            .'|/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/competences(*:428)'
                        .')'
                        .'|i(?'
                            .'|/(?'
                                .'|formateurs/promo(?'
                                    .'|/([^/]++)/(?'
                                        .'|brief(?'
                                            .'|/([^/]++)/livrablepartiels(*:511)'
                                            .'|s/([^/]++)(*:529)'
                                        .')'
                                        .'|groupe/([^/]++)/briefs(*:560)'
                                    .')'
                                    .'|s/([^/]++)/briefs(*:586)'
                                .')'
                                .'|a(?'
                                    .'|pprenants/promos/([^/]++)/briefs(*:631)'
                                    .'|dmin/groupe_tags/([^/]++)/(?'
                                        .'|removeTag(*:677)'
                                        .'|addTag(*:691)'
                                    .')'
                                .')'
                                .'|group_competences/([^/]++)/(?'
                                    .'|a(?'
                                        .'|ddCompetence(*:747)'
                                        .'|rchive(*:761)'
                                    .')'
                                    .'|removeCompetence(*:786)'
                                    .'|desarchive(*:804)'
                                .')'
                                .'|competences/([^/]++)/(?'
                                    .'|archive(*:844)'
                                    .'|desarchive(*:862)'
                                .')'
                            .')'
                            .'|(?:/(index)(?:\\.([^/]++))?)?(*:900)'
                            .'|/(?'
                                .'|docs(?:\\.([^/]++))?(*:931)'
                                .'|c(?'
                                    .'|o(?'
                                        .'|ntexts/(.+)(?:\\.([^/]++))?(*:973)'
                                        .'|m(?'
                                            .'|mentaires(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:1015)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:1054)'
                                                .')'
                                            .')'
                                            .'|petences(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:1094)'
                                                .')'
                                                .'|/(?'
                                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:1136)'
                                                    .')'
                                                    .'|([^/]++)(?'
                                                        .'|(*:1157)'
                                                        .'|/desarchive(*:1177)'
                                                    .')'
                                                .')'
                                                .'|_valides(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:1217)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:1256)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|hats(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1295)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1334)'
                                        .')'
                                    .')'
                                .')'
                                .'|a(?'
                                    .'|p(?'
                                        .'|prenant(?'
                                            .'|s(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:1386)'
                                                .')'
                                                .'|/(?'
                                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:1428)'
                                                    .')'
                                                    .'|([^/]++)/(?'
                                                        .'|livrablepartiels/([^/]++)(*:1475)'
                                                        .'|promo/([^/]++)/referentiel/([^/]++)/statistiques/briefs(*:1539)'
                                                        .'|groupe/(?'
                                                            .'|livrables/([^/]++)(*:1576)'
                                                            .'|([^/]++)/livrables/([^/]++)(*:1612)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/competences(*:1682)'
                                            .'|_livrable_partiels(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:1730)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:1769)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|i/(?'
                                            .'|formateurs/promo(?'
                                                .'|s/([^/]++)/briefs(*:1822)'
                                                .'|/([^/]++)/(?'
                                                    .'|briefs/([^/]++)(*:1859)'
                                                    .'|groupe/([^/]++)/briefs(*:1890)'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|pprenants/promos/([^/]++)/briefs(*:1937)'
                                                .'|dmin/groupe_tags/([^/]++)/(?'
                                                    .'|removeTag(*:1984)'
                                                    .'|addTag(*:1999)'
                                                .')'
                                            .')'
                                            .'|competences/([^/]++)/group_competences(*:2048)'
                                        .')'
                                    .')'
                                    .'|dmin/(?'
                                        .'|groupe_tags/([^/]++)(?'
                                            .'|(*:2090)'
                                        .')'
                                        .'|pro(?'
                                            .'|fils(?'
                                                .'|/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|users(*:2134)'
                                                        .'|archive(*:2150)'
                                                    .')'
                                                    .'|(*:2160)'
                                                .')'
                                                .'|ortie(?'
                                                    .'|s/([^/]++)(*:2188)'
                                                    .'|/([^/]++)(*:2206)'
                                                .')'
                                            .')'
                                            .'|mo/([^/]++)/profilsortie(?'
                                                .'|s(*:2245)'
                                                .'|/([^/]++)(*:2263)'
                                            .')'
                                        .')'
                                        .'|referentiel/([^/]++)/(?'
                                            .'|addCompetence(*:2311)'
                                            .'|removeCompetence(*:2336)'
                                        .')'
                                        .'|tags/([^/]++)(?'
                                            .'|(*:2362)'
                                        .')'
                                    .')'
                                .')'
                                .'|f(?'
                                    .'|ormateurs/(?'
                                        .'|promo/([^/]++)/referentiel/([^/]++)/competences(*:2438)'
                                        .'|([^/]++)/briefs/(?'
                                            .'|brouillons(*:2476)'
                                            .'|valides(*:2492)'
                                        .')'
                                        .'|promo/([^/]++)/referentiel/([^/]++)/statistiques/competences(?'
                                            .'|(*:2565)'
                                            .'|(*:2574)'
                                        .')'
                                        .'|livrablepartiels/([^/]++)/commentaires(*:2622)'
                                    .')'
                                    .'|il_de_discussions(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2670)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2709)'
                                        .')'
                                    .')'
                                .')'
                                .'|u(?'
                                    .'|tilisateurs(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2757)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2796)'
                                        .')'
                                    .')'
                                    .'|sers/promo/([^/]++)/(?'
                                        .'|utilisateur/([^/]++)/chats(*:2856)'
                                        .'|apprenant/([^/]++)/chats(?'
                                            .'|(*:2892)'
                                        .')'
                                    .')'
                                .')'
                                .'|brief(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2934)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2973)'
                                        .')'
                                    .')'
                                    .'|_(?'
                                        .'|apprenants(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3019)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3058)'
                                            .')'
                                        .')'
                                        .'|ma_promos(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3099)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3138)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|etat_brief_groupes(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:3190)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:3229)'
                                    .')'
                                .')'
                                .'|group(?'
                                    .'|_(?'
                                        .'|competences(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3284)'
                                            .')'
                                            .'|/(?'
                                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:3326)'
                                                .')'
                                                .'|([^/]++)(?'
                                                    .'|(*:3347)'
                                                    .'|/(?'
                                                        .'|archive(*:3367)'
                                                        .'|desarchive(*:3386)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|promos(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3426)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3465)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|e_tags(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:3504)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3543)'
                                        .')'
                                    .')'
                                .')'
                                .'|livrable_(?'
                                    .'|attendu(?'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3599)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3638)'
                                            .')'
                                        .')'
                                        .'|_apprenants(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3681)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3720)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|partiels(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:3761)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3800)'
                                        .')'
                                    .')'
                                .')'
                                .'|niveaux(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:3840)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:3879)'
                                    .')'
                                .')'
                                .'|pro(?'
                                    .'|fil(?'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:3924)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3963)'
                                            .')'
                                        .')'
                                        .'|_sorties(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:4003)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:4042)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|mos(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:4078)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4117)'
                                        .')'
                                    .')'
                                .')'
                                .'|re(?'
                                    .'|ferentiels(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:4165)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4204)'
                                        .')'
                                    .')'
                                    .'|ssources(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:4244)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4283)'
                                        .')'
                                    .')'
                                .')'
                                .'|tags(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:4320)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:4359)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|pro(?'
                            .'|mo/([^/]++)/profilsortie(?'
                                .'|s(*:4415)'
                                .'|/([^/]++)(*:4433)'
                            .')'
                            .'|filsortie(?'
                                .'|s/([^/]++)(*:4465)'
                                .'|/([^/]++)(*:4483)'
                            .')'
                        .')'
                        .'|referentiel/([^/]++)/(?'
                            .'|a(?'
                                .'|ddCompetence(*:4534)'
                                .'|rchive(*:4549)'
                            .')'
                            .'|removeCompetence(*:4575)'
                            .'|desarchive(*:4594)'
                        .')'
                    .')'
                .')'
                .'|/formateurs/(?'
                    .'|promo/([^/]++)/brief/([^/]++)(*:4650)'
                    .'|([^/]++)/briefs/(?'
                        .'|brouillons(*:4688)'
                        .'|valides(*:4704)'
                    .')'
                    .'|promo/([^/]++)/referentiel/([^/]++)/(?'
                        .'|competences(*:4764)'
                        .'|statistiques/competences(*:4797)'
                    .')'
                    .'|livrablepartiels/([^/]++)/commentaires(*:4845)'
                .')'
                .'|/users/promo/([^/]++)/apprenant/([^/]++)/chats(?'
                    .'|(*:4904)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'modifier_ApplivrablePartiel', '_controller' => 'App\\Controller\\ApprenantLivrablePartielController::update_AppLivrablePartiel'], ['id', 'livrablePartielId'], ['PUT' => 0], null, false, true, null]],
        290 => [[['_route' => 'apprennant_nombre', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistique_nombre'], ['id', 'idPromo', 'idRef'], ['GET' => 0], null, false, false, null]],
        326 => [[['_route' => 'post_link', '_controller' => 'App\\Controller\\LivrableAttenduApprenanntController::post_link'], ['id', 'idLivra'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'post_links', '_controller' => 'App\\Controller\\LivrableAttenduApprenanntController::post_links'], ['id', 'idGroup', 'idLivra'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'competences_acquises_apprenant', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index1'], ['apprenantId', 'id', 'idRef'], ['GET' => 0], null, false, false, null]],
        511 => [[['_route' => 'ajout_livrablePartiel_Brief', '_controller' => 'App\\Controller\\ApprenantLivrablePartielController::add_livrablePartiel_Brief'], ['id', 'briefId'], ['POST' => 0], null, false, false, null]],
        529 => [[['_route' => 'getOneBriefPromo', '_controller' => 'App\\Controller\\BriefController::getOneBriefPromo'], ['idPromo', 'idBrief'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'getGroupeBriefs', '_controller' => 'App\\Controller\\BriefController::getGroupeBriefs'], ['idPromo', 'idGroupe'], ['GET' => 0], null, false, false, null]],
        586 => [[['_route' => 'getBriefsPromo', '_controller' => 'App\\Controller\\BriefController::getBriefsPromo'], ['id'], ['GET' => 0], null, false, false, null]],
        631 => [[['_route' => 'getBriefsAssignesPromo', '_controller' => 'App\\Controller\\BriefController::getBriefsAssignesPromo'], ['id'], ['GET' => 0], null, false, false, null]],
        677 => [[['_route' => 'GroupeTag_remove_tag', '_controller' => 'App\\Controller\\GroupeTagController::removeTag'], ['id'], ['POST' => 0], null, false, false, null]],
        691 => [[['_route' => 'GroupeTag_add_tag', '_controller' => 'App\\Controller\\GroupeTagController::addTag'], ['id'], ['POST' => 0], null, false, false, null]],
        747 => [[['_route' => 'addCompetence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        761 => [[['_route' => 'PutGroupCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        786 => [[['_route' => 'removeCompetence', '_controller' => 'App\\Controller\\CompetenceController::removeCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        804 => [[['_route' => 'PutGroupCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        844 => [[['_route' => 'PutCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController'], ['id'], ['PUT' => 0], null, false, false, null]],
        862 => [[['_route' => 'PutCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        900 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        931 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        973 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        1015 => [
            [['_route' => 'api_commentaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1054 => [
            [['_route' => 'api_commentaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1094 => [
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1136 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1157 => [
            [['_route' => 'api_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1177 => [[['_route' => 'api_competences_archive_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'archive_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        1217 => [
            [['_route' => 'api_competences_valides_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1256 => [
            [['_route' => 'api_competences_valides_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1295 => [
            [['_route' => 'api_chats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1334 => [
            [['_route' => 'api_chats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_chats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_chats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1386 => [
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1428 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1475 => [[['_route' => 'api_apprenant_livrable_partiels_modifier_ApplivrablePartiel_item', '_controller' => 'App\\Controller\\ApprenantLivrablePartielController::update_AppLivrablePartiel', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'modifier_ApplivrablePartiel'], ['id', 'livrablePartielId'], ['PUT' => 0], null, false, true, null]],
        1539 => [[['_route' => 'api_brief_apprenants_apprenant_nombre_item', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistique_nombre', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'apprenant_nombre'], ['id', 'idPromo', 'idRef'], ['GET' => 0], null, false, false, null]],
        1576 => [[['_route' => 'api_livrable_attendu_apprenants_post_link_collection', '_controller' => 'App\\Controller\\LivrableAttenduApprenanntController::post_link', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'post_link'], ['id', 'idLivra'], ['POST' => 0], null, false, true, null]],
        1612 => [[['_route' => 'api_livrable_attendu_apprenants_post_links_collection', '_controller' => 'App\\Controller\\LivrableAttenduApprenanntController::post_links', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'post_links'], ['id', 'idGroup', 'idLivra'], ['POST' => 0], null, false, true, null]],
        1682 => [[['_route' => 'api_apprenants_competences_acquises_apprenant_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index1', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'competences_acquises_apprenant'], ['apprenantId', 'id', 'idRef'], ['GET' => 0], null, false, false, null]],
        1730 => [
            [['_route' => 'api_apprenant_livrable_partiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1769 => [
            [['_route' => 'api_apprenant_livrable_partiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1822 => [[['_route' => 'api_briefs_getBriefsPromo_collection', '_controller' => 'Brief::class', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'getBriefsPromo'], ['id'], ['GET' => 0], null, false, false, null]],
        1859 => [[['_route' => 'api_briefs_getOneBriefPromo_collection', '_controller' => 'Brief::class', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'getOneBriefPromo'], ['idPromo', 'idBrief'], ['GET' => 0], null, false, true, null]],
        1890 => [[['_route' => 'api_briefs_getGroupeBriefs_collection', '_controller' => 'Brief::class', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'getGroupeBriefs'], ['idPromo', 'idGroupe'], ['GET' => 0], null, false, false, null]],
        1937 => [[['_route' => 'api_briefs_getBriefsAssignesPromo_collection', '_controller' => 'Brief::class', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'getBriefsAssignesPromo'], ['id'], ['GET' => 0], null, false, false, null]],
        1984 => [[['_route' => 'api_groupe_tags_GroupeTag_remove_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::removeTadd', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_remove_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        1999 => [[['_route' => 'api_groupe_tags_GroupeTag_add_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::addTag', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        2048 => [[['_route' => 'api_competences_GetListGroupCompetences_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'GetListGroupCompetences'], ['id'], ['GET' => 0], null, false, false, null]],
        2090 => [
            [['_route' => 'api_groupe_tags_get_groupe_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get_groupe_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_groupe_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put_groupe_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delet_groupe_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delet_groupe_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        2134 => [[['_route' => 'api_profils_get_list_user_profil_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_list_user_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        2150 => [[['_route' => 'api_profils_archive_ptofil_item', '_controller' => 'App\\Controller\\ProfilController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'archive_ptofil'], ['id'], ['PUT' => 0], null, false, false, null]],
        2160 => [
            [['_route' => 'api_profils_get_profil_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_profil_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put_profil_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delet_profil_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delet_profil_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        2188 => [[['_route' => 'api_profil_sorties_Affiche_Apprenant_ProfilSortie_collection', '_controller' => 'App\\Controller\\ProfilSortieController::afficheApprenantsProfilSortie', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'Affiche_Apprenant_ProfilSortie'], ['id'], ['GET' => 0], null, false, true, null]],
        2206 => [[['_route' => 'api_profil_sorties_ModifierProfilSortie_item', '_controller' => 'App\\Controller\\ProfilSortieController::modifierProfilSortie', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'ModifierProfilSortie'], ['id'], ['PUT' => 0], null, false, true, null]],
        2245 => [[['_route' => 'api_profil_sorties_Affiche_ProfilSortie_Promo_collection', '_controller' => 'App\\Controller\\ProfilSortieController::afficheProfilSortiePromo', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'Affiche_ProfilSortie_Promo'], ['id'], ['GET' => 0], null, false, false, null]],
        2263 => [[['_route' => 'api_profil_sorties_Affiche_Apprenant_ProfilSortie_Promo_collection', '_controller' => 'App\\Controller\\ProfilSortieController::afficheApprenantsProfilSortiePromo', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'Affiche_Apprenant_ProfilSortie_Promo'], ['id', 'idp'], ['GET' => 0], null, false, true, null]],
        2311 => [[['_route' => 'api_referentiels_referentiel_addCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_addCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        2336 => [[['_route' => 'api_referentiels_referentiel_removeCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        2362 => [
            [['_route' => 'api_tags_get_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delet_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delet_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        2438 => [[['_route' => 'api_apprenants_competences_acquises_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'competences_acquises'], ['id', 'idRef'], ['GET' => 0], null, false, false, null]],
        2476 => [[['_route' => 'api_briefs_get_formateur_briefs_brouillons_collection', '_controller' => 'App\\Controller\\BriefController::getBriefsBrouillons', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get_formateur_briefs_brouillons'], ['id'], ['GET' => 0], null, false, false, null]],
        2492 => [[['_route' => 'api_briefs_get_formateur_briefs_valides_collection', '_controller' => 'App\\Controller\\BriefController::getBriefsValides', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get_formateur_briefs_valides'], ['id'], ['GET' => 0], null, false, false, null]],
        2565 => [[['_route' => 'api_competences_valides_statistiques_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistiques', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'statistiques'], ['id', 'idRef'], ['GET' => 0], null, false, false, null]],
        2574 => [[['_route' => 'api_referentiels_statistiques_collection', '_controller' => 'App\\Controller\\ComptencesAcquisesController::statistiques', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'statistiques'], ['id', 'referentielId'], ['GET' => 0], null, false, false, null]],
        2622 => [[['_route' => 'api_fil_de_discussions_fil_de_discussion_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::filDeDiscussion', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_collection_operation_name' => 'fil_de_discussion'], ['id'], ['POST' => 0], null, false, false, null]],
        2670 => [
            [['_route' => 'api_fil_de_discussions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2709 => [
            [['_route' => 'api_fil_de_discussions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2757 => [
            [['_route' => 'api_utilisateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2796 => [
            [['_route' => 'api_utilisateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2856 => [[['_route' => 'api_chats_post_chat_collection', '_controller' => 'App\\Controller\\ChatController::post_chat', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post_chat'], ['id', 'idUser'], ['POST' => 0], null, false, false, null]],
        2892 => [
            [['_route' => 'api_chats_post_chat_app_collection', '_controller' => 'App\\Controller\\ChatController::post_chat_app', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post_chat_app'], ['id', 'idApp'], ['POST' => 0], null, false, false, null],
            [['_route' => 'api_chats_show_chat_collection', '_controller' => 'App\\Controller\\ChatController::show_chat', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'show_chat'], ['id', 'idApp'], ['GET' => 0], null, false, false, null],
        ],
        2934 => [
            [['_route' => 'api_briefs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_briefs_ajout_livrablePartiel_Brief_collection', '_controller' => 'App\\Controller\\ApprenantLivrablePartielController::add_livrablePartiel_Brief', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'ajout_livrablePartiel_Brief'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2973 => [
            [['_route' => 'api_briefs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_briefs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_briefs_modify_Brief_item', '_controller' => 'App\\Controller\\BriefController::modify_Brief', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'modify_Brief'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        3019 => [
            [['_route' => 'api_brief_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3058 => [
            [['_route' => 'api_brief_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3099 => [
            [['_route' => 'api_brief_ma_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3138 => [
            [['_route' => 'api_brief_ma_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3190 => [
            [['_route' => 'api_etat_brief_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3229 => [
            [['_route' => 'api_etat_brief_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3284 => [
            [['_route' => 'api_group_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3326 => [
            [['_route' => 'api_group_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3347 => [
            [['_route' => 'api_group_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        3367 => [[['_route' => 'api_group_competences_archive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'archive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        3386 => [[['_route' => 'api_group_competences_desarchive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'desarchive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        3426 => [
            [['_route' => 'api_group_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3465 => [
            [['_route' => 'api_group_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3504 => [
            [['_route' => 'api_groupe_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3543 => [
            [['_route' => 'api_groupe_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3599 => [
            [['_route' => 'api_livrable_attendus_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3638 => [
            [['_route' => 'api_livrable_attendus_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3681 => [
            [['_route' => 'api_livrable_attendu_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3720 => [
            [['_route' => 'api_livrable_attendu_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3761 => [
            [['_route' => 'api_livrable_partiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3800 => [
            [['_route' => 'api_livrable_partiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3840 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3879 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3924 => [
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3963 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        4003 => [
            [['_route' => 'api_profil_sorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4042 => [
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        4078 => [
            [['_route' => 'api_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4117 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        4165 => [
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4204 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        4244 => [
            [['_route' => 'api_ressources_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4283 => [
            [['_route' => 'api_ressources_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ressources_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ressources_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        4320 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4359 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4415 => [[['_route' => 'Affiche_ProfilSortie_Promo', '_controller' => 'App\\Controller\\ProfilSortieController::afficheProfilSortiePromo'], ['id'], ['GET' => 0], null, false, false, null]],
        4433 => [[['_route' => 'Affiche_Apprenant_ProfilSortie_Promo', '_controller' => 'App\\Controller\\ProfilSortieController::afficheApprenantsProfilSortiePromo'], ['id', 'idp'], ['GET' => 0], null, false, true, null]],
        4465 => [[['_route' => 'Affiche_Apprenant_ProfilSortie', '_controller' => 'App\\Controller\\ProfilSortieController::afficheApprenantsProfilSortie'], ['id'], ['GET' => 0], null, false, true, null]],
        4483 => [[['_route' => 'ModifierProfilSortie', '_controller' => 'App\\Controller\\ProfilSortieController::modifierProfilSortie'], ['id'], ['PUT' => 0], null, false, true, null]],
        4534 => [[['_route' => 'referentiel_addCompetences', '_controller' => 'App\\Controller\\ReferentielController::index'], ['id'], ['POST' => 0], null, false, false, null]],
        4549 => [[['_route' => 'PutReferentielArchive', '_controller' => 'App\\Controller\\ReferentielController'], ['id'], ['PUT' => 0], null, false, false, null]],
        4575 => [[['_route' => 'Referentiel_removeCompetence', '_controller' => 'App\\Controller\\ReferentielController::removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        4594 => [[['_route' => 'PutReferentielDesarchive', '_controller' => 'App\\Controller\\ReferentielController::DesarchiveReferentiel'], ['id'], ['PUT' => 0], null, false, false, null]],
        4650 => [[['_route' => 'modify_Brief', '_controller' => 'App\\Controller\\BriefController::modify_Brief'], ['id', 'idBrief'], ['PUT' => 0], null, false, true, null]],
        4688 => [[['_route' => 'get_brief_brouilons', '_controller' => 'App\\Controller\\BriefController::getBriefsBrouillons'], ['id'], ['GET' => 0], null, false, false, null]],
        4704 => [[['_route' => 'get_brief_valides', '_controller' => 'App\\Controller\\BriefController::getBriefsValides'], ['id'], ['GET' => 0], null, false, false, null]],
        4764 => [[['_route' => 'competences_acquises', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index'], ['id', 'idRef'], ['GET' => 0], null, false, false, null]],
        4797 => [[['_route' => 'statistiques', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistiques'], ['id', 'idRef'], ['GET' => 0], null, false, false, null]],
        4845 => [[['_route' => 'fil_de_discussion', '_controller' => 'App\\Controller\\CompetencesAcquisesController::filDeDiscussion'], ['id'], ['POST' => 0], null, false, false, null]],
        4904 => [
            [['_route' => 'chat_par_jour', '_controller' => 'App\\Controller\\ChatController::show_Chat'], ['id', 'idApp'], ['GET' => 0], null, false, false, null],
            [['_route' => 'post_chat', '_controller' => 'App\\Controller\\ChatController::post_chat_app'], ['id', 'idApp'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
