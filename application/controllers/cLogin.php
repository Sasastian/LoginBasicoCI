<?php

class Clogin extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('mLogin');
		
	}

	public function index(){

		$session_id = $this->session->userdata('s_idusuario');
   		if ($session_id) {
   			$this->load->view("layout/header");
			$this->load->view("layout/menu");
			$this->load->view('vInicio');
			$this->load->view("layout/footer");
   		}else{
   		
   			$data['mensaje']='';
			$this->load->view('vLogin', $data);
   		}
		
	}

	public function ingresar(){
		$usr=$this->input->post('txtUsuario');
		$pas=sha1($this->input->post('txtClave'));

		$res = $this->mLogin->ingresar($usr,$pas);

		if ($res == 1) {
			//echo "djdjdjdjdj";
			redirect(base_url());
			$this->load->view("layout/header");
			$this->load->view("layout/menu");
			$this->load->view('vInicio');
			$this->load->view("layout/footer");

		}else{
			redirect(base_url());
			$data['mensaje']= "Usuario o Clave Incorrectos";
			$this->load->view('vLogin', $data);
		}
	}


}
?>