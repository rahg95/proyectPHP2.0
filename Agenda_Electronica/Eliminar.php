
<?php  
    if (!empty($_GET)) { 
        include 'includes/db.php';  
        $conexion =  new DB();
        $cn = $conexion->connect();
        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $query = $cn->prepare("DELETE FROM eventos where idEventos = ?"); 
        $query->execute(array($_GET['id'])); 
        header("Status: 301 Moved Permanently");
        header("Location: Eventos.php");
    } 
    else {     
        echo "nada ha venido"; 
    } 
?>     