<?php
/**
*
* help_faq [Tatar]
*
* @package language
* @version $Id: help_faq.php 9623 2009-06-18 18:12:28Z nickvergessen $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Конференциягә керү һәм теркәлү'
	),
	array(
		0 => 'Ни өчен мин керә алмыйм?',
		1 => 'Берничә сәбәп булырга мөмкин. Иң беренче кулланучы исемен һәм серсүзне дөрес кертүен тикшерегез. Әгәр мәгълүмат дөрес кертелгән булса, сезгә конференциягә рөхсәт ябык булмавын тикшерү өчен администратор белән бәйләнешкә керергә кирәк. Администратор конференция рәвешен дөрес көйләмәве була ала, көйләүләрне төзәтү өчен аның белән бәйләнешкә керегез.'
	),
	array(
		0 => 'Ни өчен миңа, гомумән, теркәлергә кирәк?',
		1 => 'Сезгә моны эшләмәскә дә мөмкин. Барысы администратор конференцияне ничек көйләгәннән тора: хәбәрләрне урнаштыру өчен теркәлергә яки юк. Әмма шуңа да карамастан, теркәлү сезгә имзасыз кулланучыга бирелмәгән өстәмә мөмкинлекләр бирә: аватарлар, шәхси хәбәрләр, email-хәбәрләр җибәрү, төркемнәргә керү һ.б. Теркәлү берничә минут кына ала, шуңа күрә без аны эшләргә тәкъдим итәбез.'
	),
	array(
		0 => 'Ни өчен миңа вакыт-вакыт исем белән серсүз кертүемне кабатлап торырга кирәк?',
		1 => 'Әгәр сез <em>Һәр ачуда үзе керү</em> юлын билгеләсәгез, конференциядә үз исемегез астында чикләнгән вакыт дәвамында гына кала алачаксыз. Бу башка беркем дә сезнең хисап язмадан файдалана алмасын өчен эшләнә. Кулланучы исеме белән серсүзне һәрвакыт кертмәү өчен сез күрсәтелгән юлны конференциягә кергәндә сайлый аласыз. Китапханә, интернет-кафе, университетта һ.б. шундый урыннарда гомуми мөмкин булган санакларда моны эшләргә киңәш ителми. Әгәр <em>Һәр ачуда үзе керү</em> юлы юк икән, димәк, бу мөмкинлекне администратор сүндергән.'
	),
	array(
		0 => 'Ничек итеп миңа эшлекле кулланучылар исемлегендә күренмәскә?',
		1 => 'Шәхси бүлек көйләүләрендә <em>Минем конференциядә булганымны яшерергә</em> шартын табарсыз. Әгәр <em>Әйе</em> сайласагыз, сез администраторларга, модераторларга һәм үзегезгә генә күренәчәксез. Калганнар өчен сез яшерен кулланучы булачаксыз.'
	),
	array(
		0 => 'Мин серсүзне оныттым!',
		1 => 'Курыкмагыз! Серсүзне кире кайтарып булмаса да, яңаны алу бик җиңел. Конференциягә керү битенә күчеп, <em>Серсүзне оныттыгызмы?</em> сылтамасына чиртегез. Күрсәтмәләрне үтәп барыгыз һәм тиздән сез конференциягә керә алачаксыз.'
	),
	array(
		0 => 'Мин яңа гына теркәлдем, ләкин керә алмыйм!',
		1 => 'Башта үзегезнең исем һәм серсүзне тикшерегез. Әгәр алар дөрес булса, ике төрле вариант булырга мөмкин. Әгәр СОРРА куллану кабызылган һәм теркәлү вакытында сез үзегезне 13 яшьтән кечерәк итеп күрсәткән булсагыз, күрсәтмәләрне үтәп барыгыз. Кайбер конференцияләрдә яңа хисап язмалары системага кергәнче кулланучы яки администратор тарафыннан эшләтелергә тиеш. Бу мәгълүмат теркәлү барышында күрсәтелә. Әгәр сезгә email-хәбәр килгән булса, алынган күрсәтмәләрне үтәгез. Әгәр email-хәбәр алмасагыз, бәлки, сез ялгыш email адресы күрсәткәнсез яки ул хәбәр спам-сөзгече белән тыелган. Әгәр дөрес email адресны күрсәткәнгә шикләнмәсәгез, администратор белән элемтәгә чыгып карагыз.'
	),
	array(
		0 => 'Мин күптән теркәлдем, ләкин бүтән керә алмыйм!',
		1 => 'Ниндидер сәбәп өчен администратор сезнең хисап язма эшен туктаткан яки бетергән булуы мөмкин. Моның өстәвенә, күп кенә конференцияләр мәгълүмат нигезе күләмен киметү өчен озак вакыт хәбәрләр калдырмаган кулланучыларны бетерә. Әгәр шулай булса, яңадан теркәлеп карагыз һәм бәхәсләрдә күбрәк катнашыгыз.'
	),
	array(
		0 => 'Нәрсә ул COPPA?',
		1 => 'COPPA (Child Online Privacy and Protection Act), яки интернетта баланың шәхси хокукларын яклау Акты (1998 елдан) - 13 яшьтән кечерәк, балигъ булмаган балалар турында мәгълүматы җыя алу өчен бу сәхифәләрдән моңа ата-аналарның язма рөхсәтен таләп итүче Кушма Штатлар кануны. 13 яше тулмаган балигъ булмаганнардан шәхси мәгълүматны җыярга опекуннар рөхсәт биргән башка төрле раслау язмасы да ярый. Әгәр бу сезгә конференциядә теркәлүче буларак, яки конференциянең үзенә кагылганлыгына ышанып бетмәсәгез, хокук киңәшчесенә ярдәм сорап мөрәҗәгать итегез. Игътибар итегез, phpBB Group хокук мәсьәләләре буенча киңәшләр бирми һәм түбәндә күрсәтелгәннәрдән тыш юридик мөнәсәбәтләр әйбере булып тормый.<br /><strong>Тәрҗемәче искәрмәсе: Рәсәйдә бу актның юридик көче юк.</strong>',
	),
	array(
		0 => 'Ни өчен мин теркәлә алмыйм?',
		1 => 'Форум администраторы сезнең IP-адресны тыйган яки сез теркәлү алдыннан керткән исемне тыйган була ала. Ул шулай ук яңа кулланучылар теркәлүен сүндерә ала. Ярдәм артыннан конференция администраторына мөрәҗәгать итегез.',
	),
	array(
		0 => '«Форумның cookies-ын бетерергә» мөмкинлеге нәрсә ул?',
		1 => 'Ул сезгә бу конференциядә рөхсәт алып кергән кулланучы булып калырга ярдәм итүче cookies ны бетерә, шулай ук, администратор кабызган булса, укылган хәбәрләрне күзәтеп тору кебек башка мөмкинлекләрне дә башкара. Әгәр форумга керү һәм чыгу вакытында кыенлыклар кичерсәгез, cookies ны бетерү сезгә ярдәм итә алуы мөмкин.',
	),
	array(
		0 => '--',
		1 => 'Кулланучы шартлары һәм көйләүләре'
	),
	array(
		0 => 'Ничек миңа көйләүләремне үзгәртергә?',
		1 => 'Әгәр сез теркәлгән кулланучы булсагыз, сезнең барлык көйләүләр конференциянең мәгълүмат нигезендә саклана. Аларны үзгәртү өчен <em>Шәхси бүлеккә</em> күчегез, аңа сылтама битнең өске өлешендә урнашкан. Анда сез үзегезнең барлык көйләүләрне үзгәртә аласыз.'
	),
	array(
		0 => 'Конференциядә вакыт дөрес түгел!',
		1 => 'Бәлки, анда сез урнашканныкы түгел, ә башка сәгать өлкәсе вакыты күрсәтеләдер. Бу очракта шәхси бүлек көйләүләрендә сәгать өлкәсен сез урнашканга үзгәртегез: Казан, Яр Чаллы, Мәскәү һ.б. Исәпкә алыгыз, күпчелек көйләүләрне, шул исәптән сәгать өлкәсен теркәлгән кулланучылар гына үзгәртә ала. Әгәр теркәлмәгән булсагыз, моны эшләү өчен хәзер уңайлы вакыттыр.  '
	),
	array(
		0 => 'Мин сәгать өлкәсен үзгәрттем, ләкин вакыт барыбер дөрес түгел!',
		1 => 'Сәгать өлкәсен һәм җәйге вакыт көйләвен дөрес күрсәткәннән шикләнмәсәгез, ләкин вакыт һаман да дөрес күрсәтелмәсә, димәк, вакыт серверда дөрес урнаштырылмаган. Проблеманы хәл итү өчен администраторга хәбәр итегез.'
	),
	array(
		0 => 'Исемлектә минем телем юк!',
		1 => 'Администратор конференциядә сезнең телне урнаштырмаган, яки phpBB сезнең телгә тәрҗемә ителмәгәндер. Конференция администраторыннан сезгә кирәкле тел төргәген урнаштыра алу-алмавын белешеп карагыз. Әгәр андый төргәк булмаса, сез үзегез   phpBB ны үз телегезгә тәрҗемә итә аласыз. Өстәмә мәгълүматны phpBB сәхифәсеннән алып була (аңа сылтама конференция битләренең аскы өлешендә урнашкан.)'
	),
	array(
		0 => 'Ничек мин исемем янына сурәт урнаштырыйм?',
		1 => 'Кулланучы исеме янында ике сурәт була ала. Аларның берсе сезнең дәрәҗәне күрсәтә, гадәттә болар йолдызчыклар, шакмакчыклар яки нокталар, алар сезнең ничә хәбәр язуыгыз яки сезнең конференциядәге халәткә бәйле. Икенчесе, ул гадәттә зуррагы, "аватар" дип билгеле һәм һәр кулланучы өчен үзенә генә хас була. Аватарны урнаштыру һәм нинди аватарлар кулланып булу мөмкинлеге администраторга бәйле. Әгәр аватар куллана алмасагыз, сәбәпләрен ачыклау өчен администраторга мөрәҗәгать итегез.'
	),
	array(
		0 => 'Нәрсә ул дәрәҗә һәм аны мин ничек үзгәртә алам?',
		1 => 'Сезнең исемегез астында күрсәтелгән дәрәҗәләр сезнең хәбәрләрегез санына бәйле, яки алар аерым кулланучыларны: мәсәлән, модератор һәм администраторларны белдерә. Гадәттә, конференциядә сез дәрәҗә исемнәрен турыдан-туры үзгәртә алмыйсыз, чөнки алар администратор тарафыннан билгеләнә. Зинһар, үз дәрәҗәгезне күтәрү өчен конференцияне кирәксез хәбәрләр белән чүпләмәгез. Күпчелек форумнарда бу тыелган, һәм модератор яки администратор сезнең хәбәрләр санавычы мәгънәсен киметәчәк.'
	),
	array(
		0 => 'Миннән «email» сылтамасына баскач, конференциягә керүемне таләп итәләр!',
		1 => 'Конференциягә урнаштырылган форма аша теркәлгән кулланучылар гына башка кулланучыларга email-хәбәрләр җибәрә ала, һәм бу мөмкинлекне администратор кабызган булырга тиеш. Бу почта системасын имзасыз кулланучылар артык күп кулланмасын өчен эшләнелгән.'
	),
	array(
		0 => '--',
		1 => 'Хәбәрләр ясау'
	),
	array(
		0 => 'Ничек миңа форумда тема ясарга?',
		1 => 'Яңа теманы ясау өчен форум яки тема тәрәзәсендәге туры килгән төймәгә басыгыз. Хәбәрне җибәрү алдыннан, сезгә теркәлергә кирәк булуы мөмкин. Сезнең керү рөхсәте исемлеге форум яки теманың аскы өлешендә күрсәтелгән. Мәсәлән: «Темаларны ясый аласыз», «Сораштыруларда тавыш бирә аласыз» һ.б.к.'
	),
	array(
		0 => 'Ничек миңа хәбәремне төзәтергә яки бетерергә?',
		1 => 'Әгәр сез конференция администраторы яки модераторы булмасагыз, сез үзегезнең хәбәрләрегезне генә төзәтә һәм бетерә аласыз. Туры килгән хәбәрне төзәтергә күчү өчен <em>Төзәтү</em> төймәсенә басыгыз, кайбер чакта ясаганнан соң чикләнгән вакытка гына. Әгәр хәбәргә берәрсе җавап бирсә, аның астында төзәтүләр санын һәм соңгы төзәтү вакытын һәм көнен күрсәткән кечкенә генә язма барлыкка килә. Бу язма хәбәрне администратор яки модератор төзәтсә барлыкка килми, ләкин алар үзгәртүләр турында үз ихтыяры буенча яза ала. Игътибарга алыгыз, гади кулланучылар хәбәргә берәрсе җавап бирсә аны бетерә алмый.'
	),
	array(
		0 => 'Ничек миңа хәбәргә имзамны өстәргә?',
		1 => 'Хәбәргә имза өстәү өчен, сез аны башта шәхси бүлектә ясарга тиеш. Шуннан соң хәбәрләр җибәрү формасында имза өстәлсен өчен <em>Имзаны өстәп җибәрү</em> кырын билгели аласыз. Сез шулай ук имзаны барлык сезнең хәбәрләргә килешү буенча өстәү өчен шәхси бүлектә «Шәхси көйләүләр» башламының «Хәбәрләр җибәрү» өлешендә көйли аласыз. Шуңа карамастан, сез кайбер хәбәрләргә имзаны өстәвен кире кага аласыз, шуның өчен хәбәр җибәрү формасында <em>Имзаны өстәп җибәрү</em> кырыннан билгене алыгыз.'
	),
	array(
		0 => 'Сорау алуны ничек ясарга?',
		1 => 'Тема ясаганда яки теманың беренче хәбәрен төзәткәндә кыстыргычка басыгыз яки хәбәрне ясау өчен төп форма астындагы <em>Сораштыру өстәргә</em> формасына күчегез, кулланылган стильгә бәйле; әгәр сез андый кыстыргычны яки форманы күрмәсәгез - сезнең сораштыру ясарга хокукыгыз юк. Теманы һәм минимум ике җавап вариантын туры килгән кырларда кертегез, һәрбер вариант текст юлының аерым кырында булырга тиеш. Сез шулай ук тавыш биргәндә кулланучылар сайлый алган вариантлар санын «Җаваплар варианты» шарты аша, сораштыру дәвамлыгын, көннәрдә (0 - сораштыру даими барачакны аңлата) һәм кулланучылар тавыш биргән җавап вариантын үзгәртү мөмкинлеген билгели аласыз.'
	),
	array(
		0 => 'Ни өчен мин күбрәк җавап вариантын өсти алмыйм?',
		1 => 'Җавапларның вариант санының чиген конференция администраторы урнаштыра. Әгәр сезгә бу чикләүне арткан вариант санын өстәргә кирәк булса, конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ничек миңа сорау алуны төзәтергә яки бетерергә?',
		1 => 'Хәбәрләрне кебек үк сораштыруларны ясаучылары, модераторлар яки администраторлар гына төзәтә ала. Сораштыруны төзәтү өчен теманың беренче хәбәрен төзәтергә күчегез; сораштыру гел аның белән бәйле. Әгәр беркем дә тавыш бирергә җитешмәсә, сез сораштыруны бетерә яки җавапның һәр вариантын төзәтә аласыз. Әмма әгәр берәркем тавыш бирсә, модераторлар яки администраторлар гына сораштыруны төзәтә яки бетерә ала. Бу тавыш бирү вакытында җавап вариантларын үзгәртеп булмасын өчен эшләнелгән.'
	),
	array(
		0 => 'Ни өчен миңа кайбер форумнар мөмкин түгел?',
		1 => 'Кайбер форумнар кайбер кулланучыларга яки кулланучылар төркеменә генә ачык. Ул форумнарны карау, аларда темалар ясау, хәбәрләр җибәрү һәм башка гамәлләр ясау өчен сезгә өстәмә рөхсәт кирәк була ала. Андый рөхсәт алу өчен конференция модераторы яки администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ни өчен мин өстәүләр куша алмыйм?',
		1 => 'Өстәүләр кушу хокукы форум, төркем яки кулланучы дәрәҗәсендә бирелә. Конференция администраторы өстәүләрне кушу мөмкинлеген билгеле форумнарда рөхсәт итә ала. Шулай ук өстәүләр кушу кайбер төркем әгъзаларына гына рөхсәт ителгән булу мөмкин. Әгәр сез ни өчен өстәүләр куша алмаганын белмәсәгез, конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ни өчен миңа кисәтү җибәрделәр?',
		1 => 'Һәрбер конференциядә администраторлар үзләренең кагыйдәләр тәртибен урнаштыра. Әгәр сез кагыйдәне бозсагыз, аның өчен кисәтү ала аласыз. Игътибарга алыгыз, бу карар конференция администраторыныкы, һәм бу сәхифәдә чыгарылган кисәтүләргә phpBB Group бернинди дә катнашы юк. Әгәр сез ни өчен кисәтү алганны белмәсәгез, конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ничек миңа модераторга хәбәр турында шикаять язарга?',
		1 => 'Һәрбер хәбәр янында аңа шикаять җибәрү өчен, әгәр конференция администраторы рөхсәт иткән булса, сез төймә күрерсез. Ул төймәгә басып, сез хәбәргә шикаять җибәрү өчен берничә адым узарсыз.'
	),
	array(
		0 => 'Хәбәрне ясаганда «Сакларга» төймәсе нәрсә аңлата?',
		1 => 'Бу төймә хәбәрләрне саклап, төгәлләп һәм аларны соңрак җибәрү өчен. Сакланган хәбәрне йөкләү өчен шәхси бүлекнең «Караламалар» өлешенә керегез.'
	),
	array(
		0 => 'Ни өчен минем хәбәрне расларга кирәк?',
		1 => 'Конференция администраторы хәбәрне форумга җибәрү алдыннан карап алырга кирәк карарына килә ала. Тагын шулай ук администратор сезне хәбәрләр җибәрү алдан каралырга тиеш булган кулланучылар төркеменә үз карары буенча кертүе мөмкин. Тулырак мәгълүмат алу өчен конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ничек миңа теманы тагын күтәрергә?',
		1 => 'Теманы караганда «Теманы күтәрергә» сылтамасына баскач, сез аны форумның беренче битенең өске өлешенә «күтәрә» аласыз. Әгәр килеп чыкмаса, темаларны күтәрү мөмкинлеге сүнгән яки теманы кабат күтәрүгә бирелгән вакыт әле үтмәгән. Теманы анда җавап бирсәң, күтәреп була, әмма шулай итеп сез конференция кагыйдәләрен бозмаганын тикшерегез.'
	),
	array(
		0 => '--',
		1 => 'Хәбәрләрне төзәтү һәм ясалучы темаларның төрләре'
	),
	array(
		0 => 'Нәрсә ул BBCode?',
		1 => 'BBCode — махсус HTML башкаруы, ул хәбәрләрнең кайбер кисәкләрен төзәтүдә күбрәк мөмкинлек бирә. BBCode куллану мөмкинлеге администратор белән билгеләнә, әмма BBCode шулай ук хәбәрләрне җибәрү формасында сүндерелгән булырга мөмкин. BBCode HTML бик охшаган, ләкин анда теглар шакмаклы җәяләргә кушылган [ һәм ], ә &lt; һәм &gt; түгел. BBCode буенча өстәмә мәгълүмат артыннан BBCode җитәкчелегенә мөрәҗәгать итегез, аңа сылтама хәбәрләр җибәрү формасында бар.'
	),
	array(
		0 => 'HTML ны куллана аламмы?',
		1 => 'Юк. Бу конференциядә хәбәрләрдә HTML-кодны җибәрү һәм эшкәртү мөмкин түгел. Хәбәрләрне үзгәртү буенча HTML күп мөмкинлеге BBCode кулланып эшләтелә.'
	),
	array(
		0 => 'Нәрсә ул смайликлар?',
		1 => 'Смайликлар яки эмотиконнар — кечкенә рәсемнәр, аларны хисләрне күрсәтү өчен кулланып була, мәсәлән :) шатлыкны аңлата, ә :( кайгыны. Смайликларның тулы исемлеген хәбәрләр ясау формасында күреп була. Ләкин аларны кулланып артыгыннан тырышмагыз: алар бик тиз хәбәрне укымаслык итә ала, һәм модератор сезнең хәбәрне төзәтә яки гомумән бетерә ала. Конференция администраторы шулай ук хәбәрләрдә кулланып булган смайликлар санын чикли ала.'
	),
	array(
		0 => 'Хәбәрләргә мин сурәтләр өсти аламмы?',
		1 => 'Әйе, сез хәбәрләрдә сурәтләр урнаштыра аласыз. Әгәр администратор өстәүләр беркетергә рөхсәт иткән булса, сез конференциягә сурәтләр йөкли аласыз. Юк икән, сез гомуми мөмкин булган веб серверда саклаган сурәткә сылтама күрсәтергә тиеш. Сылтама мисалы: http://www.example.com/my-picture.gif. Сез сезнең санакта урнашкан (әгәр ул гомуми мөмкин сервер булмаса) һәм керү өчен чынлыкны тикшерү кирәк булган сәхифәләрдәге сурәтләргә сылтама күрсәтә алмыйсыз, мәсәлән: Hotmail яки Yahoo почта тартмалары, серсүз белән сакланган сәхифәләр һәм б. к. Сурәтләргә сылтамалар күрсәтү өчен хәбәрләрдә BBCode [img] тегын кулланыгыз.'
	),
	array(
		0 => 'Нәрсә ул мөһим белдерүләр?',
		1 => 'Бу белдерүләрдә мөһим мәгълүмат бар, һәм сез аны мөмкин булганда укып чыгарга тиеш. Алар һәр форум һәм сезнең шәхси бүлекнең өстендә чыга. Мөһим белдерүләр ясау хокукы конференция администраторы белән бирелә.'
	),
	array(
		0 => 'Нәрсә ул белдерүләр?',
		1 => 'Сез хәзерге вакытта урнашкан форум белдерүләрдә күп очракта мөһим мәгълүмат була, һәм сез аларны мөмкин булганда укып чыгарга тиеш. Белдерүләр алар ясалган һәр форум битендә өстә күрсәтелә. Мөһим белдерүләр кебек үк, белдерүләр ясау хокукы администратор белән бирелә.'
	),
	array(
		0 => 'Нәрсә ул беркетелгән темалар?',
		1 => 'Форумда беркетелгән темалар барлык белдерүләр астында урнашкан һәм беренче биттә генә. Аларда күп очракта җитәрлек мөһим мәгълүмат була, шуңа күрә сез аларны мөмкин булганда укып чыгарга тиеш. Белдерүләр кебек үк, беркетелгән темалар ясау хокукы конференция администраторы белән бирелә.'
	),
	array(
		0 => 'Нәрсә ул ябык темалар?',
		1 => 'Бу темаларда кулланучылар бүтән яза алмый һәм анда булган сораштырулар үзләре туктатыла. Темалар форум модераторы яки конференция администраторы тарафыннан төрле сәбәпләр өчен ябылырга мөмкин. Сез дә шулай ук, конференция администраторы сезгә нинди хокуклар бирүгә карап, үзегез ясаган темаларны яба аласыз.'
	),
	array(
		0 => 'Нәрсә ул темалар билгечекләре?',
		1 => 'Темалар билгечекләре - авторлар белән сайланган сурәтләр, алар хәбәрләргә бәйле һәм хәбәр эчтәлеген чагылдыра. Темалар билгечекләрен куллану мөмкинлеге конференция администраторы урнаштырган рөхсәткә бәйле.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Кулланучылар дәрәҗәсе һәм төркемнәр'
	),
	array(
		0 => 'Кем ул администраторлар?',
		1 => 'Администраторлар — югары дәрәҗәдәге конференция артыннан тикшерү хокукы бирелгән кулланучылар. Алар конференциянең барлык эш карашлары белән идарә итә, шулардан керү хокукын чикләү, кулланучыларны сүндерү, кулланучы төркемнәрен ясау, модераторларны билгеләү һ.б.к. аларга конференция ясаучылар биргән хокукларга бәйле. Алар шулай ук модераторларның барлык мөмкинлекләренә барлык форумнарда ия, конференция ясаучысы көйләүләр башкаруга бәйле.'
	),
	array(
		0 => 'Кем ул модераторлар?',
		1 => 'Модераторлар — көн дә форумнар артыннан күзәтеп торган кулланучылар (яки кулланучылар төркеме). Алар җавап биргән форумнарда хәбәрләрне төзәтә яки бетерә, темаларны яба, ача яки берләштерә ала. Модераторларның төп бурычы — фикерләшкән темаларда эчтәлек туры килмәвен (оффтопик) һәм мыскыллауны булдырмау.'
	),
	array(
		0 => 'Нәрсә ул кулланучылар төркеме?',
		1 => 'Кулланучылар төркемнәре берләшмәне төзелеш өлешләренә бүлә, алар белән конференция администраторлары идарә итә. Һәр кулланучы берничә төркемгә керә ала, һәм һәр төркемдә шәхси керү рөхсәте билгеләнә ала. Бу администраторларга бер үк вакытта күп санлы кулланучыларга керү рөхсәтен билгеләүне җиңеләйтә, мәсәлән, модератор хокукларын үзгәртү яки кулланучыларга хосусый форумнарга рөхсәт бирү.'
	),
	array(
		0 => 'Кайда төркемнәр урнашкан һәм ничек миңа анда керергә?',
		1 => 'Барлык булган төркемнәр турында мәгълүматны шәхси бүлектә «Төркемнәр» сылтамасыннан ала аласыз. Әгәр берәр төркемгә керәсегез килсә, туры килгән сылтамага басыгыз. Әмма һәр төркем дә гомуми ачык түгел. Кайберләренә керү өчен хуплау кирәк, алар ябык һәм яшерен дә була ала. Әгәр төркем гомуми ачык булса, сез анда әгъзалык сорау өчен туры килгән төймәгә баса аласыз. Әгәр төркемдә катнашу өчен хуплау кирәк булса, туры килгән төймәгә басып, керүгә сорау җибәрә аласыз. Төркем җитәкчесе сезнең катнашуны хупларга тиеш була һәм ни өчен кушылырга теләгәнегезне сорый ала. Зинһар, әгәр төркем җитәкчесе сезнең сорауны кире кайтарса, аны борчымагыз; аның моның өчен үз сәбәпләре була ала.'
	),
	array(
		0 => 'Ничек миңа төркем җитәкчесе булырга?',
		1 => 'Төркем җитәкчесе төркем ясалганда конференция администраторы белән билгеләнә. Әгәр сезнең төркем ясарга ниятегез булса, администратор белән элемтәгә шәхси хәбәр җибәреп чыгыгыз.'
	),
	array(
		0 => 'Ни өчен кайбер төркемнәрнең исеме төрле төстә?',
		1 => 'Конференция администраторы төркем әгъзаларына аларны бер-берсеннән аеру җиңел булсын өчен төс бирә ала.'
	),
	array(
		0 => 'Нәрсә ул килешү буенча төркем?',
		1 => 'Әгәр сез бер төркемнән артык төркемдә торсагыз, килешү буенча төркемегез нинди төркем төсе һәм дәрәҗә сезгә бирелергә тиеш икәнен билгеләү өчен кулланыла. Конференция администраторы шәхси бүлектә сезгә килешү буенча төркемне үзгәртергә рөхсәт бирә ала.'
	),
	array(
		0 => '«Безнең төркем» сылтамасы нәрсә аңлата?',
		1 => 'Бу биттә сез конференция администраторлары һәм модераторлары исемлеген һәм башка мәгълүматны, мәсәлән алар тикшергән форумнар турында белешмәләр табарсыз.'
	),
	array(
		0 => '--',
		1 => 'Шәхси хәбәрләр'
	),
	array(
		0 => 'Мин шәхси хәбәрләр җибәрә алмыйм!',
		1 => 'Бу өч сәбәп өчен була ала: сез теркәлмәгәнсез һәм/яки конференциягә кермәгәнсез, администратор бөтен конференциядә шәхси хәбәрләрне җибәрергә тыйган яки администратор сезгә үзе аны тыйган. Өстәмә мәгълүмат алу өчен конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Мин һәрвакыт теләмәгән шәхси хәбәрләр алам!',
		1 => 'Сез шәхси бүлектәге кагыйдәләрне кулланып, кулланучыга сезгә шәхси хәбәрләр җибәрергә тыя аласыз. Әгәр сез билгеле бер кулланучыдан мыскыллаулы шәхси хәбәрләр алсагыз, конференция администраторына хәбәр итегез; ул кулланучыга шәхси хәбәрләр җибәрүен тыя ала.'
	),
	array(
		0 => 'Мин кемнәндер бу конференциядә спам яки мыскыллы email алдым!',
		1 => 'Без аның турында кызганабыз. Бу конференциядә email җибәрү формасына моңа охшаган хәбәрләрне җибәрүче кулланучылар артыннан күзәтеп тору һәм саклык чаралары керә. Конференция администраторына алынган хатның тулы күчермәсе белән email-хәбәрне җибәрегез. Барлык җибәрүче турындагы тулы мәгълүмат булган башламнарны кертү мөһим. Конференция администраторы бу очракта барлык чараларны башкарачак.'
	),
	array(
		0 => '--',
		1 => 'Дуслар һәм дошманнар'
	),
	array(
		0 => 'Дуслар һәм дошманнар исемлеге нәрсә аңлата?',
		1 => 'Сез бу исемлекләргә башка конференция кулланучыларын өсти аласыз. Дуслар исемлегенә өстәлгән кулланучылар, сезнең шәхси бүлектә аларның челтәрдә булуы турындагы мәгълүматка тиз рөхсәт алу һәм аларга шәхси хәбәрләр җибәрү өчен күрсәтелгән. Әгәр конференция стиле белән кулланса, бу кулланучылардан хәбәрләр шулай ук аерыла ала. Әгәр сез кулланучыны дошманнар исемлегенә өстәсәгез, ул җибәргән барлык хәбәрләр килешү буенча күрсәтелмәячәк.'
	),
	array(
		0 => 'Ничек миңа дуслар яки дошманнар исемлегенә кулланучыларны өстәргә/бетерергә?',
		1 => 'Кулланучыларны дуслар исемлегенә ике ысул белән өсти аласыз. Һәр кулланучы рәвешендә аны дуслар яки дошманнар исемлегенә өстәү өчен сылтама бар. Моннан тыш, сез аны шәхси бүлектән дә турыдан туры кулланучы исемен кертеп башкара аласыз. Кулланучыларны шулай ук туры килгән исемлектән шул ук биттән бетерә аласыз.'
	),
	array(
		0 => '--',
		1 => 'Форумнардан эзләү'
	),
	array(
		0 => 'Ничек миңа форумнан яки форумнардан эзләүне башкарырга?',
		1 => 'Конференциянең баш битендә, форумны яки теманы карау битендә урнашкан кырга эзләү шартларын кертегез. Сез киңәйтелгән эзләүне, конференциянең һәр битендә мөмкин булган, «Киңәйтелгән эзләү» сылтамасына басып башкара аласыз. Эзләүгә рөхсәт ысулы кулланылган стильгә бәйле була ала.'
	),
	array(
		0 => 'Ни өчен минем эзләү нәтиҗә бирми?',
		1 => 'Сезнең эзләү соравы артык билгесез һәм күп гомуми шартлардан торуы ихтимал, алардан phpBB3 эзләү башкармый. Төгәлрәк эзләү өчен киңәйтелгән эзләү мөмкинлеген кулланыгыз.'
	),
	array(
		0 => 'Мин эзләү нәтиҗәсендә буш битне алдым!',
		1 => 'Сезнең эзләү артык күп нәтиҗә китерде һәм аларны веб-сервер эшкәртә алмады. «Киңәйтелгән эзләү» кулланыгыз, төгәлрәк эзләү шартларын һәм эзләү башкарылачак форумнарны билгеләгез.'
	),
	array(
		0 => 'Ничек миңа конференция кулланучысын табарга?',
		1 => '«Кулланучылар» битенә күчәргә һәм «Кулланучыны табарга» басарга.'
	),
	array(
		0 => 'Ничек миңа үз хәбәрләремне һәм темаларымны табарга?',
		1 => 'Сез үзегезнең хәбәрләрне яки баш биттәге «Хәбәрләрегез» сылтамасына яки шәхси бүлектәге «Кулланучы хәбәрләрен табарга» сылтамасына басып таба аласыз. Сез ясаган темаларны киңәйтелгән эзләү битен кулланып, эзләү өчен туры килгән таләпләрне тутырып таба аласыз.'
	),
	array(
		0 => '--',
		1 => 'Кыстыргычлар һәм темаларга язылу'
	),
	array(
		0 => 'Нәрсә белән кыстыргычлар язылудан аерыла?',
		1 => 'phpBB3 кыстыргычлары күбрәк сезнең веб-браузер кыстыргычларына охшаган. Булган үзгәрешләр турында сезгә белдермәячәкләр, ләкин сез темага соңрак кайта аласыз. Әмма язылгач, сез конференция темасында яки форумда булган үзгәрешләр турындагы белдерүләрне сезгә уңайлы ысул яки ысуллар белән алачаксыз.'
	),
	array(
		0 => 'Ничек миңа билгеле бер темага яки форумга язылырга?',
		1 => 'Билгеле форумга язылу өчен аңа кереп «Форумга язылырга» сылтамасына басыгыз. Темага язылу өчен җавапны җибәргәндә тиешле билгене куегыз яки теманы карау битендә «Темага язылырга» сылтамасына басыгыз.'
	),
	array(
		0 => 'Ничек миңа язылудан баш тартырга?',
		1 => 'Язылуны туктату өчен шәхси бүлеккә керегез һәм «Язылулар» сылтамасына басыгыз.'
	),
	array(
		0 => '--',
		1 => 'Өстәүләр'
	),
	array(
		0 => 'Нинди өстәүләр бу конференциядә рөхсәт ителгән?',
		1 => 'Һәр конференция администраторы билгеле төрдәге өстәүләрне рөхсәт итә һәм итмәскә мөмкин. Әгәр сез нинди өстәүләр рөхсәт ителүен белмәсәгез, ярдәм алу өчен конференция администраторы белән элемтәгә чыгыгыз.'
	),
	array(
		0 => 'Ничек миңа өстәүләремне табарга?',
		1 => 'Сез кушкан өстәмәләр исемлеген табу өчен шәхси бүлеккә керегез һәм «Өстәүләр» сылтамасына басыгыз.'
	),
	array(
		0 => '--',
		1 => 'phpBB3 турында мәгълүмат'
	),
	array(
		0 => 'Кем бу конференцияне язды?',
		1 => 'Бу программа тәэминатын (аның башлангыч формасында) <a href="http://www.phpbb.com/">phpBB Group</a> ясады һәм тарата. Ул GNU General Public Licence шартларында рөхсәт ителгән һәм ирекле таратыла ала. Күбрәк белешмә алу өчен күрсәтелгән сылтамага керегез.'
	),
	array(
		0 => 'Ни өчен монда андый мөмкинлек юк?',
		1 => 'Бу программа тәэминаты phpBB Group белән ясалды һәм хокукланды. Әгәр сез берәр мөмкинлек өстәлергә тиеш яки хата турында хәбәр итәсегез килсә, phpBB сәхифәсенә керегез <a href="http://area51.phpbb.com/">Area51</a> һәм ничек аны эшләргә икәнен белегез.'
	),
	array(
		0 => 'Бу конференциягә бәйле нәзакатсез куллану һәм/яки юридик сораулар буенча кем белән элемтәгә чыгып була?',
		1 => 'Сез һәрбер «Безнең төркем» исемлеге битендәге администратор белән элемтәгә чыга аласыз. Әгәр сез җавап алмасагыз домен хуҗасына (<a href="http://www.google.com/search?q=whois">whois lookup</a> башкарыгыз) яки, әгәр конференция түләүсез доменда урнашса (мәсәлән, chat.ru, Yahoo!, free.fr, f2s.com һ.б.к.), әлеге доменның җитәкчелегенә яки техярдәмгә мөрәҗәгать итегез. Игътибарга алыгыз, phpBB Group <strong>бу конференция өстеннән бернинди дә күзәтү алып бармый</strong> һәм бу конференция кем һәм нәрсә өчен кулланганына җаваплы түгел. <strong>Турыдан-туры</strong> phpBB.com сәхифәсенә бәйле булмаган яки phpBB Group программа тәэминатына өлешчә бәйле булган юридик сораулар буенча phpBB Group мөрәҗәгать итмәгез (конференция эшен туктату, аның өчен җаваплылык өчен һ.б.к.). Әгәр сез шулай да phpBB Group адресына бу конференцияне <strong>өченче як белән</strong> куллану турында email җибәрсәгез, тулы хатны көтмәгез яки гомумән сез җавап алмаска мөмкин.'
	)
);

?>