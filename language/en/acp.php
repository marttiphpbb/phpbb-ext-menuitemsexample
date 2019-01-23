<?php
/**
 * phpBB Extension Menu Items Example
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

	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE'
		=> 'Menu Items Example',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_MENUITEMS_NOT_ENABLED'
		=> 'You have to install and enable the "Menu Items"
		Extension (marttiphpbb/menuitems) to enable this functionality.',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SETTING_SAVED'
		=> 'Settings have been saved successfully!',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER'
		=> 'Secret user link placement',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_INTERNAL'
		=> 'Internal link placement',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB'
		=> 'Github link placement',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_EXPLAIN'
		=> 'This extension is just a demonstration of using the "%sMenu Items%s" helper extension.
		With the "priority" setting you can define the order of menu items in the same template event (location).',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMS_EXPLAIN'
		=> 'Place links to the "Menu Items" repository on Github.',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMSEXAMPLE_EXPLAIN'
		=> 'Place links to the "Menu Items Example" repository on Github.',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER_EXPLAIN'
		=> 'This link to the "user-secret" Font Awesome icon
		will only be visible to admins',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SQUARE_EXPLAIN'
		=> 'Place menu links to the "Square" page.',
]);
