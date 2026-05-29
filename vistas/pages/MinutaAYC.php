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
                        <td>Almuerzo y cena:</td>
                        <td><input type="text" class="form-control" id="d1" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d2" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d3" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d4" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d5" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d6" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d7" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d8" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d9" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d10" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d11" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d12" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d13" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d14" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d15" name="l8" ></td>
          

                    </tr>
                    <tr>
                        <td>Primer plato:</td>
                        <td><input type="text" class="form-control" id="d16" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d17" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d18" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d19" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d20" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d21" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d22" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d23" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d24" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d25" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d26" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d27" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d28" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d29" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d30" name="l8" ></td>
      

                    </tr>
                    <tr>
                        <td>2° plato o principal:</td>
                        <td><input type="text" class="form-control" id="d31" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d32" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d33" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d34" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d35" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d36" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d37" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d38" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d39" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d40" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d41" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d42" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d43" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d44" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d45" name="l8" ></td>
                   

                    </tr>
                    <tr>
                        <td>Postres:</td>
                        <td><input type="text" class="form-control" id="d31" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d32" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d33" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d34" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d35" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d36" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d37" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d38" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d39" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d40" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d41" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d42" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d43" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d44" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d45" name="l8" ></td>
                   

                    </tr>
                    <tr>
                        <td>Pan:</td>
                        <td><input type="text" class="form-control" id="d31" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d32" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d33" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d34" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d35" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d36" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d37" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d38" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d39" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d40" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d41" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d42" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d43" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d44" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d45" name="l8" ></td>
                   

                    </tr>
                    <tr>
                        <td>Bebida fría:</td>
                        <td><input type="text" class="form-control" id="d31" name="l1" ></td>
                        <td><input type="text" class="form-control" id="d32" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d33" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d34" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d35" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d36" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d37" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d38" name="l8" ></td>
                        <td><input type="text" class="form-control" id="d39" name="l2" ></td>
                        <td><input type="text" class="form-control" id="d40" name="l3" ></td>
                        <td><input type="text" class="form-control" id="d41" name="l4" ></td>
                        <td><input type="text" class="form-control" id="d42" name="l5" ></td>
                        <td><input type="text" class="form-control" id="d43" name="l6" ></td>
                        <td><input type="text" class="form-control" id="d44" name="l7" ></td>
                        <td><input type="text" class="form-control" id="d45" name="l8" ></td>
                   

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
                        <td><input type="text" class="form-control" id="on1" name="l1" ></td>
                        <td><input type="text" class="form-control" id="on2" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on3" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on4" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on5" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on6" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on7" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on8" name="l8" ></td>
                        <td><input type="text" class="form-control" id="on9" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on10" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on11" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on12" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on13" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on14" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on15" name="l8" ></td>
          

                    </tr>
                    <tr>
                        <td>Porción líquida:</td>
                        <td><input type="text" class="form-control" id="on16" name="l1" ></td>
                        <td><input type="text" class="form-control" id="on17" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on18" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on19" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on20" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on21" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on22" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on23" name="l8" ></td>
                        <td><input type="text" class="form-control" id="on24" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on25" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on26" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on27" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on28" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on29" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on30" name="l8" ></td>
      

                    </tr>
                    <tr>
                        <td>Porción sólida::</td>
                        <td><input type="text" class="form-control" id="on31" name="l1" ></td>
                        <td><input type="text" class="form-control" id="on32" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on33" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on34" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on35" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on36" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on37" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on38" name="l8" ></td>
                        <td><input type="text" class="form-control" id="on39" name="l2" ></td>
                        <td><input type="text" class="form-control" id="on40" name="l3" ></td>
                        <td><input type="text" class="form-control" id="on41" name="l4" ></td>
                        <td><input type="text" class="form-control" id="on42" name="l5" ></td>
                        <td><input type="text" class="form-control" id="on43" name="l6" ></td>
                        <td><input type="text" class="form-control" id="on44" name="l7" ></td>
                        <td><input type="text" class="form-control" id="on45" name="l8" ></td>
                   

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
      $('#inserto').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var rut =           $("#rut").val();
    var nombre =        $("#nombre").val();
    var apellido =      $("#apellido").val();
    var edad =          $("#edad").val();
    var nacimiento =    $("#nacimiento").val();
    var estatura =      $("#estatura").val();
    var peso =          $("#peso").val();
    var sexo =          $("#sexo").val();
    var enfermedades =  $("#enfermedades").val();
    var actividad =     $("#actividad").val();
    var email =         $("#email").val();
    var fono =          $("#fono").val();
    var comentario =    $("#comentario").val();
    var usuario =       $("#usuario").val();
    var empresa =       $("#empresa").val();
    var insertPacientes = 1;
  
  //alert(nacimiento);
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);



 
    if (rut == '' || nombre == ''|| apellido == '' || edad == '' || nacimiento == '' || estatura == '' || peso == '' || sexo == '' || enfermedades == '' || actividad == '' || email == '' || fono == '' || comentario == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('rut', rut);
        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('edad', edad);
        datos.append('nacimiento', nacimiento);
        datos.append('estatura', estatura);
        datos.append('peso', peso);
        datos.append('sexo', sexo);
        datos.append('enfermedades', enfermedades);
        datos.append('actividad', actividad);
        datos.append('email', email);
        datos.append('fono', fono);
        datos.append('comentario', comentario);
        datos.append('usuario', usuario);
        datos.append('empresa', empresa);
        datos.append('insertPacientes', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/pacientesControlador.php",
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
                'Perfecto Paciente  Ingresado(a)',
                ' <a href="Profile?idPaciente='+response.paciente+'">Ver Ficha Paciente</a> ',
                'success'
              );

             // alert(responde.id);
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar tu Paciente, intentalo nuevamente!'
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
    }
})

  </script>

<script>
      $('.Ficha').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var rut =           $("#rut").val();
    var nombre =        $("#nombre").val();
    var apellido =      $("#apellido").val();
    var edad =          $("#edad").val();
    var nacimiento =    $("#nacimiento").val();
    var estatura =      $("#estatura").val();
    var peso =          $("#peso").val();
    var sexo =          $("#sexo").val();
    var enfermedades =  $("#enfermedades").val();
    var actividad =     $("#actividad").val();
    var email =         $("#email").val();
    var fono =          $("#fono").val();
    var comentario =    $("#comentario").val();
    var usuario =       $("#usuario").val();
    var empresa =       $("#empresa").val();
    var insertPacientes = 1;
  
  //alert(nacimiento);
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);



 
    if (rut == '' || nombre == ''|| apellido == '' || edad == '' || nacimiento == '' || estatura == '' || peso == '' || sexo == '' || enfermedades == '' || actividad == '' || email == '' || fono == '' || comentario == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('rut', rut);
        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('edad', edad);
        datos.append('nacimiento', nacimiento);
        datos.append('estatura', estatura);
        datos.append('peso', peso);
        datos.append('sexo', sexo);
        datos.append('enfermedades', enfermedades);
        datos.append('actividad', actividad);
        datos.append('email', email);
        datos.append('fono', fono);
        datos.append('comentario', comentario);
        datos.append('usuario', usuario);
        datos.append('empresa', empresa);
        datos.append('insertPacientes', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/pacientesControlador.php",
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
                'Perfecto Paciente  Ingresado(a)',
                ' <a href="Profile?idPaciente="'+response.paciente+'>Ir  a Ficha Paciente</a> ',
                'success'
              );

             // alert(responde.id);
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar tu Paciente, intentalo nuevamente!'
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
    }
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