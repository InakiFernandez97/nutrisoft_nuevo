<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."empresasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$empresas = empresasControlador::viewEmpresas();
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
              <li class="breadcrumb-item"><a href="#">Nueva Empresa</a></li>
              <li class="breadcrumb-item active">Empresas</li>
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
                <h5 class="card-title m-0">Ingreso Nueva Empresa</h5>
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
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="76545545-1" required >
                  </div>

               
                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="sociedad comercial" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Fecha Ingreso</label>
                          <input type="date" class="form-control" id="fecha" name="fecha" placeholder="2023-05-01" required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Cantidad de Trabajadores</label>
                            <input type="numbre" class="form-control" id="trabajadores" name="trabajadores" placeholder="24" required>
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">Persona Encargada</label>
                          <input type="text" class="form-control" id="encargado" name="encargado" placeholder="rocio vera" required>
                        </div>
                  </div>

                  
                  </div> 

                  <div class="row">
                      <div class="col-lg-6">   
                            <div class="form-group">
                            <label for="exampleInputEmail1">Fono</label>
                            <input type="number" class="form-control" id="fono" name="fono" placeholder="5699999999" required >
                          </div>
                    </div>
                    <div class="col-lg-6">  
                          <div class="form-group">
                          <label for="exampleInputEmail1">N° Contrato.</label>
                          <input type="number" class="form-control" id="contrato" name="contrato" placeholder="1365" required>
                        </div>
                  </div>

                

                  
                  </div> 

              


                  <div class="row">
                  <div class="col-lg-6"></div>
                  <div class="col-lg-6"></div>

                  
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
           <h5 class="card-title m-0">Lista de Empresas</h5>
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
                    <th>F.Ingreso</th>
                    <th>Cant. Trabaja</th>
                    <th>Encargado(a)</th>
                    <th>N° Contrato</th>
                    <th>Obs.</th>
                    <th>*</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($empresas as $pro) {?>
                  <tr>
                    <td><?php echo $pro->Id_Empresa; ?></td>
                    <td><?php echo $pro->Rut_Empresa; ?></td>
                    <td><?php echo $pro->Nombre_Empresa; ?></td>
                    <td><?php echo $pro->Fecha_Empresa; ?></td>
                    <td><?php echo $pro->Cantidad_Trabajadores; ?></td>
                    <td><?php echo $pro->Encargado_Empresa; ?></td>
                    <td><?php echo $pro->Fono_Empresa; ?></td>
                    <td><?php echo $pro->Contrato_Empresa; ?></td>
                    <td>.</td>
                  
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
    var rut =    $("#rut").val();
    var nombre =    $("#nombre").val();
    var fecha =    $("#fecha").val();
    var trabajadores =    $("#trabajadores").val();
    var encargado =    $("#encargado").val();
    var fono =    $("#fono").val();
    var contrato =    $("#contrato").val();
  
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);
 


 
    if (rut == '' || nombre == '' || fecha == ''|| trabajadores == ''|| encargado == ''|| encargado == '' || fono == '' || contrato == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('rut', rut);
        datos.append('nombre', nombre);
        datos.append('fecha', fecha);
        datos.append('trabajadores', trabajadores);
        datos.append('encargado', encargado);
        datos.append('fono', fono);
        datos.append('contrato', contrato);
        datos.append('inserempresa', 1);
        $.ajax({
            url: "ajax/empresaAjax.php",
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
                'Perfecto Empresa  Ingresada',
                'Click para cerrar',
                'success'
              );
                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $('#formulario')[0].reset();
                
    location.reload();

                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar Empresa, intentalo nuevamente!'
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
<!--
Swal.fire({
    html: `<h1>Venta realizada</h1>
    <p>Venta guardada con el id <strong>12321312</strong></p>
    <br>
    <a href="#">Imprimir ticket</a>
    `,
});-->