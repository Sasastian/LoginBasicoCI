<?php


class Cpersona extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mPersona');
		$this->load->model('musuario');
		$this->load->library('encrypt');
	
	}

	public function index(){
		$this->load->view('persona/vPersona');

/*
		$query = $this->db->query("Select * from persona ");

		foreach ($query->result_array() as $row)
		{
		        echo $row['nombre'];
		        echo $row['usuario'];
		        echo $row['clave'];
		}
		*/
	}

	public function guardar(){
		
		//$this->load->view('persona/vPersona');
		
		$param['nombrePersona']=$this->input->post('nombrePersona');
		$param['usuario']=$this->input->post('usuarioUsuario');
		$param['clave']=sha1($this->input->post('passUsuario'));
		$param['apellidop']=$this->input->post('apellidop');
		$param['apellidom']=$this->input->post('apellidom');
		$param['rut']=$this->input->post('rutente');
		$param['correo']=$this->input->post('correoente');
		$param['direccion']=$this->input->post('direccionente');
		//$param['usuario']=$this->input->post('usuarioUsuario');
		//$param['password']=$this->input->post('passUsuario');

		$lastId=$this->mPersona->guardar($param);

		if ($lastId > 0 ) {
			$param['lastId']=$lastId;
			$this->musuario->guardarUsuario( $param);
		}
		redirect(base_url());
		$data['mensaje']='';
		$this->load->view('vLogin', $data);
		
		//echo $name." - ".$usr." - ".$pass;
	}

	public function actualizarDatos(){

		$param['nombrePersona']=$this->input->post('nombrePersona');
		$param['usuario']=$this->input->post('usuarioUsuario');
		$param['clave']=sha1($this->input->post('passUsuario'));

		$this->mPersona->actualizarDatos($param);
		redirect(base_url());
		$this->load->view("layout/header");
		$this->load->view("layout/menu");
		$this->load->view('vInicio');
		$this->load->view("layout/footer");
		

	}

	public function eliminarUsuario(){

		$idu=$this->input->post('txtidpersona');
		$this->mPersona->eliminarUsuario($idu);


	}
}


?>