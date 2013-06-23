<?php
/**
*
* search [Russian]
*
* @package language
* @version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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
'ALL_AVAILABLE'         => 'Барлык булганнардан',
'ALL_RESULTS'         => 'Барлык көннәр',

'DISPLAY_RESULTS'      => 'Нәтиҗәләрне күрсәтергә:',

'FOUND_SEARCH_MATCH'      => 'Эзләү нәтиҗәләре: %d',
'FOUND_SEARCH_MATCHES'      => 'Эзләү нәтиҗәләре: %d',
'FOUND_MORE_SEARCH_MATCHES'   => '%d артык эзл.нәтиҗәләре',

'GLOBAL'            => 'Әһәмиятле',

'IGNORED_TERMS'         => 'игътибарга алынмады',
'IGNORED_TERMS_EXPLAIN'   => 'Еш кулланганга күрә бу сүзләр эзләүдә игътибарга алынмадылар: <strong>%s</strong>.',

'JUMP_TO_POST'         => 'Хәбәргә күчәргә',

'LOGIN_EXPLAIN_EGOSEARCH'   => 'Үз хәбәрләрегезне карау өчен сез системада теркәлгән һәм авторлаштырылган булырга тиешсез.',
       'LOGIN_EXPLAIN_UNREADSEARCH'=> 'The board requires you to be registered and logged in to view your unread posts.',
       'LOGIN_EXPLAIN_NEWPOSTS'        => 'The board requires you to be registered and logged in to view new posts since your last visit.',
 
       'MAX_NUM_SEARCH_KEYWORDS_REFINE'        => 'You specified too many words to search for. Please do not enter more than %1$d words.',

'NO_KEYWORDS'         => 'Эзләү өчен сез кимендә бер сүз кертергә тиешсез. Шаблон символын * исәпләмичә һәр сүзнең озынлыгы %d ким һәм %d артык булырга тиеш түгел.',
'NO_RECENT_SEARCHES'   => 'Соңгы вакытларда эзләү соратулары булмады.',
'NO_SEARCH'            => 'Гафу итегез, сезгә эзләүдән файдалану тыелган.',
'NO_SEARCH_RESULTS'      => 'Туры килүче темалар һәм хәбәрләр табылмады.',
'NO_SEARCH_TIME'      => 'Сез бер эзләү артыннан ук эзли алмыйсыз. Зинһар, соңрак эзләрсез.',
       'NO_SEARCH_UNREADS'             => 'Sorry but searching for unread posts has been disabled on this board.',
'WORD_IN_NO_POST'      => 'Туры килүче хәбәрләр табылмады, чөнки, <strong>%s</strong> сүзе беркайда да очрамады.',
'WORDS_IN_NO_POST'      => 'Туры килүче хәбәрләр табылмады, чөнки <strong>%s</strong> сүзләре беркайда да очрамады.',

'POST_CHARACTERS'      => 'хәбәр тамгасы',

'RECENT_SEARCHES'      => 'Соңгы эзләү соратулары',
'RESULT_DAYS'         => 'Хәбәрләрне эзләргә:',
'RESULT_SORT'         => 'Сортировка кыры',
'RETURN_FIRST'         => 'Беренчеләрен күрсәтергә',
'RETURN_TO_SEARCH_ADV'   => 'Киңәйтелгән эзләүгә кайтырга',

'SEARCHED_FOR'            => 'Эзләү соратуы',
'SEARCHED_TOPIC'         => 'Темада эзләү',
'SEARCH_ALL_TERMS'         => 'Барлык сүзләрне эзләргә',
'SEARCH_ANY_TERMS'         => 'Теләсә нинди сүзне эзләргә/соратулар теле белән эзләү',
'SEARCH_AUTHOR'            => 'Автор буенча эзләү',
'SEARCH_AUTHOR_EXPLAIN'      => '* ны шаблон итеп файдаланыгыз.',
'SEARCH_FIRST_POST'         => 'Теманың беренче хәбәреннән генә',
'SEARCH_FORUMS'            => 'Форумнарда эзләргә',
'SEARCH_FORUMS_EXPLAIN'      => 'Эзләү башкарылачак форум яки форумнарны сайлагыз. Түбәндәге тиешле опцияне өзмәгән булсагыз, асфорумнарда эзләү автомат рәвештә барачак.',
'SEARCH_IN_RESULTS'         => 'Табылганнардан эзләү',
'SEARCH_KEYWORDS_EXPLAIN'   => 'Эзләү нәтиҗәләрендә булырга тиешле сүзләр өчен <strong>+</strong>, булмаска тиешлеләре өчен <strong>-</strong> файдаланыгыз. Исемлектәге теләсә кайсы сүзне эзләү өчен сүзләрне  <strong>|</strong> тамгасы белән бүлә аласыз. <strong>*</strong> ны өлешчә туры китерү шаблоны итеп файдаланыгыз.',
'SEARCH_MSG_ONLY'         => 'Хәбәрләр текстларыннан гына',
'SEARCH_OPTIONS'         => 'Эзләү көйләнмәләре',
'SEARCH_QUERY'            => 'Эзләү',
'SEARCH_SUBFORUMS'         => 'Асфорумнардан эзләргә',
'SEARCH_TITLE_MSG'         => 'Тема исемнәреннән һәм хәбәрләр текстларыннан',
'SEARCH_TITLE_ONLY'         => 'Фәкать тема исеме буенча',
'SEARCH_WITHIN'            => 'Эзләргә',
'SORT_ASCENDING'         => 'арту буенча',
'SORT_AUTHOR'            => 'Автор',
'SORT_DESCENDING'         => 'кимү буенча',
'SORT_FORUM'            => 'Форум',
'SORT_POST_SUBJECT'         => 'Хәбәр башламы',
'SORT_TIME'               => 'Урнаштыру вакыты',

'TOO_FEW_AUTHOR_CHARS'   => 'Сез автор исеменең кимендә %d тамгасын кертергә тиеш.',
));

?>