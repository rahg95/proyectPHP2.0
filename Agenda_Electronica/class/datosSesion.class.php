<?php

Class datosSesion{

	private $pagina;


		public function __construct(){

		$this->pagina = "";

		}

		public function setPagina($pagina){
			$this->pagina=$pagina;
		}
		public function getPagina(){
			return $this->pagina;
		}


	public static function insertarDatos($pagina){

					include_once 'includes/user.php';
					include_once 'includes/user_session.php';
					$userSession = new UserSession();
					$user = new User();
					if(isset($_SESSION['user'])){
					    //echo "Hay sesión";
					    $user->setUser($userSession->getCurrentUser());

					        require('Modulos generales/nav.inc.php');
					        include_once $pagina;					        					        						        

					}else if(isset($_POST['username']) && isset($_POST['password'])){
					    //echo "Validación de login";
					    $userForm = $_POST['username'];
					    $passForm = $_POST['password'];
					    if($user->userExists($userForm, $passForm)){
					        //echo "usuario validado";
					        $userSession->setCurrentUser($userForm);
					        $user->setUser($userForm);

					        require('Modulos generales/nav.inc.php');
					        include_once $pagina;
					        
		        
					    }else{
					        //echo "nombre de usuario y/o password incorrecto";
					        $errorLogin = "Nombre de usuario y/o password es incorrecto";
					        header("Status: 301 Moved Permanently");
					        header("Location: index.php");
					        exit;
					    }
					}else{
					    //echo "Login";
					    header("Status: 301 Moved Permanently");
				        header("Location: index.php");
				        exit;
					}

			}
	}

?>