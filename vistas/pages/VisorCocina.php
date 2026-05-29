<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."pacientesControlador.php");
include (CONTROLADOR_PATH."menuControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$pacientes = pacientesControlador::pacientesTodosDatos();
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
            <h1 class="m-0"> Visor <small>Cocina</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
    
              <li class="breadcrumb-item active">Visor Cocina</li>
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
    
         

          <div class="col-lg-12">
       
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
                    <th>Desayuno</th>
                    <th>Almuerzo</th>
                    <th>Once</th>
                    <th>Gramaje</th>
                    <th>Obs.</th>
                    <th>Empresa</th>
                   
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pacientes as $pro) {
           
                    ?>
                  <tr>
                    <td><?php echo $pro->Id_Paciente; ?></td>
                    <td><?php echo $pro->Rut_Paciente; ?></td>
                    <td><?php echo $pro->Nombre_Paciente; ?></td>
                    <td><?php echo $pro->Apellido_Paciente; ?></td>
                    <td><span style="color:red;"><?php  echo $pro->nombre;?></span>
                    <span style="font-size:9px;">
                    <?php  $men2 = menuControlador::todosMenu2($pro->desayuno); 
                        foreach($men2 as $men) {
                          echo $men->Nombre_Producto.'- Gramaje:' .$men->gramaje.'- Carbo:' .$men->carbohidrato.'- Calorias:' .$men->calorias.'- Prote:' .$men->proteinas.'- Comentario:' .$men->comentario.'<br>';

                        }
                    ?>
                    </span>
                  </td>
                    <td>
                    <span style="color:red;"><?php  echo $pro->nombre;?></span>
                    <span style="font-size:9px;">
                    <?php  $men2 = menuControlador::todosMenu2($pro->almuerzo); 
                        foreach($men2 as $men) {
                          echo $men->Nombre_Producto.'- Gramaje:' .$men->gramaje.'- Carbo:' .$men->carbohidrato.'- Calorias:' .$men->calorias.'- Prote:' .$men->proteinas.'- Comentario:' .$men->comentario.'<br>';

                        }
                    ?>
                    </span>
                  </td>
                    <td>
                    <span style="color:red;"><?php  echo $pro->nombre;?></span>
                    <span style="font-size:9px;">
                    <?php  $men2 = menuControlador::todosMenu2($pro->once); 
                        foreach($men2 as $men) {
                          echo $men->Nombre_Producto.'- Gramaje:' .$men->gramaje.'- Carbo:' .$men->carbohidrato.'- Calorias:' .$men->calorias.'- Prote:' .$men->proteinas.'- Comentario:' .$men->comentario.'<br>';

                        }
                    ?>
                    </span>
                  </td>
                    <td><?php echo $pro->gramaje; ?></td>
                    <td><?php echo $pro->obs; ?></td>
                    <td><?php echo $pro->Nombre_Empresa; ?></td>

                
          
                  
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