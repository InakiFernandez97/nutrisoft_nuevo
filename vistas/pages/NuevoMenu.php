<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."menuControlador.php");
//nclude (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

//$categorias = categoriasControlador::viewCategorias();
$productos = menuControlador::viewMenu();
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
            <h1 class="m-0"> Maestro <small>Menú</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
        
              <li class="breadcrumb-item active">Menú</li>
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
            <div class="card card-purple card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ingreso de Menú</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre Menú</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
                    <input type="hidden" id="usuario" value="<?php echo $_SESSION['UserID'];?>">
                  </div>
               
                 
              
           

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <div id="ErroresRegistro"></div>
                  <button type="button" class="btn btn-primary" id="subir">Ingresar</button>
                  <a href="AgregoIngredientes"class="btn btn-warning">Agregar Ingredientes +</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
            </div></div>
          <div class="col-lg-7">
          <div class="card card-purple card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Total de Menus</h5>
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
                  
                    <th>*</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($productos as $pro) {?>
                  <tr>
                    <td><?php echo $pro->id; ?></td>
                    <td><?php echo $pro->nombre; ?></td>
                    <td><?php echo $pro->fecha; ?></td>
                    <td><?php echo $pro->usuario; ?></td>
                    <td><?php if($pro->estado == 1){echo 'Activo';}else{echo 'Inactivo';} ?></td>
                   
                    <td>
                    <button type="button" name="editar" id="<?php echo $pro->Id_Producto; ?>" class="btn btn-danger btn-xs borrar" 
                              data-id="<?php echo $pro->id;?>"
                              data-nombre="<?php echo $pro->nombre;?>"
                              data-fecha="<?php echo $pro->fecha;?>"
                              data-usuario="<?php echo $pro->usuario;?>"
                              data-estado="<?php echo $pro->estado;?>"
                             
                             >Activar / Inactivo</button>

   
             
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
    var usuario =    $("#usuario").val();// obtienes el valor del input

    //alert(contrato);
    //alert(orden);



 
    if (nombre == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('nombre', nombre);
        datos.append('usuario', usuario);
      
   
        datos.append('insermenu', 1);
        $.ajax({
            url: "<?= BASE_URI;?>controlador/menuControlador.php",
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
                'Perfecto Menú Ingresado, ya puedes agregar ingredientes al menú',
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
                    text: 'Ocurrio un error al ingresar tu menú, intentalo nuevamente!'
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
  $(document).on('click', '.borrar', function(){
				var id = $(this).data('id');
        var nombre = $(this).data('nombre');
        var updateStock = 1;
        var estado = $(this).data('estado');
        var estadonom= "";
				//var random = $("#random").val();

				
			//	alert(categoria);
				//alert(random);
        if(estado == 1){
          estadonom = 'Activo';
        }else{
          estadonom = 'Inactivo';
        }

                if(confirm("Esta seguro que desea Activar o Desactivar el menú?: " + nombre + " que actualmente se encuentra:" + estadonom))
                {

                   estado = prompt ('Nuevo valor de estado?  [1] = ACTIVO [0] = INACTIVO', 1);
                    $.ajax({
                        url:"<?= BASE_URI;?>controlador/menuControlador.php",
                        method:"POST",
                        data:{id:id, 'activo':1,'estado':estado},
                        dataType : 'json',
                        success:function(response)
                        {
                          if(response.estado == 1){
                            Swal.fire({title: 'Menú modificado de forma exitosa', 
                                      text: 'Puede continuar eliminando o agregando', 
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "NuevoMenu"; ',50);
                                        }
                      ); 

                          }else{
                            Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Ocurrio un error al modificar Menú, intentalo nuevamente!'
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

<script>
  $(document).on('click', '.modificar', function(){
			
        var modificacion = 1;
        var nombre = $(this).data('nombre');
        var producto = $(this).data('producto');
        var stock = $(this).data('valor');
        var gramaje = $(this).data('gramaje');
        var carbohidrato = $(this).data('carbohidrato');
        var calorias = $(this).data('calorias');
        var proteinas = $(this).data('proteinas');
        var activo = $(this).data('activo');
       
				//var random = $("#random").val();

				
			//	alert(categoria);
				//alert(random);

                if(confirm("Esta seguro que desea modificar el Producto?: " + nombre))
                {

                   nombre = prompt ('Nombre Actual: '+nombre , nombre,);
                   stock = prompt ('Stock Actual: '+valor , valor);
                   gramaje = prompt ('Gramaje Actual: '+gramaje , gramaje);
                   carbohidrato = prompt ('Carbo ctual: '+carbohidrato, carbohidrato);
                   calorias = prompt ('Calorias Actual: '+calorias , calorias);
                   proteinas = prompt ('Proteinas Actual: '+proteinas , proteinas);
                   
                   activo = prompt ('Estado Actual: '+activo + '0 = inactivo / 1 = activo', activo);
                    $.ajax({
                        url:"<?= BASE_URI;?>controlador/productosControlador.php",
                        method:"POST",
                        data:{producto:producto, 'nombre':nombre,'gramaje':gramaje,'carbohidrato':carbohidrato,'stock':stock,'activo':activo,'modificacion':modificacion, 'calorias':calorias, 'proteinas':proteinas},
                        dataType : 'json',
                        success:function(response)
                        {
                          if(response.estado == 1){
                            Swal.fire({title: 'Producto modificado de forma exitosa', 
                                      text: 'Puede continuar eliminando o agregando', 
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "Productos"; ',50);
                                        }
                      ); 

                          }else{
                            Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Ocurrio un error al modificar tu producto, intentalo nuevamente!'
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
<!--
Swal.fire({
    html: `<h1>Venta realizada</h1>
    <p>Venta guardada con el id <strong>12321312</strong></p>
    <br>
    <a href="#">Imprimir ticket</a>
    `,
});-->