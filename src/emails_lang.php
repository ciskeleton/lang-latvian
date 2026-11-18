<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Pieejami sistēmas atjauninājumi';
$lang['emails_updates_available_message'] = <<<EOT
Sveiki,

Ir atklāti jauni sistēmas atjauninājumi {site_anchor}.

Šie atjauninājumi var ietvert drošības labojumus, veiktspējas uzlabojumus vai jaunas funkcijas.
Iesakām tos pārskatīt pēc iespējas ātrāk.

Pieejamos atjauninājumus varat pārskatīt un pārvaldīt administratora paneļā:
{link}

Ja jau esat pārskatījis vai piemērojis atjauninājumus, nav nepieciešama nekāda turpmāka rīcība.

Šis ir automatizēts sistēmas ziņojums, ko nosūtījis {site_name}.
Lūdzu, neatbildiet uz šo e-pastu.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Konta aktivizācija';
$lang['emails_account_activation_request_message'] = <<<EOT
Sveiki, {name},

Paldies par reģistrēšanos {site_anchor}. Jūsu konts ir izveidots un ir jāaktivizē, pirms to varat izmantot.

Lai aktivizētu savu kontu, noklikšķiniet uz šīs saites vai nokopējiet un ielīmējiet to savā pārlūkprogrammā:
{link}

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Jauna aktivizācijas saite';
$lang['emails_account_activation_resend_message'] = <<<EOT
Sveiki, {name},

Jūs nesen pieprasījāt jaunu aktivizācijas saiti {site_anchor}, jo Jūsu konts nebija aktīvs.
Lai aktivizētu savu kontu, noklikšķiniet uz šīs saites vai nokopējiet un ielīmējiet to savā pārlūkprogrammā:
{link}

Ja Jūs to nepieprasījāt, nav nepieciešami turpmāki pasākumi.

Šī darbība tika pieprasīta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konts aktivizēts';
$lang['emails_account_activation_success_message'] = <<<EOT
Sveiki, {name},

Jūsu konts {site_anchor} ir veiksmīgi aktivizēts. Tagad varat <a href="{login_url}" target="_blank" rel="noopener">pielogoties</a> jebkurā laikā.

Mēs ceram, ka Jums patiks uzturēšanās.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konts gaida apstiprinājumu';
$lang['emails_account_approval_pending_message'] = <<<EOT
Sveiki, {name},

Paldies, ka pievienojāties {site_anchor}. Jūsu konts ir izveidots, bet pirms tas kļūst aktīvs, tas ir jāapstiprina administratoram.
Mēs atvainojamies par šo papildu soli - tas tiek veikts tikai drošības apsvērumu dēļ.

Jūs saņemsit apstiprinājuma e-pastu, tiklīdz Jūsu konts tiks apstiprināts.

Mēs ceram, ka Jums patiks uzturēšanās.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konts apstiprināts';
$lang['emails_account_approval_success_message'] = <<<EOT
Sveiki, {name},

Lieliskas ziņas! Jūsu konts {site_anchor} ir tikko apstiprināts.

Tagad varat pieslēgties un uzreiz sākt lietot savu kontu:
{link}

Mēs esam laimi, ka esat kopā ar mums.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konts atjaunots';
$lang['emails_account_restored_message'] = <<<EOT
Sveiki, {name},

Šis e-pasts apstiprina, ka Jūsu konts {site_anchor} ir veiksmīgi atjaunots.

