<?php
// Creacion de variables y constantes para la conexion con la base de datos

// Constantes
define('server',"localhost");
define('user',"admin");
define('pass',"rodrigo");
define('database',"blog");

// Variables
$errorDBconexion = false;

// Verificacion de variables para la conexion
if(defined('server') && defined('user') && defined('pass') && defined('database')){
	// Conexion con la base de datos
	
	$mysqli = new mysqli(server,user,pass,database);
	
	// Verificacion de buena conexion
	if(mysqli_connect_error()){
		$errorDBconexion = true;
	}
	
	// Evitando problemas con los acentos
	$mysqli -> query("SET NAMES 'utf8'");
}
?>