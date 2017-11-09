<?php
	include "models/main_models.php";

class main_controller {
		public $model;

		public function __construct(){
			$this->model = new main_models();
		}
		public function homepage(){
			// $all = $this->model->selectAll();
			include 'views/home.php';
		}
    public function viewLogin(){
      include 'views/viewsMember/loginMember.php';
    }
  }
?>
