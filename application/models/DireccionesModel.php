<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DireccionesModel extends CI_Model {

    public function __construct() {
      parent::__construct();
    }


    public function crear_direccion($data){

        return $this->db->insert("direcciones", $data);

    }


    public function listar_direcciones(){
      $this->db->select("*");
      $this->db->from("direcciones");
      return $this->db->get()->result();



    }



}