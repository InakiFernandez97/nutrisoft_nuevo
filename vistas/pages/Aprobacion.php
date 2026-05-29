<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."menuControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$men1 = menuControlador::viewMenuAprobacion();




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
                    <h1 class="m-0">
                        Maestro <small>Aprobaci�n Men�</small>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="Dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Men�</a>
                        </li>
                        <li class="breadcrumb-item active">Men�</li>
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
             

                <div class="col-lg-12">

                    <div class="card card-<?php echo  $config['color']; ?> card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Men�</h5>
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
                                                    <th>fecha</th>
                                                    <th>Usuario</th>
                                                    <th>Estado</th>
                                                    <th>Estado Aprobaci�n</th>

                                                    <th>*</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($men1) || is_object($men1)) {
                                                    foreach($men1 as $pro) {?>
                                                <tr>
                                                    <td>
                                                        <?php echo $pro->id; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $pro->nombre; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $pro->fecha; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $pro->usuario; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($pro->estado == 1){echo 'Activo';}else{echo 'Inactivo';} ?>
                                                    </td>
                                                    <td>
                                                        <?php if($pro->aprobacion == 1){echo 'Aprobado';}else{echo 'Esperando APROBACION';} ?>
                                                    </td>

                                                    <td>
                                                        <button type="button" name="editar" id="<?php echo $pro->Id_Producto; ?>" class="btn btn-danger btn-xs borrar"
                                                            data-id="<?php echo $pro->id;?>"
                                                            data-nombre="<?php echo $pro->nombre;?>"
                                                            data-fecha="<?php echo $pro->fecha;?>"
                                                            data-usuario="<?php echo $pro->usuario;?>"
                                                            data-estado="<?php echo $pro->estado;?>">
                                                            Aprobar
                                                        </button>



                                                    </td>
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
  $(document).on('click', '.borrar', function(){
		var id = $(this).data('id');
      var nombre = $(this).data('nombre');
      var aprobacion = 1;
  
   
		

                if(confirm("Esta seguro que desea Aprobar el men�?: " + nombre + " que actualmente se encuentra: en espera de aprobaci�n"))
                {

                
                    $.ajax({
                        url:"<?= BASE_URI;?>controlador/menuControlador.php",
                        method:"POST",
                        data:{id:id,'aprobacion':aprobacion},
                        dataType : 'json',
                        success:function(response)
                        {
                          if(response.estado == 1){
                            Swal.fire({title: 'Men� Aprobado de forma exitosa',
                                      text: 'Puede continuar aprobando',
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "Aprobacion"; ',50);
                                        }
                      );

                          }else{
                            Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Ocurrio un error al aprobar Men�, intentalo nuevamente!'
                                      //footer: '<a href="">Why do I have this issue?</a>'
                                    })

                          }

							        //$("#calculos").html(response);
                          //location.reload();
                          // table1.ajax.reload();



                        }
                    });
                }
                else
                {
                    return false;
                }
            });
</script>