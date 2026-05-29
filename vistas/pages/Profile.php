<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');

include (CONTROLADOR_PATH."pacientesControlador.php");
include (CONTROLADOR_PATH."historialControlador.php");
include (CONTROLADOR_PATH."menuControlador.php");



//include (CONTROLADOR_PATH." productosControlador.php");
//var_dump($_GET);

//echo $_GET['idPaciente'] =6;
           
if(isset($_GET['idPaciente'])){
   $id = trim($_GET['idPaciente']);
  $paciente = pacientesControlador::viewPacienteID($id);
  $historial = historialControlador::viewHistorialID($id);

  $desayuno = menuControlador::cargoMenuProfile();
  $almuerzo = menuControlador::cargoMenuProfile();
  $once = menuControlador::cargoMenuProfile();
  //print_r($historial);
  //echo $paciente->Nombre_Paciente;

}

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
            <h1 class="m-0"> Ficha <small>Paciente</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
              <li class="breadcrumb-item active">Viendo Profile</li>
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
    
          <!-- /.col-md-6 -->
          <div class="col-lg-3">
       
            <div class="card card-<?php echo  $config['color']; ?> card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ficha Paciente</h5>
              </div>
              <!-- -->
              <div class="col-md-12">

            <!-- Profile Image -->

              <div class="card-body box-profile">
                <input type="hidden" id="id_paciente" value="<?php echo $paciente->Id_Paciente;?>">
                <input type="hidden" id="usuario" value="1">


                <h3 class="profile-username text-center"><?php echo $paciente->Nombre_Paciente;?></h3>

                <p class="text-muted text-center"><?php echo $paciente->Rut_Paciente;?> - <?php echo $paciente->Edad_Paciente;?> Años</p>
                <p class="text-muted text-center"><b><?php echo $paciente->Nombre_Empresa;?></b></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>F. Nacimiento</b> <a class="float-right"><?php echo $paciente->Nacimiento_Paciente;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Sexo</b> <a class="float-right"><?php echo $paciente->Sexo_Paciente;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Edad</b> <a class="float-right"><?php echo $paciente->Edad_Paciente;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Fono</b> <a class="float-right"><?php echo $paciente->Fono_Paciente;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $paciente->Email_Paciente;?></a>
                  </li>
                </ul>
                <div class="row"> 
                    <div class="col-md-12"> 
                    <div class="form-group">
                            <label for="exampleInputEmail1"> Desayuno </label>
                            <select class="custom-select rounded-0" id="desayuno">
                                      
                                  
                                      <?php foreach($desayuno as $emp1) {?>
                              <option value="<?php echo  $emp1->id; ?>" 
                              <?php if($emp1->id == $paciente->desayuno){echo 'selected';}else{}?>> <?php  echo $emp1->nombre; ?> </option>
                            <?php }?>
     
                            </select>
                          </div>
                    
                    </div>
                    <div class="col-md-12"> 
                    <div class="form-group">
                            <label for="exampleInputEmail1"> Almuerzo </label>
                            <select class="custom-select rounded-0" id="almuerzo">
                                      
                            <?php foreach($almuerzo as $emp2) {?>
                              <option value="<?php echo  $emp2->id; ?>"<?php if($emp2->id == $paciente->almuerzo){echo 'selected';}else{}?>> <?php  echo $emp2->nombre; ?> </option>
                            <?php }?>
     
                            </select>
                          </div>
                    
                    </div>

                    <div class="col-md-12"> 
                    <div class="form-group">
                            <label for="exampleInputEmail1"> Once </label>
                            <select class="custom-select rounded-0" id="once">
                                      
                            <?php foreach($once as $emp3) {?>
                              <option value="<?php echo  $emp3->id;?> "<?php if($emp3->id == $paciente->once){echo 'selected';}else{}?> > <?php  echo $emp3->nombre; ?> </option>
                            <?php }?>
     
                            </select>
                          </div>
                    
                    </div>


                    


                    <div class="col-md-12"> 
                    <div class="form-group">
                            <label for="exampleInputEmail1">Gramaje</label>
                            <input type="text" class="form-control" id="gram" name="gram" placeholder=" " value="300">
                          </div>
                    
                    </div>

                    <div class="col-md-12"> 
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Obs. </label>
                  <input type="text" class="form-control" id="obs" name="obs" placeholder=" " value="No">
                          </div>
                    
                    </div>
                    <div class="col-md-12">
                                <div id="ErroresRegistro3"></div>
                    <button type="button" class="btn btn-primary" id="actualizarpaciente">Actualizar</button>

                    </div>

                     <div class="col-md-12" style="margin-top:20px;">
                           <div id="ErroresRegistro4"></div>
                           <label for="exampleInputEmail1">Envíar Correo Paciente</label>
                    <textarea class="form-control" rows="3" id="envioCorreo" style="margin-bottom:15px;"></textarea>
                    <button type="button" class="btn btn-warning" id="envCorreo">Mandar Correo</button>

                    </div>
            
                </div>

       
              </div>
              <!-- /.card-body -->
         
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
              <!-- -->

            </div>
         



          </div>

          <div class="col-lg-9">
       
       <div class="card card-<?php echo  $config['color']; ?> card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Historia y Nueva historia</h5>
         </div>
         <div class="card-body">
            <!-- general form elements -->
       <div class="card card-primary">
         

          <!-- -->
          <div class="row">
            <form id="formulario">
          <div class="col-lg-12">
                <div class="card-body">
               
                <div class="row">
                      <div class="col-lg-2">   
                            <div class="form-group">
                              <label for="exampleInputEmail1">Act. Fisica</label>
                                  <select class="custom-select rounded-0" id="actividad">
                                            
                                            <option value="SI"> SI</option>
                                            <option value="NO"> NO</option>
          
                                  </select>
                          </div>
                  </div>
                   
                    <div class="col-lg-2">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Peso</label>
                          <input type="text" class="form-control" id="peso" name="peso" placeholder=" ">
                        </div>
                  </div>

                  <div class="col-lg-2">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Talla</label>
                            <input type="text" class="form-control" id="talla" name="talla" placeholder=" ">
                          </div>
                    </div>

                    
                  <div class="col-lg-2">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">IMC</label>
                            <input type="text" class="form-control" id="imc" name="imc" placeholder=" ">
                          </div>
                    </div>

                    <div class="col-lg-2">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">C Cintura</label>
                            <input type="text" class="form-control" id="ccintura" name="ccintura" placeholder=" ">
                          </div>
                    </div>

                    <div class="col-lg-2">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Pres. Arterial</label>
                            <input type="text" class="form-control" id="arterial" name="arterial" placeholder="">
                          </div>
                    </div>

                    </div>



                          <div class="row">
                        
                        
                                    <div class="col-lg-6">  
                                          <div class="form-group">
                                          <label for="exampleInputEmail1">Vitaminas</label>
                                          <input type="text" class="form-control" id="vitaminas" name="vitaminas" placeholder=" ">
                                        </div>
                                    </div>

                                  <div class="col-lg-6">   
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Minerales</label>
                                            <input type="text" class="form-control" id="minerales" name="minerales" placeholder=" ">
                                          </div>
                                    </div>

                          </div>

                            <div class="row">
                                                <div class="col-lg-6">   
                                                      <div class="form-group">
                                                      <label for="exampleInputEmail1">Anamnesis Alimentaria</label>
                                                      <textarea class="form-control" rows="3" id="anamnesis"></textarea>
                                                    </div>
                                              </div>

                                              <div class="col-lg-6">   
                                                      <div class="form-group">
                                                      <label for="exampleInputEmail1">Habitos</label>
                                                      <textarea class="form-control" rows="3" id="habitos"></textarea>
                                                    </div>
                                              </div>
                            </div> 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-primary" id="historial">Ingresar</button>
                </div>
