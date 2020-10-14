<?php

  class Conexion{

         public static function Conectar(){
         	define('servidor','localhost');
         	define('nombre_db','asotarsochiqui');
         	define('usuario','asotarsochiqui'); // asotarsochiqui
         	define('password','asotarsoChiqui20!'); //asotarsoChiqui20!
         	$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'); //es un comando que se reconecta al servidor sql.

         	try{

         		$conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_db, usuario, password);
         		return $conexion;

         	}catch(exception $e){
         		die("Error en la conexion: ".$e->getMessage());
         	}
         }

  		# code...
  	}
  $connect = mysqli_connect("localhost","asotarsochiqui","asotarsoChiqui20!","asotarsochiqui");



?>
