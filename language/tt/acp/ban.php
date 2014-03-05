<?php
/**
*
* acp_ban [Tatar]
*
* @package language
* @version $Id: ban.php 9727 2009-07-07 13:33:53Z nickvergessen $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

//кери тәрҗемәсе

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 сәгать',
	'30_MINS'		=> '30 минут',
	'6_HOURS'		=> '6 сәгать',

	'ACP_BAN_EXPLAIN'	=> 'Сез монда кулланучыларга рөхсәтне исем, email яки IP-адрес буенча тыя аласыз. Бу ысуллар кулланучыларга конференциянең бернинди бүлегенә дә керергә мөмкинлек бирмәячәк. Теләсәгез, сез тыю сәбәбе тасвирламасы белән кыска язманы (3000 билгегә кадәр) калдыра аласыз, ул администратор логында күрсәтеләчәк. Шулай ук аның дәвамлыгын күрсәтеп була. Әгәр тыю, куелган вакыт арасында түгел, ә билгеле бер көнне бетүен теләсәгез «Тыю дәвамлыгы» исемлеге астында алдан бу исемлектә <span style="text-decoration: underline;">Көнгә кадәр</span> шартын сайлап, көнне <kbd>ЕЕЕЕ-АА-КК</kbd> форматында кертегез>.',

	'BAN_EXCLUDE'			=> 'Ак исемлеккә кертергә',
	'BAN_LENGTH'			=> 'Тыю дәвамлыгы',
	'BAN_REASON'			=> 'Рөхсәтне тыю сәбәбе',
	'BAN_GIVE_REASON'		=> 'Кулланучыга күрсәтелгән сәбәп',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Кара исемлеге яңартылды.',
	'BANNED_UNTIL_DATE'		=> '%s кадәр', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Бер яки берничә email адресны тыярга',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Кертелгән email адресларны кара исемлектән чыгарырга.',
	'EMAIL_BAN_EXPLAIN'			=> 'Һәр адресны яңа юлга кертегез. Йолдызны (*) бер төрле адресларны тыю өчен алмаштыру билгесе итеп кулланыгыз. Мәсәлән, <samp>*@mail.ru</samp>, <samp>*@*.domain.tld</samp> һәм б. к.',
	'EMAIL_NO_BANNED'			=> 'email адреслар кара исемлеге буш',
	'EMAIL_UNBAN'				=> 'email адресларны кабат рөхсәт итәргә яки адресларны кара исемлектән бетерергә',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Сезнең санак тычканы һәм төймәсәре белән браузер кулланып, туры килгән комбинация сайлап, бер тапкыр берничә адресны рөхсәт итеп (яки ак исемлектән бетереп) була. Ак исемлектәге адреслар аерым төс белән бирелгән.',

	'IP_BAN'					=> 'Рөхсәтне бер яки берничә IP-адреска тыярга',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Кертелгән IP-адресларны кара исемлектән чыгарырга.',
	'IP_BAN_EXPLAIN'			=> 'Һәр IP-адрес яки үзәк исемен яңа юлга кертегез. IP-адреслар аралыгын кертү өчен башын һәм ахырын сызык белән аерыгыз (-) яки алмаштыру билгесе итеп йолдыз (*) кулланыгыз.',
	'IP_HOSTNAME'				=> 'IP-адреслар яки хостлар',
	'IP_NO_BANNED'				=> 'IP-адресларның кара исемлеге буш',
	'IP_UNBAN'					=> 'IP адреслардан рөхсәтне ачарга яки адресларны ак исемлектән бетерергә',
	'IP_UNBAN_EXPLAIN'			=> 'Сезнең санак тычканы һәм төймәсәре белән браузер кулланып, туры килгән комбинация сайлап, бер тапкыр берничә IP-адресны рөхсәт итеп (яки ак исемлектән бетереп) була. Ак исемлектәге адреслар аерым төс белән бирелгән.',

	'LENGTH_BAN_INVALID'		=> 'Көн мондый форматта булырга тиеш <kbd>ЕЕЕЕ-АА-КК</kbd>.',

	'OPTIONS_BANNED'			=> 'Кара исемлек',
	'OPTIONS_EXCLUDED'			=> 'Ак исемлек',

	'PERMANENT'		=> 'Чикләнмәгән',

	'UNTIL'						=> 'Көнгә кадәр',
	'USER_BAN'					=> 'Рөхсәтне бер яки берничә кулланучыга тыярга',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Кертелгән кулланучыларны кара исемлектән чыгарырга.',
	'USER_BAN_EXPLAIN'			=> 'Һәр исемне яңа юлга кертегез. Эзләү яки кулланучыларны үзе өстәү өчен <span style="text-decoration: underline;">Кулланучы табарга</span> сылтамасын кулланыгыз.',
	'USER_NO_BANNED'			=> 'Кулланучылар кара исемлеге буш',
	'USER_UNBAN'				=> 'Кулланучыларга рөхсәтне ачарга яки кулланучыларны ак исемлектән бетерергә',
	'USER_UNBAN_EXPLAIN'		=> 'Сезнең санак тычканы һәм төймәсәре белән браузер кулланып, туры килгән комбинация сайлап, бер тапкыр берничә исемне рөхсәт итеп (яки ак исемлектән бетереп) була. Ак исемлектәге исемнәр аерым төс белән бирелгән.',
));

?>