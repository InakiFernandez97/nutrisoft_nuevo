<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
include (CONTROLADOR_PATH."menuControlador.php");
//nclude (CONTROLADOR_PATH."productosControlador.php");
//include (CONTROLADOR_PATH." productosControlador.php");

//$categorias = categoriasControlador::viewCategorias();
$productos = menuControlador::viewMenuActivos();
$prod = menuControlador::cargoProductos();
$men1 = menuControlador::todosMenu();

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
            <div class="card card-orange card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Ingreso de Producto</h5>
              </div>
              <div class="card-body">
                 <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formulario">
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleSelectRounded0">Selecciona un <b>Menú</b></label>
                                        <select class="custom-select rounded-0" id="menu"  name="menu">
                                        <option value="0"> Seleccione</option>
                                          <?php foreach($productos as $result) {?>
                                        <option value="<?php echo  $result->id; ?>"> <?php  echo $result->nombre; ?> </option>

                                        <?php } ?>
                                    
                                        </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectRounded0">Selecciona un <b>Producto</b></label>
                                        <select class="custom-select rounded-0" id="producto"  name="producto">
                                        <option value="0"> Seleccione</option>
                                          <?php foreach($prod as $res) {?>
                                        <option value="<?php echo  $res->Id_Producto; ?>"> <?php  echo $res->Nombre_Producto; ?> </option>

                                        <?php } ?>
                                    
                                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Comentario </label>
                    <input type="numero" class="form-control" id="comentario" name="comentario" placeholder="muy pequeño comentario del ingrediente">
                  </div>

          
               
                  
                  <div class="col-md-12"> 
                  <div class="row"> 
                    <div class="col-md-3">  
                      
                      <label for="exampleInputPassword1">Gramaje</label>
                      <input type="numero" class="form-control" id="gramaje"  name="gramaje" placeholder="10" value="100">
                      
                  </div> 

                    <div class="col-md-3"> 
                      <label for="exampleInputPassword1">Carbohidrato</label>
                      <input type="numero" class="form-control" id="carbohidrato"  name="carbohidrato" placeholder="10" value="100">
                      </div> 

                    <div class="col-md-3">  
                      <label for="exampleInputPassword1">Calorias</label>
                      <input type="numero" class="form-control" id="calorias"  name="calorias" placeholder="10" value="100">
                      </div> 

                    <div class="col-md-3"> 
                      <label for="exampleInputPassword1">Proteinas</label>
                      <input type="numero" class="form-control" id="proteinas"  name="proteinas" placeholder="10" value="100">
                     
                    </div>  

                  </div>
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
            </div></div>
          <div class="col-lg-7">
          <div class="card card-orange card-outline">
         <div class="card-header">
           <h5 class="card-title m-0">Productos Item</h5>
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
                    <th>ID Menú</th>
                    <th>Nombre</th>
                
                    <th>Ingredientes</th>
                   
                    <th>*</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($men1 as $pro) {?>
                  <tr>
                    <td><?php echo $pro->id; ?></td>
                    <td><?php echo $pro->nombre; ?></td>
                    <td>
                      <?php  $men2 = menuControlador::todosMenu2($pro->id); 
                        foreach($men2 as $men) {
                          echo $men->Nombre_Producto.'- Gramaje:' .$men->gramaje.'- Carbo:' .$men->carbohidrato.'- Calorias:' .$men->calorias.'- Prote:' .$men->proteinas.'- Comentario:' .$men->comentario.'<br>';

                        }
                    ?>
                  
                  </td>
        
                    <td>
                   <a href="FichaMenu?id=<?= $pro->id ?>" class="btn btn-danger btn-xs rojo ">Modificar</a>
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
      $('#producto000').change(function(e) {

        alert('si cambia producto');
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var nombre =  $("#nombre").val();// obtienes el valor del input
    var valor  = $("#valor").val();
    var gramaje  = $("#gramaje").val();
    var categoria = $("#categoria").val();
    var carbohidrato  = $("#carbohidrato").val();  
    var calorias = $("#calorias").val(); 
    var proteinas = $("#proteinas").val(); 
    //var imagen = $("#imagen")[0].files[0]; 
    var imagen = 'SIN IMAGEN'; 
    //alert(contrato);
    //alert(orden);



 
    if (nombre == '' ||  gramaje == '' ||  carbohidrato == '' ||  categoria == '' ||  calorias == '' ||  proteinas == '') {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('nombre', nombre);
        datos.append('valor', valor);
        datos.append('gramaje', gramaje);
        datos.append('categoria', categoria);
        datos.append('carbohidrato', carbohidrato);
        datos.append('calorias', calorias);
        datos.append('proteinas', proteinas);
   
        datos.append('inserproducto', 1);
        $.ajax({
            url: "ajax/productosAjax.php",
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
                'Perfecto Producto Ingresado',
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
                    text: 'Ocurrio un error al ingresar tu producto, intentalo nuevamente!'
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
      $('#subir').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var menu =    $("#menu").val();// obtienes el valor del input
    var producto  = $("#producto").val();
    var comentario  = $("#comentario").val();

    var gramaje  = $("#gramaje").val();
    var carbohidrato  = $("#carbohidrato").val();  
    var calorias = $("#calorias").val(); 
    var proteinas = $("#proteinas").val(); 




 
    if (menu == 0 ||  gramaje == '' ||  carbohidrato == '' ||    calorias == '' ||  proteinas == '' || producto == 0) {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('menu', menu);
        datos.append('producto', producto);
        datos.append('comentario', comentario);
        datos.append('gramaje', gramaje);
        datos.append('carbohidrato', carbohidrato);
        datos.append('calorias', calorias);
        datos.append('proteinas', proteinas);
   
        datos.append('insertoIngrediente', 1);
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
                            Swal.fire({title: 'Ingrediente agregado al menu', 
                                      text: 'Puede continuar agregando ingredientes', 
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "AgregoIngredientes"; ',50);
                                        }
                      ); 
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar tu producto, intentalo nuevamente!'
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
				var categoria = $(this).attr("id");
        var deleteProducto = 1;
				//var random = $("#random").val();

				
			//	alert(categoria);
				//alert(random);

                if(confirm("Esta seguro de borrar el producto?: " + categoria))
                {
                    $.ajax({
                        url:"ajax/productosAjax.php",
                        method:"POST",
                        data:{id:categoria, 'deleteProducto':deleteProducto},
                        dataType : 'json',
                        success:function(response)
                        {
                          if(response.estado == 1){
                            Swal.fire({title: 'Producto eliminado de forma exitosa', 
                                      text: 'Puede continuar eliminando o agregando', 
                                      type: "success"}).then(function(){
                                        setTimeout(' window.location.href = "Productos"; ',50);
                                        }
                      ); 

                          }else{
                            Swal.fire({
                                      icon: 'error',
                                      title: 'Oops...',
                                      text: 'Ocurrio un error al borrar tu producto, intentalo nuevamente!'
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
  $(document).on('click', '.stock', function(){
				var categoria = $(this).attr("id");
        var updateStock = 1;
        var stock = 0;
				//var random = $("#random").val();

				
			//	alert(categoria);
				//alert(random);

                if(confirm("Esta seguro que desea modificar el stock del producto?: " + categoria))
                {

                   stock = prompt ('Nuevo valor de stock?', 20);
                    $.ajax({
                        url:"ajax/productosAjax.php",
                        method:"POST",
                        data:{id:categoria, 'updateStock':updateStock,'stock':stock},
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
                                      text: 'Ocurrio un error al borrar tu producto, intentalo nuevamente!'
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