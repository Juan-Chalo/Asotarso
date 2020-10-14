<?php require_once "parteSuperior.php"?>
 <section class="content">


                <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }

                include ("../Controladores/clasesControladores.php");
                $circular= new Circulares();
                $datos_circular=$circular->single_record($id);
            ?>


            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">DETALLE DE LA CIRCULAR Numero: <?php echo $datos_circular->idActividades; ?></div><br><br><br>
                        <div class="font-bold m-b--35">Asunto de la Circular:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_circular->asunto; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>
                        <div class="font-bold m-b--35">Descripcion de la Circular:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_circular->DescripcionActividades; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>
                        <div class="font-bold m-b--35">Fecha a realizarse la Actividad:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_circular->FechaActividad; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>
                        <div class="font-bold m-b--35">Lugar:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_circular->LugarActividad; ?>
                                <span class="pull-right"></span>
                            </li><br>
                            <div class="font-bold m-b--35">Hora:</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                      <?php echo $datos_circular->hora; ?>
                                    <span class="pull-right"></span>
                                </li>
                            <br><br>
                          <div class="font-bold m-b--35">===================================</div><br><br>
                          <div class="font-bold m-b--35">Atentamente:</div>
                          <ul class="dashboard-stat-list">
                              <li>
                                    Junta Directiva, ASOTARSO.
                                  <span class="pull-right"></span>
                              </li>
                          <div class="font-bold m-b--35">===================================</div><br><br>
                          <a href="adminPanel.php" type="button" class="btn btn-info waves-effect">Enterado</a>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->




</section>
<?php require_once "parteInferior.php"?>
