<?php
	include ('models/model_admin.php');

class controller_admin {
		public $modelAdmin;

		public function __construct(){
			$this->modelAdmin = new model_admin();
		}
    public function viewLoginAdmin(){
      include 'views/viewsAdmin/loginAdmin.php';
    }
		function authLogin(){
			$username= $_POST['username'];
			$pass = md5	($_POST['pass']);
			$login = $this->modelAdmin->prosesLogin($username,$pass);
			if($login=='valid'){
				header("location:?homeAdmin");
			}
  	}
		function iklan(){
			$iklan = $this->modelAdmin->selectAll();
			include 'views/viewAdmin/homepageAdmin.php';
		}
		function homepageAdmin(){
			$iklan = $this->modelAdmin->selectAll();
			include 'views/viewsAdmin/homepageAdmin.php';
		}
		function memberpageAdmin(){
			$member = $this->modelAdmin->selectAllMember();
			include 'views/viewsAdmin/memberpageAdmin.php';
		}
		function logout(){
				session_destroy();
				header("location:index.php?secretAdminLoginPage");
		}
}
?>
