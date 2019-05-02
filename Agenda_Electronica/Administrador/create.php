<!DOCTYPE html> 
<html lang="es"> 
<head>     
    <meta charset="utf-8">     
    <title>Ingresar nuevo usuario con PDO</title>
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

                $datosSesionAdministrador->setPagina("create");

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
            <div class="col-md-offset-3 col-md-6">   
                <form action="create.php" method="POST">             
                    <div class="form-group">           
                        <label for="-">Nombres</label>                 
                        <input type="text" class="form-control" placeholder="Nombres" name="Nombres" id="Nombres">
                    </div>             
                    
                    <div class="form-group">                 
                        <label for="">Apellidos</label>  
                        <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" id="Apellidos">             
                    </div>             
                    
                    <div class="form-group">                 
                        <label for="password">Digite la contraseña</label>                 
                        <input type="password" class="form-control" id="Password" placeholder="password" name="password" id="password">
                    </div>  

                    <div class="form-group">                 
                        <label for="password2">Vuelva a digitar la contraseña</label>                 
                        <input type="password" class="form-control" id="password2" placeholder="password2" name="password2" id="password2">
                    </div>             
                               
                    
                    <div class="form-group">                 
                        <label for="Usuarios">Usuario</label>                 
                        <input type="text" class="form-control" placeholder="Usuarios" name="Usuarios" id="Usuarios">             
                    </div>             
                    
                    <div class="form-group">                 
                        <label for="idCargo">Cargo</label>                 
                        <select name="idCargo" id="idCargo" class="form-control">                     
                            <option value="1">Administrador</option>                     
                            <option value="2">Empleado</option>                 
                        </select>             
                    </div>             
                       <br>  <br>                               
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>         
            </div>     
        </div> 
    </div> 
    
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
    <script src="js/bootstrap.min.js" ></script> 
</body> 
</html> 
<?php  
    include 'connection.php'; 
    if (!empty($_POST)) {  
        $Nombres = trim($_POST['Nombres']);  
        $Apellidos = trim($_POST['Apellidos']);   
        $Usuarios = trim($_POST['Usuarios']);  
         $password2 = md5(trim($_POST['password2'])); 
        $idCargo = trim($_POST['idCargo']);  
        $cn = Database::connect();  
        $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        $query = $cn->prepare("INSERT INTO empleados (Nombres, Apellidos, Usuarios, Password, idCargo) VALUES(?, ?, ?, ?, ?)");  
        $query->execute(array($Nombres, $Apellidos, $Usuarios, crypt($password2, "pw"), $idCargo));  
        Database::disconnect(); 
    }  
?>