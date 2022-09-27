<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       	$this->load->model("ProductosModel");
    }



	public function vista_productos()
	{
		$this->load->view('mantenedores/Productos.php');
	}

	public function crear_producto()
	{
		$nombre = $this->input->post("dato_nombre");
		$precio = $this->input->post("dato_precio");
		$stock_cantidad = $this->input->post("dato_stock_cantidad");
		$costo = $this->input->post("dato_costo");
		$descripcion = $this->input->post("dato_descripcion");
		$foto = $this->input->post("dato_foto");

		$data = array(
            "nombre" => $nombre,
			"precio" => $precio,
			"stock_cantidad" => $stock_cantidad,
			"costo" => $costo,
			"descripcion" => $descripcion,
			"foto" => $foto
        );

		$resultado = $this->ProductosModel->crear_producto($data);


		echo json_encode($resultado);
	}

		
		public function listar_productos()
	
	
	{
		
		$resultado = $this->ProductosModel->listar_productos();

		echo json_encode($resultado);

	}


}