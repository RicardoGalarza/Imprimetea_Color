<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosModel extends CI_Model {

    public function __construct() {
      parent::__construct();
    }


    public function crear_producto($data){

        return $this->db->insert("productos", $data);

    }


}
