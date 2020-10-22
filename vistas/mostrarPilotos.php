<?php require_once "parteSuperior.php"?>
 <section class="content">

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listados de Pilotos
                            </h2><br>
                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                    <thead>
                                        <tr>

                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>telefono</th>
                                            <th>Vencimineto de Licencia</th>
                                            <th>Vencimineto de Antecdentes</th>
                                            <th>Tipo Piloto</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>telefono</th>
                                            <th>Vencimineto de Licencia</th>
                                            <th>Vencimineto de Antecdentes</th>
                                            <th>Tipo Piloto</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>

                                        </tr>
                                    </tfoot>

                                    	<?php
												include ('../Controladores/clasesControladores.php');
												$pilotosoP = new Piloto();
												$listado=$pilotosoP->leerPiloto();
											?>


                                    <tbody>

                                    	<?php
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idPilotos;
											$nombre=$row->NombrePilotos;
											$apellidos=$row->ApellidosPilotos;
											$telefono=$row->Telefono;
											$Vlicencia=$row->FechaVencimientoLicencia;
											$Vantecedentes=$row->FechaVencimientoAntecedentes;

											if ($row->TipoPiloto_idTipoPiloto == 1) {
												$tipo = "Piloto Titular";
											}elseif ($row->TipoPiloto_idTipoPiloto == 2) {
                        $tipo = "Piloto Suplente";
                      }


									?>
                                        <tr>

                                            <td><?php echo $nombre;?></td>
                                            <td><?php echo $apellidos;?></td>
                                            <td><?php echo $telefono;?></td>
                                            <td><?php echo $Vlicencia;?></td>
                                            <td><?php echo $Vantecedentes;?></td>
                                            <td><?php echo $tipo;?></td>
                                            <td>
                                            	<a href="actualizarPiloto.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Editar</a>
                                            </td>
                                            <td>
                                            	<a href="eliminarPiloto.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar</a>
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
