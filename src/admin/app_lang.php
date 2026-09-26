<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponentes';
$lang['admin_content'] = 'Saturs';
$lang['admin_database_backup'] = 'Datubāzes Dublējumi';
$lang['admin_extensions'] = 'Paplašinājumi';
$lang['admin_firewall'] = 'Ugunsmūris';
$lang['admin_help'] = 'Palīdzība';
$lang['admin_languages'] = 'Valodas';
$lang['admin_logs'] = 'Sistēmas Žurnāli';
$lang['admin_media'] = 'Mediju Bibliotēka';
$lang['admin_modules'] = 'Moduļi';
$lang['admin_plugins'] = 'Spraudņi';
$lang['admin_reports'] = 'Aktivitāžu Žurnāls';
$lang['admin_settings'] = 'Sistēmas Iestatījumi';
$lang['admin_sysinfo'] = 'Sistēmas Informācija';
$lang['admin_system'] = 'Sistēma';
$lang['admin_system_firewall'] = 'Sistēmas ugunsmūris';
$lang['admin_themes'] = 'Tēmas';
$lang['admin_updates'] = 'Sistēmas Atjauninājumi';
$lang['admin_users'] = 'Lietotāji';
$lang['admin_view_site'] = 'Skatīt Lapu';
$lang['per_page'] = 'Uz Lapu';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Paldies par izveidošanu ar <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nav aktīvu vienumu.} other{<b>#</b> no <b>%s</b> vienumiem ir aktīvi.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Instalēšana neizdevās: %s';
$lang['admin_install_location_app'] = 'Tikai šai lietotnei';
$lang['admin_install_location_core'] = 'Visas lietotnes';
$lang['admin_install_location_select'] = '&#151; Izvēlieties atrašanās vietu &#151;';
$lang['admin_install_update_confirm'] = 'Vai tiešām vēlaties atjaunināt šo pakotni?';
$lang['admin_install_update_error'] = 'Neizdevās atjaunināt pakotni.';
$lang['admin_install_update_skip_confirm'] = 'Vai tiešām vēlaties izlaist šo atjauninājumu?';
$lang['admin_install_update_skip_error'] = 'Neizdevās izlaist šo atjauninājumu.';
$lang['admin_install_update_skip_success'] = 'Atjauninājums veiksmīgi izlaists.';
$lang['admin_install_update_success'] = 'Pakotne veiksmīgi atjaunināta.';
$lang['admin_install_upload_tip'] = 'Instalējiet pakotni, augšupielādējot šeit tās <b>.zip</b> failu.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nevar notīrīt vecās dublējuma failus.';
$lang['admin_database_backup_clean_success'] = '%d dublējuma faili dzēsti. %d diska vieta atbrīvota.';
$lang['admin_database_backup_create'] = 'Izveidot Dublējumu';
$lang['admin_database_backup_create_confirm'] = 'Vai tiešāmi vēlaties izveidot dublējumu tagad?';
$lang['admin_database_backup_create_error'] = 'Nevar izveidot dublējuma failu. Pārlieciniet, vai mape <b>%s</b> ir rakstāma.';
$lang['admin_database_backup_create_success'] = 'Datubāzes dublējuma fails <b>%s</b> veiksmīgi izveidots.';
$lang['admin_database_backup_delete_confirm'] = 'Vai tiešāmi vēlaties dzēst šos dublējuma failus?';
$lang['admin_database_backup_delete_error'] = 'Nevar dzēst izvēlētos dublējuma failus.';
$lang['admin_database_backup_delete_success'] = 'Dublējuma faili veiksmīgi dzēsti.';
$lang['admin_database_backup_download_error'] = 'Nevar lejupielādēt izvēlēto dublējuma failu.';
$lang['admin_database_backup_download_success'] = 'Dublējuma fails veiksmīgi lejupielādēts.';
$lang['admin_database_backup_lock_confirm'] = 'Vai tiešāmi vēlaties noslēgt šos dublējuma failus?';
$lang['admin_database_backup_lock_error'] = 'Nevar noslēgt izvēlētos dublējuma failus.';
$lang['admin_database_backup_lock_success'] = 'Dublējuma faili veiksmīgi noslēgti.';
$lang['admin_database_backup_locked_error'] = 'Nevar dzēst noslēgtos dublējuma failus.';
$lang['admin_database_backup_missing_error'] = 'Dublējuma fails nav atrasts.';
$lang['admin_database_backup_unlock_confirm'] = 'Vai tiešāmi vēlaties atslēgt šos dublējuma failus?';
$lang['admin_database_backup_unlock_error'] = 'Nevar atslēgt izvēlētos dublējuma failus.';
$lang['admin_database_backup_unlock_success'] = 'Dublējuma faili veiksmīgi atslēgti.';
$lang['admin_database_prune'] = 'Notīrīt';
$lang['admin_database_prune_confirm'] = 'Vai tiešāmi vēlaties notīrīt datubāzi? Dublējums tiks izveidots pirms izpildes.';
$lang['admin_database_prune_error'] = 'Nevar notīrīt datubāzi.';
$lang['admin_database_prune_next'] = 'Nākamā notīrīšana: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Datubāze veiksmīgi notīrīta.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Dzēst Žurnāļus';
$lang['admin_logs_delete_confirm'] = 'Vai tiešāmi vēlaties dzēst izvēlētos žurnāļu failus?';
$lang['admin_logs_delete_error'] = 'Nevar dzēst žurnāļu failus.';
$lang['admin_logs_delete_success'] = 'Žurnāļu faili veiksmīgi dzēsti.';
$lang['admin_logs_error_disabled'] = 'Žurnālēšana patlabā nav ieslēgta.';
$lang['admin_logs_error_empty'] = 'Žurnāļu faili nav atrasti.';
$lang['admin_logs_error_missing'] = 'Vai nu žurnāļa fails nav atrasts, vai tas bija tukšs.';
$lang['admin_logs_tip'] = 'Žurnālēšana var ātri radīt ļoti lielus failus. Dzīvošām lapām, domājiet par veco žurnāļu failu dzēšanu.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Vai tiešāmi vēlaties dzēst izvēlētos e-pastus?';
$lang['admin_emails_delete_error'] = 'Nevar dzēst izvēlētos e-pastus.';
$lang['admin_emails_delete_success'] = 'Izvēlētie e-pasti veiksmīgi dzēsti.';
$lang['admin_emails_email_from'] = 'Nosūtīts No';
$lang['admin_emails_mail_queue'] = 'E-pasta Rinda';
$lang['admin_emails_mailer'] = 'Masu E-pasts';
$lang['admin_emails_search'] = 'Meklēt e-pastus pēc tēmas vai satura...';
$lang['admin_emails_send_error'] = 'Neizdevās ievietot e-pastu rindā. Lūdzu mēģiniet vēlreiz.';
$lang['admin_emails_send_none'] = 'Neviens lietotājs neatbilst jūsu izvēlētajiem kritērijiem.';
$lang['admin_emails_send_success'] = 'E-pasts ir ievietots rindā un tiks nosūtīts drīz.';
$lang['admin_emails_send_to_banned'] = 'Nosūtīt bloķētiem lietotājiem.';
$lang['admin_emails_send_to_deleted'] = 'Nosūtīt dzēstiem lietotājiem.';
$lang['admin_emails_send_to_disabled'] = 'Nosūtīt neaktīviem lietotājiem.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Pievienot Lietotāju';
$lang['admin_users_all_users'] = 'Visi Lietotāji';
$lang['admin_users_ban_confirm'] = 'Vai tiešām vēlaties liegt piekļuvi atlasītajiem lietotājiem?';
$lang['admin_users_ban_error'] = 'Nevar liegt piekļuvi atlasītajiem lietotājiem.';
$lang['admin_users_ban_success'] = 'Atlasītajiem lietotājiem piekļuve veiksmīgi liegta.';
$lang['admin_users_delete_confirm'] = 'Vai tiešām vēlaties dzēst atlasītos lietotājus?';
$lang['admin_users_delete_error'] = 'Nevar dzēst atlasītos lietotājus.';
$lang['admin_users_delete_success'] = 'Atlasītie lietotāji veiksmīgi izdzēsti.';
$lang['admin_users_disable_confirm'] = 'Vai tiešām vēlaties atspējot atlasītos lietotājus?';
$lang['admin_users_disable_error'] = 'Nevar atspējot atlasītos lietotājus.';
$lang['admin_users_disable_success'] = 'Atlasītie lietotāji veiksmīgi atspējoti.';
$lang['admin_users_edit'] = 'Rediģēt Lietotāju';
$lang['admin_users_edit_error'] = 'Nevar atjaunināt lietotāju.';
$lang['admin_users_edit_success'] = 'Lietotājs veiksmīgi atjaunināts.';
$lang['admin_users_enable_confirm'] = 'Vai tiešām vēlaties iespējot atlasītos lietotājus?';
$lang['admin_users_enable_error'] = 'Nevar iespējot atlasītos lietotājus.';
$lang['admin_users_enable_success'] = 'Atlasītie lietotāji veiksmīgi iespējoti.';
$lang['admin_users_groups'] = 'Grupas';
$lang['admin_users_lock_confirm'] = 'Vai tiešām vēlaties noslēgt izvēlētos lietotājus?';
$lang['admin_users_lock_error'] = 'Nevar noslēgt izvēlētos lietotājus.';
$lang['admin_users_lock_success'] = 'Izvēlētie lietotāji veiksmīgi noslēgti.';
$lang['admin_users_logged'] = 'Pieslēgušies Lietotāji';
$lang['admin_users_manage'] = 'Pārvaldīt Lietotājus';
$lang['admin_users_remove_confirm'] = 'Vai tiešām vēlaties neatgriezeniski dzēst atlasītos lietotājus un visus viņu datus?';
$lang['admin_users_remove_error'] = 'Nevar neatgriezeniski dzēst atlasītos lietotājus un visus viņu datus.';
$lang['admin_users_remove_success'] = 'Atlasītie lietotāji un visi viņu dati veiksmīgi izdzēsti.';
$lang['admin_users_restore_confirm'] = 'Vai tiešām vēlaties atjaunot atlasītos lietotājus?';
$lang['admin_users_restore_error'] = 'Nevar atjaunot atlasītos lietotājus.';
$lang['admin_users_restore_success'] = 'Atlasītie lietotāji veiksmīgi atjaunoti.';
$lang['admin_users_search'] = 'Meklēt pēc vārda, lietotājvārda vai e-pasta...';
$lang['admin_users_unban_confirm'] = 'Vai tiešām vēlaties atļaut piekļuvi atlasītajiem lietotājiem?';
$lang['admin_users_unban_error'] = 'Nevar atļaut piekļuvi atlasītajiem lietotājiem.';
$lang['admin_users_unban_success'] = 'Atlasītajiem lietotājiem piekļuve veiksmīgi atļauta.';
$lang['admin_users_unlock_confirm'] = 'Vai tiešām vēlaties atslēgt izvēlētos lietotājus?';
$lang['admin_users_unlock_error'] = 'Nevar atslēgt izvēlētos lietotājus.';
$lang['admin_users_unlock_success'] = 'Izvēlētie lietotāji veiksmīgi atslēgti.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Notīrīt Žurnālus';
$lang['admin_reports_clear_confirm'] = 'Vai tiešām vēlaties notīrīt darbību žurnālu?';
$lang['admin_reports_clear_error'] = 'Nevar notīrīt darbību žurnālu.';
$lang['admin_reports_clear_success'] = 'Darbību žurnāls veiksmīgi notīrīts.';
$lang['admin_reports_latest_actions'] = 'Jaunākās Darbības';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Vai tiešām vēlaties dzēst izvēlētos failus?';
$lang['admin_media_delete_error'] = 'Nevar dzēst failus.';
$lang['admin_media_delete_success'] = 'Faili veiksmīgi dzēsti.';
$lang['admin_media_file_delete_error'] = 'Nevar dzēst failu.';
$lang['admin_media_file_delete_success'] = 'Fails veiksmīgi dzēsts.';
$lang['admin_media_file_update_error'] = 'Nevar atjaunināt failu.';
$lang['admin_media_file_update_success'] = 'Fails veiksmīgi atjaunināts.';
$lang['admin_media_search'] = 'Meklēt pēc nosaukuma, apraksta vai faila nosaukuma...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nav aktīvu moduļu.} other{<b>#</b> no <b>%s</b> moduļiem ir aktīvi.}';
$lang['admin_modules_add'] = 'Pievienot Moduli';
$lang['admin_modules_delete_confirm'] = 'Vai tiešām vēlaties dzēst moduli: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nevar dzēst moduli.';
$lang['admin_modules_delete_error_active'] = 'Aktīvos moduļus nevar dzēst.';
$lang['admin_modules_delete_success'] = 'Modulis veiksmīgi dzēsts.';
$lang['admin_modules_disable_all_confirm'] = 'Vai tiešām vēlaties atspējot visus moduļus?';
$lang['admin_modules_disable_all_error'] = 'Nevar atspējot visus moduļus.';
$lang['admin_modules_disable_all_success'] = 'Visi moduļi veiksmīgi atspējoti.';
$lang['admin_modules_disable_confirm'] = 'Vai tiešām vēlaties atspējot moduli: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nevar deaktivēt moduli.';
$lang['admin_modules_disable_success'] = 'Modulis veiksmīgi deaktivēts.';
$lang['admin_modules_enable_all_confirm'] = 'Vai tiešām vēlaties ieslēgt visus moduļus?';
$lang['admin_modules_enable_all_error'] = 'Nevar ieslēgt visus moduļus.';
$lang['admin_modules_enable_all_success'] = 'Visi moduļi veiksmīgi ieslēgti.';
$lang['admin_modules_enable_confirm'] = 'Vai tiešām vēlaties ieslēgt moduli: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nevar aktivizēt moduli.';
$lang['admin_modules_enable_success'] = 'Modulis veiksmīgi aktivizēts.';
$lang['admin_modules_global'] = 'Globālais modulis (koplietots)';
$lang['admin_modules_install_confirm'] = 'Vai tiešām vēlaties instalēt moduli: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Moduļa instalēšana neizdevās.';
$lang['admin_modules_install_success'] = 'Modulis veiksmīgi instalēts.';
$lang['admin_modules_install_tip'] = 'Moduļi pievieno jaunas funkcijas un funkcionalitāti jūsu lapai. Pārlūkojiet pieejamos moduļus <a href="%s" target="_blank" rel="noopener">moduļu direktorijā</a> vai augšupielādējiet vienu kā <b>.zip</b> pakotni.';
$lang['admin_modules_update_confirm'] = 'Vai tiešām vēlaties atjaunināt šo moduli?';
$lang['admin_modules_update_error'] = 'Neizdevās atjaunināt moduli.';
$lang['admin_modules_update_success'] = 'Modulis veiksmīgi atjaunināts.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nav aktīvu spraudņu.} other{<b>#</b> no <b>%s</b> spraudņiem ir aktīvi.}';
$lang['admin_plugins_add'] = 'Pievienot Spraudni';
$lang['admin_plugins_delete_confirm'] = 'Vai tiešām vēlaties dzēst spraudni: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nevar dzēst spraudni.';
$lang['admin_plugins_delete_error_active'] = 'Aktīvos spraudņus nevar dzēst.';
$lang['admin_plugins_delete_success'] = 'Spraudnis veiksmīgi dzēsts.';
$lang['admin_plugins_disable_all_confirm'] = 'Vai tiešām vēlaties atspējot visus spraudņus?';
$lang['admin_plugins_disable_all_error'] = 'Nevar atspējot visus spraudņus.';
$lang['admin_plugins_disable_all_success'] = 'Visi spraudņi veiksmīgi atspējoti.';
$lang['admin_plugins_disable_confirm'] = 'Vai tiešām vēlaties atspējot spraudni: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nevar deaktivēt spraudni.';
$lang['admin_plugins_disable_success'] = 'Spraudnis veiksmīgi deaktivēts.';
$lang['admin_plugins_enable_all_confirm'] = 'Vai tiešām vēlaties ieslēgt visus spraudņus?';
$lang['admin_plugins_enable_all_error'] = 'Nevar ieslēgt visus spraudņus.';
$lang['admin_plugins_enable_all_success'] = 'Visi spraudņi veiksmīgi ieslēgti.';
$lang['admin_plugins_enable_confirm'] = 'Vai tiešām vēlaties ieslēgt spraudni: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nevar aktivizēt spraudni.';
$lang['admin_plugins_enable_success'] = 'Spraudnis veiksmīgi aktivizēts.';
$lang['admin_plugins_global'] = 'Globālais spraudnis (koplietots)';
$lang['admin_plugins_install_confirm'] = 'Vai tiešām vēlaties instalēt spraudni: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Spraudņa instalēšana neizdevās.';
$lang['admin_plugins_install_success'] = 'Spraudnis veiksmīgi instalēts.';
$lang['admin_plugins_install_tip'] = 'Spraudņi paplašina esošās funkcijas ar papildu opcijām vai integrācijām. Instalējiet no <a href="%s" target="_blank" rel="noopener">spraudņu direktorijas</a> vai augšupielādējiet <b>.zip</b> failu.';
$lang['admin_plugins_update_confirm'] = 'Vai tiešām vēlaties atjaunināt šo spraudni?';
$lang['admin_plugins_update_error'] = 'Neizdevās atjaunināt spraudni.';
$lang['admin_plugins_update_success'] = 'Spraudnis veiksmīgi atjaunināts.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Pievienot Tēmu';
$lang['admin_themes_delete_confirm'] = 'Vai tiešām vēlaties dzēst tēmu: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nevar dzēst tēmu.';
$lang['admin_themes_delete_error_active'] = 'Jūs nevarat dzēst pašreiz aktīvo tēmu.';
$lang['admin_themes_delete_success'] = 'Tēma veiksmīgi dzēsta.';
$lang['admin_themes_disable_confirm'] = 'Vai tiešām vēlaties deaktivizēt tēmu: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Neizdevās deaktivizēt tēmu.';
$lang['admin_themes_disable_error_active'] = 'Aktīvo tēmu nevar atspējot.';
$lang['admin_themes_disable_success'] = 'Tēma veiksmīgi deaktivizēta.';
$lang['admin_themes_enable_confirm'] = 'Vai tiešām vēlaties ieslēgt tēmu: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nevar aktivizēt tēmu.';
$lang['admin_themes_enable_success'] = 'Tēma veiksmīgi aktivizēta.';
$lang['admin_themes_install_confirm'] = 'Vai tiešām vēlaties instalēt tēmu: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Tēmas instalēšana neizdevās.';
$lang['admin_themes_install_success'] = 'Tēma veiksmīgi instalēta.';
$lang['admin_themes_install_tip'] = 'Tēmas maina jūsu lapas izskatu un izkārtojumu. Izvēlieties no <a href="%s" target="_blank" rel="noopener">tēmu bibliotēkas</a> vai augšupielādējiet <b>.zip</b> failu, lai instalētu savu.';
$lang['admin_themes_none_tip'] = 'Šī lietojumprogramma darbojas bez motīva. Instalējiet motīvu, lai pielāgotu publisko saskarni.';
$lang['admin_themes_update_confirm'] = 'Vai tiešām vēlaties atjaunināt šo tēmu?';
$lang['admin_themes_update_error'] = 'Neizdevās atjaunināt tēmu.';
$lang['admin_themes_update_success'] = 'Tēma veiksmīgi atjaunināta.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Izvēlnes';
$lang['admin_menus_assign_error'] = 'Nevar atjaunināt izvēlņu atrašanās vietas.';
$lang['admin_menus_assign_success'] = 'Izvēlņu atrašanās vietas veiksmīgi atjauninātas.';
$lang['admin_menus_header'] = 'Ir pieejamas <b>%s</b> izvēlnes atrašanās vietas.';
$lang['admin_menus_location'] = 'Atrašanās Vieta';
$lang['admin_menus_locations'] = 'Izvēlņu Atrašanās Vietas';
$lang['admin_menus_manage'] = 'Pārvaldīt Izvēlnes';
$lang['admin_menus_menu'] = 'Piešķirtā Izvēlne';
$lang['admin_menus_none'] = '&#151; Neviena &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Pievienot valodu';
$lang['admin_languages_default_confirm'] = 'Vai tiešām vēlaties padarīt šo valodu par lapas noklusējuma valodu?';
$lang['admin_languages_default_error'] = 'Nevar mainīt noklusējuma valodu.';
$lang['admin_languages_default_error_nochange'] = 'Šī valoda jau ir noklusējuma valoda.';
$lang['admin_languages_default_success'] = 'Noklusējuma valoda veiksmīgi mainīta.';
$lang['admin_languages_delete_confirm'] = 'Vai tiešām vēlaties dzēst valodu: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Valodas dzēšana neizdevās.';
$lang['admin_languages_delete_error_active'] = 'Aktīvās valodas nevar dzēst.';
$lang['admin_languages_delete_error_default'] = 'Noklusējuma valodu nevar dzēst.';
$lang['admin_languages_delete_success'] = 'Valoda veiksmīgi izdzēsta.';
$lang['admin_languages_disable_all_confirm'] = 'Vai tiešām vēlaties atspējot visas valodas?';
$lang['admin_languages_disable_all_error'] = 'Nevar atspējot visas valodas.';
$lang['admin_languages_disable_all_success'] = 'Visas valodas veiksmīgi atspējotas.';
$lang['admin_languages_disable_confirm'] = 'Vai tiešām vēlaties atspējot valodu: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nevar atspējot valodu.';
$lang['admin_languages_disable_error_default'] = 'Noklusējuma valodu nevar deaktivizēt.';
$lang['admin_languages_disable_error_nochange'] = 'Šī valoda jau ir atspējota.';
$lang['admin_languages_disable_success'] = 'Valoda veiksmīgi atspējota.';
$lang['admin_languages_enable_all_confirm'] = 'Vai tiešām vēlaties ieslēgt visas valodas?';
$lang['admin_languages_enable_all_error'] = 'Nevar ieslēgt visas valodas.';
$lang['admin_languages_enable_all_success'] = 'Visas valodas veiksmīgi ieslēgtas.';
$lang['admin_languages_enable_confirm'] = 'Vai tiešām vēlaties ieslēgt valodu: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nevar ieslēgt valodu.';
$lang['admin_languages_enable_error_nochange'] = 'Šī valoda jau ir ieslēgta.';
$lang['admin_languages_enable_success'] = 'Valoda veiksmīgi ieslēgta.';
$lang['admin_languages_install_confirm'] = 'Vai tiešām vēlaties instalēt valodu: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Valodas instalēšana neizdevās.';
$lang['admin_languages_install_success'] = 'Valoda veiksmīgi instalēta.';
$lang['admin_languages_install_tip'] = 'Valodas pievieno tulkojumus jūsu vietnes saskarnei un saturam. Pārlūkojiet pieejamās valodas <a href="%s" target="_blank" rel="noopener">valodu direktorijā</a> vai augšupielādējiet <b>.zip</b> pakotni, lai instalētu savu.';
$lang['admin_languages_tip'] = 'Ieslēdziet, atspējojiet un iestatiet lapas noklusējuma valodu. Ieslēgtās valodas ir pieejamas lapas apmeklētājiem.';
$lang['admin_languages_update_confirm'] = 'Vai tiešām vēlaties atjaunināt šo valodu?';
$lang['admin_languages_update_error'] = 'Neizdevās atjaunināt valodu.';
$lang['admin_languages_update_success'] = 'Valoda veiksmīgi atjaunināta.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Pakotne jau pastāv.';
$lang['package_archive_download_failed'] = 'Neizdevās lejupielādēt pakotnes arhīvu.';
$lang['package_backup_create_error'] = 'Neizdevās izveidot pakotnes dublējumu.';
$lang['package_backup_dir_failed'] = 'Neizdevās izveidot dublējuma direktoriju %s';
$lang['package_backup_missing'] = 'Dublējuma fails neeksistē.';
$lang['package_backup_path_error'] = 'Nevarēja atrisināt dublējuma faila ceļu.';
$lang['package_backup_request_invalid'] = 'Nederīgs dublējuma pieprasījums.';
$lang['package_backup_restore_error'] = 'Neizdevās atjaunot pakotnes dublējumu.';
$lang['package_catalog_type_unknown'] = 'Nezināms kataloga tips.';
$lang['package_checksum_error'] = 'Pakotnes kontroļsummas (checksum) pārbaude neizdevās.';
$lang['package_copy_files_error'] = 'Neizdevās nokopēt pakotnes failus uz galamērķi.';
$lang['package_copy_updates_error'] = 'Neizdevās nokopēt atjauninājuma failus uz galamērķi.';
$lang['package_dest_dir_failed'] = 'Neizdevās izveidot mērķa direktoriju %s';
$lang['package_destination_error'] = 'Nevarēja atrisināt pakotnes galamērķi.';
$lang['package_download_dir_failed'] = 'Neizdevās izveidot lejupielādes direktoriju %s';
$lang['package_download_empty'] = 'Pakotnes lejupielāde atgrieza tukšu atbildi.';
$lang['package_download_request_invalid'] = 'Nederīgs pakotnes lejupielādes pieprasījums.';
$lang['package_extract_failed'] = 'Neizdevās atarhivēt ZIP failu %s';
$lang['package_invalid_lang_files'] = 'Nederīga valoda — trūkst lietotnes obligāto valodas failu.';
$lang['package_invalid_lang_structure'] = 'Nederīga valoda — trūkst admin un/vai ci3 direktoriju.';
$lang['package_invalid_missing_info'] = 'Nederīgs %s: trūkst "info.php".';
$lang['package_invalid_module_structure'] = 'Nederīgs modulis — trūkst obligāto config un/vai controllers direktoriju.';
$lang['package_invalid_plugin_boot'] = 'Nederīgs spraudnis (plugin) — trūkst "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Nederīgs spraudnis (plugin) — spraudņi nedrīkst saturēt kontrollerus vai skatus (views).';
$lang['package_invalid_theme_boot'] = 'Nederīgs motīvs — trūkst "boot.php".';
$lang['package_invalid_theme_views'] = 'Nederīgs motīvs — trūkst views direktorija.';
$lang['package_no_root_dir'] = 'Pakotne nesatur saknes (root) direktoriju.';
$lang['package_not_downloadable'] = 'Pakotne nav publiski lejupielādējama.';
$lang['package_not_in_registry'] = 'Pakotne nav pieejama publiskajā reģistrā.';
$lang['package_request_invalid'] = 'Nederīgs pakotnes pieprasījums.';
$lang['package_rollback_request_invalid'] = 'Nederīgs atsaukšanas (rollback) pieprasījums.';
$lang['package_root_mismatch'] = 'Pakotnes arhīva saknes direktorija neatbilst %s';
$lang['package_single_root_required'] = 'Pakotnei jāsatur tieši viena saknes direktorija.';
$lang['package_source_error'] = 'Nevarēja atrisināt pakotnes avotu.';
$lang['package_system_core_restricted'] = 'Sistēmas komponentus nevar instalēt kā pakotnes.';
$lang['package_temp_dir_failed'] = 'Neizdevās izveidot pagaidu direktoriju %s';
$lang['package_type_unknown'] = 'Nezināms pakotnes tips.';
$lang['package_update_request_invalid'] = 'Nederīgs pakotnes atjaunināšanas pieprasījums.';
$lang['package_update_root_mismatch'] = 'Atjauninājuma arhīva saknes direktorija neatbilst %s.';
$lang['package_upload_dir_failed'] = 'Neizdevās izveidot augšupielādes direktoriju %s';
$lang['package_url_invalid'] = 'Nederīgs pakotnes izplatīšanas URL.';
$lang['package_write_failed'] = 'Neizdevās ierakstīt pakotni direktorijā %s';
$lang['package_zip_not_found'] = 'Pakotnes ZIP fails neeksistē: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Pieejami jauni atjauninājumi!';
$lang['update_backup_error'] = 'Nevar izveidot esošās paketes dublējumu. Atjaunināšana tika pārtraukta.';
$lang['update_check_disabled'] = 'Automātiskā atjauninājumu pārbaude ir atspējota. Iespējojiet to, lai skatītu atjauninājumus.';
$lang['update_check_error'] = 'Pašlaik nevar veikt atjauninājumu pārbaudi.';
$lang['update_check_success'] = 'Atjauninājumu pārbaude veiksmīgi pabeigta.';
$lang['update_install_error'] = 'Paketi nevarēja instalēt. Iepriekšējā versija tika saglabāta.';
$lang['update_install_success'] = 'Pakete veiksmīgi atjaunināta uz jaunāko versiju.';
$lang['update_interval_3days'] = 'Katras 3 dienas';
$lang['update_interval_biweekly'] = 'Katras 2 nedēļas';
$lang['update_interval_daily'] = 'Katru dienu';
$lang['update_interval_monthly'] = 'Reizi mēnesī';
$lang['update_interval_weekly'] = 'Reizi nedēļā';
$lang['update_not_available'] = 'Jūsu vietne ir atjaunināta.';
$lang['update_rollback_confirm'] = 'Vai tiešām vēlaties atjaunot iepriekšējo versiju?';
$lang['update_rollback_error'] = 'Nevar atjaunot iepriekšējo versiju. Var būt nepieciešama manuāla iejaukšanās.';
$lang['update_rollback_success'] = 'Iepriekšējā versija veiksmīgi atjaunota.';
$lang['updates_available'] = 'Pieejamie atjauninājumi';
$lang['updates_check_now'] = 'Pārbaudīt tagad';
$lang['updates_check_now_confirm'] = 'Vai tiešām vēlaties pārbaudīt atjauninājumus tagad?';
$lang['updates_current_version'] = 'Pašreizējā versija';
$lang['updates_enable'] = 'Iespējot atjauninājumus';
$lang['updates_last_check'] = 'Pēdējā pārbaude: %s';
$lang['updates_latest_version'] = 'Jaunākā versija';
$lang['updates_next_check'] = 'Nākamā ieplānotā pārbaude: %s';
$lang['updates_previous_version'] = 'Iepriekšējā versija';
$lang['updates_recent'] = 'Nesen atjaunināts';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Norādītās IP adreses bloķēšana neizdevās.';
$lang['admin_firewall_ban_success'] = 'IP adrese ir veiksmīgi bloķēta.';
$lang['admin_firewall_block_ip'] = 'Bloķēt IP adresi';
$lang['admin_firewall_delete_confirm'] = 'Vai tiešām vēlaties atbloķēt izvēlētās IP adreses?';
$lang['admin_firewall_delete_error'] = 'Neizdevās atbloķēt izvēlētās IP adreses.';
$lang['admin_firewall_delete_success'] = 'Izvēlētās IP adreses ir veiksmīgi atbloķētas.';
$lang['admin_firewall_duration'] = 'Bloķēšanas ilgums';
$lang['admin_firewall_permanent'] = 'Pastāvīgs';
$lang['admin_firewall_reason'] = 'Bloķēšanas iemesls';
$lang['admin_firewall_tip'] = 'Skatīt un pārvaldīt IP adreses, ko ugunsmūris bloķējis atkārtotu pārkāpumu vai aizdomīgas darbības dēļ.';

// Settings
$lang['404_ban_duration'] = '404 bloķēšanas ilgums';
$lang['404_threshold'] = '404 kļūdu limits';
$lang['uri_ban_duration'] = 'URI bloķēšanas ilgums';
$lang['uri_strike_threshold'] = 'URI pārkāpumu limits';
