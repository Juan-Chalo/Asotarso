<?php 
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$reporte = new finanzasSocios();
	$id=intval($_GET['id']);
	$res = $reporte->borrarReporteSocios($id);
	if($res){
		header('location: finanzasSocios.php');
	}else{
		echo "Error al eliminar el reporte";
	}
}
?>