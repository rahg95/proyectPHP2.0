<!DOCTYPE html>
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

        <div id="pagewrap">

            <?php
               spl_autoload_register(function ($className){

                include_once "../class/$className.class.php";

                });

                $datosSesionAdministrador = new datosSesionAdministrador();

                $datosSesionAdministrador->setPagina("Empleados");

                $datosSesionAdministrador::insertarDatos($datosSesionAdministrador->getPagina());
            ?>

        <br><br>  
        <div class="row">
            <div class="col-offset-2 col-md-8">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <a href="create.php" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
        <br>  <br>  
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod.</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Usuarios</th>
                            <th class="text-center">Cargo</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            include 'connection.php';
                            $pdocn = Database::connect();
                            $sql = ('SELECT * FROM empleados ORDER BY idEmpleados DESC');
                            foreach ($pdocn->query($sql) as $row){
                          echo '<tr>
                                        <td class="text-center">'.$row["idEmpleados"].'</td>
                                        <td class="text-center">'.$row["Nombres"].'</td>
                                        <td class="text-center">'.$row["Apellidos"].'</td>
                                        <td class="text-center">'.$row["Usuarios"].'</td>
                                        <td class="text-center">'.$row["idCargo"].'</td>
                                        <td class="text-center">                                       
                                        <a href="update.php?id='.$row["idEmpleados"].'" class="btn btn-success">Modificar</a>
                                        <a href="delete.php?id='.$row["idEmpleados"].'" class="btn btn-danger">Eliminar</a>
                                        </td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>