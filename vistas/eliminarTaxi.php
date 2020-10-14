<?php
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$Taxis = new GestionTaxis();
	$id=intval($_GET['id']);
	$res = $Taxis->borrarTaxi($id);
	if($res){
		header('location: taxis.php');
	}else{
		echo "Error al eliminar el taxi";
	}
}
?>
