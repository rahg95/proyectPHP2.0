<?php
require('Modulos generales/header.inc.php')
?>
<body>
	<div id="pagewrap">
		<!-- #header y #nav -->
			<?php
               spl_autoload_register(function ($className){

                include_once "class/$className.class.php";

                });

                $datosSesion = new datosSesion();

                $datosSesion->setPagina(basename($_SERVER['PHP_SELF']));

				$datosSesion::insertarDatos($datosSesion->getPagina());
			?>
    <?php
        

        if(isset($_GET['id'])){
            $idEvento = isset($_GET['id']) ? $_GET['id'] : "";

            if($idEvento==""){

            }else{
                $conexion = new DB();
				$cn = $conexion->connect();
				$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
				$data = $cn->prepare("SELECT E.idEventos, E.Titulo, E.Lugar, E.Descripcion, E.Imagen, E.Fecha_inicio, E.Fecha_final, CAT.Categoria, E.Estado
				FROM eventos AS E 
				INNER JOIN categoria AS CAT ON E.idCategoria = CAT.idCategoria
				WHERE E.idEventos = ?"); 
				$data->execute(array($idEvento)); 
				
				while($datos = $data->fetch(PDO::FETCH_ASSOC)){
                    $html = "";
                    $html .= "<legend class='text-center header'>";          
                    $html .= "<h2 style ='colo'> <a style='color: white;' href=\"Mis Eventos.php\" class=\"btn btn-default\">Regresar</a></h2>";
                    $html .= "</legend>";
                    $html .= "<form action='Modificar.php?id2=".$idEvento."' method='POST'><br><br>";
					$html .= "Titulo: <input type='text' value='" . $datos['Titulo'] . "' name='titulo'><br><br>";
					$html .= "Lugar: <input type='text' value='" . $datos['Lugar'] . "' name='lugar'><br><br>";
					$html .= "Descripción: <textarea name='descripcion'>" . $datos['Descripcion'] . "</textarea><br><br>";
                    $html .= "<input type='submit' name='actualizar' id='actualizar' value='Actualizar' ><br><br>";
                    $html .= "</form>";
					echo $html;
				}
            }
        }


        if(isset($_POST['actualizar']) && isset($_GET['id2'])){
            extract($_POST);

            $idEvento = $_GET['id2'];
            $titulo = trim(isset($_POST['titulo']) ? $_POST['titulo'] : "");
            $lugar = trim(isset($_POST['lugar']) ? $_POST['lugar'] : "");
            $descripcion = trim(isset($_POST['descripcion']) ? $_POST['descripcion'] : "");

            $conexion = new DB();
            $cnu = $conexion->connect();  
            $cnu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $query = $cnu->prepare("UPDATE eventos SET Titulo = ?, Lugar = ?, Descripcion = ? WHERE idEventos = ?");
            $query->execute(array($titulo, $lugar, $descripcion, $idEvento));    
            
            
            header("Status: 301 Moved Permanently");
            header("Location: Mis Eventos.php"); 
        }
        
    ?>
    <?php
	require ('Modulos generales/footer.inc.php');
    ?>
    </div>
</body>
</html>