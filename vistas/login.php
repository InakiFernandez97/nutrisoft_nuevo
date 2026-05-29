<?php 
// config.php ya fue cargado por index.php
if(!defined('ROOT_PATH')) {
    die('Error: ROOT_PATH no está definida. Verifica que config.php fue cargado correctamente.');
}
//echo BASE_URI;//http://nutricion.test/Nutrisoft/
//echo $_SERVER['DOCUMENT_ROOT'];//C:/laragon/www/nutricion 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?php echo BASE_URI; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NutriSoft | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Nutri</b>Soft</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingreso Sistema</p>

   
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="mail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" id="ingresar">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

        <div id="ErroresRegistro" style="margin-top: 10px;"></div>
   

      
      <!-- /.social-auth-links -->
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
</html>




<script>
      $('#ingresar').click(function(e) {
    $("#ErroresRegistro").html('');
    e.preventDefault(); // Detienes la accion por defecto
    var user =    $("#mail").val();// obtienes el valor del input
    var pass =    $("#password").val();// obtienes el valor del input
    var login = 1;
    var empresa = 1;
   // var imagen = $("#imagen")[0].files[0]; 
    //alert(contrato);
    //alert(orden);



 
    if (user == '' || pass == '' ) {
        $('#ErroresRegistro').html('<p style="background:red; color:white; margin-top:10px; padding:10px;">Todos los campos son requeridos</p>');
      } else {
        $('#ErroresRegistro').html('');
        var datos = new FormData(); 
        datos.append('user', user);
        datos.append('pass', pass);
        datos.append('login', login);
        datos.append('empresa', empresa);
    
        $.ajax({
          url: "controlador/usuariosControlador.php",
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

                  Swal.fire({title: 'Perfecto tu session se esta cargando un momento...' , 
                        text: 'Click para ingresar', 
                        type: "success"}).then(function(){
                          setTimeout(' window.location.href = "Dashboard"; ',50);
                                        }
                      );  

                $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                //$('#formulario')[0].reset();
                }
                
                if(response.estado == 0){


                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrio un error al ingresar usuario o contraseña, intentalo nuevamente'
                    //footer: '<a href="">Why do I have this issue?</a>'
                  })
                  $("#ErroresRegistro").html(response.mensaje);
                $("#ErroresRegistro").html('');
                $("#mail").val('')
                $("#password").val('')
                //$('#formulario')[0].reset();
                }

                if(response.estado == -1){
                  Swal.fire({
                    icon: 'error',
                    title: 'Error de servidor',
                    text: response.mensaje || 'No se pudo conectar a la base de datos'
                  });
                  $("#ErroresRegistro").html('<p style="background:red; color:white; margin-top:10px; padding:10px;">'+ (response.mensaje || 'Error de servidor') +'</p>');
                }
                
                 // $('#miModal').modal('hide')
                 // CargaGaleria(orden);

                
              },
              error: function (xhr, status, error) {
                Swal.fire({
                  icon: 'error',
                  title: 'Error de conexión',
                  text: 'No se pudo procesar el login. Revisa usuario/clave o configuración del servidor.'
                });
                $("#ErroresRegistro").html(
                  '<p style="background:red; color:white; margin-top:10px; padding:10px;">' +
                  'Detalle: ' + (xhr.responseText ? xhr.responseText.substring(0, 300) : error) +
                  '</p>'
                );
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