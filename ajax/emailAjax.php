<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
//include (CONTROLADOR_PATH."ventasControlador.php");
include(CONTROLADOR_PATH . "categoriasControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class emailAjax
{

    static public function envioMail($data)
    {

        $mail = mailControlador::envioMail($data);

    }

}



if (isset($_POST[ 'insercategoria' ]))
{


    //var_dump($_POST);

    $data = array(
  

        "paciente" => $_POST[ 'paciente' ],

        "mensaje" => $_POST[ 'mensaje' ]

    );
    $insert = emailAjax::envioMail($data);

    if ($insert == 1)
    {
        $mensaje = 'Email enviado correctamente';
        $estado = 1;
    } else
    {
        $mensaje = 'Problemas enviando email, intentelo nuevamente';
        $estado = 0;

    }


    $resultado = array(
        "estado" => $estado,
        "mensaje" => $mensaje

    );
    echo json_encode($resultado);




}