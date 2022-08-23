<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_productos()
	{
		$this->load->view('mantenedores/Productos.php');
	}

	



}