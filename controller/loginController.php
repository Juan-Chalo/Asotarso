<?php

session_start();

include_once 'conexionBd.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

          //recepcion de los datos enviados mediante el metodo post desde Ajax

          $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
          $password = (sha1($_POST['password'])); 
        

          //incriptacion para la clave MD5. 
          

          //$pass =md5($password); //incripto la clave enviada por el usuario, para comparrarla con la clave encriptada y almacenada en la bd. 

           $consulta1 = "SELECT * FROM usuarios WHERE nombreusuario='$usuario' AND password='$password' AND rolusuario_idrolusuario= 1 AND Estado_idEstado=1";
          $resultado1 = $conexion->prepare($consulta1);
          $resultado1->execute();

           $consulta2 = "SELECT * FROM usuarios WHERE nombreusuario='$usuario' AND password='$password' AND rolusuario_idrolusuario= 2 AND Estado_idEstado=1";
          $resultado2 = $conexion->prepare($consulta2);
          $resultado2->execute();

          if ($resultado1->rowCount()>=1) {
            $data = 1;

            //VARIABLES DE SESION
            $_SESSION["usuario"]=$usuario;
            
          }
           
           elseif ($resultado2->rowCount()>=1) {
            $data = 2;

            //VARIABLES DE SESION
            $_SESSION["usuario"]=$usuario;
            
          }else{

            $_SESSION["usuario"] = null;
            $data=3;

          }

          print json_encode($data);

          $conexion=null;   

           


?>