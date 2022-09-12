<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DireccionesController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       	$this->load->model("DireccionesModel");
    }



	public function vista_direcciones()
	{
		$this->load->view('mantenedores/Direcciones.php');
	}

	public function crear_direccion()
	{
		$ciudad = $this->input->post("dato_ciudad");
		$direccion = $this->input->post("dato_direccion");
		$numero_casa = $this->input->post("dato_numero_casa");
		$agencia_preferida = $this->input->post("dato_agencia_preferida");

		$data = array(
            "ciudad" =>  $ciudad,
            "direccion" => $direccion,
			"numero_casa" => $numero_casa,
			"agencia_preferida" => $agencia_preferida
        );

		$resultado = $this->DireccionesModel->crear_direccion($data);


		echo json_encode($resultado);
	}
	



}