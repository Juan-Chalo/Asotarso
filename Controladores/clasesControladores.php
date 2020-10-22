<?php

//CONTROLADOR GESTION DE USUARIOS


 /**
  *
  */
 class DatosUsuario
 {

 		private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";//asotarsochiqui root
		private $dbpass="asotarsoChiqui20!"; //
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

			public function single_record($id){
			$sql = "SELECT * FROM usuarios where idUsuarios='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}



		//metodo de lectura

		public function leerUsuarios(){
			$sql = "SELECT * FROM usuarios WHERE Estado_idEstado=1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}


		//Metodo para Crear USUARIO nuevo

			public function crearUsuario($nombres,$password,$rol,$estado){
			$sql = "INSERT INTO `usuarios` (nombreusuario, password, rolusuario_idrolusuario, Estado_idEstado) VALUES ('$nombres', '$password', '$rol', '$estado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


		//Metodo para ELIMINAR USUARIO

			public function borrarUsuario($id){
			$sql = "UPDATE usuarios SET Estado_idEstado = 2 WHERE idUsuarios=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


		//Metodo para Actualizar NOMBRE Y ROL DEL USUARIO

		public function actualizarUsuario($nombres,$rol,$id_usuario){
			$sql = "UPDATE usuarios SET nombreusuario='$nombres', rolusuario_idrolusuario='$rol' WHERE idUsuarios=$id_usuario";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


		//METODO PARA ACTUALIZAR LA CONTRASEÑA DEL USUARIO

			public function actualizarContra($password,$id_usuario){
			$sql = "UPDATE usuarios SET password='$password' WHERE idUsuarios=$id_usuario";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

 }

//CONTROLADOR GESTION DE Producto


 /**
  *
  */
 class Producto
{

 		private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";//asotarsochiqui
		private $dbpass="asotarsoChiqui20!"; //asotarsoChiqui20!
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}


//Metodo para agregar un nuevo Producto

			public function agregarProducto($codigo, $nameProducto, $precio, $existencia, $rolCategoria, $estado){
			$sql = "INSERT INTO `producto` (codigo , nombreProducto , precioProducto , Existencia, CategoriaProducto_idCategoriaProducto , Estado_idEstado) VALUES ('$codigo', '$nameProducto', '$precio', '$existencia' , '$rolCategoria' ,'$estado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


//metodo de lectura de producto

		public function leerProducto(){
			$sql = "SELECT * FROM producto WHERE Estado_idEstado=1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}


			public function single_record($id){
			$sql = "SELECT * FROM producto where idProducto='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}

//Metodo para Actualizar el producto

		public function actualizarProducto($codigo, $nameProducto,  $precio, $cantidad, $id_productos){
			$sql = "UPDATE producto SET codigo='$codigo', nombreProducto ='$nameProducto',
			precioProducto='$precio', Existencia='$cantidad' WHERE idProducto=$id_productos";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

//Metodo para ELIMINAR Producto

			public function borrarProducto($id){
			$sql = "UPDATE producto SET Estado_idEstado = 2 WHERE idProducto=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}







}




 // $connect = mysqli_connect("localhost","root","","asotarsochiqui");

  $connect = mysqli_connect("localhost","asotarsochiqui","asotarsoChiqui20!","asotarsochiqui");



  /**
   *
   */
  class Circulares
  {

  	private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";
		private $dbpass="asotarsoChiqui20!";
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

			public function agregarCircular($asunto,$descripcion,$fecha,$lugar,$hora,$estado){
			$sql = "INSERT INTO `actividadessocio` (asunto, DescripcionActividades, FechaActividad, LugarActividad, hora, Estado_idEstado) VALUES ('$asunto', '$descripcion', '$fecha', '$lugar', '$hora', '$estado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


    public function verCirculares(){
      $sql = "SELECT * FROM actividadessocio WHERE Estado_idEstado=1";
      $res = mysqli_query($this->con, $sql);
      return $res;
    }

    public function single_record($id){
    $sql = "SELECT * FROM actividadessocio where idActividades='$id'";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_object($res );
    return $return ;
  }

  public function borrarCircular($id){
  $sql = "UPDATE actividadessocio SET Estado_idEstado = 2 WHERE idActividades='$id'";
  $res = mysqli_query($this->con, $sql);
  if($res){
    return true;
  }else{
    return false;
  }
}


  }


  /**
   * No heredad de
   */
  class GestionSocios

  {
  	private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";
		private $dbpass="asotarsoChiqui20!";
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		//Metodo para Crear Socio nuevo

			public function AgregarSocio($NombreSocio,$ApellidoSocio,$TelefonoSocios,$DireccionSocios,$CorreoElectronico,$Estado_idEstado){
			$sql = "INSERT INTO `socios` (NombreSocio, ApellidosSocio, TelefonoSocios, DireccionSocios, CorreoElectronico, Estado_idEstado) VALUES ('$NombreSocio', '$ApellidoSocio', '$TelefonoSocios', '$DireccionSocios', '$CorreoElectronico', '$Estado_idEstado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
  }

      public function verSocios(){
        $sql = "SELECT * FROM socios WHERE Estado_idEstado=1";
        $res = mysqli_query($this->con, $sql);
        return $res;
      }

      public function verSociosActivos(){
        $sql = "SELECT * FROM usuarios WHERE rolusuario_idrolusuario=2 AND Estado_idEstado=1";
        $res = mysqli_query($this->con, $sql);
        return $res;
      }

}

/**
 *
 */
class finanzasSocios
	{
		private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";
		private $dbpass="asotarsoChiqui20!";
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		//metodo de lectura

		public function verFinanzasSocios(){
			$sql = "SELECT * FROM reporte WHERE Estado_idEstado=1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}



			public function borrarReporteSocios($id){
			$sql = "UPDATE reporte SET Estado_idEstado = 2 WHERE idReporteFinanciero=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

	}

}

/**
 *
 */
class finanzasDirectiva
	{
		private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";
		private $dbpass="asotarsoChiqui20!";
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		//metodo lectura

		public function verFinanzasDirectiva(){
			$sql = "SELECT * FROM reporte_directiva WHERE Estado_idEstado=1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}



			public function borrarReporteDirectiva($id){
			$sql = "UPDATE reporte_directiva SET Estado_idEstado = 2 WHERE idReporteDirectiva=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}


	}


}



class Piloto
{

		private $con;
		private $dbhost="localhost";
		private $dbuser="asotarsochiqui";
		private $dbpass="asotarsoChiqui20!";
		private $dbname="asotarsochiqui";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		public function single_record($id){
			$sql = "SELECT * FROM pilotos where idPilotos='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}


			public function agregarPiloto($namepiloto,$apellidosPiloto,$dpi,$direccionP,$telefonoP,$licencia,$vencimientolicencia,$antecedentes,$rolpiloto,$estado){
			$sql = "INSERT INTO `pilotos` (NombrePilotos, ApellidosPilotos, NoDPI, Direccion, Telefono, NoLicencia, FechaVencimientoLicencia, FechaVencimientoAntecedentes, TipoPiloto_idTipoPiloto, Estado_idEstado) VALUES ('$namepiloto', '$apellidosPiloto', '$dpi', '$direccionP', '$telefonoP', '$licencia','$vencimientolicencia', '$antecedentes', '$rolpiloto', '$estado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}



//metodo de lectura de pilotos

		public function leerPiloto(){
			$sql = "SELECT * FROM pilotos WHERE Estado_idEstado=1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

		public function actualizarPiloto($name, $apellido,  $dpI, $direc, $cel, $nLicencia, $vLicencia, $vAntecedentes, $id_pilotos){
			$sql = "UPDATE pilotos SET NombrePilotos='$name', ApellidosPilotos='$apellido',
			NoDPI='$dpI', Direccion='$direc', Telefono='$cel', NoLicencia='$nLicencia', FechaVencimientoLicencia='$vLicencia', FechaVencimientoAntecedentes='$vAntecedentes' WHERE idPilotos=$id_pilotos";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


		public function borrarPiloto($id){
			$sql = "UPDATE pilotos SET Estado_idEstado = 2 WHERE idPilotos=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

}


//  CLASE Y METODOS PARA LA GESTION DE TAXIS

class GestionTaxis

{
  private $con;
  private $dbhost="localhost";
  private $dbuser="asotarsochiqui";
  private $dbpass="asotarsoChiqui20!";
  private $dbname="asotarsochiqui";
  function __construct(){
    $this->connect_db();
  }
  public function connect_db(){
    $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if(mysqli_connect_error()){
      die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
    }
  }

  public function sanitize($var){
    $return = mysqli_real_escape_string($this->con, $var);
    return $return;
  }

  //Metodo para Crear Socio nuevo

    public function AgregarTaxi($NumeroTaxi,$PlacaTaxi,$Estado){
    $sql = "INSERT INTO `taxi` (NumeroTaxi, PlacaTaxi, Estado_idEstado) VALUES ('$NumeroTaxi', '$PlacaTaxi','$Estado')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }

    }

    public function verTaxis(){
      $sql = "SELECT * FROM taxi WHERE Estado_idEstado=1";
      $res = mysqli_query($this->con, $sql);
      return $res;
    }

    public function borrarTaxi($id){
      $sql = "UPDATE taxi SET Estado_idEstado = 2 WHERE idTaxi=$id";
      $res = mysqli_query($this->con, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }


  }


  //  CLASE Y METODOS PARA LA GESTION DE ACTIVIDADES GENERALES

  class ActividadesGenerales

  {
    private $con;
    private $dbhost="localhost";
    private $dbuser="asotarsochiqui";
    private $dbpass="asotarsoChiqui20!";
    private $dbname="asotarsochiqui";
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      if(mysqli_connect_error()){
        die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
      }
    }

    public function sanitize($var){
      $return = mysqli_real_escape_string($this->con, $var);
      return $return;
    }

    public function single_record($id){
      $sql = "SELECT * FROM actividadesgenerales where idActividades='$id'";
      $res = mysqli_query($this->con, $sql);
      $return = mysqli_fetch_object($res );
      return $return ;
    }

    //Metodo para Crear Socio nuevo

      public function AgregarActividad($descripcion,$fecha,$lugar,$hora,$Estado){
      $sql = "INSERT INTO `actividadesgenerales` (DescripcionActividades, FechaActividad, LugarActividad, hora, Estado_idEstado) VALUES ('$descripcion', '$fecha','$lugar','$hora','$Estado')";
      $res = mysqli_query($this->con, $sql);
      if($res){
        return true;
      }else{
        return false;
      }

      }

      public function verActividadesGenerales(){
        $sql = "SELECT * FROM actividadesgenerales WHERE Estado_idEstado=1";
        $res = mysqli_query($this->con, $sql);
        return $res;
      }

      public function borrarActividadGeneral($id){
        $sql = "UPDATE actividadesgenerales SET Estado_idEstado = 2 WHERE idActividades='$id'";
        $res = mysqli_query($this->con, $sql);
        if($res){
          return true;
        }else{
          return false;
        }
      }

      public function actualizarActividadGeneral($descripcion,$fecha,$lugar,$hora,$id_actividad){
        $sql = "UPDATE actividadesgenerales SET DescripcionActividades='$descripcion', FechaActividad='$fecha',
        LugarActividad='$lugar' hora='$hora' WHERE idActividades='$id_actividad'";
        $res = mysqli_query($this->con, $sql);
        if($res){
          return true;
        }else{
          return false;
        }
      }


    }



    //////////////////////

    //  CLASE Y METODOS PARA ASIGNACION DE TAXIS Y PILOTOS A SOCIOS

    class socioTaxiPiloto

    {
      private $con;
      private $dbhost="localhost";
      private $dbuser="asotarsochiqui";
      private $dbpass="asotarsoChiqui20!";
      private $dbname="asotarsochiqui";
      function __construct(){
        $this->connect_db();
      }
      public function connect_db(){
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if(mysqli_connect_error()){
          die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
      }

      public function sanitize($var){
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
      }

      public function single_record($id){
        $sql = "SELECT * FROM actividadesgenerales where idActividades='$id'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res );
        return $return ;
      }

      //Metodo para Crear Socio nuevo

        public function asignarTaxiPiloto($id_taxi,$id_usuario,$id_piloto){
        $sql = "INSERT INTO `socios_has_Taxi` (Taxi_idTaxi, Usuarios_idUsuarios, Pilotos_idPilotos) VALUES ('$id_taxi', '$id_usuario','$id_piloto')";
        $res = mysqli_query($this->con, $sql);
        if($res){
          return true;
        }else{
          return false;
        }

        }

        public function verActividadesGenerales(){
          $sql = "SELECT * FROM actividadesgenerales WHERE Estado_idEstado=1";
          $res = mysqli_query($this->con, $sql);
          return $res;
        }

        public function borrarActividadGeneral($id){
          $sql = "UPDATE actividadesgenerales SET Estado_idEstado = 2 WHERE idActividades='$id'";
          $res = mysqli_query($this->con, $sql);
          if($res){
            return true;
          }else{
            return false;
          }
        }

        public function actualizarActividadGeneral($descripcion,$fecha,$lugar,$id_actividad){
          $sql = "UPDATE actividadesgenerales SET DescripcionActividades='$descripcion', FechaActividad='$fecha',
          LugarActividad='$lugar' WHERE idActividades='$id_actividad'";
          $res = mysqli_query($this->con, $sql);
          if($res){
            return true;
          }else{
            return false;
          }
        }



      }

      /**
       *
       */
      class MultasCuotas
      	{
      		private $con;
      		private $dbhost="localhost";
      		private $dbuser="asotarsochiqui";
      		private $dbpass="asotarsoChiqui20!";
      		private $dbname="asotarsochiqui";
      		function __construct(){
      			$this->connect_db();
      		}
      		public function connect_db(){
      			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      			if(mysqli_connect_error()){
      				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
      			}
      		}

      		public function sanitize($var){
      			$return = mysqli_real_escape_string($this->con, $var);
      			return $return;
      		}

      		//metodo de lectura

      		public function verReporteCuotasMensuales(){
      			$sql = "SELECT * FROM multas WHERE tipo=1 AND Estado_idEstado=1";
      			$res = mysqli_query($this->con, $sql);
      			return $res;
      		}

          public function verReporteMultasOrganizacion(){
            $sql = "SELECT * FROM multas WHERE tipo=2 AND Estado_idEstado=1";
            $res = mysqli_query($this->con, $sql);
            return $res;
          }


        }


        /**
         *
         */
        class TaxisPilotosAsignados
        	{
        		private $con;
        		private $dbhost="localhost";
        		private $dbuser="asotarsochiqui";
        		private $dbpass="asotarsoChiqui20!";
        		private $dbname="asotarsochiqui";
        		function __construct(){
        			$this->connect_db();
        		}
        		public function connect_db(){
        			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        			if(mysqli_connect_error()){
        				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        			}
        		}

        		public function sanitize($var){
        			$return = mysqli_real_escape_string($this->con, $var);
        			return $return;
        		}

            public function obtenerUsuario($nombreUsuario){
            $sql = "SELECT idUsuarios FROM usuarios where nombreusuario='$nombreUsuario'";
            $res = mysqli_query($this->con, $sql);
            $return = mysqli_fetch_object($res );
            return $return ;
          }

        		//metodo de lectura

        		public function verTaxisAsignados($id_usuario){
              $sql = "SELECT * FROM socios_has_taxi INNER JOIN taxi ON socios_has_taxi.Taxi_idTaxi = taxi.idTaxi INNER JOIN pilotos ON socios_has_taxi.Pilotos_idPilotos = pilotos.idPilotos WHERE Usuarios_idUsuarios='$id_usuario';";
        			$res = mysqli_query($this->con, $sql);
        			return $res;
        		}

            public function verPilotosAsignados($id_usuario){
              $sql = "SELECT idPilotos, NombrePilotos, ApellidosPilotos FROM pilotos INNER JOIN socios_has_taxi ON pilotos.idPilotos = socios_has_taxi.Pilotos_idPilotos WHERE Usuarios_idUsuarios='$id_usuario' AND Estado_idEstado=1;";
              $res = mysqli_query($this->con, $sql);
              return $res;
            }

            public function verDetallePiloto($id){
              $sql = "SELECT * FROM pilotos WHERE idPilotos='$id';";
              $res = mysqli_query($this->con, $sql);
              $return = mysqli_fetch_object($res );
              return $return;
            }

            public function verDetalleSocio($id){
                $sql = "SELECT * FROM socios_has_taxi INNER JOIN taxi ON socios_has_taxi.Taxi_idTaxi = taxi.idTaxi INNER JOIN pilotos ON socios_has_taxi.Pilotos_idPilotos = pilotos.idPilotos WHERE Usuarios_idUsuarios='$id';";
              $res = mysqli_query($this->con, $sql);
              return $res ;
            }

        }









?>
