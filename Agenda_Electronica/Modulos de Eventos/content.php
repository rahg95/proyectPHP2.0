<?php
	require_once "includes/db.php";

	$conexion = new DB();
	$cn = $conexion->connect();
	$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
	$data = $cn->prepare("SELECT E.Titulo, E.Fecha_inicio, E.Lugar, E.Descripcion, E.Imagen, E.Estado
	FROM eventos AS E 
	INNER JOIN categoria AS CAT ON E.idCategoria = CAT.idCategoria"); 
	$data->execute();
	

	$html = "<div id='content'>";
	$html .= "<h2>Eventos</h2>";
	while($datos = $data->fetch(PDO::FETCH_ASSOC)){
		
		$i=0;
		if($datos['Estado'] == "Activo"){
			$html .= "<article class='post clearfix articulos' id='articulo".$i++."'>";
			$html .= "<img src='img/Eventos/".$datos["Imagen"]."' class='entrada img1'>";
			$html .= "<h3>".$datos['Titulo']."</h3>";
			$html .= "<p>Lugar: ".$datos['Lugar'] . ", Fecha: ". $datos['Fecha_inicio'] . "<br> " . $datos['Descripcion']."</p>";
			$html .= "</article>";
		}
		
	}
	$html .= "</div>";

	echo $html;
?>
