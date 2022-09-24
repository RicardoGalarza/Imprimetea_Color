<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasModel extends CI_Model {

    public function __construct() {
      parent::__construct();
    }


    public function crear_categoria($data){

        return $this->db->insert("categorias", $data);

    }
     
    public function listar_categorias(){
      $this->db->select("*");
      $this->db->from("categorias");
      return $this->db->get()->result();


    }

}
