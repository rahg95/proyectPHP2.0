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
			require ('Modulos de Experiencias/content.php');
		?>

		<?php
			require ('Modulos generales/sidebar.php');
		?>

		<?php
			require ('Modulos generales/footer.inc.php');
		?>
	</div>
</body>
</html>