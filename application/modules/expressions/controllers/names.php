<?php

class Names extends REST_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->spark('Twiggy/0.8.5');
		$this->load->model('users');
	}
	
	public function index_get() {
		$names = $this->users->getAll();
		//$this->twiggy->display();
		$this->response($names, 200); 
	}
}