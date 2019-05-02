<aside id="sidebar">
<section class="widget">
	<h4 class="widgettitulo">Sitios recomendados para visitar</h4>
	<ul>
		<?php
			$submenuoptions = array(
				"El Boquerón",
				"Joya de Cerén",
				"San Andrés",
				"Tazumal",
				"La Costa del Sol y Estero de Jaltepeque",
				"Puerto La Libertad",
				"El Pital"
				);
			$listsubmenu = "";
			foreach ($submenuoptions as $itemsub ) :
				$listsubmenu .= "\n<li>\n\n<a href=\"javascript:void(0);\">$itemsub</a>\n</li>\n";
			endforeach;
			echo $listsubmenu;
		?>
	</ul>
</section>
<section class="widget">
	<h4 class="widgettitulo">Sitios Web</h4>
	<ul>
		<?php
			$externallinks = array(
				"https://www.google.com/destination/map/topsights?q=lugares+turisticos+de+el+salvador&site=search&output=search&dest_mid=/m/02k8k&sa=X&ved=2ahUKEwio5LKIkf7gAhWKylkKHUO4B80Q6tEBKAQwAHoECAUQBw/"  => "Ubicaciones de lugares turisticos"
				);
			$listext = " ";
			foreach ($externallinks as $extlink => $extitem) :
				$listext .= "\n<li>\n\n<a href=\"$extlink\" target='_blank'>$extitem</a>\n</li>\n";
				endforeach;
			echo $listext;
		?>
	</ul>
</section>
</aside>