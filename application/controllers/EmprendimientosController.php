<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmprendimientosController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       	$this->load->model("EmprendimientosModel");
    }



	public function vista_emprendimientos()
	{
		$this->load->view('mantenedores/Emprendimientos.php');
	}

	public function crear_emprendimiento()
	{
		$emprendimiento = $this->input->post("dato_emprendimiento");
		$cliente = $this->input->post("dato_cliente");
		$Whatsapp = $this->input->post("dato_whatsapp");
		

		$data = array(
            "emprendimiento" => $emprendimiento,
            "cliente" => $cliente,
			"whatsapp" => $Whatsapp
			
        );

		$resultado = $this->EmprendimientosModel->crear_emprendimiento($data);


		echo json_encode($resultado);
	}

	
	public function listar_emprendimientos()
	
	
	{
		
		$resultado = $this->EmprendimientosModel->listar_emprendimientos();

		echo json_encode($resultado);

	}


}