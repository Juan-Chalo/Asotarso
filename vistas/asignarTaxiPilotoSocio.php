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
						$asignacion= new socioTaxiPiloto();

						if(isset($_POST) && !empty($_POST)){
							$id_taxi = $asignacion->sanitize($_POST['id_taxi']);
							$id_usuario = $asignacion->sanitize($_POST['socio']);
							$id_piloto = $asignacion->sanitize($_POST['id_piloto']);

							$res = $asignacion->asignarTaxiPiloto($id_taxi,$id_usuario,$id_piloto);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Taxi y Piloto Asignados!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al Asignar :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Asignar TAXI Y PILOTO A SOCIOS
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">

                            <label for="password">Seleccionar el SOCIO</label>
                              <div class="body">
                           <div class="row clearfix">
                               <div class="col-sm-6">
                                 <?php
                    $query=mysqli_query($connect,"SELECT idUsuarios, nombreusuario FROM usuarios WHERE rolusuario_idrolusuario=2");
                   ?>
                                       <select class="form-control show-tick" name="socio" required>
                                         <?php

                   while($datos = mysqli_fetch_array($query))
                     {

                     ?>
                                         <option value="<?php echo $datos['idUsuarios']?>"><?php echo $datos['nombreusuario']; ?></option>

                                         <?php
                       }
                     ?>
                                       </select>
                                   </div>
                               </div>
                           </div>

                                   <label for="password">Elegir TAXI (*numero)</label>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idTaxi, NumeroTaxi FROM taxi");
										?>
                                        <select class="form-control show-tick" name="id_taxi" required>
                                        	<?php

										while($datos2 = mysqli_fetch_array($query2))
											{

											?>
                                        	<option value="<?php echo $datos2['idTaxi']?>"><?php echo $datos2['NumeroTaxi']; ?></option>

                                        	<?php
												}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <label for="password">Elegir el Piloto</label>
                 <div class="body">
                     <div class="row clearfix">
                         <div class="col-sm-6">
                           <?php
              $query3=mysqli_query($connect,"SELECT idPilotos, NombrePilotos, ApellidosPilotos FROM pilotos WHERE Estado_idEstado=1");
             ?>
                                 <select class="form-control show-tick" name="id_piloto" required>
                                   <?php

             while($datos3 = mysqli_fetch_array($query3))
               {

               ?>
                                   <option value="<?php echo $datos3['idPilotos']?>"><?php echo $datos3['NombrePilotos'].' '.$datos3['ApellidosPilotos']; ?></option>

                                   <?php
                 }
               ?>
                                 </select>
                             </div>
                         </div>
                     </div>


                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Asignacion</button><br><br>
                                <a href="adminPanel.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>
<?php require_once "parteInferior.php"?>
