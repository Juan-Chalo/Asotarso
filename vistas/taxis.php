<?php require_once "parteSuperior.php"?>
 <section class="content">

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Taxis
                            </h2><br>
                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                    <thead>
                                        <tr>
                                            <th>Numero del Taxi</th>
                                            <th>Placa del Taxi</th>
                                            <th>Opcion1</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Numero del Taxi</th>
                                          <th>Placa del Taxi</th>
                                          <th>Opcion1</th>

                                        </tr>
                                    </tfoot>

                                    	<?php
												include ('../Controladores/clasesControladores.php');
												$taxis = new GestionTaxis();
												$listado=$taxis->verTaxis();
											?>


                                    <tbody>

                                    	<?php
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idTaxi;
											$Numero=$row->NumeroTaxi;
											$Placa=$row->PlacaTaxi;

									?>
                                        <tr>
                                            <td><?php echo $Numero;?></td>
                                            <td><?php echo $Placa;?></td>
                                            <td>
                                            	<a href="eliminarTaxi.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar Taxi</a>
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
