<?php
	include "controllers/main_controller.php";
  include "controllers/controllerAdmin/controller_admin.php";

	$controller = new main_controller();
  $controllerAdmin = new controller_admin();

	if(isset($_GET['register'])){
			$controller->viewRegister();
	// }
	// else if(!isset($_SESSION['username'])){
	// 	$controller->viewLogin();
	}
  if (isset($_GET['login'])){
		$controller->viewLogin();
	}
  else if (isset($_GET['secretAdminLoginPage'])){
		$controllerAdmin->viewLoginAdmin();
	}
	else{
			$controller->homepage();
	}
?>
