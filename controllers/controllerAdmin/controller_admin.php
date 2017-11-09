<?php
	include(dirname(__FILE__)."/../../models/modelsAdmin/model_admin.php");

class controller_admin {
		public $model;

		public function __construct(){
			$this->model = new model_admin();
		}
    public function viewLoginAdmin(){
      include 'views/viewsAdmin/loginAdmin.php';
    }
		function authLogin(){
			$username= $_POST['username'];
			$pass = md5	($_POST['pass']);
			$login = $this->model->prosesLogin($username,$pass);
			if($login=='valid'){
				header("location:index.php");
			}
  }
}
?>
