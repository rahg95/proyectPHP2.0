<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

<body>
	<div id="pagewrap">
		<!-- #header y #nav -->
		<?php
         	spl_autoload_register(function ($className){
				include "../class/$className.class.php";
        	});
			
			$datosSesionEmpleado = new datosSesionEmpleado();
			$datosSesionEmpleado->setPagina("Agregar");
            $datosSesionEmpleado::insertarDatos($datosSesionEmpleado->getPagina());

			$recuperarUsuario = new recuperarUsuario();
			$idEmpleado = $recuperarUsuario->getIdEmpleados();
		?>

<?php
if (isset($_POST['enviar'])) {
	ini_set('date.timezone','America/El_Salvador');
	$fecha = date('Y-m-d H:i:s', time());


	extract($_POST);
	$finicio = isset($_POST['finicio']) ? $_POST['finicio'] : "";
	$hinicio = isset($_POST['hinicio']) ? $_POST['hinicio'] : "";
	$ffinal = isset($_POST['ffinal']) ? $_POST['ffinal'] : "";
	$hfinal = isset($_POST['hfinal']) ? $_POST['hfinal'] : "";
	$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : "";

	$lugar = isset($_POST['lugar']) ? $_POST['lugar'] : "";
	$info = isset($_POST['info']) ? $_POST['info'] : "";
	$cat = isset($_POST['cat']) ? $_POST['cat'] : "";
	
	if($_FILES["imagen"]["error"]>0){
		echo'<script type="text/javascript">
			alert("ERROR, Debe seleccionar una imagen");
			window.location.href="Modulos de Crear Eventos/content.php";
			</script>';
	}else{
		$tipoimg = array("image/jpg","image/png","image/jpeg");

		if(in_array($_FILES["imagen"]["type"], $tipoimg)){
			$rutaimg = '../img/Eventos/';
			$extensionimg = explode("/",$_FILES["imagen"]["type"]);
			$nombreimg = $rutaimg .$_FILES["imagen"]["name"];
			$img = $_FILES["imagen"]["name"];
			if(!file_exists($rutaimg)){
				mkdir($rutaimg);
			}

			if(!file_exists($nombreimg)){
				$resultadoimg = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreimg);
				
				$conexion = new DB();
				$cnu = $conexion->connect();  
				$cnu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
				$query = $cnu->prepare('INSERT INTO eventos (idEmpleados, Fecha_Publicacion, Titulo, Lugar, Descripcion, Imagen, Fecha_inicio, Fecha_final, idCategoria, Estado)
				 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				$query->execute(array($idEmpleado, $fecha, $titulo, $lugar, $info, $img, $finicio." ".$hinicio, $ffinal." ".$hfinal, $cat, 'En Espera'));   

				if($nombreimg){
					//echo "Imagen Guardada";
					//echo $nombreimg;
					
				}else{
					echo'<script type="text/javascript">
					alert("ERROR, la imagen no se guardo");
					window.location.href="../Agregar Evento.php";
					</script>';
				}
			}else{
			   echo'<script type="text/javascript">
				alert("ERROR, El codigo que ingreso ya existe);
				window.location.href="../Agregar Evento.php";
				</script>';
			}
		}else{
			echo'<script type="text/javascript">
			alert("ERROR, extension de imagen no permitida");
			window.location.href="../Agregar Evento.php";
			</script>';
		}
	}
	
	$html = "";
	$html .= "<!DOCTYPE html>";
	$html .= "<html lang='es'>";
	$html .= "<head>";
	$html .= "<title>Evento Agregado</title>";
	$html .= "<meta charset='utf-8'>";
	$html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	$html .= "<link rel='stylesheet' type='text/css' href='../css/style.css'/>";
	$html .= "</head>";
	$html .= "<body>";
	$html .= "<br>";
	$html .= "<br>";
	$html .= " <a href='../Mis Eventos.php' class='botona'>\n";
	$html .= "Regresar</a>\n";
	echo $html;

	include "../class/claseEventos.php";

	Eventos::mostrarEventos($finicio,$hinicio,$ffinal,$hfinal,$titulo,$lugar,$info,$cat,$img);
}


	$html = "";
	$html .= "</body>";
	$html .= "<html>";
	echo $html;
?>