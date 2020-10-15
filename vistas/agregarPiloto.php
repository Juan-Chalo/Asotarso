<?php require_once "parteSuperior.php"?>

<section class="content">
    <div class="container-fluid">

             <?php
                        include ("../Controladores/clasesControladores.php");
                        $pilotosP= new Piloto();

                        if(isset($_POST) && !empty($_POST)){
                            $namepiloto = $pilotosP->sanitize($_POST['nombrePiloto']);
                            $apellidosPiloto = $pilotosP->sanitize($_POST['apellidosPiloto']);
                            $dpi = $pilotosP->sanitize($_POST['codigo']);
                            $direccionP = $pilotosP->sanitize($_POST['direccionPiloto']);
                            $telefonoP = $pilotosP->sanitize($_POST['telefonoPiloto']);
                            $licencia = $pilotosP->sanitize($_POST['licencia']);
                            $vencimientolicencia = $pilotosP->sanitize($_POST['fechaVencimiento']);
                            $antecedentes = $pilotosP->sanitize($_POST['antecedentes']);
                            $rolpiloto = $pilotosP->sanitize($_POST['tipopiloto']);
                            $estado = $pilotosP->sanitize($_POST['estado']);

                            $res = $pilotosP->agregarPiloto($namepiloto,$apellidosPiloto,$dpi,$direccionP,$telefonoP,$licencia,$vencimientolicencia,$antecedentes,$rolpiloto,$estado);


                            if($res){
                                echo "<div class='alert alert-success' role='alert'>Piloto Agregado!</div>";
                            }else{
                                echo "<div class='alert alert-danger' role='alert'>Error al agregar al Piloto:(</div>";
                            }

                        }

                ?>







    		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Agregar Piloto al Sistema
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Nombre</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nombrePiloto" name="nombrePiloto" class="form-control" placeholder="Ingrese el nombre del Piloto" required>
                                    </div>
                                </div>
                                <label for="email_address">Apellidos</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="apellidosPiloto" name="apellidosPiloto" class="form-control" placeholder="Ingrese los apellidos del Piloto" required>
                                    </div>
                                </div>

                                 <label for="email_address">DPI</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Ingrese el DPI del Piloto" required>
                                    </div>
                                </div>

                                <label for="email_address">Direccion</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="direccionPiloto" name="direccionPiloto" class="form-control" placeholder="Ingrese la direccion del piloto" required>
                                    </div>
                                </div>

                                 <label for="email_address">Telefono</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="telefonoPiloto" name="telefonoPiloto" class="form-control" placeholder="Ingrese el numero de telefono del piloto" required>
                                    </div>
                                </div>

                                <label for="email_address">No. Licencia</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="licencia" name="licencia" class="form-control" placeholder="Ingrese el numero de licencia del piloto" required>
                                    </div>
                                </div>

                                <label for="email_address">Fecha de vencimiento de la licencia</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="fechaVencimiento" name="fechaVencimiento" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Fecha de vencimiento de antecedentes del piloto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="antecedentes" name="antecedentes" class="form-control" required>
                                    </div>
                                </div>


                                   <label for="password">Tipo Piloto</label>
                                  <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
                                         $query=mysqli_query($connect,"SELECT idTipoPiloto, DescripcionTipoPiloto  FROM tipopiloto");
                                        ?>
                                        <select class="form-control show-tick" name="tipopiloto" required>
                                            <?php

                                        while($datos = mysqli_fetch_array($query))
                                            {

                                            ?>
                                            <option value="<?php echo $datos['idTipoPiloto']?>"><?php echo $datos['DescripcionTipoPiloto']; ?></option>

                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <label for="password">Estado del Producto</label>
                               <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                	<?php
				 						 $query2=mysqli_query($connect,"SELECT idEstado, Estado FROM estado");
										?>
                                        <select class="form-control show-tick" name="estado" required>
                                        	<?php

										while($datos2 = mysqli_fetch_array($query2))
											{

											?>
                                        	<option value="<?php echo $datos2['idEstado']?>"><?php echo $datos2['Estado']; ?></option>

                                        	<?php
												}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Agregar Piloto</button><br><br>
                                <a href="mostrarPilotos.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

</div>
</section>

<?php require_once "parteInferior.php"?>
