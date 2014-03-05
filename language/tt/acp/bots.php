<?php
/**
*
* acp_bots [Tatar]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Эзләү роботлары (ботлары) белән идарә)',
	'BOTS_EXPLAIN'		=> '«Ботлар», «үрмәкүчләр» яки «шудырмалар» — бу автоматик агентлар, күп очракта эзләү системалары белән үз мәгълүмат нигезләрен яңарту өчен кулланыла. Бик сирәк тоташмалар белән дөрес эшләгән өчен, алар керү санавычларын боза һәм серверга төялешне арттыра, ә кайбер чакта сәхифәне дөрес түгел берләштерә ала. Сез монда аерым кулланучылар төрен әлеге проблемалар булмасын өчен ясый аласыз.',
	'BOT_ACTIVATE'		=> 'Кабызырга',
	'BOT_ACTIVE'		=> 'Бот эшлекле',
	'BOT_ADD'			=> 'Бот өстәргә',
	'BOT_ADDED'			=> 'Яңа бот өстәлде.',
	'BOT_AGENT'			=> 'Агентка туры килү',
	'BOT_AGENT_EXPLAIN'	=> 'Бот агенты (User-Agent) белән тулысынча яки өлешчә туры килгән юл.',
	'BOT_DEACTIVATE'	=> 'Сүндерергә',
	'BOT_DELETED'		=> 'Бот бетерелде.',
	'BOT_EDIT'			=> 'Бот көйләүләре',
	'BOT_EDIT_EXPLAIN'	=> 'Бу бит ярдәмендә сез яңа ботны өсти яки булган ботның көйләүләрен үзгәртә аласыз. Сез бот агенты юлын күрсәтә һәм аны тиңләштерү өчен бер яки берничә IP-адрес (яки адреслар аралыгын) кертә аласыз. Агент юлы яки адрес күрсәткәндә игътибарлы булыгыз. Монда шулай ук бот кулланачак конференция стилен һәм телне күрсәтеп була. Бу ботлар өчен җиңеләйтелгән стильне урнаштырып, трафик кулланышын киметергә булыша. Махсус «Ботлар» төркеменә туры килгән керү хокукларын көйләргә онытмагыз.',
	'BOT_LANG'			=> 'Бот өчен тел',
	'BOT_LANG_EXPLAIN'	=> 'Бот кергәндә кулланган конференция тел.',
	'BOT_LAST_VISIT'	=> 'Керүләр',
	'BOT_IP'			=> 'Ботның IP-адресы',
	'BOT_IP_EXPLAIN'	=> 'Өлешчә туры килүләр рөхсәт ителгән. Адресларны өтер белән аерыгыз.',
	'BOT_NAME'			=> 'Бот атамасы',
	'BOT_NAME_EXPLAIN'	=> 'Сезгә белешмә итеп кенә кулланыла.',
	'BOT_NAME_TAKEN'	=> 'Күрсәтелгән исем конференциядә кулланыла инде һәм бот өчен кулланыла алмый.',
	'BOT_NEVER'			=> 'Беркайчан',
	'BOT_STYLE'			=> 'Бот өчен стиль',
	'BOT_STYLE_EXPLAIN'	=> 'Бот кергәндә кулланган конференция стиле.',
	'BOT_UPDATED'		=> 'Бот көйләүләре яңартылды.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Сез керткән бот агенты кулланыла инде.',
	'ERR_BOT_NO_IP'				=> 'Сез керткән IP-адреслар рөхсәт ителмәгән яки хост исемен рөхсәт итеп булмый.',
	'ERR_BOT_NO_MATCHES'		=> 'Бу ботны тиңләштерү өчен кимендә бер агент яки IP-адрес күрсәтергә кирәк.',

	'NO_BOT'		=> 'Күрсәтелгән тиңләштергеч белән бот табылмады.',
	'NO_BOT_GROUP'	=> 'Махсус төркем «Ботлар» табылмады.',
));

?>