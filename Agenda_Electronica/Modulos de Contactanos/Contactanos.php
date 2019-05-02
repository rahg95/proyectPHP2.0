<?php 
require('../class/clase.php')
?>

<?php
	if (isset($_POST['enviar'])) {
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
		$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
		$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
		$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : "";
		$comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : "";

		$html = "";
		$html .= "<!DOCTYPE html>";
		$html .= "<html lang='es'>";
		$html .= "<head>";
		$html .= "<title>Evento Agregado</title>";
		$html .= "<meta charset='utf-8'>";
		$html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
		$html .= "<link rel='stylesheet' type='text/css' href='../css/style.css'/>
		";
		$html .= "</head>";
		$html .= "<body>";
		$html .= "<br>";
		$html .= "<br>";
		$html .= " <a href='../Agregar Evento.php' class='botona'>\n";
		$html .= "Regresar</a>\n";
		echo $html;

		Contactanos::mostrarDatos($nombre,$apellido,$correo,$asunto,$comentarios);
	}

    

	$html = "";
	$html .= "</body>";
	$html .= "<html>";
	echo $html;
?>
