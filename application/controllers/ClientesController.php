<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_clientes()
	{
		$this->load->view('mantenedores/Clientes.php');
	}

	



}
