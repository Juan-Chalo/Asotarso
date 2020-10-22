<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Lista de Reportes Multas en la Organizacion
                            </h2>

                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No.Reporte</th>
                                            <th>Descripcion</th>
                                            <th>Reporte</th>
                                            <th>Fecha de Ingreso</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.Reporte</th>
                                            <th>Descripcion</th>
                                            <th>Reporte</th>
                                            <th>Fecha de Ingreso</th>
                                        </tr>
                                    </tfoot>

                                    	<?php
												include ('../Controladores/clasesControladores.php');
												$reportes = new MultasCuotas();
												$listado=$reportes->verReporteMultasOrganizacion();
											?>


                                    <tbody>

                                    	<?php
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idMultas;
											$descripcion=$row->DescripcionMulta;
                                            $reporte=$row->documento;
                                            $fecha=$row->FechadeEmision;
									?>
                                        <tr>
                                          <td><?php echo $id;?></td>
                                          <td><?php echo $descripcion;?></td>
                                          <td><?php echo "<a href='".$reporte."'>Descargar</a>"?></td>
                                          <td><?php echo $fecha;?></td>

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
<?php require_once "parteInferiorSocio.php"?>