</div>
</form>
          </div>
          <!-- -->



          <!-- -->
          <div class="card">
         
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Act. Fisi.</th>
                    <th>Peso</th>
                    <th>Talla</th>
                    <th>IMC</th>
                    <th>C.Cintura</th>
                    <th>P. Arterial</th>
                    <th>Vitaminas</th>
                    <th>Minerales</th>
                    <th>Habitos</th>
                    <th>Anamnesis</th>
                    <th>Usuario</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($historial) || is_object($historial)) { 
                      foreach($historial as $pro) {?>
                  <tr>
                    <td><?php echo $pro->ActividadFisica; ?></td>
                    <td><?php echo $pro->Peso; ?></td>
                    <td><?php echo $pro->Talla; ?></td>
                    <td><?php echo $pro->IMC; ?></td>
                    <td><?php echo $pro->CCintura; ?></td>
                    <td><?php echo $pro->PresArterial; ?></td>
                    <td><?php echo $pro->Vitaminas; ?></td>
                    <td><?php echo $pro->Minerales; ?></td>
                    <td><button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $pro->Anamnesis; ?>">
  Anamnesis
</button></td>
                    <td><button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $pro->Habitos; ?>">
  Habitos
</button></td>
                    <td><?php echo $pro->Usuario; ?></td>
          
                    
                  
                  </tr>
                  <?php } // cierra foreach
                  } // cierra if is_array
                  ?>
                 
                 
               
                 
                  
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
      $('#historial').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var paciente =    $("#id_paciente").val();// obtienes el valor del input
    var usuario =    $("#usuario").val();// obtienes el valor del input

    var actividad =    $("#actividad").val()
    var peso =        $("#peso").val()
    var talla =    $("#talla").val()
    var imc =    $("#imc").val()
    var ccintura =    $("#ccintura").val()
    var arterial =    $("#arterial").val()
    var vitaminas =    $("#vitaminas").val()
    var minerales =    $("#minerales").val()
    var anamnesis =    $("#anamnesis").val()
    var habitos =    $("#habitos").val()
  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);

  

 
    if (paciente == '' || actividad == '' || peso == '' || talla == '' || imc == '' || ccintura == '' || arterial == '' || vitaminas == '' || minerales == '' || anamnesis == '' || habitos == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('actividad', actividad);
        datos.append('peso', peso);
        datos.append('talla', talla);
        datos.append('imc', imc);
        datos.append('ccintura', ccintura);
        datos.append('arterial', arterial);
        datos.append('vitaminas', vitaminas);
        datos.append('minerales', minerales);
        datos.append('anamnesis', anamnesis);
        datos.append('habitos', habitos);
        datos.append('usuario', usuario);
        datos.append('paciente', paciente);
        datos.append('insertoHistorial', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/historialControlador.php",
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
                response.mensaje,
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                location.reload();
                //table.ajax.reload();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar historial, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                location.reload();
                }
                
               // $('#miModal').modal('hide')
               // CargaGaleria(orden);

                
            }
        })
    }
})

  </script>

