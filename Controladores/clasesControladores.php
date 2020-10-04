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
		private $dbuser="root";//asotarsochiqui
		private $dbpass=""; //asotarsoChiqui20!
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
	




?>