<?php require_once "parteSuperior.php"?>
 <section class="content">

<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Finanzas Directiva
                            </h2><br> 
                            <a href="agregarReporteDirectiva.php" type="button" class="btn btn-success waves-effect">Agregar Reporte</a>

                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID_Reporte</th>
                                            <th>Descripcion</th>
                                            <th>Reporte</th>
                                            <th>Fecha de Ingreso</th>
                                            <th>Eliminar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID_Reporte</th>
                                            <th>Descripcion</th>
                                            <th>Reporte</th>
                                            <th>Fecha de Ingreso</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </tfoot>

                                    	<?php 
												include ('../Controladores/clasesControladores.php');
												$reportes = new finanzasDirectiva();
												$listado=$reportes->verFinanzasDirectiva();
											?>


                                    <tbody>

                                    	<?php 
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idReportedirectiva;
											$descripcion=$row->descripcion;
                                            $reporte=$row->reporte;
                                            $fecha=$row->fecha;										
									?>
                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $descripcion;?></td>
                                            <td><?php echo "<a href='".$reporte."'>Descargar Reporte</a>"?></td>
                                            <td><?php echo $fecha;?></td>
                                            <td>
                                            	<a href="eliminarReporteDirectiva.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar </a>
                                            </td>
                                            
                                        </tr>
                                        <?php
												}
											?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->





</section>
<?php require_once "parteInferior.php"?>