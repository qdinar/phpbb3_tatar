<?php
/**
*
* memberlist [Russian]
*
* @package language
* @version $Id: memberlist.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Рәвеш',
	'ACTIVE_IN_FORUM'		=> 'Бу форумда күбрәк эшлеклелек күрсәткән',
	'ACTIVE_IN_TOPIC'		=> 'Бу темада күбрәк эшлеклелек күрсәткән',
	'ADD_FOE'				=> 'Дошманнарга өстәргә',
	'ADD_FRIEND'			=> 'Дусларга өстәргә',
	'AFTER'					=> 'соң',

	'ALL'					=> 'Барысы',

	'BEFORE'				=> 'кадәр',

	'CC_EMAIL'				=> 'Бу хәбәр күчермәсен миңа җибәрергә.',
	'CONTACT_USER'			=> 'Элемтә',

	'DEST_LANG'				=> 'Тел',
	'DEST_LANG_EXPLAIN'		=> 'Хәбәр алучының телен сайлагыз (әгәр мөмкин булса).',

	'EMAIL_BODY_EXPLAIN'	=> 'Хәбәр гади текст буларак җибәреләчәк, аңа HTML яки BBCode өстәмәгез. Кире адрес рәвешендә сезнең email адресы күрсәтеләчәк.',
	'EMAIL_DISABLED'		=> 'Гафу итегез, әмма email җибәрү белән бәйле мөмкинлекләр сүндерелгән.',
	'EMAIL_SENT'			=> 'Хәбәр җибәрелгән.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Хәбәр гади текст буларак җибәреләчәк, аңа HTML яки BBCode өстәмәгез. Тема турындагы мәгълүматның хәбәргә кертелгәненә игътибар итегез. Кире адрес рәвешендә сезнең email адресы күрсәтеләчәк.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Сез хат хәбәр алучының дөрес email ын күрсәтергә тиеш.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Сез җибәрү өчен хәбәрнең текстын кертергә тиеш.',
	'EMPTY_MESSAGE_IM'		=> 'Сез җибәрү өчен хәбәрнең текстын кертергә тиеш.',
	'EMPTY_NAME_EMAIL'		=> 'Сез хәбәр алучының чын исемен кертергә тиеш.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Сез хәбәрнең темасын күрсәтергә тиеш.',
	'EQUAL_TO'				=> 'тигез',

	'FIND_USERNAME_EXPLAIN'	=> 'Монда сез аерым кулланчыларны эзләү белән шөгыльләнә аласыз. Барлык кырларны да тутыру мәҗбүри түгел. Үрнәк буенча эзләү өчен * файдаланыгыз. Көннәр керткәндә <kbd>ГГГГ-ММ-ДД</kbd> форматын файдаланыгыз, мәсәлән, <samp>2004-02-29</samp>. Бер яки берничә кулланучыны тамга белән билгеләгез (әгәр алдагы форма күпләп сайлау мөмкинлеге бирсә) һәм кирегә кайту өчен "Тамгаланганнарны сайларга" төймәсенә басыгыз.',
	'FLOOD_EMAIL_LIMIT'		=> 'Сез алдагысыннан соң шундук тагын бер email җибәрә алмыйсыз. Зинһар, соңрак кабатлагыз.',

	'GROUP_LEADER'			=> 'Төркем җитәкчесе',

	'HIDE_MEMBER_SEARCH'	=> 'Кулланучыларны эзләвен яшерергә',

	'IM_ADD_CONTACT'		=> 'Аралашулар исемлегенә өстәргә',
	'IM_AIM'				=> 'Моның өчен сезгә AOL Instant Messenger урнаштырылган программасы кирәклеген исәпкә алыгыз.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Кушымтаны йөкләргә',
	'IM_ICQ'				=> 'Кулланучы тиз хәбәрләр алуны билгесез аралашулардан сүндереп куйган булуы мөмкинлеген исәпкә алыгыз.',
	'IM_JABBER'				=> 'Кулланучы тиз хәбәрләр алуны билгесез аралашулардан сүндереп куйган булуы мөмкинлеген исәпкә алыгыз.',
	'IM_JABBER_SUBJECT'		=> 'Бу автомат рәвештә ясалган хәбәр, аңа җавап бирергә кирәкми! %1$s кулланучысының %2$s хәбәре.',
	'IM_MESSAGE'			=> 'Хәбәрегез',
	'IM_MSNM'				=> 'Моның өчен сезгә Windows Messenger урнаштырылган программасы кирәклеген исәпкә алыгыз.',
	'IM_MSNM_BROWSER'		=> 'Сезнең браузер бу мөмкинлекне кулланмый.',
	'IM_MSNM_CONNECT'		=> 'MSNM клиенты җавап бирми.\\nДәвам итү өчен клиент белән бәйләнеш урнаштырырга кирәк.',
	'IM_NAME'				=> 'Исемегез',
	'IM_NO_DATA'			=> 'Бу кулланучы белән аралашу мәгълүматы юк.',
	'IM_NO_JABBER'			=> 'Гафу итегез, Jabber кулланучылары өчен хәбәрләрне турыдан-туры җибәрү форум тарафыннан башкарылмый. Бу кулланучы белән бәйләнешкә керү өчен сезгә Jabber клиентын файдаланырга кирәк.',
	'IM_RECIPIENT'			=> 'Алучы',
	'IM_SEND'				=> 'Хәбәр җибәрергә',
	'IM_SEND_MESSAGE'		=> 'Хәбәр җибәрергә',
	'IM_SENT_JABBER'		=> 'Сезнең %1$s өчен хәбәрегез уңышлы җибәрелде.',
	'IM_USER'				=> 'Тиз хәбәр җибәрергә',

	'LAST_ACTIVE'				=> 'Соңгы керү',
	'LESS_THAN'					=> 'әзрәк',
	'LIST_USER'					=> 'Кулланучы: 1',
	'LIST_USERS'				=> 'Кулланучылар: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Безнең төркем исемлеген карау өчен сез рөхсәт алып керергә тиеш.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Кулланучылар исемлеген карау өчен сез рөхсәт алып керергә тиеш.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Кулланучыларны эзләү өчен сез рөхсәт алып керергә тиеш.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Рәвешләрне карау өчен сез рөхсәт алып керергә тиеш.',

	'MORE_THAN'				=> 'күбрәк',

	'NO_EMAIL'				=> 'Бу кулланучыга email җибәрергә рөхсәтегез юк.',
	'NO_VIEW_USERS'			=> 'Кулланучылар исемлеген карау өчен рөхсәтегез юк.',

	'ORDER'					=> 'Тәртипләргә',
	'OTHER'					=> 'Башка',

	'POST_IP'				=> 'IP/Хост',

	'REAL_NAME'				=> 'Хәбәр алучы исеме',
	'RECIPIENT'				=> 'Алучы',
	'REMOVE_FOE'			=> 'Дошманнардан алырга',
	'REMOVE_FRIEND'			=> 'Дуслардан алырга',

	'SELECT_MARKED'			=> 'Тамгаланганнарны сайларга',
	'SELECT_SORT_METHOD'	=> 'Тәртипләү кыры',
	'SEND_AIM_MESSAGE'		=> 'AIM-хәбәр җибәрергә',
	'SEND_ICQ_MESSAGE'		=> 'ICQ-хәбәр җибәрергә',
	'SEND_IM'				=> 'Тиз хәбәр җибәрергә',
	'SEND_JABBER_MESSAGE'	=> 'Jabber-хәбәр җибәрергә',
	'SEND_MESSAGE'			=> 'Җибәрергә',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM-хәбәр җибәрергә',
	'SEND_YIM_MESSAGE'		=> 'YIM-хәбәр җибәрергә',
	'SORT_EMAIL'			=> 'email',
	'SORT_LAST_ACTIVE'		=> 'Соңгы керү',
	'SORT_POST_COUNT'		=> 'Хәбәрләр саны',

	'USERNAME_BEGINS_WITH'	=> 'Кулланучының исеме башлана:',
	'USER_ADMIN'			=> 'Идарә итү',
	'USER_BAN'				=> 'Тоткарлау',
	'USER_FORUM'			=> 'Кулланучы статистикасы',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Бу вакытта җибәрелгән белдерүләр юк',
		1		=> '%1$d белдерү җибәрелде<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Челтәрдә',
	'USER_PRESENCE'			=> 'Форумда булу',

	'VIEWING_PROFILE'		=> '%s кулланучы рәвеше',
	'VISITED'				=> 'Соңгы керү',

	'WWW'					=> 'Сәхифә',
));

?>