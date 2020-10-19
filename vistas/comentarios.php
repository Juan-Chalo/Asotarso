<?php require_once "parteSuperior.php"?>
 <section class="content">

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Comentarios No Leidos
                            </h2><br>
                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                    <thead>
                                        <tr>
                                            <th>Asunto</th>
                                            <th>Enviado por</th>
                                            <th>Opcion1</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Asunto</th>
                                          <th>Enviado por</th>
                                          <th>Opcion1</th>

                                        </tr>
                                    </tfoot>

                                    	<?php
												include ('../Controladores/comentariocontroller.php');
												$comentarios = new Comentario();
												$listado=$comentarios->verComentarios();
											?>


                                    <tbody>

                                    	<?php
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->id_comentario;
											$asunto=$row->asunto;
											$nombre=$row->nombre;

									?>
                                        <tr>
                                            <td><?php echo $asunto;?></td>
                                            <td><?php echo $nombre;?></td>
                                            <td>
                                            	<a href="verdetalleComentario.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Ver Detalles</a>
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
