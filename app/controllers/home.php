<?php namespace controllers;
use core\view;

/*
 * Home controller
 *
 */
class Home extends \core\controller{

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
		$data['title'] = "Home";
		$data['welcome_message'] = $this->language->get('welcome_message');
		
		View::rendertemplate('header', $data);
		View::rendertemplate('topnav', $data);
		View::render('home/home', $data);
		View::rendertemplate('footerhome', $data);
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
