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
						$circulares= new Circulares();

						if(isset($_POST) && !empty($_POST)){
							$asunto = $circulares->sanitize($_POST['asunto']);
							$descripcion = $circulares->sanitize($_POST['Descripción']);
							$fecha = $circulares->sanitize($_POST['Fecha']);
                            $lugar = $circulares->sanitize($_POST['Lugar']);
							$estado = $circulares->sanitize($_POST['estado']);
              $hora = $circulares->sanitize($_POST['hora']);

							$res = $circulares->agregarCircular($asunto, $descripcion, $fecha, $lugar, $hora, $estado);
							if($res){
								echo "<div class='alert alert-success' role='alert'>Circular enviada!</div>";
							}else{
								echo "<div class='alert alert-danger' role='alert'>Error al enviar Circular :(</div>";
							}

						}

				?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Nueva Circular para Socios
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Asunto/título de la Circular</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Ingrese el Asunto de la Circular">
                                    </div>
                                </div>

                                <label for="email_address">Descripción de la Circular</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="Descripción" name="Descripción" class="form-control" placeholder="Ingrese La Descripción de la actividad"></textarea>

                                    </div>
                                </div>

                                <label for="email_address">Ingrese la Fecha para la actividad</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="Fecha" name="Fecha" class="form-control">
                                    </div>
                                </div>

                                <label for="email_address">Lugar de la actividad</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="Lugar" name="Lugar" class="form-control" placeholder="Ingrese el Lugar donde se realizará la actividad">
                                    </div>
                                </div>

                                <label for="email_address">Hora</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="hora" name="hora" class="form-control" placeholder="Ingrese la hora de inicio de la Actividad">
                                    </div>
                                </div>

                                 <label for="password">Estado de la Circular</label>
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
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Circular</button><br><br>
                                <a href="AdminPanel.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->



</div>
</section>
<?php require_once "parteInferior.php"?>
