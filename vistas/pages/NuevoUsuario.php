<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."usuariosControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$usuarios = usuariosControlador::viewUsuarios();
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
            <h1 class="m-0"> Maestro <small>Usuarios</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
          <div class="col-lg-5">
       
            <div class="card card-<?php echo  $config['color']; ?> card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ingreso Nuevo Usuario</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rut</label>
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="12123123-1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese apellido">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese correo">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Fono</label>
                    <input type="number" class="form-control" id="fono" name="fono" placeholder="12345678">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="number" class="form-control" id="password" name="password" placeholder="12345678">
                  </div>

                  <div class="form-group">
                                  <label for="exampleSelectRounded0">Privilegio</label>
                                        <select class="custom-select rounded-0" id="privilegio">
                                      
                                        <option value="1"> ADMINISTRADOR</option>
                                        <option value="2"> NUTRICIONISTA</option>
                                        <option value="3"> CHEF</option>

                                    
                                        </select>
                                        </div> 


                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-primary" id="subir">Ingresar</button>
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
           <h5 class="card-title m-0">Lista de Usuarios</h5>
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
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Fono</th>
                    <th>Privilegio</th>
                    <th>*</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($usuarios as $pro) {?>
                  <tr>
                    <td><?php echo $pro->Id_Usuario; ?></td>
                    <td><?php echo $pro->Nombre_Usuario; ?></td>
                    <td><?php echo $pro->Apellido_Usuario; ?></td>
                    <td><?php echo $pro->Correo_Usuario; ?></td>
                    <td><?php echo $pro->Fono_Usuario; ?></td>
                    <td><?php echo $pro->Privilegio_Usuario; ?></td>
                    <td>eliminar</td>
                  
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
      $('#subir').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var rut =    $("#rut").val();// obtienes el valor del input
    var nombre =    $("#nombre").val();
    var apellido =    $("#apellido").val();
    var correo =    $("#correo").val();
    var fono =    $("#fono").val();
    var password =    $("#password").val();
    var privilegio =    $("#privilegio").val();
    var inserta = 1;
  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);



 
    if (nombre == '' ) {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('rut', rut);
        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('correo', correo);
        datos.append('fono', fono);
        datos.append('password', password);
        datos.append('privilegio', privilegio);
        datos.append('inserta', inserta);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/usuariosControlador.php",
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
                'Perfecto Usuario  Ingresado',
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                location.reload();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar tu categoría, intentalo nuevamente!'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                location.reload();
                }
                
               // $('#miModal').modal('hide')
               // CargaGaleria(orden);

                
            }
        })
    }
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