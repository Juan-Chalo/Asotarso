<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">

   <!-- Basic Table -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">

        <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }

            include ('../Controladores/clasesControladores.php');
                $detalle = new TaxisPilotosAsignados();
                $detallePiloto=$detalle->verDetallePiloto($id);
        ?>
                      <div class="header">
                          <h1>
                            DETALLES DEL PILOTO: <?php echo $detallePiloto->NombrePilotos;?>
                              <br><br><small>Datos Generales del Piloto Seleccionado</small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Nombres del Piloto:
                              <br><br><small><?php echo $detallePiloto->NombrePilotos;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Apellidos del Piloto:
                              <br><br><small><?php echo $detallePiloto->ApellidosPilotos;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Numero de DPI:
                              <br><br><small><?php echo $detallePiloto->NoDPI;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Direccion del Piloto:
                              <br><br><small><?php echo $detallePiloto->Direccion;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            No. Telefonico del Piloto:
                              <br><br><small><?php echo $detallePiloto->Telefono;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Numero de Licencia de Conducir:
                              <br><br><small><?php echo $detallePiloto->NoLicencia;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Fecha de Vencimiento de Licencia:
                              <br><br><small><?php echo $detallePiloto->FechaVencimientoLicencia;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Fecha Vencimiento de Antecedentes Penales:
                              <br><br><small><?php echo $detallePiloto->FechaVencimientoAntecedentes;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <h1>
                            Tipo de Piloto Actual:
                            <?php
                            if ($detallePiloto->TipoPiloto_idTipoPiloto == 1) {
                              $tipoPiloto = "Piloto TITULAR";
                            }else {
                              $tipoPiloto = "Piloto SUPLENTE";
                            }
                             ?>
                              <br><br><small><?php echo $tipoPiloto;?></small>
                          </h1>
                          <ul class="header-dropdown m-r--5">
                          </ul>
                      </div>
                      <div class="header">
                          <a href="pilotosSocio.php" class="btn btn-primary m-t-15 waves-effect"> VOLVER </a>
                      </div>

                  </div>
              </div>
          </div>
          <!-- #END# Basic Table -->


 </section>
 <?php require_once "parteInferiorSocio.php"?>
