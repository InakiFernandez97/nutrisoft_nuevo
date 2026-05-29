<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."cierreModelo.php");

class cierresControlador
{

    static public function viewCierre(){


        $productos = cierreModelo::viewCierre();
         return $productos;

    }

    static public function totalVentas($fecha){


        $productos = cierreModelo::totalVentas($fecha);
         return $productos;

    }

    static public function insertarCierre($data){

        $fecha = $data['fecha'];
        $descripcion = $data['Descripcion'];

        $total = cierreModelo::totalVentas($fecha);
        $efectivo = cierreModelo::efectivo($fecha);
        $transbank = cierreModelo::transbank($fecha);
        $junaeb = cierreModelo::junaeb($fecha);
        $transferencia = cierreModelo::transferencia($fecha);


        $data = array(
            "Fecha_Cierre" => $fecha,
            "Usuario_Cierre" => 1,
            "Total_Cierre" => $total->Total,
            "Total_Neto" => $total->TotalNeto,
            "Total_Iva" => $total->TotalIva,
            "InicioCaja_Cierre" => 0,
            "FinCaja_Cierre" => $total->Total,
            "TotalVentas_Cierre" => $total->Cantidad,
            "Comentarios_Cierre" => $descripcion,

            "Pago_Transferencia" => $transferencia->Transferencia,
            "Pago_Efectivo" => $efectivo->Efectivo,
            "Pago_Transbank" => $transbank->transbank,
            "Pago_Junaeb" => $junaeb->Junaeb



        );

     
        $insert = cierreModelo::insertarCierre($data);
         return $insert;

    }

}