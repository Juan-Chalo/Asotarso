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
						$Taxis= new GestionTaxis();

						if(isset($_POST) && !empty($_POST)){
							$NumeroTaxi = $Taxis->sanitize($_POST['NumeroTaxi']);
							$PlacaTaxi = $Taxis->sanitize($_POST['Placa']);
					    $Estado = $Taxis->sanitize($_POST['estado']);
							$res = $Taxis->AgregarTaxi($NumeroTaxi,$PlacaTaxi,$Estado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>TAXI Agregado!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar TAXI :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Nuevo Taxi al Sistema
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="NombreSocio">Numero del Taxi:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="NumeroTaxi" name="NumeroTaxi" class="form-control" required>
                                    </div>
                                </div>
                                <label for="ApellidosSocios">Placa del Taxi:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="Placa" name="Placa" class="form-control" placeholder="Ingrese la Placa del Taxi" required>
                                    </div>
                                </div>

                             <label for="password">Estado del Taxi</label>
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
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar TAXI</button><br><br>
                                <a href="taxis.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>
<?php require_once "parteInferior.php"?>
