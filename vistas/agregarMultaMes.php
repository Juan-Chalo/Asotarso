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


                       $documento="";


						if(isset($_POST["Submit"])){
							$descripcion = $_POST['descripcion'];
							$tipo = $_POST['tipo'];
							$estado = $_POST['estado'];

                            $filename=$_FILES["documento"]["name"];
                            $ruta=$_FILES["documento"]["tmp_name"]; //nombre temporal
                            $rutafinal="reportesMensuales"."/".$filename;

                            if (move_uploaded_file($ruta, $rutafinal)) {

                                $documento=$rutafinal;
                            }
                        $res="INSERT INTO multas (DescripcionMulta, FechadeEmision, documento, tipo, Estado_idEstado) VALUES ('$descripcion',  NOW(), '$documento', '$tipo', '$estado')";

                            $resultado =  mysqli_query($connect, $res);

							/*$res = $multa->crearReporteMultaMensual($descripcion, $documento, $tipo, $estado);*/
							if($resultado){
								echo "<div class='alert alert-success' role='alert'>Reporte Agregado!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al agregar el REPORTE :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Reporte Mensual de Cuotas
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post"  enctype="multipart/form-data">
                                <label for="email_address">Descripcion/Nombre/Asunto del Reporte</label>
                                <div class="form-group">
                                    <div class="form-line">
                                       <!--  <input type="text" id="nombreusuario" name="nombreusuario" class="form-control" placeholder="Ingrese el nombre del Usuario"> -->
                                        <input type="text" id="descripcion" name="descripcion" class="form-control" required></input>
                                         <input type="hidden" name="tipo" id="tipo" maxlength="100" value="1">
                                    </div>
                                </div>
                                <label for="password">Fecha de Emision del Reporte</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <p>Se Cargara Automaticamente la Fecha de Carga del Reporte</p>
                                    </div>
                                </div>

                                 <label for="password">Subir Reporte</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="documento" required>
                                    </div>
                                </div>

                             <label for="password">Estado del Reporte</label>
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
                                <input type="submit" name="Submit" class="btn btn-primary m-t-15 waves-effect" value="Agregar Reporte"><br><br>
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
