<?php
/**
* 
*/
class Cpersona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("mpersona");
	}

	public function index(){
		$this->load->view("persona/vpersona");
	}
	public function guardar(){
		
		$parm["nombre"]=$this->input->post("txtnombre");
		$parm["apellidoP"]=$this->input->post("txtapellidoP");
		$parm["apellidoM"]=$this->input->post("txtapellidoM");
		$parm["email"]=$this->input->post("txtemail");
		$parm["dni"]=$this->input->post("txtdni");
		$parm["fecnac"]=$this->input->post("txtfecnac");
		//
		$parmusu["usuario"]=$this->input->post("txtusuario");
		$parmusu["clave"]=$this->input->post("txtclave");

		$this->mpersona->guardar($param);

	}
}