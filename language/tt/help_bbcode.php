<?php
/**
*
* help_bbcode [Tatar]
*
* @package language
* @version $Id: help_bbcode.php 9623 2009-06-18 18:12:28Z nickvergessen $
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
		1 => 'Кереш'
	),
	array(
		0 => 'Нәрсә ул BBCode?',
		1 => 'BBCode — HTML ның махсус варианты. BBCode ны хәбәрләрегездә куллану яки кулланмау мөмкинлен форум администраторы билгели. Моннан тыш, BBCode куллануын үзегез хәбәр җибәргәндә сүндерә аласыз. BBCode рәвеше буенча HTML га охшаган, теглары &lt; һәм &gt; рәвешендә түгел, ә квадрат җәяләр [ һәм ] эченә урнаштырылган һәм хәбәрләргә үзгәрешләр кертү буенча киң мөмкинлекләр бирә. Кайбер форум үрнәкләрен кулланганда, хәбәр текстын кертү кыры өстендә урнашкан гади интерфейстан файдаланып, сез BBCode ны үз хәбәрләрегезгә өсти аласыз. Ләкин бу очракта да бу кулланма файдалы була ала.'
	),
	array(
		0 => '--',
		1 => 'Текстны форматлау'
	),
	array(
		0 => 'Текстны ничек итеп калын хәрефле, авышу яки астына сызылган итеп күрсәтергә?',
		1 => 'BBCode да хәреф рәвешен тиз үзгәртү мөмкинлек бирүче теглар бар, һәм моны түбәндәге ысуллар белән башкарып була: <ul><li>Текст калын булып күренсен өчен аны <strong>[b][/b]</strong> теглары арасына кертеп языгыз, мәсәлән:<br /><br /><strong>[b]</strong>Сәлам<strong>[/b]</strong><br /><br /><strong>Сәлам</strong> булып күренәчәк</li><li>Астына сызу өчен <strong>[u][/u]</strong> тегларын файдаланыгыз, мәсәлән:<br /><br /><strong>[u]</strong>Хәерле иртә<strong>[/u]</strong><br /><br /><span style="text-decoration: underline">Хәерле иртә</span> булып күренәчәк</li><li>Авыш хәрефләр <strong>[i][/i]</strong> теглары белән ясала, мәсәлән:<br /><br />Бу <strong>[i]</strong>бик шәп!<strong>[/i]</strong><br /><br />Бу <i>бик шәп!</i> булып күренәчәк</li></ul>'
	),
	array(
		0 => 'Текст төсен яки зурлыгын ничек үзгәртергә?',
		1 => 'Хәрефнең төсен яки үлчәмнәрен үзгәртү өчен түбәндәге теглар файдаланырга мөмкин (текстның күренеше кулланучының системасы һәм браузерына да бәйле): <ul><li>Текстның төсен үзгәртү өчен аны <strong>[color=][/color]</strong>белән әйләндереп алырга кирәк. Сез төснең исемен (red, blue, yellow һ.б.), яки аның уналтылы санау системасындагы язылышын (мәсәлән #FFFFFF, #000000) кулланып та хәреф төсен үзгәртә аласыз. Шулай итеп, кызыл төстәге текст язу өчен:<br /><br /><strong>[color=red]</strong>Сәлам!<strong>[/color]</strong><br /><br />яки<br /><br /><strong>[color=#FF0000]</strong>Сәлам!<strong>[/color]</strong><br /><br />Ике ысулның да нәтиҗәсе:<span style="color:red">Сәлам!</span></li><li>Үлчәмнәрне үзгәртү болай тормышка ашырыла: <strong>[size=][/size]</strong>. Бу тег файдаланылучы шаблоннарга бәйле, тәкъдим ителүче формат - сан, ул текст үлчәмнәрен 20% тан (бик кечкенә) 200% ка кадәр (бик зур) үзгәртә. Мәсьәлән:<br /><br /><strong>[size=30]</strong>КЕЧКЕНӘ<strong>[/size]</strong><br /><br />менә шундый була <span style="font-size:30%;">КЕЧКЕНӘ</span><br /><br />шул ук вакытта:<br /><br /><strong>[size=200]</strong>БИК ЗУР!<strong>[/size]</strong><br /><br />менә шундый була <span style="font-size:200%;">БИК ЗУР!</span></li></ul>'
	),
	array(
		0 => 'Мин тегларны берләштерә аламмы?',
		1 => 'Әйе, аласыз. Мәсәлән, берәркемнең игътибарын җәлеп итү өчен сез болай яза аласыз:<br /><br /><strong>[size=200][color=red][b]</strong>МИҢА КАРАГЫЗ ӘЛЕ!<strong>[/b][/color][/size]</strong><br /><br />нәтиҗәсе <span style="color:red;font-size:200%;"><strong>МИҢА КАРАГЫЗ ӘЛЕ!</strong></span><br /><br />Без алай итеп озын текстлар язарга тәкъдим итмибез! Сез, хәбәр авторы, тегларның дөрес куелышына игътибарлы булырга тиеш. Менә бу BBCode язмасы, мәсәлән, дөрес түгел:<br /><br /><strong>[b][u]</strong>Бу дөрес түгел<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Өземтәләү һәм форматланган текстларны күрсәтү'
	),
	array(
		0 => 'Җавап биргәндә өземтәләү',
		1 => 'Тексттан өземтә алуның ике ысулы бар: сылтама белән яки сылтамасыз. <ul><li>Хәбәргә җавап биргәндә "Өземтә" төймәсеннән файдалансагыз, өземтә тексты кертү кырына блок белән камалган килеш өстәлә: <strong>[quote=&quot;&quot;][/quote]</strong>. Бу ысул авторга яки текст кертү кырына язган башка нәрсәгә сылтама куеп өземтәләргә ярдәм итәчәк. Мәсәлән, Mr. Blobby язган тексттан өземтә кисәге алу өчен, сез язасыз:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby тексты монда булачак<strong>[/quote]</strong><br /><br />Нәтиҗәдә текст алдына сүзләр куелачак &quot;Mr. Blobby язган иде:&quot;. Исегездә тотыгыз, сез исемне куштырнаклар &quot;&quot; белән тег эченә куярга <strong>тиеш</strong>, аларны төшереп калдырырга ярамый.</li><li>Икенче ысул сезгә нәрсәдән дә булса өземтә алырга ярдәм итә. Моның өчен текстны  <strong>[quote][/quote]</strong> теглары эченә урнаштырырга кирәк. Хәбәрне караганда текст өземтә блогы эчендә күрсәтеләчәк.</li></ul>'
	),
	array(
		0 => 'Код яки форматланган текстны язу',
		1 => 'Программа кисәген яки билгеле киңлектәге хәрефле (Соurier) текст күрсәтергә кирәк булса, сез аны <strong>[code][/code]</strong> теглары эченә урнаштырырга тиеш, мәсәлән <br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> теглары эчендә барлык форматлау кисәкләре сакланачак. php теле синтаксисын аерып күрсәтүне <strong>[code=php][/code]</strong> теглары ярдәмендә кабызып була, бу, җиңел укылышын арттыру өчен, php-кодлы хәбәр җибәргәндә киңәш ителә.'
	),
	array(
		0 => '--',
		1 => 'Исемлекләр төзү'
	),
	array(
		0 => 'Тамгалы исемлек төзү',
		1 => 'BBCode да тамгалы һәм номерлы исемлекләр төзеп була, алар HTML дагы эквивалентларга туры килә. Тамгалы исемлекнең һәр кисәге эзлекле рәвештә чыгарыла, һәрберсе тамга белән билгеләнә. Тамгалы исемлек ясау өчен <strong>[list][/list]</strong> тегларын файдаланыгыз, һәр кисәкне <strong>[*]</strong> ярдәмендә билгеләгез. Мәсәлән, яраткан төсләрне чыгару өчен болай эшләгез:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Кызыл<br /><strong>[*]</strong>Зәңгәр<br /><strong>[*]</strong>Сары<br /><strong>[/list]</strong><br /><br />Бу мондый исемлек бирәчәк:<ul><li>Кызыл</li><li>Зәңгәр</li><li>Сары</li></ul>'
	),
	array(
		0 => 'Номерлы исемлек төзү',
		1 => 'Исемлекнең икенче төре, нумерланганы, һәр элемент алдында нәрсә чыгарылачагын сайларга мөмкинлек бирә. Нумерлы исемлек ясау өчен <strong>[list=1][/list]</strong>, алфавитлы исемлек ясау өчен <strong>[list=a][/list]</strong> тегларыннан файдаланыгыз. Тамгалы исемлекләрдәге кебек үк, исемлек элементлары <strong>[*]</strong> теглары ярдәмендә билгеләнәләр. Мәсьәлән:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Кибеткә барырга<br /><strong>[*]</strong>Яңа компьютер сатып алырга<br /><strong>[*]</strong>Хата киткәч, компьютерны сүгәргә<br /><strong>[/list]</strong><br /><br />шушыны бирәчәк:<ol style="list-style-type: decimal"><li>Кибеткә барырга</li><li>Яңа компьютер сатып алырга</li><li>Хата киткәч, компьютерны сүгәргә</li></ol>Алфавитлы исемлек ясау өчен болай языгыз:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Беренче җавап<br /><strong>[*]</strong>Икенче җавап<br /><strong>[*]</strong>Өченче җавап<br /><strong>[/list]</strong><br /><br />шуны бирәчәк:<ol style="list-style-type: lower-alpha"><li>Беренче җавап</li><li>Икенче җавап</li><li>Өченче җавап</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Сылтамалар ясау'
	),
	array(
		0 => 'Башка сайтка сылтамалар',
		1 => 'BBCode да URL-лар ясауның берничә ысулы бар.<ul><li>Беренчесе <strong>[url=][/url]</strong> тегын куллана,  = тамгасыннан соң тиешле URL языла. Мәсәлән, phpBB.com га сылтаманы болай күрсәтә аласыз:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>phpBB га рәхим итегез!<strong>[/url]</strong><br /><br />Бу язма мондый сылтама барлыкка китерәчәк: <a href="http://www.phpbb.com/">phpBB га рәхим итегез!</a> Сылтама кулланучы браузеры көйләнешләренә бәйле рәвештә шул ук яки яңа тәрәзәдә ачылачагын истә тотыгыз.</li><li>Әгәр сылтама тексты сыйфатында URL ның үзе күренүен теләсәгез, болай эшләргә кирәк:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Бу мондый сылтама бирәчәк: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li> Моннан тыш phpBB ның <i>Автоматик сылтама</i> дигән мөмкинлеге бар, ә бу мөмкинлек синтаксис ягыннан дөрес язылган URL ны http:// префиксы һәм теглар булмаса да, сылтамага әверелдерә. Мәсьәлән хәбәрегезгә www.phpbb.com язмасын кертү хәбәрне караганда автоматик рәвештә <a href="http://www.phpbb.com/">www.phpbb.com</a> ны бирә.</li><li>Бу email адресларына да кагыла, сез адресны тәгаенләп күрсәтә аласыз:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br /><a href="emailto:no.one@domain.adr">no.one@domain.adr</a> булып күренәчәк яки хәбәргә no.one@domain.adr язмасын кертәсез, һәм ул хәбәрне караганда автоматик рәвештә үзгәртелгән булачак.</li></ul>BBCode ның башка теглары белән эшләгәндәге кебек, URL-ларга башка теглар өстәргә була, мәсьәлән: <strong>[img][/img]</strong> (алдагы пунктны кара), <strong>[b][/b]</strong> һ.б. Форматлау теглары белән эшләгәндәге кебек үк, монда да теглер дөрес язылырга тиеш, мәсьәлән:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">дөрес түгел</span>, болай язу хәбәрегезнең бетерелүенә китерергә мөмкин, димәк, пөхтәрәк булыгыз.'
	),
	array(
		0 => '--',
		1 => 'Хәбәрләрдә рәсемнәр күрсәтү'
	),
	array(
		0 => 'Хәбәргә рәсем өстәү',
		1 => 'BBCode ның хәбәрләрегезгә рәсем өстәүче теглары бар. Шуның белән бергә ике әһәмиятле әйберне истә тотарга кирәк: беренчедән, кулланучыларның күпчелеге рәсемнәр күп булуны яратмый, икенчедән, рәсемегез алдан ук Интернетка урнаштырылган булырга тиеш, ягъни рәсем сезнең компьютерда гына булырга тиеш түгел, әгәр ул вебсервер вазыйфасын үтәмәсә. Хәбәрдә рәсем күрсәтү өчен рәсемнең URL ын <strong>[img][/img]</strong>теглары эченә урнаштырырга кирәк.Мәсәлән:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Алдагы пунктта күрсәтелгәнчә, сез рәсемне <strong>[url][/url]</strong> тегларына урнаштыра аласыз, ягъни<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />болай булып күренәчәк:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Хәбәргә файл беркетү',
		1 => 'Хәзер хәбәрнең теләсә кайсы өлешенә BBCode ның яңа <strong>[attachment=][/attachment]</strong> тегы ярдәмендә конференция администраторы рөхсәте һәм сезнең тиешле хокукларыгыз булса, файл өстәп була. Хәбәрләр урнаштыру битендә хәбәргә файллар өстәү өчен ачылучы исемлек (тиешле төймә белән) урнаштырылган.'
	),
	array(
		0 => '--',
		1 => 'Башкалар'
	),
	array(
		0 => 'Мин үз тегларымны өсти аламмы?',
		1 => 'Әгәр сез бу форум администраторы буларак тиешле хокукларга ия булсагыз, BBCode ның яңа тегларын администратор бүлегендә өсти аласыз.'
	)
);

?>