<?php require_once "parteSuperior.php"?>
 <section class="content">
 <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }

                include ("../Controladores/clasesControladores.php");
                $pilotosP= new Piloto();

                if(isset($_POST) && !empty($_POST)){
                    $name = $pilotosP->sanitize($_POST['name']);
                    $apellido = $pilotosP->sanitize($_POST['apellidosP']);
                    $dpI = $pilotosP->sanitize($_POST['dpi']);
                    $direc = $pilotosP->sanitize($_POST['direccion']);
                    $cel = $pilotosP->sanitize($_POST['telefono']);
                    $nLicencia = $pilotosP->sanitize($_POST['Nlicencia']);
                    $vLicencia = $pilotosP->sanitize($_POST['Flicencia']);
                    $vAntecedentes = $pilotosP->sanitize($_POST['Fantecedentes']);
                    $id_pilotos=intval($_POST['id_piloto']);
                    $res = $pilotosP->actualizarPiloto($name, $apellido,  $dpI, $direc, $cel, $nLicencia, $vLicencia, $vAntecedentes, $id_pilotos);
                    if($res){
                        echo "<div class='alert alert-success' role='alert'>Piloto Actualizado!</div>";

                    }else{
                        echo "<div class='alert alert-danger' role='alert'>Error al Actualizar el Piloto :(</div>";
                    }

                    ?>
                    <?php
                }

               $datos_piloto= $pilotosP->single_record($id);

            ?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               EDITAR Pilotos
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Actualiza el Nombre del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->NombrePilotos;?>" type="text" id="name" name="name" class="form-control" required>
                                        <input type="hidden" name="id_piloto" id="id_piloto" maxlength="100" value="<?php echo $datos_piloto->idPilotos;?>">
                                    </div>
                                </div>

                                <label for="email_address">Actualiza los Apellidos del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->ApellidosPilotos;?>" type="text" id="apellidosP" name="apellidosP" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actualiza el DPI del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->NoDPI;?>" type="text" id="dpi" name="dpi" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actializa la Direccion del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->Direccion;?>" type="text" id="direccion" name="direccion" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actializa el Telefono del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->Telefono ;?>" type="text" id="telefono" name="telefono" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actializa el Numero de Licencia del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->NoLicencia;?>" type="text" id="Nlicencia" name="Nlicencia" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actializa la Fecha de Vencimiento de la Licencia del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->FechaVencimientoLicencia;?>" type="date" id="Flicencia" name="Flicencia" class="form-control" required>
                                    </div>
                                </div>

                                <label for="email_address">Actializa la Fecha de Vencimiento de los antecedentes del Piloto?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_piloto->FechaVencimientoAntecedentes;?>" type="date" id="Fantecedentes" name="Fantecedentes" class="form-control" required>
                                    </div>
                                </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Piloto</button><br><br>
                                <a href="mostrarPilotos.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
















</section>





<?php require_once "parteInferior.php"?>
