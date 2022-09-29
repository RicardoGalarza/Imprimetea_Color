<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("ClientesModel");
    }



	public function vista_clientes()
	{
		$this->load->view('mantenedores/Clientes.php');
	}

	public function crear_cliente()
	{
		$nombres = $this->input->post("dato_nombres");
		$rut = $this->input->post("dato_rut");
		$telefono = $this->input->post("dato_telefono");
		$correo = $this->input->post("dato_correo");
		$apellidos = $this->input->post("dato_apellidos");
		$data = array(
            
			"rut" => $rut,
			"nombres" => $nombres,
			"apellidos" => $apellidos,
			"telefono" => $telefono,
			"correo" => $correo
			
        );

		$resultado = $this->ClientesModel->crear_cliente($data);


		echo json_encode($resultado);
	}


	public function listar_clientes()
	
	
	{
		
		$resultado = $this->ClientesModel->listar_clientes();

		echo json_encode($resultado);

	}

	}

	




