<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pacientesControlador.php");
include (CONTROLADOR_PATH."empresasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$pacientes = pacientesControlador::viewPacientes();
$empresas  = empresasControlador::viewEmpresas();

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
DESAYUNO Y ONCE</h5>
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
                    <th>Estructura servicio</th>
                    <th>DIA 1</th>
                    <th>DIA 2</th>
                    <th>DIA 3</th>
                    <th>DIA 4</th>
                    <th>DIA 5</th>
                    <th>DIA 6</th>
                    <th>DIA 7</th>
                    <th>DIA 8</th>
                    <th>DIA 9</th>
                    <th>DIA 10</th>
                    <th>DIA 11</th>
                    <th>DIA 12</th>
                    <th>DIA 13</th>
                    <th>DIA 14</th>
                    <th>DIA 15</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Desayuno y Once:</td>
                        <td><input type="text" class="form-control" id="d1" name="l1" value="<?php echo $desayuno['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="d2" name="l2" value="<?php echo $desayuno['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="d3" name="l3" value="<?php echo $desayuno['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="d4" name="l4" value="<?php echo $desayuno['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="d5" name="l5" value="<?php echo $desayuno['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="d6" name="l6" value="<?php echo $desayuno['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="d7" name="l7" value="<?php echo $desayuno['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="d8" name="l8" value="<?php echo $desayuno['de8']; ?>"></td>
                        <td><input type="text" class="form-control" id="d9" name="l2" value="<?php echo $desayuno['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="d10" name="l3" value="<?php echo $desayuno['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="d11" name="l4" value="<?php echo $desayuno['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="d12" name="l5" value="<?php echo $desayuno['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="d13" name="l6" value="<?php echo $desayuno['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="d14" name="l7" value="<?php echo $desayuno['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="d15" name="l8" value="<?php echo $desayuno['de15']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Porción líquida:</td>
                        <td><input type="text" class="form-control" id="d16" name="l1" value="<?php echo $desayuno['de16']; ?>"></td>
                        <td><input type="text" class="form-control" id="d17" name="l2" value="<?php echo $desayuno['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="d18" name="l3" value="<?php echo $desayuno['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="d19" name="l4" value="<?php echo $desayuno['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="d20" name="l5" value="<?php echo $desayuno['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="d21" name="l6" value="<?php echo $desayuno['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="d22" name="l7" value="<?php echo $desayuno['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="d23" name="l8" value="<?php echo $desayuno['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="d24" name="l2" value="<?php echo $desayuno['de24']; ?>"></td>
                        <td><input type="text" class="form-control" id="d25" name="l3" value="<?php echo $desayuno['de25']; ?>"></td>
                        <td><input type="text" class="form-control" id="d26" name="l4" value="<?php echo $desayuno['de26']; ?>"></td>
                        <td><input type="text" class="form-control" id="d27" name="l5" value="<?php echo $desayuno['de27']; ?>"></td>
                        <td><input type="text" class="form-control" id="d28" name="l6" value="<?php echo $desayuno['de28']; ?>"></td>
                        <td><input type="text" class="form-control" id="d29" name="l7" value="<?php echo $desayuno['de29']; ?>"></td>
                        <td><input type="text" class="form-control" id="d30" name="l8" value="<?php echo $desayuno['de30']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Porción sólida::</td>
                        <td><input type="text" class="form-control" id="d31" name="l1" value="<?php echo $desayuno['de31']; ?>"></td>
                        <td><input type="text" class="form-control" id="d32" name="l2" value="<?php echo $desayuno['de32']; ?>"></td>
                        <td><input type="text" class="form-control" id="d33" name="l3" value="<?php echo $desayuno['de33']; ?>"></td>
                        <td><input type="text" class="form-control" id="d34" name="l4" value="<?php echo $desayuno['de34']; ?>"></td>
                        <td><input type="text" class="form-control" id="d35" name="l5" value="<?php echo $desayuno['de35']; ?>"></td>
                        <td><input type="text" class="form-control" id="d36" name="l6" value="<?php echo $desayuno['de36']; ?>"></td>
                        <td><input type="text" class="form-control" id="d37" name="l7" value="<?php echo $desayuno['de37']; ?>"></td>
                        <td><input type="text" class="form-control" id="d38" name="l8" value="<?php echo $desayuno['de38']; ?>"></td>
                        <td><input type="text" class="form-control" id="d39" name="l2" value="<?php echo $desayuno['de39']; ?>"></td>
                        <td><input type="text" class="form-control" id="d40" name="l3" value="<?php echo $desayuno['de40']; ?>"></td>
                        <td><input type="text" class="form-control" id="d41" name="l4" value="<?php echo $desayuno['de41']; ?>"></td>
                        <td><input type="text" class="form-control" id="d42" name="l5" value="<?php echo $desayuno['de42']; ?>"></td>
                        <td><input type="text" class="form-control" id="d43" name="l6" value="<?php echo $desayuno['de43']; ?>"></td>
                        <td><input type="text" class="form-control" id="d44" name="l7" value="<?php echo $desayuno['de44']; ?>"></td>
                        <td><input type="text" class="form-control" id="d45" name="l8" value="<?php echo $desayuno['de45']; ?>"></td>
                   

                    </tr>
                  </tbody>
                      </table>
                      </div>
                      <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-danger" id="desayuno">Actualizar Desayuno</button>
                </div>

                  
                  </div> 



                  <div class="row" style="margin-top:40px;">
                      <div class="col-lg-12">   
                      <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ONCE</th>
                    <th>DIA 1</th>
                    <th>DIA 2</th>
                    <th>DIA 3</th>
                    <th>DIA 4</th>
                    <th>DIA 5</th>
                    <th>DIA 6</th>
                    <th>DIA 7</th>
                    <th>DIA 8</th>
                    <th>DIA 9</th>
                    <th>DIA 10</th>
                    <th>DIA 11</th>
                    <th>DIA 12</th>
                    <th>DIA 13</th>
                    <th>DIA 14</th>
                    <th>DIA 15</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>Desayuno y Once:</td>
                        <td><input type="text" class="form-control" id="on1" name="l1" value="<?php echo $desayuno['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="on2" name="l2" value="<?php echo $desayuno['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="on3" name="l3" value="<?php echo $desayuno['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="on4" name="l4" value="<?php echo $desayuno['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="on5" name="l5" value="<?php echo $desayuno['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="on6" name="l6" value="<?php echo $desayuno['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="on7" name="l7" value="<?php echo $desayuno['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="on8" name="l8" value="<?php echo $desayuno['de8']; ?>"></td>
                        <td><input type="text" class="form-control" id="on9" name="l2" value="<?php echo $desayuno['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="on10" name="l3" value="<?php echo $desayuno['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="on11" name="l4" value="<?php echo $desayuno['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="on12" name="l5" value="<?php echo $desayuno['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="on13" name="l6" value="<?php echo $desayuno['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="on14" name="l7" value="<?php echo $desayuno['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="on15" name="l8" value="<?php echo $desayuno['de15']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Porción líquida:</td>
                        <td><input type="text" class="form-control" id="on16" name="l1" value="<?php echo $desayuno['de16']; ?>"></td>
                        <td><input type="text" class="form-control" id="on17" name="l2" value="<?php echo $desayuno['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="on18" name="l3" value="<?php echo $desayuno['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="on19" name="l4" value="<?php echo $desayuno['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="on20" name="l5" value="<?php echo $desayuno['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="on21" name="l6" value="<?php echo $desayuno['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="on22" name="l7" value="<?php echo $desayuno['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="on23" name="l8" value="<?php echo $desayuno['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="on24" name="l2" value="<?php echo $desayuno['de24']; ?>"></td>
                        <td><input type="text" class="form-control" id="on25" name="l3" value="<?php echo $desayuno['de25']; ?>"></td>
                        <td><input type="text" class="form-control" id="on26" name="l4" value="<?php echo $desayuno['de26']; ?>"></td>
                        <td><input type="text" class="form-control" id="on27" name="l5" value="<?php echo $desayuno['de27']; ?>"></td>
                        <td><input type="text" class="form-control" id="on28" name="l6" value="<?php echo $desayuno['de28']; ?>"></td>
                        <td><input type="text" class="form-control" id="on29" name="l7" value="<?php echo $desayuno['de29']; ?>"></td>
                        <td><input type="text" class="form-control" id="on30" name="l8" value="<?php echo $desayuno['de30']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Porción sólida::</td>
                        <td><input type="text" class="form-control" id="on31" name="l1" value="<?php echo $desayuno['de31']; ?>"></td>
                        <td><input type="text" class="form-control" id="on32" name="l2" value="<?php echo $desayuno['de32']; ?>"></td>
                        <td><input type="text" class="form-control" id="on33" name="l3" value="<?php echo $desayuno['de33']; ?>"></td>
                        <td><input type="text" class="form-control" id="on34" name="l4" value="<?php echo $desayuno['de34']; ?>"></td>
                        <td><input type="text" class="form-control" id="on35" name="l5" value="<?php echo $desayuno['de35']; ?>"></td>
                        <td><input type="text" class="form-control" id="on36" name="l6" value="<?php echo $desayuno['de36']; ?>"></td>
                        <td><input type="text" class="form-control" id="on37" name="l7" value="<?php echo $desayuno['de37']; ?>"></td>
                        <td><input type="text" class="form-control" id="on38" name="l8" value="<?php echo $desayuno['de38']; ?>"></td>
                        <td><input type="text" class="form-control" id="on39" name="l2" value="<?php echo $desayuno['de39']; ?>"></td>
                        <td><input type="text" class="form-control" id="on40" name="l3" value="<?php echo $desayuno['de40']; ?>"></td>
                        <td><input type="text" class="form-control" id="on41" name="l4" value="<?php echo $desayuno['de41']; ?>"></td>
                        <td><input type="text" class="form-control" id="on42" name="l5" value="<?php echo $desayuno['de42']; ?>"></td>
                        <td><input type="text" class="form-control" id="on43" name="l6" value="<?php echo $desayuno['de43']; ?>"></td>
                        <td><input type="text" class="form-control" id="on44" name="l7" value="<?php echo $desayuno['de44']; ?>"></td>
                        <td><input type="text" class="form-control" id="on45" name="l8" value="<?php echo $desayuno['de45']; ?>"></td>
                   

                    </tr>
                  </tbody>
                      </table>
                      </div>
                 

                  
                  </div> 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-primary" id="desayuno">Actualizar Once</button>
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
     
        datos.append('desayunomin', 1);
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

    var de1 =        $("#on1").val();
    var de2 =        $("#on2").val();
    var de3 =        $("#on3").val();
    var de4 =        $("#on4").val();
    var de5 =        $("#on5").val();
    var de6 =        $("#on6").val();
    var de7 =        $("#on7").val();
    var de8 =        $("#on8").val();
    var de9 =        $("#on9").val();
    var de10 =       $("#on10").val();
    var de11 =       $("#on11").val();
    var de12 =       $("#on12").val();
    var de13 =       $("#on13").val();
    var de14 =       $("#on14").val();
    var de15 =       $("#on15").val();
    var de16 =       $("#on16").val();
    var de17 =       $("#on17").val();
    var de18 =       $("#on18").val();
    var de19 =       $("#on19").val();
    var de20 =       $("#on20").val();
    var de21 =       $("#on21").val();
    var de22 =       $("#on22").val();
    var de23 =       $("#on23").val();
    var de24 =       $("#on24").val();
    var de25 =       $("#on25").val();
    var de26 =       $("#on26").val();
    var de27 =       $("#on27").val();
    var de28 =       $("#on28").val();
    var de29 =       $("#on29").val();
    var de30 =       $("#on30").val();


    var de31 =       $("#oon31").val();
    var de32 =       $("#oon32").val();
    var de33 =       $("#oon33").val();
    var de34 =       $("#oon34").val();
    var de35 =       $("#oon35").val();
    var de36 =       $("#oon36").val();
    var de37 =       $("#oon37").val();
    var de38 =       $("#oon38").val();
    var de39 =       $("#oon39").val();
    var de40 =       $("#oon40").val();
    var de41 =       $("#oon41").val();

    var de42 =       $("#on42").val();
    var de43 =       $("#on43").val();
    var de44 =       $("#on44").val();
    var de45 =       $("#on45").val();
 
    var oncemin = 1;
  
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

        datos.append('oncemin', 1);
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

<script>
  var random = $("#random").val();
</script>

<!--
Swal.fire({
    html: `<h1>Venta realizada</h1>
    <p>Venta guardada con el id <strong>12321312</strong></p>
    <br>
    <a href="#">Imprimir ticket</a>
    `,
});-->