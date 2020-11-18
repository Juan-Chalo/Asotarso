<?php
session_start ();

if($_SESSION["usuario"] === null)
  header("Location: ../index.html");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>AsotarsoChiqui | Administracion</title>
    <!-- Favicon-->
     <link href=" ../assets/img/iconotaxi.ico" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href=" ../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href=" ../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href=" ../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href=" ../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href=" ../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=" ../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="adminPanel.php">ASOTARSO CHIQUIMULILLA S.R</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        </a>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">

                        </a>

                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src=" ../images/TAXI.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container"><h4><?php echo ($_SESSION["usuario"]); ?></h4>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li role="separator" class="divider"></li>
                            <li><a href=" ../controller/cerrarSesion.php"><i class="material-icons">input</i>Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVEGACIÓN PRINCIPAL</li>
                    <li class="active">
                        <a href="adminPanel.php">
                            <i class="material-icons">home</i>
                            <span>INICIO</span>
                        </a>
                    </li>
                    <li>
                        <a href="vencimientoLicencias.php">
                            <i class="material-icons">update</i>
                            <span>Vencimiento Licencias</span>
                        </a>
                    </li>
                    <li>
                        <a href="vencimientoAntecedentes.php">
                            <i class="material-icons">update</i>
                            <span>Vencimiento Antecedentes</span>
                        </a>
                    </li>
                    <li>
                        <a href="usuarios.php">
                            <i class="material-icons">assignment</i>
                            <span>Gestión de Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Reportes Multas</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Multas/Cuotas</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="agregarMultaMes.php">Cuotas Mensuales</a>
                                    </li>
                                    <li>
                                        <a href="agregarMultaOrganizacion.php">Multas Organización</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                     <li>
                        <a href="gestionSocios.php">
                            <i class="material-icons">assignment</i>
                            <span>Gestión de Socios</span>
                        </a>
                    </li>
                   <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Reportes Financieros</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Socios/Directiva</span>
                                </a>
                                <ul class="ml-menu">
                                  <!--  <li>
                                        <a href="finanzasSocios.php">Reporte Financieros Socios</a>
                                    </li> -->
                                    <li>
                                        <a href="finanzasDirectiva.php">Reporte Financieros Directiva</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                    <li>
                      <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                          <span>Gestión de Taxis</span>
                      </a>
                      <ul class="ml-menu">
                          <li>
                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Taxis</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="taxis.php">Lista de Taxis</a>
                                  </li>
                                  <li>
                                      <a href="agregarTaxi.php">Agregar Taxi</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>
                    <li>
                        <a href="circularessocios.php">
                            <i class="material-icons">map</i>
                            <span>Circulares Socios</span>
                        </a>
                    </li>

                    <li>
                      <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">update</i>
                          <span>Actividades Generales</span>
                      </a>
                      <ul class="ml-menu">
                          <li>
                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Actividades</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="actividadesGenerales.php">Lista de Actividades</a>
                                  </li>
                                  <li>
                                      <a href="agregarActividadGeneral.php">Agregar Actividad</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>

                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">donut_large</i>
                            <span>Gestión de Repuestos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Repuestos</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="mostrarProducto.php">Lista de Repuestos</a>
                                    </li>
                                    <li>
                                        <a href="agregarProducto.php">Agregar Repuesto</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="menu-toggle">
                          <i class="material-icons">donut_large</i>
                          <span>Gestión de Pilotos</span>
                      </a>
                      <ul class="ml-menu">
                          <li>
                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Pilotos</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="mostrarPilotos.php">Lista de Pilotos</a>
                                  </li>
                                  <li>
                                      <a href="agregarPiloto.php">Agregar Piloto</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>

                  <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">donut_large</i>
                        <span>Asignación Socio-Taxi-Piloto</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Asignaciones</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="listaTaxisPilotosSocio.php">Lista de Asignaciones</a>
                                </li>
                                <li>
                                    <a href="asignarTaxiPilotoSocio.php">Nueva Asignación</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="comentarios.php">
                        <i class="material-icons">map</i>
                        <span>Comentarios</span>
                    </a>
                </li>

                    <li class="header">Sobre Nosotros</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span> SISTEMA-ASOTARSO</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>CHIQUIMULILLA.S.R</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>2003-2020</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Asotarso - Chiquimulilla </a>.
                </div>
                <div class="version">
                    <b>Versión: </b> 0.0.1
                </div>
                <div class="version">
                    <b>Creado por:</b>SoftwareSolutions
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>ROJO</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>ROSADO</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>MORADO</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>MORADO OSCURO</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>AZUL</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>CELESTE</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>VERDE</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>VERDE CLARO</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>AMARILLO</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>PIEL</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>NARANJA</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>NARANGA OSCURO</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>CAFES</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>CRIS</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>AZUL GRIS</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>NEGRO</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="block-header">
                <h2>Resumen TOTALES DE DATOS EN EL SISTEMA</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                          <?php
                            include ('../controller/conexionBd.php');
                            $consulta1 = "SELECT * FROM multas where tipo=1";
                            $resultado1 = mysqli_query($connect,$consulta1);
                            $total1 = mysqli_num_rows($resultado1);
                            ?>
                            <div class="text">R. Mensuales Ingresados</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total1; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                          <?php
                            $consulta2 = "SELECT * FROM multas where tipo=2";
                            $resultado2 = mysqli_query($connect,$consulta2);
                            $total2 = mysqli_num_rows($resultado2);
                            ?>
                            <div class="text">R. Organizacionales Ingresados</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total2;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                          <?php
                            $consultacoment = "SELECT * FROM comentarios where estado=1";
                            $resultadocoment = mysqli_query($connect,$consultacoment);
                            $totalcomentarios = mysqli_num_rows($resultadocoment);
                            ?>
                            <div class="text">Comentarios no leidos</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalcomentarios;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                          <?php
                            $consulta3 = "SELECT * FROM usuarios where Estado_idEstado=1";
                            $resultado3 = mysqli_query($connect,$consulta3);
                            $total3 = mysqli_num_rows($resultado3);
                            ?>
                            <div class="text">Total Usuarios Activos</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total3;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                          <?php
                            $consulta4 = "SELECT * FROM socios where Estado_idEstado=1";
                            $resultado4 = mysqli_query($connect,$consulta4);
                            $total4 = mysqli_num_rows($resultado4);
                            ?>
                            <div class="text">Total Socios Activos</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total4;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                          <?php
                            $consulta5 = "SELECT * FROM reporte where Estado_idEstado=1";
                            $resultado5 = mysqli_query($connect,$consulta5);
                            $total5 = mysqli_num_rows($resultado5);
                            ?>
                            <div class="text">Total R.Financieros Socios</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total5;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                          <?php
                            $consulta6 = "SELECT * FROM reporte_directiva where Estado_idEstado=1";
                            $resultado6 = mysqli_query($connect,$consulta6);
                            $total6 = mysqli_num_rows($resultado6);
                            ?>
                            <div class="text">Total R.Financieros Directiva</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total6;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                      <?php
                        $consulta7 = "SELECT * FROM taxi WHERE Estado_idEstado=1";
                        $resultado7 = mysqli_query($connect,$consulta7);
                        $total7 = mysqli_num_rows($resultado7);
                        ?>
                        <div class="text">Total Taxis Activos</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $total7;?>" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-light-green hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">forum</i>
                      </div>
                      <div class="content">
                        <?php
                          $consulta8 = "SELECT * FROM actividadessocio WHERE Estado_idEstado=1";
                          $resultado8 = mysqli_query($connect,$consulta8);
                          $total8 = mysqli_num_rows($resultado8);
                          ?>
                          <div class="text">Total Circulares Activas</div>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total8;?>" data-speed="1000" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-orange hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">playlist_add_check</i>
                      </div>
                      <div class="content">
                        <?php
                          $consulta9 = "SELECT * FROM actividadesgenerales where Estado_idEstado=1";
                          $resultado9 = mysqli_query($connect,$consulta9);
                          $total9 = mysqli_num_rows($resultado9);
                          ?>
                          <div class="text">Total Actividades G. Pendientes</div>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total9;?>" data-speed="1000" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-pink hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">playlist_add_check</i>
                      </div>
                      <div class="content">
                        <?php
                          $consulta10 = "SELECT * FROM producto where Estado_idEstado=1";
                          $resultado10 = mysqli_query($connect,$consulta10);
                          $total10 = mysqli_num_rows($resultado10);
                          ?>
                          <div class="text">Total Repuestos Disponibles</div>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total10;?>" data-speed="15" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-light-green hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">playlist_add_check</i>
                      </div>
                      <div class="content">
                        <?php
                          $consulta11 = "SELECT * FROM pilotos where TipoPiloto_idTipoPiloto=1 AND Estado_idEstado=1";
                          $resultado11 = mysqli_query($connect,$consulta11);
                          $total11 = mysqli_num_rows($resultado11);
                          ?>
                          <div class="text">Total Pilotos TITULARES Activos</div>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total11;?>" data-speed="1000" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-pink hover-expand-effect">
                      <div class="icon">
                          <i class="material-icons">playlist_add_check</i>
                      </div>
                      <div class="content">
                        <?php
                          $consulta12 = "SELECT * FROM pilotos where TipoPiloto_idTipoPiloto=2 AND Estado_idEstado=1";
                          $resultado12 = mysqli_query($connect,$consulta12);
                          $total12 = mysqli_num_rows($resultado12);
                          ?>
                          <div class="text">Total Pilotos SUPLENTES Activos</div>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total12;?>" data-speed="1000" data-fresh-interval="20"></div>
                      </div>
                  </div>
              </div>


            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Bienvenidos al Panel de Administracion de Asotarso Chiquimulilla
                    <small>Panel de Administracion Version 0.1</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <img src="../assets/img/torito.jpg" class="js-animating-object img-responsive">
                <div class="demo-image-copyright">

                </div>
            </div>
        </div>
    </div>
