<?php
/**
*
* acp_profile [Tatar]
*
* @package language
* @version $Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Өстәмә кыр рәвешкә өстәлде.',
	'ALPHA_ONLY'			=> 'Хәрефле-санлы гына',
	'ALPHA_SPACERS'			=> 'Хәрефле-санлы һәм бүлгечләр генә',
	'ALWAYS_TODAY'			=> 'Гел хәзерге вакыт',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Мөмкин булган вариантларны кертегез',
	'BOOL_TYPE_EXPLAIN'		=> 'Сайлау вариантлары күренеше: байракчык яки күчергеч. Байракчык әлеге кулланучыга билгеләнгән булса гына күрсәтеләчәк. Бу очракта <strong>икенче</strong> тел шарты кулланылачак. Күчергечләр аларның халәтләренә бәйсез күрсәтеләчәк.',

	'CHANGED_PROFILE_FIELD'		=> 'Рәвеш кыры үзгәртелде.',
	'CHARS_ANY'					=> 'Һәртөрле',
	'CHECKBOX'					=> 'Байракчык',
	'COLUMNS'					=> 'багана',
	'CP_LANG_DEFAULT_VALUE'		=> 'Килешү буенча мәгънә',
	'CP_LANG_EXPLAIN'			=> 'Кыр тасвирламасы',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Кулланучыга күрсәтелгән кырга күрсәтү бирү',
	'CP_LANG_NAME'				=> 'Кулланучыга күрсәтелгән кыр/башлам исеме',
	'CP_LANG_OPTIONS'			=> 'Вариантлар:',
	'CREATE_NEW_FIELD'			=> 'Яңа кыр өстәргә',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Кимендә бер рәвеш кыры әле тәрҗемә ителмәгән. Кирәк булган мәгълүматны «Тәрҗемә» сылтамасына күчеп кертегез.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Килешү буенча тел [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Кыр рәвеше өчен килешү буенча үзгәрмәләр тутырылмаган.',
	'DEFAULT_VALUE'					=> 'Килешү буенча мәгънә',
	'DELETE_PROFILE_FIELD'			=> 'Рәвеш кырын бетерү',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Бу кырны бетерергә телисезме?',
	'DISPLAY_AT_PROFILE'			=> 'Шәхси бүлектә',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Кулланучы кыр мәгънәсен шәхси бүлектә үзгәртә ала.',
	'DISPLAY_AT_REGISTER'			=> 'Теркәлү формасында',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Кабызылган булса, кырны теркәлгәндә тутырып була.',
	'DISPLAY_ON_VT'					=> 'Тема битләрендә',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Бу шартны кабызганда кыр темалар битендә аватарлар астында күрсәтеләчәк.',
	'DISPLAY_PROFILE_FIELD'			=> 'Кырны барысы өчен күрсәтергә',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Рәвеш кыры серверга төялеш көйләүләрендә рөхсәт ителгән урында күрсәтеләчәк. Әгәр «Юк» мәгънәсе куелган булса, бу кыр темалар, рәвешләр, кулланучылар исемлеген караганда яшереләчәк.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Җавап вариантларын юлга берешәр итеп кертегез',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Исәпкә алыгыз, сез сайлау вариантлары текстын үзгәртә һәм исемлек ахырына яңа вариантлар өсти аласыз. Булган вариантлар арасында яңаны өстәргә тәкъдим ителми, чөнки кулланучылар рәвешендә башка сайлау вариантлары булачак. Бу шулай ук сез исемлек уртасыннан вариантны бетерсәгез булачак. Исемлек ахырыннан вариантны бетергәч, бу вариантны сайлаган кулланучылар рәвешендә вариант килешү буенчага үзгәрәчәк.',
	'EMPTY_FIELD_IDENT'				=> 'Сез кыр тиңләштергечен кертмәдегез',
	'EMPTY_USER_FIELD_NAME'			=> 'Кыр/башлам исемен кертегез',
	'ENTRIES'						=> 'Мәгънә',
	'EVERYTHING_OK'					=> 'Барысы да тәртиптә',

	'FIELD_BOOL'				=> 'Логик кыр (Әйе яки Юк)',
	'FIELD_DATE'				=> 'Заман',
	'FIELD_DESCRIPTION'			=> 'Кыр тасвирламасы',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Кулланучыга күрсәтелгән кырга күрсәтү бирү',
	'FIELD_DROPDOWN'			=> 'Ачылучы исемлек',
	'FIELD_IDENT'				=> 'Кыр тиңләштергече',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Мондый тиңләштергеч белән кыр бар инде. Башка тиңләштергеч кертегез.',
	'FIELD_IDENT_EXPLAIN'		=> 'Мәгълүмат нигезендә һәм үрнәк файлларында билгеләү өчен кыр атамасы.',
	'FIELD_INT'					=> 'моның саны',
	'FIELD_LENGTH'				=> 'Кертү кыры зурлыгы',
	'FIELD_NOT_FOUND'			=> 'Кыр табылмады.',
	'FIELD_STRING'				=> 'Бер юллы текст кыры',
	'FIELD_TEXT'				=> 'Күп юллы текст кыры',
	'FIELD_TYPE'				=> 'Кыр төре',
	'FIELD_TYPE_EXPLAIN'		=> 'Сез кыр төрен үзгәртә алмыйсыз.',
	'FIELD_VALIDATION'			=> 'Рөхсәт ителгән билгеләр',
	'FIRST_OPTION'				=> 'Беренче вариант',

	'HIDE_PROFILE_FIELD'			=> 'Яшерен кыр',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Кыр кулланучыдан, администраторлардан һәм модераторлардан кала барысыннан да яшерелгән. Әгәр Шәхси бүлектә кырны күрсәтү шарты сүндерелгән булса, кулланучы аны күрә һәм үзгәртә алмаячак, аны администраторлар гына башкара алачак.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Кыр тиңләштергечендә латин юл хәрефләре һәм  _ (аскы ассызык билгесе) була ала',
	'INVALID_FIELD_IDENT_LEN'	=> 'Кыр тиңләштергече 17 билгедән озынрак була алмый',
	'ISO_LANGUAGE'				=> 'Тел [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Тел өчен көйләүләр [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Максималь билге саны',
	'MAX_FIELD_NUMBER'		=> 'Максималь рөхсәт ителгән сан',
	'MIN_FIELD_CHARS'		=> 'Минималь билге саны',
	'MIN_FIELD_NUMBER'		=> 'Минималь рөхсәт ителгән сан',

	'NO_FIELD_ENTRIES'			=> 'Мөмкин булган сайлау вариантлары билгеләнмәгән',
	'NO_FIELD_ID'				=> 'Кыр тиңләштергече күрсәтелмәгән.',
	'NO_FIELD_TYPE'				=> 'Кыр төре күрсәтелмәгән.',
	'NO_VALUE_OPTION'			=> 'Әһәмиятсез вариант',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Кыр тутыру мәҗбүри һәм бу вариант сайланган булса, кулланучыга хата турында хәбәр чыгарыла',
	'NUMBERS_ONLY'				=> 'Саннар гына (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Гомуми көйләүләр',
	'PROFILE_FIELD_ACTIVATED'	=> 'Рәвеш кыры кабызылды.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Рәвеш кыры сүндерелде.',
	'PROFILE_LANG_OPTIONS'		=> 'Тел шартлары',
	'PROFILE_TYPE_OPTIONS'		=> 'Кыр күренешен көйләү',

	'RADIO_BUTTONS'				=> 'Күчергечләр',
	'REMOVED_PROFILE_FIELD'		=> 'Рәвеш кыры бетерелде.',
	'REQUIRED_FIELD'			=> 'Мәҗбүри кыр',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Кулланучыга кырны тутырырга яки мәгънәне чыгарырга кирәк. Кыр теркәлгәндә шәхси бүлектә мөмкин.',
	'ROWS'						=> 'юл',

	'SAVE'							=> 'Cакларга',
	'SECOND_OPTION'					=> 'Икенче вариант',
	'SHOW_NOVALUE_FIELD'			=> 'Әһәмиятсез вариант сайланган булса, кырны күрсәтергә',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Әгәр мәҗбүри булмаган юлга әһәмиятсез вариант сайланган булса, яки мәҗбүри юлга мәгънә сайланмаган булганда кыр рәвеше күрсәтелүен билгели.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Сез монда яңа рәвеш кырының төп шартларын кертә алачаксыз. Бу мәгълүмат икенче адым өчен кирәк, анда сез калган көйләүләрне урнаштыра, киләчәк кырны алдан карый һәм кирәк булса, үзгәртүләр кертә алачаксыз.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Сез монда яңа юл рәвеше шартларын үзгәртә аласыз. Икенче адымда туры килгән мәгънәләр киредән саналачак һәм сез үзгәргән көйләүләрне карый һәм тикшерә алачаксыз.',
	'STEP_1_TITLE_CREATE'			=> 'Рәвешкә кыр өстәү',
	'STEP_1_TITLE_EDIT'				=> 'Рәвеш кырын төзәтү',
	'STEP_2_EXPLAIN_CREATE'			=> 'Сез монда киләчәк юл өчен гомуми көйләүләр билгели аласыз. Аннары кулланучыга ясалган кыр ничек күренәчәген карап булачак. Көйләүләрне кыр эшләве сезне канәгатьләндергәнгә кадәр үзгәртегез.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Сез монда булачак юлның гомуми көйләүләрне үзгәртә аласыз. <br /><strong>Исәпкә алыгыз, бу үзгәртүләр кулланучы тутырган булган кыр рәвешләренә тәэсир итә алмый.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Кыр күренешен көйләү',
	'STEP_2_TITLE_EDIT'				=> 'Кыр күренешен көйләү',
	'STEP_3_EXPLAIN_CREATE'			=> 'Чөнки конференциядә бер телдән артык тел урнаштырылган, шуңа күрә башка телләр өчен мәгълүматны кертергә кирәк. Кыр исеме, күрсәтмә һәм башлангыч мәгънә килешү буенча телдә күрсәтеләчәк. Башка телләр үзгәрмәләрен соңрак кертеп булачак.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Чөнки конференциядә бер телдән артык тел урнаштырылган, шуңа күрә сез башка телләр өчен мәгълүматны үзгәртә яки өсти аласыз. Кыр исеме, күрсәтмә һәм башлангыч мәгънә килешү буенча телдә күрсәтеләчәк.',
	'STEP_3_TITLE_CREATE'			=> 'Башка телләрнең тел үзгәрмәләре',
	'STEP_3_TITLE_EDIT'				=> 'Тел билгеләмәләре',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Кырда килешү буенча күрсәтелгән юлны кертегез. Кырны буш калдырырга теләсәгез юлны кертмәгез.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Килешү буенча кырда күрсәтелгән текстны кертегез. Кырны буш калдырасыгыз килсә, текстны кертмәгез.',
	'TRANSLATE'						=> 'Тәрҗемә итәргә',

	'USER_FIELD_NAME'	=> 'Кулланучыга күрсәтелгән кыр/башлам исеме',

	'VISIBILITY_OPTION'				=> 'Кыр күренеше',
));

?>