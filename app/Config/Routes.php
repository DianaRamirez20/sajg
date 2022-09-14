<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/index-admin', 'Index_Administrador::index');
$routes->add('/index', 'Home::index');
$routes->add('/estadisticas', 'Estadisticas_indicadores::index');
$routes->post('index/encuestasCortas', 'Home::encuesta');
$routes->post('ReportePdf', 'ReportesEncuestasC::index');
//Login
$routes->add('/login', 'Login::index');
$routes->post('/entrar', 'Login::entrar');
$routes->add('/login/salir', 'Login::salir');
//Administrador
$routes->add('/crear_cuenta', 'Crear_cuenta::index');
$routes->post('/guardar','Crear_cuenta::guardar');
$routes->add('/administradorEdit', 'AdministradorEdit::index');
$routes->get('/administradorEdit/obtener/(:any)', 'AdministradorEdit::obtener/$1');
$routes->add('/administrador', 'Administrador::index');
$routes->post('/administrador/actualizar', 'Administrador::actualizar');
$routes->post('administradorEdit/delete/(:any)', 'AdministradorEdit::delete/$1');
$routes->post('administrador/create', 'Administrador::create');
$routes->post('/administrador/delete/(:any)', 'Administrador::delete/$1');
$routes->get('/administrador/edit/(:any)', 'Administrador::edit/$1');
$routes->post('administrador/update', 'Administrador::update/$1');
$routes->get('index_admin/edit(:any)', 'Index_Administrador::edit/$1');
$routes->post('index-admin/update', 'Index_Administrador::update/$1');


//Estadisticas 
$routes->get('/estadisticas/(:any)', 'Estadisticas::index/$1');

//Propuesta 
$routes->group('/', ['Acciones' => 'App\Controllers'], function($routes){
    $routes->add('/accion', 'Acciones::index');
    $routes->post('propuesta/create/', 'Acciones::create');

});

//Apoyos y Servicios 
$routes->group('/', ['Apoyos' => 'App\Controllers'], function($routes){
    $routes->add('/apoyos_servicios', 'Apoyos::index');
    $routes->post('apoyos/buscar', 'Apoyos::Buscar');
    $routes->add('/apoyosAdmin', 'ApoyosAdmin::Index');

});

//Juventudes
$routes->group('/', ['Consejo' => 'App\Controllers'], function($routes){
    $routes->add('/consejo', 'Consejo::index');

});

//Directorio
$routes->group('/', ['Directorio' => 'App\Controllers'], function($routes){
    $routes->add('/directorio', 'Directorio::index');

});


//Investigaciones
$routes->group('/',['Investigaciones' => 'App\Controllers'], function($routes){
    $routes->add('/investigadores', 'Investigadores::index');
    $routes->add('/red-investigadores', 'Red_Investigadores::index');
    $routes->add('/centro-documental', 'Centro_documental::index');
    $routes->get('/investigadores/edit/(:any)', 'Investigadores::edit/$1');
    $routes->post('/investigadores/createInv', 'Investigadores::createInv');
    $routes->post('/investigadores/update', 'Investigadores::update/$1');
    $routes->get('/centro_documental_admin_edit', 'Centro_documental_admin_edit::index');
    $routes->post('/investigadores/delete/(:any)', 'Investigadores::delete/$1');
    $routes->add('/red-investigadores-edit', 'Red_investigadores_edit::index');
    $routes->post('centro-documental/ByNombre', 'Centro_documental::ByNombre');
});

//Temas 
$routes->group('/',['Tema' => 'App\Controllers'], function($routes){
    $routes->add('/temas', 'Tema::index');
    $routes->post('temas/createTema', 'Tema::createTema');
    $routes->get('/temas/edit/(:any)', 'Tema::edit/$1');
    $routes->post('/temas/update/', 'Tema::update/$1');
    $routes->get('/temas_admin_edit', 'Tema_edit::index');
    $routes->post('/temas/delete/(:any)', 'Tema::delete/$1');
    $routes->add('/temasView', 'Temass::index');
    $routes->post('temasView/Search', 'Temass::Search');

});


