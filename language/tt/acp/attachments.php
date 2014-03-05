<?php
/**
*
* acp_attachments [Tatar]
*
* @package language
* @version $Id: attachments.php 8946 2008-09-26 18:32:05Z toonarmy $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Сез монда өстәүләр һәм алар белән бәйле махсус бүленешләрнең төп шартларын көйли аласыз.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Сез монда киңәйтүләр төркемен өсти, бетерә һәм үзгәртә аласыз. Шулай ук монда аерым киңәйтүләр төркемен сүндереп, төркемнәргә махсус бүленешләр билгеләп, өстәүләрне йөкләү шартын үзгәртеп һәм аерым төркемнең өстәү алдында күрсәтеләчәк билгене күрсәтеп була.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Сез монда рөхсәт ителгән киңәйтүләр белән идарә итә аласыз. Киңәйтүләрне эшләтү өчен «Киңәйтүләр төркеме» битен карап чыгыгыз. Без катгый куркыныч була алган киңәйтүләрне рөхсәт итәргә тәкъдим итмибез (алардан <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> һәм б. к).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Сез монда югалган файлларны күрә аласыз. Бу файллар, кулланучылар хәбәрләргә файллар беркетеп, соңыннан ул хәбәрләрне җибәрмәгән өчен барлыкка килә. Сез бу файлларны бетерә яки булган хәбәрләргә беркетә аласыз. Икенче очракта сезгә хәбәрнең дөрес тиңләштергечен (ID) үзегезгә кертергә туры киләчәк. Шуннан соң төялгән өстәү сез күрсәткән хәбәргә беркетеләчәк.',
	'ADD_EXTENSION'						=> 'Киңәйтүен өстәргә',
	'ADD_EXTENSION_GROUP'				=> 'Киңәйтүләр төркемен өстәү',
	'ADMIN_UPLOAD_ERROR'				=> 'Файлны беркетү омтылышында хата: «%s».',
	'ALLOWED_FORUMS'					=> 'Форумнарда рөхсәт итәргә',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Билгеләнгән киңәйтүләрне сайлаган (яки барлык) форумнарда чыгару мөмкинлеге.',
	'ALLOWED_IN_PM_POST'				=> 'Киңәйтүләр төркеме рөхсәт ителгән',
	'ALLOW_ATTACHMENTS'					=> 'Өстәүләрне рөхсәт итү',
	'ALLOW_ALL_FORUMS'					=> 'Барлык форумнарда',
	'ALLOW_IN_PM'						=> 'Шәхси хәбәрләрдә рөхсәт итәргә',
	'ALLOW_PM_ATTACHMENTS'				=> 'Шәхси хәбәрләрдә өстәүләрне рөхсәт итәргә',
	'ALLOW_SELECTED_FORUMS'				=> 'Сайланганнарда гына',
	'ASSIGNED_EXTENSIONS'				=> 'Билгеләнгән көйләүләр',
	'ASSIGNED_GROUP'					=> 'билгеләнгән киңәйтүләр төркеме',
	'ATTACH_EXTENSIONS_URL'				=> 'Киңәйтүләр',
	'ATTACH_EXT_GROUPS_URL'				=> 'Киңәйтүләр төркеме',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Максималь файл күләме',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Һәр йөкләнелгән файл өчен максималь күләм. Әгәр мәгънә 0 тигез, файл күләме PHP сыйфаты белән генә чикләнгән.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Шәхси хәбәрдә максималь файл күләме',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Шәхси хәбәргә өстәлгән һәр файл өчен максималь күләм. 0 мәгънәсе чикләнмәгән күләмгә туры килә.',
	'ATTACH_ORPHAN_URL'					=> 'Югалган өстәүләр',
	'ATTACH_POST_ID'					=> 'Хәбәр ID',
	'ATTACH_QUOTA'						=> 'Гомуми өстәүләр квотасы',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Өстәүләргә максималь рөхсәт ителгән тәлинкә бушлыгы. 0 мәгънәсе чикләнмәгән күләмгә туры килә.',
	'ATTACH_TO_POST'					=> 'Файлны хәбәргә беркетергә',

	'CAT_FLASH_FILES'			=> 'Flash файллары',
	'CAT_IMAGES'				=> 'Рәсемнәр',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime файллары',
	'CAT_RM_FILES'				=> 'RealMedia файллары',
	'CAT_WM_FILES'				=> 'Windows Media файллары',
	'CHECK_CONTENT'				=> 'Өстәүләрне тикшерергә',
	'CHECK_CONTENT_EXPLAIN'		=> 'Кайбер браузерлар йөкләнелгән файлларның MIME-төрен билгеләгәндә алдана ала. Бу шартны кабызу андый файллар йөкләү вакытында кире кагылачак икәненә гарантия бирә.',
	'CREATE_GROUP'				=> 'Яңа төркем',
	'CREATE_THUMBNAIL'			=> 'Миниатюралар ясарга',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Шартны кабызганда йөкләнелгән рәсемнәр өчен барлык мөмкин булган хәлләрдә миниатюралар ясалачак.',

	'DEFINE_ALLOWED_IPS'			=> 'Рөхсәт ителгән IP-адреслар һәм үзәкләр',
	'DEFINE_DISALLOWED_IPS'			=> 'Тыелган IP-адреслар һәм үзәкләр',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Һәр IP-адресны яки үзәк исемен яңа юлда кертегез. IP-адрес аралыгын күрсәтү өчен аралык башын һәм ахырын сызык (-) яки үрнәк сыйфатында алмаштыру билгесен (*) кулланыгыз.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Сез бер тапкырда берничә IP-адрес бетерә (яки чыгармадан бетерә) аласыз. Берничә адрес сайлау өчен сезнең санакка һәм браузерга туры килгән тычкан һәм төймәсәр комбинациясен кулланыгыз. Чыгарылган IP-адреслар зәңгәр күренештә күрсәтелә.',
	'DISPLAY_INLINED'				=> 'Рәсемнәрне хәбәрләрдә күрсәтергә',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Шартын сүндергәндә, хәбәргә өстәлгән рәсемнәр сылтама итеп күрсәтеләчәк.',
	'DISPLAY_ORDER'					=> 'Өстәүләр күрсәтү тәртибе',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Өстәүләрне урнаштыру вакыты буенча күрсәтү.',

	'EDIT_EXTENSION_GROUP'			=> 'Киңәйтүләр төркемен үзгәртергә',
	'EXCLUDE_ENTERED_IP'			=> 'Бу шартны кертелгән IP-адрес яки үзәкне рөхсәт ителгәннәр исемлегеннән чыгару өчен кабызыгыз.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'IP-адресны рөхсәт ителгәннәрдән чыгарырга',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'IP-адреслар яки үзәкләр исемен тыелганнардан чыгарырга',
	'EXTENSIONS_UPDATED'			=> 'Киңәйтү яңартылды.',
	'EXTENSION_EXIST'				=> '%s киңәйтүе инде бар.',
	'EXTENSION_GROUP'				=> 'Киңәйтүләр төркеме',
	'EXTENSION_GROUPS'				=> 'Киңәйтмәләр төркеме',
	'EXTENSION_GROUP_DELETED'		=> 'Киңәйтүләр төркеме бетерелде.',
	'EXTENSION_GROUP_EXIST'			=> '%s киңәйтүе төркеме бар инде.',

	'EXT_GROUP_ARCHIVES'			=> 'Архивлар',
	'EXT_GROUP_DOCUMENTS'			=> 'Документлар',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Йөкләнелгән файллар',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash файллары',
	'EXT_GROUP_IMAGES'				=> 'Сурәтләр',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Текст файллары',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media файллары',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media файллары',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media файллары',

	'GO_TO_EXTENSIONS'		=> 'Киңәйтүләр идарәсе битенә күчәргә',
	'GROUP_NAME'			=> 'Төркем исеме',

	'IMAGE_LINK_SIZE'			=> 'Сылтама өчен рәсемнәр күләме',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Әгәр рәсем бу зурлыктан артык булса, аның урынына бу рәсемне йөкләү сылтамасы күрсәтеләчәк. Бу мөмкинлекне кире кагу өчен 0×0 зурлыгын кертегез.',
	'IMAGICK_PATH'				=> 'Imagemagick программасына юл',
	'IMAGICK_PATH_EXPLAIN'		=> 'Imagemagick программасына тулы юл. Мәсәлән, <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Бер хәбәрдә өстәүләр максимумы',
	'MAX_ATTACHMENTS_PM'			=> 'Шәхси хәбәрдә өстәүләр максимумы',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максималь файл күләме',
	'MAX_IMAGE_SIZE'				=> 'Рәсемнәрнең максималь зурлыгы',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Йөкләнелгән рәсемнәрнең максималь зурлыгы. Зурлык тикшерүен сүндерү өчен 0×0 кертегез.',
	'MAX_THUMB_WIDTH'				=> 'Миниатюраларның максималь киңлеге',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Ясалган миниатюра киңлеге монда күрсәтелгән зурлыкны арттыра алмый.',
	'MIN_THUMB_FILESIZE'			=> 'Миниатюралар өчен минималь файллар күләме',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Миниатюралар күрсәтелгән зурлыктан кечерәк рәсемнәргә ясалмаячак.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Киңәйтүләр төркеме хәбәрләрдә генә рөхсәт ителгән',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Киңәйтүләр төркеме тыелган',
	'NOT_ASSIGNED'				=> 'Билгеләнмәгән',
	'NO_EXT_GROUP'				=> 'Юк',
	'NO_EXT_GROUP_NAME'			=> 'Төркем исеме күрсәтелмәгән.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Киңәйтүләр төркеме күрсәтелмәгән.',
	'NO_FILE_CAT'				=> 'Юк',
	'NO_IMAGE'					=> 'Билгесез',
	'NO_THUMBNAIL_SUPPORT'		=> 'Миниатюраларны куллану сүндерелгән, чөнки мөмкин булган GD китапханәсе яки урнаштырылган Imagemagick программасы табылмады.',
	'NO_UPLOAD_DIR'				=> 'Сез күрсәткән йөкләү өчен папка юк.',
	'NO_WRITE_UPLOAD'			=> 'Сез күрсәткән йөкләү өчен папка яздыруга мөмкин түгел. Бу папкага керү хокукын, серверга аңа яздыруны рөхсәт итеп, үзгәртегез.',

	'ONLY_ALLOWED_IN_PM'	=> 'Киңәйтүләр төркеме шәхси хәбәрләрдә генә рөхсәт ителгән',
	'ORDER_ALLOW_DENY'		=> 'Рөхсәт бирү',
	'ORDER_DENY_ALLOW'		=> 'Тыярга',

	'REMOVE_ALLOWED_IPS'	=> 'Бетерү яки чыгарылган <em>рөхсәтле</em> IP-адреслар яки үзәкләр исемлегеннән алу',
	'REMOVE_DISALLOWED_IPS'	=> 'Бетерү яки чыгарылган <em>тыелган</em> IP-адреслар яки үзәкләр исемлегеннән алу',

	'SEARCH_IMAGICK'				=> 'Imagemagick табарга',
	'SECURE_ALLOW_DENY'				=> 'Рөхсәт ителгән һәм тыелганнар исемлеге',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Килешү буенча рөхсәт ителгән һәм тыелган исемлек тәртибен иминле йөкләүне кабызганда <strong>ак исемлек</strong> (Рөхсәт итү) яки <strong>кара исемлеккә</strong> (Тыярга) үзгәртергә.',
	'SECURE_DOWNLOADS'				=> 'Иминле йөкләүләрне кабызырга',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Шартны кабызганда барлык йөкләүләр сез күрсәткән IP-адрес һәм үзәкләр белән чикләнәчәк.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Иминле йөкләүләр сүндерелгән. Түбәндәге көйләүләр иминле йөкләүләрне кабызганда кулланылачак.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-адреслар исемлеге яңартылды.',
	'SECURE_EMPTY_REFERRER'			=> 'Күчүнең буш чыганагын рөхсәт итәргә',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Иминле йөкләүләр күчү чыганагын (referrers) күрсәтүдә нигезләнгән. Сез йөкләүне күчү чыганагы булмаган клиентларга рөхсәт итәргә телисезме?',
	'SETTINGS_CAT_IMAGES'			=> 'Сурәтләр бүленешен көйләргә',
	'SPECIAL_CATEGORY'				=> 'Махсус бүленеш',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Махсус бүленешләр хәбәрләрдә өстәүләрне күрсәтү ысулы белән аерыла.',
	'SUCCESSFULLY_UPLOADED'			=> 'Йөкләү тәмамланды.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Киңәйтүләр төркеме өстәлде.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Киңәйтүләр төркеме яңартылды.',

	'UPLOADING_FILES'				=> 'Файллар йөкләү',
	'UPLOADING_FILE_TO'				=> '«%1$s» файлын %2$d санындагы хәбәргә йөкләү…',
	'UPLOAD_DENIED_FORUM'			=> 'Сезнең «%s» форумына файллар йөкләү хокукы юк.',
	'UPLOAD_DIR'					=> 'Өстәүләр саклау өчен папка',
	'UPLOAD_DIR_EXPLAIN'			=> 'Искәрмә: әгәр сез бу папканы анда йөкләнелгән файллар булган вакытта үзгәртсәгез, сезгә бу файлларны кулдан яңа папкага күчерергә туры киләчәк.',
	'UPLOAD_ICON'					=> 'Өстәү билгесе',
	'UPLOAD_NOT_DIR'				=> 'Күрсәтелгән йөкләү өчен юл папка түгел.',
));

?>