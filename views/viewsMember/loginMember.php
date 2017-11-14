<html>
	<head>
		<title></title>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="http://localhost/jayus/views/viewsAdmin/loginAdmin.css">
	</head>
	<body style="background-color:#615c85;">
		<div class="login-form">
    <form  action="" method="POST">
			<h1 style="color:#615c85;">Login Member</h1>
    	<input type="text" name="username" placeholder="Username" required="required" class="form-control"/>
        <input type="password" name="pass" placeholder="Password" required="required" class="form-control" />
        <input type="submit" value="Login" name="submit" class="log-btn"/>
    </form>
		<a href='index.php?register' \><button class="reg-btn" > Register</button></a>
	</div>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$controllerMember = new controller_member();
		$controllerMember->authlogin();
	}
?>
