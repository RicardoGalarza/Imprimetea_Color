<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DireccionesController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_direcciones()
	{
		$this->load->view('mantenedores/Direcciones.php');
	}

	



}