<?php namespace controllers;
use core\view;

/*
 * Home controller
 *
 */
class Services extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['title'] = "Services";
		
		View::rendertemplate('header', $data);
		View::rendertemplate('topnav', $data);
		View::render('services/index', $data);
		View::rendertemplate('footer', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
	public function subpage() {
		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		View::rendertemplate('header', $data);
		View::render('welcome/subpage', $data);
		View::rendertemplate('footer', $data);
	}

}
