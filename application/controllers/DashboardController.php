<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       // $this->load->model("VideosModel");
    }



	public function vista_dashboard()
	{
		$this->load->view('Dashboard');
	}

	



}