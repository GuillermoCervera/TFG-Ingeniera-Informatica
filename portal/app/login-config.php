<?php
require_once 'usuario-mensajes.php';

define('BASE_PATH', 'http://localhost/portal/app/'); // Ruta base donde se encuentra este fichero
define('DB_HOST', 'localhost'); // Servidor de la base de datos
define('DB_USERNAME', 'root'); // Usuario de la base de datos
define('DB_PASSWORD', ''); // Contraseña de la base de datos
define('DB_NAME', 'portal'); // Nombre de la base de datos

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}