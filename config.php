<?php
defined('BASEPATH') or exit('No se permite acceso directo');

//////////////////////////////////////
// Valores de uri
/////////////////////////////////////

define('URI', $_SERVER['REQUEST_URI']);

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

//////////////////////////////////////
// Valores de rutas
/////////////////////////////////////

define('FOLDER_PATH', '/php-employee-management-v2'); //! ADDED FORKS PATH

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('PATH_VIEWS', FOLDER_PATH . '/src/libs/views/');

define('PATH_CONTROLLERS', 'src/libs/controllers/');

define('HELPER_PATH', 'src/helpers/');

define('LIBS_ROUTE', ROOT . FOLDER_PATH . '/src/libs/');

//////////////////////////////////////
// Valores de core
/////////////////////////////////////

define('CORE', 'src/core/');
define('DEFAULT_CONTROLLER', 'Home');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

define('HOST', 'localhost'); // in Mac 127.0.0.1
define('DB', 'mvc_basics_2');
define('USER', 'root');
define('PASSWORD', '0Extremo0');
define('CHARSET', 'utf8mb4');

//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);