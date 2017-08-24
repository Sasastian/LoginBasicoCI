<?php

/**
* 
*/
class Mpersona extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	function guardar($param){

		$campos = array(
			'nombre' => $param['nombrePersona'],
			
			'apellidop' => $param['apellidop'],
			'apellidom' => $param['apellidom'],
			'rut' => $param['rut'],
			'correo' => $param['correo'],
			'direccion' => $param['direccion'],

			 );


		$this->db->insert('ente',$campos);
		//$lastid = $this->db->insert_id();
		return $this->db->insert_id();
	}

	public function actualizarDatos($param){
		$campos = array(
			'nombre' => $param['nombrePersona'],
			'usuario' => $param['usuario'],
			'clave' => $param['clave']

			 );
		$this->db->update('persona',$campos);
		$this->db->where("id_Persona",$this->session->userdata("s_idusuario"));

		return 1;
	}


	public function eliminarUsuario($idu){
		/*$campos=array(
			'id_persona'=$idu
		);
*/
		//$this->db->delete('persona',$campos);

		//echo "aaaaaasdssssss";

		$this->db->where('id_persona',$idu);
		$this->db->delete('persona');
	

	}
}




?>