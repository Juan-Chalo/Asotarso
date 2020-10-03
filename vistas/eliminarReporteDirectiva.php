<?php 
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$reporte = new finanzasDirectiva();
	$id=intval($_GET['id']);
	$res = $reporte->borrarReporteDirectiva($id);
	if($res){
		header('location: finanzasDirectiva.php');
	}else{
		echo "Error al eliminar el reporte";
	}
}
?>