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
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Өстәүләр ясау мөмкинлеге сүнгән',

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
	
));

?>