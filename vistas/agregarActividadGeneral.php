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
						$actividad= new ActividadesGenerales();

						if(isset($_POST) && !empty($_POST)){
							$descripcion = $actividad->sanitize($_POST['descripcion']);
							$fecha = $actividad->sanitize($_POST['fecha']);
              $lugar = $actividad->sanitize($_POST['lugar']);
					    $Estado = $actividad->sanitize($_POST['estado']);
              $hora = $actividad->sanitize($_POST['hora']);
							$res = $actividad->agregarActividad($descripcion,$fecha,$lugar,$hora,$Estado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Actividad Agregada!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar la Actividad :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar nueva actividad para mostrar en la "Landing Page".
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="NombreSocio">Descripcion o Nombre de la Actividad:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                                    </div>
                                </div>
                                <label for="ApellidosSocios">Fecha de la Actividad:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                                    </div>
                                </div>
                                <label for="ApellidosSocios">Lugar para la Actividad:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="lugar" name="lugar" class="form-control" required>
                                    </div>
                                </div>
                              </div>
                              <label for="ApellidosSocios">Hora de Inicio de la Actividad:</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" id="hora" name="hora" class="form-control" required>
                                  </div>
                              </div>

                             <label for="password">Estado de la Actividad</label>
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
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Actividad</button><br><br>
                                <a href="actividadesGenerales.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>
<?php require_once "parteInferior.php"?>
