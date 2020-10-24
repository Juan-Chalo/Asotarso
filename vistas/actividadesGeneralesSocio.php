<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

   <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="card">
                          <div class="header">
                              <h2>
                                  Listado de Actividades Activas
                              </h2><br>
                          </div>

                          <div class="body">
                          	<h4>Exportar en:</h4>
                              <div class="table-responsive">
                                  <table class="table table-bordered table-striped table-hover dataTable js-exportable"><br>
                                      <thead>
                                          <tr>

                                              <th>Id de la Actividad</th>
                                              <th>Descripcion/Nombre</th>
                                              <th>Fecha</th>
                                              <th>Lugar</th>
                                              <th>Hora</th>


                                          </tr>
                                      </thead>
                                      <tfoot>
                                          <tr>
                                            <th>Id de la Actividad</th>
                                            <th>Descripcion/Nombre</th>
                                            <th>Fecha</th>
                                            <th>Lugar</th>
                                            <th>Hora</th>

                                          </tr>
                                      </tfoot>

                                      	<?php
  												include ('../Controladores/clasesControladores.php');
  												$actividades = new ActividadesGenerales();
  												$listado=$actividades->verActividadesGenerales();
  											?>


                                      <tbody>

                                      	<?php
  										while ($row=mysqli_fetch_object($listado)){
  											$id=$row->idActividades;
  											$descripcion=$row->DescripcionActividades;
  											$fecha=$row->FechaActividad;
                        $lugar=$row->LugarActividad;
                        $hora=$row->hora;

  									?>
                                          <tr>

                                              <td><?php echo $id;?></td>
                                              <td><?php echo $descripcion;?></td>
                                              <td><?php echo $fecha;?></td>
                                              <td><?php echo $lugar;?></td>
                                              <td><?php echo $hora;?></td>
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
