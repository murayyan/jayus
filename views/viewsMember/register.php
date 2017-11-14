<html>
	<head>
		<title></title>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="http://localhost/belagu/admin/mvcadmin/views/css/style.css">
	</head>
	<body>
    <form class="login-form" action="" method="POST">
			<h1>Register</h1>
    	<input type="text" name="username" placeholder="Username" required="required" class="form-control"/>
        <input type="password" name="pass" placeholder="Password" required="required" class="form-control" />
				<input type="text" name="nama" placeholder="Nama" required="required" class="form-control"/>
	        <input type="Email" name="email" placeholder="Email" required="required" class="form-control" />
		       <input type="text" name="telpon" placeholder="Nomor Telepon" required="required" class="form-control"/>
					 <br>

				 </br>

        <input  href='index.php?r=regist' type="submit" value="Register" name="submit" class="reg-btn"/>

    </form>

	</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$controllerMember = new controller_member();
		$controllerMember->register();
	}
?>
