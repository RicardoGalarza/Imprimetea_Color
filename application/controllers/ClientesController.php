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
		$nombre = $this->input->post("dato_nombre");
		$rut = $this->input->post("dato_rut");
		$telefono = $this->input->post("dato_telefono");
		$email = $this->input->post("dato_email");

		$data = array(
            "nombre" =>  $nombre,
            "rut" => $rut,
			"telefono" => $telefono,
			"email" => $email
        );

		$resultado = $this->ClientesModel->crear_cliente($data);


		echo json_encode($resultado);
	}

	}

	