//Encuestas
$routes->group('/',['Encuesta' => 'App\Controllers'], function($routes){
    $routes->add('/encuesta', 'EncuestasAdmin::index');
    $routes->get('/encuesta/edit/(:any)', 'EncuestasAdmin::edit/$1');
    $routes->post('/encuesta/update/', 'EncuestasAdmin::update/$1');
    $routes->post('/encuesta/delete/(:any)', 'EncuestasAdmin::delete/$1');
    $routes->post('encuesta/create', 'EncuestasAdmin::create');
    $routes->get('/encuesta/editPregunta/(:any)', 'EncuestasAdmin::editP/$1');
    $routes->post('/encuesta/updatePregunta/', 'EncuestasAdmin::updateP/$1');
    $routes->post('/encuesta/deletePregunta/(:any)', 'EncuestasAdmin::deleteP/$1');
    $routes->post('encuesta/createPregunta', 'EncuestasAdmin::createP');
    $routes->post('encuesta/createEncuestaL', 'EncuestasAdmin::createL');
    $routes->get('encuesta/editEncuestaLarga/(:any)', 'EncuestasAdmin::editL/$1');
    $routes->post('/encuesta/deleteEncuestaLarga/(:any)', 'EncuestasAdmin::deleteL/$1');
    $routes->post('encuesta/updateEncuestaLarga/', 'EncuestasAdmin::updateL/$1');
});

//Investigadores
$routes->group('/',['Investigadores' => 'App\Controllers'], function($routes){
    $routes->add('/integrantes-investigadores', 'Integrantes_investigadores::index');
    $routes->get('integrantes-investigadores/edit/(:any)', 'Red_investigadores_edit::editInv/$1');
    $routes->post('integrantes-investigadores/createInv', 'Red_investigadores_edit::createInv');
    $routes->post('integrantes-investigadores/update/', 'Red_investigadores_edit::updateInv/$1');
    $routes->get('/edit_integrante', 'Edit_integrantes::index');
    $routes->post('/integrantes-investigadores/delete/(:any)', 'Red_investigadores_edit::deleteInv/$1');
    $routes->get('objetivos-investigadores/edit/(:any)', 'Red_investigadores_edit::editObj/$1');
    $routes->post('objetivos-investigadores/createObj', 'Red_investigadores_edit::createObj');
    $routes->post('objetivos-investigadores/update/', 'Red_investigadores_edit::updateObj/$1');
    $routes->get('/edit-objetivos', 'Edit-objetivos::index');
    $routes->post('/objetivos-investigadores/delete/(:any)', 'Red_investigadores_edit::deleteObj/$1');
    $routes->get('comisiones-investigadores/edit/(:any)', 'Red_investigadores_edit::editComTrab/$1');
    $routes->post('comisiones-investigadores/createComTrab', 'Red_investigadores_edit::createComTrab');
    $routes->post('comisiones-investigadores/update/', 'Red_investigadores_edit::updateComTrab/$1');
    $routes->get('/edit-comisiones', 'Edit-comisiones::index');
    $routes->post('/comisiones-investigadores/delete/(:any)', 'Red_investigadores_edit::deleteComTrab/$1');
    
});


//Apoyos 
$routes->post('apoyosAdmin/createDerecho', 'ApoyosAdmin::createDerecho');
$routes->post('apoyosAdmin/createDependencia', 'ApoyosAdmin::createDependencia');
$routes->post('apoyosAdmin/createTipoApoyo', 'ApoyosAdmin::createTipoApoyo');
$routes->get('apoyosAdmin/deleteDerecho/(:any)', 'ApoyosAdmin::deleteDerecho/$1');
$routes->get('apoyosAdmin/deleteDependencia/(:any)', 'ApoyosAdmin::deleteDependencia/$1');
$routes->get('apoyosAdmin/deleteTApoyo/(:any)', 'ApoyosAdmin::deleteTApoyo/$1');
$routes->get('apoyosAdmin/deleteNormatividad/(:any)', 'ApoyosAdmin::deleteNormatividad/$1');
$routes->get('/apoyosAdmin/editDerecho/(:any)', 'ApoyosAdmin::editDerecho/$1');
$routes->get('/apoyosAdmin/editTApoyo/(:any)', 'ApoyosAdmin::editTApoyo/$1');
$routes->get('/apoyosAdmin/editDependencia/(:any)', 'ApoyosAdmin::editDependencia/$1');
$routes->post('apoyosAdmin/updateTApoyo/', 'ApoyosAdmin::updateTApoyo/$1');
$routes->post('apoyosAdmin/updateDependencia/', 'ApoyosAdmin::updateDependencia/$1');
$routes->post('apoyosAdmin/updateDerecho/', 'ApoyosAdmin::updateDerecho/$1');
$routes->post('apoyosAdmin/createApoyo', 'ApoyosAdmin::createApoyo');
$routes->post('apoyosAdmin/deleteApoyo/(:any)', 'ApoyosAdmin::deleteApoyo/$1');



//Contactanos
$routes->post('/Contactanos/EnviarMensaje', 'Contactanos::EnviarMensaje');
$routes->add('/contactanos', 'Contactanos::index');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
