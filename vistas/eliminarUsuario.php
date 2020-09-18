<?php 
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$usuario = new DatosUsuario();
	$id=intval($_GET['id']);
	$res = $usuario->borrarUsuario($id);
	if($res){
		header('location: usuarios.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>