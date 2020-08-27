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
        '/apprenant/livrable/partiel' => [[['_route' => 'apprenant_livrable_partiel', '_controller' => 'App\\Controller\\ApprenantLivrablePartielController::index'], null, null, null, false, false, null]],
        '/api/competences/add' => [
            [['_route' => 'PostCompentence', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_PostCompetence_collection', '_controller' => 'App\\Controller\\CompetenceController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'PostCompetence'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/group_competences/add' => [[['_route' => 'PostGroupCompentence', '_controller' => 'App\\Controller\\CompetenceController::indexGroup'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/groupe_tags/add' => [
            [['_route' => 'GroupeTag_add', '_controller' => 'App\\Controller\\GroupeTagController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_GroupeTag_add_collection', '_controller' => 'App\\Controller\\GroupeTagController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add'], null, ['POST' => 0], null, false, false, null],
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
        '/api/api/competences' => [[['_route' => 'api_competences_GetCompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'GetCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/groupe_tags' => [[['_route' => 'api_groupe_tags_get_role_admin_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get_role_admin'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_get_role_admin_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_role_admin'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_post_admin_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_post_admin'], null, ['POST' => 0], null, false, false, null],
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
                        .'|i(?'
                            .'|/(?'
                                .'|group_competences/([^/]++)/(?'
                                    .'|a(?'
                                        .'|ddCompetence(*:232)'
                                        .'|rchive(*:246)'
                                    .')'
                                    .'|removeCompetence(*:271)'
                                    .'|desarchive(*:289)'
                                .')'
                                .'|competences/([^/]++)/(?'
                                    .'|archive(*:329)'
                                    .'|desarchive(*:347)'
                                .')'
                                .'|admin/groupe_tags/([^/]++)/(?'
                                    .'|removeTag(*:395)'
                                    .'|addTag(*:409)'
                                .')'
                            .')'
                            .'|(?:/(index)(?:\\.([^/]++))?)?(*:447)'
                            .'|/(?'
                                .'|docs(?:\\.([^/]++))?(*:478)'
                                .'|c(?'
                                    .'|o(?'
                                        .'|ntexts/(.+)(?:\\.([^/]++))?(*:520)'
                                        .'|m(?'
                                            .'|mentaires(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:562)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:600)'
                                                .')'
                                            .')'
                                            .'|petences(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:639)'
                                                .')'
                                                .'|/(?'
                                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:680)'
                                                    .')'
                                                    .'|([^/]++)(?'
                                                        .'|(*:700)'
                                                        .'|/desarchive(*:719)'
                                                    .')'
                                                .')'
                                                .'|_valides(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:758)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:796)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|hats(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:834)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:872)'
                                        .')'
                                    .')'
                                .')'
                                .'|a(?'
                                    .'|p(?'
                                        .'|prenant(?'
                                            .'|s(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:923)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:961)'
                                                .')'
                                            .')'
                                            .'|/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/competences(*:1028)'
                                            .'|_livrable_partiels(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:1076)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:1115)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|i/(?'
                                            .'|competences/([^/]++)/group_competences(*:1170)'
                                            .'|admin/groupe_tags/([^/]++)/(?'
                                                .'|removeTag(*:1218)'
                                                .'|addTag(*:1233)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|dmin/(?'
                                        .'|groupe_tags/([^/]++)(?'
                                            .'|(*:1276)'
                                        .')'
                                        .'|profils/([^/]++)(?'
                                            .'|/(?'
                                                .'|users(*:1314)'
                                                .'|archive(*:1330)'
                                            .')'
                                            .'|(*:1340)'
                                        .')'
                                        .'|referentiel/([^/]++)/(?'
                                            .'|addCompetence(*:1387)'
                                            .'|removeCompetence(*:1412)'
                                        .')'
                                        .'|tags/([^/]++)(?'
                                            .'|(*:1438)'
                                        .')'
                                    .')'
                                .')'
                                .'|f(?'
                                    .'|ormateurs/promo/([^/]++)/referentiel/([^/]++)/(?'
                                        .'|competences(*:1514)'
                                        .'|statistiques/competences(*:1547)'
                                    .')'
                                    .'|il_de_discussions(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1595)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1634)'
                                        .')'
                                    .')'
                                .')'
                                .'|utilisateurs(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1679)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1718)'
                                    .')'
                                .')'
                                .'|brief(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1759)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1798)'
                                        .')'
                                    .')'
                                    .'|_(?'
                                        .'|apprenants(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:1844)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:1883)'
                                            .')'
                                        .')'
                                        .'|ma_promos(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:1924)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:1963)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|etat_brief_groupes(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2015)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2054)'
                                    .')'
                                .')'
                                .'|group(?'
                                    .'|_(?'
                                        .'|competences(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2109)'
                                            .')'
                                            .'|/(?'
                                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:2151)'
                                                .')'
                                                .'|([^/]++)(?'
                                                    .'|(*:2172)'
                                                    .'|/(?'
                                                        .'|archive(*:2192)'
                                                        .'|desarchive(*:2211)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|promos(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2251)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2290)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|e_tags(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2329)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2368)'
                                        .')'
                                    .')'
                                .')'
                                .'|livrable_(?'
                                    .'|attendu(?'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2424)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2463)'
                                            .')'
                                        .')'
                                        .'|_apprenants(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2506)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2545)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|partiels(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2586)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2625)'
                                        .')'
                                    .')'
                                .')'
                                .'|niveaux(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2665)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2704)'
                                    .')'
                                .')'
                                .'|pro(?'
                                    .'|fil(?'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2749)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2788)'
                                            .')'
                                        .')'
                                        .'|_sorties(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2828)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2867)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|mos(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2903)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2942)'
                                        .')'
                                    .')'
                                .')'
                                .'|re(?'
                                    .'|ferentiels(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:2990)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3029)'
                                        .')'
                                    .')'
                                    .'|ssources(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:3069)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3108)'
                                        .')'
                                    .')'
                                .')'
                                .'|tags(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:3145)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:3184)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|prenant/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/competences(*:3261)'
                    .')'
                    .'|dmin/referentiel/([^/]++)/(?'
                        .'|a(?'
                            .'|ddCompetence(*:3316)'
                            .'|rchive(*:3331)'
                        .')'
                        .'|removeCompetence(*:3357)'
                        .'|desarchive(*:3376)'
                    .')'
                .')'
                .'|/formateurs/promo/([^/]++)/referentiel/([^/]++)/(?'
                    .'|competences(*:3449)'
                    .'|statistiques/competences(*:3482)'
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
        232 => [[['_route' => 'addCompetence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        246 => [[['_route' => 'PutGroupCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        271 => [[['_route' => 'removeCompetence', '_controller' => 'App\\Controller\\CompetenceController::removeCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        289 => [[['_route' => 'PutGroupCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        329 => [[['_route' => 'PutCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController'], ['id'], ['PUT' => 0], null, false, false, null]],
        347 => [[['_route' => 'PutCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        395 => [[['_route' => 'GroupeTag_remove_tag', '_controller' => 'App\\Controller\\GroupeTagController::removeTag'], ['id'], ['POST' => 0], null, false, false, null]],
        409 => [[['_route' => 'GroupeTag_add_tag', '_controller' => 'App\\Controller\\GroupeTagController::addTag'], ['id'], ['POST' => 0], null, false, false, null]],
        447 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        478 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        520 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        562 => [
            [['_route' => 'api_commentaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        600 => [
            [['_route' => 'api_commentaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commentaires_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaires', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        639 => [
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        680 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        700 => [
            [['_route' => 'api_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        719 => [[['_route' => 'api_competences_archive_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'archive_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        758 => [
            [['_route' => 'api_competences_valides_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        796 => [
            [['_route' => 'api_competences_valides_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_valides_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        834 => [
            [['_route' => 'api_chats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        872 => [
            [['_route' => 'api_chats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_chats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_chats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_chats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Chat', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        923 => [
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        961 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1028 => [[['_route' => 'api_apprenants_competences_acquises_apprenant_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index1', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'competences_acquises_apprenant'], ['apprenantId', 'id', 'referentielId'], ['GET' => 0], null, false, false, null]],
        1076 => [
            [['_route' => 'api_apprenant_livrable_partiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1115 => [
            [['_route' => 'api_apprenant_livrable_partiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenant_livrable_partiels_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ApprenantLivrablePartiel', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1170 => [[['_route' => 'api_competences_GetListGroupCompetences_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'GetListGroupCompetences'], ['id'], ['GET' => 0], null, false, false, null]],
        1218 => [[['_route' => 'api_groupe_tags_GroupeTag_remove_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::removeTadd', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_remove_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        1233 => [[['_route' => 'api_groupe_tags_GroupeTag_add_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::addTag', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        1276 => [
            [['_route' => 'api_groupe_tags_get_groupe_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get_groupe_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_groupe_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put_groupe_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delet_groupe_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delet_groupe_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1314 => [[['_route' => 'api_profils_get_list_user_profil_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_list_user_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        1330 => [[['_route' => 'api_profils_archive_ptofil_item', '_controller' => 'App\\Controller\\ProfilController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'archive_ptofil'], ['id'], ['PUT' => 0], null, false, false, null]],
        1340 => [
            [['_route' => 'api_profils_get_profil_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_profil_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put_profil_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delet_profil_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delet_profil_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1387 => [[['_route' => 'api_referentiels_referentiel_addCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_addCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        1412 => [[['_route' => 'api_referentiels_referentiel_removeCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        1438 => [
            [['_route' => 'api_tags_get_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delet_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delet_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1514 => [[['_route' => 'api_apprenants_competences_acquises_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'competences_acquises'], ['id', 'referentielId'], ['GET' => 0], null, false, false, null]],
        1547 => [[['_route' => 'api_competences_valides_statistiques_collection', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistiques', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompetencesValides', '_api_collection_operation_name' => 'statistiques'], ['id', 'referencielId'], ['GET' => 0], null, false, false, null]],
        1595 => [
            [['_route' => 'api_fil_de_discussions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1634 => [
            [['_route' => 'api_fil_de_discussions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_fil_de_discussions_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FilDeDiscussion', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1679 => [
            [['_route' => 'api_utilisateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1718 => [
            [['_route' => 'api_utilisateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1759 => [
            [['_route' => 'api_briefs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1798 => [
            [['_route' => 'api_briefs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_briefs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_briefs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1844 => [
            [['_route' => 'api_brief_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1883 => [
            [['_route' => 'api_brief_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_brief_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefApprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1924 => [
            [['_route' => 'api_brief_ma_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1963 => [
            [['_route' => 'api_brief_ma_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_brief_ma_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BriefMaPromo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2015 => [
            [['_route' => 'api_etat_brief_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2054 => [
            [['_route' => 'api_etat_brief_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_etat_brief_groupes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EtatBriefGroupe', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2109 => [
            [['_route' => 'api_group_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2151 => [
            [['_route' => 'api_group_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2172 => [
            [['_route' => 'api_group_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        2192 => [[['_route' => 'api_group_competences_archive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'archive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        2211 => [[['_route' => 'api_group_competences_desarchive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'desarchive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        2251 => [
            [['_route' => 'api_group_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2290 => [
            [['_route' => 'api_group_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2329 => [
            [['_route' => 'api_groupe_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2368 => [
            [['_route' => 'api_groupe_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2424 => [
            [['_route' => 'api_livrable_attendus_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2463 => [
            [['_route' => 'api_livrable_attendus_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2506 => [
            [['_route' => 'api_livrable_attendu_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2545 => [
            [['_route' => 'api_livrable_attendu_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendu_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttenduApprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2586 => [
            [['_route' => 'api_livrable_partiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2625 => [
            [['_route' => 'api_livrable_partiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partiels_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartiel', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2665 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2704 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2749 => [
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2788 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2828 => [
            [['_route' => 'api_profil_sorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2867 => [
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2903 => [
            [['_route' => 'api_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2942 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2990 => [
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3029 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        3069 => [
            [['_route' => 'api_ressources_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3108 => [
            [['_route' => 'api_ressources_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ressources_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ressources_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3145 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3184 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3261 => [[['_route' => 'competences_acquises_apprenant', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index1'], ['apprenantId', 'id', 'referentielId'], ['GET' => 0], null, false, false, null]],
        3316 => [[['_route' => 'referentiel_addCompetences', '_controller' => 'App\\Controller\\ReferentielController::index'], ['id'], ['POST' => 0], null, false, false, null]],
        3331 => [[['_route' => 'PutReferentielArchive', '_controller' => 'App\\Controller\\ReferentielController'], ['id'], ['PUT' => 0], null, false, false, null]],
        3357 => [[['_route' => 'Referentiel_removeCompetence', '_controller' => 'App\\Controller\\ReferentielController::removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        3376 => [[['_route' => 'PutReferentielDesarchive', '_controller' => 'App\\Controller\\ReferentielController::DesarchiveReferentiel'], ['id'], ['PUT' => 0], null, false, false, null]],
        3449 => [[['_route' => 'competences_acquises', '_controller' => 'App\\Controller\\CompetencesAcquisesController::index'], ['id', 'referentielId'], ['GET' => 0], null, false, false, null]],
        3482 => [
            [['_route' => 'statistiques', '_controller' => 'App\\Controller\\CompetencesAcquisesController::statistique'], ['id', 'referencielId'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
