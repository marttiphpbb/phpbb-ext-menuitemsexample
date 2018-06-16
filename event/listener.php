<?php
/**
 * phpBB extension Menu Items Example
 * @copyright (c) 2018, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace marttiphpbb\menuitemsexample\event;

use phpbb\event\data as event;
use phpbb\controller\helper;
use phpbb\language\language;
use phpbb\auth\auth;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	private $helper;
	private $language;
	private $php_ext;
	private $auth;

	public function __construct(helper $helper, language $language, auth $auth)
	{
		$this->helper   = $helper;
		$this->language = $language;
		$this->auth		= $auth;
	}

	static public function getSubscribedEvents()
	{
		return [
			'core.user_setup'						=> 'core_user_setup',
			'marttiphpbb.menuitems.add_items'		=> 'marttiphpbb_menuitems_add_items',
		];
	}

	public function core_user_setup(event $event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'marttiphpbb/menuitemsexample',
			'lang_set' => 'common',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function marttiphpbb_menuitems_add_items(event $event)
	{
		$items = $event['items'];

		/** The menu items will appear in the order you add them */
		/** Menu items with keys not enabled in the ACP will be ignored */

		$items['marttiphpbb/menuitemsexample'] = [
			'bath'	=> [
				'raw'		=> '<i class="fa fa-bath"></i> ' . $this->language->lang('MARTTIPHPBB_MENUITEMSEXAMPLE_BATH'),
				'link' 		=> $this->helper->route('marttiphpbb_menuitemsexample_controller', ['page' => 'bath']),
			],
			'square'	=> [
				'include'	=> '@marttiphpbb_menuitemsexample/menu/square.html',
				'link'		=> $this->helper->route('marttiphpbb_menuitemsexample_controller', ['page' => 'square']),
				'var'		=> $this->language->lang('MARTTIPHPBB_MENUITEMSEXAMPLE_SQUARE'),
			],
			'circle' => [
				'include'	=> '@marttiphpbb_menuitemsexample/menu/circle.html',
				'link'		=> $this->helper->route('marttiphpbb_menuitemsexample_controller', ['page' => 'circle']),
			],
		];

		/** a menu item only visible for admins */
		if ($this->auth->acl_get('a_'))
		{
			$items['marttiphpbb/menuitemsexample']['secret_user'] = [
				'include'	=> '@marttiphpbb_menuitemsexample/menu/secret_user.html',
				'link'		=> 'https://fontawesome.com/icons/user-secret?style=solid',
			];
		}

		$items['marttiphpbb/menuitemsexample'] += [
			'github_menuitems'	=> [
				'link'   	=> 'https://github.com/marttiphpbb/phpbb-ext-menuitems',
				'include'	=> '@marttiphpbb_menuitemsexample/menu/github.html',
				'var'		=> [
					'lang_key'	=> 'MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMS',
					'color'		=> 'red',
				],
			],
			'github_menuitemsexample'		=> [
				'link'		=> 'https://github.com/marttiphpbb/phpbb-ext-menuitemsexample',
				'include'	=> '@marttiphpbb_menuitemsexample/menu/github.html',
				'var'		=> [
					'lang_key'	=> 'MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB_MENUITEMSEXAMPLE',
					'color'		=> 'darkgreen',
				]
			],
		];

		$event['items'] = $items;
	}
}
