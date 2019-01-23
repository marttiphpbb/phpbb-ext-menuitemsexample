<?php
/**
 *
 * Menu Items Example. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018 - 2019, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace marttiphpbb\menuitemsexample;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$config = $this->container->get('config');

		return phpbb_version_compare($config['version'], '3.2.5', '>=')
			&& version_compare(PHP_VERSION, '7.1', '>=');
	}
}
