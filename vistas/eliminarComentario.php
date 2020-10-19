<?php
if (isset($_GET['id'])){
	include('../Controladores/comentariocontroller.php');
	$comentario = new Comentario();
	$id=intval($_GET['id']);
	$res = $comentario->borrarComentario($id);
	if($res){
		header('location: comentarios.php');
	}else{
		echo "Error al eliminar el comentario";
	}
}
?>
