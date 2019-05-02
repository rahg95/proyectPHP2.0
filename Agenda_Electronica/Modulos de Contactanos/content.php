<?php
	$mostrarCuenta = 'mostrar';
	$mostrarCuenta();

	function mostrar(){
		$html  = "<div id='content'>\n";
		$html  .="<article class='post clearfix articulos' id='articuloContactanos'>\n";
		$html  .="<div class='divForm'>\n";
		$html  .="<form id='form1' name='form' action='Modulos de Contactanos/Contactanos.php' method='POST'>\n";
		$html  .="<input type='text' name='nombre' id='nombre' placeholder='Nombre' class='nac form-control'>\n";
		$html  .="<input type='text' name='apellido' id='apellido' placeholder='Apellido' class='nac form-control'>\n";
						
		$html  .="<input type='text' name='correo' id='correo' placeholder='correo' class='nac form-control'>\n";
		$html  .="<label>Asunto*: </label>\n";
		$html  .="<select class='form-control nacselect' name='asunto' id='asunto'>\n";
		$html  .="<option value='---'>---</option>\n";
		$html  .="<option value='Servicio al Cliente'>Servicio al Cliente</option>\n";
		$html  .="<option value='Sugerencia'>Sugerencia</option>\n";
		$html  .="<option value='Compra'>Compra</option>\n";
		$html  .="</select>\n";

		$html  .="<label>Escriba su mensaje*:</label><br>\n";
		$html  .="<textarea name='comentarios' rows='8' placeholder='Escribe aquí tus comentarios' class='mensajeText' id='comentarios'></textarea>\n";
		$html .= "<div id='boton'>";
		$html  .="<input type='button' name='enviar' id='enviar' value='Enviar'>\n";
		$html .= "</div>";
		$html  .="<br>\n";
		$html  .="</form>\n";
		$html  .="</div>\n";

		$html  .="<br>\n";
		$html  .="</article>\n";
		$html  .="</div>\n";
		echo $html;
	}
?>