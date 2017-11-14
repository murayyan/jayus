<?php
	include "controllers/main_controller.php";
  include "controllers/controller_admin.php";
	include "controllers/controller_member.php";

	$controller = new main_controller();
  $controllerAdmin = new controller_admin();
	$controllerMember = new controller_member();

	if(isset($_GET['register'])){
			$controllerMember->viewRegister();
	}

	//admin
if(isset($_SESSION['usernameAdmin'])){
      if(isset($_GET['homeAdmin'])){
				$controllerAdmin->homepageAdmin();
			}
			else if(isset($_GET['iklan'])){
				$controllerAdmin->homepageAdmin();
			}
			else if(isset($_GET['member'])){
				$controllerAdmin->memberpageAdmin();
			}
			else if(isset($_GET['logout'])){
					$controllerAdmin->logout();
				}
	}
	else if(isset($_SESSION['usernameMember'])){
		if(isset($_GET['memberIklan'])){
			$controllerMember->iklan();
		}
		else if(isset($_GET['memberLogout'])){
			$controllerMember->logout();
		}
	}
	else if(!isset($_SESSION['usernameAdmin']) && !isset($_SESSION['usernameMember'])){
		if (isset($_GET['login'])){
			$controllerAdmin->viewLoginAdmin();
		}
	  else if (isset($_GET['secretAdminLoginPage'])){
			$controllerAdmin->viewLoginAdmin();
		}
		else if (isset($_GET['loginMember'])){
			$controllerMember->viewLoginMember();
		}

	}


?>
