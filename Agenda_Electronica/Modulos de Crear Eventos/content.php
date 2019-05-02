<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<script type="text/javascript" src="../js/CrearEventos.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	
</head>

<body>

	<div id="pagewrap">
		<!-- #header y #nav -->
		<?php
        require ('../Modulos generales/nav3.inc.php');
         	spl_autoload_register(function ($className){
            	include "../class/$className.class.php";
        	});

			$datosSesionEmpleado = new datosSesionEmpleado();
			$datosSesionEmpleado->setPagina("Content");
            $datosSesionEmpleado::insertarDatos($datosSesionEmpleado->getPagina());
		?>
<?php
 
    $eventos = "event";
    $eventos();

    
    
    function event(){
       
        $html = "";
        $html .= "<center>";
        $html .= "<div class='content'>";
        $html .= "<form id='form2' action='Agregar.php' method='POST' enctype='multipart/form-data'>";
        $html .= "<br>";
        $html .= "<legend class='text-center header'>";          
        $html .= "<h2 style ='colo'> <a style='color: red;' href=\"../Mis Eventos.php\" class=\"btn btn-default\">Regresar</a></h2>";
        $html .= "</legend>"; 
        $html .= "<legend class='text-center header'>";
        $html .= "<h2>Crear evento</h2>";
        $html .= "</legend>";
        $html .= "<br>";
        $html .= "<label>Fecha/hora inicio</label>";
        $html .= "<br>";
        $html .= "<input type='date' name='finicio' id='finicio' class='date'/>";
        $html .= "<input type='time' name='hinicio' id='hinicio' min='08:00' max='21:00' value='08:00' class='date'>";
        $html .= "<br>";
        $html .= "<label>Fecha/hora final</label>";
        $html .= "<br>";
        $html .= "<input type='date' name='ffinal' id='ffinal' class='date'/>";
        $html .= "<input type='time' name='hfinal' id='hfinal' min='08:00' max='21:00' value='08:00' class='date'>";
        $html .= "<br>";
        $html .= "<label>Titulo</label><input id='titulo' name='titulo' id='titulo' type='text' placeholder='Titulo' class='txt'>";
        $html .= "<br>";
        $html .= "<label>Lugar</label><input id='lugar' name='lugar' id='lugar' type='text' placeholder='Lugar' class='txt'>";
        $html .= "<br>";
        $html .= "<label>Informacion</label><textarea class='txt'  name='info'  id='info' placeholder='Ingrese la informacion' rows='6'></textarea>";
        $html .= "<br>";
        $html .= "<label>Categorias</label>";
        $html .= "<select name='cat' id='cat' class='txt'>";
        $html .= "<option value='1'>Social</option>";
        $html .= "<option value='2'>Privada</option>";
        $html .= "<option value='3'>Gubernamental</option>";
        $html .= "<option value='4'>Empresarial</option>";
        $html .= "</select>";
        $html .= "<br>";
        $html .= "<span class='badge badge-secondary'><h3>Imagen</h3></span><input type='file' name='imagen' accept='image/*' id='imagen' class='txt file'>";
        $html .= "<div id='boton1'>";
        $html .= "<input type='button' id='enviar' name='enviar' value='Enviar'>";
        $html .= "</div>";
        $html .= "<br>";
        $html .= "</form>";
        $html .= "</div>";
        $html .= "</center>";

        echo $html;

    }
	require ('../Modulos generales/footer.inc.php');
    
?>
</div>
<?php

?>