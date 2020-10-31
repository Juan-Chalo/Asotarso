<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Lista de Repuestos Activos /REPUESTOS ASOTARSO -CHIQUIMULILLA.
                            </h2>

                        </div>

                        <div class="body">
                        	<h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Nombre del Repuesto</th>
                                            <th>Codigo del Producto</th>
                                            <th>Precio del Producto</th>
                                            <th>Categoria</th>
                                            <th>En Existencia</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <<th>Nombre del Repuesto</th>
                                            <th>Codigo del Producto</th>
                                            <th>Precio del Producto</th>
                                            <th>Categoria</th>
                                            <th>En Existencia</th>
                                        </tr>
                                    </tfoot>

                                    	<?php
                                      include ('../Controladores/clasesControladores.php');
                                    	$repuestos = new Producto();
                                    	$listado=$repuestos->leerProducto();
											?>


                                    <tbody>

                                    	<?php
                                      while ($row=mysqli_fetch_object($listado)){
                                      $nombreProducto=$row->nombreProducto;
                                      $precioProducto=$row->precioProducto;
                                      $codigo=$row->codigo;
                                      $existencia=$row->Existencia;
                                      $Categoria=$row->CategoriaProducto_idCategoriaProducto;
                                      if ($row->CategoriaProducto_idCategoriaProducto == 1) {
                                        $Categoria="Accesorios";
                                      }elseif ($row->CategoriaProducto_idCategoriaProducto == 2) {
                                          $Categoria="Carroceria";
                                      }elseif ($row->CategoriaProducto_idCategoriaProducto == 3) {
                                        $Categoria="Frenos";
                                      }elseif ($row->CategoriaProducto_idCategoriaProducto == 4) {
                                        $Categoria="Motor";
                                      }elseif ($row->CategoriaProducto_idCategoriaProducto == 5) {
                                        $Categoria="Suspención";
                                      }elseif ($row->CategoriaProducto_idCategoriaProducto == 6) {
                                        $Categoria="Transmisión";
                                      }
									?>
                                        <tr>
                                          <td><?php echo $nombreProducto;?></td>
                                          <td><?php echo $codigo;?></td>
                                          <td><?php echo $precioProducto;?></td>
                                          <td><?php echo $Categoria;?></td>
                                          <td><?php echo $existencia; ?></td>

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
