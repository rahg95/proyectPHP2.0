<?php  
    if (!empty($_POST)) {  
        
        $estado = trim($_POST['est']);  
        $categoria = trim($_POST['cat']);

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD con PDO</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="../Js/CrearEventos.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <div class="content">

        <div id="pagewrap">';
  
               spl_autoload_register(function ($className){

                include_once "../class/$className.class.php";

                });

               /*Header y Nav para Administrador*/
                $datosSesionAdministrador = new datosSesionAdministrador();
                $datosSesionAdministrador->setPagina("EventosFiltrados");
                $datosSesionAdministrador::insertarDatos($datosSesionAdministrador->getPagina());

                /*Formulario para el POST*/
                $EventosAdminForm = new EventosAdminForm();
                echo $EventosAdminForm->fomFilter();

                /*Vista por default de la Tabla de Eventos*/
                $EventosAdminTablaFiltrada = new EventosAdminTablaFiltrada();
                $est = $EventosAdminTablaFiltrada->setEstado($estado);
                $cat = $EventosAdminTablaFiltrada->setCategoria($categoria);

                echo $EventosAdminTablaFiltrada->vistaDefaultFiltrada($EventosAdminTablaFiltrada->getEstado(),$EventosAdminTablaFiltrada->getCategoria());
            
echo'</div>>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>';
    } 
?> 