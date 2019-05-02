<?php
	$listitems = "";
	$listitems .= "	<header id=\"header\">";
	$listitems .= " <hgroup>";
	$listitems .= "	<img src=\"../img/logo.png\" id=\"logo\" alt=\"logo\">";
	$listitems .= "	<h2 id=\"site-description\" class=\"temaGoogle\">Agenda electronica con manejo de eventos por categorias</h2>";
	$listitems .= " </hgroup>";

			$listitems .= "<nav>";
				$listitems .= "<ul id=\"main-nav\" class=\"clearfix\">";

				$menuoptions = array(
					"opcion0" => array(
						"menu0" => "Empleados"
					),
				
					"opcion1" => array(
						"menu1" => "Registro"
					),

					"opcion2" => array(
						"menu2" => "Eventos"
					)
				);

				$opcion = "opcion";
				$menu = "menu";
				

				for($i=0;$i<count($menuoptions);$i++){

						$listitems .= "<li><a href='".$menuoptions[$opcion.$i][$menu.$i].".php'>". $menuoptions[$opcion.$i][$menu.$i]."</a></li>";
					

				}



            $listitems .= "<li style=\"float:right\">";
            $listitems .=    "<a href=\"../includes/logout.php\">Cerrar sesión</a>";
            $listitems .= "</li>";

            $listitems .= "<li style=\"float:right\">";
            $listitems .=  "<a id = 'usuario' name = 'usuario'> Administrador: ".$user->getUsername()."</a>";
            $listitems .= "</li>";
            $listitems .= "</ul>";
			$listitems .= "</nav>";
			$listitems .= "</header>";

			echo $listitems;

?>