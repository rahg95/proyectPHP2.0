<aside id="sidebar">
	<section class="widget">
		<h4 class="widgettitulo">Ubicanos</h4>
		<ul>
			<?php
				$submenuoptions = array(
					"Dirreccion: San Salvador, Paseo General Escalon. Edif. 446",
					"Telefono: +503-2295-5879",
					"AgendaElectronica@gmail.com",
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
					"https://www.google.com/destination/map/topsights?q=lugares+turisticos+de+el+salvador&site=search&output=search&dest_mid=/m/02k8k&sa=X&ved=2ahUKEwio5LKIkf7gAhWKylkKHUO4B80Q6tEBKAQwAHoECAUQBw/"  => "Ubicaciones de lugares turisticos",

					"https://www.google.com/maps/place/Paseo+Gral.+Escal%C3%B3n,+San+Salvador/@13.7024379,-89.239598,17z/data=!4m13!1m7!3m6!1s0x8f6330218ba4dd01:0x79348bb563b76ae0!2sPaseo+Gral.+Escal%C3%B3n,+San+Salvador!3b1!8m2!3d13.7024379!4d-89.2374093!3m4!1s0x8f6330218ba4dd01:0x79348bb563b76ae0!8m2!3d13.7024379!4d-89.2374093"  => "Nuestra Ubicacion"

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