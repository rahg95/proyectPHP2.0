<?php

Class recuperarUsuarioEmpleado{

	private $datoSession;
	private $idEmpleados;


	public function __construct(){

	include_once 'includes/user.php';
	include_once 'includes/user_session.php';

	$this->datoSession =  $_SESSION['user'];
	$this->idEmpleados =  $_SESSION['idEmpleados'];

	}


	public function getDatoSession(){
		return $this->datoSession;
	}

	public function getIdEmpleados(){
		return $this->idEmpleados;
	}



}


/*
$recuperarUsuarioEmpleado = new recuperarUsuarioEmpleado();

$idEmpleado = $recuperarUsuarioEmpleado->getIdEmpleados();
*/

?>
