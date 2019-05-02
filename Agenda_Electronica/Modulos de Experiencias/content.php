<?php
	$mostrarexp = "exp1";
	$mostrarexp();


	function exp1(){
		$html = "";
		$html .= "<div id='content'>";
		$html .= "<h2>Experiencias</h2>";
		$html .= "<article class='post clearfix experiencias' id='experiencia1'>";
		$html .= "<img src='img/Experiencias/experiencia1.jpg' class='entrada img1' id='experiencia1' >";
		$html .= "<h3>Raquel Rodríguez</h3>";
		$html .= "<p>\"Este progama web nos ayuda muchisimo a la hora de agregar un evento de una manera muy creativa y al alcalce de todos\".</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php
	$mostrarexp = "exp2";
	$mostrarexp();


	function exp2(){
		$html = "";
		$html .= "<article class='post clearfix experiencias' id='experiencia2'>";
		$html .= "<img src='img/Experiencias/experiencia2.png' class='entrada img2' id='experiencia2' >";
		$html .= "<h3>Julia Tejada</h3>";
		$html .= "<p>\"Me gusta mucho porque más gente se entera de los eventos que realizo y también es muy fácil de utilizar\".</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php
	$mostrarexp = "exp3";
	$mostrarexp();


	function exp3(){
		$html = "";
		$html .= "<article class='post clearfix experiencias' id='experiencia3'>";
		$html .= "<img src='img/Experiencias/experiencia3.jpg' class='entrada img3' id='experiencia3' >";
		$html .= "<h3>Juan Sarra</h3>";
		$html .= "<p>\"Es un sitio web muy interesante, ya que ayuda a muchas personas a enterarse de evento muy importantes y de interes para muchas personas\".</p>";
		$html .= "</article>";
		$html .= "</div>";
		echo $html;
	}
?>