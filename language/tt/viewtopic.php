<?php
/**
*
* viewtopic [Russian]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
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
	'ATTACHMENT'						=> 'Беркетү',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Беркетү функциясе өзеп куелган.',

	'BOOKMARK_ADDED'		=> 'Тема кыстыргыч буларак урнаштырылды.',
	'BOOKMARK_ERR'			=> 'Теманы кыстыргыч буларак урнаштырырга тырышу барып чыкмады. Тагын бер тапкыр эшләп карагыз.',
	'BOOKMARK_REMOVED'		=> 'Тема кыстыргыч буларак бетерелде.',
	'BOOKMARK_TOPIC'		=> 'Кыстыргычларга',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Кыстыргычлардан бетерергә',
	'BUMPED_BY'				=> 'Соңгы тапкыр %1$s %2$s күтәрелде.',
	'BUMP_TOPIC'			=> 'Тема башларга',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'						 => 'Hide Quick Reply',

	'DELETE_TOPIC'			=> 'Теманы бетерергә',
	'DOWNLOAD_NOTICE'		=> 'Сез бу хәбәрдәге беркетелгән файлларны карый алмыйсыз.',

	'EDITED_TIMES_TOTAL'	=> 'Соңгы тапкыр %1$s %2$s үзгәртелде, барлыгы %3$d тапкыр үзгәртелде.',
	'EDITED_TIME_TOTAL'		=> 'Соңгы тапкыр %1$s %2$s үзгәртелде, барлыгы %3$d тапкыр үзгәртелде.',
	'EMAIL_TOPIC'			=> 'Дуска хәбәр итәргә',
	'ERROR_NO_ATTACHMENT'	=> 'Сайлаган беркетелгән файл башка юк.',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> юк.',
	'FORK_TOPIC'			=> 'Теманы күчермәләргә',
	'FULL_EDITOR'						 => 'Full Editor',

	'LINKAGE_FORBIDDEN'		=> 'Сез карау яки файл алу өчен авторизация үтмәгәнсез.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Сезгә темадагы яңа хәбәр турында хәбәр ителде, аны карау өчен зинһар, авторизация үтегез',
	'LOGIN_VIEWTOPIC'		=> 'Теманы карау өчен сез теркәлгән кулланучы булырга тиешсез.',

	'MAKE_ANNOUNCE'				=> 'Белдерү итәргә',
	'MAKE_GLOBAL'				=> 'Әһәмиятле итәргә',
	'MAKE_NORMAL'				=> 'Гади итәргә',
	'MAKE_STICKY'				=> 'Ябыштырылган итәргә',
	'MAX_OPTIONS_SELECT'		=> 'Сез җавапларның <strong>%d</strong> вариантын сайлый аласыз.',
	'MAX_OPTION_SELECT'			=> 'Сез җавапның В <strong>1</strong> вариантын сайлый аласыз.',
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> беркетелгән файлы башка юк.',
	'MOVE_TOPIC'				=> 'Теманы күчерергә',

	'NO_ATTACHMENT_SELECTED'=> 'Сез алу яки карау өчен беркетелгән файл сайламадыгыз.',
	'NO_NEWER_TOPICS'		=> 'Бу форумда шуннан яңарак темалар юк.',
	'NO_OLDER_TOPICS'		=> 'Бу форумда шуннан искерәк темалар юк.',
	'NO_UNREAD_POSTS'		=> 'Бу темада яңа укылмаган хәбәрләр юк',
	'NO_VOTE_OPTION'		=> 'Сез тавыш биргәндә җавап вариантларын күрсәтергә тиеш.',
	'NO_VOTES'				=> 'Җаваплар юк.',

	'POLL_ENDED_AT'			=> 'Сораштыру %s бетте',
	'POLL_RUN_TILL'			=> 'Сораштыру %s кадәр булачак',
	'POLL_VOTED_OPTION'		=> 'Сез бу вариант өчен тавыш бирдегез',
	'PRINT_TOPIC'			=> 'Бастыру өчен',

	'QUICK_MOD'				=> 'Тиз гамәлләр',
	'QUICKREPLY'						  => 'Quick Reply',
	'QUOTE'					=> 'Өземтә',

	'REPLY_TO_TOPIC'		=> 'Темага җавап бирергә',
	'RETURN_POST'			=> '%sХәбәргә кайтырга%s',

	'SHOW_QR'										 => 'Quick Reply',
	'SUBMIT_VOTE'			=> 'Тавыш бирергә',

	'TOTAL_VOTES'			=> 'Барлык тавышлар',

	'UNLOCK_TOPIC'			=> 'Тема ачарга',

	'VIEW_INFO'				=> 'Хәбәр турында мәгълүмат',
	'VIEW_NEXT_TOPIC'		=> 'Алд. тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Элекк. тема',
	'VIEW_RESULTS'			=> 'Тавыш бирү нәтиҗәләре',
	'VIEW_TOPIC_POST'		=> '1 хәбәр',
	'VIEW_TOPIC_POSTS'		=> 'Хәбәрләр: %d',
	'VIEW_UNREAD_POST'		=> 'Беренче яңа хәбәр',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Рәхмәт, тавышыгыз исәпкә алынды.',
	'VOTE_CONVERTED'		=> 'Конвертланган сораштыруларда тавышны үзгәртү башкарылмый.',

));

?>
