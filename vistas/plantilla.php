<?php
  // config.php ya fue cargado por index.php
  // No necesitamos cargarlo de nuevo
  
  // Usar la constante CONTROLADOR_PATH ya definida
  if(!defined('CONTROLADOR_PATH')) {
    die('Error: CONTROLADOR_PATH no está definida. Verifica que config.php fue cargado correctamente.');
  }
  
  include (CONTROLADOR_PATH."configControlador.php");
  $config = configControlador::config();

?>
<!DOCTYPE html>

<html lang="es">
<head>
  <base href="<?php echo BASE_URI; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $config['title']?></title>

  <!-- Google Font: Source Sans Pro -->
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">

  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">

    
  <script type="text/javascript">var plugin_path = 'vistas/plugins/';</script>
<!-- REQUIRED SCRIPTS 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>-->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="vistas/plugins/chart.js/Chart.min.js"></script>
<script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>


<!-- jQuery Knob Chart -->
<script src="vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="vistas/plugins/moment/moment.min.js"></script>
<script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->



<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- date-range-picker -->
<script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php include ROOT_PATH . "vistas/modulos/header.php"; ?>
  
  <!-- /.navbar -->


    <?php

    if(isset($_GET['ruta'])){

      if(isset($_SESSION['login']) && $_SESSION['login'] == 1){

      }else{
        include ROOT_PATH . "vistas/login.php";
        exit(); // Detener ejecución si no está logueado
      }
        if($_GET['ruta'] == "NuevaEmpresa"   ||
            $_GET['ruta'] == "Dashboard"  ||
            $_GET['ruta'] == "VerUsuarios" ||
            $_GET['ruta'] == "VerPacientes" ||
            $_GET['ruta'] == "VerMenu"  ||
            $_GET['ruta'] == "Productos"  ||
            $_GET['ruta'] == "Profile"  ||
            $_GET['ruta'] == "Categorias"  ||
            $_GET['ruta'] == "PizarraDYO"  ||
            $_GET['ruta'] == "PizarraAYC"  ||
            $_GET['ruta'] == "Cerrar"  ||
            $_GET['ruta'] == "MinutaGrande"  ||
            $_GET['ruta'] == "MinutaDYO"  ||
            $_GET['ruta'] == "NuevoUsuario"  ||
            $_GET['ruta'] == "VisorCocina"  ||
            $_GET[ 'ruta' ] == "Aprobacion" ||
            $_GET['ruta'] == "FichaMenu"  ||

            $_GET['ruta'] == "AgregoIngredientes"  ||

            $_GET['ruta'] == "NuevoMenu"  ||
            $_GET['ruta'] == "NuevoPaciente" ){
            include ROOT_PATH . "vistas/pages/".$_GET['ruta'].".php";
        }else{


        }

    }else{

        include ROOT_PATH . "vistas/pages/Dashboard.php";
    }




    ?>


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include ROOT_PATH . "vistas/modulos/footer.php"; ?>

</div>
<!-- ./wrapper -->


</body>
</html>