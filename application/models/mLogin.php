<?php

/**
* 
*/
class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function ingresar($usu, $pass){

		$this->db->select('e.id_ente, e.nombre, e.apellidop, e.apellidom, e.rut, e.correo, e.direccion, u.usuario, u.password ');
		$this->db->from('ente e');
		$this->db->join('usuario u', 'e.id_ente = u.id_ente');
		$this->db->where('u.usuario',$usu);
		$this->db->where('u.password',$pass);

		//echo "clave: ".$pass."<br>";

		$resultado = $this->db->get();


		if($resultado->num_rows() == 1){
			$r=$resultado->row();

			//echo $r->nombre."**-";
			$s_usuario = array(

				's_idusuario' => $r->id_ente,
				's_nombre' => $r->nombre." ".$r->apellidop,
				's_rut' => $r->rut,
				's_direccion' => $r->direccion,
				's_correo' => $r->correo

			);
		
			$this->session->set_userdata($s_usuario);

			return 1;
		}else{

			//echo "asdasdasdasd";
			return 0;
		}

	
	}
}


?>