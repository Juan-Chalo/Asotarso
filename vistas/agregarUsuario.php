<?php
session_start ();

if($_SESSION["usuario"] === null)
  header("Location: index.html");


?>
<?php require_once "parteSuperior.php"?>
 <section class="content">
    <div class="container-fluid">


                 <?php
						include ("../Controladores/clasesControladores.php");
						$usuarios= new DatosUsuario();

						if(isset($_POST) && !empty($_POST)){
							$nombres = $usuarios->sanitize($_POST['nombreusuario']);
							$password = $usuarios->sanitize(sha1($_POST['password']));
							$rol = $usuarios->sanitize($_POST['rolusuario']);
							$estado = $usuarios->sanitize($_POST['estado']);

							$res = $usuarios->crearUsuario($nombres, $password, $rol, $estado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Usuario Agregado!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar Usuario :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Nuevo Usuario al Sistema
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Nombre de Usuario</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nombreusuario" name="nombreusuario" class="form-control" placeholder="Ingrese el nombre del Usuario" required>
                                    </div>
                                </div>
                                <label for="password">Contraseña</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese la Contraseña Para el Usuario" required>
                                    </div>
                                </div>

                                   <label for="password">Rol para el usuario</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idrolusuario, descripcion FROM rolusuario");
										?>
                                        <select class="form-control show-tick" name="rolusuario" required>
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


                             <label for="password">Estado del usuario</label>
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
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Usuario</button><br><br>
                                <a href="usuarios.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>
<?php require_once "parteInferior.php"?>
