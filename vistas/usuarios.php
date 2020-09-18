<?php require_once "parteSuperior.php"?>
 <section class="content">

<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Usuarios Activos en el Sistema
                            </h2><br> 
                            <a href="agregarUsuario.php" type="button" class="btn btn-success waves-effect">Agregar Usuario</a>

                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID_Usuario</th>
                                            <th>Nombre del Usuario</th>
                                            <th>Rol del Usuario</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID_Usuario</th>
                                            <th>Nombre del Usuario</th>
                                            <th>Rol del Usuario</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </tfoot>

                                    	<?php 
												include ('../Controladores/clasesControladores.php');
												$usuarios = new DatosUsuario();
												$listado=$usuarios->leerUsuarios();
											?>


                                    <tbody>

                                    	<?php 
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idUsuarios;
											$nombres=$row->nombreusuario;
											if ($row->rolusuario_idrolusuario == 1) {
												$rolusuario="Administrador";
											}elseif ($row->rolusuario_idrolusuario == 2) {
												$rolusuario="Socio";
											}											
									?>
                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $nombres;?></td>
                                            <td><?php echo $rolusuario;?></td>
                                            <td>
                                            	<a href="editarUsuario.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Editar</a>
                                            </td>
                                            <td>
                                            	<a href="eliminarUsuario.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar</a>
                                            </td>
                                             <td>
                                            	<a href="nuevaContraUsuario.php?id=<?php echo $id;?>" type="button" class="btn btn-warning waves-effect">Actualizar</a>
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