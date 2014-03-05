<?php
/**
* acp_permissions (phpBB Permission Set) [Tatar]
*
* @package language
* @version $Id: permissions_phpbb.php 9686 2009-06-26 11:52:54Z rxu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Гамәлләр',
		'content'		=> 'Эчендәгесе',
		'forums'		=> 'Форумнар',
		'misc'			=> 'Төрлеләр',
		'permissions'	=> 'Рөхсәт хокуклары',
		'pm'			=> 'Шәхси хәбәрләр',
		'polls'			=> 'Сораулар',
		'post'			=> 'Хәбәрләр урнашуы',
		'post_actions'	=> 'Хәбәрләр белән гамәл',
		'posting'		=> 'Хәбәрләр',
		'profile'		=> 'Рәвеш',
		'settings'		=> 'Урнаштырырга',
		'topic_actions'	=> 'Темалар белән гамәлләр',
		'user_group'	=> 'Кулланучылар',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Кулланучы керү хокуклары',
		'a_'			=> 'Администраторның керү хокуклары',
		'm_'			=> 'Модератор керү хокуклары',
		'f_'			=> 'Форумга керү хокуклары',
		'global'		=> array(
			'm_'			=> 'Модераторның глобаль хокуклары',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Рәвешләрне, кулланучылар исемлеген һәм «Форумда кем бар» битен карый ала', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Исемен үзгәртә ала', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Серсүзне үзгәртә ала', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'email-адресны үзшәртә ала', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Аватарны үзгәртә ала', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Килешү буенча төркемне үзгәртә ала', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Өстәүләрне беркетә ала', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Файлларны йөкли ала', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Караламаларны саклый ала', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Автоцензорны сүндерә ала', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Имзаны куллана ала', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'ШХ җибәрә ала', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'ШХ берничә кулланучыга җибәрә ала', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'ШХ кулланучылар төркеменә җибәрә ала', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'ШХ укый ала', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Үз хәбәрләрен төзәтә ала', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'ШХ үз папкаларыннан бетерә ала', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'ШХ таратып җибәрә ала', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'email аша ШХ җибәрә ала', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'ШХ бастырып чыгара ала', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'ШХ өстәү беркетә ала', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'ШХ файлларны йөкли ала', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'BBCode ШХ куллана ала', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'ШХ смайликлар куллана ала', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'ШХ тег куллана ала [img]', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'ШХ тег куллана ала [[flash]', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'email-хәбәрләр җибәрә ала', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Тиз хәбәрләр системасын куллана ала', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Флуд-тикшерүне кире кага ала', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Булу халәтен яшерә ала', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Булу халәтен күрә ала', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Эзләүне куллана ала', 'cat' => 'misc'),	
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Форумны күрә ала', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Форумны укый ала', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Темалар ясый ала', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Темаларда җавап бирә ала', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Темалар һәм хәбәрләр билгечекләрен куллана ала', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Белдерүләр ясый ала', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Темаларны беркетә ала', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Сораштырулар ясый ала', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Сораштыруда тавыш бирә ала', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Тавышны яңадан бирә ала', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Өстәүләрне беркетә ала', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Файлларны йөкли ала', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Имзаны куллана ала', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'BBCode куллана ала', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Смайликларны куллана ала', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Тег куллана ала [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Тег куллана ала [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Хәбәрләрне үзгәртә ала', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Хәбәрләрен бетерә ала', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Темаларын яба ала', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Темаларны күтәрә ала', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Шикаятьләр урнаштыра ала', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Форумнарга языла ала', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Темаларны бастырып чыгара ала', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Тема турында (дуска) email аша хәбәр итә ала', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Форумда эзли ала', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Флуд-тикшерүне кире кага ала', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Хәбәрләр санаучысы кабызылган<br /><em>Исәпкә алыгыз, бу урнаштыру яңа хәбәрләр ясаганда гына нәтиҗәле.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Хәбәрләрне хуплаусыз урнаштыра ала', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Хәбәрләрне төзәтә ала', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Хәбәрләрне бетерә ала', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Хәбәрләрне хуплый ала', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Шикаятьләрне яба һәм бетерә ала', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Хәбәрләр авторын үзгәртә ала', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Темаларны күчерә ала', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Темаларны яба ала', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Темаларны бүлә ала', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Темаларны берләштерә ала', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Хәбәрләр турында тулылыкны карый ала', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Кисәтүләрне яңарта ала<br /><em>Бу хокук глобаль гына билгеләнә ала, ә форум дәрәҗәсендә түгел.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Тыю белән идарә итә ала<br /><em>Бу хокук глобаль гына билгеләнә ала, ә форум дәрәҗәсендә түгел.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Конференция көйләүләрен үзгәртә һәм яңартуларны тикшерә ала', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Сервер шартлары көйләүләрен үзгәртә ала', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Jabber көйләүләрен үзгәртә алаr', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'php турындагы белешмәне карый ала', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Форумнар белән идарә итә ала', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Форумнар ясый ала', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Форумнарны бетерә ала', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Форумнарны чистарта ала', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Темалар, хәбәрләр билгечекләрен һәм смайликларны үзгәртә ала', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Автоцензорны көйли ала', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'BBCode билгели ала', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Өстәүләр көйләвен үзгәртә ала', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Кулланучылар белән идарә итә ала<br /><em>Конференциядә булган исемлектәге кулланучыларның браузер төрен карау хокукы да керә.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Кулланучыларны бетерә ала', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Төркемнәр белән идарә итә ала', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Төркемнәр ясый ала', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Төркемнәрне бетерә ала', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Дәрәҗәләр белән идарә итә ала', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Рәвешнең өстәмә кырлары белән идарә итә ала', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Тыелган исемнәр белән идарә итә ала', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Тыю белән идарә итә ала', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Керү хокукларын карый ала', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Билгеле төркем өчен керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Билгеле кулланучыга керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Форумда керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Модераторларга керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Администраторлар өчен керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Кулланучы өчен керү хокукларын үзгәртә ала', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Вазифалар белән идарә итә ала', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Башка керү хокукларын үзгәртә ала', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Стильләр белән идарә итә ала', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Логларны карый ала', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Логларны чистарта ала', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Модульләр белән идарә итә ала', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Тел төргәкләре белән идарә итә ала', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Күп санлы почта таратуын башкара ала', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Ботлар белән идарә итә ала', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Шикаять/сәбәп исемлеге белән идарә итә ала', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Мәгълүмат нигезен саклый/торгыза ала', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Эзләү индекслары/эзләү шартлары белән идарә итә ала', 'cat' => 'misc'),
));

?>