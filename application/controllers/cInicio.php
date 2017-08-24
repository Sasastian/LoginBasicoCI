<?php


class Cpersona extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	
	}

	public function index(){

		$this->load->view("layout/header");
		$this->load->view("layout/menu");
		$this->load->view('vInicio');
		$this->load->view("layout/footer");


	}

}


?>