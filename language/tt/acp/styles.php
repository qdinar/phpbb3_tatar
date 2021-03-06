<?php
/**
*
* acp_styles [Tatar]
*
* @package language
* @version $Id: styles.php 10074 2009-08-31 11:25:28Z acydburn $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Сурәтләр җыелмасы конференциядә кулланылган барлык төймәләр рәсемнәре, форумнар, папкалар һәм шулай ук билгеле сурәтләр стиленә бәйле булмаган башка әйберләрдән тора. Сез монда булган сурәтләр җыелмасын төзәтә, экспортлый яки бетерә һәм яңаларны импортлый яки эшләтә аласыз.',
	'ACP_STYLES_EXPLAIN'	=> 'Сез монда конференциядә мөмкин булган стильләр белән идарә итә аласыз. Стиль үрнәктән, темадан һәм сурәт җыелмасыннан тора. Сез булган стильләрне үзгәртә, бетерә, туктата, кабат эшләтә, ясый яки яңаларны импортлый аласыз. Сез шулай ук стиль ничек күренәчәген алдан карау мөмкинлеген кулланып күрә аласыз. Хәзерге килешү буенча стиль йолдыз белән билгеләнгән (*). Шулай ук һәр стиль өчен гомуми кулланучы саны күрсәтелгән. Онытмагыз, кулланучылар стильләрен мәҗбүри алмаштыру монда башкарылмый.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Үрнәктә конференция битләре ясалу өчен барлык билгеләү кисәкләре бар. Сез монда булган үрнәкләрне төзәтә, бетерә, экспортлый, импортлый һәм алдан карый аласыз. Сез шулай ук BBCode ясалу өчен кулланылган үрнәк кодын үзгәртә аласыз.',
	'ACP_THEMES_EXPLAIN'	=> 'Сез монда темалар ясый, урнаштыра, төзәтә, бетерә һәм экспортлый аласыз. Тема үрнәктә кулланылган төсләр һәм сурәтләр кушылмасы белән конференциянең тышкы күренешен билгели. Сезгә мөмкин булган көйләүләр киңлеге сервер сыйфатына һәм phpBB юрамасына бәйле, өстәмә мәгълүмат алу өчен документациягә мөрәҗәгать итегез. Зинһар, исәпкә алыгыз, яңа темалар ясаганда булган темаларны нигез итеп куллану мәҗбүри түгел.',
	'ADD_IMAGESET'			=> 'Сурәтләр җыелмасын ясарга',
	'ADD_IMAGESET_EXPLAIN'	=> 'Сез монда яңа сурәтләр җыелмасын ясый аласыз. Сервер сыйфатына һәм файлларга керү рөхсәтенә карап сезгә өстәмә мөмкинлекләр булачак. Мәсәлән, булган сурәтләр җыелмасы нигезендә яңаны ясау. Сезгә шулай ук (store папкасыннан) сурәтләр җыелмасы архивын йөкләү яки импортлау мөмкин. Архивны төягәндә яки импортлаганда сурәтләр җыелмасы исемен архив исеменнән алып була (аның өчен сурәтләр җыелмасы исеме кырын буш калдырыгыз).',
	'ADD_STYLE'				=> 'Стиль ясарга',
	'ADD_STYLE_EXPLAIN'		=> 'Сез монда яңа стиль ясый аласыз. Сервер сыйфатына һәм файлларга рөхсәт хокукына карап сезгә өстәмә мөмкинлекләр ачык була ала. Мәсәлән, булган стиль нигезендә яңаны ясау. Сезгә шулай ук стиль архивын (store папкасыннан) йөкләү яки импортлау мөмкин була ала. Әгәр сез архивны йөкләсәгез яки импортласагыз стиль исеме үзе куелачак.',
	'ADD_TEMPLATE'			=> 'Үрнәк ясарга',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Сез монда яңа үрнәк ясый аласыз. Сервер сыйфатына һәм файлларга керү рөхсәтенә карап сезгә өстәмә мөмкинлекләр булачак. Мәсәлән, булган үрнәк нигезендә яңаны ясау. Сезгә шулай ук (store папкасыннан) үрнәк архивын йөкләү яки импортлау мөмкин. Архивны төягәндә яки импортлаганда үрнәк исемен архив исеменнән алып була (аның өчен үрнәк исеме кырын буш калдырыгыз).',
	'ADD_THEME'				=> 'Тема ясарга',
	'ADD_THEME_EXPLAIN'		=> 'Сез монда яңа тема ясый аласыз. Сервер сыйфатына һәм файлларга керү рөхсәтенә карап сезгә өстәмә мөмкинлекләр булачак. Мәсәлән, булган тема нигезендә яңаны ясау. Сезгә шулай ук (store папкасыннан) тема архивын йөкләү яки импортлау мөмкин. Архивны төягәндә яки импортлаганда тема исемен архив исеменнән алып була (аның өчен тема исеме кырын буш калдырыгыз).',
	'ARCHIVE_FORMAT'		=> 'Архив төре',
	'AUTOMATIC_EXPLAIN'		=> 'Үзе билгеләү өчен кырны буш калдырыгыз.',

	'BACKGROUND'			=> 'Җирлек',
	'BACKGROUND_COLOUR'		=> 'Җирлек төсе',
	'BACKGROUND_IMAGE'		=> 'Җирлек сурәте:',
	'BACKGROUND_REPEAT'		=> 'Күренешне кабатлау',
	'BOLD'					=> 'Ярым майлы',

	'CACHE'							=> 'Кэш:',
	'CACHE_CACHED'					=> 'Кэшлау көне',
	'CACHE_FILENAME'				=> 'Үрнәк файлы',
	'CACHE_FILESIZE'				=> 'Файл күләме',
	'CACHE_MODIFIED'				=> 'Үзгәртү көне',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Сез барлык сурәтләр җыелмасы мәгълүматын яңартырга телисезме? Сурәтләр җыелмасы мөхәррире белән башкарылган барлык үзгәртүләр сурәтләр җыелмасы сыйфаты файлы көйләүләре белән алмаштырылачак.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Үрнәк файлларының барлык кешланган юрамаларын бетерергәме?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Сез мәгълүмат нигезендәге барлык үрнәк мәгълүматын сервердагы үрнәк файллары белән алмаштырырга телисезме? Үрнәк мөхәррире ярдәмендә башкарылган һәм мәгълүмат нигезендә сакланылган барлык үзгәртүләр югалачак.',
	'CONFIRM_THEME_REFRESH'			=> 'Сез мәгълүмат нигезендәге барлык темалар мәгълүматын сервердагы тема файллары белән алмаштырырга телисезме? Темалар мөхәррире ярдәмендә башкарылган һәм мәгълүмат нигезендә сакланылган барлык үзгәртүләр югалачак.',
	'COPYRIGHT'						=> 'Хокук',
	'CREATE_IMAGESET'				=> 'Сурәтләр җыелмасын ясарга',
	'CREATE_STYLE'					=> 'Стиль ясарга',
	'CREATE_TEMPLATE'				=> 'Үрнәк ясарга',
	'CREATE_THEME'					=> 'Тема ясарга',
	'CURRENT_IMAGE'					=> 'Хәзерге сурәт',

	'DEACTIVATE_DEFAULT'		=> 'Сез килешү буенча стильне эшлексез итә алмыйсыз.',
	'DELETE_FROM_FS'			=> 'Сервердан бетерергә',
	'DELETE_IMAGESET'			=> 'Сурәтләр җыелмасын бетерергә',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Сез монда сайлаган сурәтләр җыелмасын мәгълүмат нигезеннән бетерә аласыз. Онытмагыз, бетерүне кире кагып булмый. Сурәтләр җыелмасын бетерү кайтармаслык итеп башкарыла. Киләчәктә куллану мөмкинлеге булу өчен сурәтләр җыелмасын башта экспортларга тәкъдим ителә.',
	'DELETE_STYLE'				=> 'Стильне бетерергә',
	'DELETE_STYLE_EXPLAIN'		=> 'Сез монда сайланган стильне бетерә аласыз. Сак булыгыз, бетерүне кире кагып булмый.',
	'DELETE_TEMPLATE'			=> 'Үрнәкне бетерергә',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Сез монда сайлаган үрнәкне мәгълүмат нигезеннән бетерә аласыз. Онытмагыз, бетерүне кире кагып булмый. Киләчәктә куллану мөмкинлеге булу өчен үрнәкне башта экспортларга тәкъдим ителә.',
	'DELETE_THEME'				=> 'Теманы бетерергә',
	'DELETE_THEME_EXPLAIN'		=> 'Сез монда сайлаган теманы мәгълүмат нигезеннән бетерә аласыз. Онытмагыз, бетерүне кире кагып булмый. Киләчәктә куллану мөмкинлеге булу өчен теманы башта экспортларга тәкъдим ителә.',
	'DETAILS'					=> 'Мәгълүмат',
	'DIMENSIONS_EXPLAIN'		=> 'Киңлек/биеклек шартларын исәпләү өчен «Әйе» сайлагыз.',

	'EDIT_DETAILS_IMAGESET'				=> 'Сурәтләр җыелмасы мәгълүматын үзгәртергә',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Сез монда сурәтләр җыелмасы турындагы кайбер белешмәне төзәтә аласыз, мәсәлән аның атамасын.',
	'EDIT_DETAILS_STYLE'				=> 'Стильне үзгәртергә',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Түбәндәге формада сез булган стильне үзгәртә аласыз. Сез стиль төзүче үрнәкләр, темалар һәм рәсемнәр җыелмасын катнаштыра аласыз. Сез шулай ук килешү буенча стильне билгели аласыз.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Үрнәк мәгълүматын үзгәртергә',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Сез монда үрнәк турындагы кайбер белешмәләрне, мәсәлән атамасын төзәтә аласыз. Сез шулай ук стиль шартларын саклау урынын сервердан мәгълүмат нигезенә һәм кирегә үзгәртә аласыз. Бу мөмкинлек PHP сыйфатына һәм веб-сервер белән үрнәк файлларын яздырырга рөхсәт булуга бәйле.',
	'EDIT_DETAILS_THEME'				=> 'Тема мәгълүматын үзгәртергә',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Сез монда тема турындагы кайбер белешмәләрне, мәсәлән атамасын төзәтә аласыз. Сез шулай ук стиль шартларын саклау урынын сервердан мәгълүмат нигезенә һәм кирегә үзгәртә аласыз. Бу мөмкинлек PHP сыйфатына һәм веб-сервер белән стиль шартларын яздырырга рөхсәт булуга бәйле.',
	'EDIT_IMAGESET'						=> 'Сурәтләр җыелмасын үзгәртергә',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Сез монда җыелмага кергән аерым сурәтләрне үзгәртә аласыз. Күләмнәрен исәпләү мәҗбүри түгел, ләкин кайбер браузердагы чагылдыру проблемаларын бетерә ала. Әгәр сурәтләр күләме исәпләнмәсә, бу бераз мәгълүмат нигезе күләмен киметәчәк.',
	'EDIT_TEMPLATE'						=> 'Үрнәкне үзгәртергә',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Сез монда үрнәкне турыдан төзәтә аласыз. Зинһар, онытмагыз, кертелгән үзгәртүләр соңгы һәм кире кагыла алмый. Әгәр PHP да стиль папкасындагы үрнәк файлларына яздыру мөмкинлеге булса, һәр үзгәртү турыдан-туры шул файлларга яздырылачак. Шулай булмаганда, алар мәгълүмат нигезенә күчереләчәк һәм анда гына сакланачак. Зинһар, үрнәкне төзәткәндә сак булыгыз, һәр үрнәк үзгәрмәсен һәм шартлы операторларны капларга {XXXX} онытмагыз.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Үрнәк файлын яздырып булмый, шуңа күрә үзгәртелгән үрнәк файлы мәгълүмат нигезендә сакланды.',
	'EDIT_THEME'						=> 'Теманы үзгәртергә',
	'EDIT_THEME_EXPLAIN'				=> 'Сез монда сайлаган теманы төзәтә, төсләрне һәм сурәтләрне һәм б. к. үзгәртә аласыз.',
	'EDIT_THEME_STORED_DB'				=> 'Стиль шартлары файлын яздырып булмый, шуңа күрә алар мәгълүмат нигезендә кертелгән үзгәртүләр белән сакланды.',
	'EDIT_THEME_STORE_PARSED'			=> 'Әлеге тема җәдвәлләр стилен эшкәртүен таләп итә. Бу мәгълүмат нигезендә саклаганда гына мөмкин.',
	'EDITOR_DISABLED'					=> 'Үрнәкләр мөхәррире сүндерелгән.',
	'EXPORT'							=> 'Экспортлау',

	'FOREGROUND'			=> 'Алгы күренеш',
	'FONT_COLOUR'			=> 'Хәреф төсе',
	'FONT_FACE'				=> 'Хәреф төре',
	'FONT_FACE_EXPLAIN'		=> 'Сез берничә хәреф өтер аша бүлеп билгели аласыз. Әгәр кулланучыда билгеләнгән хәрефләр булмаса, исемлектә беренче урнаштырылганы сайланачак.',
	'FONT_SIZE'				=> 'Хәреф зурлыгы',

	'GLOBAL_IMAGES'			=> 'Гомуми',

	'HIDE_CSS'				=> 'CSS кодын яшерергә',

	'IMAGE_WIDTH'				=> 'Сурәт киңлеге',
	'IMAGE_HEIGHT'				=> 'Сурәт биеклеге',
	'IMAGE'						=> 'Сурәт...',
	'IMAGE_NAME'				=> 'Сурәт исеме',
	'IMAGE_PARAMETER'			=> 'Шарт',
	'IMAGE_VALUE'				=> 'Мәгънә',
	'IMAGESET_ADDED'			=> 'Яңа сурәтләр җыелмасы серверга өстәлде.',
	'IMAGESET_ADDED_DB'			=> 'Яңа сурәтләр җыелмасы мәгълүмат нигезенә өстәлде.',
	'IMAGESET_DELETED'			=> 'Сурәтләр җыелмасы бетерелде.',
	'IMAGESET_DELETED_FS'		=> 'Сурәтләр җыелмасы мәгълүмат нигезеннән бетерелде, ләкин кайбер файллар серверда кала ала.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Сурәтләр турында мәгълүмат яңартылды.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Зинһар, архивлау ысулын сайлагыз.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Копирайт озынлыгы 60 билгедән артык була алмый.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Сурәтләр җыелмасы атамасында хәрефле-санлы, -, +, _ һәм бушлык билгеләре генә була ала.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Андый сурәтләр җыелмасы бар инде.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Сурәтләр атамасы 30 билгедән артык була алмый.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Күрсәтелгән архивта кирәк булган сурәтләр җыелмасы юк.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Бу сурәтләр җыелмасына исем бирегез.',
	'IMAGESET_EXPORT'			=> 'Сурәтләр җыелмасын экспортлау',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Сез монда сурәтләр җыелмасын архив итеп экспортлый аласыз. Бу архивта сурәтләр җыелмасын башка конференциягә урнаштыру өчен кирәк булган барлык мәгълүмат булачак. Файлны турыдан йөкләүне яки соңрак FTP аша йөкләү өчен store папкасына саклауны сайлый аласыз.',
	'IMAGESET_EXPORTED'			=> 'Сурәтләр җыелмасы экспортланды һәм %s сакланды.',
	'IMAGESET_NAME'				=> 'Сурәтләр җыелмасы исеме',
	'IMAGESET_REFRESHED'		=> 'Сурәтләр җыелмасы яңартылды.',
	'IMAGESET_UPDATED'			=> 'Сурәтләр җыелмасы яңартылды.',
	'ITALIC'					=> 'Авышма',

	'IMG_CAT_BUTTONS'		=> 'Башка телләрдә төймәләр',
	'IMG_CAT_CUSTOM'		=> 'Кулланучы сурәтләре',
	'IMG_CAT_FOLDERS'		=> 'Темалар билгечеге',
	'IMG_CAT_FORUMS'		=> 'Форумнар билгечекләре',
	'IMG_CAT_ICONS'			=> 'Гомуми билгечекләр',
	'IMG_CAT_LOGOS'			=> 'Логотиплар',
	'IMG_CAT_POLLS'			=> 'Сораулар сурәте',
	'IMG_CAT_UI'			=> 'Кулланучы интерфейсының гомуми кисәкләре',
	'IMG_CAT_USER'			=> 'Өстәмә сурәтләр',

	'IMG_SITE_LOGO'			=> 'Төп логотип',
	'IMG_UPLOAD_BAR'		=> 'Йөкләү халәте',
	'IMG_POLL_LEFT'			=> 'Сорау сулда',
	'IMG_POLL_CENTER'		=> 'Сорау уртада',
	'IMG_POLL_RIGHT'		=> 'Сорау уңда',
	'IMG_ICON_FRIEND'		=> 'Дуслар исемлегенә өстәргә',
	'IMG_ICON_FOE'			=> 'Дошманнар исемлегенә өстәргә',

	'IMG_FORUM_LINK'			=> 'Форумга сылтама',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Форум ябык',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Асфорум',
	'IMG_FORUM_UNREAD'			=> 'Укылмаган хәбәрләр белән форум',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Укылмаган хәбәрләр белән ябык форум',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Укылмаган хәбәрләр белән асфорум',
	'IMG_SUBFORUM_READ'			=> 'Асфорум хикәясе',
	'IMG_SUBFORUM_UNREAD'		=> 'Укылмаган хәбәрләр белән асфорум хикәясе',

	'IMG_TOPIC_MOVED'			=> 'Күчерелгән тема',

	'IMG_TOPIC_READ'				=> 'Тыш',
	'IMG_TOPIC_READ_MINE'			=> 'Минем хәбәрләр белән темалар',
	'IMG_TOPIC_READ_HOT'			=> 'Популяр тема',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Минем хәбәрләрем белән популяр тема',
	'IMG_TOPIC_READ_LOCKED'			=> 'Ябык тема',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Минем хәбәрләр белән ябык тема',

	'IMG_TOPIC_UNREAD'				=> 'Укылмаган хәбәрләр белән тема',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Укылмаган хәбәрләр белән тема, анда минем хәбәрләрем бар',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Укылмаган хәбәрләр белән популяр тема',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Популяр тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Укылмаган хәбәрләр белән ябык тема',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Ябык тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',

	'IMG_STICKY_READ'				=> 'Беркетелгән тема',
	'IMG_STICKY_READ_MINE'			=> 'Минем хәбәрләр белән беркетелгән тема',
	'IMG_STICKY_READ_LOCKED'		=> 'Ябык беркетелгән тема',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Минем хәбәрләр белән ябык беркетелгән тема',
	'IMG_STICKY_UNREAD'				=> 'Укылмаган хәбәрләр белән беркетелгән тема',
	'IMG_STICKY_UNREAD_MINE'		=> 'Беркетелгән тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Укылмаган хәбәрләр белән ябык беркетелгән тема',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Ябык беркетелгән тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',

	'IMG_ANNOUNCE_READ'					=> 'Белдерү',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Минем хәбәрләр белән белдерүләр',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Ябык белдерү',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Минем хәбәрләр белән ябык белдерү',
	'IMG_ANNOUNCE_UNREAD'				=> 'Укылмаган хәбәрләр белән белдерү',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Укылмаган хәбәрләр белән белдерү, анда минем хәбәрләр бар',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Укылмаган хәбәрләр белән ябык белдерү',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Ябык белдерү укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',

	'IMG_GLOBAL_READ'					=> 'Мөһим тема',
	'IMG_GLOBAL_READ_MINE'				=> 'Минем хәбәрләрем белән мөһим тема',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Ябык мөһим тема',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Минем хәбәрләр белән ябык мөһим тема',
	'IMG_GLOBAL_UNREAD'					=> 'Укылмаган хәбәрләр белән мөһим тема',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Мөһим тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Укылмаган хәбәрләр белән ябык мөһим тема',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Ябык мөһим тема укылмаган хәбәрләр белән, анда минем хәбәрләрем бар',

	'IMG_PM_READ'		=> 'Укылган шәхси хәбәр',
	'IMG_PM_UNREAD'		=> 'Укылмаган шәхси хәбәр',

	'IMG_ICON_BACK_TOP'		=> 'Өскә',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Электрон хәбәр җибәрергә',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Шәхси хәбәр җибәрергә',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Кулланучы сәхифәсе',

	'IMG_ICON_POST_DELETE'			=> 'Хәбәрне бетерергә',
	'IMG_ICON_POST_EDIT'			=> 'Хәбәрне төзәтергә',
	'IMG_ICON_POST_INFO'			=> 'Хәбәр мәгълүматы',
	'IMG_ICON_POST_QUOTE'			=> 'Хәбәргә өземтә ясарга',
	'IMG_ICON_POST_REPORT'			=> 'Хәбәргә шикаять бирергә',
	'IMG_ICON_POST_TARGET'			=> 'Хәбәр билгечеге',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Яңа хәбәрнең билгечеге',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Өстәү',
	'IMG_ICON_TOPIC_LATEST'			=> 'Соңгы хәбәр',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Соңгы укылмаган хәбәр',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Шикаять бирелгән хәбәр',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Кире кагылган хәбәр',

	'IMG_ICON_USER_ONLINE'		=> 'Кулланучы челтәрдә',
	'IMG_ICON_USER_OFFLINE'		=> 'Челтәрдә булмаган кулланучылар',
	'IMG_ICON_USER_PROFILE'		=> 'Кулланучы рәвешен күрсәтергә',
	'IMG_ICON_USER_SEARCH'		=> 'Хәбәрләрне эзләү',
	'IMG_ICON_USER_WARN'		=> 'Кулланучыга кисәтү чыгарырга',

	'IMG_BUTTON_PM_FORWARD'		=> 'Шәхси хәбәрне кабат җибәрергә',
	'IMG_BUTTON_PM_NEW'			=> 'Яңа шәхси хәбәр',
	'IMG_BUTTON_PM_REPLY'		=> 'Шәхси хәбәргә җавап бирү',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Тема ябык',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Яңа тема',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Темага җавап бирү',

	'IMG_USER_ICON1'		=> 'Кулланучы сурәте 1',
	'IMG_USER_ICON2'		=> 'Кулланучы сурәте 2',
	'IMG_USER_ICON3'		=> 'Кулланучы сурәте 3',
	'IMG_USER_ICON4'		=> 'Кулланучы сурәте 4',
	'IMG_USER_ICON5'		=> 'Кулланучы сурәте 5',
	'IMG_USER_ICON6'		=> 'Кулланучы сурәте 6',
	'IMG_USER_ICON7'		=> 'Кулланучы сурәте 7',
	'IMG_USER_ICON8'		=> 'Кулланучы сурәте 8',
	'IMG_USER_ICON9'		=> 'Кулланучы сурәте 9',
	'IMG_USER_ICON10'		=> 'Кулланучы сурәте 10',

	'INACTIVE_STYLES'			=> 'Эшлексез стильләр',

	'INCLUDE_DIMENSIONS'		=> 'Зурлыгын исәпләргә',
	'INCLUDE_IMAGESET'			=> 'Рәсемнәр җыелмасын кабызырга',
	'INCLUDE_TEMPLATE'			=> 'Үрнәкне кабызырга',
	'INCLUDE_THEME'				=> 'Теманы кабызырга',
	'INHERITING_FROM'			=> 'Нәсел ителә',
	'INSTALL_IMAGESET'			=> 'Рәсемнәр җыелмасын урнаштырырга',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Сез монда сайланган рәсемнәр җыелмасын урнаштыра аласыз. Теләсәгез, кайбер көйләүләрне үзгәртә яки килешү буенча урнаштыруны куллана аласыз.',
	'INSTALL_STYLE'				=> 'Стильне урнаштырырга',
	'INSTALL_STYLE_EXPLAIN'		=> 'Сез монда яңа стиль һәм аңа туры килгән кисәкләрне урнаштыра аласыз. Әгәр туры килгән стиль кисәкләре урнаштырылган булса, алар киредән яздырылмаячак. Кайбер стильләр булган стильнең кисәкләре урнаштырылган булуын таләп итә. Андый стильне урнаштырганда, таләп ителгән кисәкләр булмаганы турында сезгә хәбәр ителәчәк.',
	'INSTALL_TEMPLATE'			=> 'Үрнәкне урнаштырырга',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Сез монда яңа үрнәк урнаштыра аласыз. Сервер сыйфатына карап сезнең төрле мөмкинлекләр була ала.',
	'INSTALL_THEME'				=> 'Теманы урнаштырырга',
	'INSTALL_THEME_EXPLAIN'		=> 'Сез монда сайлаган теманы урнаштыра аласыз. Кайбер көйләүләрне төзәтә яки килешү буенча куелышны куллана аласыз.',
	'INSTALLED_IMAGESET'		=> 'Урнаштырылган сурәтләр җыелмасы',
	'INSTALLED_STYLE'			=> 'Урнаштырылган стильләр',
	'INSTALLED_TEMPLATE'		=> 'Урнаштырылган үрнәкләр',
	'INSTALLED_THEME'			=> 'Урнаштырылган темалар',

	'KEEP_IMAGESET'				=> '«%s» рәсемнәр җыелмасын бетермәскә',
	'KEEP_TEMPLATE'				=> '«%s» үрнәген бетермәскә',
	'KEEP_THEME'				=> '«%s» темасын бетерергә',
	
	'LINE_SPACING'				=> 'Сызыклар арасындагы аралык',
	'LOCALISED_IMAGES'			=> 'Сурәт башка телләрдә',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Бу көйләү нәсел ителгән һәм үзгәртелә алмый.',

	'NO_CLASS'					=> 'Төрне стильләр җәдвәлендә табып булмады.',
	'NO_IMAGESET'				=> 'Серверда рәсемнәр җыелмасын табып булмады.',
	'NO_IMAGE'					=> 'Рәсемсез',
	'NO_IMAGE_ERROR'			=> 'Серверда рәсемне табып булмады.',
	'NO_STYLE'					=> 'Серверда стильне табып булмады.',
	'NO_TEMPLATE'				=> 'Серверда үрнәкне табып булмады.',
	'NO_THEME'					=> 'Серверда теманы табып булмады.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Барлык сурәтләр җыелмасы урнаштырылды',
	'NO_UNINSTALLED_STYLE'		=> 'Бөтен стильләр урнаштырылган',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Барлык үрнәкләр урнаштырылды',
	'NO_UNINSTALLED_THEME'		=> 'Барлык темалар урнаштырылган',
	'NO_UNIT'					=> 'Юк',

	'ONLY_IMAGESET'			=> 'Сез соңгы калган сурәтләр җыелмасын бетерә алмыйсыз.',
	'ONLY_STYLE'			=> 'Сез соңгы калган стильне бетерә алмыйсыз.',
	'ONLY_TEMPLATE'			=> 'Сез соңгы калган үрнәкне бетерә алмыйсыз.',
	'ONLY_THEME'			=> 'Соңгы калган теманы бетерә алмыйсыз.',
	'OPTIONAL_BASIS'		=> 'Өстәмә нигез',

	'REFRESH'					=> 'Яңартырга',
	'REPEAT_NO'					=> 'Кабатламаска',
	'REPEAT_X'					=> 'Горизонталь буенча гына',
	'REPEAT_Y'					=> 'Вертикаль буенча гына',
	'REPEAT_ALL'				=> 'Ике юнәлештә дә',
	'REPLACE_IMAGESET'			=> 'Сурәтләр җыелмасын моңа алмаштырырга',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Бу сурәтләр җыелмасы кулланылган урыннан барлык бетереләчәген алмаштыра.',
	'REPLACE_STYLE'				=> 'Стильне моңа алмаштырырга',
	'REPLACE_STYLE_EXPLAIN'		=> 'Бу стиль кулланучылар кулланган бетереләчәген алмаштыра.',
	'REPLACE_TEMPLATE'			=> 'Үрнәкне моңа алмаштырырга',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Бу үрнәк ул кулланылган барлык стильләрдә бетереләчәген алмаштыра.',
	'REPLACE_THEME'				=> 'Теманы алмаштырырга',
	'REPLACE_THEME_EXPLAIN'		=> 'Бу тема ул кулланылган барлык стильләрдә бетереләчәген алмаштыра.',
	'REPLACE_WITH_OPTION'		=> 'Моңа алмаштырырга «%s»',
	'REQUIRES_IMAGESET'			=> 'Бу стильгә урнаштырылган %s сурәтләр җыелмасы кирәк.',
	'REQUIRES_TEMPLATE'			=> 'Бу стильгә урнаштырылган %s үрнәге кирәк.',
	'REQUIRES_THEME'			=> 'Бу стильгә урнаштырылган %s темасы кирәк.',

	'SELECT_IMAGE'				=> 'Сурәтне сайларга',
	'SELECT_TEMPLATE'			=> 'Үрнәк файлын сайларга',
	'SELECT_THEME'				=> 'Тема файлын сайлагыз',
	'SELECTED_IMAGE'			=> 'Сайланган сурәт',
	'SELECTED_IMAGESET'			=> 'Сайланган рәсемнәр җыелмасы',
	'SELECTED_TEMPLATE'			=> 'Сайланган үрнәк',
	'SELECTED_TEMPLATE_FILE'	=> 'Сайланган үрнәк файлы',
	'SELECTED_THEME'			=> 'Сайланган тема',
	'SELECTED_THEME_FILE'		=> 'Тема файлы сайланды',
	'STORE_DATABASE'			=> 'Мәгълүмат нигезе',
	'STORE_FILESYSTEM'			=> 'Сервер',
	'STYLE_ACTIVATE'			=> 'Эшләтү',
	'STYLE_ACTIVE'				=> 'Эшләтелгән',
	'STYLE_ADDED'				=> 'Стиль өстәлде.',
	'STYLE_DEACTIVATE'			=> 'Эшен туктатырга',
	'STYLE_DEFAULT'				=> 'Килешү буенча кулланылган итәргә',
	'STYLE_DELETED'				=> 'Стиль бетерелде.',
	'STYLE_DETAILS_UPDATED'		=> 'Стиль үзгәртелде.',
	'STYLE_ERR_ARCHIVE'			=> 'Архивлау ысулын сайлагыз.',
	'STYLE_ERR_COPY_LONG'		=> 'Авторлык хокукы озынлыгы 60 билгедән арта алмый.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Стильнең берәр кисәген сайларга кирәк.',
	'STYLE_ERR_NAME_CHARS'		=> 'Стиль исемендә хәрефле-санлы, -, +, _ һәм бушлык билгеләре генә була ала.',
	'STYLE_ERR_NAME_EXIST'		=> 'Андый исемле стиль бар инде.',
	'STYLE_ERR_NAME_LONG'		=> 'Стиль исеме 30 билгедән артмаска тиеш.',
	'STYLE_ERR_NO_IDS'			=> 'Бу стиль өчен үрнәк, тема һәм рәсемнәр җыелмасын сайларга кирәк.',
	'STYLE_ERR_NOT_STYLE'		=> 'Импортланган яки йөкләнгән файлда стиль архивы юк.',
	'STYLE_ERR_STYLE_NAME'		=> 'Бу стиль өчен исем бирегез.',
	'STYLE_EXPORT'				=> 'Стильне экспортлау',
	'STYLE_EXPORT_EXPLAIN'		=> 'Сез монда стильне архив итеп экспортлый аласыз. Стильдә бөтен кисәк булмаска мөмкин, ләкин берәрсе булырга тиеш. Мәсәлән, әгәр сез гомуми кулланылган үрнәк өчен яңа тема һәм сурәтләр җыелмасын ясасагыз, сез тема һәм сурәтләр җыелмасын үрнәксез экспортлый аласыз. Сез файлны турыдан йөкләүне яки аны store папкасына саклап, соңрак FTP аша йөкләүне сайлый аласыз.',
	'STYLE_EXPORTED'			=> 'Стиль экспортланды һәм %s папкасында сакланды.',
	'STYLE_IMAGESET'			=> 'Сурәтләр җыелмасы',
	'STYLE_NAME'				=> 'Стиль исеме',
	'STYLE_TEMPLATE'			=> 'Үрнәк',
	'STYLE_THEME'				=> 'Тыш',
	'STYLE_USED_BY'				=> 'Куллана (ботлар белән)',

	'TEMPLATE_ADDED'			=> 'Үрнәк өстәлде һәм серверга сакланды.',
	'TEMPLATE_ADDED_DB'			=> 'Үрнәк өстәлде һәм мәгълүмат нигезендә сакланды.',
	'TEMPLATE_CACHE'			=> 'Үрнәкләр кэшы',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Килешү буенча phpBB компиляцияләнгән үрнәкләр юрамасын кэшлый. Бу һәр битне караган саен серверга төялешне киметә һәм шулай итеп аларның ясалуын вакытын киметә ала. Сез монда һәр файл өчен кэш халәтен карый һәм аерым файлларны яки бөтен кэшны бетерә аласыз.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Үрнәк кэшы чистартылды.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Кэшланган үрнәкләр юк.',
	'TEMPLATE_DELETED'			=> 'Үрнәк бетерелде.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Үрнәкне бетереп булмый, чөнки бер яки берничә башка үрнәк әлеге үрнәкнең үзлекләрен куллана:',
	'TEMPLATE_DELETED_FS'		=> 'Үрнәк мәгълүмат нигезеннән бетерелде, ләкин кайбер файллар серверда кала ала.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Үрнәк мәгълүматы яңартылды.',
	'TEMPLATE_EDITOR'			=> 'HTML-код үрнәкләре мөхәррире',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Үрнәк мөхәррире биеклеге',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Зинһар, архивлау ысулын сайлагыз.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Үрнәк файлларының кешланган юрамаларын саклау өчен кулланган кэш папкасын ачып булмады.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Копирайт озынлыгы 60 билгедән артык була алмый.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Үрнәк исемдә хәрефле-санлы, -, +, _ һәм бушлык билгеләре генә була ала.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Андый үрнәк бар инде.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Үрнәк исеме 30 билгедән артмаска тиеш.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Күрсәтелгән архивта үрнәк юк.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'Яңа үрнәккә %s үрнәге урнаштырылган булуы кирәк һәм үз үзе нәселе булырга тиеш түгел. ',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Бу үрнәккә исем бирегез.',
	'TEMPLATE_EXPORT'			=> 'Үрнәкләрне экспортлау',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Сез монда үрнәкне архив итеп экспортлый аласыз. Бу архивта үрнәкне башка конференциягә урнаштыру өчен кирәк булган барлык мәгълүмат булачак. Файлны турыдан йөкләүне яки соңрак FTP аша йөкләү өчен store папкасына саклауны сайлый аласыз.',
	'TEMPLATE_EXPORTED'			=> 'Үрнәк экспортланды һәм %s сакланды.',
	'TEMPLATE_FILE'				=> 'Үрнәк файлы',
	'TEMPLATE_FILE_UPDATED'		=> 'Үрнәк файлы яңартылды.',
	'TEMPLATE_INHERITS'			=> 'Әлеге үрнәк %s нәсел итә һәм шулай итеп аның аннан аерылган саклау урыны була алмый.',
	'TEMPLATE_LOCATION'			=> 'Үрнәкне сакларга',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Сурәтләр гел серверда саклана.',
	'TEMPLATE_NAME'				=> 'Үрнәк исеме',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Үрнәк %s файлын яздырып булмады. Папкалар һәм файлларга хокукларны тикшерегез.',
	'TEMPLATE_REFRESHED'		=> 'Үрнәк яңартылды.',

	'THEME_ADDED'				=> 'Яңа тема серверга өстәлде.',
	'THEME_ADDED_DB'			=> 'Яңа тема мәгълүмат нигезенә өстәлде.',
	'THEME_CLASS_ADDED'			=> 'Кулланучы төре өстәлде.',
	'THEME_DELETED'				=> 'Тема бетерелде.',
	'THEME_DELETED_FS'			=> 'Тема мәгълүмат нигезеннән бетерелде, ләкин файллар серверда кала.',
	'THEME_DETAILS_UPDATED'		=> 'Тема мәгълүматы яңартылды.',
	'THEME_EDITOR'				=> 'CSS теманың код мөхәррире',
	'THEME_EDITOR_HEIGHT'		=> 'Тема мөхәррире биеклеге',
	'THEME_ERR_ARCHIVE'			=> 'Зинһар, архивлау ысулын сайлагыз.',
	'THEME_ERR_CLASS_CHARS'		=> 'Тик хәрефле-санлы билгеләр генә, шулай ук ., :, -, _ һәм # төр исемнәрендә рөхсәт ителгән.',
	'THEME_ERR_COPY_LONG'		=> 'Копирайт озынлыгы 60 билгедән артык була алмый.',
	'THEME_ERR_NAME_CHARS'		=> 'Тема исемендә хәрефле-санлы, -, +, _ һәм бушлык билгеләре генә була ала.',
	'THEME_ERR_NAME_EXIST'		=> 'Андый тема бар инде.',
	'THEME_ERR_NAME_LONG'		=> 'Тема исеме 30 билгедән артмаска тиеш.',
	'THEME_ERR_NOT_THEME'		=> 'Күрсәтелгән архивта тема юк.',
	'THEME_ERR_REFRESH_FS'		=> 'Бу тема серверда саклана һәм яңарту таләп итми.',
	'THEME_ERR_STYLE_NAME'		=> 'Бу темага исем бирегез.',
	'THEME_FILE'				=> 'Тема файлы',
	'THEME_EXPORT'				=> 'Теманы экспортлау',
	'THEME_EXPORT_EXPLAIN'		=> 'Сез монда теманы архив итеп экспортлый аласыз. Бу архивта теманы башка конференциягә урнаштыру өчен кирәк булган барлык мәгълүмат булачак. Файлны турыдан йөкләүне яки соңрак FTP аша йөкләү өчен store папкасына саклауны сайлый аласыз.',
	'THEME_EXPORTED'			=> 'Тема экспортланды һәм %s сакланды.',
	'THEME_LOCATION'			=> 'Стиль шартын  монда сакларга',
	'THEME_LOCATION_EXPLAIN'	=> 'Сурәтләр гел серверда саклана.',
	'THEME_NAME'				=> 'Тема исеме',
	'THEME_REFRESHED'			=> 'Тема яңартылды.',
	'THEME_UPDATED'				=> 'Төр яңартылды.',

	'UNDERLINE'				=> 'Асты сызылган',
	'UNINSTALLED_IMAGESET'	=> 'Урнаштыруга мөмкин булган сурәтләр җыелмасы',
	'UNINSTALLED_STYLE'		=> 'Урнаштыруга мөмкин булган стильләр',
	'UNINSTALLED_TEMPLATE'	=> 'Урнаштыруга мөмкин булган үрнәкләр',
	'UNINSTALLED_THEME'		=> 'Урнаштырырга мөмкин булган темалар',
	'UNSET'					=> 'Урнаштырылмаган',
	
));

?>