<?php
/**
 *
 * Menu Items Example. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Martti, https://github.com/marttiphpbb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace marttiphpbb\menuitemsexample\controller;

use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\language\language;
use \Symfony\Component\HttpFoundation\Response;

class main
{
	/** @var helper */
	private $helper;

	/** @var template */
	private $template;

	/** @var language */
	private $language;

	/**
	 * @param helper
	 * @param template
	 * @param language
	 */
	public function __construct(helper $helper, template $template, language $language)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->language = $language;
	}

	/**
	 * @param string
	 * @return Response
	 */
	public function handle($page):Response
	{
		$this->language->add_lang('page', 'marttiphpbb/menuitemsexample');
		$this->template->assign_var('PAGE', $page);

		return $this->helper->render('page_body.html', $page);
	}
}
