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
            <h1 class="m-0"> Nuevo <small>Paciente</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Nuevo Paciente</a></li>
              <li class="breadcrumb-item active">Nuevo Paciente</li>
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
          <div class="col-lg-5">
       
            <div class="card card-<?php echo  $config['color']; ?> card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ingreso Nuevo Paciente</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">


                <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Empresa</label>
                            <select class="custom-select rounded-0" id="empresa" required>
                            <?php foreach($empresas as $emp) {?>
                              <option value="<?php echo  $emp->Id_Empresa; ?>"> <?php  echo $emp->Nombre_Empresa; ?> </option>
                            <?php }?>
                            

                                  
                                      </select>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Rut</label>
                           <input type="text" class="form-control" id="rut" name="rut" placeholder="12123123-1" required>
                        </div>
                  </div>

                  
                  </div> 


               
                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Apellidos</label>
                          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese apellido" required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" placeholder="24" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Fecha Nacimiento</label>
                          <input type="date" class="form-control" id="nacimiento" name="nacimiento"  required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Estatura</label>
                            <input type="text" class="form-control" id="estatura" name="estatura" placeholder="160.5" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Peso</label>
                          <input type="text" class="form-control" id="peso" name="Peso" placeholder="98" required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-4">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Sexo</label>
                            <select class="custom-select rounded-0" id="sexo" required>
                                      
                                      <option value="MASCULINO"> MASCULINO</option>
                                      <option value="FEMENINO"> FEMENINO</option>
                            

                                  
                                      </select>
                          </div>
                    </div>
                    <div class="col-lg-4">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Enfer. Cronicas</label>
                          <select class="custom-select rounded-0" id="enfermedades" required>
                                      
                                      <option value="1"> SI</option>
                                      <option value="2"> NO</option>
                            

                                  
                                      </select>
                        </div>
                  </div>

                  <div class="col-lg-4">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Act. Fisica</label>
                            <select class="custom-select rounded-0" id="actividad" required>
                                      
                                      <option value="SI"> SI</option>
                                      <option value="NO "> No</option>
                            

                                  
                                      </select>
                          </div>
                    </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="hola@hola.cl" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Fono</label>
                          <input type="text" class="form-control" id="fono" name="fono" placeholder="912345678" required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                  <div class="col-lg-6"></div>
                  <div class="col-lg-6"></div>

                  
                  </div> 
                

                  

                  <div class="form-group">
                                  <label for="exampleSelectRounded0">Comentario</label>
                                  <textarea class="form-control" rows="3" id="comentario" name="comentario" required></textarea>
                                        </div> 


                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-primary" id="inserto">Ingresar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
            </div>
         



          </div>

          <div class="col-lg-7">
       
       <div class="card card-<?php echo  $config['color']; ?> card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Lista de Pacientes</h5>
         </div>
         <div class="card-body">
            <!-- general form elements -->
       <div class="card card-primary">
         
          <!-- -->
          <div class="card">
         
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>F.Naci.</th>
                    <th>Email</th>
                    <th>Fono</th>
                    <th>Empresa</th>
                    <th>*</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pacientes as $pro) {?>
                  <tr>
                    <td><?php echo $pro->Id_Paciente; ?></td>
                    <td><?php echo $pro->Rut_Paciente; ?></td>
                    <td><?php echo $pro->Nombre_Paciente; ?></td>
                    <td><?php echo $pro->Apellido_Paciente; ?></td>
                    <td><?php echo $pro->Edad_Paciente; ?></td>
                    <td><?php echo $pro->Nacimiento_Paciente; ?></td>
                    <td><?php echo $pro->Email_Paciente; ?></td>
                    <td><?php echo $pro->Fono_Paciente; ?></td>
                    <td><?php echo $pro->Empresa_Paciente; ?></td>
          
                    <td>
                 
                  

                    <a  class="btn btn-warning"href="Profile?idPaciente=<?php echo $pro->Id_Paciente; ?>" id="">Ir a Ficha</a>
                  </td>
                  
                  </tr>
                  <?php } ?>
                 
                 
               
                 
                  
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!-- -->
    
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

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
                location.reload();
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