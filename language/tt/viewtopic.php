<?php
/**
*
* viewtopic [Tatar]
*
* @package language
* @version $Id: viewtopic.php 9972 2009-08-14 08:42:46Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

//razani, кери

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
	'ATTACHMENT'						=> 'Өстәү',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Өстәүләр ясау мөмкинлге сүнгән',

	'BOOKMARK_ADDED'		=> 'Тема кыстыргычларга өстәлде',
	'BOOKMARK_ERR'			=> 'Теманы кыстыргычларга күчереп булмады. Кабатлап карагыз',
	'BOOKMARK_REMOVED'		=> 'Тема кыстыргычлардан бетерелде.',
	'BOOKMARK_TOPIC'		=> 'Кыстыргычларга',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Кыстыргычлардан бетерергә',
	'BUMPED_BY'				=> 'Тема %1$s %2$s кулланучысы белән күтәрелгән.',
	'BUMP_TOPIC'			=> 'Тема башларга',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'			=> 'Тиз җавапны яшерергә',

	'DELETE_TOPIC'			=> 'Теманы бетерергә',
	'DOWNLOAD_NOTICE'		=> 'Бу хәбәрдәге өстәүләрне карау өчен кирәк булган хокукларыгыз юк',

	'EDITED_TIMES_TOTAL'	=> 'Соңгы тапкыр %1$s %2$s үзгәртте, барлыгы %3$d тапкыр үзгәртелде.',
	'EDITED_TIME_TOTAL'		=> 'Соңгы тапкыр %1$s %2$s үзгәртте, барлыгы %3$d тапкыр үзгәртелде.',
	'EMAIL_TOPIC'			=> 'Дуска хәбәр итәргә',
	'ERROR_NO_ATTACHMENT'	=> 'Сайлаган өстәү бүтән юк.',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> юк.',
	'FORK_TOPIC'			=> 'Темага күчермә ясарга',
	'FULL_EDITOR'			=> 'Гади җавап',

	'LINKAGE_FORBIDDEN'		=> 'Сез карау яки йөкләү өчен теркәлеп кермәгәнсез',
	'LOGIN_NOTIFY_TOPIC'	=> 'Сез темада яңа хәбәр турында белдерү алдыгыз. Аны карау өчен теркәлеп керегез',
	'LOGIN_VIEWTOPIC'		=> 'Теманы карау өчен сез теркәлеп керергә тиеш',

	'MAKE_ANNOUNCE'				=> 'Белдерү итәргә',
	'MAKE_GLOBAL'				=> 'Мөһим итәргә',
	'MAKE_NORMAL'				=> 'Гади итәргә',
	'MAKE_STICKY'				=> 'Беркетергә',
	'MAX_OPTIONS_SELECT'		=> '<strong>%d</strong> җавап вариантын сайлап була.',
	'MAX_OPTION_SELECT'			=> 'Сез җавапның <strong>1</strong> вариантын гына сайлый аласыз.',
	'MISSING_INLINE_ATTACHMENT'	=> 'Өстәү <strong>%s</strong> бүтән мөмкин түгел',
	'MOVE_TOPIC'				=> 'Теманы күчерергә',

	'NO_ATTACHMENT_SELECTED'=> 'Сез йөкләү яки карау өчен өстәүне сайламадыгыз.',
	'NO_NEWER_TOPICS'		=> 'Бу форумда яңарак темалар юк.',
	'NO_OLDER_TOPICS'		=> 'Бу форумда искерәк темалар юк.',
	'NO_UNREAD_POSTS'		=> 'Бу темада яңа укылмаган хәбәрләр юк',
	'NO_VOTE_OPTION'		=> 'Тавыш биргәндә җавап вариантын күрсәтергә тиешсез.',
	'NO_VOTES'				=> 'Тавышлар юк',

	'POLL_ENDED_AT'			=> 'Сораштыру %s бетте',
	'POLL_RUN_TILL'			=> 'Сораштыру %s кадәр булачак',
	'POLL_VOTED_OPTION'		=> 'Сез бу вариант өчен тавыш бирдегез',
	'PRINT_TOPIC'			=> 'Бастыру өчен',

	'QUICK_MOD'				=> 'Тиз гамәлләр',
	'QUICKREPLY'			=> 'Тиз җавап',
	'QUOTE'					=> 'Өземтә',

	'REPLY_TO_TOPIC'		=> 'Темага җавап бирергә',
	'RETURN_POST'			=> '%sХәбәргә кайтырга%s',

	'SHOW_QR'				=> 'Тиз җавап',
	'SUBMIT_VOTE'			=> 'Тавыш бирергә',

	'TOTAL_VOTES'			=> 'Барлык тавышлар',

	'UNLOCK_TOPIC'			=> 'Тема ачарга',

	'VIEW_INFO'				=> 'Хәбәр мәгълүматы',
	'VIEW_NEXT_TOPIC'		=> 'Чир. тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Алд. тема',
	'VIEW_RESULTS'			=> 'Тавыш бирү нәтиҗәләре',
	'VIEW_TOPIC_POST'		=> '1 хәбәр',
	'VIEW_TOPIC_POSTS'		=> 'Хәбәрләр: %d',
	'VIEW_UNREAD_POST'		=> 'Беренче яңа хәбәр',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Рәхмәт, тавышыгыз исәпкә алынды.',
	'VOTE_CONVERTED'		=> 'Үзгәртелгән сораштыруларда тавышларны үзгәртү кулланылмый',

	'USER_TORRENTS'				=> 'Торрентлар',
	'USER_COMMENTS'				=> 'Аңлатмалар',
	'USER_RATIO'				=> 'Ратио',
	'USER_DOWNLOADS' => 'Йөкләде',
	'USER_UPLOADS' => 'Таратты',
	'TORRENT_OPTION' => 'Рәвешләр',
	'TORRENT_ACTION' => '=>',
	'TORRENT_LASTSEED'			=> 'Соңгы сидер',
	'TORRENT_LASTLEECH'			=> 'Соңгы личер',
	'TORRENT_LAST_SEEDLEECH'			=> '%s элек',
	'TORRENT_SSPEED' => 'Тарату тизлеге',
	'TORRENT_LSPEED' => 'Йөкләү тизлеге',
	'TORRENT_INFO_HEADER_SETSTICKY' => 'Халәтен үзгәртү <b>Трекер яңарышлары</b>',
	'TORRENT_INFO_HEADER_STICKY' => 'Трекер яңарышы дип билгеләргә',
	'TORRENT_INFO_HEADER_SETFORBIDDEN' => '<b>Торрент халәтен</b> үзгәртергә</b>',
	'TORRENT_INFO_HEADER_GETSEED' => '&quot;Сидерларны сорау&quot; башкарырга',
	'TORRENT_INFO_HEADER_SAYTHANKS'	=> '&quot;Рәхмәт&quot; әйтергә',
	'TORRENT_INFO_HEADER_TRACKER' => 'Трекер',
	'TORRENT_INFO_HEADER_NANNOUNCE' => 'Анонс булачак',
	'TORRENT_INFO_HEADER_AMESSAGE' => 'Хәбәр',
	'TORRENT_INFO_HEADER_AINTERVAL' => 'Аралык',
	'TORRENT_INFO_HEADER_ERRCOUNT' => 'Хата',
	'TORRENT_INFO_HEADER_PEERS' => 'Пирлар',

	'HIDE_TORRBLOCK'	=> 'Торрент буенча мәгълүмат чыгырын яшерергә яки күрсәтергә',
	'TORRENT_AUTOR'	=> 'Авторы',
	'TORRENT_STATUS_USER'	=> 'Үзгәртте',
	'TORRENT_STATUS_REASON'	=> 'Сәбәп',
	'TORRENT_PRIVATE'	=> 'Хосусый',
	'TORRENT_PRIVATE_YES'	=> 'Әйе (DHT сүнгән)',
	'TORRENT_PRIVATE_NO'	=> 'Юк (DHT кабызылган)',
	'TORRENT_MAGNET_LINK' => 'Магнет сылтама',
	'TORRENT_MAGNET_GUEST'	=> '<script type="text/javascript">alert(\'%1$s\');</script><a href="%2$s">Темага кайтырга</a>',
	'TORRENT_MAGNET2_GUEST'	=> 'Әлеге <a href="%1$s"><strong>сылтаманы торрент-клиентыгызда </strong></a> ачыгыз<br /><br /><a href="%2$s">Темага кайтырга</a>',
	'BLOCKED_REASON'	=> 'Торрент халәтен үзгәртү сәбәбе',
	'BLOCKED_LOCKED'	=> 'Чираттагы торрент төзәтүләрен тыярга',
	'BLOCKED_CLOSED'	=> 'Торрентка алдагы аңлатма бирүләрне тыярга (теманы ябарга)',
	'STICKY_DESCR'		=> 'Ничә көн торрент яңарыш булып исәпләнеп, портал битендә күрсәтеләчәк, (0 &minus; һәрвакыт)',
	'STICKY_EXPIRE' => 'Торрент яңарыш булып калачак',
	'REQUEST_SEEDS'		=> "Сидерларны сорау бу торрент өчен <a href='%s'>%s</a>\nСез торрентны йөкләдегез (яки сез аның авторы), ләкин хәзерге вакытта аны сидламыйсыз, таратуга басуыгызны сорыйбыз.\n\n--\nБу хат сидерларны сорау системасы белән үзе ясалды",
	'REQUEST_SEEDS_SUBJECT'		=> 'Сидерларны сорау',
	'REQUEST_SEEDS_NEXT'		=> 'Сидерларны сорау мөмкин',
	'SEEDREQ_COUNT'		=> 'Сидерларны сораулар',
	'THANKS_COUNT'		=> 'Рәхмәт',
	'USER_WARNINGS' => 'Кисәтү',
	'TRACKER_USER_TORRENTS' => 'Төяде',
	'TRACKER_USER_SEED' => 'Тарата',
	'TRACKER_USER_LEECH' => 'Йөкли',
	'TORR_SEEDREQ_SEND' => 'Сидерларны сорау башкарылды',
	'TORR_THANKS_SEND' => 'Рәхмәтегез исәпләнде',
	'TORR_STICKY_SET' => 'Торрент халәте трекер Яңарышы итеп үзгәртелде',
	'TORR_FORB_CHANGED' => 'Торрент халәте үзгәртелде',
	'TRACKER_REMSEEDS' => '<b>%d</b> сидер тышкы трекерларда',
	'TRACKER_REMLEECHS' => '<b>%d</b> личер тышкы трекерларда',
	'TRACKER_REMCOMPLETED' => '<b>%d</b> йөкләүче тышкы трекерларда',

	'TORRENT_NOTIFY_SUBJECT' => 'Торрент халәтен үзгәртү',
	'TORRENT_NOTIFY_TEXT' => "Торрентыгызның халәтен үзгәртү: <a href='%s'>%s</a>\n\nЯңа халәт: %s\nАлдагы халәт: %s\nХаләт үзгәртелде: %s\nҮзгәртү сәбәбе: %s\nҮзгәртү көне: %s\n\n--\nБу хат торрентларның халәтен белдерүче система белән үзе ясалды",
	'WAIT' => 'Көтегез',
	'WO_REM_PEERS' => 'тышкы пирларны исәпләмичә',
	'SIMILAR_TORRENTS'						=> 'Охшаган торрентлар',


	'NO_SELECTION'			=> 'Өземтә өстәү өчен хәбәр текстын сайлагыз',
	'QUICKQUOTE_TEXT'		=> 'Тиз өземтә',
	'QUOTE_USERNAME'		=> 'Тиз җавапка кулланучы исемен куярга',
));


?>
