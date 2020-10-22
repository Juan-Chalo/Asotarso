<?php require_once "parteSuperiorSocio.php"?>
 <section class="content">
   <div class="container-fluid">
      <div class="block-header">
          <h2>LISTA DE REPUESTOS DISPONIBLES</h2>
      </div>
      <!-- Basic Card -->
      <div class="row clearfix">

            <?php
          	include ('../Controladores/clasesControladores.php');
          	$repuestos = new Producto();
          	$listado=$repuestos->leerProducto();

            while ($row=mysqli_fetch_object($listado)){
            $nombreProducto=$row->nombreProducto;
            $precioProducto=$row->precioProducto;
            $codigo=$row->codigo;
            $existencia=$row->Existencia;
            $Categoria=$row->CategoriaProducto_idCategoriaProducto;
           ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="card">

                  <div class="header">
                      <h1>
                          <?php echo $nombreProducto;?>
                      </h1>
                  </div>
                  <div class="body">
                    <h3>Codigo:</h3>
                      <?php echo $codigo;?>
                      <h3>Precio:</h3>
                        <?php echo $precioProducto;?>
                        <h3>Categoria del Producto:</h3>
                          <?php echo $Categoria;?>
                          <h3>En Existencia:</h3>
                            <?php echo $existencia;?>
                  </div>
              </div>
          </div>
          <?php
          }
        ?>
      </div>
      <!-- #END# Basic Card -->
  </div>


 </section>
 <?php require_once "parteInferiorSocio.php"?>
