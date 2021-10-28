<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('loginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Crud::index');


//agregado
//$routes->get('/', 'ContactoController::catalogo');
$routes->get('/', 'loginController::index');
$routes->get('/home', 'usuarioController::catalogo_cliente');
//$routes->get('/home/2', 'usuarioController::catalogo_cliente');
$routes->post('/login', 'loginController::login');
$routes->get('/salir', 'loginController::salir');

//crud producto
//Para insertar producto
$routes->get('/crear_producto_vista', 'usuarioController::crear_producto_vista');
$routes->post('/crear_producto', 'usuarioController::crear_producto');

//Para actualizar producto
$routes->post('/editar_producto', 'usuarioController::producto_actualizar');
//Para tomar el id del producto y editar
$routes->get('/obtener_nombre/(:any)', 'usuarioController::obtener_nombre/$1');
//Para tomar el id del producto y eliminar
$routes->get('/eliminar/(:any)', 'usuarioController::eliminar/$1');

//USUARIOO
//Para insertar usuario, primerooo formulario sin datos, luego el form envia a crear_registro
$routes->get('/registro', 'LoginController::registro');
$routes->post('/crear_registro', 'LoginController::usuario_crear');

/*






 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
