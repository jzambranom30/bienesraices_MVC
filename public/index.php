<?php

require_once __DIR__ . '/../includes/app.php';

use Controller\LoginController;
use MVC\Router;
use Controller\PaginaController;
use Controller\PropiedadController;
use Controller\VendedorController;

$router = new Router();

// Zona de autenticacion
$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/eliminar', [PropiedadController::class, 'eliminar']);

$router->get('/vendedores/crear', [VendedorController::class, 'crear']);
$router->post('/vendedores/crear', [VendedorController::class, 'crear']);
$router->get('/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/vendedores/eliminar', [VendedorController::class, 'eliminar']);

// Zona pública
$router->get('/', [PaginaController::class, 'index']);
$router->get('/nosotros', [PaginaController::class, 'nosotros']);
$router->get('/propiedades', [PaginaController::class, 'propiedades']);
$router->get('/propiedad', [PaginaController::class, 'propiedad']);
$router->get('/blog', [PaginaController::class, 'blog']);
$router->get('/entrada', [PaginaController::class, 'entrada']);
$router->get('/contacto', [PaginaController::class, 'contacto']);
$router->post('/contacto', [PaginaController::class, 'contacto']);

// Login y Autenticación
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();

?>