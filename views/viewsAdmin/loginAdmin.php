<html>
	<head>
		<title></title>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="http://localhost/jayus/views/viewsAdmin/loginAdmin.css">
	</head>
	<body>
		<div class="login-form">
    <form  action="" method="POST">
			<h1>Login Admin</h1>
    	<input type="text" name="username" placeholder="Username" required="required" class="form-control"/>
        <input type="password" name="pass" placeholder="Password" required="required" class="form-control" />
        <input type="submit" value="Login" name="submit" class="log-btn"/>
    </form>
	</div>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$controllerAdmin = new controller_admin();
		$controllerAdmin->authLogin();
	}
?>
