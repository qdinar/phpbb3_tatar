<?php
/**
*
* viewforum [Tatar]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group and nailbolgari
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
	'ACTIVE_TOPICS' => 'Актив темалар',
	'ANNOUNCEMENTS' => 'Белдерүләр',

	'FORUM_PERMISSIONS' => 'Форумга керү хокуклары',

	'ICON_ANNOUNCEMENT' => 'Белдерү',
	'ICON_STICKY' => 'Ябыштырылган',

	'LOGIN_NOTIFY_FORUM' => 'Сезгә яңа хат килүе сәәпләе, форумга керегез.',

	'MARK_TOPICS_READ' => 'Темыларны укылган диеп куерга',

	'NEW_POSTS_HOT' => 'Яңа хәбәрләр [ Популяр ]',
	'NEW_POSTS_LOCKED' => 'Яңа хәбәрләр [ Тема ябык ]',
	'NO_NEW_POSTS_HOT' => 'Яңа хәбәр юк [ Популяр ]',
	'NO_NEW_POSTS_LOCKED' => 'Яңа хәбәр юк [ Тема ябык ]',
	'NO_READ_ACCESS' => 'Сез бу форумда хәбәрләрне укый алмыйсыз (хокукыгыз юк).',

	'POST_FORUM_LOCKED' => 'Форум ябык',

	'TOPICS_MARKED' => 'Бу форумдагы бөтен темалар "укыдлган" дип куелган.',

	'VIEW_FORUM' => 'Форумны карау',
	'VIEW_FORUM_TOPIC' => '1 тема',
	'VIEW_FORUM_TOPICS' => '%d тема',
));

?>
