<?php
/**
*
* posting [Russian]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'Файл беркетергә',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Файл беркетергә теләмәсәгез, кырларны буш калдырыгыз.',
	'ADD_FILE'					=> 'Файл өстәргә',
	'ADD_POLL'					=> 'Сораштыру өстәргә',
	'ADD_POLL_EXPLAIN'			=> 'Әгәр хәбәрегезгә сораштыру өстәргә теләмәсәгез, кырларны буш калдырыгыз.',
	'ALREADY_DELETED'			=> 'Бу хәбәр бетерелгән инде.',
	'ATTACH_DISK_FULL'							 => 'There is not enough free disk space to post this attachment.',
	'ATTACH_QUOTA_REACHED'		=> 'Файл беркетүнең максималь гомуми үлчәменә ирешелгән.',
	'ATTACH_SIG'				=> 'Имзаны өстәп җибәрергә (имзаны шәхси бүлектә үзгәртеп була)',

	'BBCODE_A_HELP'				=> 'Хәбәр текстына файл өстәргә: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Калын текст: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Код: [code]code[/code]',
	'BBCODE_F_HELP'				=> 'Текст үлчәме: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ӨЗЕП КУЕЛГАН</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>ТОТАШТЫРЫЛГАН</em>',
	'BBCODE_I_HELP'				=> 'Авыш текст: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Исемлек: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Исемлек элементы: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Номерлы исемлек: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Рәсем куярга: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Өземтә: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Текст төсе: [color=red]text[/color] Киңәш: Сез мондый конструкция куллана аласыз: color=#FF0000',
	'BBCODE_U_HELP'				=> 'Астына сызылган текст: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Сылтама куярга: [url]http://url[/url] яки [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'Исемлек: исемлек элементын өстәргә',
	'BBCODE_D_HELP'				=> 'Флэш: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'Соңгы хәбәрегездән соң ук яңа тема ача алмыйсыз. Моны соңрак эшләп карарсыз.',

	'CANNOT_DELETE_REPLIED'		=> 'Гафу итегез, сез җаваплары булмаган хәбәрләрне генә бетерә аласыз.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Бу хәбәр блокланган, аны сез үзгәртә алмыйсыз.',
	'CANNOT_EDIT_TIME'			=> 'Сез бу хәбәрне башка үзгәртә яки бетерә алмыйсыз.',
	'CANNOT_POST_ANNOUNCE'		=> 'Сез белдерү куя алмыйсыз.',
	'CANNOT_POST_STICKY'		=> 'Сез беркетелгән темалар ясый алмыйсыз.',
	'CHANGE_TOPIC_TO'			=> 'Теманы үзгәртергә на',
	'CLOSE_TAGS'				=> 'Тэгларны ябарга',
	'CURRENT_TOPIC'				=> 'Агымдагы тема',

	'DELETE_FILE'				=> 'Файлны бетерергә',
	'DELETE_MESSAGE'			=> 'Хәбәрне бетерергә',
	'DELETE_MESSAGE_CONFIRM'	=> 'Сезнең бу хәбәрне бетерергә теләвегез хакмы?',
	'DELETE_OWN_POSTS'			=> 'Гафу итегез, сез үз хәбәрләрегезне генә бетерә аласыз.',
	'DELETE_POST_CONFIRM'		=> 'Бу хәбәрне бетерергә теләвегез хакмы?',
	'DELETE_POST_WARN'			=> 'Бетерелгән хәбәрне кире кайтарып булмый',
	'DISABLE_BBCODE'			=> 'Бу хәбәрдә BBCode ны өзеп куярга',
	'DISABLE_MAGIC_URL'			=> 'URL адресларын сылтамаларга әйләндермәскә',
	'DISABLE_SMILIES'			=> 'Бу хәбәрдә смайликларны өзеп куярга',
	'DISALLOWED_CONTENT'		=> 'Файлны җибәрү кире кагылды, чөнки файл җибәрү атака мөмкинлеге дип кабул ителде.',
	'DISALLOWED_EXTENSION'		=> '%s киңәйтелеше администратор тарафыннан тыелган.',
	'DRAFT_LOADED'				=> 'Черновик йөкләтелде, хәзер хәбәрне үзгәртүне тәмамлау мөмкинлеге юк.<br />Бу хәбәр җибәрелгәннән соң черновик бетереләчәк.',
	'DRAFT_LOADED_PM'			=> 'Черновик йөкләтелде, шәхси хәбәрне үзгәртүне хәзер тәмамлый аласыз.<br />Бу шәхси хәбәрне җибәргәннән соң черновик бетереләчәк.',
	'DRAFT_SAVED'				=> 'Черновик сакланды.',
	'DRAFT_TITLE'				=> 'Черновикның исеме',

	'EDIT_REASON'				=> 'Хәбәрне үзгәртү сәбәбе',
	'EMPTY_FILEUPLOAD'			=> 'Йөкләтелгән файл буш.',
	'EMPTY_MESSAGE'				=> 'Сез хәбәр текстын кертергә тиешсез',
	'EMPTY_REMOTE_DATA'			=> 'Файлны йөкләтеп булмады, аны кулдан йөкләтеп карагыз, зинһар.',

	'FLASH_IS_OFF'				=> '[flash] <em>ӨЗЕП КУЕЛГАН</em>',
	'FLASH_IS_ON'				=> '[flash] <em>ТОТАШТЫРЫЛГАН</em>',
	'FLOOD_ERROR'				=> 'Сез шунда ук икенче хәбәр җибәрә алмыйсыз. Бераз соңрак җибәреп карагыз, зинһар.',
	'FONT_COLOR'				=> 'Хәреф төсе',
	'FONT_COLOR_HIDE'			=> 'Төсләр панелен ябарга',
	'FONT_HUGE'					=> 'Бик зур',
	'FONT_LARGE'				=> 'Зур',
	'FONT_NORMAL'				=> 'Нормаль',
	'FONT_SIZE'					=> 'Хәреф үлчәме',
	'FONT_SMALL'				=> 'Кечкенә',
	'FONT_TINY'					=> 'Бик кечкенә',

	'GENERAL_UPLOAD_ERROR'		=> 'Беркетелгәнне йөкләтеп булмады: %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>ӨЗЕП КУЕЛГАН</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>ТОТАШТЫРЫЛГАН</em>',
	'INVALID_FILENAME'			=> '%s файлының яраксыз исеме.',

	'LOAD'						=> 'Йөкләтергә',
	'LOAD_DRAFT'				=> 'Черновикны йөкләтергә',
	'LOAD_DRAFT_EXPLAIN'		=> 'Хәбәрне үзгәртүне дәвам итәр өчен сез черновик сайлый аласыз. Сезнең агымдагы хәбәрегез бетереләчәк, хәбәр эчтәлеге югалачак. <br />Сез черновикларны шәхси бүлектә карый, үзгәртә һәм бетерә аласыз.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Бу форумда тема ачу өчен сезгә авторизация үтәргә кирәк.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Бу форумда хәбәрләрне бетерү өчен сезгә авторизация үтәргә кирәк.',
	'LOGIN_EXPLAIN_POST'		=> 'Бу форумда хәбәрләр язу өчен сезгә авторизация үтәргә кирәк.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Бу форумда хәбәрләрдән өземтәләр алу өчен сезгә авторизация үтәргә кирәк.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Бу форумда темаларга җавап бирер өчен сезгә авторизация үтәргә кирәк.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Сез үлчәме %1$d дан зуррак шрифтлардан файдалана алмыйсыз.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Сезнең флэш-файлларыгыз биеклеге %1$d пикс. зуррак булырга тиеш түгел.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Сезнең флэш-файлларыгыз киңлеге %1$d пикс. зуррак булырга тиеш түгел.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Сезнең рәсемнәрегезнең биеклеге %1$d пикс. зуррак булырга тиеш түгел.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Сезнең рәсемнәрегезнең киңлеге зуррак булырга тиеш түгел.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Хәбәрегезнең текстын кертегез. Хәбәрнең символлардагы озынлыгы <strong>%d</strong> нән артык булырга тиеш түгел.',
	'MESSAGE_DELETED'			=> 'Хәбәр бетерелде.',
	'MORE_SMILIES'				=> 'Тагын смайликлар…',

	'NOTIFY_REPLY'				=> 'Миңа җавап турында хәбәр итәргә',
	'NOT_UPLOADED'				=> 'Файлны йөкләтеп булмады.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Сез булган җавап вариантларын бетерә алмыйсыз.',
	'NO_PM_ICON'				=> 'ШХ тамгасы юк',
	'NO_POLL_TITLE'				=> 'Сез сораштыру исемен кертергә тиеш.',
	'NO_POST'					=> 'Хәбәр юк.',
	'NO_POST_MODE'				=> 'Хәбәр режимы күрсәтелмәгән.',

	'PARTIAL_UPLOAD'			=> 'Файл өлешчә генә йөкләтелгән.',
	'PHP_SIZE_NA'				=> 'Беркетелүче файлның үлчәмнәре артык зур.<br />Йөкләтелүче файлларның php.ini да язылган максималь үлчәмен ачыклап булмый.',
	'PHP_SIZE_OVERRUN'			=> 'Беркетелүче файлның үлчәмнәре артык зур.<br />Йөкләтелергә тиешле файлның максималь үлчәме: %1$d %2$s.<br />Бу зурлык php.ini файлында билгеләнгән һәм форум чаралары белән аны зуррак якка үзгәртеп булмый.',
	'PLACE_INLINE'				=> 'Хәбәр текстына өстәргә',
	'POLL_DELETE'				=> 'Сораштыруны бетерергә',
	'POLL_FOR'					=> 'Сораштыру дәвам итәргә тиеш',
	'POLL_FOR_EXPLAIN'			=> 'Сораштыру тәмамланмасын өчен 0 кертегез яки кырны буш калдырыгыз.',
	'POLL_MAX_OPTIONS'			=> 'Җавап вариантлары',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Сораштыру вакытында рөхсәт ителгән җавап вариантлары саны.',
	'POLL_OPTIONS'				=> 'Җавап вариантлары',
	'POLL_OPTIONS_EXPLAIN'		=> 'Һәр җавап вариантын яңа юлга урнаштырыгыз. Вариантларның максималь саны: <strong>%d</strong>.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Һәр җавап вариантын яңа юлга урнаштырыгыз. Вариантларның максималь саны: <strong>%d</strong>. Әгәр сез яңа җавап варианты өстәсәгез яки бетерсәгез, тавыш бирү нәтиҗәләре ноль гә әйләнәчәк.',
	'POLL_QUESTION'				=> 'Сорау',
	'POLL_TITLE_TOO_LONG'		=> 'Сораштыру исеме тамгалары 100 дән кимрәк булырга тиеш.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Сораштыру исеме артык озын, BBCode яки смайликлар санын киметеп карагыз.',
	'POLL_VOTE_CHANGE'			=> 'Җавапны үзгәртергә рөхсәт итәргә.',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Рөхсәт ителсә, кулланучылар үзләренең сораштырудагы җавапларын алыштыра алалар.',
	'POSTED_ATTACHMENTS'		=> 'Публикацияләнгән файллар',
	'POST_APPROVAL_NOTIFY'		=> 'Сезнең хәбәрне хуплавыбыз турында сезгә белдерәчәкбез.',
	'POST_CONFIRMATION'			=> 'Җибәрүне раслау',
	'POST_CONFIRM_EXPLAIN'		=> 'Хәбәрләрне автомат рәвештә урнаштыруны туктату өчен раслаучы код кертергә кирәк. Код түбәндәге рәсемдә күрсәтелгән. Начар күрү яки башка сәбәпләр аркасында рәсемдәге кодны укый алмыйсыз икән, %sадминистратором%s белән бәйләнешкә керегез',
	'POST_DELETED'				=> 'Хәбәр уңышлы бетерелде.',
	'POST_EDITED'				=> 'Хәбәр уңышлы үзгәртелде.',
	'POST_EDITED_MOD'			=> 'Хәбәр уңышлы үзгәртелде, ләкин ул форумда күренсен өчен башта модераторның хуплавы кирәк.',
	'POST_GLOBAL'				=> 'Әһәмиятле',
	'POST_ICON'					=> 'Рәсем (иконка)',
	'POST_NORMAL'				=> 'Гади',
	'POST_REVIEW_EDIT'				=> 'Алдан карап алу',
	'POST_REVIEW_EDIT_EXPLAIN'		=> 'Бу темага кимендә бер хәбәр өстәлгән. Үз хәбәрегезнең эчтәлеген үзгәртергә теләк барлыкка килү ихтималы бар.',
	'POST_STORED'				=> 'Хәбәр уңышлы җибәрелде.',
	'POST_STORED_MOD'			=> 'Хәбәр уңышлы җибәрелде, ләкин ул форумда күренсен өчен башта модераторның хуплавы кирәк.',
	'POST_TOPIC_AS'				=> 'Яңа теманың статусы',
	'PROGRESS_BAR'				=> 'Йөкләү индикаторы',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Хәбәрдә бер - берсенә беркетелгән өземтәләрнең рөхсәт ителгән максималь саны: %1$d.',

	'SAVE'						=> 'Сакларга',
	'SAVE_DATE'					=> 'Соңгы үзгәртү',
	'SAVE_DRAFT'				=> 'Черновикны сакларга',
	'SAVE_DRAFT_CONFIRM'		=> 'Зинһар игътибар итегез, хәбәрнең башы һәм тексты гына саклана, башка барлык элементлары бетерелә.<br />Сез черновикны хәзер сакларга телисезме?',
	'SMILIES'					=> 'Смайликлар',
	'SMILIES_ARE_OFF'			=> 'Смайликлар <em>ӨЗЕП КУЕЛГАН</em>',
	'SMILIES_ARE_ON'			=> 'Смайликлар <em>ТОТАШТЫРЫЛГАН</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Белдерү/ябыштырылган тема өчен вакыт',
	'STICK_TOPIC_FOR'			=> 'Тема ябыштырылачак',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Тема һәрчак белдерү яки ябыштырылган булсын өчен 0 кертегез, яки кырны буш калдырыгыз. Please note that this number is relative to the date of the post.',
	'STYLES_TIP'				=> 'Киңәш: Аерымланган текстка стильләрне бик тиз кулланып була.',

	'TOO_FEW_CHARS'				=> 'Сезнең хәбәрегез артык кыска.',
	'TOO_FEW_CHARS_LIMIT'			  => 'Your message contains %1$d characters. The minimum number of characters you need to enter is %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Сез сораштыруга җавапның кимендә ике вариантын кертергә тиешсез.',
	'TOO_MANY_ATTACHMENTS'		=> 'Беркетергә мөмкин түгел, чөнки хәбәрдә аларның максималь саны: <b>%d</b>',
	'TOO_MANY_CHARS'			=> 'Сезнең хәбәрегез артык озын.',
	'TOO_MANY_CHARS_POST'		=> 'Сезнең хәбәрдә тамгалар артык күп: %1$d. Рөхсәт ителгән сан: %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Сезнең имзагызда тамгалар артык күп: %1$d. Рөхсәт ителгән сан: %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Сез сораштыруда җавап вариантларын артык күп сайладыгыз.',
	'TOO_MANY_SMILIES'			=> 'Сезнең хәбәрегездә смайликлар артык күп. Рөхсәт ителгән сан: %d.',
	'TOO_MANY_URLS'				=> 'Сезнең хәбәрегездә URL сылтамалары артык күп. Рөхсәт ителгән сан: %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Җавап вариантлары артык күп.',
	'TOPIC_BUMPED'				=> 'Тема уңышлы күтәрелде.',

	'UNAUTHORISED_BBCODE'		=> 'Сез кайбер BBCode ларны куллана алмыйсыз: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Теманың статусын әһәмиятледән гадигә әйләндерү өчен сез ул тема яктыртылачак форумны сайларга тиешсез.',
	'UPDATE_COMMENT'			=> 'Комментарийны яңартырга',
	'URL_INVALID'				=> 'Файлның сез күрсәткән адресы яраксыз.',
	'URL_NOT_FOUND'				=> 'Күрсәтелгән файл табылмады.',
	'URL_IS_OFF'				=> '[url] <em>ӨЗЕП КУЕЛГАН</em>',
	'URL_IS_ON'					=> '[url] <em>ТОТАШТЫРЫЛГАН</em>',
	'USER_CANNOT_BUMP'			=> 'Сез бу форумда темалар күтәрә алмыйсыз.',
	'USER_CANNOT_DELETE'		=> 'Сез бу форумда хәбәрләрне бетерә алмыйсыз.',
	'USER_CANNOT_EDIT'			=> 'Сез бу форумда хәбәрләрне үзгәртә алмыйсыз.',
	'USER_CANNOT_REPLY'			=> 'Сез бу форумда хәбәләргә җавап бирә алмыйсыз.',
	'USER_CANNOT_FORUM_POST'	=> 'Сез бу форумда хәбәрләр урнаштыра алмыйсыз. Форумның тибы андый түгел.',

	'VIEW_MESSAGE'				=> '%sСезнең хәбәрләрне карарга%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sСез җибәргән шәхси хәбәрләрне карарга%s',

	'WRONG_FILESIZE'			=> 'Беркетелгән файл үлчәмнәре артык зур.  <br/>Максималь рөхсәт ителгән үлчәм: %1d %2s.',
	'WRONG_SIZE'				=> 'Рәсем үлчәмнәре %1$d×%2$d дан кечкенә һәм %3$d×%4$d дан зур булырга тиеш түгел. Җибәрелгән рәсем үлчәмнәре - %5$d×%6$d. Барлык үлчәмнәр пикселда күрсәтелгәннәр.',
));

?>
