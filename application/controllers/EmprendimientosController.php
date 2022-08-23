<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmprendimientosController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_emprendimientos()
	{
		$this->load->view('mantenedores/Emprendimientos.php');
	}

	



}