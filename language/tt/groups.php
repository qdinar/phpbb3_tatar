<?php
/**
*
* groups [Tatar]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Razani тәрҗемәсе ( http://tmf.org.ru/viewtopic.php?f=5&t=18&start=10#p85 ), qdb төзәтте.
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
	'ALREADY_DEFAULT_GROUP' => 'Сайлаган төркемегез сезнең төркем булып тора.',
	'ALREADY_IN_GROUP' => 'Сез сайлаган төркемегезнең әгъзасы булып торасыз.',
	'ALREADY_IN_GROUP_PENDING' => 'Сез сайлаган төркемегезнең әгъзасы булырга сорадыгыз инде.',

	'CANNOT_JOIN_GROUP' => 'Сез бу төркемнең әгъзасы була алмыйсыз. Мөстәкыйль рәвештә фәкать ачык һәм ирекле керә ала торган төркемнәргә генә үтеп була.',
	'CANNOT_RESIGN_GROUP' => 'Мөстәкыйль рәвештә фәкать ачык һәм ирекле керә ала торган төркемнәрдән генә чыгып була.',
	'CHANGED_DEFAULT_GROUP' => 'Төркемегез уңышлы үзгәртелде.',//default!

	'GROUP_AVATAR' => 'Төркем аватары',
	'GROUP_CHANGE_DEFAULT' => 'Төркемегезне «%s»га алыштырырга теләвегез хакмы?',//
	'GROUP_CLOSED' => 'Ябык төркем',
	'GROUP_DESC' => 'Төркемнең тасвирламасы',
	'GROUP_HIDDEN' => 'Яшерен төркем',
	'GROUP_INFORMATION' => 'Төркем турында мәгълүмат',
	'GROUP_IS_CLOSED' => 'Бу ябык төркем, аңа төркем лидеры чакыруы буенча гына кереп була.',
	'GROUP_IS_FREE' => 'Бу төркемгә теләсә-кайсы кулланучы керә ала.',
	'GROUP_IS_HIDDEN' => 'Бу яшерен төркем, теркәлгән кулланучылар исемлеген төркем әгъзалары гына карый ала.',
	'GROUP_IS_OPEN' => 'Бу ачык төркем, аңа керү теләген теләсә кайсы кулланучы белдерә ала',
	'GROUP_IS_SPECIAL' => 'Бу махсус төркем, аның белән форум администраторы идарә итә.',
	'GROUP_JOIN' => 'Төркемгә керергә',
	'GROUP_JOIN_CONFIRM' => 'Шушы төркемгә керергә теләк белдерүегез хакмы?',
	'GROUP_JOIN_PENDING' => 'Төркемгә керү теләген белдерү',
	'GROUP_JOIN_PENDING_CONFIRM' => 'Бу төркемгә керү теләген белдерүегез хакмы?',
	'GROUP_JOINED' => 'Сез сайлаган төркемегезгә үттегез',
	'GROUP_JOINED_PENDING' => 'Төркемгә керү теләген белдерүегез турында хәбәр ителде. Зинһар, төркем лидеры раславын көтегез',
	'GROUP_LIST' => 'Кулланучылар белән идарә итү',
	'GROUP_MEMBERS' => 'Төркем әгъзалары',
	'GROUP_NAME' => 'Төркем исеме',
	'GROUP_OPEN' => 'Ачык төркем',
	'GROUP_RANK' => 'Төркем дәрәҗәсе',
	'GROUP_RESIGN_MEMBERSHIP' => 'Төркемнән чыгарга',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM' => 'Сайлаган төркемегездән чыгарга теләвегез хакмы?',
	'GROUP_RESIGN_PENDING' => 'Төркемгә керергә теләк белдерүне киредән кайтару',
	'GROUP_RESIGN_PENDING_CONFIRM' => 'Төркемгә керергә теләк белдерүегезне киредән кайтарырга теләвегез хакмы?',//
	'GROUP_RESIGNED_MEMBERSHIP' => 'Сез сайлаган төркемегездән чыгарылдыгыз.',
	'GROUP_RESIGNED_PENDING' => 'Сезнең төркемгә керергә теләк белдерүегез кире кайтарылды.',
	'GROUP_TYPE' => 'Төркемнең тибы',
	'GROUP_UNDISCLOSED' => 'Яшерен төркем',
	'FORUM_UNDISCLOSED' => 'Яшерен форумны(нарны) модерацияләү',

	'LOGIN_EXPLAIN_GROUP' => 'Сез төркем турындагы мәглүматны карар өчен керергә тиеш.',

	'NO_LEADERS' => 'Сез бер төркемнең дә лидеры түгел.',
	'NOT_LEADER_OF_GROUP' => 'Соравыгыз үтәлә алмый, чөнки сез сайланган төркемнең лидеры түгел.',
	'NOT_MEMBER_OF_GROUP' => 'Соравыгыз үтәлә алмый, чөнки сез сайланган төркемнең әгъзасы түгел яки әгъзалыгыгыз әлегә расланмаган.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP' => 'Сез әйтелмәгәндәге төркемегездәге әгъзалыктан баш тарта алмыйсыз.',
	
	'PRIMARY_GROUP' => 'Төп төркем',

	'REMOVE_SELECTED' => 'Сайлаганнарны бетерергә',

	'USER_GROUP_CHANGE'			=> '“%1$s” төркеменнән “%2$s” төркеменә',
	'USER_GROUP_DEMOTE'			=> 'Лидерлыктан баш тарту',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Сез чынлап та үзегез сайлаган төркемдәге лидерлыктан баш тартасызмы?',
	'USER_GROUP_DEMOTED'		=> 'Сез төркем лидеры булудан туктадыгыз.',
));

?>
