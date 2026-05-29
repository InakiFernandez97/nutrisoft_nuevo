<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."categoriasControlador.php");
//include (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

$categorias = categoriasControlador::viewCategorias();
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
            <h1 class="m-0"> Maestro <small>Categoría</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Categoría</a></li>
              <li class="breadcrumb-item active">Categoría</li>
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
       
            <div class="card card-orange card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ingreso de Categoría</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre Categoría</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
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
       
       <div class="card card-orange card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Ingreso de Categoría</h5>
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
                    <th>*</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($categorias as $pro) {?>
                  <tr>
                    <td><?php echo $pro->Id_Categoria; ?></td>
                    <td><?php echo $pro->Nombre_Categoria; ?></td>
                    <td>	<button type="button" name="borrar" id="<?php echo $pro->Id_Categoria; ?>" class="btn btn-danger btn-xs rojo borrar">Borrar</button></td>
                  
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

                  Swal.fire({title: 'Perfecto categoría  Ingresada' , 
                        text: 'Click para cerrar', 
                        type: "success"}).then(function(){
                          setTimeout(' window.location.href = "Categorias"; ',50);
                                        }
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





$(document).on('click', '.borrar', function(){
				var categoria = $(this).attr("id");
        var deleteCategoria = 1;
				//var random = $("#random").val();

				
			//	alert(categoria);
				//alert(random);

                if(confirm("Esta seguro de borrar la categoría?: " + categoria))
                {
                    $.ajax({
                        url:"ajax/categoriaAjax.php",
                        method:"POST",
                        data:{id:categoria, 'deleteCategoria':deleteCategoria},
                        dataType : 'json',
                        success:function(response)
                        {
                          if(response.estado == 1){
                            Swal.fire({title: 'Categoría eliminada de forma exitosa', 
                                      text: 'Puede continuar eliminando o agregando', 
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "Categorias"; ',50);
                                        }
                      ); 

                          }else{
                            Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Ocurrio un error al borrar tu categoría, intentalo nuevamente!'
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


	//fin de leiminar registro
  </script>
