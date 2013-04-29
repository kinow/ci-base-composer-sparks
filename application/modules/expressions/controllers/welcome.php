<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	function __construct() {
		parent::__construct();
		$this->load->spark('Twiggy/0.8.5');
		$this->load->model('users');
	}
	
	public function index() {
		$names = $this->users->getAll();
		//$this->twiggy->display();
		$this->twiggy->set('name', 'kinow', $global = FALSE);
		$this->twiggy->theme('default');
		$this->twiggy->display('2index');
	}
}
