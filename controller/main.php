<?php
/**
 * phpBB extension  Menu Items Example
 * @copyright (c) 2018, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace marttiphpbb\menuitemsexample\controller;

use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\language\language;
use \Symfony\Component\HttpFoundation\Response;

class main
{
	private $helper;
	private $template;
	private $language;

	public function __construct(helper $helper, template $template, language $language)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->language = $language;
	}

	public function handle($page):Response
	{
		$this->language->add_lang('page', 'marttiphpbb/menuitemsexample');
		$this->template->assign_var('PAGE', $page);

		return $this->helper->render('page_body.html', $page);
	}
}
