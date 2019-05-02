<?php

class Contactanos {
 
	public static function mostrarDatos($nombre,$apellido,$correo,$asunto,$comentarios){

			echo "<div class='content'>\n<h2 style='color: white;'>Datos de Contactanos</h2>\n";
			echo "<table id='tabla1'>\n";
			echo "\t<tr>\n\t\t<th  colspan=\"2\">\n\t\t\tDetalles\n\t\t</th>\n\t</tr>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tEl nombre es: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $nombre, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tEl apellido es: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $apellido, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tLas asunto es: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $asunto, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tEl correo es: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t ", $correo, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tEl comentarios es: \n\t\t</td>\n\t\t<td class=\number\">\n\t\t\t ", $comentarios, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "</table>\n</div>\n";
	}

}

?>