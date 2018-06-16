<?php
/**
 * phpBB extension Menu Items Example
 * @copyright (c) 2018, Martti, https://github.com/marttiphpbb
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

	'MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMS'	=> '"Menu Items" on Github',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMSEXAMPLE'	=> '"Menu Items Example" on Github',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_BATH'		=> 'Bath',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_CIRCLE'	=> 'Circle',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_SQUARE'	=> 'Square',
	'MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER'		=> 'Secret user',
]);
