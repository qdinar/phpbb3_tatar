<?php
/**
*
* acp_database [Tatar]
*
* @package language
* @version $Id: database.php 9765 2009-07-17 10:11:10Z bantu $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Сез монда конференциянең барлык мәгълүматның резерв күчермәсен ясый аласыз. Сез соңгы архивны серверда <samp>store/</samp> папкасына саклый яки аны йөкли аласыз. Сервер сыйфатына карап, резерв күчермә файлын берничә форматта тыгызлау мөмкинлеге була ала.',
	'ACP_RESTORE_EXPLAIN'	=> 'Сакланган файлдан барлык phpBB җәдвәлләрен торгызу башкарылачак. Сервер мондый мөмкинлекне кулланса, сез тыгызланган gzip яки bzip2 файлларын куллана алачаксыз, алар үзләре чишеләчәк. <strong>Игътибар:</strong> барлык булган мәгълүмат юк ителәчәк. Торгызу озак вакыт алачак, шуңа күрә бу барыш тәмамланганчы әлеге биттән китмәгез. Көтелгән phpBB чаралары белән ясалган резерв күчермәләр <samp>store/</samp> папкасында сакланылды. Булган система кулланмыйча ясалган резерв күчермәләрдән торгызу уңышсызлыкка китерергә мөмкин.',

	'BACKUP_DELETE'		=> 'Резерв күчермә файлы бетерелде.',
	'BACKUP_INVALID'	=> 'Рөхсәт ителмәгән резерв күчермә файлы сайланган.',
	'BACKUP_OPTIONS'	=> 'Резерв күчермә ясау шартлары',
	'BACKUP_SUCCESS'	=> 'Резерв күчермә файлы ясалды.',
	'BACKUP_TYPE'		=> 'Күчермә төре',

	'DATABASE'			=> 'МН идарәсе',
	'DATA_ONLY'			=> 'Мәгълүмат кына',
	'DELETE_BACKUP'		=> 'Резерв күчермәне бетерергә',
	'DELETE_SELECTED_BACKUP'	=> 'Сез бу күчермәне бетерергә телисезме?',
	'DESELECT_ALL'		=> 'Тамганы алырга',
	'DOWNLOAD_BACKUP'	=> 'Резерв күчермәне йөкләргә',

	'FILE_TYPE'			=> 'Файл төре',
	'FILE_WRITE_FAIL'	=> 'Файлны «store» папкасында саклап булмады.',
	'FULL_BACKUP'		=> 'Тулы',

	'RESTORE_FAILURE'		=> 'Резерв күчермә файлы бозык булуы мөмкин.',
	'RESTORE_OPTIONS'		=> 'Торгызу шартлары',
	'RESTORE_SELECTED_BACKUP'	=> 'Сез мәгълүматны сайлаган резерв күчермәдән торгызырга телисезме?',
	'RESTORE_SUCCESS'		=> 'Мәгълүмат нигезе торгызылды.<br /><br />Конференция резерв күчермә ясау вакыты халәтенә кайтарылды.',

	'SELECT_ALL'			=> 'Барысын сайлау',
	'SELECT_FILE'			=> 'Файлны сайлагыз',
	'START_BACKUP'			=> 'Резерв күчерүне башларга',
	'START_RESTORE'			=> 'Торгызуны башларга',
	'STORE_AND_DOWNLOAD'	=> 'Серверда сакларга һәм йөкләргә',
	'STORE_LOCAL'			=> 'Серверда сакларга',
	'STRUCTURE_ONLY'		=> 'Төзелеш кенә',

	'TABLE_SELECT'		=> 'Җәдвәлләр сайлау',
	'TABLE_SELECT_ERROR'=> 'Берәр җәдвәлне сайларга кирәк.',
));

?>