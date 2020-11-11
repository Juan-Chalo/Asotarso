<?php require_once "parteSuperior.php"?>
 <section class="content">

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="background-color: red; color: white;">
                                LISTA DE ANTECEDENTES PENALES A VENCER EN LOS PROXIMOS 10 DIAS.
                            </h2><br>
                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                    <thead>
                                        <tr>
                                            <th>No.Piloto</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Numero Telefonico</th>
                                            <th>Vencimiento Antecedentes</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>No.Piloto</th>
                                          <th>Nombres</th>
                                          <th>Apellidos</th>
                                          <th>Numero Telefonico</th>
                                          <th>Vencimiento Antecedentes</th>
                                        </tr>
                                    </tfoot>

                                    	<?php
												include ('../Controladores/clasesControladores.php');
												$antecedentesVencidos = new FechasVencimientos();
												$listado=$antecedentesVencidos->VerAntecedentesAvencer();
											?>


                                    <tbody>

                                    	<?php
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idPilotos;
											$nombre=$row->NombrePilotos;
											$apellidos=$row->ApellidosPilotos;
                      $telefono=$row->Telefono;
                      $vencimiento=$row->FechaVencimientoAntecedentes;

									?>
                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $nombre;?></td>
                                            <td><?php echo $apellidos;?></td>
                                            <td><?php echo $telefono;?></td>
                                            <td><?php echo $vencimiento;?></td>
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
