<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pacientesControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$pacientes = pacientesControlador::viewPacientes();
$estadisticas = pacientesControlador::estadisticas();
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
            <h1 class="m-0"> Maestro <small>Pacientes</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
              <li class="breadcrumb-item active">Pacientes</li>
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
                <h5 class="card-title m-0">Estadisticas</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
   
              <!-- otros -->
              <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $estadisticas['mujeres']; ?> <sup style="font-size: 20px"></sup></h3>

                <p>Cantidad de Mujeres</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
              <!-- otros-->
                  <!-- otros -->
                  <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $estadisticas['hombres']; ?><sup style="font-size: 20px"></sup></h3>

                <p>Cantidad de Hombres</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
              <!-- otros-->
                  <!-- otros -->
                  <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $estadisticas['empresas']; ?><sup style="font-size: 20px"></sup></h3>

                <p>Empresas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
              <!-- otros-->
           
            </div>
            <!-- /.card -->
              </div>
            </div>
         



          </div>

          <div class="col-lg-9">
       
       <div class="card card-<?php echo  $config['color']; ?> card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Pacientes</h5>
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
      $('#subir').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var nombre =    $("#nombre").val();// obtienes el valor del input
  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);



 
    if (nombre == '' ) {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('nombre', nombre);
        datos.append('insercategoria', 1);
        $.ajax({
            url: "ajax/categoriaAjax.php",
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
                'Perfecto categoría  Ingresada',
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
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
                $('#formulario')[0].reset();
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