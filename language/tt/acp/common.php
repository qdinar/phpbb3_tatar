<?php
/**
*
* acp_common [Tatar]
*
* @package language
* @version $Id: common.php 10134 2009-09-10 15:32:16Z marshalrusty $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администраторлар',
	'ACP_ADMIN_LOGS'			=> 'Администраторлар логы',
	'ACP_ADMIN_ROLES'			=> 'Администратор вазифасы',
	'ACP_ATTACHMENTS'			=> 'Өстәүләр',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Өстәүләр көйләүләре',
	'ACP_AUTH_SETTINGS'			=> 'Чынлыкны тикшерү',
	'ACP_AUTOMATION'			=> 'Автоматизация',
	'ACP_AVATAR_SETTINGS'		=> 'Аватарлар',

	'ACP_BACKUP'				=> 'Резерв күчермә',
	'ACP_BAN'					=> 'Рөхсәтне тыю',
	'ACP_BAN_EMAILS'			=> 'email кара исемлеге',
	'ACP_BAN_IPS'				=> 'IP кара исемлеге',
	'ACP_BAN_USERNAMES'			=> 'Кулланучыларның кара исемлеге',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Рәвеш',
	'ACP_BOARD_FEATURES'		=> 'Конференция функцияләре',
	'ACP_BOARD_MANAGEMENT'		=> 'Конференция идарәсе',
	'ACP_BOARD_SETTINGS'		=> 'Конференция көйләүләре',
	'ACP_BOTS'					=> 'Эзләү ботлары',

	'ACP_CAPTCHA'				=> 'Чагылышлы раслау',

	'ACP_CAT_DATABASE'			=> 'Мәгълүмат нигезе',
	'ACP_CAT_DOT_MODS'			=> 'Модульләр',
	'ACP_CAT_FORUMS'			=> 'Форумнар',
	'ACP_CAT_GENERAL'			=> 'Гомуми',
	'ACP_CAT_MAINTENANCE'		=> 'Хезмәт күрсәтү',
	'ACP_CAT_PERMISSIONS'		=> 'Рөхсәт хокуклары',
	'ACP_CAT_POSTING'			=> 'Хәбәрләр',
	'ACP_CAT_STYLES'			=> 'Стильләр',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Кулланучылар һәм төркемнәр',
	'ACP_CAT_USERS'				=> 'Кулланучылар',
	'ACP_CLIENT_COMMUNICATION'	=> 'Элемтә чаралары',
	'ACP_COOKIE_SETTINGS'		=> 'cookies көйләүләре',
	'ACP_CRITICAL_LOGS'			=> 'Хаталар логы',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Рәвештә өстәмә кырлар',

	'ACP_DATABASE'				=> 'Мәгълүмат нигезе',
	'ACP_DISALLOW'				=> 'Тыелган исемнәр',
	'ACP_DISALLOW_USERNAMES'	=> 'Тыелган исемнәр',

	'ACP_EMAIL_SETTINGS'		=> 'Почта көйләүләре',
	'ACP_EXTENSION_GROUPS'		=> 'Киңәйтмәләр төркеме',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Җирле керү хокуклары',
	'ACP_FORUM_LOGS'				=> 'Логлар',
	'ACP_FORUM_MANAGEMENT'			=> 'Форумнар',
	'ACP_FORUM_MODERATORS'			=> 'Форумнар модераторлары',
	'ACP_FORUM_PERMISSIONS'			=> 'Форумнарга рөхсәт',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Керү хокукларына күчермә ясау',
	'ACP_FORUM_ROLES'				=> 'Форум вазифасы',

	'ACP_GENERAL_CONFIGURATION'		=> 'Гомуми көйләүләр',
	'ACP_GENERAL_TASKS'				=> 'Гомуми йомышлар',
	'ACP_GLOBAL_MODERATORS'			=> 'Супермодераторлар',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глобаль керү хокуклары',
	'ACP_GROUPS'					=> 'Төркемнәр',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Төркемнәрнең форум хокуклары',
	'ACP_GROUPS_MANAGE'				=> 'Төркемнәр идарәсе',
	'ACP_GROUPS_MANAGEMENT'			=> 'Төркемнәр',
	'ACP_GROUPS_PERMISSIONS'		=> 'Төркемнәр хокуклары',

	'ACP_ICONS'					=> 'Темалар билгечеге',
	'ACP_ICONS_SMILIES'			=> 'Темалар билгечеге һәм смайликлар',
	'ACP_IMAGESETS'				=> 'Рәсемнәр җыелмасы',
	'ACP_INACTIVE_USERS'		=> 'Эшләтелмәгән кулланучылар',
	'ACP_INDEX'					=> 'Баш бит',

	'ACP_JABBER_SETTINGS'		=> 'Jabber көйләүләре',

	'ACP_LANGUAGE'				=> 'Телләр',
	'ACP_LANGUAGE_PACKS'		=> 'Тел төргәкләре',
	'ACP_LOAD_SETTINGS'			=> 'Серверга төялеш',
	'ACP_LOGGING'				=> 'Логлар',

	'ACP_MAIN'					=> 'Администратор бүлегенең төп бите',
	'ACP_MANAGE_EXTENSIONS'		=> 'Киңәйтүләр',
	'ACP_MANAGE_FORUMS'			=> 'Форумнар идарәсе',
	'ACP_MANAGE_RANKS'			=> 'Дәрәҗәләр идарәсе',
	'ACP_MANAGE_REASONS'		=> 'Шикаятьләр идарәсе',
	'ACP_MANAGE_USERS'			=> 'Кулланучылар идарәсе',
	'ACP_MASS_EMAIL'			=> 'Күпләп почта җибәрү',
	'ACP_MESSAGES'				=> 'Хәбәрләр',
	'ACP_MESSAGE_SETTINGS'		=> 'Шәхси хәбәрләр',
	'ACP_MODULE_MANAGEMENT'		=> 'Модульләр идарәсе',
	'ACP_MOD_LOGS'				=> 'Модераторлар логы',
	'ACP_MOD_ROLES'				=> 'Модератор вазифасы',

	'ACP_NO_ITEMS'				=> 'Күрсәтү өчен әйберләр юк.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Югалган өстәүләр',

	'ACP_PERMISSIONS'			=> 'Рөхсәт хокуклары',
	'ACP_PERMISSION_MASKS'		=> 'Керү хокукы битлекләре',
	'ACP_PERMISSION_ROLES'		=> 'Вазифалар',
	'ACP_PERMISSION_TRACE'		=> 'Керү хокукларын трассировкасы',
	'ACP_PHP_INFO'				=> 'PHP турында белешмә',
	'ACP_POST_SETTINGS'			=> 'Хәбәрләр урнашуы',
	'ACP_PRUNE_FORUMS'			=> 'Форумнарны чистарту',
	'ACP_PRUNE_USERS'			=> 'Кулланучылар исемлеген чистарту',
	'ACP_PRUNING'				=> 'Чистарту',

	'ACP_QUICK_ACCESS'			=> 'Тиз рөхсәт',
	
	'ACP_RANKS'					=> 'Дәрәҗә',
	'ACP_REASONS'				=> 'Шикаятьләр идарәсе',
	'ACP_REGISTER_SETTINGS'		=> 'Кулланучыларны теркәү',

	'ACP_RESTORE'				=> 'Торгызу',

	'ACP_FEED'					=> 'Яңалыклары каналлары',
	'ACP_FEED_SETTINGS'			=> 'Яңалыклары каналлары',

	'ACP_SEARCH'				=> 'Эзләү көйләүләре',
	'ACP_SEARCH_INDEX'			=> 'Эзләү индекслары',
	'ACP_SEARCH_SETTINGS'		=> 'Эзләү',

	'ACP_SECURITY_SETTINGS'		=> 'Иминлек',
	'ACP_SEND_STATISTICS'		=> 'Статистика мәгълүматы',
	'ACP_SERVER_CONFIGURATION'	=> 'Сервер рәвеше',
	'ACP_SERVER_SETTINGS'		=> 'Сервер көйләүләре',
	'ACP_SIGNATURE_SETTINGS'	=> 'Имза',
	'ACP_SMILIES'				=> 'Смайликлар',
	'ACP_STYLE_COMPONENTS'		=> 'Стильләр кисәкләре',
	'ACP_STYLE_MANAGEMENT'		=> 'Стильләр идарәсе',
	'ACP_STYLES'				=> 'Стильләр',

	'ACP_SUBMIT_CHANGES'		=> 'Үзгәртүләрне сакларга',

	'ACP_TEMPLATES'				=> 'Үрнәкләр',
	'ACP_THEMES'				=> 'Темалар',

	'ACP_UPDATE'					=> 'Яңарту',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Кулланучыларның форум хокуклары',
	'ACP_USERS_LOGS'				=> 'Кулланучылар логы',
	'ACP_USERS_PERMISSIONS'			=> 'Кулланучылар хокукы',
	'ACP_USER_ATTACH'				=> 'Өстәүләр',
	'ACP_USER_AVATAR'				=> 'Аватара',
	'ACP_USER_FEEDBACK'				=> 'Кулланучы турында язмалар',
	'ACP_USER_GROUPS'				=> 'Төркемнәр',
	'ACP_USER_MANAGEMENT'			=> 'Кулланучылар',
	'ACP_USER_OVERVIEW'				=> 'Күзәтү',
	'ACP_USER_PERM'					=> 'Рөхсәт хокуклары',
	'ACP_USER_PREFS'				=> 'Шәхси көйләүләр',
	'ACP_USER_PROFILE'				=> 'Рәвеш',
	'ACP_USER_RANK'					=> 'Дәрәҗә',
	'ACP_USER_ROLES'				=> 'Кулланучы вазифасы',
	'ACP_USER_SECURITY'				=> 'Иминлек',
	'ACP_USER_SIG'					=> 'Имза',
	'ACP_USER_WARNINGS'				=> 'Кисәтмәләр',

	'ACP_VC_SETTINGS'					=> 'Спам-ботларга каршы чара',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Чагылыш раславын карау',
	'ACP_VERSION_CHECK'					=> 'Яңартуларны тикшерү',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Администраторлар хокуклары',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Модераторлар хокуклары',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Җирле хокуклар',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Супермодератор хокуклары',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Кулланучылар хокукы',

	'ACP_WORDS'					=> 'Автоцензор',

	'ACTION'				=> 'Гамәл',
	'ACTIONS'				=> 'Гамәлләр',
	'ACTIVATE'				=> 'Кабызырга',
	'ADD'					=> 'Өстәргә',
	'ADMIN'					=> 'Идарә итү',
	'ADMIN_INDEX'			=> 'Баш',
	'ADMIN_PANEL'			=> 'Администратор бүлеге',

	'ADM_LOGOUT'			=> '&nbsp;чыгу&nbsp;ACP',
	'ADM_LOGGED_OUT'		=> 'Администратор бүлегеннән чыктыгыз',

	'BACK'					=> 'Кире',

	'COLOUR_SWATCH'			=> 'Төсләр төрләре',
	'CONFIG_UPDATED'		=> 'Көйләүләр яңартылды.',

	'DEACTIVATE'				=> 'Сүндерергә',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Күрсәтелгән «%s» юл юк.',
	'DIRECTORY_NOT_DIR'			=> 'Күрсәтелгән «%s» юлы папка түгел.',
	'DIRECTORY_NOT_WRITABLE'	=> '«%s» папкага яздыру тыелган.',
	'DISABLE'					=> 'Сүндерергә',
	'DOWNLOAD'					=> 'Йөкләде',
	'DOWNLOAD_AS'				=> 'Ничек йөкләргә',
	'DOWNLOAD_STORE'			=> 'Йөкләргә яки серверга сакларга',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Сез файлны турыдан йөкли яки серверда <samp>store/</samp> папкасында саклый аласыз.',

	'EDIT'					=> 'Үзгәртергә',
	'ENABLE'				=> 'Кабызырга',
	'EXPORT_DOWNLOAD'		=> 'Йөкләде',
	'EXPORT_STORE'			=> 'Cакларга',

	'GENERAL_OPTIONS'		=> 'Гомуми шартлар',
	'GENERAL_SETTINGS'		=> 'Гомуми көйләүләр',
	'GLOBAL_MASK'			=> 'Глобаль керү битлеге',

	'INSTALL'				=> 'Урнаштырырга',
	'IP'					=> 'Кулланучының IP-адресы',
	'IP_HOSTNAME'			=> 'IP-адреслар яки хостлар',

	'LOGGED_IN_AS'			=> 'Сез кердегез:',
	'LOGIN_ADMIN'			=> 'Администратор бүлегенә керү өчен рөхсәт алып керегез.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Администратор бүлегенә керү өчен исемегезне һәм серсүзне кабат кертергә кирәк.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Чынлыкны тикшерү башкарылды. Хәзер сез администратор бүлегенә җибәреләчәксез.',
	'LOOK_UP_FORUM'			=> 'Форумны сайлагыз',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Бер форумнан артык сайларга ярый.',

	'MANAGE'				=> 'Идарә',
	'MENU_TOGGLE'			=> 'Кырыйдагы менюны күрсәтергә яки яшерергә',
	'MORE'					=> 'Тулырак',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Өстәмә белешмә »',
	'MOVE_DOWN'				=> 'Аска',
	'MOVE_UP'				=> 'Өскә',

	'NOTIFY'				=> 'Белдерү',
	'NO_ADMIN'				=> 'Администратор бүлегенә керү хокукыгыз юк.',
	'NO_EMAILS_DEFINED'		=> 'Дөрес электрон почта адреслары табылмады.',
	'NO_PASSWORD_SUPPLIED'	=> 'Администратор бүлегенә рөхсәт алу өчен серсүз кертергә кирәк.',

	'OFF'					=> 'Сүнгән',
	'ON'					=> 'Кабызылган',

	'PARSE_BBCODE'						=> 'BBCode рөхсәт итү',
	'PARSE_SMILIES'						=> 'Смайликларны рөхсәт итү',
	'PARSE_URLS'						=> 'Сылтамаларны рөхсәт итү',
	'PERMISSIONS_TRANSFERRED'			=> 'Керү хокукын тапшыру',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Хәзерге вакытта сез %1$s кулланучысы хокукларын кулланасыз. Сез конференцияне әлеге кулланучы хокуклары белән карый аласыз, ләкин администратор бүлегенә рөхсәт булмый, чөнки администратор хокуклары тапшырылмады. Сез <a href="%2$s"><strong>үз хокукларыгызны</strong></a> теләгән вакытта торгыза аласыз.',
	'PROCEED_TO_ACP'					=> '%sАдминистратор бүлегенә күчәргә%s',

	'REMIND'							=> 'Искәртергә',
	'RESYNC'							=> 'Синхронлаштырырга',
	'RETURN_TO'							=> 'Кайтырга',

	'SELECT_ANONYMOUS'		=> 'Кулланучы хисап язмасын сайларга',
	'SELECT_OPTION'			=> 'Эшне сайлагыз',

	'SETTING_TOO_LOW'		=> 'Кертелгән «%1$s» шарты мәгънәсе артык кечкенә. Минималь рөхсәт ителгән мәгънә — %2$d.',
	'SETTING_TOO_BIG'		=> 'Кертелгән «%1$s» шарты мәгънәсе артык зур. Максималь рөхсәт ителгән мәгънә — %2$d.',
	'SETTING_TOO_LONG'		=> 'Кертелгән «%1$s» шарты мәгънәсе артык озын. Максималь рөхсәт ителгән озынлык — %2$d.',
	'SETTING_TOO_SHORT'		=> 'Кертелгән «%1$s» шарты мәгънәсе артык кыска. Минималь рөхсәт ителгән озынлык — %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Барлык гамәлләрне күрсәтергә',

	'UCP'					=> 'Шәхси бүлек',
	'USERNAMES_EXPLAIN'		=> 'Һәр исемне яңа юлда кертегез.',
	'USER_CONTROL_PANEL'	=> 'Шәхси бүлек',

	'WARNING'				=> 'Игътибар',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Бу биттә әлеге серверга урнаштырылган PHP юрамасы турында белешмә күрсәтелә. Анда йөкләнгән модульләр, мөмкин үзгәрмәләр һәм килешү буенча көйләүләр тулысынча бирелә. Бу мәгълүмат төрле җитешсезлекләрне билгеләгәндә файдалы була ала. Кайбер хостинг-оешмалары бу мәгълүматны иминлек уйлаулары буенча күрсәтүен чикли. Бу биттәге белешмәләрне беркемгә дә сөйләмәгез, <a href="http://www.phpbb.com/about/team/">рәсми ярдәм төркеме әгъзаларыннан</a> башка.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP рәвеше турында мәгълүмат мөмкин түгел. phpinfo() мөмкинлеге иминлек уйлаулары буенча сүндерелде.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Бу конференция администраторы башкарган гамәлләр. Сез исемлекне кулланучы исеме, көн, IP-адрес яки гамәл буенча тәртипли аласыз. Кирәк булган хокуклар булганда сез аерым язмаларны бетерә яки логны тулысынча чистарта аласыз.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Бу конференция башкарган гамәлләр. Бу журналны кайбер сорауларны чишү өчен мәгълүмат итеп кулланып була. Мәсәлән, электрон хәбәрләрне тапшыру. Сез исемлекне кулланучы исеме, көн, IP-адрес яки гамәл буенча тәртипли аласыз. Кирәк булган хокуклар булганда сез аерым язмаларны бетерә яки логны тулысынча чистарта аласыз.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Бу форумнарда, темаларда һәм хәбәрләрдә модераторлар башкарган гамәлләр. Сез исемлекне кулланучы исеме, көн, IP-адрес яки гамәл буенча тәртипли аласыз. Кирәк булган хокуклар булганда сез аерым язмаларны бетерә яки логны тулысынча чистарта аласыз.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Бу кулланучы башкарган яки аңа карата башкарылган гамәлләр исемлеге (шикаятьләр, кисәтүләр һәм кулланучы турында тамгалар).',
	'ALL_ENTRIES'				=> 'Барлык язмалар',

	'DISPLAY_LOG'	=> 'Язмаларны күрсәтергә',

	'NO_ENTRIES'	=> 'Күрсәтелгән чорга язмалар юк.',

	'SORT_IP'		=> 'IP адресы',
	'SORT_DATE'		=> 'Көне',
	'SORT_ACTION'	=> 'Гамәл',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Конференция ясау өчен phpBB сайлаганга рәхмәт белдерәбез. Бу биттә кыскача төрле статистиканы күрсәтү бирелгән. Сул яктагы сылтамалар сезнең конференциянең барлык үзенчәлекләре белән идарә итәргә ярдәм итә. Һәр биттә әлеге корал белән куллану күрсәтмәсе бар.',
	'ADMIN_LOG'					=> 'Администрация гамәлләре',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Түбәндә конференция администраторы башкарган биш соңгы гамәл исемлеге. Журналның тулы күчермәсен менюда туры килгән яки «Администраторлар логы» сылтамасына басып карап була.',
	'AVATAR_DIR_SIZE'			=> 'Аватарлар белән папка күләме',

	'BOARD_STARTED'		=> 'Конференцияне кабызу көне',
	'BOARD_VERSION'		=> 'phpBB юрамасы',

	'DATABASE_SERVER_INFO'	=> 'Мәгълүмат нигезе серверы',
	'DATABASE_SIZE'			=> 'Мәгълүмат нигезе күләме',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Функцияләрнең артык төялүе дөрес көйләнмәгән',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> 'Шарт <var>mbstring.func_overload</var>  0 яки 4 тигез булырга тиеш. Хәзерге мәгънәне сез <samp>PHP турында белешмә</samp> битендә тикшерә аласыз.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Кодлауны үзгәртү дөрес сайланмаган',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Шарт <var>mbstring.encoding_translation</var> 0 тигез булырга тиеш. Хәзерге мәгънәне сез <samp>PHP турында белешмә</samp> битендә тикшерә аласыз.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Керүче HTTP ташкыны кодлавы дөрес көйләнмәгән',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> 'Шарт <var>mbstring.http_input</var> <samp>pass</samp> тигез булырга тиеш. Хәзерге мәгънәне сез <samp>PHP турында белешмә</samp> битендә тикшерә аласыз.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Чыгучы HTTP ташкыны кодлавы дөрес көйләнмәгән',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Шарт <var>mbstring.http_output</var> <samp>pass</samp> тигез булырга тиеш. Хәзерге мәгънәне сез <samp>PHP турында белешмә</samp> битендә тикшерә аласыз.',
	
	'FILES_PER_DAY'		=> 'Көнгә өстәүләр',
	'FORUM_STATS'		=> 'Конференция статистикасы',

	'GZIP_COMPRESSION'	=> 'GZip кысу',

	'NOT_AVAILABLE'		=> 'Мөмкин түгел',
	'NUMBER_FILES'		=> 'Өстәүләр',
	'NUMBER_POSTS'		=> 'Хәбәрләр',
	'NUMBER_TOPICS'		=> 'Темалар',
	'NUMBER_USERS'		=> 'Кулланучылар',
	'NUMBER_ORPHAN'		=> 'Югалган өстәүләр',

 	'PHP_VERSION_OLD'	=> 'Бу сервердагы PHP юрамасы искергән һәм киләчәк phpBB юрамалары белән кулланмаячак. %sТулырак%s',

	'POSTS_PER_DAY'		=> 'Көнгә хәбәр',

	'PURGE_CACHE'			=> 'Кэшны чистартырга',
	'PURGE_CACHE_CONFIRM'	=> 'Кэшны чистартыргамы?',
	'PURGE_CACHE_EXPLAIN'	=> 'Барлык кешланган кисәкләрне чистарту, кешланган үрнәк файлларын һәм сорауларны да.',

	'PURGE_SESSIONS'			=> 'Барлык тоташмаларны чистартырга',
	'PURGE_SESSIONS_CONFIRM'	=> 'Хәзерге тоташмаларны чистартыргамы?',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Тоташмалар җәдвәлен чистарту. Хәзерге вакытта конференциядә булган барлык кулланучыларның тоташмасы тәмамланачак, шуңа күрә бу гамәлне башкаргач, аларга тагын конференциягә кереп исем һәм серсүзне кертәсе була.',

	'RESET_DATE'					=> 'Конференция башлау көнен ташларга',
	'RESET_DATE_CONFIRM'			=> 'Конференция башлау көнен ташларгамы?',
	'RESET_ONLINE'					=> 'Керү рекордын ташларга',
	'RESET_ONLINE_CONFIRM'			=> 'Конференциянең керү рекордын ташларгамы?',
	'RESYNC_POSTCOUNTS'				=> 'Хәбәрләр санаучысын синхронлаштырырга',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Булган хәбәрләр генә исәпләнәчәк. Бетерелгән хәбәрләр исәпләнми.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Хәбәрләр санаучысын синхронлаштырыргамы?',
	'RESYNC_POST_MARKING'			=> 'Үз темаларны синхронлаштырырга',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Үз темаларыгызны синхронлаштырыргамы?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Барлык темалардан тамганы алырга һәм алга таба барлык соңгы алты ай эчендә рөхсәт булган темаларның тамгалавын дөрес итү',
	'RESYNC_STATS'					=> 'Статистиканы синхронлаштыру',
	'RESYNC_STATS_CONFIRM'			=> 'Статистиканы синхронлаштырыргамы?',
	'RESYNC_STATS_EXPLAIN'			=> 'Гомуми хәбәрләр, кулланучылар, торрентлар, аңлатмалар һәм файлларның санын киредән санау.',
	'RUN'							=> 'Башкарырга',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Статистиканы синхронлаштыру яки ташлау',

	'TOPICS_PER_DAY'	=> 'Көнгә тема',

	'UPLOAD_DIR_SIZE'	=> 'Барлык өстәүләр күләме',
	'USERS_PER_DAY'		=> 'Көнгә кулланучы',

	'VALUE'					=> 'Мәгънә',
	'VERSIONCHECK_FAIL'			=> 'Соңгы юрама турында белешмә алып булмады.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Юраманы кабат тикшерергә',
	'VIEW_ADMIN_LOG'		=> 'Администраторлар логы',
	'VIEW_INACTIVE_USERS'	=> 'Эшләтелмәгән кулланучылар',

	'WELCOME_PHPBB'			=> 'phpBB хуш килдегез',
	'WRITABLE_CONFIG'		=> 'Хәзерге вакытта <samp>config.php</samp> файлы яздыру өчен мөмкин. Бу файлга керү рөхсәтен 640 яки бер дә булмаса 644 үзгәртергә (мәсәлән: <a href="http://ru.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Туктату көне',
	'INACTIVE_REASON'				=> 'Сәбәп',
	'INACTIVE_REASON_MANUAL'		=> 'Хисап язма администратор тарафыннан сүндерелде',
	'INACTIVE_REASON_PROFILE'		=> 'Үзгәртелгән рәвеш',
	'INACTIVE_REASON_REGISTER'		=> 'Яңа хисап язма',
	'INACTIVE_REASON_REMIND'		=> 'Мәҗбүри кабат эшләтү',
	'INACTIVE_REASON_UNKNOWN'		=> 'Билгесез',
	'INACTIVE_USERS'				=> 'Эшләтелмәгән кулланучылар',
	'INACTIVE_USERS_EXPLAIN'		=> 'Түбәндә хисап язмалары сүнгән теркәлгән кулланучылар исемлеге. Сез эшләтелмәгән кулланучыларны эшләтә, бетерә яки аларга эшләтү турында искәртмә белән электрон хәбәр җибәрә аласыз.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Түбәндә соңгы ун теркәлгән хисап язмалары сүндерелгән кулланучылар исемлеге. Хисап язмалары конференция көйләүләре белән эшләтү каралган өчен һәм әле эшләтелмәде, яки эшләвен туктатканнары өчен эшләтелмәгән. Эшләтелмәгән кулланучыларның тулы исемлеген туры килгән сылтаманы менюда сайлап яки түбәндәге сылтамага  «Эшләтелмәгән кулланучылар» басып карап була. «Эшләтелмәгән кулланучылар » битендә эшләтелмәгән кулланучыларны сез эшләтә, бетерә яки аларга эшләтү искәртмәсе белән электрон хәбәр җибәрә аласыз.',

	'NO_INACTIVE_USERS'	=> 'Эшләтелмәгән кулланучылар юк',

	'SORT_INACTIVE'		=> 'Туктату көне',
	'SORT_LAST_VISIT'	=> 'Соңгы керү',
	'SORT_REASON'		=> 'Сәбәп',
	'SORT_REG_DATE'		=> 'Теркәлү көне',
	'SORT_LAST_REMINDER'=> 'Соңгы искәртү',
	'SORT_REMINDER'		=> 'Белдерү көне',

	'USER_IS_INACTIVE'		=> 'Кулланучы эшләтелмәде',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Безгә сезнең сервер турындагы мәгълүматны һәм phpBB рәвешен статистика тикшерүләре өчен җибәрегез. Барлык сезне яки сезнең сәхифәгезне тиңләштерә алган мәгълүмат бетерелде — мәгълүмат тулысынча <strong>имзасыз</strong>. Сез җибәргән мәгълүматны кулланып, без киләчәк phpBB юрамалары мөмкинлекләре турында карар кабул итәчәкбез. Статистика мәгълүматы  ачык килеш тапшырыла. Без ул мәгълүматны шулай ук PHP нияте белән (phpBB язылган программалау теле) уртак кулланабыз .',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Түбәндәге төймәне кулланып, сез барлык тапшырылачак үзгәрмәләрне күрә аласыз.',
	'DONT_SEND_STATISTICS'		=> 'Администратор бүлегенә баш битенә күчү',
	'GO_ACP_MAIN'				=> 'Администратор бүлегенә баш битенә күчү',
	'HIDE_STATISTICS'			=> 'Тулылыкны яшерергә',
	'SEND_STATISTICS'			=> 'Статистика мәгълүматын җибәрергә',
	'SHOW_STATISTICS'			=> 'Тулылыкны күрсәтергә',
	'THANKS_SEND_STATISTICS'	=> 'Бирелгән мәгълүмат өчен рәхмәт!',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Кулланучының хокуклары өстәлде яки үзгәртелде</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Кулланучы төркемнәрнең хокуклары өстәлде яки үзгәртелде</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Кулланучыларның супермодератор хокуклары өстәлгән яки үзгәртелгән</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Төркемнәрнең супермодератор хокуклары өстәлгән яки үзгәртелгән</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Кулланучыларның администратор хокуклары өстәлгән яки үзгәртелгән</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Администратор хокуклары өстәлгән яки үзгәртелгән</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Администраторлар өстәлде яки үзгәртелде</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Супермодераторлар өстәлде яки үзгәртелде</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Форумга кулланучыларга рөхсәт өстәлгән яки үзгәртелгән</strong> %1$s<br />» - %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Модератор рөхсәте өстәлгән яки үзгәртелгән</strong> %1$s<br />» - %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Форумга төркемнәр рөхсәте өстәлгән яки үзгәртелгән</strong> %1$s<br />» - %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Төркемнәрнең форумга модератор хокуклары өстәлгән яки үзгәртелгән</strong> %1$s<br />» - %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Модераторлар өстәлгән яки үзгәртелгән </strong> %1$s<br />» - %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Форумга рөхсәт өстәлде яки үзгәртелде</strong> %1$s<br />» - %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Администраторлар бетерелде</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Супермодераторлар бетерелде</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Модераторлар %1$s бетерелде</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Форумга кулланучы/төркем рөхсәте бетерелде</strong> %1$s<br />» - %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Кулланучы керү хокуклары күчерелде</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Кулланучы хокукларын кулланганнан соң үз керү хокуклары кайтарылды</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Администратор сыйфатында уңышсыз кереп карау</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Уңышлы администратор сыйфатында керү</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Кулланучы өстәүләре бетерелде</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Өстәүләрнең киңәйтүе өстәлде яки үзгәртелде</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Өстәүләрнең киңәйтүе бетерелде</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Өстәүләр киңәйтүләре яңартылды</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Киңәйтүләр төркемен өстәү</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Киңәйтүләр төркеме үзгәртелде</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Киңәйтүләр төркеме бетерелде</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Өстәлмәгән файл хәбәргә беркетелгән</strong><br />» ID %1$d — %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Өстәмәгән файллар бетерелде</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Кулланучы тыелганнар исемлегеннән чыгарылды</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP-адрес тыелганнар исемлегеннән чыгарылды</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>email-адрес тыелганнар исемлегеннән чыгарылды</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Кулланучы тыелган</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP-адрес тыелды</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>email-адрес тыелган</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s ',
	'LOG_UNBAN_USER'		=> '<strong>Кулланучы рөхсәт ителде</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP-адрес рөхсәт ителде</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>email-адрес рөхсәт ителде</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Яңа BBCode өстәлде</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode үзгәртелде</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode бетерелде</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Яңа бот өстәлде</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Бот бетерелде</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Булган бот яңартылды</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Администратор логы чистартылды</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Хаталар логы чистартылды</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Модератор логы чистартылды</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Кулланучы логы чистартылды</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Кулланучылар логы чистартылды</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Өстәүләр көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Чынлыкны тикшерү көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Аватар көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>cookies көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Почта көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Конференция мөмкинлекләре үзгәртелде</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Серверга төялеш көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Шәхси хәбәрләр көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Хәбәрләр көйләве үзгәртелде</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Кулланучы теркәлү көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Яңалыклар каналы көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Эзләү көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Иминлек көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Сервер көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Конференция көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Имзалар көйләүләре үзгәртелде</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Спам-ботларга каршы чаралар көйләүләре үзгәртелде</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Тема хупланды</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Тема күтәрелде</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Кулланучы җибәргән хәбәр «%1$s» бетерелде </strong><br />» %2$s',
	'LOG_DELETE_TOPIC'			=> '<strong>Кулланучы ясаган тема «%1$s» бетерелде </strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Күчерелгән темага сылтама бетерелде</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Темага күчермә</strong><br />» %s форумыннан ясалды',
	'LOG_LOCK'					=> '<strong>Тема ябылды</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Хәбәр тыелды</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Хәбәрләр берләштерелде</strong><br />» %s',
	'LOG_MOVE'					=> '<strong>Тема күчерелде</strong><br />» %1$s - %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Шәхси хәбәргә шикаять ябылды</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Шәхси хәбәргә шикаять бетерелде</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Хәбәрне хуплау</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Хәбәр «%1$s» кире кагылды бу сәбәп өчен</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>«%1$s» темасындагы хәбәрләрне төзәтү, авторы</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Шикаятьне ябарга</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Шикаятьне бетерү</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Бүленгән хәбәрләр монда күчерелде</strong><br />» %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Хәбәрләр</strong><br />» %s бүленделәр',

	'LOG_TOPIC_APPROVED'		=> '<strong>Теманы хуплау</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>«%1$s» темасын бу сәбәп буенча кире кагу</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Тема санаучылары синхронлашты</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Тема төре үзгәртелде</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Тема ачылды</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Хәбәр рөхсәт ителде</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Исем тыелган</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Исем рөхсәт ителгән</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Мәгълүмат нигезенең резерв күчермәсен ясау</strong>',
	'LOG_DB_DELETE'			=> '<strong>Мәгълүмат нигезенең резерв күчермәсен бетерү</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Мәгълүмат нигезен торгызу</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP-адрес/хост йөкләүләр исемлегеннән чыгарылды</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP-адрес/хост йөкләү исемлегенә өстәлде</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP-адрес/хост йөкләү исемлегеннән бетерелде</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber хатасы</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Почта хатасы</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Форум ясалды</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Керү хокуклары күчерелде</strong> «%1$s» форумыннан <br />» %2$s форумына',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Форум бетерелде</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Форум асфорумнар белән бетерелде</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Форум яки асфорум бетерелде яки күчерелде</strong> %1$s<br />» - %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Форум бетерелде яки хәбәрләр күчерелде</strong> %1$s<br />» - %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Форум асфорумнар белән бетерелде, хәбәрләр күчерелде</strong>  %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Форум бетерелде, хәбәрләре </strong> %1$s <strong>һәм асфорум</strong> %2$s күчерелде<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Хәбәрләр белән форум бетерелде</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Форум хәбәрләр белән һәм асфорум бетерелде</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Форум хәбәрләр белән бетерелде, асфорумнар күчерелде</strong> %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Форум турында мәгълүмат үзгәрде</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Форум күчерелде</strong> %1$s <strong>астына</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Форум күчерелде</strong> %1$s <strong>өстенә</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Форум синхронлаштырылды</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Гомуми хата килеп чыкты:</strong> %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Кулланучылар төркеме ясалды</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>“%1$s” төркеме килешү буенча бу кулланучыларга урнаштырылган</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Төркем бетерелде</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>%1$s төркемендә җитәкче алынды</strong><br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Төркемнәрдә җитәкчеләр билгеләнде</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Төркемнән кулланучылар бетерелде</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Төркем мәгълүматы яңартылды</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Төркемгә яңа җитәкчеләр өстәлде</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Төркемгә кулланучылар өстәлде</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Төркемгә кандидатлар хупланды</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Кулланучылар «%1$s» төркеменә керүне сорадылар һәм хуплауны көтәләр</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Сурәт ясаганда хата</strong><br />» %1$s юлында хата %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Мәгълүмат нигезенә рәсемнәр җыелмасы өстәлде</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Серверга рәсемнәр җыелмасы өстәлде</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Рәсемнәр җыелмасы бетерелде</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Рәсемнәр җыелмасы турында мәгълүмат үзгәртелде</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Рәсемнәр җыелмасы үзгәртелде</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Рәсемнәр җыелмасы экспортланды</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Рәсемнәр җыелмасы «%2$s» өчен урнашу юк</strong><br />» «%1$s»',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Рәсемнәр җыелмасы урнашуы яңартылды«%2$s»</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Рәсемнәр җыелмасы яңартылды</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Кулланучылар эшләтелде</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Эшләтелмәгән кулланучылар бетерелде</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Эшләтелмәгән кулланучыларга email-искәртүләр җибәрелде</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конференция %1$s phpBB %2$s әйләндерелде</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s урнаштырылды</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>IP-адрес/браузер буенча тоташманы уңышсыз тикшерү/X_FORWARDED_FOR</strong><br />»кулланучы IP-адресы"<em>%1$s</em>" тоташманың IP-адресы буенча тикшерелде "<em>%2$s</em>", кулланучы браузеры тоташма "<em>%3$s</em>" юлы буенча тикшерелде "<em>%4$s</em>" һәм кулланучы X_FORWARDED_FOR юлы "<em>%5$s</em>" тоташма юлы буенча X_FORWARDED_FOR тикшерелде "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber хисап язмасы үзгәртелде</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber серсүзе үзгәртелде</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Яңа Jabber хисап язмасы теркәлде</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber көйләүләре үзгәртелде</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Тел төргәге бетерелде</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Тел төргәге урнаштырылды</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Тел төргәге турында мәгълүмат яңартылды</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Тел файлы алмаштырылды</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Тел файлы җибәрелде һәм папкага күчерелде</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Күпләп почта җибәрү башкарылды</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Тема авторы "%1$s"</strong><br />» %2$s %3$s үзгәртелде',

	'LOG_MODULE_DISABLE'	=> '<strong>Модуль сүнгән</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Модуль кабызылды</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модульны күчерү</strong><br />» «%1$s» «%2$s» астына',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модульны күчерү</strong><br />» «%1$s» «%2$s» өстенә',
	'LOG_MODULE_REMOVED'	=> '<strong>Модуль бетерелде</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Модуль өстәлде</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Модуль үзгәртелде</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Администратор вазифасы өстәлде</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Администратор вазифасы үзгәртелде</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Администратор вазифасы бетерелде</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Форум вазифасы өстәлде</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Форум вазифасы үзгәртелде</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Форум вазифасы бетерелде</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Модератор вазифасы өстәлде</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Модератор вазифасы үзгәртелде</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Модератор вазифасы бетерелде</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Кулланучы вазифасы өстәлде</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Кулланучы вазифасы үзгәртелде</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Кулланучы вазифасы бетерелде</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Рәвеш кыры эшләтелде</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Рәвеш кыры өстәлде</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Рәвеш кыры өстәлде</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Рәвеш кыры үзгәртелде</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Рәвеш кыры бетерелде</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Форумнар чистартылды</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Форумнарны үзе чистарту башкарылды</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Кулланучылар эшләрен туктатты</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Кулланучылар белән хәбәрләре бетерелде</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Кулланучылар бетерелде, аларның хәбәрләре калды</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Кэшны чистарту</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Тоташмаларны чистарту</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Дәрәҗә өстәлде</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Дәрәҗә бетерелде</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Дәрәҗә яңартылды</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Шикаять/кире кагу сәбәбе өстәлде</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Шикаять/кире кагу сәбәбе бетерелде</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Шикаять/кире кагу сәбәбе яңартылды</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Рефёрерны тикшереп булмады </strong><br />»Рефёрер: “<em>%1$s</em>”. Сорау кире кагылды, тоташма бетерелде.',
	'LOG_RESET_DATE'			=> '<strong>Конференцияне башлау көне ташлатылды</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Керү рекорды ташланды</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Кулланучының хәбәрләр санаучысы синхронлашты</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Үз темалар синхронлаштырылды</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Хәбәрләр, темалар, торрентлар, аңлатмалар һәм кулланучылар статистикасы синхронлашты</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Эзләү индекслары ясалды</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Эзләү индекслары бетерелде</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Стиль өстәлде</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Стиль бетерелде</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Стиль үзгәртелде</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Стиль экспортланды</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Мәгълүмат нигезенә үрнәк өстәлде</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Серверга үрнәк өстәлде</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Үрнәкләрнең кешланган юрама файллары бетерелде<em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Үрнәк бетерелде</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Үрнәк үзгәртелде <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Үрнәкләр турында мәгълүмат үзгәртелде</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Үрнәк экспортланды</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Үрнәк яңартылды</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Мәгълүмат нигезенә тема өстәлде</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Серверга тема өстәлде</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Тема бетерелде</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Тема турында мәгълүмат бетерелде</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Тема үзгәртелде <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Тышкы күренеш үзгәртелде <em>%1$s</em></strong><br />» Файл үзгәртелде <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Тема экспортланды</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Тема яңартылды</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Мәгълүмат нигезе %1$s юрамасыннан %2$s юрамасына кадәр яңартылды</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB %1$s юрамасыннан %2$s юрамасына кадәр яңартылды</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Кулланучы эшләтелде</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Кулланучы Кулланучылар идарәсе бүлеге аша тыелган</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-адрес Кулланучылар идарәсе бүлеге аша тыелган</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>email-адрес Кулланучылар идарәсе бүлеге аша тыелган</strong> сәбәбе "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Кулланучы бетерелде</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Кулланучының барлык өстәүләре бетерелде</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Кулланучы аватары бетерелде</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Кулланучының «Җибәргән» папкасы чистартылды</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Кулланучының барлык хәбәрләре бетерелде</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Кулланучы имзасы бетерелде</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Кулланучы эшләвен туктатты</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Кулланучы хәбәрләре күчерелде</strong><br />» «%1$s» - «%2$s» форумына',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Кулланучы серсүзе үзгәртелде</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Кулланучының хисап язмасын мәҗбүри кабат эшләтү</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Кулланучының яңа теркәлү тамгасы бетерелде</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Кулланучы "%1$s" email-адресын үзгәртте</strong><br />» «%2$s» - «%3$s»"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Кулланучы исеме</strong><br />» «%1$s» - «%2$s» үзгәртелде',
	'LOG_USER_USER_UPDATE'	=> '<strong>Кулланучы турында мәгълүмат яңартылды</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Кулланучының хисап язмасы эшләтелде</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Кулланучы аватары бетерелде</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Кулланучы имзасы бетерелде</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Кулланучы турында тамга өстәлде</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Кисәк өстәлде:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Кулланучының хисап язмасы эшләвен туктатты</strong>',
	'LOG_USER_LOCK'				=> '<strong>Кулланучы темасын япты</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Барлык хәбәрләр "%s" форумына күчерелде</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Кулланучының хисап язмасын мәҗбүри кабат эшләтү</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Кулланучы темасын ачты</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Кулланучыга кисәтү чыгарылды</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Кулланучыга түбәндәге кисәтү чыгарылды</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Кулланучы килешү буенча төркемне үзгәртте</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Кулланучы төркем җитәкчесеннән алынды</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Кулланучы төркемгә керде</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Кулланучы төркемгә керү соравын  җибәрде һәм хупланырга тиеш</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Кулланучының төркемгә керәсе килмәде</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Кулланучыга кисәтү бетерелде</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Кулланучының %2$s кисәтүе бетерелде</strong><br />» %1$s', // Example: '<strong>Ике кулланучы кисәтүе бетерелде</strong><br />» кулланучы исеме'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Кулланучының барлык кисәтүләре бетерелде</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Сүзләр цензоры өстәлде</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Сүзләр цензоры бетерелде</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Сүзләр цензоры үзгәртелде</strong><br />» %s',
	));
	
?>