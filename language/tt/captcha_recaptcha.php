<?php
/**
*
* recaptcha [Tatar]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
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
	'RECAPTCHA_LANG'				=> 'tt',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha куллану өчен бу сәхифәдә хисап язма ясарга кирәк <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Күрсәтелгән раслауның коды дөрес түгел',

	'RECAPTCHA_PUBLIC'				=> 'Ачык reCaptcha ачкычы (Public Key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Сезнең ачык reCaptcha ачкычы. Ачкычларны бу сәхифәдә алып була <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Ябык reCaptcha ачкычы (Private Key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Сезнең ябык reCaptcha ачкычы. Ачкычларны бу сәхифәдә алып була <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Форманы үзе җибәрүне булдырмау өчен түбәндәге текст кырына ике күрсәтелгән сүзне дә кертегез.',
));

?>