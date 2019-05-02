    
<?php
include_once 'db.php';
class User extends DB{
    private $nombre;
    private $username;
    private $cargo;
    private $idEmpleados;

    public function userExists($user, $pass){
        $cryptPass = crypt($pass, "pw");
        //$cryptPass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM empleados WHERE Usuarios = :user AND Password = :pass');
        $query->execute(['user' => $user, 'pass' => $cryptPass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM empleados WHERE Usuarios = :user');
        $query->execute(['user' => $user]);
        foreach ($query as $currentUser) {
            $this->idEmpleados = $currentUser['idEmpleados'];
            $this->nombre = $currentUser['Nombres'];
            $this->username = $currentUser['Usuarios'];
            $this->cargo = $currentUser['idCargo'];          
        }
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getIdEmpleados(){
        return $this->idEmpleados;
    }
}
?>