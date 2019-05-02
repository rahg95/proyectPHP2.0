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

                $datosSesionAdministrador->setPagina("updateEvento");

                $datosSesionAdministrador::insertarDatos($datosSesionAdministrador->getPagina());
            ?>

        <br> <br>  
        
        <div class="row">   
            <div class="col-offset-2 col-md-8">    
                <div class="row">     
                    <div class="col-md-offset-2 col-md-8">      
                        <a href="Eventos.php" class="btn btn-default">Back</a> 
                    </div>    
                </div>       
            </div>  
        </div>     
        <br> 
        <div class="row">         
            <div class="col-md-offset-2 col-md-8">         
                <form action="updateEvento.php" method="POST"> 
                <?php  
                    $id=null; 
                    if (!empty($_GET)) { 
                        $id=$_GET['id']; 
                        include 'connection.php'; 
                        $cn =  Database::connect(); 
                        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                        $query = $cn->prepare("SELECT * FROM eventos where idEventos = ?"); 
                        $query->execute(array($_GET['id'])); 
                        $data = $query->fetch(PDO::FETCH_ASSOC);

                        $html = "<br><br>";

                        $html .= "<label>Estado:</label><br>";
                        $html .= "<select name='estado' id='estado' class='txt'>";
                        $html .= "<option value='Activo'>Activo</option>";
                        $html .= "<option value='Inactivo'>Inactivo</option>";                      
                        $html .= "</select>";
                        $html .= "<br><br>";
                        echo '<label>Cod. Evento: &nbsp;</label>';
                        echo '<input type="text" value="'.$data["idEventos"].'" class="cod" readonly="readonly" name="idEventos"><br><br>';
                        echo '<label>Titulo : '.$data["Titulo"].'</label><br><br>';
                        echo '<label>Lugar : '.$data["Lugar"].'</label>';
                        echo "<label>Informacion : ".$data["Descripcion"]."</label>";
                        echo $html;       

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
        $estado = trim($_POST['estado']);  
        $idEvento = trim($_POST['idEventos']);
        $cnu = Database::connect();  
        $cnu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        $query = $cnu->prepare("UPDATE eventos SET Estado = ? where idEventos =".$idEvento);  
        $query->execute(array($estado));  
        Database::disconnect();  
        header("Location: Eventos.php"); 
    } 
?> 