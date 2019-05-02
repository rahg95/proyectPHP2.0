<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$user = new User();
$userSession = new UserSession();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());   

    if ($user->getCargo() == 1) {

            header("Status: 301 Moved Permanently");
            header("Location: Administrador/Empleados.php");
                             
            } else if ($user->getCargo() == 2){

            header("Status: 301 Moved Permanently");
            header("Location: Inicio.php");
                        
                  }
    exit;
    
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validación de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $user->setUser($userForm);
        $userSession->setCurrentUser($userForm);
        $user->setUser($userSession->setCurrentIdEmpleados($user->getIdEmpleados()));
        if ($user->getCargo() == 1) {

            header("Status: 301 Moved Permanently");
            header("Location: Administrador/Empleados.php");
                             
            } else if ($user->getCargo() == 2){

            header("Status: 301 Moved Permanently");
            header("Location: Inicio.php");
                        
                  }
        exit;
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrectos";
        include_once 'VistaLogin/login.php';
    }
}else if(!isset($_SESSION['user'])){
    //echo "Login";
    include_once 'VistaLogin/login.php';
}
?>