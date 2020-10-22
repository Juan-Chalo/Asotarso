<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

   <!-- Basic Table -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                            Pilotos Asignados a <?php echo $_SESSION["usuario"]; ?>
                              <small>  Su lista de Pilotos Asignados</small>
                          </h2>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="body table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>Nombre del Piloto</th>
                                      <th>Apellidos del Piloto</th>
                                      <th>Detalles del Piloto</th>
                                  </tr>
                              </thead>
                              <?php
                              include ('../Controladores/clasesControladores.php');
                              $mistaxis = new TaxisPilotosAsignados();
                              $nombreUsuario=$_SESSION["usuario"];
                              $id_usuario=$mistaxis->obtenerUsuario($nombreUsuario);
                              $listado=$mistaxis->verPilotosAsignados($id_usuario->idUsuarios);
                              ?>

                              <tbody>

                                <?php
                                      while ($row=mysqli_fetch_object($listado)){
                                          $id=$row->idPilotos;
                                          $nombre=$row->NombrePilotos;
                                          $apellidos=$row->ApellidosPilotos;

                                  ?>
                                  <tr>
                                      <td><?php echo $nombre;?></td>
                                      <td><?php echo $apellidos;?></td>
                                      <td>
                                        <a href="detallePilotosAsignados.php?id=<?php echo $id;?>" class="waves-effect waves-light btn">Ver Detalles</a>
                                      </td>
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
