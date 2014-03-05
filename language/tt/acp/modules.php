<?php
/**
*
* acp_modules [Tatar]
*
* @package language
* @version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Сез монда барлык модульләр төрләре белән идарә итә аласыз. Игътибар итегез, администратор бүлеге өч дәрәҗәле меню төзелешеннән тора (Бүленеш → Бүленеш → Модуль), нәтиҗәдә бүлекчәләр ике дәрәҗәле меню төзелешле (Бүленеш → Модуль), бу сакланырга тиеш. Шулай ук исәпкә алыгыз, әгәр сез модульләр идарәсе өчен җавап биргән модульләрне сүндерсәгез яки бетерсәгез, сез үз үзегезгә рөхсәтне тыя аласыз.',
	'ADD_MODULE'					=> 'Модуль өстәргә',
	'ADD_MODULE_CONFIRM'			=> 'Сез сайлаган модульне күрсәтелгән куллану ысулы белән өстәргә телисезме?',
	'ADD_MODULE_TITLE'				=> 'Модуль өстәү',

	'CANNOT_REMOVE_MODULE'	=> 'Модульне бетереп булмады, чөнки аңа бүлендек модульләр билгеләнгән. Бу гамәлне башкару алдыннан барлык бүлендек модульләрне бетерегез яки башка урынга күчерегез.',
	'CATEGORY'				=> 'Бүленеш',
	'CHOOSE_MODE'			=> 'Модуль куллану ысулы',
	'CHOOSE_MODE_EXPLAIN'	=> 'Модуль кулланышы ысулын сайлагыз.',
	'CHOOSE_MODULE'			=> 'Модуль сайлау',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Бу модуль чыгаручы файлны сайлагыз.',
	'CREATE_MODULE'			=> 'Модуль ясарга',

	'DEACTIVATED_MODULE'	=> 'Сүндерелгән модуль',
	'DELETE_MODULE'			=> 'Модульне бетерергә',
	'DELETE_MODULE_CONFIRM'	=> 'Сез бу модульне бетерергә телисезме?',

	'EDIT_MODULE'			=> 'Модуль көйләүләре',
	'EDIT_MODULE_EXPLAIN'	=> 'Бу бит ярдәмендә сез модульне көйли аласыз.',

	'HIDDEN_MODULE'			=> 'Яшерен модуль',

	'MODULE'					=> 'Модуль',
	'MODULE_ADDED'				=> 'Модуль өстәде.',
	'MODULE_DELETED'			=> 'Модуль бетерелде.',
	'MODULE_DISPLAYED'			=> 'Модуль күрсәтү',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Әгәр сез модуль исемлектә күрсәтелгәнен һәм аны кулланырга теләсәгез, күчергечне «Юк» халәтенә куегыз.',
	'MODULE_EDITED'				=> 'Модуль көйләүләре үзгәртелде.',
	'MODULE_ENABLED'			=> 'Модуль кабызылган',
	'MODULE_LANGNAME'			=> 'Модуль исеме',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Күрсәтелгән модуль исемен кертегез. Тел файлында модуль исеме белдерелгән булса, үзгәрмә исемен кулланыгыз.',
	'MODULE_TYPE'				=> 'Модуль төре',

	'NO_CATEGORY_TO_MODULE'	=> 'Бүленешне модуль итеп белдереп булмады. Бу гамәлне башкару алдыннан барлык бүлендек модульләрне бетерегез яки башка урынга күчерегез.',
	'NO_MODULE'				=> 'Модуль табылмады.',
	'NO_MODULE_ID'			=> 'Модуль ID сы күрсәтелмәгән.',
	'NO_MODULE_LANGNAME'	=> 'Модуль исеме күрсәтелмәгән.',
	'NO_PARENT'				=> 'Нәсел юк',

	'PARENT'				=> 'Нәсел',
	'PARENT_NO_EXIST'		=> 'Нәсел юк.',

	'SELECT_MODULE'			=> 'Модуль сайлагыз',
));

?>