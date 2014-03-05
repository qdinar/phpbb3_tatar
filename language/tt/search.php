<?php
/**
*
* search [Tatar]
*
* @package language
* @version $Id: search.php 10004 2009-08-17 13:25:04Z rxu $
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
	'ALL_AVAILABLE'			=> 'Барлык булганнар',
	'ALL_RESULTS'			=> 'Барлык көннәр',

	'DISPLAY_RESULTS'		=> 'Нәтиҗәне ничек күрсәтергә',

	'FOUND_SEARCH_MATCH'		=> 'Эзләү нәтиҗәләре: %d',
	'FOUND_SEARCH_MATCHES'		=> 'Эзләү нәтиҗәләре: %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> '%d артык эзләү нәтиҗәсе',

	'GLOBAL'				=> 'Мөһим',

	'IGNORED_TERMS'			=> 'игътибарга алынмады',
	'IGNORED_TERMS_EXPLAIN'	=> 'Еш кулланганга бу сүзләр эзләүдә игътибарга алынмады: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Хәбәргә күчәргә',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Үз хәбәрләрегезне карау өчен сез системага теркәлеп яки рөхсәт алып керергә тиешсез.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Укылмаган хәбәрләрне карау өчен сез системага рөхсәт алып керергә яки теркәлергә тиеш.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Сезнең соңгы керүегездән соң җибәрелгән хәбәрләрне карау өчен сез системага рөхсәт алып керергә яки теркәлергә тиеш.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Сез эзләү өчен артык күп сүз күрсәттегез. Андый сүзләрнең саны %1$d артмаска тиеш$d.',

	'NO_KEYWORDS'			=> 'Эзләү өчен сез кимендә бер сүз кертергә тиешсез. Үрнәк билгесен * исәпләмичә һәр сүзнең озынлыгы %d ким һәм %d артык булырга тиеш түгел.',
	'NO_RECENT_SEARCHES'	=> 'Соңгы вакытта эзләү сораулары булмады.',
	'NO_SEARCH'				=> 'Гафу итегез, сезгә эзләүне файдалану тыелган.',
	'NO_SEARCH_RESULTS'		=> 'Туры килгән тема һәм хәбәрләр табылмады.',
	'NO_SEARCH_TIME'		=> 'Сез бер эзләү артыннан ук эзли алмыйсыз. Зинһар, соңрак кабатлагыз.',
	'NO_SEARCH_UNREADS'		=> 'Гафу итегез, ләкин бу конференциядә укылмаган хәбәрләрне эзләү сүндерелгән.',
	'WORD_IN_NO_POST'		=> 'Туры килгән хәбәрләр табылмады, чөнки, <strong>%s</strong> сүзе беркайда да очрамады.',
	'WORDS_IN_NO_POST'		=> 'Туры килгән хәбәрләр табылмады, чөнки <strong>%s</strong> сүзләре беркайда да очрамады.',

	'POST_CHARACTERS'		=> 'хәбәрдә билге',

	'RECENT_SEARCHES'		=> 'Соңгы эзләү сораулары',
	'RESULT_DAYS'			=> 'Хәбәрләрне эзләргә:',
	'RESULT_SORT'			=> 'Тәртипләү кыры',
	'RETURN_FIRST'			=> 'Беренчеләрен күрсәтергә',
	'RETURN_TO_SEARCH_ADV'	=> 'Киңәйтелгән эзләүгә кайтырга',

	'SEARCHED_FOR'				=> 'Эзләү соравы',
	'SEARCHED_TOPIC'			=> 'Темада эзләү',
	'SEARCHED_QUERY'			=> 'Эзләү соравы',
	'SEARCH_ALL_TERMS'			=> 'Барлык сүзләрне эзләргә',
	'SEARCH_ANY_TERMS'			=> 'Теләсә нинди сүзне сораулар теле белән эзләү',
	'SEARCH_AUTHOR'				=> 'Автор буенча эзләү',
	'SEARCH_AUTHOR_EXPLAIN'		=> '* билгесен үрнәк итеп файдаланыгыз.',
	'SEARCH_FIRST_POST'			=> 'Теманың беренче хәбәреннән генә',
	'SEARCH_FORUMS'				=> 'Форумнарда эзләргә',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Эзләү башкарылачак форум яки форумнарны сайлагыз. Түбәндәге тиешле рәвешне сүндермәгән булсагыз, асфорумнарда эзләү үзе башкарылачак.',
	'SEARCH_IN_RESULTS'			=> 'Табылганнардан эзләү',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Эзләү нәтиҗәләрендә булырга тиешле сүзләр өчен <strong>+</strong>, тиешле булмаганнар өчен <strong>-</strong> куллана аласыз. Исемлектән теләсә кайсы сүзне эзләү өчен сүзләрне <strong>|</strong> билгесе белән бүлә аласыз. <strong>*</strong> билгесен өлешчә туры килгән үрнәк итеп файдаланыгыз.',
	'SEARCH_MSG_ONLY'			=> 'Хәбәрләр текстларыннан гына',
	'SEARCH_OPTIONS'			=> 'Сорау шартлары',
	'SEARCH_QUERY'				=> 'Сорау',
	'SEARCH_SUBFORUMS'			=> 'Асфорумнардан эзләргә',
	'SEARCH_TITLE_MSG'			=> 'Тема исемнәреннән һәм хәбәрләр текстларыннан',
	'SEARCH_TITLE_ONLY'			=> 'Тема исеме буенча гына',
	'SEARCH_WITHIN'				=> 'Эзләргә',
	'SORT_ASCENDING'			=> 'арту буенча',
	'SORT_AUTHOR'				=> 'Авторы',
	'SORT_DESCENDING'			=> 'кимү буенча',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Хәбәрнең башламы',
	'SORT_TIME'					=> 'Урнашу вакыты',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Автор исеменә кимендә %d билге кертергә тиешсез.',
));

?>
