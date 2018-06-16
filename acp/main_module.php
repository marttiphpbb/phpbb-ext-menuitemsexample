<?php
/**
 * phpBB extension Menu Items Example
 * @copyright (c) 2018, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace marttiphpbb\menuitemsexample\acp;

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $phpbb_container;

		$language = $phpbb_container->get('language');
		$language->add_lang('acp', 'marttiphpbb/menuitemsexample');

		$request = $phpbb_container->get('request');
		$template = $phpbb_container->get('template');
		$ext_manager = $phpbb_container->get('ext.manager');

		add_form_key('marttiphpbb/menuitemsexample');

		switch($mode)
		{
			case 'secret_user':

				if (!$ext_manager->is_enabled('marttiphpbb/menuitems'))
				{
					trigger_error('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_MENUITEMS_NOT_ENABLED', E_USER_WARNING);
				}

				$menuitems_acp = $phpbb_container->get('marttiphpbb.menuitems.acp');

				$this->tpl_name = 'secret_user';
				$this->page_title = $language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SECRET_USER');

				if ($request->is_set_post('submit'))
				{
					if (!check_form_key('marttiphpbb/menuitemsexample'))
					{
						trigger_error('FORM_INVALID', E_USER_WARNING);
					}

					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'secret_user');

					trigger_error($language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SETTING_SAVED') . adm_back_link($this->u_action));
				}

			break;

			case 'internal':

				if (!$ext_manager->is_enabled('marttiphpbb/menuitems'))
				{
					trigger_error('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_MENUITEMS_NOT_ENABLED', E_USER_WARNING);
				}

				$menuitems_acp = $phpbb_container->get('marttiphpbb.menuitems.acp');

				$this->tpl_name = 'internal';
				$this->page_title = $language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_INTERNAL');

				if ($request->is_set_post('submit'))
				{
					if (!check_form_key('marttiphpbb/menuitemsexample'))
					{
						trigger_error('FORM_INVALID', E_USER_WARNING);
					}

					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'circle');
					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'square');
					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'bath');

					trigger_error($language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SETTING_SAVED') . adm_back_link($this->u_action));
				}

			break;

			case 'github':

				if (!$ext_manager->is_enabled('marttiphpbb/menuitems'))
				{
					trigger_error('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_MENUITEMS_NOT_ENABLED', E_USER_WARNING);
				}

				$menuitems_acp = $phpbb_container->get('marttiphpbb.menuitems.acp');

				$this->tpl_name = 'github';
				$this->page_title = $language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_GITHUB');

				if ($request->is_set_post('submit'))
				{
					if (!check_form_key('marttiphpbb/menuitemsexample'))
					{
						trigger_error('FORM_INVALID', E_USER_WARNING);
					}

					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'github_menuitems');
					$menuitems_acp->process_form('marttiphpbb/menuitemsexample', 'github_menuitemsexample');

					trigger_error($language->lang('ACP_MARTTIPHPBB_MENUITEMSEXAMPLE_SETTING_SAVED') . adm_back_link($this->u_action));
				}

			break;
		}

		$menuitems_acp->assign_to_template('marttiphpbb/menuitemsexample');

		$template->assign_var('U_ACTION', $this->u_action);
	}
}
