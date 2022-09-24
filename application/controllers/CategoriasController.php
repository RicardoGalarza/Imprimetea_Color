<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("CategoriasModel");
    }



	public function vista_categorias()
	{
		$this->load->view('mantenedores/Categorias.php');
	}

	public function crear_categoria()
	{
		$nombre = $this->input->post("dato_nombre");
		$descripcion = $this->input->post("dato_descripcion");

		$data = array(
            "nombre" =>  $nombre,
            "descripcion" => $descripcion
        );

		$resultado = $this->CategoriasModel->crear_categoria($data);


		echo json_encode($resultado);
	}

	
	
	
	public function listar_categorias()
	
	
	{
		
		$resultado = $this->CategoriasModel->listar_categorias();

		echo json_encode($resultado);

	}



}