<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


class DatabaseConnection{
		private $mysqli;
		public function __construct(){
			$this->mysqli = new mysqli('localhost', 'root','', 'jayus');
		}
		public function getConnection(){
			return $this->mysqli;
		}
	}
?>