</div>

            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                12,10,9,6,5,6,10,5,7,5,12,13,7,12,11
                            </div>
                            <ul class="dashboard-stat-list">
                              <li>
                                LA FECHA DE HOY ES:
                              </li>
                                <li>
                                    DIA -------------------------------------------------->
                                    <span class="pull-right"><b><?php echo date("d"); ?></b></span>
                                </li>
                                <li>
                                    MES -------------------------------------------------->
                                    <span class="pull-right"><b><?php echo date("m"); ?></b></span>
                                </li>
                                <li>
                                    DEL AÑO ----------------------------------->
                                    <span class="pull-right"><b><?php echo date("Y"); ?></b></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Ultimos Pilotos Ingresados</div>
                            <ul class="dashboard-stat-list">
                              <?php
                                $consultado = "SELECT * FROM pilotos ORDER BY idPilotos DESC LIMIT 8 ";
                                $resultado = mysqli_query($connect,$consultado);

                                while ($row=mysqli_fetch_object($resultado)){

            											$nombre=$row->NombrePilotos;

            									?>
                                <li>
                                    <?php echo $nombre; ?>
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                              <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">ULTIMOS REPORTES DE MULTAS MENSUALES INGRESADOS</div>
                            <ul class="dashboard-stat-list">
                              <?php
                                $consultado2 = "SELECT * FROM multas ORDER BY idMultas DESC LIMIT 8 ";
                                $resultado2 = mysqli_query($connect,$consultado2);

                                while ($row=mysqli_fetch_object($resultado2)){

            											$descripcion=$row->DescripcionMulta;

            									?>
                                <li>
                                      <?php echo $descripcion; ?>
                                    <span class="pull-right"></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Vista Previa, Ultimos Socios Registrados</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="gestionSocios.php">Agregar Nuevo</a></li>
                                        <li><a href="socios.php">Ver Socios</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Id del Socio</th>
                                            <th>Nombre del Socio</th>
                                            <th>Apellidos del Socio</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $consultado3 = "SELECT * FROM socios ORDER BY idSocios DESC LIMIT 5 ";
                                        $resultado3 = mysqli_query($connect,$consultado3);

                                        while ($row=mysqli_fetch_object($resultado3)){
                                          $id=$row->idSocios;
                    											$nombre=$row->NombreSocio;
                                          $apellidos=$row->ApellidosSocio;
                                          if ($row->Estado_idEstado == 1) {
                                            $estado = "ACTIVO";
                                          }elseif ($row->Estado_idEstado == 2) {
                                              $estado = "INACTIVO";
                                          }

                    									?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $nombre; ?></td>
                                            <td><?php echo $apellidos; ?></td>
                                            <td><?php echo $estado; ?></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Uso de Navegadores Web</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>


            <!-- Exportable Table -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Vista de Circulares Activas
                                        </h2><br>
                                        <a href="circularessocios.php" type="button" class="btn btn-success waves-effect">Nueva Circular</a>

                                    </div>

                                    <div class="body">
                                    	<h4>Exportar en:</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        <th>No.Circular</th>
                                                        <th>Asunto de la Circular</th>
                                                        <th>Fecha</th>
                                                        <th>Opcion1</th>
                                                        <th>Opcion2</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                      <th>No.Circular</th>
                                                      <th>Asunto de la Circular</th>
                                                      <th>Fecha</th>
                                                      <th>Opcion1</th>
                                                      <th>Opcion2</th>
                                                    </tr>
                                                </tfoot>

                                                	<?php
            												include ('../Controladores/clasesControladores.php');
            												$circular = new Circulares();
            												$listado=$circular->verCirculares();
            											?>


                                                <tbody>

                                                	<?php
            										while ($row=mysqli_fetch_object($listado)){
            											$id=$row->idActividades;
            											$asunto=$row->asunto;
                                  $fecha=$row->FechaActividad;
            									?>
                                                    <tr>
                                                        <td><?php echo $id;?></td>
                                                        <td><?php echo $asunto;?></td>
                                                        <td><?php echo $fecha;?></td>
                                                        <td>
                                                        	<a href="detalleCircular.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Ver Detalles</a>
                                                        </td>
                                                        <td>
                                                        	<a href="eliminarCircular.php?id=<?php echo $id;?>" type="button" class="btn btn-danger waves-effect">Eliminar</a>
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

                        <!-- CPU Usage -->
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-6">
                                                <h2>Flujo de Uso del Sistema.(%)</h2>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="body" >
                                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# CPU Usage -->


        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=" ../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src=" ../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src=" ../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=" ../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=" ../plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src=" ../plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src=" ../plugins/raphael/raphael.min.js"></script>
    <script src=" ../plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src=" ../plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src=" ../plugins/flot-charts/jquery.flot.js"></script>
    <script src=" ../plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src=" ../plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src=" ../plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src=" ../plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src=" ../plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src=" ../js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src=" ../js/demo.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src=" ../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src=" ../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src=" ../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src=" ../js/admin.js"></script>
    <script src=" ../js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
