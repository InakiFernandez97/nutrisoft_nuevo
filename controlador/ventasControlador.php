<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."ventasModelo.php");

class ventasControlador
{
    static public function nuevaVenta($data){
        
        $ventas = ventasModelo::nuevaVenta($data);
        return $ventas;


    }
    static public function viewVentas(){


        $ventas = ventasModelo::viewVentas();
         return $ventas;

    }
    static public function viewVentasID($data){


        $productos = ventasModelo::viewVentasID($data);
         //return $productos;

    }

    static public function insertarVentas($datos){
      
        $random  = $datos['random'];
        $pago  = $datos['pago'];
        $comentario  = $datos['comentario'];
        $usuario  = $datos['usuario'];
        $cliente  = $datos['cliente'];
        $descuento  = $datos['descuento'];

        $valores = ventasModelo::cargoGrilla($random);

        $total = 0;
        foreach($valores as $pro) {

           $total =$total + $pro->subtotal;  

        }
        $neto = $total;
        $iva = $total * 0.19;
        $grantotal =$total - $descuento;
        $fechaHoy = date('Y-m-d');


        $data = array(
            "Id_Usuario" => $usuario,
            "Id_Cliente" => $cliente,
            "Fecha_Venta" => $fechaHoy,
            "Neto_Venta" => $neto,
            "Iva_Venta" => $iva,
            "Total_Venta" => $grantotal,
            "Descuento_Venta" => 0,
            "Comentario_Venta" => $comentario,
            "Medio_Pago" => $pago,
            "Estado_Venta" => 1,
            "random"=>$datos['random']

        );
       

        $insert = ventasModelo::insertarVentas($data);
         return $insert;

    }

    static public function InsertoTemporal($data){

        $insert = ventasModelo::InsertoTemporal($data);
        return $insert;

    }

    static public function eliminoItemTemporal($random, $id){

        $insert = ventasModelo::eliminoItemTemporal($random, $id);
        return $insert;

    }


}
