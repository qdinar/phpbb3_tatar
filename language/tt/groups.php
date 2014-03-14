<?php
/** 
*
* groups [Tatar]
*
* @package language
* @version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'				=> 'Сайлаган төркем килешү буенча төркемегез инде.',
	'ALREADY_IN_GROUP'					=> 'Сез сайлаган төркемнең әгъзасы инде.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Сез сайлаган төркем әгъзасы булуын сорадыгыз инде.',

	'CANNOT_JOIN_GROUP'					=> 'Сез бу төркемнең әгъзасы була алмыйсыз. Мөстәкыйль рәвештә ачык һәм ирекле үтәргә мөмкин булган төркемнәргә генә кереп була.',
	'CANNOT_RESIGN_GROUP'				=> 'Сез бу төркемдәге әгъзалыктан баш тарта алмыйсыз. Мөстәкыйль рәвештә ачык һәм ирекле үтәргә мөмкин булган төркемнәрдән генә чыгып була.',
	'CHANGED_DEFAULT_GROUP'				=> 'Килешү буенча төркем үзгәртелде.',

	'GROUP_AVATAR'						=> 'Төркем аватары', 
	'GROUP_CHANGE_DEFAULT'				=> 'Килешү буенча төркемне «%s» төркеменә үзгәртергәме?',
	'GROUP_CLOSED'						=> 'Ябык төркем',
	'GROUP_DESC'						=> 'Төркем тасвирламасы',
	'GROUP_HIDDEN'						=> 'Яшерен төркем',
	'GROUP_INFORMATION'					=> 'Төркем турында мәгълүмат', 
	'GROUP_IS_CLOSED'					=> 'Бу ябык төркем, аңа төркем җитәкчесе чакыруы буенча гына кереп була.',
	'GROUP_IS_FREE'						=> 'Бу гомуми төркем, аңа һәр кулланучы керә ала.', 
	'GROUP_IS_HIDDEN'					=> 'Бу яшерен төркем, андагы кулланучылар исемлеген әлеге төркем әгъзалары гына карый ала.',
	'GROUP_IS_OPEN'						=> 'Бу ачык төркем, теләсә кайсы кулланучы аңа керүне сорый ала.',
	'GROUP_IS_SPECIAL'					=> 'Бу форум администраторы идарә итә торган махсус төркем.', 
	'GROUP_JOIN'						=> 'Төркемгә керергә',
	'GROUP_JOIN_CONFIRM'				=> 'Сайлаган төркемгә керергәме?',
	'GROUP_JOIN_PENDING'				=> 'Төркемгә керергә гариза',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Бу төркемгә керергә гариза бирергәме?',
	'GROUP_JOINED'						=> 'Сез сайлаган төркемгә кердегез.',
	'GROUP_JOINED_PENDING'				=> 'Төркемгә керергә теләк белдергән гаризагыз уңышлы җибәрелде. Зинһар, төркем җитәкчесе раславын көтегез.',
	'GROUP_LIST'						=> 'Кулланучылар идарәсе',
	'GROUP_MEMBERS'						=> 'Төркем әгъзалары',
	'GROUP_NAME'						=> 'Төркем исеме',
	'GROUP_OPEN'						=> 'Ачык төркем',
	'GROUP_RANK'						=> 'Төркем дәрәҗәсе', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Төркемнән чыгарга',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Сайлаган төркемнән чыгаргамы?',
	'GROUP_RESIGN_PENDING'				=> 'Төркемгә керү гаризасын кире алырга',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Төркемгә керү гаризасын кире алыргамы?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Сез сайлаган төркемнән чыктыгыз.',
	'GROUP_RESIGNED_PENDING'			=> 'Сайлаган төркемнән чыгу гаризасы кире алынды.',
	'GROUP_TYPE'						=> 'Төркем төре',
	'GROUP_UNDISCLOSED'					=> 'Яшерен төркем',
	'FORUM_UNDISCLOSED'					=> 'Яшерен форум(нар)ны төзәтергә',

	'LOGIN_EXPLAIN_GROUP'				=> 'Сез төркем турындагы мәгълүматны карау өчен керергә тиешсез.',

	'NO_LEADERS'						=> 'Сез бер төркемнең дә җитәкчесе түгел.',
	'NOT_LEADER_OF_GROUP'				=> 'Соралган эш башкарыла алмый, чөнки сез сайлаган төркемнең җитәкчесе түгел.',
	'NOT_MEMBER_OF_GROUP'				=> 'Соралган эш башкарыла алмый, чөнки сез сайлаган төркемнең әгъзасы түгел яки әгъзалыгыгыз әлегә хупланмаган.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Килешү буенча төркем әгъзалыгыннан баш тарта алмыйсыз',

	'PRIMARY_GROUP'						=> 'Төп төркем',

	'REMOVE_SELECTED'					=> 'Сайлаганны бетерергә',

	'USER_GROUP_CHANGE'					=> '«%1$s» төркеменнән «%2$s» төркеменә',
	'USER_GROUP_DEMOTE'					=> 'Җитәкчелектән баш тартырга',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Сайлаган төркемнең җитәкчесе булуыннан баш тартыргамы?',
	'USER_GROUP_DEMOTED'				=> 'Сез төркем җитәкчесе булудан туктадыгыз.',
));

?>