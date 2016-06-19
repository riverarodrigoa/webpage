<?php
// Creacion de variables y constantes para la conexion con la base de datos

// Constantes
define('server',"192.168.1.20");
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

function show_articles($linkDB){
	$salida = '';
	$consulta = $linkDB -> query("SELECT id_articulos,titulo,fecha,categoria,tags,imagen,contenido 
								FROM articulos ORDER BY ID_articulos ASC");
	
	//Verificar el resultado de la consulta
	if($consulta -> num_rows != 0){
		//Formateamos el resultado de la consulta
		while($listadoOK = $consulta -> fetch_assoc()){
			$salida = '
			<div class="card large hoverable">
				<div class="card-image">
					<img src="img/'.$listadoOK['imagen'].'">
				<span class="card-title">'.$listadoOK['titulo'].'</span>
				</div>
				<div class="card-content">
					'.$listadoOK['contenido'].'
				</div>
				<div class="card-action">
					<a href="#">Leer más...</a>
					<div class="chip">
						'.$listadoOK['tags'].'
					</div>
				</div>
			</div>
			';
		}
	}else{
		$salida = '
			<div class="card-panel blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title"><h5>No hay contenido</h5></span>
					<div class="card-content">
						<a class="btn-large disabled">ERROR</a>
					</div>
				</div>
			</div>
		';
	}
	return $salida;
}
?>