<?php require_once "parteSuperior.php"?>
 <section class="content">


                  <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }
                
                include ("../Controladores/clasesControladores.php");
                $productos= new Producto();
                
                if(isset($_POST) && !empty($_POST)){
                    $codigo = $productos->sanitize($_POST['codigo']);
                    $nameProducto = $productos->sanitize($_POST['nombreProducto']);
                    $precio = $productos->sanitize($_POST['precioProducto']);
                    $cantidad = $productos->sanitize($_POST['Existencia']);
                   // $rol1 = $productos->sanitize($_POST['categoriaproducto']);
                  //$rol2 = $productos->sanitize($_POST['estado']);
                    $id_productos=intval($_POST['id_producto']);
                    $res = $productos->actualizarProducto($codigo, $nameProducto,  $precio, $cantidad, $id_productos);
                    if($res){
                        echo "<div class='alert alert-success' role='alert'>Producto Actualizado!</div>";
                        
                    }else{
                        echo "<div class='alert alert-danger' role='alert'>Error al Actualizar el Producto :(</div>";
                    }
                    
                    ?>  
                    <?php
                }

               $datos_producto= $productos->single_record($id);

            ?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               EDITAR PRODUCTOS 
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Nuevo Codigo del Producto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_producto->codigo;?>" type="text" id="codigo" name="codigo" class="form-control" required>
                                        <input type="hidden" name="id_producto" id="id_producto" maxlength="100" value="<?php echo $datos_producto->idProducto;?>">
                                    </div>
                                </div>

                                <label for="email_address">Nuevo Nombre del Producto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_producto->nombreProducto;?>" type="text" id="nombreProducto" name="nombreProducto" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Nuevo Precio del Producto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_producto->precioProducto;?>" type="text" id="precioProducto" name="precioProducto" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Nuevo Cantidad de Existencia del Producto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_producto->Existencia;?>" type="text" id="Existencia" name="Existencia" class="form-control" required>
                                    </div>
                                </div>

                                  <!--<label for="password">Nueva Categoria del Producto?</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						/* $query2=mysqli_query($connect,"SELECT idCategoriaProducto, nombreCategoria FROM categoriaproducto"); 
										?>
                                        <select class="form-control show-tick" name="categoriaproducto">
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

                             <label for="password">Nueva Estado del Producto?</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idEstado, Estado FROM estado"); 
										?>
                                        <select class="form-control show-tick" name="estado">
                                        	<?php 

										while($datos = mysqli_fetch_array($query2))
											{ 

											?>
                                        	<option value="<?php echo $datos['idEstado']?>"><?php echo $datos['Estado']; ?></option> */

                                        	//<?php
												//} 
											//?> 
                                        </select>
                                    </div>
                                </div>
                            </div> -->


                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Producto</button><br><br>
                                <a href="mostrarProducto.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->




</section>





<?php require_once "parteInferior.php"?>