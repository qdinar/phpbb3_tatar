<?php
/**
*
* viewtopic [English]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2008 tatar group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*nail
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
	'ATTACHMENT' => 'Attachment',
	'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'Attachments функциясы сүндерелгән.',

	'BOOKMARK_ADDED' => 'Бу тема кыстыргычланды.',
	'BOOKMARK_REMOVED' => 'Тема кыстыргычлардан уңышлы алынды.',
	'BOOKMARK_TOPIC' => 'Кыстыргычла',
	'BOOKMARK_TOPIC_REMOVE' => 'Кыстыргычлар (bookmarks) арасыннан алып атырга',
	'BUMPED_BY' => 'Актык мәртәбә %1$s %2$s –дә үзгәртелде.',
	'BUMP_TOPIC' => 'Теманы ачырга',

	'CODE' => 'Код',

	'DELETE_TOPIC' => 'Теманы бетерергә',
	'DOWNLOAD_NOTICE' => 'Бу хәбәрнең эчке файлларны карарга хокукыгыз юк.',

	'EDITED_TIMES_TOTAL' => 'Актык мәртәбә %1$s %2$s –дә үзгәртелгән, бары %3$d мәрәтбә үзгәртелгән.',
	'EDITED_TIME_TOTAL' => 'Актык мәртәбә %1$s %2$s –дә үзгәртелгән, бары %3$d мәрәтбә үзгәртелгән.',
	'EMAIL_TOPIC' => 'Дусларның E-mail-на хәбәр җибәрү',
	'ERROR_NO_ATTACHMENT' => 'Бу attachment бүтән юк.',

	'FILE_NOT_FOUND_404' => '<strong>%s</strong> файлы табылмады: ул юк.',
	'FORK_TOPIC' => 'Бу теманы копиларга',

	'LINKAGE_FORBIDDEN' => 'Файлларны dowload кылыр йә аларны карар өчен сез форумга әле кермәгәнсез.',
	'LOGIN_NOTIFY_TOPIC' => 'Яңа хәбәр килде, шуны укыр өчен форумга керегез.',
	'LOGIN_VIEWTOPIC' => 'Бу теманы карау өчен сез теркәлергә тиешсез.',

	'MAKE_ANNOUNCE' => 'Игълан ит',
	'MAKE_GLOBAL' => 'Мөһимләштер',
	'MAKE_NORMAL' => 'Гәделәштер',
	'MAKE_STICKY' => 'ябыштырып куегыз',
	'MAX_OPTIONS_SELECT' => 'Сез <strong>%d</strong> төр (вариант) сайлый аласыз',
	'MAX_OPTION_SELECT' => 'Сез <strong>1</strong> төрен/вариантын сайлый аласыз',
	'MISSING_INLINE_ATTACHMENT' => '<strong>%s</strong> исемле attachment бүтән табылмый',
	'MOVE_TOPIC' => 'Теманы күчерергә',

	'NO_ATTACHMENT_SELECTED'=> 'Download яки карау өчен сез бер файлны да сайламагансыз.',
	'NO_NEWER_TOPICS' => 'Бу форумда тагын да яңарак темалар юк.',
	'NO_OLDER_TOPICS' => 'Бу форумда тагын да искерәк темалар юк.',
	'NO_UNREAD_POSTS' => 'Бу темада яңа укылмаган хәбәрләр юк.',
	'NO_VOTE_OPTION' => 'Тавыш биргәндә сез бер төрне (вариантны) сайларга тиеш.',
	'NO_VOTES' => 'Тавыш юк',

	'POLL_ENDED_AT' => 'Тавыш бирү %s -дә тәмам',
	'POLL_RUN_TILL' => 'Тавыш бирү %s -гә кадәр уздырылды',
	'POLL_VOTED_OPTION' => 'Сез бу вариант өчен тавыш бирдегез',
	'PRINT_TOPIC' => 'Печать өчен',

	'QUICK_MOD' => 'тиз өстәмә кораллары',
	'QUOTE' => 'Цитата',

	'REPLY_TO_TOPIC' => 'Темага җавап кайтарырга',
	'RETURN_POST' => '%sХәбәргә кайтырга%s',

	'SUBMIT_VOTE' => 'Тавыш бирергә',

	'TOTAL_VOTES' => 'Тавышлар',

	'UNLOCK_TOPIC' => 'Теманы ачырга',

	'VIEW_INFO' => 'Хәбәр турында мәглүмәт',
	'VIEW_NEXT_TOPIC' => 'Икенче тема',
	'VIEW_PREVIOUS_TOPIC' => 'Элекеге тема',
	'VIEW_RESULTS' => 'Тавыш бирүнең нәтиҗәсе',
	'VIEW_TOPIC_POST' => '1 хәбәр',
	'VIEW_TOPIC_POSTS' => '%d хәбәр',
	'VIEW_UNREAD_POST' => 'Яңа хәбәр',
	'VISIT_WEBSITE' => 'WWW',
	'VOTE_SUBMITTED' => 'Рәхмәт. Сезнең тавышыгыз кабул ителде.',
	'VOTE_CONVERTED' => 'Changing votes is not supported for converted polls.',

));

?>
