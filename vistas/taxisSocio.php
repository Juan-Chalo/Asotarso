<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

   <!-- Basic Table -->
          <div class="row clearfix"><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                            Taxis Asignados a <?php echo $_SESSION["usuario"]; ?>
                              <small>  Su lista de Taxis Asignados</small>
                          </h2>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="body table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>Numero del TAXI</th>
                                      <th>Numero de la Placa del Taxi</th>
                                      <th>Piloto Actual del Taxi</th>
                                  </tr>
                              </thead>
                              <?php
                              include ('../Controladores/clasesControladores.php');
                              $mistaxis = new TaxisPilotosAsignados();
                              $nombreUsuario=$_SESSION["usuario"];
                              $id_usuario=$mistaxis->obtenerUsuario($nombreUsuario);
                              $listado=$mistaxis->verTaxisAsignados($id_usuario->idUsuarios);
                              ?>

                              <tbody>

                                <?php
                                      while ($row=mysqli_fetch_object($listado)){
                                          $id=$row->idTaxi;
                                          $numero=$row->NumeroTaxi;
                                          $placa=$row->PlacaTaxi;
                                          $piloto=$row->NombrePilotos;
                                          $apellidos=$row->ApellidosPilotos;

                                  ?>
                                  <tr>
                                      <td><?php echo $numero;?></td>
                                      <td><?php echo $placa;?></td>
                                      <td><?php echo $piloto." ".$apellidos?></td>
                                  </tr>
                                  <?php
                                    }
                                  ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Table -->


 </section>
 <?php require_once "parteInferiorSocio.php"?>
