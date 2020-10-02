<?php 
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$productos = new Producto();
	$id=intval($_GET['id']);
	$res = $productos->borrarProducto($id);
	if($res){
		header('location: mostrarProducto.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>