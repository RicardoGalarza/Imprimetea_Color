<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesModel extends CI_Model {

    public function __construct() {
      parent::__construct();
    }


    public function crear_cliente($data){

        return $this->db->insert("clientes", $data);

    }


}
