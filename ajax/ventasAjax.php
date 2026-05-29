<?php
include_once (dirname(__DIR__).'/config.php');
include (CONTROLADOR_PATH."ventasControlador.php");
include (CONTROLADOR_PATH."productosControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class ventasAjax{

    static public function InsertoTemporal($data){

        $temporal = ventasControlador::InsertoTemporal($data);
        return  $temporal; 

    }

    static public function eliminoItemTemporal($random, $id){

        $random = ventasControlador::eliminoItemTemporal($random, $id);
        return  $random; 

    }

    static public function nuevaVenta($data){

      $venta  = ventasControlador::insertarVentas($data);
      return  $venta;

    }



}





if (isset($_POST['temporal'])) {

    $random =      $_POST['random'];
    $id_producto = $_POST['id_producto'];
    $nombre =      $_POST['nombre'];
    $cantidad =    $_POST['cantidad'];
    $valor =       $_POST['valor'];
     if(!isset($_POST['descuento'])){$descuento = 0;};
     if(!isset($_POST['pago'])){$pago = 0;};
    
   
    $resultado = array(
        "random" => $random,
        "id_producto" => $id_producto,
        "nombre" => $nombre,
        "cantidad" => $cantidad,
        "valor" => $valor
      

    );
        $descuento = 0;
        $html = ventasAjax::InsertoTemporal($resultado);
        $total = 0;
      foreach($html as $cal) {  

          $total =   $total + $cal->subtotal;
        
      }

      $iva = $total * 0.19;
      $subtotal = $total - $descuento;
      $totales = ($subtotal +  $iva);



            ?>
                <div id="calculos">
 
            
              <div class="card-body">
              <div class="row">
                <div class="col-12">
                        <div class="bg-dark py-2 px-3 mt-4">
                          <h2 class="mb-12" >
                          <span style="color:#fff;"> <b>TOTAL </b></span>
                          <span style="color:chartreuse;"> <b>$<?php echo $totales; ?></b></span>
                          </h2>
                          <h4 class="mt-0">
                            <small>FECHA: <?php echo date('Y-m-d'); ?> </small>
                        
                          </h4>
                        </div>

              </div>
              </div>


                       <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Valor</th>
                      <th>Subtotal</th>
                      <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php foreach($html as $pro) {?>   
                    <tr>
                      <td><?php echo $pro->id; ?></td>
                      <td><?php echo $pro->nombre; ?></td>
                      <td><?php echo $pro->cantidad; ?></td>
                      <td><?php echo $pro->valor; ?></td>
                      <td>$<?php echo $pro->subtotal; ?></td>
                      <td><button type="button" name="borrar" id="<?php echo $pro->id_producto; ?>" class="btn btn-danger btn-xs rojo borrar">Borrar</button></td>
                    </tr>
                 <?php }?>
                 
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->



              <div class="row">
              <div class="col-4">
              </div>
                <!-- /.col -->
                <div class="col-8">
                

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$<?php echo $subtotal; ?></td>
                      </tr>
                      <tr>
                        <th>IVA (19%)</th>
                        <td>$<?php echo $iva; ?></td>
                      </tr>
                      <tr>
                        <th>Descuento:</th>
                        <td>$<?php echo $descuento; ?></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$<?php echo $totales; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>


        
                  
              </div>
           
            </div> 
            <?php

 
}



if(isset($_POST['borrar'])){

	

        $random = $_POST['random'];
        $id = $_POST['id'];
        $gri = ventasAjax::eliminoItemTemporal($random, $id);

        foreach($gri as $cal) {  

            $total =  $cal->subtotal;
            $iva = $total * 0.19;
            $totales = $total+  $iva;
        }
  
  
  
              ?>
                  <div id="calculos">
           
              
                <div class="card-body">
                <div class="row">
                  <div class="col-12">
                          <div class="bg-dark py-2 px-3 mt-4">
                            <h2 class="mb-12" >
                            <span style="color:#fff;"> <b>TOTAL </b></span>
                            <span style="color:chartreuse;"> <b>$<?php echo $totales; ?></b></span>
                            </h2>
                            <h4 class="mt-0">
                              <small>FECHA: <?php echo date('Y-m-d'); ?> </small>
                            </h4>
                          </div>
  
                </div>
                </div>
  
  
                         <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Valor</th>
                        <th>Subtotal</th>
                        <th>*</th>
                      </tr>
                      </thead>
                      <tbody>
              <?php foreach($gri as $pro) {?>   
                      <tr>
                        <td><?php echo $pro->id; ?></td>
                        <td><?php echo $pro->nombre; ?></td>
                        <td><?php echo $pro->cantidad; ?></td>
                        <td><?php echo $pro->valor; ?></td>
                        <td>$<?php echo $pro->subtotal; ?></td>
                        <td><button type="button" name="borrar" id="<?php echo $pro->id_producto; ?>" class="btn btn-danger btn-xs rojo borrar">Borrar</button></td>
                      </tr>
                   <?php }?>
                   
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
  
  
  
                <div class="row">
                <div class="col-4">
                </div>
                  <!-- /.col -->
                  <div class="col-8">
                   
                    <p class="lead">Medio de  Pago</p>
  
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Subtotal:</th>
                          <td>$<?php echo $total; ?></td>
                        </tr>
                        <tr>
                          <th>IVA (19%)</th>
                          <td>$<?php echo $iva; ?></td>
                        </tr>
                        <tr>
                          <th>Descuento:</th>
                          <td>$0</td>
                        </tr>
                        <tr>
                          <th>Total:</th>
                          <td>$<?php echo $totales; ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
  
  
         
                    
                </div>
          
              </div> 
              <?php


    }


    if (isset($_POST['generarVenta'])) {
  
 
      $random     = $_POST['random'];
      $pago       = $_POST['pago'];
      $usuario    = $_POST['usuario'] = 1;
      $cliente    = $_POST['cliente'] = 1;
      $comentario = $_POST['comentario'];
      $descuento  = 0;
       
      
     
      $resultado = array(
          "random" => $random,
          "pago" => $pago,
          "comentario" => $comentario,
          "usuario" => $usuario,
          "descuento" => $descuento,
          "cliente" => $cliente
        
  
      );
         
          $venta = ventasAjax::nuevaVenta($resultado);


       
        if($insert == 1){
            $mensaje = 'Producto Generada de forma exitosa';
            $estado = 1;
        }else{
            $mensaje = 'Problemas generando la venta';
            $estado = 0;
        
        }
        
        
        $resultado = array(
            "estado" => $estado,
            "mensaje" => $mensaje
        
        );
        echo json_encode($resultado); 

      }





?>