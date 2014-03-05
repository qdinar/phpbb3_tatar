<?php
/**
*
* acp_email [Tatar]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Бу форма ярдәмендә сез <strong>электрон хәбәрләр алу шарты кабызылган</strong> барлык кулланучыларга электрон хәбәр җибәрә аласыз. Моны башкару өчен хәбәр администратор адресыннан җибәреләчәк һәм барлык алучылар өчен яшерен күчермә белән тәэмин ителәчәк. Килешү буенча бу хәбәрдә максимум 50 алучы була ала. Алучылар күбрәк булса, берничә хәбәр җибәреләчәк. Хәбәрне зур кешеләр төркеменә җибәрсәгез, бу гамәл кайбер вакытны алачак. Зинһар, түземле булыгыз һәм хәбәрне җибәргәннән соң йөкләү битен туктатмагыз. Җибәрү тәмамлангач, сезгә белдерү киләчәк.',
	'ALL_USERS'						=> 'Барлык кулланучыларга',

	'COMPOSE'				=> 'Хәбәр',

	'EMAIL_SEND_ERROR'		=> 'Хәбәр җибәргәндә хаталар килеп чыкты. Хаталар турында тулырак белешмә алу өчен %sхаталар логын%s карагыз.',
	'EMAIL_SENT'			=> 'Хат җибәрелде.',
	'EMAIL_SENT_QUEUE'		=> 'Хәбәр киләсе җибәрү чиратына куелды.',

	'LOG_SESSION'			=> 'Тарату тоташмасының кискен хаталар логын яздырып барырга',

	'SEND_IMMEDIATELY'		=> 'Кичектергесез җибәрү',
	'SEND_TO_GROUP'			=> 'Төркем катнашучыларына җибәрергә',
	'SEND_TO_USERS'			=> 'Кулланучыларга җибәрергә',
	'SEND_TO_USERS_EXPLAIN'	=> 'Хәбәр күрсәтелгән кулланучыларга өстәрәк сайлаган төркем урынына җибәреләчәк. Һәр кулланучы исемен яңа юлга кертегез.',

	'MAIL_BANNED'			=> 'Тыелган кулланучыларга җибәрергә',
	'MAIL_BANNED_EXPLAIN'	=> 'Күпләп төркемгә тарату башкарганда бу көйләү тыелган кулланучыларга email-хәбәрләр җибәрелүен билгели.',
	'MAIL_HIGH_PRIORITY'	=> 'Югары',
	'MAIL_LOW_PRIORITY'		=> 'Түбән',
	'MAIL_NORMAL_PRIORITY'	=> 'Гади',
	'MAIL_PRIORITY'			=> 'Тарату өстенлеге',
	'MASS_MESSAGE'			=> 'Хәбәрнең тексты',
	'MASS_MESSAGE_EXPLAIN'	=> 'Гади текстны гына куллана ала. Барлык тамга җибәрү алдыннан бетереләчәк.',

	'NO_EMAIL_MESSAGE'		=> 'Хәбәр текстын кертергә кирәк',
	'NO_EMAIL_SUBJECT'		=> 'Хәбәр башламын күрсәтергә кирәк',
));

?>