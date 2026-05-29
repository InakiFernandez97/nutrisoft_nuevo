<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pizarraControlador.php");
//include (CONTROLADOR_PATH."empresasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$almuerzo = pizarraControlador::viewPizarraAlmuerzo();
$cena = pizarraControlador::viewPizarraCena();
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
              <li class="breadcrumb-item"><a href="#">Pizarra Desayuno - Once</a></li>
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
                <h5 class="card-title m-0">PLANTILLA DISTRIBUCIÓN DE FRECUENCIAS PARA 8 DÍAS
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
                    <th>ALMUERZO</th>
                    <th>DIA 1</th>
                    <th>DIA 2</th>
                    <th>DIA 3</th>
                    <th>DIA 4</th>
                    <th>DIA 5</th>
                    <th>DIA 6</th>
                    <th>DIA 7</th>
                    <th>DIA 8</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>Primer plato:</td>
                        <td><input type="text" class="form-control" id="a1" name="l1" value="<?php echo $almuerzo['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="a2" name="l2" value="<?php echo $almuerzo['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="a3" name="l3" value="<?php echo $almuerzo['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="a4" name="l4" value="<?php echo $almuerzo['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="a5" name="l5" value="<?php echo $almuerzo['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="a6" name="l6" value="<?php echo $almuerzo['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="a7" name="l7" value="<?php echo $almuerzo['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="a8" name="l8" value="<?php echo $almuerzo['de8']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Plato principal:</td>
                        <td><input type="text" class="form-control" id="a9" name="s1" value="<?php echo $almuerzo['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="a10" name="s2" value="<?php echo $almuerzo['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="a11" name="s3" value="<?php echo $almuerzo['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="a12" name="s4" value="<?php echo $almuerzo['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="a13" name="s5" value="<?php echo $almuerzo['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="a14" name="s6" value="<?php echo $almuerzo['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="a15" name="s7" value="<?php echo $almuerzo['de15']; ?>"></td>
                        <td><input type="text" class="form-control" id="a16" name="s8" value="<?php echo $almuerzo['de16']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Plato de fondo:</td>
                        <td><input type="text" class="form-control" id="a17" name="a1" value="<?php echo $almuerzo['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="a18" name="a2" value="<?php echo $almuerzo['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="a19" name="a3" value="<?php echo $almuerzo['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="a20" name="a4" value="<?php echo $almuerzo['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="a21" name="a5" value="<?php echo $almuerzo['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="a22" name="a6" value="<?php echo $almuerzo['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="a23" name="a7" value="<?php echo $almuerzo['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="a24" name="a8" value="<?php echo $almuerzo['de24']; ?>"></td>
                   

                    </tr>
                    <tr>
                        <td>Acompañamientos:</td>
                        <td><input type="text" class="form-control" id="a25" name="a1" value="<?php echo $almuerzo['de25']; ?>"></td>
                        <td><input type="text" class="form-control" id="a26" name="a2" value="<?php echo $almuerzo['de26']; ?>"></td>
                        <td><input type="text" class="form-control" id="a27" name="a3" value="<?php echo $almuerzo['de27']; ?>"></td>
                        <td><input type="text" class="form-control" id="a28" name="a4" value="<?php echo $almuerzo['de28']; ?>"></td>
                        <td><input type="text" class="form-control" id="a29" name="a5" value="<?php echo $almuerzo['de29']; ?>"></td>
                        <td><input type="text" class="form-control" id="a30" name="a6" value="<?php echo $almuerzo['de30']; ?>"></td>
                        <td><input type="text" class="form-control" id="a31" name="a7" value="<?php echo $almuerzo['de31']; ?>"></td>
                        <td><input type="text" class="form-control" id="a32" name="a8" value="<?php echo $almuerzo['de32']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Postres:</td>
                        <td><input type="text" class="form-control" id="a33" name="a1" value="<?php echo $almuerzo['de33']; ?>"></td>
                        <td><input type="text" class="form-control" id="a34" name="a2" value="<?php echo $almuerzo['de34']; ?>"></td>
                        <td><input type="text" class="form-control" id="a35" name="a3" value="<?php echo $almuerzo['de35']; ?>"></td>
                        <td><input type="text" class="form-control" id="a36" name="a4" value="<?php echo $almuerzo['de36']; ?>"></td>
                        <td><input type="text" class="form-control" id="a37" name="a5" value="<?php echo $almuerzo['de37']; ?>"></td>
                        <td><input type="text" class="form-control" id="a38" name="a6" value="<?php echo $almuerzo['de38']; ?>"></td>
                        <td><input type="text" class="form-control" id="a39" name="a7" value="<?php echo $almuerzo['de39']; ?>"></td>
                        <td><input type="text" class="form-control" id="a40" name="a8" value="<?php echo $almuerzo['de40']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Pan:</td>
                        <td><input type="text" class="form-control" id="a41" name="a1" value="<?php echo $almuerzo['de41']; ?>"></td>
                        <td><input type="text" class="form-control" id="a42" name="a2" value="<?php echo $almuerzo['de42']; ?>"></td>
                        <td><input type="text" class="form-control" id="a43" name="a3" value="<?php echo $almuerzo['de43']; ?>"></td>
                        <td><input type="text" class="form-control" id="a44" name="a4" value="<?php echo $almuerzo['de44']; ?>"></td>
                        <td><input type="text" class="form-control" id="a45" name="a5" value="<?php echo $almuerzo['de45']; ?>"></td>
                        <td><input type="text" class="form-control" id="a46" name="a6" value="<?php echo $almuerzo['de46']; ?>"></td>
                        <td><input type="text" class="form-control" id="a47" name="a7" value="<?php echo $almuerzo['de47']; ?>"></td>
                        <td><input type="text" class="form-control" id="a48" name="a8" value="<?php echo $almuerzo['de48']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Bebidas frías:</td>
                        <td><input type="text" class="form-control" id="a49" name="a1" value="<?php echo $almuerzo['de49']; ?>"></td>
                        <td><input type="text" class="form-control" id="a50" name="a2" value="<?php echo $almuerzo['de50']; ?>"></td>
                        <td><input type="text" class="form-control" id="a51" name="a3" value="<?php echo $almuerzo['de51']; ?>"></td>
                        <td><input type="text" class="form-control" id="a52" name="a4" value="<?php echo $almuerzo['de52']; ?>"></td>
                        <td><input type="text" class="form-control" id="a53" name="a5" value="<?php echo $almuerzo['de53']; ?>"></td>
                        <td><input type="text" class="form-control" id="a54" name="a6" value="<?php echo $almuerzo['de54']; ?>"></td>
                        <td><input type="text" class="form-control" id="a55" name="a7" value="<?php echo $almuerzo['de55']; ?>"></td>
                        <td><input type="text" class="form-control" id="a56" name="a8" value="<?php echo $almuerzo['de56']; ?>"></td>
                   

                    </tr>
                  </tbody>
                      </table>
                      </div>
                      <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-danger" id="almuerzo">Actualizar Almuerzo</button>
                </div>

                  
                  </div> 



                  <div class="row" style="margin-top:40px;">
                      <div class="col-lg-12">   
                      <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CENA</th>
                    <th>DIA 1</th>
                    <th>DIA 2</th>
                    <th>DIA 3</th>
                    <th>DIA 4</th>
                    <th>DIA 5</th>
                    <th>DIA 6</th>
                    <th>DIA 7</th>
                    <th>DIA 8</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>Primer plato:</td>
                        <td><input type="text" class="form-control" id="c1" name="l1" value="<?php echo $cena['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="c2" name="l2" value="<?php echo $cena['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="c3" name="l3" value="<?php echo $cena['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="c4" name="l4" value="<?php echo $cena['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="c5" name="l5" value="<?php echo $cena['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="c6" name="l6" value="<?php echo $cena['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="c7" name="l7" value="<?php echo $cena['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="c8" name="l8" value="<?php echo $cena['de8']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Plato principal:</td>
                        <td><input type="text" class="form-control" id="c9" name="s1" value="<?php echo $cena['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="c10" name="s2" value="<?php echo $cena['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="c11" name="s3" value="<?php echo $cena['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="c12" name="s4" value="<?php echo $cena['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="c13" name="s5" value="<?php echo $cena['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="c14" name="s6" value="<?php echo $cena['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="c15" name="s7" value="<?php echo $cena['de15']; ?>"></td>
                        <td><input type="text" class="form-control" id="c16" name="s8" value="<?php echo $cena['de16']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Plato de fondo:</td>
                        <td><input type="text" class="form-control" id="c17" name="a1" value="<?php echo $cena['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="c18" name="a2" value="<?php echo $cena['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="c19" name="a3" value="<?php echo $cena['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="c20" name="a4" value="<?php echo $cena['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="c21" name="a5" value="<?php echo $cena['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="c22" name="a6" value="<?php echo $cena['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="c23" name="a7" value="<?php echo $cena['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="c24" name="a8" value="<?php echo $cena['de24']; ?>"></td>
                   

                    </tr>
                    <tr>
                        <td>Acompañamientos:</td>
                        <td><input type="text" class="form-control" id="c25" name="a1" value="<?php echo $cena['de25']; ?>"></td>
                        <td><input type="text" class="form-control" id="c26" name="a2" value="<?php echo $cena['de26']; ?>"></td>
                        <td><input type="text" class="form-control" id="c27" name="a3" value="<?php echo $cena['de27']; ?>"></td>
                        <td><input type="text" class="form-control" id="c28" name="a4" value="<?php echo $cena['de28']; ?>"></td>
                        <td><input type="text" class="form-control" id="c29" name="a5" value="<?php echo $cena['de29']; ?>"></td>
                        <td><input type="text" class="form-control" id="c30" name="a6" value="<?php echo $cena['de30']; ?>"></td>
                        <td><input type="text" class="form-control" id="c31" name="a7" value="<?php echo $cena['de31']; ?>"></td>
                        <td><input type="text" class="form-control" id="c32" name="a8" value="<?php echo $cena['de32']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Postres:</td>
                        <td><input type="text" class="form-control" id="c33" name="a1" value="<?php echo $cena['de33']; ?>"></td>
                        <td><input type="text" class="form-control" id="c34" name="a2" value="<?php echo $cena['de34']; ?>"></td>
                        <td><input type="text" class="form-control" id="c35" name="a3" value="<?php echo $cena['de35']; ?>"></td>
                        <td><input type="text" class="form-control" id="c36" name="a4" value="<?php echo $cena['de36']; ?>"></td>
                        <td><input type="text" class="form-control" id="c37" name="a5" value="<?php echo $cena['de37']; ?>"></td>
                        <td><input type="text" class="form-control" id="c38" name="a6" value="<?php echo $cena['de38']; ?>"></td>
                        <td><input type="text" class="form-control" id="c39" name="a7" value="<?php echo $cena['de39']; ?>"></td>
                        <td><input type="text" class="form-control" id="c40" name="a8" value="<?php echo $cena['de40']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Pan:</td>
                        <td><input type="text" class="form-control" id="c41" name="a1" value="<?php echo $cena['de41']; ?>"></td>
                        <td><input type="text" class="form-control" id="c42" name="a2" value="<?php echo $cena['de42']; ?>"></td>
                        <td><input type="text" class="form-control" id="c43" name="a3" value="<?php echo $cena['de43']; ?>"></td>
                        <td><input type="text" class="form-control" id="c44" name="a4" value="<?php echo $cena['de44']; ?>"></td>
                        <td><input type="text" class="form-control" id="c45" name="a5" value="<?php echo $cena['de45']; ?>"></td>
                        <td><input type="text" class="form-control" id="c46" name="a6" value="<?php echo $cena['de46']; ?>"></td>
                        <td><input type="text" class="form-control" id="c47" name="a7" value="<?php echo $cena['de47']; ?>"></td>
                        <td><input type="text" class="form-control" id="c48" name="a8" value="<?php echo $cena['de48']; ?>"></td>
                   

                    </tr>  <tr>
                        <td>Bebidas frías:</td>
                        <td><input type="text" class="form-control" id="c49" name="a1" value="<?php echo $cena['de49']; ?>"></td>
                        <td><input type="text" class="form-control" id="c50" name="a2" value="<?php echo $cena['de50']; ?>"></td>
                        <td><input type="text" class="form-control" id="c51" name="a3" value="<?php echo $cena['de51']; ?>"></td>
                        <td><input type="text" class="form-control" id="c52" name="a4" value="<?php echo $cena['de52']; ?>"></td>
                        <td><input type="text" class="form-control" id="c53" name="a5" value="<?php echo $cena['de53']; ?>"></td>
                        <td><input type="text" class="form-control" id="c54" name="a6" value="<?php echo $cena['de54']; ?>"></td>
                        <td><input type="text" class="form-control" id="c55" name="a7" value="<?php echo $cena['de55']; ?>"></td>
                        <td><input type="text" class="form-control" id="c56" name="a8" value="<?php echo $cena['de56']; ?>"></td>
                   

                    </tr>
                  </tbody>
                      </table>
                      </div>
                 

                  
                  </div> 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro2"></div>
                  <button type="button" class="btn btn-primary" id="cena">Actualizar Cena</button>
                </div>
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
      $('#almuerzo').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto

    var de1 =        $("#a1").val();
    var de2 =        $("#a2").val();
    var de3 =        $("#a3").val();
    var de4 =        $("#a4").val();
    var de5 =        $("#a5").val();
    var de6 =        $("#a6").val();
    var de7 =        $("#a7").val();
    var de8 =        $("#a8").val();
    var de9 =        $("#a9").val();
    var de10 =       $("#a10").val();
    var de11 =       $("#a11").val();
    var de12 =       $("#a12").val();
    var de13 =       $("#a13").val();
    var de14 =       $("#a14").val();
    var de15 =       $("#a15").val();
    var de16 =       $("#a16").val();
    var de17 =       $("#a17").val();
    var de18 =       $("#a18").val();
    var de19 =       $("#a19").val();
    var de20 =       $("#a20").val();
    var de21 =       $("#a21").val();
    var de22 =       $("#a22").val();
    var de23 =       $("#a23").val();
    var de24 =       $("#a24").val();
    var de25 =       $("#a25").val();
    var de26 =       $("#a26").val();
    var de27 =       $("#a27").val();
    var de28 =       $("#a28").val();
    var de29 =       $("#a29").val();
    var de30 =       $("#a30").val();


    var de31 =       $("#a31").val();
    var de32 =       $("#a32").val();
    var de33 =       $("#a33").val();
    var de34 =       $("#a34").val();
    var de35 =       $("#a35").val();
    var de36 =       $("#a36").val();
    var de37 =       $("#a37").val();
    var de38 =       $("#a38").val();
    var de39 =       $("#a39").val();
    var de40 =       $("#a40").val();
    var de41 =       $("#a41").val();

    var de42 =       $("#a42").val();
    var de43 =       $("#a43").val();
    var de44 =       $("#a44").val();
    var de45 =       $("#a45").val();
    var de46 =       $("#a46").val();
    var de47 =       $("#a47").val();
    var de48 =       $("#a48").val();
    var de49 =       $("#a49").val();
    var de50 =       $("#a50").val();
    var de51 =       $("#a51").val();
    var de52 =       $("#a52").val();
    var de53 =       $("#a53").val();
    var de54 =       $("#a54").val();
    var de55 =       $("#a55").val();
    var de56 =       $("#a56").val();
    var updatealmuerzo = 1;
  
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
        datos.append('de46', de46);
        datos.append('de47', de47);
        datos.append('de48', de48);
        datos.append('de49', de49);
        datos.append('de50', de50);
        datos.append('de51', de51);
        datos.append('de52', de52);
        datos.append('de53', de53);
        datos.append('de54', de54);
        datos.append('de55', de55);
        datos.append('de56', de56);
        datos.append('updatealmuerzo', 1);
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

<script>
      $('#cena').click(function(e) {
    $("#ErroresRegistro2").html('');
    e.preventDefault(); // Detienes la accion por defecto

    var de1 =        $("#c1").val();
    var de2 =        $("#c2").val();
    var de3 =        $("#c3").val();
    var de4 =        $("#c4").val();
    var de5 =        $("#c5").val();
    var de6 =        $("#c6").val();
    var de7 =        $("#c7").val();
    var de8 =        $("#c8").val();
    var de9 =        $("#c9").val();
    var de10 =       $("#c10").val();
    var de11 =       $("#c11").val();
    var de12 =       $("#c12").val();
    var de13 =       $("#c13").val();
    var de14 =       $("#c14").val();
    var de15 =       $("#c15").val();
    var de16 =       $("#c16").val();
    var de17 =       $("#c17").val();
    var de18 =       $("#c18").val();
    var de19 =       $("#c19").val();
    var de20 =       $("#c20").val();
    var de21 =       $("#c21").val();
    var de22 =       $("#c22").val();
    var de23 =       $("#c23").val();
    var de24 =       $("#c24").val();
    var de25 =       $("#c25").val();
    var de26 =       $("#c26").val();
    var de27 =       $("#c27").val();
    var de28 =       $("#c28").val();
    var de29 =       $("#c29").val();
    var de30 =       $("#c30").val();


    var de31 =       $("#c31").val();
    var de32 =       $("#c32").val();
    var de33 =       $("#c33").val();
    var de34 =       $("#c34").val();
    var de35 =       $("#c35").val();
    var de36 =       $("#c36").val();
    var de37 =       $("#c37").val();
    var de38 =       $("#c38").val();
    var de39 =       $("#c39").val();
    var de40 =       $("#c40").val();
    var de41 =       $("#c41").val();

    var de42 =       $("#c42").val();
    var de43 =       $("#c43").val();
    var de44 =       $("#c44").val();
    var de45 =       $("#c45").val();
    var de46 =       $("#c46").val();
    var de47 =       $("#c47").val();
    var de48 =       $("#c48").val();
    var de49 =       $("#c49").val();
    var de50 =       $("#c50").val();
    var de51 =       $("#c51").val();
    var de52 =       $("#c52").val();
    var de53 =       $("#c53").val();
    var de54 =       $("#c54").val();
    var de55 =       $("#c55").val();
    var de56 =       $("#c56").val();
    var updatecena = 1;
  
  //alert(nacimiento);
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);

        $('#ErroresRegistro2').html('');
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
        datos.append('de46', de46);
        datos.append('de47', de47);
        datos.append('de48', de48);
        datos.append('de49', de49);
        datos.append('de50', de50);
        datos.append('de51', de51);
        datos.append('de52', de52);
        datos.append('de53', de53);
        datos.append('de54', de54);
        datos.append('de55', de55);
        datos.append('de56', de56);
        datos.append('updatecena', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/pizarraControlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType : 'json',
            beforeSend: function () {
                $("#ErroresRegistro2").html(`<p style="background:orange; color:white; margin-top:10px; padding:10px;">Procesando, espere por favor...</p>`);
            },
            success:  function (response) { 

                if(response.estado == 1){
                Swal.fire(
                'Perfecto Pizarra Once actualizada',
                ' <a href="PPizarraDYO">ver pizarra</a> ',
                'success'
              );
              location.reload();
             // alert(responde.id);
                $("#ErroresRegistro2").html(response.mensaje);
                $("#ErroresRegistro2").html('');
                $('#formulario')[0].reset();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al actualizar pizarra, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro2").html(response.mensaje);
                $("#ErroresRegistro2").html('');
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