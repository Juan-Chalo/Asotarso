<?php
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$pilotosP = new Piloto();
	$id=intval($_GET['id']);
	$res = $pilotosP->borrarPiloto($id);
	if($res){
		header('location: mostrarPilotos.php');
	}else{
		echo "Error al eliminar el Piloto";
	}
}
?>
