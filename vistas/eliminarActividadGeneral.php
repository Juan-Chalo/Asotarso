<?php
if (isset($_GET['id'])){
	include('../Controladores/clasesControladores.php');
	$actividades = new ActividadesGenerales();
	$id=intval($_GET['id']);
	$res = $actividades->borrarActividadGeneral($id);
	if($res){
		header('location: actividadesGenerales.php');
	}else{
		echo "Error al eliminar la Actividad";
	}
}
?>
