<?php
 include_once "connection.php";

 class main_models{
 public $mysqli;

   public function __construct(){
     $this->mysqli = new DatabaseConnection();
   }

   function prosesLogin($username,$pass){
     $query = mysqli_query($this->mysqli->getConnection(),"SELECT * FROM member WHERE username='$username' and password='$pass'");
     $row = mysqli_fetch_array($query);
     if($row['username']==$nim && $row['password']==$pass){
       $_SESSION['username'] = $row['username'];
       return 'valid';
     } else{
       echo "<center>Login tidak sesuai</center>";
     }
   }
 }
?>