<script>
      $('#actualizarpaciente').click(function(e) {
    $("#ErroresRegistro3").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var desayuno =    $("#desayuno").val();// obtienes el valor del input
    var almuerzo =    $("#almuerzo").val();// obtienes el valor del input
    var once =    $("#once").val();
    var usuario =    $("#id_paciente").val();

    var gram =        $("#gram").val();
    var obs =    $("#obs").val();
    var updatemenu =    1;

  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);

  

 
    if (desayuno == 0 || almuerzo == 0 || once == 0 || gram == '' || obs == '' ) {
        $('#ErroresRegistro3').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('desayuno', desayuno);
        datos.append('almuerzo', almuerzo);
        datos.append('once', once);
        datos.append('gramaje', gram);
        datos.append('obs', obs);
        datos.append('usuario', usuario);
        
        datos.append('updatemenu', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/pacientesControlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType : 'json',
            beforeSend: function () {
                $("#ErroresRegistro3").html(`<p style="background:orange; color:white; margin-top:10px; padding:10px;">Procesando, espere por favor...</p>`);
            },
            success:  function (response) { 

                if(response.estado == 1){
                Swal.fire(
                response.mensaje,
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro3").html(response.mensaje);
                $("#ErroresRegistro3").html('');
                $('#formulario')[0].reset();
                location.reload();
                //table.ajax.reload();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar menú a paciente, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro3").html(response.mensaje);
                $("#ErroresRegistro3").html('');
                $('#formulario')[0].reset();
                location.reload();
                }
                
               // $('#miModal').modal('hide')
               // CargaGaleria(orden);

                
            }
        })
    }
})

  </script>


<script>
      $('#envCorreo').click(function(e) {
    $("#ErroresRegistro4").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var paciente =    $("#id_paciente").val();// obtienes el valor del input
    var mensaje =    $("#envioCorreo").val();// obtienes el valor del input
  


    var mail =    1;

  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);

  

 
    if (mensaje == "") {
        $('#ErroresRegistro4').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">debe ingresar un mensaje de correo electronico</p>');
      } else {
        $('#ErroresRegistro4').html('');
        var datos = new FormData(); 
        datos.append('paciente', paciente);
        datos.append('mensaje', mensaje);
 
        datos.append('mail', mail);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/mailControlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType : 'json',
            beforeSend: function () {
                $("#ErroresRegistro4").html(`<p style="background:orange; color:white; margin-top:10px; padding:10px;">Procesando, espere por favor...</p>`);
            },
            success:  function (response) { 

                if(response.estado == 1){
                Swal.fire(
                response.mensaje,
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro4").html(response.mensaje);
                    $("#ErroresRegistro4").html('');
                $("#envioCorreo").val('');
               // $('#formulario')[0].reset();
               // location.reload();
                //table.ajax.reload();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar menú a paciente, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro4").html(response.mensaje);
                    $("#ErroresRegistro4").html('');
                  $("#envioCorreo").val('');
               // $('#formulario')[0].reset();
                //location.reload();
                }
                
               // $('#miModal').modal('hide')
               // CargaGaleria(orden);

                
            }
        })
    }
})

  </script>