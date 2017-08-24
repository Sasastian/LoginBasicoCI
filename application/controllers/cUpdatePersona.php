<?php

class CupdatePersona extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mUpdatePersona');
	}

	public function index(){
		// obtenemos el array de profesiones y lo preparamos para enviar 
		$datos['arrProfesiones'] = $this->mUpdatePersona->get_profesiones(); 
		// cargamos la interfaz y le enviamos los datos 


		//redirect(base_url());
		$this->load->view("layout/header");
		$this->load->view("layout/menu");
		$this->load->view('vUpdatePersona',$datos);
		$this->load->view("layout/footer");
		
	}

	


}
?>