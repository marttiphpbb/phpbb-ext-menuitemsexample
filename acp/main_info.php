<?php
/**
 * phpBB extension Menu Items Example
 * @copyright (c) 2018 - 2019, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace marttiphpbb\menuitemsexample\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\marttiphpbb\menuitemsexample\acp\main_module',
			'title'		=> 'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE',
			'modes'		=> [
				'secret_user'	=> [
					'title'	=> 'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER',
					'auth'	=> 'ext_marttiphpbb/menuitemsexample && acl_a_board',
					'cat'	=> ['ACP_MARTTIPHPBB_MENUITEMSEXAMPLE']
				],
				'internal'	=> [
					'title'	=> 'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_INTERNAL',
					'auth'	=> 'ext_marttiphpbb/menuitemsexample && acl_a_board',
					'cat'	=> ['ACP_MARTTIPHPBB_MENUITEMSEXAMPLE']
				],
				'github'	=> [
					'title'	=> 'ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB',
					'auth'	=> 'ext_marttiphpbb/menuitemsexample && acl_a_board',
					'cat'	=> ['ACP_MARTTIPHPBB_MENUITEMSEXAMPLE']
				],
			],
		];
	}
}
