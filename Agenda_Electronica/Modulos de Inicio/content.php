<?php
	$mostrarCuenta = 'cuenta';
	$mostrarCuenta();

	function cuenta(){
		$html  = "<div id='content'>\n";
		$html .= "<article class='post clearfix'\n>";
		$html .= "<h2 class='post-title'><a href='#'>Disfruta tus vacaciones</a></h2>\n";
		$html .= "<figure class='post-imagen'>\n";
		$html .= "\t<img src='img/images.jpg' class='imgindex1'>\n";
		$html .= "\t</figure>\n";
		$html .= "\t<h3>Cuenta con nosotros</h3>\n";
		$html .= "<section>\n";
		$html .= "<article>\n";
		$html .= "\t<p>Quieres disfrutar tus vacaciones en grande con tus amigos y conocer mas personas?. Entonces agrega un nuevo evento a nuestra agenda y comparte la informacion con nuestro publico para poder disfrutar al maximo de tus planes durante tu vacaciones!&nbsp;&nbsp. Ofrecemos la mayor logistica y seguridad como ningun otro anfitrion que aseguran nuestro excelente servicio.&nbsp;&nbsp; Aprovecha y expande tu vida social con nosotros.</p>\n";
		$html .= "</article>\n";
		$html .= "</section>\n";
		$html .= "</article>\n";
		echo $html;
	}

?>

<?php
	$mostrarCuenta2 = 'cuenta2';
	$mostrarCuenta2();

	function cuenta2(){
		$html = "";
		$html .= "<article class='post clearfix'>";
		$html .= "<h2 class='post-title'><a href='#'>Organizamos los mejores eventos</a></h2>";
		$html .= "<figure class='post-imagen'>";
		$html .= "<img src='img/navidad.jpg' class='imgindex2'>";
		$html .= "</figure>";
		$html .= "\t<h3>Los mejores recursos especialmente para ti</h3>\n";
		$html .= "<section>\n";
		$html .= "<article>\n";
		$html .= "\t<p>\n";
		$html .= "\t\tQuieres disfrutar tus vacaciones en grande con tus amigos y conocer mas personas?. Entonces agrega un nuevo evento a nuestra agenda \n";
		$html .="\t\ty comparte la informacion con nuestro publico para poder disfrutar al maximo de tus planes durante tu vacaciones!&nbsp;&nbsp;\n";
		$html .= "\t<p>\n";
		$html .= "\t\tOfrecemos la mayor logistica y seguridad como ningun otro anfitrion \n";
		$html .="\t\tque aseguran nuestro excelente servicio.&nbsp;&nbsp;\n";
		$html .= "Aprovecha y expande tu vida social con nosotros. \n";
		$html .= "\t</p>\n";
		$html .= "</article>\n";
		$html .= "</section>\n";
		$html .= "</div>";
		echo $html;
	}
 ?>