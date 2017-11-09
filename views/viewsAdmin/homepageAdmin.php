<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/belagu/mvcadmin/views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/belagu/mvcadmin/views/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/belagu/mvcadmin/views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand">Halo Admin</a>
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
                  <li class="active">
                      <a href="index.php" ><i class="fa fa-fw fa-table"></i> Data Iklan</a>
                  </li>
									<li class="">
                      <a href="index.php?m=member" ><i class="fa fa-fw fa-table"></i> Data Member</a>
                  </li>
									<li>
										<a href='index.php?l=logout'><i class="fa fa-fw fa-logout"></i> Logout</a>
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
                            Data Iklan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Admin</a>
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
																		<td>ID</td>
																		<td>Kode Iklan</td>
																		<td>Judul Album</td>
																		<td>Genre</td>
																		<td>Artist</td>
																		<td>Tahun</td>
																		<td>Stock</td>
																		<td>Harga</td>
																		<td>Gambar</td>
																		<td>Verifikasi</td>
																	</tr>
																</thead>

																<tbody>
																	<?php while($row = $this->model->fetch($iklan)){
																		echo "
																			<tr>
																				<td>$row[0]</td>
																				<td>$row[1]</td>
																				<td>$row[3]</td>
																				<td>$row[2]</td>
																				<td>$row[4]</td>
																				<td>$row[5]</td>
																				<td>$row[6]</td>
																				<td>$row[7]</td>
																				<td><img src=http://localhost/belagu/mvcmember/iklan/$row[8] style='height:50px;'></td>
																				<td>$row[9]</td>

                                        <td><a href='index.php?v=$row[1]' onClick=\"return confirm('Verifikasi Iklan Ini?')\"\><button class=\"btn-primary\"> Verifikasi</button></a></td>
                                        <td><a href='index.php?d=$row[1]' onClick=\"return confirm('Verifikasi Iklan Ini?')\"\><button class=\"btn-danger\"> Hapus</button></a></td>
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
    <script>
    var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extension:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date",
                type: 'datetime'
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
    } );

    var table = $('#example').DataTable( {
        lengthChange: false,
        ajax: "../php/staff.php",
        columns: [
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },
            { data: "position" },
            { data: "office" },
            { data: "extn" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        select: true
    } );

    // Display the buttons
    new $.fn.dataTable.Buttons( table, [
        { extend: "create", editor: editor },
        { extend: "edit",   editor: editor },
        { extend: "remove", editor: editor }
    ] );

    table.buttons().container()
        .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
} );
</script>
</body>

</html>
