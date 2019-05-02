<?php
require('Modulos generales/header.inc.php');
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
				
				$recuperarUsuarioEmpleado = new recuperarUsuarioEmpleado();

				$idEmpleado = $recuperarUsuarioEmpleado->getIdEmpleados();
            ?>	

		<div id='content2'>
			<a href="Modulos de Crear Eventos/content.php" style="color: white;" class="btna blue">Crear Evento</a>
			<br>
			<br>

			<table style='text-align: center;'>
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Lugar</th>
						<th>Descripción</th>
						<th>Imagen</th>
						<th>Fecha Inicio</th>
						<th>Fecha Final</th>
						<th>Categoria</th>
						<th>Estado</th>
						<th>Operaciones</th>
					</tr>
				</thead>

				<tbody>
			<?php

				$conexion = new DB();
				$cn = $conexion->connect();
				$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
				$data = $cn->prepare("SELECT E.idEventos, E.Titulo, E.Lugar, E.Descripcion, E.Imagen, E.Fecha_inicio, E.Fecha_final, CAT.Categoria, E.Estado
				FROM eventos AS E 
				INNER JOIN categoria AS CAT ON E.idCategoria = CAT.idCategoria
				WHERE E.idEmpleados = ?"); 
				$data->execute(array($idEmpleado)); 
				
				while($datos = $data->fetch(PDO::FETCH_ASSOC)){
					$html = "";
					$html .= "<tr>";
					$html .= "<td>" . $datos['Titulo'] . "</td>";
					$html .= "<td>" . $datos['Lugar'] . "</td>";
					$html .= "<td>" . $datos['Descripcion'] . "</td>";
					$html .= "<td><img src='img/Eventos/" . $datos['Imagen'] . "' width='100%'></td>";
					$html .= "<td>" . $datos['Fecha_inicio'] . "</td>";
					$html .= "<td>" . $datos['Fecha_final'] . "</td>";
					$html .= "<td>" . $datos['Categoria'] . "</td>";
					$html .= "<td>" . $datos['Estado'] . "</td>";
					$html .= "<td><a href='Modificar.php?id=".$datos["idEventos"]."' class='green'>Modificar</a><br><br><a href='Eliminar.php?id=".$datos["idEventos"]."' class='red'>Eliminar</a>";
					$html .= "</tr>";
					echo $html;
				}
				

			?>
				</tbody>
			</table>

		</div>

	<?php
	require ('Modulos generales/footer.inc.php');
	?>
	
	</div>
	
</body>
</html>