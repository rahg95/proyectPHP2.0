<?php
	$mostraremp = "emp1";
	$mostraremp();

	function emp1(){
		$html = "";
		$html .= "<div id='content'>";
		$html .= "<article class='post clearfix empresas' id='empresa1'>";
		$html .= "<img src='img/Empresas/empresa1.png' class='entrada img1'";
		$html .= "<h3><a href='http://metasyvision.com/' target='_blank'>Metas y Visión</a></h3>";
		$html .= "<p>Nos dedicamos a la transformación organizacional. Transformamos seres humanos en líderes humanos para cambiar la cultura empresarial de una forma permanente en el tiempo</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php

	$mostraremp = "emp2";
	$mostraremp();

	function emp2(){
		$html = "";
		$html .= "<article class='post clearfix empresas' id='empresa2'>";
		$html .= "<img src='img/Empresas/empresa2.png' class='entrada img2'";
		$html .= "<h3><a href='http://tecniinox.com.sv/' target='_blank'>Tecni Inox</a></h3>";
		$html .= "<p>El éxito de negocio depende de un proyecto inteligente, rentable y operativamente adecuado nuestro servicio de proyección, diseño, equipamiento, y montaje de cocinas y plantas de produccion, le ofrece la alternativa de asegurar el éxito que usted desea. Somos especialistas en el diseño para restaurantes, bares, hoteles, comedores industriales, hospitales, Panaderías etc...</p>";
		$html .= "</article>";
		echo $html;
	}
?>

<?php

	$mostraremp = "emp3";
	$mostraremp();
	
	function emp3(){
		$html = "";
		$html .= "<article class='post clearfix empresas' id='empresa2'>";
		$html .= "<img src='img/Empresas/empresa3.jpg' class='entrada img3'";
		$html .= "<h3><a href='https://www.diasaonline.com/' target='_blank'>Diasa</a></h3>";
		$html .= "<p>Nuestra organización, es una empresa familiar que fue fundada en el año 1992, empezó su distribución como una nueva opción en empaques plásticos para alimentos, principalmente para los canales de supermercados e industria alimenticia, como panaderías, carnicerías, empresas distribuidoras de frutas y verduras y/o agricultores. </p>";
		$html .= "</article>";
		$html .= "</div>";
		echo $html;
	}			

?>
