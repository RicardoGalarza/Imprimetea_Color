<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['clientes'] = 'ClientesController/vista_clientes';
$route['categorias'] = 'CategoriasController/vista_categorias';
$route['productos'] = 'ProductosController/vista_productos';
$route['emprendimientos'] = 'EmprendimientosController/vista_emprendimientos';
$route['direcciones'] = 'DireccionesController/vista_direcciones';
$route['galeria'] = 'GaleriaController/vista_galeria';

























$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
