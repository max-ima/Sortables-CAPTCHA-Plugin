<?php
/**
*
* sortables captcha [English]
*
* @package language
* @version $Id: captcha_sortables.php 9875 2009-08-13 21:40:23Z Derky $
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2009 Derky - phpBB3styles.net
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
	'CAPTCHA_SORTABLES'				=> 'Sortables CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Please drag the options with the mouse to the correct list, to avoid automated registrations.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Please select the options below to the correct list to avoid automated registrations.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'You have incorrectly sorted the items to the correct list of the confirmation question.',

	'QUESTION_ANSWERS'			=> 'Answers',
	'ANSWERS_EXPLAIN'			=> 'The options for this column. Please write one option per line.',
	'CONFIRM_QUESTION'			=> 'Question',

	'EDIT_QUESTION'				=> 'Edit Question',
	'QUESTIONS'					=> 'Sortable Lists Questions',
	'QUESTIONS_EXPLAIN'			=> 'Here you can add and edit questions to be asked on registration. You have to provide at least one question in the default board language to use this plugin. Questions should be easy for your target audience. The users will see all the options in one column and have to sort them to the correct column. Also, remember to change the questions regularly.',
	'QUESTION_DELETED'			=> 'Question deleted',
	'QUESTION_LANG'				=> 'Language',
	'QUESTION_LANG_EXPLAIN'		=> 'The language this question and its options is written in.',
	'QUESTION_SORT'				=> 'Default sort list',
	'QUESTION_SORT_EXPLAIN'		=> 'In which column should all the answers display by default.',
	
	'SORT_LEFT'					=> 'Left column',
	'SORT_RIGHT'				=> 'Right column',
	'COLUMN_NAME_LEFT'			=> 'Column name',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Like: Things I need',
	'COLUMN_NAME_RIGHT'			=> 'Column name',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Like: Things I don\'t need',

	'QUESTION_TEXT'				=> 'Question',
	'QUESTION_TEXT_EXPLAIN'		=> 'Explain how the options should be sorted in the columns.',

	'SORTABLES_ERROR_MSG'		=> 'Please fill out all fields and enter at least one option for both columns.',
));

?>