<?php
/**
 * phpBB extension Menu Items Example
 * @copyright (c) 2018 - 2019, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'MARTTIPHPBB_MENUITEMSEXAMPLE_PAGE_BATH'	=> 'This is the "Bath" page.',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_PAGE_CIRCLE'	=> 'This is the "Circle" page.',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_PAGE_SQUARE'	=> 'This is the "Square" page.',
]);
