<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_galeria()
	{
		$this->load->view('mantenedores/Galeria.php');
	}

	



}