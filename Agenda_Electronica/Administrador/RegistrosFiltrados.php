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

               /*Nav para Administrador*/
                $datosSesionAdministrador = new datosSesionAdministrador();
                $datosSesionAdministrador->setPagina("RegistrosFiltrados");
                $datosSesionAdministrador::insertarDatos($datosSesionAdministrador->getPagina());

                /*Formulario para el POST*/
                $RegistrosAdminForm = new RegistrosAdminForm();
                echo $RegistrosAdminForm->fomFilterR();


                /*Vista por default de la Tabla de Registros filtrados*/
                $RegistrosAdminFiltrada = new RegistrosAdminFiltrada();
                $est = $RegistrosAdminFiltrada->setEstado($estado);
                $cat = $RegistrosAdminFiltrada->setCategoria($categoria);

                echo $RegistrosAdminFiltrada->vistaDefaultFiltrada($RegistrosAdminFiltrada->getEstado(),$RegistrosAdminFiltrada->getCategoria());
            
echo'</div>>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>';
    } 
?> 