<?php

class Comentario
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


  public function insertarComentario($nombre,$correo,$asunto,$mensaje){
    $sql = "INSERT INTO `comentarios` (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
  }

    public function single_record($id){
        $sql = "SELECT * FROM comentarios where id_comentario='$id'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res );
        return $return ;
      }

    public function verComentarios(){
    $sql = "SELECT * FROM comentarios";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }

    public function verdetalleComentario($id){
    $sql = "SELECT * FROM comentarios WHERE id_comentario='$id'";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }

}
$connect = mysqli_connect("localhost","asotarsochiqui","asotarsoChiqui20!","asotarsochiqui");

 ?>
