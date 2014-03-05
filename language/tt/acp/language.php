<?php
/**
*
* acp_language [Russian]
*
* @package language
* @version $Id: language.php 9649 2009-06-21 19:17:20Z bantu $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

//кери тәрҗемәсе

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
	'ACP_FILES'						=> 'Администратор файллары',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Сез монда тел төргәкләрен бетерә яки урнаштыра аласыз. Конференциядә килешү буенча кулланылган тел йолдызчык белән тамгаланган (*).',

	'EMAIL_FILES'			=> 'email хәбәрләр үрнәге',

	'FILE_CONTENTS'				=> 'Файл эчендә',
	'FILE_FROM_STORAGE'			=> 'Саклау папкасыннан файл',

	'HELP_FILES'				=> 'Белешмә файллар',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Урнаштырылган тел төргәкләре',
	'INVALID_LANGUAGE_PACK'		=> 'Сайланган тел төргәге рөхсәт ителмәгән. Төргәкне тикшереп, кирәк булса, аны серверга йөкләгез.',
	'INVALID_UPLOAD_METHOD'		=> 'Сайланган йөкләү ысулы мөмкин түгел Башка ысулны сайлагыз.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Тел турында белешмә яңартылды',
	'LANGUAGE_ENTRIES'					=> 'Тел мәгълүматы',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Сез монда тел төргәгенең булган яки әле тәрҗемә ителмәгән файл язмаларын үзгәртә аласыз.<br /><strong>Искәртмә:</strong> тел файлын үзгәртсәгез, үзгәртүләр аерым папкага алга таба йөкләү өчен сакланачак. Үзгәртүләр кулланучыларга сез башлангыч тел файлларын серверда алмаштырганчыга кадәр күренмәячәк (яңаны йөкләгәнче).',
	'LANGUAGE_FILES'					=> 'Тел файллары',
	'LANGUAGE_KEY'						=> 'Тел ачкычы',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Тел төргәге инде урнаштырылды.',
	'LANGUAGE_PACK_DELETED'				=> '<strong>%s</strong> тел төргәге бетерелде. Бу телне кулланучылар конференциянең килешү буенча теленә күчерелде.',
	'LANGUAGE_PACK_DETAILS'				=> 'Тел төргәге турында мәгълүмат',
	'LANGUAGE_PACK_INSTALLED'			=> 'Тел төргәге <strong>%s</strong> уңышлы урнаштырылды.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Рәвешнең өстәмә кырларның тел юллары килешү буенча тел төргәгеннән күчерелде. Кирәк булса, аларны үзгәртегез.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Җирле исеме',
	'LANGUAGE_PACK_NAME'				=> 'Исеме',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Сайланган тел төргәге юк',
	'LANGUAGE_PACK_USED_BY'				=> 'Кулланалар (роботларны санап)',
	'LANGUAGE_VARIABLE'					=> 'Тел үзгәрмәсе',
	'LANG_AUTHOR'						=> 'Тел төргәге авторы',
	'LANG_ENGLISH_NAME'					=> 'Инглизчә исеме',
	'LANG_ISO_CODE'						=> 'ISO коды',
	'LANG_LOCAL_NAME'					=> 'Җирле исеме',

	'MISSING_LANGUAGE_FILE'		=> 'Тел файлы юк: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Булмаган тел үзгәрмәләре',
	'MODS_FILES'				=> 'Модларның тел файллары',

	'NO_FILE_SELECTED'				=> 'Тел файлын күрсәтмәдегез.',
	'NO_LANG_ID'					=> 'Тел төргәген күрсәтмәдегез.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Килешү буенча тел төргәген бетә алмыйсыз.<br />Бу төргәкне бетерү алдыннан, килешү буенча конференция телен алмаштырыгыз',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Барлык мөмкин булган тел төргәкләре урнаштырылды',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Саклау папкасыннан бетерергә',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Йөкләү форматын сайларга',
	'SUBMIT_AND_DOWNLOAD'		=> 'Форманы җибәрергә һәм файлны йөкләргә',
	'SUBMIT_AND_UPLOAD'			=> 'Форманы җибәрергә һәм файлны серверга йөкләргә',

	'THOSE_MISSING_LANG_FILES'			=> 'Түбәндәге тел файллары төргәктә юк %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Тел төргәгендә түбәндәге үзгәрмәләр юк <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Урнаштыруга мөмкин булган тел төргәкләре',

	'UNABLE_TO_WRITE_FILE'		=> 'Файлны %s яздырып булмады.',
	'UPLOAD_COMPLETED'			=> 'Серверга йөкләү тәмамланды',
	'UPLOAD_FAILED'				=> 'Серверга йөкләп булмады. Туры килгән файлны кулдан алмаштырырга туры килергә мөмкин.',
	'UPLOAD_METHOD'				=> 'Серверга йөкләү ысулы',
	'UPLOAD_SETTINGS'			=> 'Серверга йөкләү көйләүләре',

	'WRONG_LANGUAGE_FILE'		=> 'Сайланган тел файлы мөмкин түгел',
));

?>