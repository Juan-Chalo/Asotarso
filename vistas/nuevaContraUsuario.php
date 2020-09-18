<?php require_once "parteSuperior.php"?>
 <section class="content">


                  <?php
                 if (isset($_GET['id'])){
                    $id=intval($_GET['id']);
                    }
                
                include ("../Controladores/clasesControladores.php");
                $usuarios= new DatosUsuario();
                
                if(isset($_POST) && !empty($_POST)){
                  $password = $usuarios->sanitize(sha1($_POST['password']));
                    $id_usuario=intval($_POST['id_usuario']);
                    $res = $usuarios->actualizarContra($password, $id_usuario);
                    if($res){
                        echo "<div class='alert alert-success' role='alert'>CONTRASEÑA Actualizada!</div>";
                        
                    }else{
                        echo "<div class='alert alert-danger' role='alert'>Error al Actualizar la Contraseña :(</div>";
                    }
                    
                    ?>  
                    <?php
                }
                $datos_usuario=$usuarios->single_record($id);
            ?>


 		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ESTA SEGURO QUE DESEA CAMBIAR LA CONTRASEÑA PARA EL USUARIO </h2><h1><?php echo $datos_usuario->nombreusuario;?> ?</h1>
                        </div>
                        <div class="body">
                          <form method="post">
                                 <label for="password">Contraseña</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese la Contraseña Para el Usuario">
                                         <input type="hidden" name="id_usuario" id="id_usuario" maxlength="100" value="<?php echo $datos_usuario->idUsuarios;?>">
                                    </div>
                                </div>
                				   <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Contraseña</button><br><br>
                                <a href="usuarios.php" class="btn btn-danger waves-effect">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->




</section>
<?php require_once "parteInferior.php"?>