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
    <title>AsotarsoChiqui | Socios</title>
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

<body class="theme-orange">

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
                <a class="navbar-brand" href="adminPanelSocio.php">SOCIOS / ASOTARSO CHIQUIMULILLA S.R</a>
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
                        <a href="adminPanelSocio.php">
                            <i class="material-icons">home</i>
                            <span>INICIO</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Reportes de Multas</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Multas/Cuotas</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="cuotasMensualesSocio.php">Ver R. Cuotas Mensuales</a>
                                    </li>
                                    <li>
                                        <a href="multasOrganizacionSocio.php">Ver R. Multas Organiacion</a>
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
                                  <span>Mis Taxis</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="taxisSocio.php">Lista de Taxis</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
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
                                      <a href="actividadesGeneralesSocio.php">Lista de Actividades</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>

                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">donut_large</i>
                            <span>Repuestos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Repuestos</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="vistaRepuestos.php">Lista de Repuestos</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="menu-toggle">
                          <i class="material-icons">donut_large</i>
                          <span>Pilotos</span>
                      </a>
                      <ul class="ml-menu">
                          <li>
                              <a href="javascript:void(0);" class="menu-toggle">
                                  <span>Mis Pilotos</span>
                              </a>
                              <ul class="ml-menu">
                                  <li>
                                      <a href="pilotosSocio.php">Lista de Pilotos</a>
                                  </li>
                              </ul>
                          </li>


                      </ul>
                  </li>

                    <li class="header">Sobre Nosotros</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>ASOTARSO / SOCIOS</span>
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
                    &copy; 2020 <a href="javascript:void(0);">Asotarso - Chiquimulilla /Socios </a>.
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
        <!-- Right Sidebar
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red">
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
                        <li data-theme="orange" class="active">
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
        #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="block-header">
                <h1>¡BIENVENIDO SOCIO!</h1>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div>
                      <img src="../images/SOCIOS.jpg" class="col-xs-10 col-sm-10 col-md-10 col-lg-8"><br><br><br>
                      <h2 style="font-family: Eras Bold ITC;" class="col-xs-10 col-sm-10 col-md-10 col-lg-3">Agradecimientos especiales a nuestros socios por confiar en nosotros.
                        Esperamos que esta herramienta falicite la comunicacion con la organizacion.<br><br>- Directiva Asotarso Chiquimulilla</h2>

                </div>

            </div><br>
            <!-- Exportable Table -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            CIRCULARES ACTIVAS
                                        </h2>
                                    </div>

                                    <div class="body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>No.Circular</th>
                                                        <th>Asunto de la Circular</th>
                                                        <th>Fecha</th>
                                                        <th>Opcion1</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                      <th>No.Circular</th>
                                                      <th>Asunto de la Circular</th>
                                                      <th>Fecha</th>
                                                      <th>Opcion1</th>
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
                                                        	<a href="detalleCircularSocio.php?id=<?php echo $id;?>" type="button" class="btn btn-info waves-effect">Ver Detalles</a>
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


        </div>
    </section>

    <!-- Jquery Core Js -->
      <script src=" ../plugins/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core Js -->
      <script src=" ../plugins/bootstrap/js/bootstrap.js"></script>

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

      <!-- Jquery DataTable Plugin Js -->
      <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
      <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
      <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

      <!-- Custom Js -->
      <script src=" ../js/admin.js"></script>
      <script src=" ../js/pages/tables/jquery-datatable.js"></script>

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
</body>

</html>
