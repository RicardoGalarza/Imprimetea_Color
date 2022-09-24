<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmprendimientosModel extends CI_Model {

    public function __construct() {
      parent::__construct();
    }


    public function crear_emprendimiento($data){

        return $this->db->insert("emprendimientos", $data);

    }
    
     public function listar_emprendimientos(){
      $this->db->select("*");
      $this->db->from("emprendimientos");
      return $this->db->get()->result();



    }

    
    

}