<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pizarraControlador.php");
//include (CONTROLADOR_PATH."empresasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$desayuno = pizarraControlador::viewPizarraDesayuno();
$once = pizarraControlador::viewPizarraOnce();
//$empresas  = empresasControlador::viewEmpresas();

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
                    <th>DESAYUNO</th>
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
                        <td>Porción líquida:</td>
                        <td><input type="text" class="form-control" id="de1" name="l1" value="<?php echo $desayuno['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="de2" name="l2" value="<?php echo $desayuno['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="de3" name="l3" value="<?php echo $desayuno['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="de4" name="l4" value="<?php echo $desayuno['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="de5" name="l5" value="<?php echo $desayuno['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="de6" name="l6" value="<?php echo $desayuno['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="de7" name="l7" value="<?php echo $desayuno['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="de8" name="l8" value="<?php echo $desayuno['de8']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Porción sólida:</td>
                        <td><input type="text" class="form-control" id="de9" name="s1" value="<?php echo $desayuno['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="de10" name="s2" value="<?php echo $desayuno['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="de11" name="s3" value="<?php echo $desayuno['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="de12" name="s4" value="<?php echo $desayuno['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="de13" name="s5" value="<?php echo $desayuno['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="de14" name="s6" value="<?php echo $desayuno['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="de15" name="s7" value="<?php echo $desayuno['de15']; ?>"></td>
                        <td><input type="text" class="form-control" id="de16" name="s8" value="<?php echo $desayuno['de16']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Agregados de la porción sólida::</td>
                        <td><input type="text" class="form-control" id="de17" name="a1" value="<?php echo $desayuno['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="de18" name="a2" value="<?php echo $desayuno['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="de19" name="a3" value="<?php echo $desayuno['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="de20" name="a4" value="<?php echo $desayuno['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="de21" name="a5" value="<?php echo $desayuno['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="de22" name="a6" value="<?php echo $desayuno['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="de23" name="a7" value="<?php echo $desayuno['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="de24" name="a8" value="<?php echo $desayuno['de24']; ?>"></td>
                   

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
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>Porción líquida:</td>
                        <td><input type="text" class="form-control" id="on1" name="l1" value="<?php echo $once['de1']; ?>"></td>
                        <td><input type="text" class="form-control" id="on2" name="l2" value="<?php echo $once['de2']; ?>"></td>
                        <td><input type="text" class="form-control" id="on3" name="l3" value="<?php echo $once['de3']; ?>"></td>
                        <td><input type="text" class="form-control" id="on4" name="l4" value="<?php echo $once['de4']; ?>"></td>
                        <td><input type="text" class="form-control" id="on5" name="l5" value="<?php echo $once['de5']; ?>"></td>
                        <td><input type="text" class="form-control" id="on6" name="l6" value="<?php echo $once['de6']; ?>"></td>
                        <td><input type="text" class="form-control" id="on7" name="l7" value="<?php echo $once['de7']; ?>"></td>
                        <td><input type="text" class="form-control" id="on8" name="l8" value="<?php echo $once['de8']; ?>"></td>
          

                    </tr>
                    <tr>
                        <td>Porción sólida:</td>
                        <td><input type="text" class="form-control" id="on9" name="s1" value="<?php echo $once['de9']; ?>"></td>
                        <td><input type="text" class="form-control" id="on10" name="s2" value="<?php echo $once['de10']; ?>"></td>
                        <td><input type="text" class="form-control" id="on11" name="s3" value="<?php echo $once['de11']; ?>"></td>
                        <td><input type="text" class="form-control" id="on12" name="s4" value="<?php echo $once['de12']; ?>"></td>
                        <td><input type="text" class="form-control" id="on13" name="s5" value="<?php echo $once['de13']; ?>"></td>
                        <td><input type="text" class="form-control" id="on14" name="s6" value="<?php echo $once['de14']; ?>"></td>
                        <td><input type="text" class="form-control" id="on15" name="s7" value="<?php echo $once['de15']; ?>"></td>
                        <td><input type="text" class="form-control" id="on16" name="s8" value="<?php echo $once['de16']; ?>"></td>
      

                    </tr>
                    <tr>
                        <td>Agregados de la porción sólida::</td>
                        <td><input type="text" class="form-control" id="on17" name="a1" value="<?php echo $once['de17']; ?>"></td>
                        <td><input type="text" class="form-control" id="on18" name="a2" value="<?php echo $once['de18']; ?>"></td>
                        <td><input type="text" class="form-control" id="on19" name="a3" value="<?php echo $once['de19']; ?>"></td>
                        <td><input type="text" class="form-control" id="on20" name="a4" value="<?php echo $once['de20']; ?>"></td>
                        <td><input type="text" class="form-control" id="on21" name="a5" value="<?php echo $once['de21']; ?>"></td>
                        <td><input type="text" class="form-control" id="on22" name="a6" value="<?php echo $once['de22']; ?>"></td>
                        <td><input type="text" class="form-control" id="on23" name="a7" value="<?php echo $once['de23']; ?>"></td>
                        <td><input type="text" class="form-control" id="on24" name="a8" value="<?php echo $once['de24']; ?>"></td>
                   

                    </tr>
                  </tbody>
                      </table>
                      </div>
                 

                  
                  </div> 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro2"></div>
                  <button type="button" class="btn btn-primary" id="once">Actualizar Once</button>
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

    var de1 =        $("#de1").val();
    var de2 =        $("#de2").val();
    var de3 =        $("#de3").val();
    var de4 =        $("#de4").val();
    var de5 =        $("#de5").val();
    var de6 =        $("#de6").val();
    var de7 =        $("#de7").val();
    var de8 =        $("#de8").val();
    var de9 =        $("#de9").val();
    var de10 =       $("#de10").val();
    var de11 =       $("#de11").val();
    var de12 =       $("#de12").val();
    var de13 =       $("#de13").val();
    var de14 =       $("#de14").val();
    var de15 =       $("#de15").val();
    var de16 =       $("#de16").val();
    var de17 =       $("#de17").val();
    var de18 =       $("#de18").val();
    var de19 =       $("#de19").val();
    var de20 =       $("#de20").val();
    var de21 =       $("#de21").val();
    var de22 =       $("#de22").val();
    var de23 =       $("#de23").val();
    var de24 =       $("#de24").val();
    var updatedesayuno = 1;
  
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
        datos.append('updatedesayuno', 1);
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
                'Perfecto Pizarra desayuno actualizada',
                ' <a href="PPizarraDYO">ver pizarra</a> ',
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
      $('#once').click(function(e) {
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
    var updateonce = 1;
  
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
        datos.append('updateonce', 1);
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