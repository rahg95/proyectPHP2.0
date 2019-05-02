<?php
class UserSession{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function setCurrentCargo($idCargo){
        $_SESSION['idCargo'] = $idCargo;
    }

    public function getCurrentCargo(){
        return $_SESSION['idCargo'];
    }

    public function setCurrentIdEmpleados($idEmpleados){
        $_SESSION['idEmpleados'] = $idEmpleados;
    }

    public function getCurrentIdEmpleados(){
        return $_SESSION['idEmpleados'];
    }
    
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>
