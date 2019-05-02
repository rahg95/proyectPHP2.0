<?php
	$mostrarexp = "int1";
	$mostrarexp();


	function int1(){
		$html = "";
		$html .= "<div id='content'>";
		$html .= "<h2>Temas de Interes</h2>";
		$html .= "<article class='post clearfix intereses' id='interes1'>";
		$html .= "<img src='img/Intereses/interes1.jpeg' class='entrada img1' id='interes1' >";
		$html .= "<h3><a href='#'>Fiestas Patronales</a></h3>";
		$html .= "<p>Da un vistaso a las fiestas patronales que se aproximan para que puedas asistir con tu familia y puedas divertirte explorando las fiestas y culturas de algunos departamentos.</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php
	$mostrarexp = "int2";
	$mostrarexp();


	function int2(){
		$html = "";
		$html .= "<article class='post clearfix intereses' id='interes2'>";
		$html .= "<img src='img/Intereses/interes2.jpg' class='entrada img2' id='experiencia2' >";
		$html .= "<h3><a href='#'>Conciertos</a></h3>";
		$html .= "<p>Revisa los próximos conciertos que tenemos para ti, para que puedas asistir y poder divertirte a lo grande.</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php
	$mostrarexp = "exp3";
	$mostrarexp();


	function exp3(){
		$html = "";
		$html .= "<article class='post clearfix intereses' id='interes3'>";
		$html .= "<img src='img/Intereses/interes3.jpg' class='entrada img3' id='interes3' >";
		$html .= "<h3><a href='#'>Celebraciones Cívicas</a></h3>";
		$html .= "<p>Las celebraciones civicas son actos que como salvadoreños debemos cumplir, echa un vistaso a los eventos civicos que se aproximan y forma parte de ellos.</p>";
		$html .= "</article>";
		$html .= "</div>";
		echo $html;
	}
?>