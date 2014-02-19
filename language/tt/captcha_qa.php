<?php
/**
*
* captcha_qa [Tatar]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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

//кери. http://forum.belem.ru/index.php?showtopic=274&pid=7469&st=50&#entry7469

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Текстлы раслау',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Бу сорау спам-ботлар форманы үзләре җибәрүенә каршы билгеләнгән.',
	'CONFIRM_QUESTION_WRONG'	=> 'Сез сорауга дөрес җавап бирмәдегез.',

	'QUESTION_ANSWERS'			=> 'Җаваплар',
	'ANSWERS_EXPLAIN'			=> 'Сорауга дөрес җаваплар кертегез. Һәр җавапны аерым юлга кертегез.',
	'CONFIRM_QUESTION'			=> 'Сорау',

	'ANSWER'					=> 'Җавап',
	'EDIT_QUESTION'				=> 'Сорауны төзәтү',
	'QUESTIONS'					=> 'Сораулар',
	'QUESTIONS_EXPLAIN'			=> 'Текстлы раслау кабызылган форманы җибәргәндә, кулланучыга монда күрсәтелгән бер сорау биреләчәк. Бу модульне куллану өчен килешү буенча телдә бер дә булса сорау урнаштырылган булырга тиеш. Бу сораулар сезнең аудитория булырга мөмкин кешеләргә җиңел, әмма шул ук вакытта ботка, Google™ эзләве аша җавапны таба алган, катлаулы булырга тиеш. Күп һәм еш үзгәртелгән сораулар җыелмасын куллану яхшы нәтиҗәләргә китерә. Сезнең сорауга җавап тыныш билгеләренә, буш урынга яки билгеләр регистрына бәйле булса, төгәл тикшерүне кабызыгыз.',
	'QUESTION_DELETED'			=> 'Сорау бетерелде',
	'QUESTION_LANG'				=> 'Тел',
	'QUESTION_LANG_EXPLAIN'		=> 'Бу сорау һәм аңа җавап язылган тел.',
	'QUESTION_STRICT'			=> 'Төгәл тикшерү',
	'QUESTION_STRICT_EXPLAIN'	=> 'Кабызылган булса, җавапларны тикшергәндә билгеләр регистры, тыныш билгеләре һәм буш урыннар исәпләнәчәк.',

	'QUESTION_TEXT'				=> 'Сорау',
	'QUESTION_TEXT_EXPLAIN'		=> 'Кулланучыга биреләчәк сорау.',

	'QA_ERROR_MSG'				=> 'Һәр кырны тутырыгыз һәм кимендә бер җавап кертегез.',
 	'QA_LAST_QUESTION'			=> 'Конференциядә текстлы раслау кулланылган булып сайланганда барлык сорауларны бетереп булмый.',

));

?>