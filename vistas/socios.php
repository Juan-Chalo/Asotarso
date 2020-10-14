<?php require_once "parteSuperior.php"?>
 <section class="content">
<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Vista de Socios Activos
                            </h2><br>
                            <a href="gestionSocios.php" type="button" class="btn btn-success waves-effect">Agregar Nuevo Socio</a>

                        </div>

                        <div class="body">
                          <h4>Exportar en:</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id Socio</th>
                                            <th>Nombre del Socio</th>
                                            <th>Apellidos del Socios</th>
                                            <th>No.Telefono</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Opcion1</th>
                                            <th>Opcion2</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Id Socio</th>
                                          <th>Nombre del Socio</th>
                                          <th>Apellidos del Socios</th>
                                          <th>No.Telefono</th>
                                          <th>Direccion</th>
                                          <th>Correo</th>
                                          <th>Opcion1</th>
                                          <th>Opcion2</th>
                                        </tr>
                                    </tfoot>

                                      <?php
                        include ('../Controladores/clasesControladores.php');
                        $socios = new GestionSocios();
                        $listado=$socios->verSocios();
                      ?>


                                    <tbody>

                                      <?php
                    while ($row=mysqli_fetch_object($listado)){
                      $id=$row->idSocios;
                      $nombre=$row->NombreSocio;
                      $apellidos=$row->ApellidosSocio;
                      $telefono=$row->TelefonoSocios;
                      $direccion=$row->DireccionSocios;
                      $correo=$row->CorreoElectronico;
                  ?>
                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $nombre;?></td>
                                            <td><?php echo $apellidos;?></td>
                                            <td><?php echo $telefono;?></td>
                                            <td><?php echo $direccion;?></td>
                                            <td><?php echo $correo;?></td>
                                            <td>
                                              <a href="detalleSocios.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Ver Detalles</a>
                                            </td>
                                            <td>
                                              <a href="eliminarSocios.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar</a>
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
            </div>
            <!-- #END# Exportable Table -->


</section>
<?php require_once "parteInferior.php"?>
