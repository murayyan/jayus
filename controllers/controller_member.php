<?php
	include ('models/model_member.php');

class controller_member {
		public $modelMember;

		public function __construct(){
			$this->modelMember = new model_member();
		}
    public function viewLoginMember(){
      include 'views/viewsMember/loginMember.php';
    }
		function authLogin(){
			$username= $_POST['username'];
			$pass = md5($_POST['pass']);
			$login = $this->modelMember->prosesLogin($username,$pass);
			if($login=='valid'){
				header("location:index.php?memberIklan");
			}
  	}

		function iklan(){
			$iklan = $this->modelMember->selectAll($_SESSION['id']);
			include 'views/viewsMember/homepageMember.php';
		}
		function logout(){
				session_destroy();
				header("location:index.php?loginMember");
		}
		function register(){
			$username= $_POST['username'];
			$nama = $_POST['nama'];
			$pass = md5($_POST['pass']);
			$email=$_POST['email'];
			$telpon = $_POST['telpon'];
			$register = $this->modelMember->prosesRegister($username,$nama,$email,$pass,$telpon);
			if($register=='valid'){
				header("location:index.php?loginMember");
			}
		}
		function viewRegister(){
			include "views/viewsMember/register.php";
		}
}
?>
