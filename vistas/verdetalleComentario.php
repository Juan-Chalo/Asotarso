<?php require_once "parteSuperior.php"?>
 <section class="content">


                <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }

                include ("../Controladores/comentariocontroller.php");
                $comentario= new Comentario();
                $datos_comentario=$comentario->single_record($id);
            ?>


            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">DETALLE DEL COMENTARIO ENVIADO POR: <?php echo $datos_comentario->nombre; ?></div><br><br><br>
                        <div class="font-bold m-b--35">Asunto de la Circular:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_comentario->asunto; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>
                        <div class="font-bold m-b--35">Descripcion / Comentario / Queja enviada:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_comentario->mensaje; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>
                        <div class="font-bold m-b--35">Correo electronico del Emisor:</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                  <?php echo $datos_comentario->correo; ?>
                                <span class="pull-right"></span>
                            </li>
                        </ul>

                          <div class="font-bold m-b--35">===================================</div><br><br>
                          <a href="eliminarComentario.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">MARCAR COMO LEIDO</a>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->




</section>
<?php require_once "parteInferior.php"?>