Laipni lūdzam atpakaļ! Mēs ceram, ka šoreiz Jūs patiks uzturēšanās.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Laipni lūdzam {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Sveiki, {name},

Vairākumam cilvēku ir patiešām garas laipinājuma e-pasta sekences pēc reģistrēšanās viņu vietnē.

Labas ziņas: mēs neesam kā vairākums cilvēku.
Bet, mēs tomēr vēlamies jūs laipni sagaidīt un pateikties, ka pievienojāties {site_anchor}.

Ceram, ka jums patiks uzturēšanās. Lūdzam pieņemt mūsu labos vēlējumus.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'E-pasta maiņas pieprasījums';
$lang['emails_email_change_request_message'] = <<<EOT
Sveiki, {name},

Jūs saņēmāt šo e-pastu, jo mēs saņēmām pieprasījumu mainīt e-pastu Jūsu kontam {site_anchor}.

Lai turpinātu, noklikšķiniet uz šīs saites vai nokopējiet un ielīmējiet to savā pārlūkprogrammā:
{link}

Ja Jūs neesat pieprasījis mainīt e-pasta adresi, nav nepieciešami turpmāki pasākumi.

Šī darbība tika pieprasīta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-pasta adrese nomainīta';
$lang['emails_email_change_success_message'] = <<<EOT
Sveiki, {name},

Šis e-pasts apstiprina, ka Jūsu {site_anchor} lietotā e-pasta adrese ir veiksmīgi mainīta.

Ja Jūs neesat veicis šo darbību, lūdzam sazināties ar mums cik ātrāk iespējams, lai atrisinātu šo problēmu.

Šī darbība tika veikta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Neveiksmīgas pieteikšanās brīdinājums';
$lang['emails_login_alert_failure_message'] = <<<EOT
Sveiki, {name},

Nesen kāds ir mēģinājis pieslēgties Jūsu {site_name} kontam, izmantojot nepareizu paroli.

Servera datums: {date}
Ierīce: {browser}, {platform}
IP adrese: {ip_link}

Ja tas nebūt Jūs, nerūpējieties - pieslēgšanās mēģinājums neizdevās.

Ja tas bijāt Jūs, bet Jūs neatceraties paroli, noklikšķiniet uz zemāk esošo saiti, lai to atiestatītu:
{reset_link}

Ja Jums ir problēmas ar pieslēgšanos, sazinieties ar mūsu komandu vai lūdziet vienreizēju pieslēgšanās saiti.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Veiksmīgas pieteikšanās paziņojums';
$lang['emails_login_alert_success_message'] = <<<EOT
Sveiki, {name},

Mēs nosūtām jums šo e-pastu pēc veiksmīgas pieteikšanās jūsu {site_name} kontā.

Servera datums: {date}
Ierīce: {browser}, {platform}
IP adrese: {ip_link}

Ja tas bijāt jūs, varat droši ignorēt šo e-pastu.

Ja tas nebija jūs, lūdzu, nekavējoties mainiet savu paroli, lai aizsargātu savu kontu.

Ja nepieciešams palīdzība, sazinieties ar mūsu atbalsta komandu.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Ātrās pieteikšanās saite';
$lang['emails_login_magic_link_message'] = <<<EOT
Sveiki, {name},

Šeit ir jūsu maģiskā saite, lai pieslēgtos savam {site_name} kontam.

Noklikšķiniet uz saites zemāk, lai pieslēgtos:
{link}

Saite beidzas: {time}

Ja jūs nepieprasījāt šo saiti, varat ignorēt šo e-pastu.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Divu faktoru autentifikācija';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Sveiki, {name},

Jūsu divfaktoru autentifikācijas kods ir: <strong>{code}</strong>

Jūs varat jebkurā laikā atspējot divfaktoru autentifikāciju savu konta iestatījumos.

Šī darbība tika veikta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Paroles atiestatīšanas pieprasījums';
$lang['emails_password_change_request_message'] = <<<EOT
Sveiki, {name},

Jūs saņemat šo e-pastu, jo mēs saņēmām pieprasījumu paroles atiestatīšanai jūsu {site_name} kontam.

Noklikšķiniet uz šīs saites vai kopējiet un ielīmējiet to savā pārlūkprogrammā, ja vēlaties turpināt:
{link}

Ja jūs nepieprasījāt paroles atiestatīšanu, nav nepieciešami turpmāki pasākumi.

Šī darbība tika pieprasīta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Parole veiksmīgi nomainīta';
$lang['emails_password_change_success_message'] = <<<EOT
Sveiki, {name},

Šis e-pasts apstiprina, ka jūsu parole {site_name} ir veiksmīgi mainīta. Tagad varat <a href="{login_url}" target="_blank" rel="noopener">pieslēgties</a>, izmantojot jauno paroli.

Ja jūs neveicāt šo darbību, lūdzu, sazinieties ar mums pēc iespējas ātrāk, lai atrisinātu šo problēmu.

Šī darbība tika veikta no šīs IP adreses: {ip_link}.

Ar laba vēlējumiem,
-- {site_name} komanda.
EOT;
