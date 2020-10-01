<?php  

//CONTROLADOR GESTION DE USUARIOS 


 /**
  * 
  */
 class DatosUsuario
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

			public function agregarCircular($asunto,$descripcion,$fecha,$lugar,$estado){
			$sql = "INSERT INTO `actividadessocio` (asunto, DescripcionActividades, FechaActividad, LugarActividad, Estado_idEstado) VALUES ('$asunto', '$descripcion', '$fecha', '$lugar', '$estado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
  	
  	
  }






 






?>