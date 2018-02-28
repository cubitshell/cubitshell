<?php

define('AMBIENTE', 'desarrollo'); //cambiar al entregar {seteo de errores}
switch (AMBIENTE)
{
	case 'desarrollo':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'produccion':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Revise la configuracion del ambiente.';
		exit(1); // EXIT_ERROR
}



define('RAIZ', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APLICACION', RAIZ . 'aplicacion' . DIRECTORY_SEPARATOR);
if (realpath(APLICACION.'vista')) {
	define('VISTA',APLICACION.'vista'.DIRECTORY_SEPARATOR);
}else{
	echo "Error no se encontro la carpeta VISTA";
}

define('URL_PROTOCOLO', 'http://');
define('URL_DOMINIO', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace('publico', '', dirname($_SERVER['SCRIPT_NAME']))); 
define('URL', URL_PROTOCOLO . URL_DOMINIO . URL_SUB_FOLDER);



require APLICACION . 'nucleo/aplicacion.php';
require APLICACION . 'modelo/modelo.php';
require APLICACION . 'configuracion/configuracion.php';
$Aplicacion = new Aplicacion();
