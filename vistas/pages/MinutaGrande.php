<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pizarraControlador.php");
//include (CONTROLADOR_PATH."empresasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$desayuno = pizarraControlador::viewPizarraGigante();


//echo ROOT_PATH;
//$productos = productosControlador::viewProductos();
//$random = time();
//var_dump($categorias);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Planillas y Minutas<small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Minuta Desayuno - Once</a></li>
              <li class="breadcrumb-item active">Pizarra</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
      <input  type="hidden" id="usuario" name="usuario" value="<?php echo 1; ?>" />
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
       
            <div class="card card-<?php echo  $config['color']; ?> card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">PROGRAMACIÓN O PLANIFICACIÓN DE MINUTAS PARA 15 DÍAS
ALMUERZO Y CENA</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">


                <div class="row">
                      <div class="col-lg-12">   
                      <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Servicio</th>
                    <th>Frecuencia 8 días</th>
                    <th>Gramaje neto x ración</th>
                    <th>Gramaje bruto x ración</th>
                    <th>Observaciones</th>
               
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><b>DESAYUNO Y ONCE</b></td>
                        <td><input type="text" class="form-control" id="d1" name="l1" value="<?php echo $desayuno['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="d2" name="l2" value="<?php echo $desayuno['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="d3" name="l3" value="<?php echo $desayuno['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="d4" name="l4" value="<?php echo $desayuno['de4']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Porción liquida:</td>
                        <td><input type="text" class="form-control" id="d5" name="l5" value="<?php echo $desayuno['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="d6" name="l6" value="<?php echo $desayuno['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="d7" name="l7" value="<?php echo $desayuno['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="d8" name="l8" value="<?php echo $desayuno['de8']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Porción sólida:</td>
                        <td><input type="text" class="form-control" id="d9" name="l2" value="<?php echo $desayuno['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="d10" name="l3" value="<?php echo $desayuno['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="d11" name="l4" value="<?php echo $desayuno['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="d12" name="l5" value="<?php echo $desayuno['de12']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Agregados porción sólida:</td>
                        <td><input type="text" class="form-control" id="d13" name="l6" value="<?php echo $desayuno['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="d14" name="l7" value="<?php echo $desayuno['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="d15" name="l8" value="<?php echo $desayuno['de15']; ?>"></td>
                        <td><input type="text" class="form-control" id="d16" name="l1" value="<?php echo $desayuno['de16']; ?>"></td>

                    </tr>
                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>
                    <tr>
                        <td><b>ALMUERZO Y CENA</b></td>
                        <td><input type="text" class="form-control" id="d17" name="l1" value="<?php echo $desayuno['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="d18" name="l2" value="<?php echo $desayuno['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="d19" name="l3" value="<?php echo $desayuno['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="d20" name="l4" value="<?php echo $desayuno['de20']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Primer plato</td>
                        <td><input type="text" class="form-control" id="d21" name="l5" value="<?php echo $desayuno['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="d22" name="l6" value="<?php echo $desayuno['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="d23" name="l7" value="<?php echo $desayuno['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="d24" name="l8" value="<?php echo $desayuno['de24']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Ensaladas</td>
                        <td><input type="text" class="form-control" id="d25" name="l2" value="<?php echo $desayuno['de25']; ?>"></td>
                        <td><input type="text" class="form-control" id="d26" name="l3" value="<?php echo $desayuno['de26']; ?>"></td>
                        <td><input type="text" class="form-control" id="d27" name="l4" value="<?php echo $desayuno['de27']; ?>"></td>
                        <td><input type="text" class="form-control" id="d28" name="l5" value="<?php echo $desayuno['de28']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Entradas</td>
                        <td><input type="text" class="form-control" id="d29" name="l6" value="<?php echo $desayuno['de29']; ?>"></td>
                        <td><input type="text" class="form-control" id="d30" name="l7" value="<?php echo $desayuno['de30']; ?>"></td>
                        <td><input type="text" class="form-control" id="d31" name="l8" value="<?php echo $desayuno['de31']; ?>"></td>
                        <td><input type="text" class="form-control" id="d32" name="l1" value="<?php echo $desayuno['de32']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Sopas (deshidrat. o naturales)</td>
                        <td><input type="text" class="form-control" id="d33" name="l2" value="<?php echo $desayuno['de33']; ?>"></td>
                        <td><input type="text" class="form-control" id="d34" name="l3" value="<?php echo $desayuno['de34']; ?>"></td>
                        <td><input type="text" class="form-control" id="d35" name="l4" value="<?php echo $desayuno['de35']; ?>"></td>
                        <td><input type="text" class="form-control" id="d36" name="l5" value="<?php echo $desayuno['de36']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Sopas naturales</td>
                        <td><input type="text" class="form-control" id="d37" name="l6" value="<?php echo $desayuno['de37']; ?>"></td>
                        <td><input type="text" class="form-control" id="d38" name="l7" value="<?php echo $desayuno['de38']; ?>"></td>
                        <td><input type="text" class="form-control" id="d39" name="l8" value="<?php echo $desayuno['de39']; ?>"></td>
                        <td><input type="text" class="form-control" id="d40" name="l1" value="<?php echo $desayuno['de40']; ?>"></td>

                    </tr>


                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>
                    <tr>
                        <td><b>Platos de fondo</b></td>
                        <td><input type="text" class="form-control" id="d41" name="l5" value="<?php echo $desayuno['de41']; ?>"></td>
                        <td><input type="text" class="form-control" id="d42" name="l6" value="<?php echo $desayuno['de42']; ?>"></td>
                        <td><input type="text" class="form-control" id="d43" name="l7" value="<?php echo $desayuno['de43']; ?>"></td>
                        <td><input type="text" class="form-control" id="d44" name="l8" value="<?php echo $desayuno['de44']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Vacuno</td>
                        <td><input type="text" class="form-control" id="d45" name="l2" value="<?php echo $desayuno['de45']; ?>"></td>
                        <td><input type="text" class="form-control" id="d46" name="l3" value="<?php echo $desayuno['de46']; ?>"></td>
                        <td><input type="text" class="form-control" id="d47" name="l4" value="<?php echo $desayuno['de47']; ?>"></td>
                        <td><input type="text" class="form-control" id="d48" name="l5" value="<?php echo $desayuno['de48']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Entero</td>
                        <td><input type="text" class="form-control" id="d49" name="l6" value="<?php echo $desayuno['de49']; ?>"></td>
                        <td><input type="text" class="form-control" id="d50" name="l7" value="<?php echo $desayuno['de50']; ?>"></td>
                        <td><input type="text" class="form-control" id="d51" name="l8" value="<?php echo $desayuno['de51']; ?>"></td>
                        <td><input type="text" class="form-control" id="d52" name="l1" value="<?php echo $desayuno['de52']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Trozado</td>
                        <td><input type="text" class="form-control" id="d53" name="l2" value="<?php echo $desayuno['de53']; ?>"></td>
                        <td><input type="text" class="form-control" id="d54" name="l3" value="<?php echo $desayuno['de54']; ?>"></td>
                        <td><input type="text" class="form-control" id="d55" name="l4" value="<?php echo $desayuno['de55']; ?>"></td>
                        <td><input type="text" class="form-control" id="d56" name="l5" value="<?php echo $desayuno['de56']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Molido</td>
                        <td><input type="text" class="form-control" id="d57" name="l6" value="<?php echo $desayuno['de57']; ?>"></td>
                        <td><input type="text" class="form-control" id="d58" name="l7" value="<?php echo $desayuno['de58']; ?>"></td>
                        <td><input type="text" class="form-control" id="d59" name="l8" value="<?php echo $desayuno['de59']; ?>"></td>
                        <td><input type="text" class="form-control" id="d60" name="l1" value="<?php echo $desayuno['de60']; ?>"></td>

                    </tr>
                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>
                    <tr>
                        <td><b>Aves</b></td>
                        <td><input type="text" class="form-control" id="d61" name="l5" value="<?php echo $desayuno['de61']; ?>"></td>
                        <td><input type="text" class="form-control" id="d62" name="l6" value="<?php echo $desayuno['de62']; ?>"></td>
                        <td><input type="text" class="form-control" id="d63" name="l7" value="<?php echo $desayuno['de63']; ?>"></td>
                        <td><input type="text" class="form-control" id="d64" name="l8" value="<?php echo $desayuno['de64']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Pechuga pollo deshuesada</td>
                        <td><input type="text" class="form-control" id="d65" name="l2" value="<?php echo $desayuno['de65']; ?>"></td>
                        <td><input type="text" class="form-control" id="d66" name="l3" value="<?php echo $desayuno['de66']; ?>"></td>
                        <td><input type="text" class="form-control" id="d67" name="l4" value="<?php echo $desayuno['de67']; ?>"></td>
                        <td><input type="text" class="form-control" id="d68" name="l5" value="<?php echo $desayuno['de68']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Tuto pollo corto</td>
                        <td><input type="text" class="form-control" id="d69" name="l6" value="<?php echo $desayuno['de69']; ?>"></td>
                        <td><input type="text" class="form-control" id="d70" name="l7" value="<?php echo $desayuno['de70']; ?>"></td>
                        <td><input type="text" class="form-control" id="d71" name="l8" value="<?php echo $desayuno['de71']; ?>"></td>
                        <td><input type="text" class="form-control" id="d72" name="l1" value="<?php echo $desayuno['de72']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Tuto pollo largo</td>
                        <td><input type="text" class="form-control" id="d73" name="l2" value="<?php echo $desayuno['de73']; ?>"></td>
                        <td><input type="text" class="form-control" id="d74" name="l3" value="<?php echo $desayuno['de74']; ?>"></td>
                        <td><input type="text" class="form-control" id="d75" name="l4" value="<?php echo $desayuno['de75']; ?>"></td>
                        <td><input type="text" class="form-control" id="d76" name="l5" value="<?php echo $desayuno['de76']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Pechuga de pavo deshuesada</td>
                        <td><input type="text" class="form-control" id="d77" name="l6" value="<?php echo $desayuno['de77']; ?>"></td>
                        <td><input type="text" class="form-control" id="d78" name="l7" value="<?php echo $desayuno['de78']; ?>"></td>
                        <td><input type="text" class="form-control" id="d79" name="l8" value="<?php echo $desayuno['de79']; ?>"></td>
                        <td><input type="text" class="form-control" id="d80" name="l1" value="<?php echo $desayuno['de80']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Pavo molido</td>
                        <td><input type="text" class="form-control" id="d81" name="l6" value="<?php echo $desayuno['de81']; ?>"></td>
                        <td><input type="text" class="form-control" id="d82" name="l7" value="<?php echo $desayuno['de82']; ?>"></td>
                        <td><input type="text" class="form-control" id="d83" name="l8" value="<?php echo $desayuno['de83']; ?>"></td>
                        <td><input type="text" class="form-control" id="d84" name="l1" value="<?php echo $desayuno['de84']; ?>"></td>

                    </tr>

                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>
                    <tr>
                        <td><b>Cerdo</b></td>
                        <td><input type="text" class="form-control" id="d85" name="l2" value="<?php echo $desayuno['de85']; ?>"></td>
                        <td><input type="text" class="form-control" id="d86" name="l3" value="<?php echo $desayuno['de86']; ?>"></td>
                        <td><input type="text" class="form-control" id="d87" name="l4" value="<?php echo $desayuno['de87']; ?>"></td>
                        <td><input type="text" class="form-control" id="d88" name="l5" value="<?php echo $desayuno['de88']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Entero</td>
                        <td><input type="text" class="form-control" id="d89" name="l6" value="<?php echo $desayuno['de89']; ?>"></td>
                        <td><input type="text" class="form-control" id="d90" name="l7" value="<?php echo $desayuno['de90']; ?>"></td>
                        <td><input type="text" class="form-control" id="d91" name="l8" value="<?php echo $desayuno['de91']; ?>"></td>
                        <td><input type="text" class="form-control" id="d92" name="l1" value="<?php echo $desayuno['de92']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Trozado</td>
                        <td><input type="text" class="form-control" id="d93" name="l6" value="<?php echo $desayuno['de93']; ?>"></td>
                        <td><input type="text" class="form-control" id="d94" name="l7" value="<?php echo $desayuno['de94']; ?>"></td>
                        <td><input type="text" class="form-control" id="d95" name="l8" value="<?php echo $desayuno['de95']; ?>"></td>
                        <td><input type="text" class="form-control" id="d96" name="l1" value="<?php echo $desayuno['de96']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Chuleta de cerdo centro</td>
                        <td><input type="text" class="form-control" id="d97" name="l6" value="<?php echo $desayuno['de97']; ?>"></td>
                        <td><input type="text" class="form-control" id="d98" name="l7" value="<?php echo $desayuno['de98']; ?>"></td>
                        <td><input type="text" class="form-control" id="d99" name="l8" value="<?php echo $desayuno['de99']; ?>"></td>
                        <td><input type="text" class="form-control" id="d100" name="l1" value="<?php echo $desayuno['de100']; ?>"></td>

                    </tr> 
                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>
                    <tr>
                        <td><b>Pescado y mariscos</b></td>
                        <td><input type="text" class="form-control" id="d101" name="l2" value="<?php echo $desayuno['de101']; ?>"></td>
                        <td><input type="text" class="form-control" id="d102" name="l3" value="<?php echo $desayuno['de102']; ?>"></td>
                        <td><input type="text" class="form-control" id="d103" name="l4" value="<?php echo $desayuno['de103']; ?>"></td>
                        <td><input type="text" class="form-control" id="d104" name="l5" value="<?php echo $desayuno['de104']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Merluza filete congelada</td>
                        <td><input type="text" class="form-control" id="d105" name="l6" value="<?php echo $desayuno['de105']; ?>"></td>
                        <td><input type="text" class="form-control" id="d106" name="l7" value="<?php echo $desayuno['de106']; ?>"></td>
                        <td><input type="text" class="form-control" id="d107" name="l8" value="<?php echo $desayuno['de107']; ?>"></td>
                        <td><input type="text" class="form-control" id="d108" name="l1" value="<?php echo $desayuno['de108']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Reineta filete congelada</td>
                        <td><input type="text" class="form-control" id="d109" name="l6" value="<?php echo $desayuno['de109']; ?>"></td>
                        <td><input type="text" class="form-control" id="d110" name="l7" value="<?php echo $desayuno['de110']; ?>"></td>
                        <td><input type="text" class="form-control" id="d111" name="l8" value="<?php echo $desayuno['de111']; ?>"></td>
                        <td><input type="text" class="form-control" id="d112" name="l1" value="<?php echo $desayuno['de112']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Atún o jurel al agua(conserva)</td>
                        <td><input type="text" class="form-control" id="d113" name="l6" value="<?php echo $desayuno['de113']; ?>"></td>
                        <td><input type="text" class="form-control" id="d114" name="l7" value="<?php echo $desayuno['de114']; ?>"></td>
                        <td><input type="text" class="form-control" id="d115" name="l8" value="<?php echo $desayuno['de115']; ?>"></td>
                        <td><input type="text" class="form-control" id="d116" name="l1" value="<?php echo $desayuno['de116']; ?>"></td>

                    </tr> 

                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>

                    <tr>
                        <td><b>Huevos</b></td>
                        <td><input type="text" class="form-control" id="d17" name="l6" value="<?php echo $desayuno['de117']; ?>"></td>
                        <td><input type="text" class="form-control" id="d18" name="l7" value="<?php echo $desayuno['de118']; ?>"></td>
                        <td><input type="text" class="form-control" id="d19" name="l8" value="<?php echo $desayuno['de119']; ?>"></td>
                        <td><input type="text" class="form-control" id="d120" name="l1" value="<?php echo $desayuno['de120']; ?>"></td>

                    </tr> 

                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>

                    <tr>
                        <td><b>Leguminosos</b></td>
                        <td><input type="text" class="form-control" id="d121" name="l6" value="<?php echo $desayuno['de121']; ?>"></td>
                        <td><input type="text" class="form-control" id="d122" name="l7" value="<?php echo $desayuno['de122']; ?>"></td>
                        <td><input type="text" class="form-control" id="d123" name="l8" value="<?php echo $desayuno['de123']; ?>"></td>
                        <td><input type="text" class="form-control" id="d124" name="l1" value="<?php echo $desayuno['de124']; ?>"></td>

                    </tr> 

                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>

                    <tr>
                        <td><b>Embutidos</b></td>
                        <td><input type="text" class="form-control" id="d125" name="l6" value="<?php echo $desayuno['de125']; ?>"></td>
                        <td><input type="text" class="form-control" id="d126" name="l7" value="<?php echo $desayuno['de126']; ?>"></td>
                        <td><input type="text" class="form-control" id="d127" name="l8" value="<?php echo $desayuno['de127']; ?>"></td>
                        <td><input type="text" class="form-control" id="d128" name="l1" value="<?php echo $desayuno['de128']; ?>"></td>

                    </tr> 
                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>

                    <tr>
                        <td><b>Acompañamientos</b></td>
                        <td><input type="text" class="form-control" id="d129" name="l2" value="<?php echo $desayuno['de129']; ?>"></td>
                        <td><input type="text" class="form-control" id="d130" name="l3" value="<?php echo $desayuno['de130']; ?>"></td>
                        <td><input type="text" class="form-control" id="d131" name="l4" value="<?php echo $desayuno['de131']; ?>"></td>
                        <td><input type="text" class="form-control" id="d132" name="l5" value="<?php echo $desayuno['de132']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Fideos o pastas</td>
                        <td><input type="text" class="form-control" id="d133" name="l6" value="<?php echo $desayuno['de133']; ?>"></td>
                        <td><input type="text" class="form-control" id="d134" name="l7" value="<?php echo $desayuno['de134']; ?>"></td>
                        <td><input type="text" class="form-control" id="d135" name="l8" value="<?php echo $desayuno['de135']; ?>"></td>
                        <td><input type="text" class="form-control" id="d136" name="l1" value="<?php echo $desayuno['de136']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Arroz</td>
                        <td><input type="text" class="form-control" id="d137" name="l2" value="<?php echo $desayuno['de137']; ?>"></td>
                        <td><input type="text" class="form-control" id="d138" name="l3" value="<?php echo $desayuno['de138']; ?>"></td>
                        <td><input type="text" class="form-control" id="d139" name="l4" value="<?php echo $desayuno['de139']; ?>"></td>
                        <td><input type="text" class="form-control" id="d140" name="l5" value="<?php echo $desayuno['de140']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Verduras</td>
                        <td><input type="text" class="form-control" id="d141" name="l6" value="<?php echo $desayuno['de141']; ?>"></td>
                        <td><input type="text" class="form-control" id="d142" name="l7" value="<?php echo $desayuno['de142']; ?>"></td>
                        <td><input type="text" class="form-control" id="d143" name="l8" value="<?php echo $desayuno['de143']; ?>"></td>
                        <td><input type="text" class="form-control" id="d144" name="l1" value="<?php echo $desayuno['de144']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Papas</td>
                        <td><input type="text" class="form-control" id="d145" name="l6" value="<?php echo $desayuno['de145']; ?>"></td>
                        <td><input type="text" class="form-control" id="d146" name="l7" value="<?php echo $desayuno['de146']; ?>"></td>
                        <td><input type="text" class="form-control" id="d147" name="l8" value="<?php echo $desayuno['de147']; ?>"></td>
                        <td><input type="text" class="form-control" id="d148" name="l1" value="<?php echo $desayuno['de148']; ?>"></td>

                    </tr>

                    <tr>
                        <thead>
                              <th>Servicio</th>
                              <th>Frecuencia 8 días</th>
                              <th>Gramaje neto x ración</th>
                              <th>Gramaje bruto x ración</th>
                              <th>Observaciones</th>
                        </thead>
                    </tr>

                    <tr>
                        <td><b>Postres</b></td>
                        <td><input type="text" class="form-control" id="d149" name="l2" value="<?php echo $desayuno['de149']; ?>"></td>
                        <td><input type="text" class="form-control" id="d150" name="l3" value="<?php echo $desayuno['de150']; ?>"></td>
                        <td><input type="text" class="form-control" id="d151" name="l4" value="<?php echo $desayuno['de151']; ?>"></td>
                        <td><input type="text" class="form-control" id="d152" name="l5" value="<?php echo $desayuno['de152']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Fruta natural</td>
                        <td><input type="text" class="form-control" id="d153" name="l6" value="<?php echo $desayuno['de153']; ?>"></td>
                        <td><input type="text" class="form-control" id="d154" name="l7" value="<?php echo $desayuno['de154']; ?>"></td>
                        <td><input type="text" class="form-control" id="d155" name="l8" value="<?php echo $desayuno['de155']; ?>"></td>
                        <td><input type="text" class="form-control" id="d156" name="l1" value="<?php echo $desayuno['de156']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Fruta compota</td>
                        <td><input type="text" class="form-control" id="d157" name="l2" value="<?php echo $desayuno['de157']; ?>"></td>
                        <td><input type="text" class="form-control" id="d158" name="l3" value="<?php echo $desayuno['de158']; ?>"></td>
                        <td><input type="text" class="form-control" id="d159" name="l4" value="<?php echo $desayuno['de159']; ?>"></td>
                        <td><input type="text" class="form-control" id="d160" name="l5" value="<?php echo $desayuno['de160']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Fruta al jugo</td>
                        <td><input type="text" class="form-control" id="d161" name="l6" value="<?php echo $desayuno['de161']; ?>"></td>
                        <td><input type="text" class="form-control" id="d162" name="l7" value="<?php echo $desayuno['de162']; ?>"></td>
                        <td><input type="text" class="form-control" id="d163" name="l8" value="<?php echo $desayuno['de163']; ?>"></td>
                        <td><input type="text" class="form-control" id="d164" name="l1" value="<?php echo $desayuno['de164']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Postres de leche</td>
                        <td><input type="text" class="form-control" id="d165" name="l6" value="<?php echo $desayuno['de165']; ?>"></td>
                        <td><input type="text" class="form-control" id="d166" name="l7" value="<?php echo $desayuno['de166']; ?>"></td>
                        <td><input type="text" class="form-control" id="d167" name="l8" value="<?php echo $desayuno['de167']; ?>"></td>
                        <td><input type="text" class="form-control" id="d168" name="l1" value="<?php echo $desayuno['de168']; ?>"></td>

                    </tr>

                    
                    <tr>
                        <td>Jalea</td>
                        <td><input type="text" class="form-control" id="d169" name="l6" value="<?php echo $desayuno['de169']; ?>"></td>
                        <td><input type="text" class="form-control" id="d170" name="l7" value="<?php echo $desayuno['de170']; ?>"></td>
                        <td><input type="text" class="form-control" id="d171" name="l8" value="<?php echo $desayuno['de171']; ?>"></td>
                        <td><input type="text" class="form-control" id="d172" name="l1" value="<?php echo $desayuno['de172']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Pastelería</td>
                        <td><input type="text" class="form-control" id="d173" name="l6" value="<?php echo $desayuno['de173']; ?>"></td>
                        <td><input type="text" class="form-control" id="d17" name="l7" value="<?php echo $desayuno['de174']; ?>"></td>
                        <td><input type="text" class="form-control" id="d175" name="l8" value="<?php echo $desayuno['de175']; ?>"></td>
                        <td><input type="text" class="form-control" id="d176" name="l1" value="<?php echo $desayuno['de176']; ?>"></td>

                    </tr>
                    <tr>
                        <td>><b>Pan</b></td>
                        <td><input type="text" class="form-control" id="d177" name="l6" value="<?php echo $desayuno['de177']; ?>"></td>
                        <td><input type="text" class="form-control" id="d178" name="l7" value="<?php echo $desayuno['de178']; ?>"></td>
                        <td><input type="text" class="form-control" id="d179" name="l8" value="<?php echo $desayuno['de179']; ?>"></td>
                        <td><input type="text" class="form-control" id="d180" name="l1" value="<?php echo $desayuno['de180']; ?>"></td>

                    </tr>
                    <tr>
                        <td><b>Jugo</b></td>
                        <td><input type="text" class="form-control" id="d181" name="l6" value="<?php echo $desayuno['de181']; ?>"></td>
                        <td><input type="text" class="form-control" id="d182" name="l7" value="<?php echo $desayuno['de182']; ?>"></td>
                        <td><input type="text" class="form-control" id="d183" name="l8" value="<?php echo $desayuno['de183']; ?>"></td>
                        <td><input type="text" class="form-control" id="d184" name="l1" value="<?php echo $desayuno['de184']; ?>"></td>

                    </tr>
                  </tbody>
                      </table>
                      </div>
                      <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-danger" id="desayuno">Actualizar Tabla</button>
                </div>

                  
                  </div> 

                </div>
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->
              </div>
            </div>
         



          </div>

        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <script>
      $('#desayuno').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var de1 =        $("#d1").val();
    var de2 =        $("#d2").val();
    var de3 =        $("#d3").val();
    var de4 =        $("#d4").val();
    var de5 =        $("#d5").val();
    var de6 =        $("#d6").val();
    var de7 =        $("#d7").val();
    var de8 =        $("#d8").val();
    var de9 =        $("#d9").val();
    var de10 =       $("#d10").val();
    var de11 =       $("#d11").val();
    var de12 =       $("#d12").val();
    var de13 =       $("#d13").val();
    var de14 =       $("#d14").val();
    var de15 =       $("#d15").val();
    var de16 =       $("#d16").val();
    var de17 =       $("#d17").val();
    var de18 =       $("#d18").val();
    var de19 =       $("#d19").val();
    var de20 =       $("#d20").val();
    var de21 =       $("#d21").val();
    var de22 =       $("#d22").val();
    var de23 =       $("#d23").val();
    var de24 =       $("#d24").val();
    var de25 =       $("#d25").val();
    var de26 =       $("#d26").val();
    var de27 =       $("#d27").val();
    var de28 =       $("#d28").val();
    var de29 =       $("#d29").val();
    var de30 =       $("#d30").val();


    var de31 =       $("#d31").val();
    var de32 =       $("#d32").val();
    var de33 =       $("#d33").val();
    var de34 =       $("#d34").val();
    var de35 =       $("#d35").val();
    var de36 =       $("#d36").val();
    var de37 =       $("#d37").val();
    var de38 =       $("#d38").val();
    var de39 =       $("#d39").val();
    var de40 =       $("#d40").val();
    var de41 =       $("#d41").val();

    var de42 =       $("#d42").val();
    var de43 =       $("#d43").val();
    var de44 =       $("#d44").val();
    var de45 =       $("#d45").val();

    var de46 =       $("#d46").val();
    var de47 =       $("#d47").val();
    var de48 =       $("#d48").val();
    var de49 =       $("#d49").val();
    var de50 =       $("#d50").val();
    var de51 =       $("#d51").val();
    var de52 =       $("#d52").val();
    var de53 =       $("#d53").val();
    var de54 =       $("#d54").val();
    var de55 =       $("#d55").val();
    var de56 =       $("#d56").val();
    var de57 =       $("#d57").val();
    var de58 =       $("#d58").val();
    var de59 =       $("#d59").val();
    var de60 =       $("#d60").val();
    var de61 =       $("#d61").val();
    var de62 =       $("#d62").val();
    var de63 =       $("#d63").val();
    var de64 =       $("#d64").val();
    var de65 =       $("#d65").val();
    var de66 =       $("#d66").val();
    var de67 =       $("#d67").val();
    var de68 =       $("#d68").val();
    var de69 =       $("#d69").val();
    var de70 =       $("#d70").val();
    var de71 =       $("#d71").val();
    var de72 =       $("#d72").val();
    var de73 =       $("#d73").val();
    var de74 =       $("#d75").val();
    var de75 =       $("#d75").val();
    var de76 =       $("#d76").val();
    var de77 =       $("#d77").val();
    var de78 =       $("#d78").val();
    var de79 =       $("#d79").val();
    var de80 =       $("#d80").val();

    var de81 =       $("#d81").val();
    var de82 =       $("#d82").val();
    var de83 =       $("#d83").val();
    var de84 =       $("#d84").val();
    var de85 =       $("#d85").val();
    var de86 =       $("#d86").val();
    var de87 =       $("#d87").val();
    var de88 =       $("#d88").val();
    var de89 =       $("#d89").val();
    var de90 =       $("#d90").val();

    var de91 =       $("#d91").val();
    var de92 =       $("#d92").val();
    var de93 =       $("#d93").val();
    var de94 =       $("#d94").val();
    var de95 =       $("#d95").val();
    var de96 =       $("#d96").val();
    var de97 =       $("#d97").val();
    var de98 =       $("#d98").val();
    var de99 =       $("#d99").val();
    var de100 =      $("#d100").val();

    var de101 =       $("#d101").val();
    var de102 =       $("#d102").val();
    var de103 =       $("#d103").val();
    var de104 =       $("#d104").val();
    var de105 =       $("#d105").val();
    var de106 =       $("#d106").val();
    var de107 =       $("#d107").val();
    var de108 =       $("#d108").val();
    var de109 =       $("#d109").val();
    var de110 =       $("#d110").val();

    var de111 =       $("#d111").val();
    var de112 =       $("#d112").val();
    var de113 =       $("#d113").val();
    var de114 =       $("#d114").val();
    var de115 =       $("#d115").val();
    var de116 =       $("#d116").val();
    var de117 =       $("#d117").val();
    var de118 =       $("#d118").val();
    var de119 =       $("#d119").val();
    var de120 =       $("#d120").val();

    var de121 =       $("#d121").val();
    var de122 =       $("#d122").val();
    var de123 =       $("#d123").val();
    var de124 =       $("#d124").val();
    var de125 =       $("#d125").val();
    var de126 =       $("#d126").val();
    var de127 =       $("#d127").val();
    var de128 =       $("#d128").val();
    var de129 =       $("#d129").val();
    var de130 =       $("#d130").val();

    var de131 =       $("#d131").val();
    var de132 =       $("#d132").val();
    var de133 =       $("#d133").val();
    var de134 =       $("#d134").val();
    var de135 =       $("#d135").val();
    var de136 =       $("#d136").val();
    var de137 =       $("#d137").val();
    var de138 =       $("#d138").val();
    var de139 =       $("#d139").val();
    var de140 =       $("#d140").val();

    var de141 =       $("#d141").val();
    var de142 =       $("#d142").val();
    var de143 =       $("#d143").val();
    var de144 =       $("#d144").val();
    var de145 =       $("#d145").val();
    var de146 =       $("#d146").val();
    var de147 =       $("#d147").val();
    var de148 =       $("#d148").val();
    var de149 =       $("#d149").val();
    var de150 =       $("#d150").val();

    var de151 =       $("#d151").val();
    var de152 =       $("#d152").val();
    var de153 =       $("#d153").val();
    var de154 =       $("#d154").val();
    var de155 =       $("#d155").val();
    var de156 =       $("#d156").val();
    var de157 =       $("#d157").val();
    var de158 =       $("#d158").val();
    var de159 =       $("#d159").val();
    var de160 =       $("#d160").val();

    var de161 =       $("#d161").val();
    var de162 =       $("#d162").val();
    var de163 =       $("#d163").val();
    var de164 =       $("#d164").val();
    var de165 =       $("#d165").val();
    var de166 =       $("#d166").val();
    var de167 =       $("#d167").val();
    var de168 =       $("#d168").val();
    var de169 =       $("#d169").val();
    var de170 =       $("#d170").val();

    var de171 =       $("#d171").val();
    var de172 =       $("#d172").val();
    var de173 =       $("#d173").val();
    var de174 =       $("#d174").val();
    var de175 =       $("#d175").val();
    var de176 =       $("#d176").val();
    var de177 =       $("#d177").val();
    var de178 =       $("#d178").val();
    var de179 =       $("#d179").val();
    var de180 =       $("#d180").val();

    var de181 =       $("#d181").val();
    var de182 =       $("#d182").val();
    var de183 =       $("#d183").val();
    var de184 =       $("#d184").val();
 
 
    var desayunomin = 1;
  
  //alert(nacimiento);
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);

        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('de1', de1);
        datos.append('de2', de2);
        datos.append('de3', de3);
        datos.append('de4', de4);
        datos.append('de5', de5);
        datos.append('de6', de6);
        datos.append('de7', de7);
        datos.append('de8', de8);
        datos.append('de9', de9);
        datos.append('de10', de10);
        datos.append('de11', de11);
        datos.append('de12', de12);
        datos.append('de13', de13);
        datos.append('de14', de14);
        datos.append('de15', de15);
        datos.append('de16', de16);
        datos.append('de17', de17);
        datos.append('de18', de18);
        datos.append('de19', de19);
        datos.append('de20', de20);
        datos.append('de21', de21);
        datos.append('de22', de22);
        datos.append('de23', de23);
        datos.append('de24', de24);
        datos.append('de25', de25);
        datos.append('de26', de26);
        datos.append('de27', de27);
        datos.append('de28', de28);
        datos.append('de29', de29);
        datos.append('de30', de30);
        datos.append('de31', de31);
        datos.append('de32', de32);
        datos.append('de33', de33);
        datos.append('de34', de34);
        datos.append('de35', de35);
        datos.append('de36', de36);
        datos.append('de37', de37);
        datos.append('de38', de38);
        datos.append('de39', de39);
        datos.append('de40', de40);
        datos.append('de41', de41);
        datos.append('de42', de42);
        datos.append('de43', de43);
        datos.append('de44', de44);
        datos.append('de45', de45);

        
datos.append('de46', 	de46	);
datos.append('de47', 	de47	);
datos.append('de48', 	de48	);
datos.append('de49', 	de49	);
datos.append('de50', 	de50	);
datos.append('de51', 	de51	);
datos.append('de52', 	de52	);
datos.append('de53', 	de53	);
datos.append('de54', 	de54	);
datos.append('de55', 	de55	);
datos.append('de56', 	de56	);
datos.append('de57', 	de57	);
datos.append('de58', 	de58	);
datos.append('de59', 	de59	);
datos.append('de60', 	de60	);
datos.append('de61', 	de61	);
datos.append('de62', 	de62	);
datos.append('de63', 	de63	);
datos.append('de64', 	de64	);
datos.append('de65', 	de65	);
datos.append('de66', 	de66	);
datos.append('de67', 	de67	);
datos.append('de68', 	de68	);
datos.append('de69', 	de69	);
datos.append('de70', 	de70	);
datos.append('de71', 	de71	);
datos.append('de72', 	de72	);
datos.append('de73', 	de73	);
datos.append('de74', 	de74	);
datos.append('de75', 	de75	);
datos.append('de76', 	de76	);
datos.append('de77', 	de77	);
datos.append('de78', 	de78	);
datos.append('de79', 	de79	);
datos.append('de80', 	de80	);
datos.append('de81', 	de81	);
datos.append('de82', 	de82	);
datos.append('de83', 	de83	);
datos.append('de84', 	de84	);
datos.append('de85', 	de85	);
datos.append('de86', 	de86	);
datos.append('de87', 	de87	);
datos.append('de88', 	de88	);
datos.append('de89', 	de89	);
datos.append('de90', 	de90	);
datos.append('de91', 	de91	);
datos.append('de92', 	de92	);
datos.append('de93', 	de93	);
datos.append('de94', 	de94	);
datos.append('de95', 	de95	);
datos.append('de96', 	de96	);
datos.append('de97', 	de97	);
datos.append('de98', 	de98	);
datos.append('de99', 	de99	);
datos.append('de100', 	de100	);
datos.append('de101', 	de101	);
datos.append('de102', 	de102	);
datos.append('de103', 	de103	);
datos.append('de104', 	de104	);
datos.append('de105', 	de105	);
datos.append('de106', 	de106	);
datos.append('de107', 	de107	);
datos.append('de108', 	de108	);
datos.append('de109', 	de109	);
datos.append('de110', 	de110	);
datos.append('de111', 	de111	);
datos.append('de112', 	de112	);
datos.append('de113', 	de113	);
datos.append('de114', 	de114	);
datos.append('de115', 	de115	);
datos.append('de116', 	de116	);
datos.append('de117', 	de117	);
datos.append('de118', 	de118	);
datos.append('de119', 	de119	);
datos.append('de120', 	de120	);
datos.append('de121', 	de121	);
datos.append('de122', 	de122	);
datos.append('de123', 	de123	);
datos.append('de124', 	de124	);
datos.append('de125', 	de125	);
datos.append('de126', 	de126	);
datos.append('de127', 	de127	);
datos.append('de128', 	de128	);
datos.append('de129', 	de129	);
datos.append('de130', 	de130	);
datos.append('de131', 	de131	);
datos.append('de132', 	de132	);
datos.append('de133', 	de133	);
datos.append('de134', 	de134	);
datos.append('de135',	de135	);
datos.append('de136',	de136	);
datos.append('de137',	de137	);
datos.append('de138',	de138	);
datos.append('de139',	de139	);
datos.append('de140',	de140	);
datos.append('de141',	de141	);
datos.append('de142',	de142	);
datos.append('de143',	de143	);
datos.append('de144',	de144	);
datos.append('de145',	de145	);
datos.append('de146',	de146	);
datos.append('de147',	de147	);
datos.append('de148',	de148	);
datos.append('de149',	de149	);
datos.append('de150',	de150	);
datos.append('de151',	de151	);
datos.append('de152',	de152	);
datos.append('de153',	de153	);
datos.append('de154',	de154	);
datos.append('de155',	de155	);
datos.append('de156',	de156	);
datos.append('de157',	de157	);
datos.append('de158',	de158	);
datos.append('de159',	de159	);
datos.append('de160',	de160	);
datos.append('de161',	de161	);
datos.append('de162',	de162	);
datos.append('de163',	de163	);
datos.append('de164',	de164	);
datos.append('de165',	de165	);
datos.append('de166',	de166	);
datos.append('de167',	de167	);
datos.append('de168',	de168	);
datos.append('de169',	de169	);
datos.append('de170',	de170	);
datos.append('de171',	de171	);
datos.append('de172',	de172	);
datos.append('de173',	de173	);
datos.append('de174',	de174	);
datos.append('de175',	de175	);
datos.append('de176',	de176	);
datos.append('de177',	de177	);
datos.append('de178',	de178	);
datos.append('de179',	de179	);
datos.append('de180',	de180	);
datos.append('de181',	de181	);
datos.append('de182',	de182	);
datos.append('de183',	de183	);
datos.append('de184',	de184	);


     
        datos.append('minGrande', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/pizarraControlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType : 'json',
            beforeSend: function () {
                $("#ErroresRegistro").html(`<p style="background:orange; color:white; margin-top:10px; padding:10px;">Procesando, espere por favor...</p>`);
            },
            success:  function (response) { 

                if(response.estado == 1){
                Swal.fire(
                'Perfecto Pizarra almuerzo actualizada',
                ' <a href="PizarraAYC">ver pizarra</a> ',
                'success'
              );
              location.reload();
             // alert(responde.id);
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al actualizar pizarra, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                }
                
               // $('#miModal').modal('hide')
               // CargaGaleria(orden);

                
            }
        })
    
})

  </script>



<!--
Swal.fire({
    html: `<h1>Venta realizada</h1>
    <p>Venta guardada con el id <strong>12321312</strong></p>
    <br>
    <a href="#">Imprimir ticket</a>
    `,
});-->