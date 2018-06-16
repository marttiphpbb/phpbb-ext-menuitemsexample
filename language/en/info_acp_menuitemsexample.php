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

	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE'				=> 'Menu Items Example',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER'	=> 'Secret User link',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_INTERNAL'		=> 'Internal links',
	'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB'		=> 'Github links',

]);
