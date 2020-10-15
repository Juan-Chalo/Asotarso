
<?php require_once "parteSuperior.php"?>

 <section class="content">
    <div class="container-fluid">


                 <?php
						include ("../Controladores/clasesControladores.php");
						$productos= new Producto();

						if(isset($_POST) && !empty($_POST)){
							$codigo = $productos->sanitize($_POST['codigo']);
							$nameProducto = $productos->sanitize($_POST['nameProducto']);
							$precio = $productos->sanitize($_POST['precioProducto']);
                            $existencia = $productos->sanitize($_POST['existencia']);
							$rolCategoria = $productos->sanitize($_POST['categoriaproducto']);
							$estado = $productos->sanitize($_POST['estado']);

							$res = $productos->agregarProducto($codigo, $nameProducto, $precio, $existencia, $rolCategoria, $estado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Producto Agregado!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar Producto:(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Nuevo Repuesto al Sistema
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Codigo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Ingrese el codigo del producto" required>
                                    </div>
                                </div>
                                <label for="email_address">Nombre del Repuesto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="tex" id="nombreProducto" name="nameProducto" class="form-control" placeholder="Ingrese el nombre del producto" required>
                                    </div>
                                </div>

                                 <label for="email_address">Precio del Repuesto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="tex" id="precioProducto" name="precioProducto" class="form-control" placeholder="Ingrese el precio del producto" required>
                                    </div>
                                </div>

                                <label for="email_address">Existencia</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="tex" id="existencia" name="existencia" class="form-control" placeholder="Ingrese el precio del producto" required>
                                    </div>
                                </div>

                                   <label for="password">Categoria deL Repuesto</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idCategoriaProducto, nombreCategoria  FROM categoriaproducto");
										?>
                                        <select class="form-control show-tick" name="categoriaproducto" required>
                                        	<?php

										while($datos = mysqli_fetch_array($query2))
											{

											?>
                                        	<option value="<?php echo $datos['idCategoriaProducto']?>"><?php echo $datos['nombreCategoria']; ?></option>

                                        	<?php
												}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <label for="password">Estado del Repuesto</label>
                               <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idEstado, Estado FROM estado");
										?>
                                        <select class="form-control show-tick" name="estado" required>
                                        	<?php

										while($datos = mysqli_fetch_array($query2))
											{

											?>
                                        	<option value="<?php echo $datos['idEstado']?>"><?php echo $datos['Estado']; ?></option>

                                        	<?php
												}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Producto</button><br><br>
                                <a href="mostrarProducto.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>

<?php require_once "parteInferior.php"?>
