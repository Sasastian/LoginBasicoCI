<?php

/**
* 
*/
class MupdatePersona extends CI_Model{
	
	function __construct(){
		parent::__construct();
		

	}



	/*	$this->db->select('e.id_ente, e.nombre, e.apellidop, e.apellidom, e.rut, e.correo, e.direccion, u.usuario, u.password ');
		$this->db->from('ente e');
		$this->db->join('usuario u', 'e.id_ente = u.id_ente');
		//$this->db->where('u.usuario',$usu);
		//$this->db->where('u.password',$pass);

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

*/

		function get_profesiones(){ 
		 $query = $this->db-> query('SELECT * FROM ente');
		  // si hay resultados 
		  if ($query->num_rows() > 0) { 
		  // almacenamos en una matriz bidimensional 
		  	foreach($query->result() as $row) 
		  		$arrDatos[htmlspecialchars($row->id_ente, ENT_QUOTES)] = htmlspecialchars($row->nombre, ENT_QUOTES); 
			  	$query->free_result(); 
			  	return $arrDatos; 
		  } 
		}


	


}




?>