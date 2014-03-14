<?php
/**
*
* acp_prune [Tatar]
*
* @package language
* @version $Id: prune.php 9933 2009-08-06 09:12:21Z marshalrusty $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Сез монда конференция кулланучыларын бетерә яки сүндерә аласыз. Хисап язмалар төрле ысуллар белән тәртипләнә ала — хәбәрләр саны, соңгы керү вакыты буенча һәм б. к. Билгеләр чистартылачак хисап язмалар санын кыскарту өчен берләштерелә ала. Мәсәлән, сез конференциядән 01.01.2002 елдан соң кермәгән һәм ун хәбәрдән ким кулланучыларны бетерә аласыз. Шулай ук сез кирәкле кулланучыларны текст юлына кулдан кертеп (һәр кулланучыны аерым юлга) тулысынча билгеләр сайлавын үткәрә аласыз. Бу корал белән сак булыгыз — бетергән кулланучыларны торгызып булмый!',

	'DEACTIVATE_DELETE'			=> 'Эшен туктатырга яки бетерергә',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Кулланучыларга карата башкарылачак гамәлне сайлагыз. Онытмагыз, бетерелгән кулланучыларны киредән торгызып булмый!',
	'DELETE_USERS'				=> 'Бетерергә',
	'DELETE_USER_POSTS'			=> 'Хәбәрләрен шулай ук бетерергә',
	'DELETE_USER_POSTS_EXPLAIN' => 'Кулланучылар белән хәбәрләрен бетерә. Кулланучылар эшен туктату сайланса эшләми.',

	'JOINED_EXPLAIN'			=> 'Көнне бу форматта кертегез <kbd>ЕЕЕЕ-АА-КК</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Көнне <kbd>ЕЕЕЕ-АА-КК</kbd> форматында кертегез. Конференциягә беркайчан да кермәгән кулланучыларны чистарту һәм <em>башлап</em> һәм <em>кадәр</em> шартын исәпләмәү өчен <kbd>0000-00-00</kbd> кертегез.',

	'PRUNE_USERS_LIST'				=> 'Чистарту исемлеге',
	'PRUNE_USERS_LIST_DELETE'		=> 'Сайлаган чистарту билгеләре буенча түбәндәге кулланучы хисап язмалары бетереләчәк.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Кертелгән чистарту билгеләре буенча түбәндәге кулланучылар эше туктатылачак.',

	'SELECT_USERS_EXPLAIN'		=> 'Бу кырга билгеле кулланучылар исемен кертегез, бу очракта өстәрәк куелган билгеләр кулланмаячак. Искәрмә: нигез салучылар бетерелә һәм сүндерелә алмый.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Сайлап алынган кулланучылар эше туктатылды.',
	'USER_DELETE_SUCCESS'		=> 'Сайлап алынган кулланучылар бетерелде.',
	'USER_PRUNE_FAILURE'		=> 'Күрсәтелгән билгегә туры килгән кулланучылар юк.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Рөхсәт ителмәгән көн форматы. Көн мондый форматта булырга тиеш <kbd>ЕЕЕЕ-АА-КК</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Язмаган һәм күрсәтелгән көн дәвамында аларны беркем дә карамаган барлык темалар бетереләчәк. Көн санын кертмәсәгез, барлык темалар да бетереләчәк. Сораштырулар дәвам иткән һәм беркетелгән темалар һәм белдерүләр булган темалар килешү буенча бетерелмәячәк.',

	'FORUM_PRUNE'		=> 'Форумнарны чистарту',

	'NO_PRUNE'			=> 'Форумнарны чистарту башкарылмады.',

	'SELECTED_FORUM'	=> 'Форум сайланды',
	'SELECTED_FORUMS'	=> 'Сайланган форумнар',

	'POSTS_PRUNED'					=> 'Хәбәр бетерелде',
	'PRUNE_ANNOUNCEMENTS'			=> 'Белдерүләрне бетерергә',
	'PRUNE_FINISHED_POLLS'			=> 'Тәмамланган сораштыруларны бетерергә',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Сораштырулар тәмамланган темаларны бетерергә.',
	'PRUNE_FORUM_CONFIRM'			=> 'Бетерелгән темалар һәм хәбәрләрне киредән торгызып булмый. Сез сайлаган форумнарны куелган билгеләр буенча чистартырга телисезме?',
	'PRUNE_NOT_POSTED'				=> 'Соңгы хәбәрдән соң көн',
	'PRUNE_NOT_VIEWED'				=> 'Соңгы караудан соң көн',
	'PRUNE_OLD_POLLS'				=> 'Иске сораштыруларны бетерергә',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Сораштыруларында өстәрәк күрсәтелгән көн дәвамында тавыш бирүләр булмаган темаларны бетерергә',
	'PRUNE_STICKY'					=> 'Беркетелгән темаларны бетерергә',
	'PRUNE_SUCCESS'					=> 'Форумнарны чистарту башкарылды',

	'TOPICS_PRUNED'		=> 'Тема бетерелде',
));

?>