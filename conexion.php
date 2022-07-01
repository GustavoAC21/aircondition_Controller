<?php
	// Datos de la base de datos y Conexion PDO
	$servidor = "localhost";
	$usuario = "root";
	$contraseña = "";
	$base_datos = "temperatura";
	
	//establezco la conexion con PDO en este caso para MySQL
	$conexion = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $contraseña) or die ("No se ha podido conectar al servidor de Base de datos");
	
	//aplico el español	
	$conexion ->exec("SET CHARACTER SET utf8");

    // function conexion(){
    //     $servidor="localhost";
    //     $usuario="root";
    //     $password="";
    //     $bd="temperatura";

    //     $conexion=mysqli_connect($servidor,$usuario,$password,$bd);

    //     return $conexion;
    // }
?>