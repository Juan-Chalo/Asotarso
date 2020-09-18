<?php require_once "parteSuperior.php"?>
 <section class="content">


                  <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }
                
                include ("../Controladores/clasesControladores.php");
                $usuarios= new DatosUsuario();
                
                if(isset($_POST) && !empty($_POST)){
                    $nombres = $usuarios->sanitize($_POST['nombreusuario']);
                    $rol = $usuarios->sanitize($_POST['rolusuario']);
                    $id_usuario=intval($_POST['id_usuario']);
                    $res = $usuarios->actualizarUsuario($nombres, $rol, $id_usuario);
                    if($res){
                        echo "<div class='alert alert-success' role='alert'>Usuario Actualizado!</div>";
                        
                    }else{
                        echo "<div class='alert alert-danger' role='alert'>Error al Actualizar el Usuario :(</div>";
                    }
                    
                    ?>  
                    <?php
                }
                $datos_usuario=$usuarios->single_record($id);
            ?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               EDITAR DATOS DEL USUARIOS
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Nuevo Nombre para el Usuario?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_usuario->nombreusuario;?>" type="text" id="nombreusuario" name="nombreusuario" class="form-control" required>
                                        <input type="hidden" name="id_usuario" id="id_usuario" maxlength="100" value="<?php echo $datos_usuario->idUsuarios;?>">
                                    </div>
                                </div>
                                   <label for="password">Nuevo Rol para el usuario?</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idrolusuario, descripcion FROM rolusuario"); 
										?>
                                        <select class="form-control show-tick" name="rolusuario">
                                        	<?php 

										while($datos = mysqli_fetch_array($query2))
											{ 

											?>
                                        	<option value="<?php echo $datos['idrolusuario']?>"><?php echo $datos['descripcion']; ?></option>

                                        	<?php
												} 
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Usuario</button><br><br>
                                <a href="usuarios.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->




</section>
<?php require_once "parteInferior.php"?>