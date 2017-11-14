<?php
 include_once "connection.php";

 class model_member{
 public $mysqli;

   public function __construct(){
     $this->mysqli = new DatabaseConnection();
   }

   function prosesRegister($username,$nama,$email,$pass,$telpon){
     $querymember = "INSERT INTO member (`id_member`, `username`, `nama`, `email`, `password`, `nohp`) VALUES ('', '$username', '$nama', '$email', '$pass', '$telpon')";
     $this->execute($querymember);
     return 'valid';
   }


   function prosesLogin($username,$pass){
     $query = mysqli_query($this->mysqli->getConnection(),"SELECT * FROM member WHERE username='$username' and password='$pass'");
     $row = mysqli_fetch_array($query);
     if($row['username']==$username && $row['password']==$pass){
       $_SESSION['usernameMember'] = $row['username'];
       $_SESSION['id'] = $row['id_member'];
       return 'valid';
       echo "<center>Login valid</center>";
     } else{
       echo "<center>Login tidak sesuai</center>";
     }
   }
   function execute($query){
     return mysqli_query($this->mysqli->getConnection(),$query);
   }
   function selectAll($id){
     $query = "SELECT * FROM iklan where id_member = '$id' ";
     return $this->execute($query);
   }
   function selectAllMember(){
     $query = "SELECT * FROM member";
     return $this->execute($query);
   }
   function insertIklan($iduser,$judul,$deskripsi,$nohp,$email){
     $query = "INSERT INTO `iklan` (`id_iklan`, `id_member`, `judul_iklan`, `detail_iklan`, `no_hp_iklan`, `email_iklan`) VALUES ( NULL,'$iduser','$judul','$deskripsi','$nohp','$email');";
     return $this->execute($query);
   }
   function fetch($query){
     return mysqli_fetch_row($query);
   }
 }
?>
