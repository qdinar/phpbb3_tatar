<?php
/**
*
* acp_users [Tatar]
*
* @package language
* @version $Id: users.php 9767 2009-07-17 11:27:50Z toonarmy $
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
	'ADMIN_SIG_PREVIEW'		=> 'Имзаны алдан карау',
	'AT_LEAST_ONE_FOUNDER'	=> 'Сез бу нигез салучы халәтен гади кулланучыга кадәр төшерә алмыйсыз. Конференциядә кимендә бер нигез салучы булырга тиеш. Әгәр сез бу кулланучы өчен нигез салучы халәтен үзгәртергә теләсәгез, башта нигез салучы итеп башка кулланучыны итегез.',

	'BAN_ALREADY_ENTERED'	=> 'Алданрак тыю башкарылды инде. Кара исемлек яңартылмады.',
	'BAN_SUCCESSFUL'		=> 'Кулланучы кара исемлеккә өстәлде.',
	'CANNOT_BAN_ANONYMOUS'	=> 'Имзасыз кулланучыга рөхсәтне яба алмыйсыз. Кунакларга керү хокуклар администратор бүлегенең туры килгән битендә билгеләнә ала.',

	'CANNOT_BAN_FOUNDER'			=> 'Сез оештыручыга рөхсәтне яба алмыйсыз.',
	'CANNOT_BAN_YOURSELF'			=> 'Сез үз-үзегезгә рөхсәтне яба алмыйсыз.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Сез ботлар хисап язмасын эшен туктата алмыйсыз. Ботның эшен ботлар идарәсе битендә туктатыгыз.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Сез нигез салучы хисап язмалары эшен туктата аласыз.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Сез үзегезнең хисап язма эшен туктата алмыйсыз.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Сез ботның хисап язмасын кабат эшләтүен таләп итә алмыйсыз. Ботны ботлар идарәсе битендә кабат эшләтегез.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Сез нигез салучының хисап язмасын кабат эшләтүен таләп итә алмыйсыз.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Сез кабат хисап язма эшләтүен таләп итә алмыйсыз.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Сез кунак хисап язмасын бетерә алмыйсыз.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Сез үзегезнең хисап язманы бетерә алмыйсыз.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Әһәмиятсез кулланучыларны нигез салучы итә алмыйсыз.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Кулланучыларны нигез салучы итү өчен сез аларны эшләтергә тиеш. Эшләтелгән кулланучылар дәрәҗәләрен генә күтәреп була.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Бу кырны кулланучының email-адресын үзгәртсәгез генә тутырырга кирәк.',

	'DELETE_POSTS'			=> 'Хатларны бетерергә',
	'DELETE_USER'			=> 'Кулланучыны бетерергә',
	'DELETE_USER_EXPLAIN'	=> 'Исәпкә алыгыз, кулланучыны бетерү киредән кайтарылмый, ул торгызыла алмый. Бу кулланучы җибәргән укылмаган шәхси хәбәрләр шулай ук бетереләчәк һәм алучыларга мөмкин булмаячак.',


	'FORCE_REACTIVATION_SUCCESS'	=> 'Мәҗбүри кабат эшләтү башкарылды.',
	'FOUNDER'						=> 'Оештыручы',
	'FOUNDER_EXPLAIN'				=> 'Нигез салучыларда администратор хокуклары бар һәм алар рөхсәттә чикләнә (тыела), бетерелә яки дәрәҗәдә киметелә алмый',

	'GROUP_APPROVE'					=> 'Кулланучыны хупларга',
	'GROUP_DEFAULT'					=> 'Кулланучы өчен килешү буенча төркемне билгеләргә',
	'GROUP_DELETE'					=> 'Төркемнән кулланучыны бетерергә',
	'GROUP_DEMOTE'					=> 'Төркем җитәкчесеннән алырга',
	'GROUP_PROMOTE'					=> 'Төркем җитәкчесе итәргә',

	'IP_WHOIS_FOR'			=> 'IP %s турында',

	'LAST_ACTIVE'			=> 'Соңгы керү',

	'MOVE_POSTS_EXPLAIN'	=> 'Бу кулланучының барлык хәбәрләрен күчерергә теләгән форумны сайлагыз',

	'NO_SPECIAL_RANK'		=> 'Махсус дәрәҗә бирелмәде',
	'NO_WARNINGS'			=> 'Кисәтүләр юк.',
	'NOT_MANAGE_FOUNDER'	=> 'Сез нигез салучы халәтле хисап язма белән идарә итеп карадыгыз. Нигез салучылар гына башка нигез салучы хисап язмалары белән идарә итә ала.',

	'QUICK_TOOLS'			=> 'Тиз гамәлләр',

	'REGISTERED'			=> 'Теркәлгән',
	'REGISTERED_IP'			=> 'IP-адрестан теркәргә',
	'RETAIN_POSTS'			=> 'Хәбәрне калдырырга',

	'SELECT_FORM'			=> 'Форманы сайларга',
	'SELECT_USER'			=> 'Кулланучыны сайларга',

	'USER_ADMIN'					=> 'Кулланучылар идарәсе',
	'USER_ADMIN_ACTIVATE'			=> 'Хисап язманы эшләтергә',
	'USER_ADMIN_ACTIVATED'			=> 'Кулланучы эшләтелде.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Кулланучы аватары бетерелде.',
	'USER_ADMIN_BAN_EMAIL'			=> 'email-адресны тыярга',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Кулланучылар идарәсе аша тыелган Email-адреслар',
	'USER_ADMIN_BAN_IP'				=> 'IP-адресны тыярга',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Кулланучылар идарәсе системасы аша тыелган IP-адреслар',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Кулланучылар идарәсе системасы аша тыелган исемнәр',
	'USER_ADMIN_BAN_USER'			=> 'Кулланучы исемен тыярга',
	'USER_ADMIN_DEACTIVATE'			=> 'Хисап язма эшен туктатырга',
	'USER_ADMIN_DEACTIVED'			=> 'Кулланучы эше туктатылды.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Барлык өстәүләрне бетерергә',
	'USER_ADMIN_DEL_AVATAR'			=> 'Аватарны бетерергә',
	'USER_ADMIN_DEL_OUTBOX'			=> '«Җибәргән» папкасын чистартырга',
	'USER_ADMIN_DEL_POSTS'			=> 'Барлык хәбәрләрне бетерергә',
	'USER_ADMIN_DEL_SIG'			=> 'Имзаны бетерергә',
	'USER_ADMIN_EXPLAIN'			=> 'Сез монда кулланучы турындагы мәгълүматны һәм кайбер махсус көйләүләрне үзгәртә аласыз.',
	'USER_ADMIN_FORCE'				=> 'Мәҗбүри кабат эшләтү',
	'USER_ADMIN_LEAVE_NR'			=> '«Яңа кулланучылар» төркеменнән бетерергә',
	'USER_ADMIN_MOVE_POSTS'			=> 'Барлык хәбәрләрне күчерергә',
	'USER_ADMIN_SIG_REMOVED'		=> 'Кулланучы имзасы бетерелде.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Бу кулланучының барлык өстәүләре бетерелде.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Аватарны күрсәтеп булмый, чөнки аватарлар тыелган.',
	'USER_AVATAR_UPDATED'			=> 'Кулланучы аватары турында мәгълүмат бетерелде.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Хәзерге аватар күрсәтелә алмый, чөнки аның төре тыелган.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Рәвешнең өстәмә кырлары',
	'USER_DELETED'					=> 'Кулланучы бетерелде.',
	'USER_GROUP_ADD'				=> 'Кулланучыны төркемгә өстәргә',
	'USER_GROUP_NORMAL'				=> 'Кулланучы кергән төркемнәр',
	'USER_GROUP_PENDING'			=> 'Кулланучы керергә теләгән төркемнәр',
	'USER_GROUP_SPECIAL'			=> 'Кулланучы кергән алдан урнаштырылган төркемнәр',
	'USER_LIFTED_NR'				=> 'Кулланучы яңа теркәлгән кулланучылар исемлегеннән бетерелде.',
	'USER_NO_ATTACHMENTS'			=> 'Өстәүләр юк.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Кулланучының булган хәбәр юк.',

	'USER_OUTBOX_EMPTIED'			=> 'Бу кулланучының «Җибәргән» папкасы чистартылды.',
	'USER_OUTBOX_EMPTY'				=> 'Бу кулланучының «Җибәргән» папкасы буш.',
	'USER_OVERVIEW_UPDATED'			=> 'Кулланучы мәгълүматы яңартылды.',
	'USER_POSTS_DELETED'			=> 'Бу кулланучының барлык хәбәрләре бетерелде.',
	'USER_POSTS_MOVED'				=> 'Кулланучы хәбәрләре күрсәтелгән форумга күчерелде.',
	'USER_PREFS_UPDATED'			=> 'Кулланучы көйләүләре яңартылды.',
	'USER_PROFILE'					=> 'Кулланучы рәвеше',
	'USER_PROFILE_UPDATED'			=> 'Кулланучы рәвеше яңартылды.',
	'USER_RANK'						=> 'Кулланучы дәрәҗәсе',
	'USER_RANK_UPDATED'				=> 'Кулланучы дәрәҗәсе яңартылды.',
	'USER_SIG_UPDATED'				=> 'Кулланучы имзасы яңартылды.',
	'USER_WARNING_LOG_DELETED'		=> 'Мәгълүмат мөмкин түгел. Бу язма журналдан бетерелгән булуы мөмкин.',
	'USER_TOOLS'					=> 'Төп кораллар',
));

?>