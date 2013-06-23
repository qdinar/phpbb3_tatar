<?php
/**
*
* memberlist [Russian]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*Razani
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
'ABOUT_USER'         => 'Профиль',
'ACTIVE_IN_FORUM'      => 'Иң күп активлык күрсәткән форум',
'ACTIVE_IN_TOPIC'      => 'Иң күп активлык күрсәткән тема',
'ADD_FOE'            => '"Дус түгел..." гә өстәргә',
'ADD_FRIEND'         => 'Дуслар га өстәргә',
'AFTER'               => 'соң',

'ALL'               => 'Барысы да',

'BEFORE'            => 'кадәр',

'CC_EMAIL'            => 'Бу хәбәрнең күчермәсен миңа җибәрергә.',
'CONTACT_USER'         => 'Контакт мәгълүматы',

'DEST_LANG'            => 'Тел',
'DEST_LANG_EXPLAIN'      => 'Хәбәр алучының телен сайлагыз (әгәр мөмкинлек булса).',

'EMAIL_BODY_EXPLAIN'   => 'Хәбәр гади текст буларак җибәреләчәк, аңа HTML яки BBCode өстәмәгез. Кире адрес рәвешендә сезнең email адресы күрсәтеләчәк.',
'EMAIL_DISABLED'      => 'Гафу итегез, әмма email җибәрү белән бәйле функцияләр өзеп куелганнар иде.',
'EMAIL_SENT'         => 'Хәбәр җибәрелгән.',
'EMAIL_TOPIC_EXPLAIN'   => 'Хәбәр гади текст буларак җибәреләчәк, аңа HTML яки BBCode өстәмәгез. Тема турындагы мәгълүматның хәбәргә кертелгәненә игътибар итегез. Кире адрес рәвешендә сезнең email адресы күрсәтеләчәк.',
'EMPTY_ADDRESS_EMAIL'   => 'Сез хат хәбәр алучының дөрес email ын күрсәтергә тиешсез.',
'EMPTY_MESSAGE_EMAIL'   => 'Сез җибәрү өчен хәбәрнең текстын кертергә тиешсез.',
'EMPTY_MESSAGE_IM'      => 'Сез җибәрү өчен хәбәрнең текстын кертергә тиешсез.',
'EMPTY_NAME_EMAIL'      => 'Сез хәбәр алучының чын исемен кертергә тиешсез.',
'EMPTY_SUBJECT_EMAIL'   => 'Сез хәбәрнең темасын күрсәтергә тиешсез.',
'EQUAL_TO'            => 'тигез',

'FIND_USERNAME_EXPLAIN'   => 'Монда сез аерым кулланчыларны эзләү белән шөгыльләнә аласыз. Барлык кырларны да тутыру мәҗбүри түгел. Шаблон буенча эзләү өчен * тан файдаланыгыз. Даталар керткәндә  <kbd>ГГГГ-ММ-ДД</kbd> форматыннан файдаланыгыз, мәсәлән, <samp>2004-02-29</samp>. Бер яки берничә кулланучыны тамга белән билгеләгез (әгәр алдагы форма күпләп сайларга мөмкинлек бирә икән) һәм кирегә кайту өчен "Тамгаланганнарны сайларга" төймәсенә басыгыз.',
'FLOOD_EMAIL_LIMIT'      => 'Сез шунда ук тагын бер email җибәрә алмыйсыз. Зинһар, бу эшне соңрак эшләрсез.',

'GROUP_LEADER'         => 'Төркем лидеры',

'HIDE_MEMBER_SEARCH'   => 'Кулланучыларны эзләүне яшерергә',

'IM_ADD_CONTACT'      => 'Контактлар исемлегенә өстәргә',
'IM_AIM'            => 'Моның өчен сезгә AOL Instant Messenger ның урнаштырылган программасы кирәклеген исәпкә алыгыз.',
'IM_AIM_EXPRESS'      => 'AIM Express',
'IM_DOWNLOAD_APP'      => 'Программаны яздырып алырга',
'IM_ICQ'            => 'Кулланучы тиз хәбәрләр алуны билгесез контактлардан өзеп куйган булырга мөмкинлеген исәпкә алыгыз.',
'IM_JABBER'            => 'Кулланучы тиз хәбәрләр алуны билгесез контактлардан өзеп куйган булырга мөмкинлеген исәпкә алыгыз.',
'IM_JABBER_SUBJECT'      => 'Бу автомат рәвештә генерацияләнгән хәбәр, аңа җавап бирергә кирәкми! Кулланучы %1$s с %2$s хәбәре.',
'IM_MESSAGE'         => 'Сезнең хәбәрегез',
'IM_MSNM'            => 'Моның өчен сезгә Windows Messenger ның урнаштырылган программасы кирәклеген исәпкә алыгыз.',
'IM_MSNM_BROWSER'      => 'Сезнең браузер бу функция белән эшли алмый.',
'IM_MSNM_CONNECT'      => 'MSNM клиенты  җавап бирми.\nДәвам итү өчен клиент белән бәйләнеш урнаштырырга кирәк.',
'IM_NAME'            => 'Сезнең исемегез',
'IM_NO_DATA'         => 'Бу кулланучы өчен контакт мәгълүматлары юк.',
'IM_NO_JABBER'         => 'Гафу итегез, Jabber кулланучылары өчен хәбәрләрне турыдан - туры җибәрү форум тарафыннан башкарылмый. Бу кулланучы белән бәйләнешкә керү өчен сезгә Jabber клиентыннан файдаланырга кирәк.',
'IM_RECIPIENT'         => 'Хәбәр алучы',
'IM_SEND'            => 'Хәбәрне җибәрергә',
'IM_SEND_MESSAGE'      => 'Хәбәрне җибәрергә',
'IM_SENT_JABBER'      => 'Сезнең %1$s өчен булган хәбәрегез уңышлы җибәрелде.',
'IM_USER'            => 'Тиз хәбәр җибәрергә',

'LAST_ACTIVE'            => 'Соңгы булу',
'LESS_THAN'               => 'азрак',
'LIST_USER'               => 'Кулланучылар: 1',
'LIST_USERS'            => 'Кулланучылар: %d',
'LOGIN_EXPLAIN_LEADERS'      => 'Безнең команда исемлеген карау өчен сез авторизация үтәргә тиешсез.',
'LOGIN_EXPLAIN_MEMBERLIST'   => 'Кулланучылар исемлеген карау өчен сез авторизация үтәргә тиешсез.',
'LOGIN_EXPLAIN_SEARCHUSER'   => 'Кулланучыларны эзләү өчен сез авторизация үтәргә тиешсез.',
'LOGIN_EXPLAIN_VIEWPROFILE'   => 'Профильләрне карау өчен сез авторизация үтәргә тиешсез.',

'MORE_THAN'            => 'күбрәк',

'NO_EMAIL'            => 'Сезнең бу кулланучыга email җибәрергә рөхсәтегез юк.',
'NO_VIEW_USERS'         => 'Сезнең кулланучылар исемлеген карау өчен рөхсәтегез юк.',

'ORDER'               => 'Тәртипләргә',
'OTHER'               => 'Башка',

'POST_IP'            => 'IP/Хост',

'RANK'               => 'Дәрәҗә',
'REAL_NAME'            => 'Хәбәр алучы исеме',
'RECIPIENT'            => 'Хәбәр алучы',
'REMOVE_FOE'         => '"Дус түгел..." ләрдән алырга',
'REMOVE_FRIEND'         => 'Дуслардан алырга',

'SEARCH_USER_POSTS'      => 'Кулланучының хәбәрләрен табарга',
'SELECT_MARKED'         => 'Тамгаланганнарны сайларга',
'SELECT_SORT_METHOD'   => 'Сортлау кыры',
'SEND_AIM_MESSAGE'      => 'AIM-хәбәр җибәрергә',
'SEND_ICQ_MESSAGE'      => 'ICQ-хәбәр җибәрергә',
'SEND_IM'            => 'Тиз хәбәр җибәрергә',
'SEND_JABBER_MESSAGE'   => 'Jabber-хәбәр җибәрергә',
'SEND_MESSAGE'         => 'Җибәрергә',
'SEND_MSNM_MESSAGE'      => 'MSNM/WLM-хәбәр җибәрергә',
'SEND_YIM_MESSAGE'      => 'YIM-хәбәр җибәрергә',
'SORT_EMAIL'         => 'email',
'SORT_LAST_ACTIVE'      => 'Соңгы килү',
'SORT_POST_COUNT'      => 'Хәбәрләр саны',

'USERNAME_BEGINS_WITH'   => 'Кулланучының исеме башлана:',
'USER_ADMIN'         => 'Кулланучы белән идарә итү',
'USER_BAN'            => 'Тоткарлау',
'USER_FORUM'         => 'Кулланучы статистикасы',
       'USER_LAST_REMINDED'    => array(
               0               => 'No reminder sent at this time',
               1               => '%1$d reminder sent<br />» %2$s',
       ),
'USER_ONLINE'         => 'Челтәрдә',
'USER_PRESENCE'         => 'Форумда булу',

'VIEWING_PROFILE'      => '%s ның профиле',
'VISITED'            => 'Соңгы булу',

'WWW'               => 'Сайт',
));

?>
