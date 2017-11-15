<html lang="en">

<head>

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/belagu/mvcmember/views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/jayus/views/viewsMember/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/belagu/mvcmember/views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Halo Member : <?php ob_start(); echo $_SESSION['usernameMember'];?></a>
            </div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <!-- <li class="active">
                      <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                  </li> -->
                  <li>
                      <a href="?memberIklan" ><i class="fa fa-fw fa-table"></i> Data Iklan </a>
                  </li>
									<li class="active" >
                      <a href="?buatIklan" ><i class="fa fa-fw fa-edit"></i> Bikin Iklan</a>
                  </li>
									<li>
										<a href='index.php?memberLogout'><i class="fa fa-fw fa-logout"></i> Logout</a>
                  </li>
                  <!-- <li>
                      <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                  </li>
                  <li>
                      <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                  </li> -->
                  <!-- <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                          <li>
                              <a href="#">Dropdown Item</a>
                          </li>
                          <li>
                              <a href="#">Dropdown Item</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                  </li>
                  <li>
                      <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                  </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Buat Iklan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <?php echo $_SESSION['usernameMember'] ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Buat Iklan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <table  align="center"  class="table table-bordered table-hover table-striped">

                          <!-- <tr align="center" hidden>
                            <td>Kode Iklan</td>
                            <td>:</td>
                            <td><input type="text" name="" size="45" style="width:100%;" value="<?php if(is_null($row[0])){echo 1;}else { echo $row[0]+1;}?>"  /></td>
                          </tr> -->
                          <tr align="center">
                            <td>Judul Iklan</td>
                            <td>:</td>
                            <td><input type="text" name="judul" size="45" style="width:100%;"/></td>
                          </tr>
                          <tr align="center">
                            <td>Deskripsi Iklan</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi" style="width:100%;" /></td>
                          </tr>
                          <tr align="center">
                            <td>NoHP Iklan</td>
                            <td>:</td>
                            <td><input type="text" name="nohp" style="width:100%;"/></td>
                          </tr>
                          <tr align="center">
                            <td>Email Iklan</td>
                            <td>:</td>
                            <td><input type="text" name="email" style="width:100%;" /></td>
                          </tr>
                          <!-- <tr align="center">
                            <td>Harga</td>
                            <td>:</td>
                            <td><input type="text" name="harga" style="width:100%;" /></td>
                          </tr>
                          <tr align="center" hidden>
                            <td>verifikasi</td>
                            <td>:</td>
                            <td><input type="text" name="verif" style="width:100%;" value="not verified"/></td>
                          </tr>
                          <tr align="center" >
                            <td>Gambar</td>
                            <td>:</td>
                            <td><input type="file" name="uploadedfile" id="uploadedfile"/></td>

                          </tr> -->
                          <tr align="center">
                          <td colspan="3"><input type="submit" name="submit"/></td>
                        </tr>

                        </table>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://localhost/belagu/mvcmember/views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/belagu/mvcmember/views/js/bootstrap.min.js"></script>

    <!-- Script load tables -->

</body>

</html>
<?php
	if(isset($_POST['submit'])){
		$controllerMember = new controller_member();
		$controllerMember->insert($_SESSION['id']);
	}

  ob_end_flush();
