<?php

/**
* 
*/
class mUsuario extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}


public function guardarUsuario($param){
	$campos = array(
		'id_ente' =>$param['lastId'],
		'usuario' =>$param['usuario'],
		'password' =>$param['clave']
		);

	$this->db->insert("usuario",$campos);
}


}




?>