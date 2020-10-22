<?php require_once "parteSuperior.php"?>
 <section class="content">

   <!-- Exportable Table -->
               <div class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="card">
                           <div class="header">
                               <h2>
                                  Lista de Socios con Usuarios Activos
                               </h2><br>

                           </div>

                           <div class="body">
                           	<h4>Exportar en:</h4>
                               <div class="table-responsive">
                                   <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                       <thead>
                                           <tr>
                                             <th>Id del Socio</th>
                                             <th>Nombre del Socio</th>
                                             <th>Detalles</th>
                                           </tr>
                                       </thead>
                                       <?php
                                       include ('../Controladores/clasesControladores.php');
                                       $socios = new GestionSocios();
                                       $listado=$socios->verSociosActivos();
                                       ?>
                                       <tbody>
                                         <?php
                                               while ($row=mysqli_fetch_object($listado)){
                                                   $id=$row->idUsuarios;
                                                   $nombre=$row->nombreusuario;

                                           ?>
                                           <tr>
                                               <td><?php echo $id;?></td>
                                               <td><?php echo $nombre;?></td>
                                               <td>
                                                   <a href="detalleSociosAdmin.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Ver Detalles</a>
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
