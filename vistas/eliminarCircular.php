<?php
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$circular = new Circulares();
	$id=intval($_GET['id']);
	$res = $circular->borrarCircular($id);
	if($res){
		header('location: AdminPanel.php');
	}else{
		echo "Error al eliminar la Circular";
	}
}
?>
