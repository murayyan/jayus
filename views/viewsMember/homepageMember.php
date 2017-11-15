<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Member</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/belagu/mvcmember/views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/jayus/views/viewsMember/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/belagu/mvcmember/views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
                <a class="navbar-brand">Halo Member : <?php echo $_SESSION['usernameMember'] ?></a>
            </div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="?memberIklan" ><i class="fa fa-fw fa-table"></i> Data Iklan </a>
                  </li>
									<li class="">
                      <a href="?buatIklan" ><i class="fa fa-fw fa-table"></i> Buat Iklan </a>
                  </li>
									<li>
										<a href='http://localhost/jayus/index.php?memberLogout'><i class="fa fa-fw fa-logout"></i> Logout</a>
                  </li>
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
                            Data Iklan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <?php echo $_SESSION['usernameMember'] ?>  <a href=""></a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Data Iklan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
															<thead>
																	<tr align="center">
																		<td>ID Iklan</td>
																		<td>Judul Iklan</td>
																		<td>Detail Iklan</td>
																		<td>No HP</td>
																		<td>Email Iklan</td>
                                    <td>Link</td>
																		<td>      </td>
                                    <td>      </td>
																	</tr>
																</thead>

																<tbody>
																	<?php while($row = $this->modelMember->fetch($iklan)){
																		echo "
																			<tr>
																				<td>$row[0]</td>
																				<td>$row[2]</td>
																				<td>$row[3]</td>
																				<td>$row[4]</td>
																				<td>$row[5]</td>
                                        <td>LINK</td>

                                        <td><a href='index.php?editIklan=$row[0]' onClick=\"return confirm('Verifikasi Iklan Ini?')\"\><button class=\"btn-primary\"> Edit</button></a></td>
                                        <td><a href='index.php?deleteIklan=$row[0]' onClick=\"return confirm('Verifikasi Iklan Ini?')\"\><button class=\"btn-danger\"> Hapus</button></a></td>
																				</tr>";
																	}
																?>
															</tbody>
                            </table>
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
    <script src="http://localhost/belagu/mvcadmin/views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/belagu/mvcadmin/views/js/bootstrap.min.js"></script>

    <!-- Script load tables -->

</body>

</html>
