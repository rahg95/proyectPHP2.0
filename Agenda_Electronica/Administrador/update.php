<!DOCTYPE html> 
<html lang="es"> 
<head>  
    <meta charset="utf-8">  
    <title>Actualizar información del usuario con PDO</title>  
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

                $datosSesionAdministrador->setPagina("update");

                $datosSesionAdministrador::insertarDatos($datosSesionAdministrador->getPagina());
            ?>

        <br> <br>  
        
        <div class="row">   
            <div class="col-offset-2 col-md-8">    
                <div class="row">     
                    <div class="col-md-offset-2 col-md-8">      
                        <a href="Empleados.php" class="btn btn-default">Back</a> 
                    </div>    
                </div>       
            </div>  
        </div>     
        <br>  <br>  
        <div class="row">         
            <div class="col-md-offset-2 col-md-8">         
                <form action="update.php" method="POST"> 
                <?php  
                    $id=null; 
                    if (!empty($_GET)) { 
                        $id=$_GET['id']; 
                        include 'connection.php'; 
                        $cn =  Database::connect(); 
                        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                        $query = $cn->prepare("SELECT * FROM empleados where idEmpleados = ?"); 
                        $query->execute(array($_GET['id'])); 
                        $data = $query->fetch(PDO::FETCH_ASSOC);  
                        echo '   <div>   
                                <label for="-">Codigo</label><br>   
                                <input type="label" value="'.$data["idEmpleados"].'" class="cod" readonly="readonly" name="idEmpleados">  
                                </div><br> 
                                <div>   
                                <label for="-">Nombres</label><br>    
                                <input type="text" value="'.$data["Nombres"].'" placeholder="Nombre cuenta" name="Nombres">  
                                </div><br>   
                                <div>   
                                <label for="-">Apellidos</label><br>    
                                <input type="text" value="'.$data["Apellidos"].'" placeholder="Descripcion"  name="Apellidos">  
                                </div><br>   
                                <div>   
                                <label for="-">Usuario</label><br>    
                                <input type="text" value="'.$data["Usuarios"].'" placeholder="Tipo"  name="Usuarios">  
                                </div><br>   
                                <div>   
                                <label for="-">Password</label><br>    
                                <input type="Password" placeholder="Password"  name="Password">  
                                </div><br>   
                                <div> ';

                                if ($data["idCargo"] == 1) {
                                    
                                echo '
                                <div class="form-group"              
                                <label for="idCargo">Cargo</label>                 
                                <select name="idCargo" id="idCargo" class="form-control">                     
                                    <option value="1">Administrador</option>                     
                                    <option value="2">Empleado</option>                 
                                </select>             
                                </div>     
                                ';

                                } else if ($data["idCargo"] == 2){
                                echo '
                                <div class="form-group">                 
                                <label for="idCargo">Cargo</label>                 
                                <select name="idCargo" id="idCargo" class="form-control"> 
                                    <option value="2">Empleado</option>                      
                                    <option value="1">Administrador</option>                                                                       
                                </select>             
                                </div> <br>      
                                ';
                                }
                                                                

                               echo '</div> '; 

                        Database::disconnect(); 
                    }  
                ?>   
                    <div>    
                        <input type="submit" class="btn btn-success" value="Actualizar">   
                    </div>      
                </form>         
            </div>     
        </div> 
    </div> 
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
    <script src="js/bootstrap.min.js" ></script> 
</body> 
</html> 
<?php  
    if (!empty($_POST)) {  
        include 'connection.php';  
        $id = trim($_POST['idEmpleados']);  
        $Nombres = trim($_POST['Nombres']);  
        $Apellidos = trim($_POST['Apellidos']);  
        $Usuarios = trim($_POST['Usuarios']);  
        $Password = trim($_POST['Password']);  
        $idCargo = trim($_POST['idCargo']);  
        $cnu = Database::connect();  
        $cnu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        $query = $cnu->prepare("UPDATE empleados SET Nombres = ?, Apellidos = ?, Usuarios = ?, Password = ?, idCargo= ? WHERE idEmpleados = ?");  
        $query->execute(array($Nombres, $Apellidos, $Usuarios, crypt($Password, "pw") , $idCargo, $id));  
        Database::disconnect();  
        header("Location: Empleados.php"); 
    } 
?> 