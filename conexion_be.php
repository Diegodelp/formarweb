<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "i6852879_wp1";
	$password = "formarmartinez";
	$servidor = "localhost";
	$basededatos = "login-register-db";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

?>