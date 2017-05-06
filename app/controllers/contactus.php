<?php namespace controllers;
use core\view;

/*
 * Home controller
 *
 */
class Contactus extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();

	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['title'] = "Contact Us";
		
		View::rendertemplate('header', $data);
		View::rendertemplate('topnav', $data);
		View::render('contactus/index', $data);
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
