<?php
	$listitems = "";
	$listitems .= "	<header id=\"header\" style='display: none;'>";
	$listitems .= " <hgroup>";
	$listitems .= "	<img src=\"../img/logo.png\" id=\"logo\" alt=\"logo\">";
	$listitems .= "	<h2 id=\"site-description\" class=\"temaGoogle\">Agenda electronica con manejo de eventos por categorias</h2>";
	$listitems .= " </hgroup>";

			$listitems .= "<nav>";
				$listitems .= "<ul id=\"main-nav\" class=\"clearfix\">";

				$menuoptions = array(
					"opcion0" => array(
						"menu0" => "Inicio"
					),

					"opcion1" => array(
						"menu1" => "Agregar Evento"
					),
					"opcion2" => array(
						"menu2" => "Experiencias de exito"
					), 
					"opcion3" => array(
						"menu3" => "Temas de interes"
					),
					"opcion4" => array(
						"menu4" => "Contactanos"
					)
				);

				$opcion = "opcion";
				$menu = "menu";
				

				for($i=0;$i<count($menuoptions);$i++){
					if($i == 1){
						$listitems .= "<li><a href='Eventos.php'>Eventos</a><ul><li><a href='".$menuoptions[$opcion.$i][$menu.$i].".php'>".$menuoptions[$opcion.$i][$menu.$i]."</a></li></ul></li>";
	
					}else{
						$listitems .= "<li><a href='".$menuoptions[$opcion.$i][$menu.$i].".php'>". $menuoptions[$opcion.$i][$menu.$i]."</a></li>";
					}

				}

            $listitems .= "<li style=\"float:right\">";
            $listitems .= "<a href=\"includes/logout.php\">Cerrar sesión</a>";
            $listitems .= "</li>";

            $listitems .= "<li style=\"float:right\">";
            $listitems .=  "<a> Empleado: ".$user->getUsername()."</a>";
            $listitems .= "</li>";
            
            $listitems .= "</ul>";
			$listitems .= "</nav>";
			$listitems .= "</header>";

			echo $listitems;

?>