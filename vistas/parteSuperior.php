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
     <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

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


     <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=" ../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">

    <!-- #END# Page Loader -->
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
                        <a href="usuarios.php">
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Usuarios</span>
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
                                        <a href="agregarMultaOrganizacion.php">Multas Organiacion</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                     <li>
                        <a href="gestionSocios.php">
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Socios</span>
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
                                    <li>
                                        <a href="finanzasSocios.php">Reporte Financieros Socios</a>
                                    </li>
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
                          <span>Gestion de Taxis</span>
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
                                      <a href="AgregarTaxi.php">Agregar Taxi</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>

                   <li>
                        <a href="#">
                            <i class="material-icons">pie_chart</i>
                            <span>Gestion de Pilotos</span>
                        </a>
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
                            <span>Gestion de Repuestos</span>
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
                            <span>Gestion de Pilotos </span>
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
                                        <a href="agregarPiloto.php">Agregar Pilotos </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
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
                    <b>Version: </b> 0.0.1
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
