<?php
 include_once "connection.php";

 class model_admin{
 public $mysqli;

   public function __construct(){
     $this->mysqli = new DatabaseConnection();
   }

   function prosesLogin($username,$pass){
     $query = mysqli_query($this->mysqli->getConnection(),"SELECT * FROM admin WHERE username_admin='$username' and password_admin='$pass'");
     $row = mysqli_fetch_array($query);
     if($row['username_admin']==$username && $row['password_admin']==$pass){
       $_SESSION['usernameAdmin'] = $row['username_admin'];
       return 'valid';
       echo "<center>Login valid</center>";
     } else{
       echo "<center>Login tidak sesuai</center>";
     }
   }
   function execute($query){
     return mysqli_query($this->mysqli->getConnection(),$query);
   }
   function selectAll(){
     $query = "SELECT * FROM iklan";
     return $this->execute($query);
   }
   function selectAllMember(){
     $query = "SELECT * FROM member";
     return $this->execute($query);
   }
   function fetch($query){
     return mysqli_fetch_row($query);
   }
 }
?>
