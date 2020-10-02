

<?php require_once "parteSuperior.php"?>
 <section class="content">

<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listados de Productos en el Sistema
                            </h2><br> 
                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                    <thead>
                                        <tr>
                                            <th>ID_Producto</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Existencia</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID_Producto</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Existencia</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>
                                            
                                        </tr>
                                    </tfoot>

                                    	<?php 
												include ('../Controladores/clasesControladores.php');
												$productos = new Producto();
												$listado=$productos->leerProducto();
											?>


                                    <tbody>

                                    	<?php 
										while ($row=mysqli_fetch_object($listado)){
											$id=$row->idProducto;
											$codigo=$row->codigo;
											$nombre=$row->nombreProducto;
											$precio=$row->precioProducto;
											$existencia=$row->Existencia;											
									?>
                                        <tr>
                                            <td><?php echo $id;?></td>
                                             <td><?php echo $codigo;?></td>
                                            <td><?php echo $nombre;?></td>
                                            <td><?php echo $precio;?></td>
                                            <td><?php echo $existencia;?></td>
                                            <td>
                                            	<a href="actualizarProducto.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Editar</a>
                                            </td>
                                            <td>
                                            	<a href="eliminarProducto.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar</a>
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

   ?>
   