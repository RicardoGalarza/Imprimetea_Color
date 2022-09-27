<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Rutas a las vistas

$route['clientes'] = 'ClientesController/vista_clientes';
$route['categorias'] = 'CategoriasController/vista_categorias';
$route['productos'] = 'ProductosController/vista_productos';
$route['emprendimientos'] = 'EmprendimientosController/vista_emprendimientos';
$route['direcciones'] = 'DireccionesController/vista_direcciones';
$route['galeria'] = 'GaleriaController/vista_galeria';



$route['cargar_informacion_productos'] = 'ProductosController/cargar_informacion_ventas de prodectos';

$route['dashboard'] = 'DashboardController/vista_dashboard';


// cargar las vistas//

$route['crear_categoria'] = 'CategoriasController/crear_categoria';
$route['crear_cliente'] = 'ClientesController/crear_cliente';
$route['crear_direccion'] = 'DireccionesController/crear_direccion';
$route['crear_emprendimiento'] = 'EmprendimientosController/crear_emprendimiento';
$route['crear_producto'] = 'ProductosController/crear_producto';

// funciones//
$route['listar_categorias'] = 'CategoriasController/listar_categorias';
$route['listar_clientes'] = 'ClientesController/listar_clientes';
$route['listar_emprendimientos'] = 'EmprendimientosController/listar_emprendimientos';
$route['listar_direcciones'] = 'DireccionesController/listar_direcciones';
$route['listar_productos'] = 'ProductosController/listar_productos';
















$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
