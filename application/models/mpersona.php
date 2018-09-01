<?php  
/**
* 
*/
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	

	public function guardar($param){
		$param = array(
			'nombre' =>$param["nombre"],
			'apellidoP' =>$param["apellidoP"],
			'apellidoM' =>$param["apellidoM"],
			'email' =>$param["nombre"],
			'dni' =>$param["nombre"],
			'fecnac' =>$param["fecnac"]
			

			 );
		$this->db->insert("persona",$campos);
	}
}