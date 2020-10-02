<?php
session_start ();

if($_SESSION["usuario"] === null)
  header("Location: ../index.html");


?>
<?php require_once "parteSuperior.php"?>
 <section class="content">
    <div class="container-fluid">


                 <?php
						include ("../Controladores/clasesControladores.php");
						$Socios= new GestionSocios();

						if(isset($_POST) && !empty($_POST)){
							$NombreSocio = $Socios->sanitize($_POST['NombreSocio']);
							$ApellidoSocio = $Socios->sanitize($_POST['ApellidosSocios']);
                            $TelefonoSocios = $Socios->sanitize($_POST['TelefonoSocios']);
                            $DireccionSocios = $Socios->sanitize($_POST['DireccionSocio']);
                            $CorreoElectronico = $Socios->sanitize($_POST['CorreoSocio']);
					       	$Estado_idEstado = $Socios->sanitize($_POST['estado']);
							$res = $Socios->AgregarSocio($NombreSocio, $ApellidoSocio, $TelefonoSocios, $DireccionSocios, $CorreoElectronico, $Estado_idEstado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Socio Agregado!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar Socio :(</div>";
							}
							
						}
	
				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Nuevo Socio al Sistema
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="NombreSocio">Nombres del Socio</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="NombreSocio" name="NombreSocio" class="form-control" placeholder="Ingrese los nombres del Socio">
                                    </div>
                                </div>
                                <label for="ApellidosSocios">Apellidos</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="ApellidosSocios" name="ApellidosSocios" class="form-control" placeholder="Ingrese los apellidos del socio">
                                    </div>
                                </div>
                                <label for="TelefonoSocios">Telefono Socios</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="TelefonoSocios" name="TelefonoSocios" class="form-control" placeholder="Ingrese el numero telefonico del socio">
                                    </div>
                                </div>
                                <label for="DireccionSocio">Direccion Socio</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="DireccionSocio" name="DireccionSocio" class="form-control" placeholder="Ingrese la direccion del socio">
                                    </div>
                                </div>
                                <label for="CorreoSocio">Correo Electronico</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="CorreoSocio" name="CorreoSocio" class="form-control" placeholder="Ingrese los apellidos del socio">
                                    </div>
                                </div>


                             <label for="password">Estado del Socio</label>
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
                                        	<option value="<?php echo $datos['idEstado']?>"><?php echo $datos['Estado']; ?></option>

                                        	<?php
												} 
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Socio</button><br><br>
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