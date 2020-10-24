<?php require_once "parteSuperior.php"?>
 <section class="content">
 <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }

                include ("../Controladores/clasesControladores.php");
                $actividades= new ActividadesGenerales();

                if(isset($_POST) && !empty($_POST)){
                    $descripcion = $actividades->sanitize($_POST['descripcion']);
                    $fecha = $actividades->sanitize($_POST['fecha']);
                    $lugar = $actividades->sanitize($_POST['lugar']);
                    $hora = $actividades->sanitize($_POST['hora']);
                    $id_actividad=intval($_POST['id_actividad']);
                    $res = $actividades->actualizarActividadGeneral($descripcion,$fecha,$lugar,$hora,$id_actividad);
                    if($res){
                        echo "<div class='alert alert-success' role='alert'>Actividad Actualizada!</div>";

                    }else{
                        echo "<div class='alert alert-danger' role='alert'>Error al Actualizar la Actividad :(</div>";
                    }

                    ?>
                    <?php
                }

               $datos_actividad= $actividades->single_record($id);

            ?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               EDITAR Actividad
                            </h2>
                        </div>
                        <div class="body">
                          <form method="post">
                                <label for="email_address">Actualizar descripcion o nombre?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_actividad->DescripcionActividades;?>" type="text" id="descripcion" name="descripcion" class="form-control" required>
                                        <input type="hidden" name="id_actividad" id="id_piloto" maxlength="100" value="<?php echo $datos_actividad->idActividades;?>">
                                    </div>
                                </div>

                                <label for="email_address">Actualizar la Fecha para la Actividad?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_actividad->FechaActividad;?>" type="date" id="fecha" name="fecha" class="form-control" required>
                                    </div>
                                </div>
                                <label for="email_address">Actualizar la Hora de la Actividad?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input value="<?php echo $datos_actividad->hora;?>" type="text" id="hora  " name="hora" class="form-control" required>
                                    </div>
                                </div>
                                <label for="email_address">Actualizar el lugar para la Actividad?</label>
                                <div class="form-group">
                                    <div class="form-line">
                                          <input value="<?php echo $datos_actividad->LugarActividad;?>" type="text" id="lugar" name="lugar" class="form-control" required>
                                    </div>
                                </div>

                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Actividad</button><br><br>
                                <a href="actividadesGenerales.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



</section>





<?php require_once "parteInferior.php"?>
