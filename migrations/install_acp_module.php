<?php
/**
 *
 * Menu Items Example. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018 - 2019, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace marttiphpbb\menuitemsexample\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE',
			]],
			['module.add', [
				'acp',
				'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE',
				[
					'module_basename'	=> '\marttiphpbb\menuitemsexample\acp\main_module',
					'modes'				=> ['secret_user', 'internal', 'github'],
				],
			]],
		];
	}
}
