<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->spark('Twiggy/0.8.5');
	}
	
	public function index() {
		//$this->twiggy->display();
		$this->twiggy->set('name', 'kinow', $global = FALSE);
		$this->twiggy->theme('jenkins');
		$this->twiggy->layout('mindex');
		$this->twiggy->display('2index');
	}
}
