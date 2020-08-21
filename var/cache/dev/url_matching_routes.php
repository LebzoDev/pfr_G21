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
        '/api/competences/add' => [
            [['_route' => 'PostCompentence', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_PostCompetence_collection', '_controller' => 'App\\Controller\\CompetenceController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'PostCompetence'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/group_competences/add' => [[['_route' => 'PostGroupCompentence', '_controller' => 'App\\Controller\\CompetenceController::indexGroup'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/groupe_tags/add' => [
            [['_route' => 'GroupeTag_add', '_controller' => 'App\\Controller\\GroupeTagController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_GroupeTag_add_collection', '_controller' => 'App\\Controller\\GroupeTagController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/referentiels' => [[['_route' => 'list_referentiels', '_controller' => 'App\\Controller\\ReferentielController::listReferentiels'], null, ['GET' => 0], null, false, false, null]],
        '/admin/referentiels/id/competences' => [[['_route' => 'list_competences_referentiel', '_controller' => 'App\\Controller\\ReferentielController::listCompetencesReferentiel'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/admin/tags/add' => [
            [['_route' => 'api_tags_PostTag_collection', '_controller' => 'App\\Controller\\TagController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_tags_api_tags_PostTag_collection_collection', '_controller' => 'App\\Controller\\TagController::index', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'api_tags_PostTag_collection'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/addUser' => [[['_route' => 'addUser', 'controller' => 'App\\Controller\\UtilisateurController::add', '__api_resource_class' => 'App\\Entity\\Utilisateur', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UtilisateurController::add'], null, ['POST' => 0], null, false, false, null]],
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
                    .'|pi(?'
                        .'|/(?'
                            .'|group_competences/([^/]++)/(?'
                                .'|a(?'
                                    .'|ddCompetence(*:229)'
                                    .'|rchive(*:243)'
                                .')'
                                .'|removeCompetence(*:268)'
                                .'|desarchive(*:286)'
                            .')'
                            .'|competences/([^/]++)/(?'
                                .'|archive(*:326)'
                                .'|desarchive(*:344)'
                            .')'
                            .'|admin/groupe_tags/([^/]++)/(?'
                                .'|removeTag(*:392)'
                                .'|addTag(*:406)'
                            .')'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:444)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:475)'
                            .'|co(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:514)'
                                .'|mpetences(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:552)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:593)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:613)'
                                            .'|/desarchive(*:632)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|p(?'
                                    .'|prenants(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:681)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:719)'
                                        .')'
                                    .')'
                                    .'|i/(?'
                                        .'|competences/([^/]++)/group_competences(*:772)'
                                        .'|admin/groupe_tags/([^/]++)/(?'
                                            .'|removeTag(*:819)'
                                            .'|addTag(*:833)'
                                        .')'
                                    .')'
                                .')'
                                .'|dmin/(?'
                                    .'|groupe_tags/([^/]++)(?'
                                        .'|(*:875)'
                                    .')'
                                    .'|profils/([^/]++)(?'
                                        .'|/(?'
                                            .'|users(*:912)'
                                            .'|archive(*:927)'
                                        .')'
                                        .'|(*:936)'
                                    .')'
                                    .'|referentiel/([^/]++)/(?'
                                        .'|addCompetence(*:982)'
                                        .'|removeCompetence(*:1006)'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:1032)'
                                    .')'
                                .')'
                            .')'
                            .'|utilisateurs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1077)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1116)'
                                .')'
                            .')'
                            .'|group(?'
                                .'|_(?'
                                    .'|competences(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1171)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:1213)'
                                            .')'
                                            .'|([^/]++)(?'
                                                .'|(*:1234)'
                                                .'|/(?'
                                                    .'|archive(*:1254)'
                                                    .'|desarchive(*:1273)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|promos(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1313)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1352)'
                                        .')'
                                    .')'
                                .')'
                                .'|e_tags(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1391)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1430)'
                                    .')'
                                .')'
                            .')'
                            .'|niveaux(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1470)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1509)'
                                .')'
                            .')'
                            .'|pro(?'
                                .'|fil(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1554)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1593)'
                                        .')'
                                    .')'
                                    .'|_sorties(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:1633)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1672)'
                                        .')'
                                    .')'
                                .')'
                                .'|mos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1708)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1747)'
                                    .')'
                                .')'
                            .')'
                            .'|referentiels(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1792)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1831)'
                                .')'
                            .')'
                            .'|tags(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1867)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1906)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/referentiel/([^/]++)/(?'
                        .'|a(?'
                            .'|ddCompetence(*:1964)'
                            .'|rchive(*:1979)'
                        .')'
                        .'|removeCompetence(*:2005)'
                        .'|desarchive(*:2024)'
                    .')'
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
        229 => [[['_route' => 'addCompetence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        243 => [[['_route' => 'PutGroupCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        268 => [[['_route' => 'removeCompetence', '_controller' => 'App\\Controller\\CompetenceController::removeCompetence'], ['id'], ['POST' => 0], null, false, false, null]],
        286 => [[['_route' => 'PutGroupCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        326 => [[['_route' => 'PutCompetenceArchive', '_controller' => 'App\\Controller\\CompetenceController'], ['id'], ['PUT' => 0], null, false, false, null]],
        344 => [[['_route' => 'PutCompetenceDesarchive', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence'], ['id'], ['PUT' => 0], null, false, false, null]],
        392 => [[['_route' => 'GroupeTag_remove_tag', '_controller' => 'App\\Controller\\GroupeTagController::removeTag'], ['id'], ['POST' => 0], null, false, false, null]],
        406 => [[['_route' => 'GroupeTag_add_tag', '_controller' => 'App\\Controller\\GroupeTagController::addTag'], ['id'], ['POST' => 0], null, false, false, null]],
        444 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        475 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        514 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        552 => [
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        593 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        613 => [
            [['_route' => 'api_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        632 => [[['_route' => 'api_competences_archive_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'archive_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        681 => [
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        719 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        772 => [[['_route' => 'api_competences_GetListGroupCompetences_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'GetListGroupCompetences'], ['id'], ['GET' => 0], null, false, false, null]],
        819 => [[['_route' => 'api_groupe_tags_GroupeTag_remove_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::removeTadd', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_remove_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        833 => [[['_route' => 'api_groupe_tags_GroupeTag_add_tag_collection', '_controller' => 'App\\Controller\\GroupeTagController::addTag', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'GroupeTag_add_tag'], ['id'], ['POST' => 0], null, false, false, null]],
        875 => [
            [['_route' => 'api_groupe_tags_get_groupe_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get_groupe_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_groupe_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put_groupe_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delet_groupe_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delet_groupe_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        912 => [[['_route' => 'api_profils_get_list_user_profil_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get_list_user_profil'], ['id'], ['GET' => 0], null, false, false, null]],
        927 => [[['_route' => 'api_profils_archive_ptofil_item', '_controller' => 'App\\Controller\\ProfilController', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'archive_ptofil'], ['id'], ['PUT' => 0], null, false, false, null]],
        936 => [
            [['_route' => 'api_profils_get_profil_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get_profil_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_profil_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put_profil_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_delet_profil_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delet_profil_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        982 => [[['_route' => 'api_referentiels_referentiel_addCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_addCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        1006 => [[['_route' => 'api_referentiels_referentiel_removeCompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'referentiel_removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        1032 => [
            [['_route' => 'api_tags_get_tag_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get_tag_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_tag_id_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put_tag_id'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delet_tag_id_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delet_tag_id'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1077 => [
            [['_route' => 'api_utilisateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1116 => [
            [['_route' => 'api_utilisateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1171 => [
            [['_route' => 'api_group_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1213 => [
            [['_route' => 'api_group_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1234 => [
            [['_route' => 'api_group_competences_get_competence_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'get_competence'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_competences_put_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'put_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1254 => [[['_route' => 'api_group_competences_archive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::ArchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'archive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        1273 => [[['_route' => 'api_group_competences_desarchive_group_competence_item', '_controller' => 'App\\Controller\\CompetenceController::DesarchiveGroupCompetence', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupCompetence', '_api_item_operation_name' => 'desarchive_group_competence'], ['id'], ['PUT' => 0], null, false, false, null]],
        1313 => [
            [['_route' => 'api_group_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1352 => [
            [['_route' => 'api_group_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_group_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupPromo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1391 => [
            [['_route' => 'api_groupe_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1430 => [
            [['_route' => 'api_groupe_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1470 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1509 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1554 => [
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1593 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1633 => [
            [['_route' => 'api_profil_sorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1672 => [
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1708 => [
            [['_route' => 'api_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1747 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1792 => [
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1831 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1867 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1906 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1964 => [[['_route' => 'referentiel_addCompetences', '_controller' => 'App\\Controller\\ReferentielController::index'], ['id'], ['POST' => 0], null, false, false, null]],
        1979 => [[['_route' => 'PutReferentielArchive', '_controller' => 'App\\Controller\\ReferentielController'], ['id'], ['PUT' => 0], null, false, false, null]],
        2005 => [[['_route' => 'Referentiel_removeCompetence', '_controller' => 'App\\Controller\\ReferentielController::removeCompetences'], ['id'], ['POST' => 0], null, false, false, null]],
        2024 => [
            [['_route' => 'PutReferentielDesarchive', '_controller' => 'App\\Controller\\ReferentielController::DesarchiveReferentiel'], ['id'], ['PUT' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
