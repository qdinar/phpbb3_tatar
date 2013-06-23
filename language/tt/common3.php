<?php
/**
*
* common.php [Tataric]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-04-06 – Fələn Fələnoviç
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*nail
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
'TRANSLATION_INFO' => '<a href=\'http://tmf.org.ru/\'>phpBBtat татар хезмәте</a>',
'DIRECTION' => 'ltr',
'DATE_FORMAT' => '|d.m.Y|',
'USER_LANG' => 'ru-ru',
'1_DAY' => '1 көн',
'1_MONTH' => '1 ай',
'1_YEAR' => '1 ел',
'2_WEEKS' => '2 атна',
'3_MONTHS' => '3 ай',
'6_MONTHS' => '6 ай',
'7_DAYS' => '7 көн',
'ACCOUNT_ALREADY_ACTIVATED' => 'Сезнең аккаунтыгыз активлашкан инде.',
'ACCOUNT_DEACTIVATED' => 'Сезнең аккаунтыгыз кире кагылды. Янәдән ул форум админ тарафыннан гына активлашырыга мөмкин.',
'ACCOUNT_NOT_ACTIVATED' => 'Сезнең аккаунтыгыз активлашмаган инде.',
'ACP' => 'Админ бүлеге',
'ACTIVE' => 'активлашкан',
'ACTIVE_ERROR' => 'Бу аккаунт ошбу вакытта актив түгел. Аккаунтыгызны активлаштыруда авырлыклар кичерсәгез, форум админы белән элемтәгә керегез.',
'ADMINISTRATOR' => 'Администратор',
'ADMINISTRATORS' => 'Администраторлар',
'AGE' => ' Яше',
'AIM' => 'AIM',
'ALLOWED' => 'Рөхсәт ителгән',
'ALL_FILES' => 'Файлларның барысы',
'ALL_FORUMS' => 'Форумнарның барысы',
'ALL_MESSAGES' => 'Хатларның барысы',
'ALL_POSTS' => 'Хәбәрләрнең барысы',
'ALL_TIMES' => 'Вакытларның барысы: %1$s %2$s',
'ALL_TOPICS' => 'Темаларның барысы',
'AND' => 'һәм',
'ARE_WATCHING_FORUM' => 'Сез бу форумдагы яңа хәбәр булуы турында белеп торырсыз (язылдыгыз).',
'ARE_WATCHING_TOPIC' => 'Сез бу темадагы яңа хәбәр булуы турында белеп торырсыз (язылдыгыз).',
'ASCENDING' => 'Арта бара',
'ATTACHMENTS' => 'Беркетмәләр',
'ATTACHED_IMAGE_NOT_IMAGE' => 'Сез беркетергә теләгән файлыгыз рәсем түгел.',
'AUTHOR' => 'Автор',
'AUTH_NO_PROFILE_CREATED' => 'Кулланучының профилен ясап булып чыкмады.',
'AVATAR_DISALLOWED_CONTENT' => 'Аватарны китерү кире кагылды, чөнки ул атака буларак кабул ителде (күренде).',
'AVATAR_DISALLOWED_EXTENSION' => 'Бу файл аватар була алмый, чөнки файлның <strong>%s</strong> төре рөхсәт ителмәгән',
'AVATAR_EMPTY_REMOTE_DATA' => 'Сез күрсәткән аватарны китереп булмады.Файлда хаталары бар дыр, бәлки.',
'AVATAR_EMPTY_FILEUPLOAD' => 'Китергән аватар файлы буш.',
'AVATAR_INVALID_FILENAME' => '%s – дөрес файл исеме түгел.',
'AVATAR_NOT_UPLOADED' => 'Аватарны китереп булмый (UPLOAD кылып).',
'AVATAR_NO_SIZE' => 'Сез күрсәткән аватар сүрәтенең зурлыгын белеп булмады. Үзегез язып бирегезче.',
'AVATAR_PARTIAL_UPLOAD' => 'Сез күрсәткән файлның бер өлешен генә алып булды',
'AVATAR_PHP_SIZE_NA' => 'Аватар файлы артык зур.<br /> php.ini-да рөхсәт ителгән файл зурлыгын белеп булмады.',
'AVATAR_PHP_SIZE_OVERRUN' => 'Аватар файлы артык зур. Куллануга рөхсәт ителгән ң зур файл — %d Мб.<br />: бу php.ini-да язылган һәм моны үзгәртеп булмый.',
'AVATAR_URL_INVALID' => 'Күрсәткән аватарның URL-адресы дөрес түгел',
'AVATAR_URL_NOT_FOUND' => 'Күрсәткән файлны табып булмый.',
'AVATAR_WRONG_FILESIZE' => 'Аватар зурлыгы 0-дән %1d %2s-гә кадәр булырга тиеш.',
'AVATAR_WRONG_SIZE' => 'Сайланган аватар сүрәтенең киңлеге - %5$d пикс., һәм биеклеге - %6$d пикс.. Аватар сүрәтегез иң ким - %1$d пикс (киңлеккә) вә %2$d пикс (биеклеккә), әммә вә ләкин %3$d×%4$d (киңлек һәм биеклек)) пикселдан зуррак булырга тиеш түгел.',
'BACK_TO_TOP' => 'Өскә',
'BACK_TO_PREV' => 'Элекеге биткә кайтырга',
'BAN_TRIGGERED_BY_EMAIL' => 'Бу форум сезнең email-адресыгызга тыелды.',
'BAN_TRIGGERED_BY_IP' => 'Бу форум сезнең IP-адреска тыелды.',
'BAN_TRIGGERED_BY_USER' => 'Бу форум сезнең кулланучы исемегезгә тыелды.',
'BBCODE_GUIDE' => 'BBCode өйрәткече',
'BCC' => 'ВСС (скрытая копия)',
'BIRTHDAYS' => 'Туган көннәр',
'BOARD_BAN_PERM' => 'Сезгә бу форум бөтенләйгә тыелды.<br /><br /> Күбрәк мәглүмәт белер өчен %2$sфорум админы белән элемтәгә керегез%3$s.',
'BOARD_BAN_REASON' => 'Тыелуыгызның төп сәбәбе: <strong>%s</strong>',
'BOARD_BAN_TIME' => 'Сезгә бу форум <strong>%1$s</strong>-гә кадәр тыелды.<br /><br />Күбрәк мәглүмәт белер өчен %2$sфорум админы белән элемтәгә керегез%3$s.',
'BOARD_DISABLE' => 'Гайу итегез, әммә хәзер форумны күрә алмыйсыз',
'BOARD_DISABLED' => 'Бу форум сүндерелгән әле.',
'BOARD_UNAVAILABLE' => 'Гафу итегез, бу форумны сез вакытлыча күрә алмыйсыз. Бар-ничә минкттан кабат кереп карагызчы.',
'BROWSING_FORUM' => ' Бу форумны хәзер: %1$s кулланучы карап утыра',
'BROWSING_FORUM_GUEST' => 'Бу форумны хәзер: %1$s кулланучы һәм %2$d кунак карап утыра',
'BROWSING_FORUM_GUESTS' => 'Бу форумны хәзер: %1$s кулланучы һәм %2$d кунак карап утыра',
'BYTES' => 'байт',
'CANCEL' => 'Үзгәртмәскә',
'CHANGE' => 'Үзгәртергә',
'CHANGE_FONT_SIZE' => 'Хәрефләрнең зурлыгын үзгәрт',
'CHANGING_PREFERENCES' => 'Үзең өчен форумның көйләнешен үзгәрт',
'CHANGING_PROFILE' => 'Профильны көйләү',
'CLICK_VIEW_PRIVMSG' => '%sСиңа килгән шәһси хәбәрләрне кара%s',
'COLLAPSE_VIEW' => 'Тәрәзәне җыеп куегыз',
'CLOSE_WINDOW' => 'Тәрәзәне ябыгыз',
'COLOUR_SWATCH' => 'төс Swatch',
'COMMA_SEPARATOR' => ', ',
'CONFIRM' => 'Ышандыру',
'CONFIRM_CODE' => 'Ышандыру коды',
'CONFIRM_CODE_EXPLAIN' => 'Кодны ничек күрәсез, шулай кертегез. Хәрефләрнең зур йә кечкенә булулары мөһим түгел. Ноль саны да монда юк.',
'CONFIRM_CODE_WRONG' => 'Сез керткән ышандыру коды дөрес булмады.',
'CONFIRM_OPERATION' => 'Бу гәмәлне эшләргә ме?',
'CONGRATULATIONS' => 'Без сезне тәбриклибез',
'CONNECTION_FAILED' => 'Тоташу хатасы.',
'CONNECTION_SUCCESS' => 'Тоташу булып чыкты.',
'COOKIES_DELETED' => 'Форумның барча cookie-лары бетерелде.',
'CURRENT_TIME' => 'Хәзерге вакыт: %s',
'DAY' => 'көн',
'DAYS' => 'көн',
'DELETE' => 'Бетерергә',
'DELETE_ALL' => 'Бөтенесен дә бетерергә',
'DELETE_COOKIES' => 'Форумның cookies-ын бетерергә',
'DELETE_MARKED' => 'Сайлаганны бетерергә',
'DELETE_POST' => 'Хәбәрне бетерергә',
'DELIMITER' => 'Аергыч',
'DESCENDING' => 'кими бара',
'DISABLED' => 'Сүндерелгән',
'DISPLAY' => 'Күрсәтергә',
'DISPLAY_GUESTS' => 'Кунакларны күрсәтергә',
'DISPLAY_MESSAGES' => '... эчендә булган хатларны күрсәтергә',
'DISPLAY_POSTS' => '... эчендә булган хәбәрләрне күрсәтергә',
'DISPLAY_TOPICS' => '... эчендә булган темаларны күрсәтергә:',
'DOWNLOADED' => 'Алынды:',
'DOWNLOADING_FILE' => 'Файлны алу (download)',
'DOWNLOAD_COUNT' => '%d тапкыр алынды',
'DOWNLOAD_COUNTS' => '%d тапкыр алынды',
'DOWNLOAD_COUNT_NONE' => 'Бер мәртәбә дә алынмады',
'VIEWED_COUNT' => '%d тапкыр каралды',
'VIEWED_COUNTS' => '%d тапкыр каралды',
'VIEWED_COUNT_NONE' => 'Бер тапкыр да каралмады',
'EDIT_POST' => 'Хәбәрне үзгәртергә',
'EMAIL' => 'Email',
'EMAIL_ADDRESS' => 'Email-адресы',
'EMAIL_SMTP_ERROR_RESPONSE' => '<strong>%1$s юлына</strong> e-mail җибәргәндә хата килеп чыкты. Серверның җавабы: %2$s.',
'EMPTY_SUBJECT' => 'Яңа теманы башлаганда, аңа исем бирергә кирәк.',
'EMPTY_MESSAGE_SUBJECT' => 'Сез яңа теманың исемен кертергә тиешсез.',
'ENABLED' => 'Кабызылган',
'ENCLOSURE' => 'Ябылган',
'ERR_CHANGING_DIRECTORY' => 'Директория алмаштыру хатасы (алмаштырып булмады).',
'ERR_CONNECTING_SERVER' => 'Серверга тоташу хатасы.',
'ERR_JAB_AUTH' => 'Jabber-серверына кереп булмады.',
'ERR_JAB_CONNECT' => 'Jabber-серверына тоташып булмады.',
'ERR_UNABLE_TO_LOGIN' => 'Кулланучы исеме яки сер сүзе дөрес түгел.',
'ERR_UNWATCHING' => 'Язылуны кире какканда хата пәйда булды.',
'ERR_WATCHING' => 'Язылу хатасы пәйда булды',
'ERR_WRONG_PATH_TO_PHPBB' => 'Бу phpBB-га булган юл дөрес түгелгә охшаган.',
'EXPAND_VIEW' => 'Ачырга, җәергә',
'EXTENSION' => 'өстәмә (расширение)',
'EXTENSION_DISABLED_AFTER_POSTING' => '<strong>%s</strong> өстәмәсе ычкындырылды һәм файлы күренмәячәк (EXTENSION_DISABLED_AFTER_POSTING).',
'FAQ' => 'FAQ',
'FAQ_EXPLAIN' => 'Еш бирелә торган сорауларга җавап',
'FILENAME' => 'Файл исеме',
'FILESIZE' => 'Файлның зурлыгы',
'FILEDATE' => 'Файл вакыты',
'FILE_COMMENT' => 'Файл аңлатмасы',
'FILE_NOT_FOUND' => 'Соралган файл табылмады.',
'FIND_USERNAME' => 'Кулланучыны табырга',
'FOLDER' => 'Савыт (FOLDER)',
'FORGOT_PASS' => 'Сер сүзегезне онытыгыз мәллә?',
'FORM_INVALID' => 'Форма җибәрү хатасы. Кабат җибәреп караргыз.',
'FORUM' => 'Форум',
'FORUMS' => 'Форумнар',
'FORUMS_MARKED' => 'Бар форумнар укылган дип куелган',
'FORUM_CAT' => 'Форум бүлеге',
'FORUM_INDEX' => 'Форумның баш бите',
'FORUM_LINK' => 'Форум сылтамасы',
'FORUM_LOCATION' => 'Форумның урыны',
'FORUM_LOCKED' => 'Форум бикләнелгән',
'FORUM_RULES' => 'Форумның кагыйдәләре',
'FORUM_RULES_LINK' => 'Форумның кагыйдәләрен карарга',
'FROM' => 'моннан',
'FSOCK_DISABLED' => 'Бу гәмәл төгәлләнә алмый чөнки <var>fsockopen</var> сүндерелгән, яки сервер табылмаган.',
'FTP_FSOCK_HOST' => 'FTP-сервер',
'FTP_FSOCK_HOST_EXPLAIN' => 'Сайт белән тоташыр өчен булган FTP-сервер.',
'FTP_FSOCK_PASSWORD' => 'FTP сер сүзе',
'FTP_FSOCK_PASSWORD_EXPLAIN' => 'FTP-серверга керер өчен сер сүз.',
'FTP_FSOCK_PORT' => 'FTP порты',
'FTP_FSOCK_PORT_EXPLAIN' => 'FTP-сервер белән тоташу өчен булган порт.',
'FTP_FSOCK_ROOT_PATH' => 'phpBB-га юл',
'FTP_FSOCK_ROOT_PATH_EXPLAIN' => ' Сайт тамырында яткан phpBB-га юл.',
'FTP_FSOCK_TIMEOUT' => 'FTP вакыт бетүе',
'FTP_FSOCK_TIMEOUT_EXPLAIN' => 'Системаның FTP-сервердан җавап көтү вакыты (сек.)..',
'FTP_FSOCK_USERNAME' => 'FTP кулланучы исеме',
'FTP_FSOCK_USERNAME_EXPLAIN' => 'FTP-серверы белән тоташу өчен кулланучы сер сүз.',
'FTP_HOST' => 'FTP-серверы',
'FTP_HOST_EXPLAIN' => 'Синең сайтыңа керер өчен FTP-серверы.',
'FTP_PASSWORD' => 'FTP сер сүзе',
'FTP_PASSWORD_EXPLAIN' => 'FTP-серверга керер өчен кулланучы сер сүз.',
'FTP_PORT' => 'FTP порты',
'FTP_PORT_EXPLAIN' => 'FTP-сервер белән тоташу өчен тоташу порты.',
'FTP_ROOT_PATH' => 'phpBB-га юл',
'FTP_ROOT_PATH_EXPLAIN' => 'Сайт тамырында яткан phpBB-га юл.',
'FTP_TIMEOUT' => 'FTP-ның вакыт үтеп китүе',
'FTP_TIMEOUT_EXPLAIN' => 'FTP-сервердан җавап көтү вакыты (сек.).',
'FTP_USERNAME' => 'FTP кулланучы исеме',
'FTP_USERNAME_EXPLAIN' => 'FTP-сервер белән тоташу өчен кулланучы исеме.',
'GENERAL_ERROR' => 'Гөмүми хата',
'GO' => 'күчергә',
'GOTO_PAGE' => 'бу биткә бар',
'GROUP' => 'Төркем',
'GROUPS' => 'Төркемнәр',
'GROUP_ERR_TYPE' => 'Төркем төре дөрес куелмаган.',
'GROUP_ERR_USERNAME' => 'Төркем исеме куелмаган.',
'GROUP_ERR_USER_LONG' => 'Төркем исеме 60 хәрефтән озын була алмый. Язылган исем артык озын.',
'GUEST' => 'Кунак',
'GUEST_USERS_ONLINE' => 'Хәзер %d кунак кулланучы онлайн',
'GUEST_USERS_TOTAL' => '%d кунак',
'GUEST_USERS_ZERO_ONLINE' => 'Хәзер 0 кунак онлайн',
'GUEST_USERS_ZERO_TOTAL' => '0 кунак',
'GUEST_USER_ONLINE' => 'Хәзер %d кунак онлайн',
'GUEST_USER_TOTAL' => '%d кунак',
'G_ADMINISTRATORS' => 'Администраторлар',
'G_BOTS' => 'Роботлар',
'G_GUESTS' => 'Кунаклар',
'G_REGISTERED' => 'Теркәлгән кулланучылар',
'G_REGISTERED_COPPA' => 'Теркәлгән “COPPA” кулланучылар',
'G_GLOBAL_MODERATORS' => 'Глобал Модераторлар',
'HIDDEN_USERS_ONLINE' => '%d яшерен онлайн',
'HIDDEN_USERS_TOTAL' => '%d яшерен',
'HIDDEN_USERS_TOTAL_AND' => '%d яшерен һәм ',
'HIDDEN_USERS_ZERO_ONLINE' => '0 яшерен кулланучылар онлайн',
'HIDDEN_USERS_ZERO_TOTAL' => '0 яшерен кулланучы',
'HIDDEN_USERS_ZERO_TOTAL_AND' => '0 яшерен һәм ',
'HIDDEN_USER_ONLINE' => '%d яшерен кулланучылар онлайн',
'HIDDEN_USER_TOTAL' => '%d яшерен һәм',
'HIDDEN_USER_TOTAL_AND' => '%d яшерен һәм ',
'HIDE_GUESTS' => 'Кунакларны яшерергә',
'HIDE_ME' => 'Бу мәртәбә минем “элемтәдә” булганымны качырырга',
'HOURS' => 'сәгать',
'HOME' => 'Баш биткә',
'ICQ' => 'ICQ',
'ICQ_STATUS' => 'ICQ хәле',
'IF' => 'Әгәр',
'IMAGE' => 'Сүрәт',
'IMAGE_FILETYPE_INVALID' => '%s “MIME” файл-төре өчен %d файл төре тотылмый (IMAGE_FILETYPE_INVALID).',
'IMAGE_FILETYPE_MISMATCH' => 'Сүрәт төре туры килми - %1$s урынына сез %2$s бирдегез.',
'IN' => 'моның эчендэ',
'INDEX' => 'Баш бит',
'INFORMATION' => 'Мәглүмәт',
'INTERESTS' => 'кызыксынулар',
'INVALID_DIGEST_CHALLENGE' => 'Хата DIGEST_CHALLENGE.',
'INVALID_EMAIL_LOG' => 'Бәлки, дөрес email кертелмәгән дер: <strong>%s</strong>',
'IP' => 'IP',
'IP_BLACKLISTED' => сезнең %1$s IP-гыз тыелды, чөнки ул начар IP исемлегенә кертелгән. Җентекле мәглүмәтне монда карагыз: <a href="%2$s">%2$s</a>.',
'JABBER' => 'Jabber',
'JOINED' => 'Кушылган',
'JUMP_PAGE' => 'Теләгән битнең санын яз',
'JUMP_TO' => 'Моңа күч',
'JUMP_TO_PAGE' => '…битенә күчер өчен төрт',
'KB' => 'Кб',
'KIB' => 'Кб',
'LAST_POST' => 'Ахыргы хәбәр',
'LAST_UPDATED' => 'Ахыргы керү',
'LAST_VISIT' => 'Ахыргы керү',
'LDAP_NO_LDAP_EXTENSION' => 'LDAP өстәмәсен алып булмый.',
'LDAP_NO_SERVER_CONNECTION' => 'LDAP серверына тоташа алмадым.',
'LEGEND' => 'Хикәя',
'LOCATION' => 'Кайдан:',
'LOCK_POST' => 'Хәбәрне блокинг кылу',
'LOCK_POST_EXPLAIN' => 'Үзгәртүне тыю',
'LOCK_TOPIC' => 'Теманы ябырга',
'LOGIN' => 'Керү',
'LOGIN_CHECK_PM' => 'Шәһси хәбәрләреңне карарга кер.',
'LOGIN_CONFIRMATION' => 'Аталып керү ышандыруы',
'LOGIN_CONFIRM_EXPLAIN' => 'Күп мәртәбә кереп караганнан соң, сезнең аккаунтыгызның сер сүзегезне шулай итеп белмәсеннәр өчен, кабат КОДЫН язырга кирәк. Код астагы сүрәттә язылган. Ничек күрәсез, шулай языгыз. Кодны күрмәсәгез, %sадминистратор%s белән элемтәгә ерегез.',
'LOGIN_ERROR_ATTEMPTS' => 'Сез күп мәртәбә кереп карагансыз инде, лимит тәмам. Хәзер инде, кулланучы исеме һәм сер сүздән башка, астагы сүрәттәге сүзне язырга тиешсез.',
'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Apache сезне аутентификейшн кыла алмады.',
'LOGIN_ERROR_PASSWORD' => 'Сер сүзегез дөрес түгел. Тикшерегез дә, кабат язып карагыз. Проблемасы калса - %sадминистраторга%s. языгыз',
'LOGIN_ERROR_PASSWORD_CONVERT' => 'Форум ны яңартканда сер сүзегез дөрес укылмады. %sЯңа сер сүз сорагыз%s. Теге проблем һаман да дәвам итсә, %sадминистратор%s белән элемтәгә керегез.',
'LOGIN_ERROR_USERNAME' => 'Кулланучы исемен дөрес язмадыгыз. Тикшерегез дә, кабат язып карагыз. Проблемасы калса - %sадминистраторга%s языгыз.',
'LOGIN_FORUM' => 'Бу форумны карау һәм хәбәр язу өчен сездән сер сүзегезне язып кертүегез сорала.',
'LOGIN_INFO' => ' Монда керер өчен сезнең теркәлүегез сорала. Теркәлүегез тиз үтер дип өметләнәбез, чөнки ул сезгә күбрәк мөмкинлекләр бирә. Форум админы теркәлүчеләргә күбрәк хокуклар бирергә мөмкин. Теркәлгәнче безнең куллану кагыйдәләрен һәм кулланучыларга карата сәясәтебез белән килешүебез ләзем. Төрле форум бүлекләренең кагыйдәләрен дә карарга кирәк, чөнки теркәлгән булсаң гына аталып керүең мөмкин. Шуны белегез ки, сезнең безнең форумыбызда булуыгыз безнең <strong>бар кагыйдәләре</strong> белән ризалашугызны белдертә.',
'LOGIN_VIEWFORUM' => 'Бу форумны карар өчен сез теркәлгән булырга тиешсез.',
'LOGIN_EXPLAIN_EDIT' => 'Бу форумдагы хәбәрләрне үзгәртер өчен сез теркәлгән булырга тиешсез.',
'LOGIN_EXPLAIN_VIEWONLINE' => 'Коференсияда булган кулланучыларны күрү өчен сез теркәлгән булырга тиешсез.',
'LOGOUT' => 'Чыгыш',
'LOGOUT_USER' => 'Чыгыш [ %s ]',
'LOG_ME_IN' => 'Мине хәтерләп калырга',
'MARK' => 'Сайларга (тамгаларга)',
'MARK_ALL' => 'барысын да сайларга (тамгаларга)',
'MARK_FORUMS_READ' => 'Бар бүлекләрне укылган диеп куерга',
'MB' => 'Mб',
'MIB' => 'Мб',
'MCP' => 'Модератор бүлеге',
'MEMBERLIST' => 'Теркәлгәннәр',
'MEMBERLIST_EXPLAIN' => 'Теркәлгәннәр спискысы',
'MERGE' => 'Кушырга',
'MERGE_POSTS' => 'Ике хәбәрне кушырга',
'MERGE_TOPIC' => 'Ике темаларны кушырга',
'MESSAGE' => 'Хат',
'MESSAGES' => 'Хатлар',
'MESSAGE_BODY' => 'Хат юлы',
'MINUTES' => 'минут',
'MODERATE' => 'Модерейт кылырга',
'MODERATOR' => 'Модератор',
'MODERATORS' => 'Модераторлар',
'MONTH' => 'Ай',
'MOVE' => 'Күчерергә',
'MSNM' => 'MSNM/WLM',
'NA' => 'Юк',
'NEWEST_USER' => '<strong>%s</strong> исемле яңа кулланучы',
'NEW_MESSAGE' => 'Яңа хәбәр',
'NEW_MESSAGES' => 'Яңа хәбәрләр',
'NEW_PM' => 'Яңа шәһс.хәб: <strong>%d</strong>',
'NEW_PMS' => 'Яңа шәһс.хәб: <strong>%d</strong>',
'NEW_POST' => 'Яңа хәбәр',
'NEW_POSTS' => 'Яңа хәбәрләр',
'NEXT' => 'Икенче (ары)',
'NEXT_STEP' => 'Икенче адым (ары)',
'NEVER' => 'Һич бер кайчан да',
'NO' => 'Юк',
'NOT_ALLOWED_MANAGE_GROUP' => 'Гафу итегез, әммә бу группа белән идәрә итә алмыйсыз.',
'NOT_AUTHORISED' => 'Гафу итегез, әммә форумның бу өлешенә сезгә керергә ярамый.',
'NOT_WATCHING_FORUM' => 'Сез бу форумның яңартылуына язылып карап бара алмыйсыз.',
'NOT_WATCHING_TOPIC' => 'Сез бу теманы язылып карап бара алмассыз.',
'NOTIFY_ADMIN' => 'Форумның админына яки вебмастерына әйтегез.',
'NOTIFY_ADMIN_EMAIL' => 'Форумның админына яки вебмастерына әйтегез: <a href="mailto:%1$s">%1$s</a>',
'NO_ACCESS_ATTACHMENT' => 'Бу файлны алырга сезгә ярамый.',
'NO_ACTION' => 'Акция билгеле түгел.',
'NO_ADMINISTRATORS' => 'Админ әлегә юк.',
'NO_AUTH_ADMIN' => 'Вы не имеете прав доступа к администраторскому разделу.',
'NO_AUTH_ADMIN_USER_DIFFER' => 'Сез кабат яңа аккаунт белән керә алмыйсыз.',
'NO_AUTH_OPERATION' => 'Бу операцияны тәмам кылыр өчен сезнең хокукларыгыз җитми.',
'NO_CONNECT_TO_SMTP_HOST' => 'Не удалось соединиться с SMTP-сервером: %1$s : %2$s',
'NO_BIRTHDAYS' => 'Туган көн уздыручылар бүген юк.',
'NO_EMAIL_MESSAGE' => 'Хатта бер ни дә язылмаган.',
'NO_EMAIL_RESPONSE_CODE' => 'Почта серверыннан җавап килмәде.',
'NO_EMAIL_SUBJECT' => 'Хатның темасы язылмаган.',
'NO_FORUM' => 'Андый форум юк.',
'NO_FORUMS' => 'Бу сайтта форумнар юк.',
'NO_GROUP' => 'Андый группа юк.',
'NO_GROUP_MEMBERS' => 'Бу группада ХӘЗЕР бер кулланучы да юк.',
'NO_IPS_DEFINED' => 'IP-адрес яки хост билгеле түгел',
'NO_MEMBERS' => 'Ошбу көйләүгә бер кулланучы да килми',
'NO_MESSAGES' => 'Хәбәрләр юк',
'NO_MODE' => 'Режим куелмаган.',
'NO_MODERATORS' => 'Модераторлар әлегә юк.',
'NO_NEW_MESSAGES' => 'Яңа хәбәрләр юк',
'NO_NEW_PM' => '<strong>0</strong> яңа хәбәр',
'NO_NEW_POSTS' => 'Яңа хәбәрләр юк',
'NO_ONLINE_USERS' => 'Онлайн теркәлгәннәр юк',
'NO_POSTS' => 'Хәбәрләр юк',
'NO_POSTS_TIME_FRAME' => 'Бу темада ошбу вакыт эчендә язылган хәбәрләр юк.',
'NO_SUBJECT' => 'Тема исеме куелмаган',
'NO_SUCH_SEARCH_MODULE' => 'Ошбу эзләү механизмы юк.',
'NO_SUPPORTED_AUTH_METHODS' => 'Аутентификация ысулы табылмый.',
'NO_TOPIC' => 'Сез сораган тема юк.',
'NO_TOPIC_FORUM' => 'Ошбу тема йә хәбәр бүтән юк шул.',
'NO_TOPICS' => 'Бу форумда темалар юк.',
'NO_TOPICS_TIME_FRAME' => 'Куйган вакыт эчендә форумда бер тема да юк.',
'NO_UNREAD_PM' => 'Укылмый калган хәбәрләрегез юк',
'NO_UPLOAD_FORM_FOUND' => 'Файлны download кылуга рөхсәт бирелде, ләкин файл табылмады.',
'NO_USER' => 'Андый кулланучы юк.',
'NO_USERS' => 'Андый кулланучылар юк.',
'NO_USER_SPECIFIED' => 'Кулланучы исеме мәглүм түгел.',

'NUM_POSTS_IN_QUEUE' => array(
'0' => 'Нет сообщений в очереди',
'1' => 'Сообщений в очереди: %d',
),

'OCCUPATION' => 'Һөнәр',
'OFFLINE' => 'Оффлайн',
'ONLINE' => 'Онлайн',
'ONLINE_BUDDIES' => 'Онлайн дуслар',
'ONLINE_USERS_TOTAL' => 'Хәзер ни бары: <strong>%d</strong>керүче: ',
'ONLINE_USERS_ZERO_TOTAL' => 'Хәзер ни бары: <strong>0</strong> керүче: ',
'ONLINE_USER_TOTAL' => 'Хәзер ни бары: <strong>%d</strong> керүче: ',
'OPTIONS' => 'Опциялар (көйләү)',
'PAGE_OF' => '<strong>%2$d</strong> битнең <strong>%1$d</strong>-нчесе',
'PASSWORD' => 'Сер сүз',
'PLAY_QUICKTIME_FILE' => 'QuickTime-файлны уйнатырга',
'PM' => 'шәһс.',
'POSTING_MESSAGE' => 'Форумда хәбәрне калдырырга «%s»',
'POSTING_PRIVATE_MESSAGE' => 'Шәһси хәбәрне языргы',
'POST' => 'Язылган',
'POST_ANNOUNCEMENT' => 'Белдерү',
'POST_STICKY' => 'Ябыштырылды',
'POSTED' => 'Хәбәр язылды',
'POSTED_IN_FORUM' => 'Форумга хәбәр язылды',
'POSTED_ON_DATE' => 'кайчан',
'POSTS' => 'Хәбәрләр',
'POSTS_UNAPPROVED' => 'Ким дигәндә, ошбу темада бер хәбәр тикшерелми калды.',
'POST_BY_AUTHOR' => 'кем:',
'POST_BY_FOE' => 'Бу хәбәрнең авторы - <strong>%1$s</strong>, сезнең “кара биттә” санала. %2$sБу хәбәрне күрсәтергә%3$s.',
'POST_DAY' => 'көненә - %.2f хәбәр',
'POST_DETAILS' => 'Хәбәр мәглүмәте',
'POST_NEW_TOPIC' => 'Яңа теманы башлап җибәрергә',
'POST_PCT' => '%.2f%% хәбәрләрнең бары',
'POST_PCT_ACTIVE' => '%.2f%% кулланучының хәбәрләре',
'POST_PCT_ACTIVE_OWN' => '%.2f%% хәбәрләрегез',
'POST_REPLY' => 'Җавап кайтарырга',
'POST_REPORTED' => 'Шикәятьне карарга',
'POST_SUBJECT' => 'Язма исеме',
'POST_TIME' => 'Язу вакыты',
'POST_TOPIC' => 'Яңа тема',
'POST_UNAPPROVED' => 'Бу хәбәр тикшерүне көтә',
'PREVIEW' => 'Тиз карап алу (Preview)',
'PREVIOUS' => 'Артка',
'PREVIOUS_STEP' => 'Артка',
'PRIVACY' => 'Саклык',
'PRIVATE_MESSAGE' => 'Шәһси хәбәр',
'PRIVATE_MESSAGES' => 'Шәһси хәбәрләр',
'PRIVATE_MESSAGING' => 'Шәһси хәбәрләрләшү',
'PROFILE' => 'Кулланучының көйләү бите',
'READING_FORUM' => 'Форумны карау «%s»',
'READING_GLOBAL_ANNOUNCE' => 'Гөмүми белдерүне уку',
'READING_LINK' => 'Форум сылтамасы буенча күчү «%s»',
'READING_TOPIC' => 'Форумдагы теманы карау «%s»',
'READ_PROFILE' => 'Профиль',
'REASON' => 'Сәбәп',
'RECORD_ONLINE_USERS' => 'Иң күп караучы (<strong>%1$s</strong>) дә булды %2$s',
'REDIRECT' => 'Сылтамадан күчү',
'REDIRECTS' => 'Сылтамадан күчүләр',
'REGISTER' => 'Теркәлү',
'REGISTERED_USERS' => ' Теркәлгән кулланучылар:',
'REG_USERS_ONLINE' => '%d теркәлгән һәм ',
'REG_USERS_TOTAL' => '%d теркәлгән, ',
'REG_USERS_TOTAL_AND' => '%d теркәлгән һәм ',
'REG_USERS_ZERO_ONLINE' => '0 теркәлгән ',
'REG_USERS_ZERO_TOTAL' => '0 теркәлгән ',
'REG_USERS_ZERO_TOTAL_AND' => '0 теркәлгән һәм ',
'REG_USER_ONLINE' => 'Теркәлгән кулланучылар: %d ',
'REG_USER_TOTAL' => '%d теркәлгән, ',
'REG_USER_TOTAL_AND' => 'теркәлгәннәр: %d һәм ',
'REMOVE' => 'Бетерергә',
'REMOVE_INSTALL' => 'Пожалуйста, удалите, переместите или переименуйте папку install прежде, чем начнёте пользоваться конференцией. В противном случае будет доступен только администраторский раздел.',
'REPLIES' => 'Җавап саны',
'REPLY_WITH_QUOTE' => 'Цитаталы җавап',
'REPLYING_GLOBAL_ANNOUNCE' => 'Мөһим белдерүгә җавап кайтару',
'REPLYING_MESSAGE' => 'Форумда җавап кайтару «%s»',
'REPORT_BY' => 'Чыганак',
'REPORT_POST' => 'Шикәять язырга',
'REPORTING_POST' => 'Шикәять язу',
'RESEND_ACTIVATION' => 'Аккаунтны активлаштыру өчен хатны кабат җибәрергә',
'RESET' => 'Кайтарырга',
'RESTORE_PERMISSIONS' => 'Керү хокукымны кайтарырга',
'RETURN_INDEX' => '%sБашбиткә кайтырга%s',
'RETURN_FORUM' => '%sФорумга кайтырга%s',
'RETURN_PAGE' => '%sАлдагы биткә кайтырга%s',
'RETURN_TOPIC' => '%sТемага кайтырга%s',
'RETURN_TO' => 'монда кайт:',
'RULES_ATTACH_CAN' => 'Сез файлларны беркетә <strong>аласыз</strong>',
'RULES_ATTACH_CANNOT' => 'Сез файлларны беркетә <strong>алмыйсыз</strong>',
'RULES_DELETE_CAN' => 'Сез үзегезнең хәбәрләрегезне бетерә <strong>аласыз</strong>',
'RULES_DELETE_CANNOT' => 'Сез үзегезнең хәбәрләрегезне бетерә<strong>алмыйсыз</strong>',
'RULES_DOWNLOAD_CAN' => 'Беркетелгән файлларны беркетелә <strong>аласыз</strong>',
'RULES_DOWNLOAD_CANNOT' => 'Беркетелгән файлларны ала<strong>алмыйсыз</strong>',
'RULES_EDIT_CAN' => 'Сез үзегезнең хәбәрләрегезне үзгәртә <strong>аласыз</strong>',
'RULES_EDIT_CANNOT' => 'Сез үзегезнең хәбәрләрегезне үзгәртә <strong>алмыйсыз</strong>',
'RULES_LOCK_CAN' => 'Сез үзегез башлаган темаларыгызда җавап бирүне туктата <strong>аласыз</strong>',
'RULES_LOCK_CANNOT' => 'Сез үзегез башлаган темаларыгызда җавап бирүне туктата <strong>алмыйсыз</strong>',
'RULES_POST_CAN' => 'Сез яңа темаларны башлап җибәрә <strong>аласыз</strong>',
'RULES_POST_CANNOT' => 'Сез яңа темаларны башлап җибәрә <strong>алмыйсыз</strong>',
'RULES_REPLY_CAN' => 'Хәбәрләргә җавап <strong>яза аласыз</strong>',
'RULES_REPLY_CANNOT' => 'Хәбәрләргә җавап <strong>яза алмыйсыз</strong>',
'RULES_VOTE_CAN' => 'Сез тавыш <strong>бирә аласыз</strong>',
'RULES_VOTE_CANNOT' => 'Сез тавыш <strong>бирә алмыйсыз</strong>',
'SEARCH' => 'Эзләү',
'SEARCH_MINI' => 'Эзләү…',
'SEARCH_ADV' => 'Нечкәлекле эзләү',
'SEARCH_ADV_EXPLAIN' => 'Нечкәлекле эзләүнең көйләве',
'SEARCH_KEYWORDS' => 'Keyword-сүзләр (иң кирәкле сүзләр)',
'SEARCHING_FORUMS' => 'Форумнардагы эзләү',
'SEARCH_ACTIVE_TOPICS' => 'Актив темалар',
'SEARCH_FOR' => 'Эзләргә',
'SEARCH_FORUM' => 'Форумда эзләү…',
'SEARCH_NEW' => 'Яңа хәбәрләр',
'SEARCH_POSTS_BY' => 'Хәбәрләрне эзләргә',
'SEARCH_SELF' => 'Сезнең хәбәрләрегез',
'SEARCH_TOPIC' => 'Темадагы эзләү…',
'SEARCH_UNANSWERED' => 'Җавапсыз хәбәрләр',
'SECONDS' => 'секунд',
'SELECT' => 'Сайлау',
'SELECT_ALL_CODE' => 'Барысын да сайларга',
'SELECT_DESTINATION_FORUM' => 'Форум юнен сайлагыз',
'SELECT_FORUM' => 'Форумны сайлагыз',
'SEND_EMAIL' => 'email-ны җибәрергә',
'SEND_EMAIL_USER' => 'Кулланучыга шәһси хәбәр җибәрергә',
'SEND_PRIVATE_MESSAGE' => 'Шәһси хәбәр җибәрергә',
'SETTINGS' => 'Settings-көйләүләр',
'SIGNATURE' => 'Кул кую',
'SKIP' => 'Уздырырга',
'SMTP_NO_AUTH_SUPPORT' => 'SMTP-сервер аутентифисияны эләктерми.',
'SORRY_AUTH_READ' => 'Бу форумны укыр өчен сез теркәлмәгәнсез.',
'SORRY_AUTH_VIEW_ATTACH' => 'Бу нәрсәне алыр өчен теркәлмәгәнсез.',
'SORT_BY' => 'Сортлау юлы',
'SORT_JOINED' => 'Теркәлү көне',
'SORT_LOCATION' => 'Кайдан:',
'SORT_RANK' => 'Дәрәҗә',
'SORT_TOPIC_TITLE' => 'Теманың исеме',
'SORT_USERNAME' => 'Кулланучының исеме',
'SPLIT_TOPIC' => 'Теманы бүлергә',
'SQL_ERROR_OCCURRED' => 'Бу биттә SQL-хата булып чыкты. Кәрдәшләр, бу хата кабатланса %sадминга%s языгыз.',
'STATISTICS' => 'Статистик',
'START_WATCHING_FORUM' => 'Бу форумны карап барырга (язылырга)',
'START_WATCHING_TOPIC' => 'Бу теманы карап барырга (язылырга)',
'STOP_WATCHING_FORUM' => 'Бу форумны карап барудан туктарга (язылуны туктатырга)',
'STOP_WATCHING_TOPIC' => 'Бу теманы карап барудан туктарга (язылуны туктатырга)',
'SUBFORUM' => 'Кече-форум',
'SUBFORUMS' => 'Кече-форум',
'SUBJECT' => 'Тема исеме',
'SUBMIT' => 'Җибәрергә',
'TERMS_USE' => 'Гөмуми кагыйдә',
'TEST_CONNECTION' => 'Проверить подключение',
'THE_TEAM' => 'Безнең төркем',
'TIME' => 'Вакыт',
'TOO_LONG' => 'Бу язу артык озын булып чыкты.',
'TOO_LONG_AIM' => 'AIM-исеме артык озын булып чыкты.',
'TOO_LONG_CONFIRM_CODE' => 'Confirm-код артык озын булып чыкты.',
'TOO_LONG_DATEFORMAT' => 'Вакыт форматы артык озын булып чыкты.',
'TOO_LONG_ICQ' => 'ICQ-саны (UIN) артык озын булып чыкты.',
'TOO_LONG_INTERESTS' => '”Кызыксыну” юлы артык озын булып чыкты.',
'TOO_LONG_JABBER' => 'Jabber аккаунты артык озын булып чыкты.',
'TOO_LONG_LOCATION' => '«Кайдан» юлы артык озын булып чыкты.',
'TOO_LONG_MSN' => 'MSN/WLM-исеме артык озын булып чыкты.',
'TOO_LONG_NEW_PASSWORD' => 'Язылган сер сүзегез артык озын булып чыкты.',
'TOO_LONG_OCCUPATION' => '«Һөнәр» юлы артык озын булып чыкты.',
'TOO_LONG_PASSWORD_CONFIRM' => 'Сер сүзнең кабат язылышы артык озын булып чыкты.',
'TOO_LONG_USER_PASSWORD' => 'Сер сүз артык озын булып чыкты.',
'TOO_LONG_USERNAME' => 'Кулланучы исеме артык озын булып чыкты.',
'TOO_LONG_EMAIL' => 'email-ны артык озын булып чыкты.',
'TOO_LONG_EMAIL_CONFIRM' => 'email-ны кабат язылышы артык озын булып чыкты.',
'TOO_LONG_WEBSITE' => 'Сайт адресы артык озын булып чыкты.',
'TOO_LONG_YIM' => 'YIM-исеме артык озын булып чыкты.',
'TOO_MANY_VOTE_OPTIONS' => 'Тавыш бирүдә күп вариант сайладыгыз.',
'TOO_SHORT' => 'Бу язу артык кыска булып чыкты.',
'TOO_SHORT_AIM' => 'AIM-исеме артык кыска булып чыкты.',
'TOO_SHORT_CONFIRM_CODE' => 'Confirm-rод артык кыска булып чыкты.',
'TOO_SHORT_DATEFORMAT' => 'Вакыт форматы артык кыска булып чыкты.',
'TOO_SHORT_ICQ' => 'ICQ саны (UIN) артык кыска булып чыкты.',
'TOO_SHORT_INTERESTS' => '”Кызыксыну” юлы артык кыска булып чыкты.',
'TOO_SHORT_JABBER' => 'Jabber аккаунт исеме артык кыска булып чыкты.',
'TOO_SHORT_LOCATION' => '«Кайдан» юлы артык кыска булып чыкты.',
'TOO_SHORT_MSN' => 'MSNM/WLM исеме артык кыска булып чыкты.',
'TOO_SHORT_NEW_PASSWORD' => 'Кертелгән сер сүз артык кыска булып чыкты.',
'TOO_SHORT_OCCUPATION' => '«Һөнәрегез» юлы артык кыска булып чыкты.',
'TOO_SHORT_PASSWORD_CONFIRM' => 'Сер сүзнең кабат язылышы артык кыска булып чыкты.',
'TOO_SHORT_USER_PASSWORD' => 'Сер сүз артык кыска булып чыкты.',
'TOO_SHORT_USERNAME' => 'Кулланучы исеме артык кыска булды.',
'TOO_SHORT_EMAIL' => 'email исеме артык кыска булды.',
'TOO_SHORT_EMAIL_CONFIRM' => 'email-ның кабат язылышы артык кыска булып чыкты.',
'TOO_SHORT_WEBSITE' => 'Сайт адресы артык кыска булып чыкты.',
'TOO_SHORT_YIM' => 'YIM-исем артык кыска.',
'TOPIC' => 'Тема',
'TOPICS' => 'Темалар',
'TOPIC_ICON' => 'Тамга',
'TOPIC_LOCKED' => 'Ошбу тема ябык, сез аны үзгәртә дә, бер-нәрсә яза да алмыйсыз.',
'TOPIC_LOCKED_SHORT' => 'Ябык',
'TOPIC_MOVED' => 'Күчерелгән',
'TOPIC_REVIEW' => 'Теманы күзәтү',
'TOPIC_TITLE' => 'Тема исеме',
'TOPIC_UNAPPROVED' => 'Ошбу тема яраклы итеп табылмады',
'TOTAL_ATTACHMENTS' => 'Attachment(s) ',
'TOTAL_LOG' => '1 лог',
'TOTAL_LOGS' => 'Логлар: %d',
'TOTAL_NO_PM' => 'Бары 0 шәһси хәбәр',
'TOTAL_PM' => 'Бары - 1 Шәһси хәбәр',
'TOTAL_PMS' => 'Бары - %d шәһси хәбәр',
'TOTAL_POSTS' => 'Хәбәрләр (бары)',
'TOTAL_POSTS_OTHER' => 'Хәбәрләр (бары): <strong>%d</strong>',
'TOTAL_POSTS_ZERO' => 'Хәбәрләр (бары): <strong>0</strong>',
'TOPIC_REPORTED' => 'Бу темага шәкыять килде',
'TOTAL_TOPICS_OTHER' => 'Темалар: <strong>%d</strong>',
'TOTAL_TOPICS_ZERO' => 'Темалар: <strong>0</strong>',
'TOTAL_USERS_OTHER' => 'Кулланучылар: <strong>%d</strong>',
'TOTAL_USERS_ZERO' => 'Кулланучылар: <strong>0</strong>',
'TRACKED_PHP_ERROR' => 'PHP-хатларның табылганнары: %s',
'UNABLE_GET_IMAGE_SIZE' => 'Сүрәтнең зурлыгын белеп булмады.',
'UNABLE_TO_DELIVER_FILE' => 'Файлны китереп булмады.',
'UNKNOWN_BROWSER' => 'Мәглүм булмаган браузер',
'UNMARK_ALL' => 'Сайлауны алырга (unselect)',
'UNREAD_MESSAGES' => 'Укылмаган хәбәрләр',
'UNREAD_PM' => 'Укылмаган хәбәрләр: <strong>%d</strong>',
'UNREAD_PMS' => 'Укылмаган хәбәрләр: <strong>%d</strong>',
'UNWATCHED_FORUMS' => 'Сайланган форумнарга бүтән язылмагансыз.',
'UNWATCHED_TOPICS' => 'Сайланган темаларга бүтән язылмагансыз.',
'UNWATCHED_FORUMS_TOPICS' => 'Сайланганга бүтән язылмагансыз.',
'UPDATE' => 'Яңартырга',
'UPLOAD_IN_PROGRESS' => 'Download кылына.',
'URL_REDIRECT' => 'Браузерыгыз автоматик күчә алмаса, %sбу сылтамага басыгыз%s.',
'USERGROUPS' => 'Төркемнәр',
'USERNAME' => 'Кулланучы исеме',
'USERNAMES' => 'Кулланучы исемнәре',
'USER_AVATAR' => 'Кулланучы сүрәте',
'USER_CANNOT_READ' => 'Бу форум хәбәрләрен сез укый алмыйсыз.',
'USER_POST' => '%d хәбәре',
'USER_POSTS' => '%d хәбәре',
'USERS' => 'Кулланучылар',
'USE_PERMISSIONS' => 'Проверить права пользователя',
'VARIANT_DATE_SEPARATOR' => ' / ',
'VIEWED' => 'Караулар:',
'VIEWING_FAQ' => 'FAQ-ны карау',
'VIEWING_MEMBERS' => 'Кулланучылар исемлеген карау',
'VIEWING_ONLINE' => '«Форумда кем бар» сәхифәсен карау',
'VIEWING_MCP' => 'Просмотр модераторского раздела',
'VIEWING_MEMBER_PROFILE' => 'Кулланучының профилен карау',
'VIEWING_PRIVATE_MESSAGES' => 'Шәһси хәбәрләрне карау',
'VIEWING_REGISTER' => 'Регистрация учётной записи',
'VIEWING_UCP' => 'Шәһси бүлекне карау',
'VIEWS' => 'Просмотры',
'VIEW_BOOKMARKS' => 'Кыстыргачларны карарга',
'VIEW_FORUM_LOGS' => 'Логларны карарга',
'VIEW_LATEST_POST' => 'Актык постка күчергә',
'VIEW_NEWEST_POST' => 'Укымаган постларның беренчесенә күчергә',
'VIEW_NOTES' => 'Кулланучы турында хәбәр',
'VIEW_ONLINE_TIME' => 'Соңгы минут эчендә булган кулланучылар активлыгына нигезләнгән',
'VIEW_ONLINE_TIMES' => 'Соңгы %d минут эчендә булган кулланучылар активлыгына нигезләнгән',
'VIEW_TOPIC' => 'Теманы карау',
'VIEW_TOPIC_ANNOUNCEMENT' => 'Белдерү: ',
'VIEW_TOPIC_GLOBAL' => 'Мөһим: ',
'VIEW_TOPIC_LOCKED' => 'Ябык: ',
'VIEW_TOPIC_LOGS' => 'Логларны карау',
'VIEW_TOPIC_MOVED' => 'Күчерелгән: ',
'VIEW_TOPIC_POLL' => 'Сорау алу: ',
'VIEW_TOPIC_STICKY' => 'Ябыштырылган: ',
'VISIT_WEBSITE' => 'Сайтка күчергә',
'WARNINGS' => 'Кисәтүләр',
'WARN_USER' => 'Кисәтеп куерга',
'WELCOME_SUBJECT' => 'Форумга хуш килдегез «%s»',
'WEBSITE' => 'Сайт/сәхифә',
'WHOIS' => 'IP-адрес турында мәглүмәт',
'WHO_IS_ONLINE' => 'Форумда кем бар',
'WRONG_PASSWORD' => 'Сер сүз дөрес түгел.',
'WRONG_DATA_ICQ' => 'Язылган сан - дөрес ICQ-сан түгел.',
'WRONG_DATA_JABBER' => 'Язылган исем - дөрес Jabber-исем түгел.',
'WRONG_DATA_LANG' => 'Тел дөрес күрсәтелмәгән.',
'WRONG_DATA_WEBSITE' => 'Сайт адресы дөрес сылтамалы булырга тиеш, протокол да. Мәсәлән, http://www.misal.com/.',
'WROTE' => 'язды',
'YEAR' => 'Ел',
'YEAR_MONTH_DAY' => '(ЕЕЕЕ-АА-КК)',
'YES' => 'Әйе',
'YIM' => 'YIM',
'YOU_LAST_VISIT' => 'Элек кергәнегез: %s',
'YOU_NEW_PM' => 'Сезгә шәһси хәбәр килде.',
'YOU_NEW_PMS' => 'Сезгә шәһси хәбәрләр килде.',
'YOU_NO_NEW_PM' => 'Сезнең шәһси хәбәрләрегез юк.',

'datetime' => array(
'TODAY' => 'Бүген',
'TOMORROW' => 'Иртәгә',
'YESTERDAY' => 'Кичә',

'AGO' => array(
'0' => '',
'1' => '%d минут элек,
'2' => '%d минут элек,
'5' => '%d минут элек,
'21' => '%d минут элек,
'22' => '%d минут элек,
'25' => '%d минут элек,
'31' => '%d минут элек,
'32' => '%d минут элек,
'35' => '%d минут элек,
'41' => '%d минут элек,
'42' => '%d минут элек,
'45' => '%d минут элек,
'51' => '%d минут элек,
'52' => '%d минут элек,
'55' => '%d минут элек',
'60' => '1 сәгать элек',
),

'Sunday' => 'Якшәмбе',
'Monday' => 'Дүшәмбе',
'Tuesday' => 'Сишәмбе',
'Wednesday' => 'Чәршәмбе',
'Thursday' => 'Пәнҗешәмбе',
'Friday' => 'Җомга',
'Saturday' => 'Шимбә',
'Sun' => 'Як',
'Mon' => 'Дү',
'Tue' => 'Си',
'Wed' => 'Чш',
'Thu' => 'Пҗ',
'Fri' => 'Җм',
'Sat' => 'Ши',
'January' => 'Гыйнварь',
'February' => 'Февраль',
'March' => 'Март',
'April' => 'Апрель',
'May' => 'Май',
'June' => 'Июнь',
'July' => 'Июль',
'August' => 'Август',
'September' => 'Сентябрь',
'October' => 'Октябрь',
'November' => 'Ноябрь',
'December' => 'Декабрь',
'Jan' => 'гыйн',
'Feb' => 'фев',
'Mar' => 'мар',
'Apr' => 'апр',
'May_short' => 'май',
'Jun' => 'июн',
'Jul' => 'июл',
'Aug' => 'авг',
'Sep' => 'сен',
'Oct' => 'окт',
'Nov' => 'ноя',
'Dec' => 'дек',
),


'tz' => array(
'-12' => 'UTC - 12 сәгать',
'-11' => 'UTC - 11 сәгать',
'-10' => 'UTC - 10 сәгать',
'-9.5' => 'UTC - 9:30 сәгать',
'-9' => 'UTC - 9 сәгать',
'-8' => 'UTC - 8 сәгать',
'-7' => 'UTC - 7 сәгать',
'-6' => 'UTC - 6 сәгать',
'-5' => 'UTC - 5 сәгать',
'-4.5' => 'UTC - 4:30 сәгать',
'-4' => 'UTC - 4 сәгать',
'-3.5' => 'UTC - 3:30 сәгать',
'-3' => 'UTC - 3 сәгать',
'-2' => 'UTC - 2 сәгать',
'-1' => 'UTC - 1 сәгать',
'0' => 'UTC',
'1' => 'UTC + 1 сәгать',
'2' => 'UTC + 2 сәгать',
'3' => 'UTC + 3 сәгать',
'3.5' => 'UTC + 3:30 сәгать',
'4' => 'UTC + 4 сәгать',
'4.5' => 'UTC + 4:30 сәгать',
'5' => 'UTC + 5 сәгать',
'5.5' => 'UTC + 5:30 сәгать',
'5.75' => 'UTC + 5:45 сәгать',
'6' => 'UTC + 6 сәгать',
'6.5' => 'UTC + 6:30 сәгать',
'7' => 'UTC + 7 сәгать',
'8' => 'UTC + 8 сәгать',
'8.75' => 'UTC + 8:45 сәгать',
'9' => 'UTC + 9 сәгать',
'9.5' => 'UTC + 9:30 сәгать',
'10' => 'UTC + 10 сәгать',
'10.5' => 'UTC + 10:30 сәгать',
'11' => 'UTC + 11 сәгать',
'11.5' => 'UTC + 11:30 сәгать',
'12' => 'UTC + 12 сәгать',
'12.75' => 'UTC + 12:45 сәгать',
'13' => 'UTC + 13 сәгать',
'14' => 'UTC + 14 сәгать',
'dst' => '[ Летнее время ]',
),


'tz_zones' => array(
'-12' => '[UTC - 12] Вакыт үзгәреш меридианы (запад)',
'-11' => '[UTC - 11] Мидуэй утр., Самоа',
'-10' => '[UTC - 10] Гавай утраулары',
'-9.5' => '[UTC - 9:30] Маркиз утраулары',
'-9' => '[UTC - 9] Аляска',
'-8' => '[UTC - 8] Пасифик (Тыныч дингез) вакыты (АКШ һәм Канада) һәм Тихуана',
'-7' => '[UTC - 7] Аризона',
'-6' => '[UTC - 6] Мехико, Үзәк Әмрикә, Үзәк вакыт (АКШ һәм Канада)',
'-5' => '[UTC - 5] Индиана (көнчыгыш), Көнчыгыш вакыт (АКШ һәм Канада)',
'-4.5' => '[UTC - 4:30] Венесуэла',
'-4' => '[UTC - 4] Каракас, Сантьяго, Атлантик вакыт (Канада)',
'-3.5' => '[UTC - 3:30] Ньюфаундленд',
'-3' => '[UTC - 3] Бразилия, Гренландия',
'-2' => '[UTC - 2] Урта-Атлантик вакыт',
'-1' => '[UTC - 1] Азор утраулары, Яшел Борын утравлары',
'0' => '[UTC] Гринвич вакыты: Дублин, Лондон, Лиссабон, Эдинбург',
'1' => '[UTC + 1] Берлин, Мадрид, Париж, Рим, Көнбатыш Үзәк Африка',
'2' => '[UTC + 2] Афины, Вильнюс, Киев, Минск, Рига, Таллин, Үзәк Африка',
'3' => '[UTC + 3] Казан, Чаллы, Сембер, Сарысу, Хаҗитархан, Нижгар',
'3.5' => '[UTC + 3:30] Тәһран, Шираз, Тәбриз, Нишапур
'4' => '[UTC + 4] Самара, Ижау',
'4.5' => '[UTC + 4:30] Кабул',
'5' => '[UTC + 5] Уфа, Ырынбур, Чиләбе, Екатеринбур, Төмән, Ташкәнд',
'5.5' => '[UTC + 5:30] Бомбей, Калькутта, Мадрас, Нью-Дели',
'5.75' => '[UTC + 5:45] Катманду',
'6' => '[UTC + 6] Алмата, Астана, Новосибирски, Омски',
'6.5' => '[UTC + 6:30] Рангун',
'7' => '[UTC + 7] Бангкок, Красноярск',
'8' => '[UTC + 8] Гонконг, Иркутск, Пекин, Сингапур',
'8.75' => '[UTC + 8:45] Аделаида, Көнбатыш Австралия',
'9' => '[UTC + 9] Токио, Сеул, Чита, Якутск',
'9.5' => '[UTC + 9:30] Дарвин',
'10' => '[UTC + 10] Владивосток, Канберра, Мельбурн, Сидней',
'10.5' => '[UTC + 10:30] Лорд-Хау',
'11' => '[UTC + 11] Магадан, Сахалин, Соломонов утраулары',
'11.5' => '[UTC + 11:30] Норфолк утраулары',
'12' => '[UTC + 12] Камчатка, Яңа Зеландия, Фиджи',
'12.75' => '[UTC + 12:45] Чатем утраулары',
'13' => '[UTC + 13] Феникс утраулары, Тонга',
'14' => '[UTC + 14] Лайн утравы',
),


'dateformats' => array(
'd M Y, H:i' => '10 гыйн 2005, 17:57',
'd M Y H:i' => '10 гыйн 2005 17:57',
'M jS, \'y, H:i' => 'Гыйн 1, \'07, 13:37',
'D M d, Y g:i a' => 'Дү янв 10, 2005 5:57 pm',
'F jS, Y, g:i a' => 'Гыйнвар 1, 2007, 1:37 pm',
'|d M Y|, H:i' => 'Бүген, 13:37 / 01 Гыйн 2007, 13:37',
'|F jS, Y|, g:i a' => 'Бүген, 1:37 pm / Гыйнвар 1, 2007, 1:37 pm',
),

'default_dateformat' => '|d M Y|, H:i',
));

?>