<?php
if(!defined('CONTROLADOR_PATH')) die('Error: Constants not defined. Config not loaded.');
//include (CONTROLLER_PATH."flotasController.php");
include(MODELO_PATH . "pacienteModelo.php");
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

class mailControlador
{

    static public function envioMail($data)
    {



            $paciente = $data[ 'paciente' ];
            $mensaje = $data[ 'mensaje' ];
            $dpaciente = pacienteModelo::viewPacienteID($paciente);


		//servidor local
		require CONTROLADOR_PATH . 'PHPMailer/src/PHPMailer.php';
		require CONTROLADOR_PATH . 'PHPMailer/src/SMTP.php';
		require CONTROLADOR_PATH . 'PHPMailer/src/Exception.php';
		//$emails = array("$mailED");
		//mailED corresponde activar
		//$arraymail = explode(";", $mailED);


		$mail = new PHPMailer;
		//$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = defined('SMTP_HOST') ? SMTP_HOST : 'localhost';
		$mail->Port = defined('SMTP_PORT') ? SMTP_PORT : 25;
		$mail->IsHTML(true);
		$mail->Username = defined('SMTP_USER') ? SMTP_USER : '';
		$mail->Password = defined('SMTP_PASS') ? SMTP_PASS : '';
		$mail->SetFrom(defined('SMTP_FROM') ? SMTP_FROM : 'no-reply@example.com', defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'NutriSoft');
		$mail->isHTML(true);
		$mail->Timeout = 30;

//quitar comentarios en produccion
		//for ($i = 0; $i < count($arraymail); $i++) {

			//$mail->AddAddress($arraymail[$i]);

		//}

		$mail->AddAddress($dpaciente->Email_Paciente);

		//$mail->AddAddress("jsandoval@trekrental.cl");

		$mail->Subject = "Nutrisoft Nplanet.cl: ";
		$message = '<html lang="es">';
		$message .= '<head>';
		$message .= '<meta charset="UTF-8">';
		$message .= '<title>TrekRental</title>';
		$message .= '<style>';
		$message .= 'html {';
		$message .= 'margin: 0;';
		$message .= '}';
		$message .= 'body {';
		$message .= 'font-family: "Times New Roman", serif; font-size:21px;}';
		$message .= 'hr {';
		$message .= 'page-break-after: always;';
		$message .= 'border: 0;';
		$message .= 'margin: 0;';
		$message .= 'padding: 0;';
		$message .= '}';
		$message .= '.Texto{ font-size:14px;}';
		$message .= '.table { } ';
		$message .= '.punteado{border-bottom:dotted; border-width: 1px; border-color: 000000;}';
		$message .= '</style>';
		$message .= '</head>';
		$message .= '<body>';
		$message .= '<p>Estimado(a)' .$dpaciente->Nombre_Paciente.'un nuevo comentario fue enviado del sistema de nutricion Nutrisoft:</p>';
		//$message.='<table style="height: 164px; width: 906px;" class="table" border=1>';
		$message .= '<tbody>';

		$message .= '<div align="left">Nombre         : ' . $dpaciente->Nombre_Paciente . '</div>';
        $message .= '<div align="left">Rut         : ' . $dpaciente->Rut_Paciente . '</div>';
        $message .= '<div align="left">Edad         : ' . $dpaciente->Edad_Paciente . '</div>';
		 $message .= '<div align="left">Empresa         : ' . $dpaciente->Nombre_Empresa . '</div>';
		  $message .= '<div align="left">Fecha Nacimiento         : ' . $dpaciente->Nacimiento_Paciente . '</div>';
		   $message .= '<div align="left">Email         : ' . $dpaciente->Email_Paciente . '</div>';

		$message .= '<div align="left">Mensaje de Nutricionista</div>';
		$message .= '<div align="left"> ' . $mensaje . '</div>';


		$message .= '</tbody>';
		$message .= '</tbody>';
		//$message.='</table>';
		$message .= '</html>';
		$mail->Body = utf8_decode($message);
		//Definimos AltBody por si el destinatario del correo no admite email con formato html

		$mail->AltBody = "Sistema Nutrisoft";
		//se envia el mensaje, si no ha habido problemas
		//la variable $exito tendra el valor true
		$exito = $mail->Send();
		//echo "exito: ".$exito; die();
		//Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho
		//para intentar enviar el mensaje, cada intento se hara 5 segundos despues
		//del anterior, para ello se usa la funcion sleep
		$intentos = 1;

		while ((!$exito) && ($intentos < 5)) {

			sleep(4);
			//echo $mail->ErrorInfo;
			$exito = $mail->Send();
			$intentos = $intentos + 1;



		}

		//die();



		if (!$exito) {
			//echo "Problemas enviando correo ";
		//	echo "<br/>" . $mail->ErrorInfo;
				return 0;
		} else {
				return 1;

		}

		//sqlsrv_free_stmt( $msresults );
		//Conexion::Desconectar();
		//echo 'mensaje final';
		//var_dump($exito);



    }



}

if (isset($_POST[ 'mail' ]))
{


    //var_dump($_POST);

    $data = array(


        "paciente" => $_POST[ 'paciente' ],

        "mensaje" => $_POST[ 'mensaje' ]

    );
    $insert = mailControlador::envioMail($data);

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