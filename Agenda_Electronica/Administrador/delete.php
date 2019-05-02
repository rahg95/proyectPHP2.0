
<?php  
    if (!empty($_GET)) { 
        include 'connection.php';  
        $cn =  Database::connect(); 
        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $query = $cn->prepare("DELETE FROM empleados where idEmpleados = ?"); 
        $query->execute(array($_GET['id'])); 
        header("Status: 301 Moved Permanently");
        header("Location: Empleados.php");
    } 
    else {     
        echo "nada ha venido"; 
    } 
?>     