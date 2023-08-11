<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width:1030px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #007bff;}
</style>


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="	background-color:  #1B3061;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Adminpage.php"   style="	background-color:  white;">
                <div class="mx-3"><img src="img/logo1.png" width="130" height="35" style="margin-left:25px;"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Adminpage.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Accountdata.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Account Management</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="data - Copy.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Emergency Request Data</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="respond.php">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Emergency Respond Data</span></a>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item">
                <a class="nav-link" href="emergency_history.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Emergency Request History</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


                <!-- Begin Page Content -->
                <div class="container-fluid">
						

                    <!-- Page Heading -->
                    <div style="margin-bottom:10px;">
                    	<form action="search1.php" method="get" class="d-flex">
						      <select id="inputState" class="form-select" name='search' style="height:40px; margin-right:10px;">
	<option value="">   </option>
    <option value="Alambijud">Alambijud</option>
    <option value="Anajao">Anajao</option>
    <option value="Apo">Apo</option>
    <option value="Balaas">Balaas</option>
    <option value="Binlod">Binlod</option>
    <option value="Bogo">Bogo</option>
    <option value="Bug-ot">Bug-ot</option>
    <option value="Bulasa">Bulasa</option>
    <option value="Butong">Butong</option>
    <option value="Calagasan">Calagasan</option>
    <option value="Canbantug">Canbantug</option>
    <option value="Canbanua">Canbanua</option>
    <option value="Cansuje">Cansuje</option>
    <option value="Capio-an">Capio-an</option>
    <option value="Casay">Casay</option>
    <option value="Catang">Catang</option>
    <option value="Colawin">Colawin</option>
    <option value="Conalum">Conalum</option>
    <option value="Guiwanon">Guiwanon</option>
    <option value="Gutlang">Gutlang</option>
    <option value="Jampang">Jampang</option>
    <option value="Jomgao">Jomgao</option>
    <option value="Lamacan">Lamacan</option>
    <option value="Langtad">Langtad</option>
    <option value="Langub">Langub</option>
    <option value="Lapay">Lapay</option>
    <option value="Lengigon">Lengigon</option>
    <option value="Linut-od">Linut-od</option>
    <option value="Mabasa">Mabasa</option>
    <option value="Mandilikit">Mandilikit</option>
    <option value="Mompeller">Mompeller</option>
    <option value="Panadtaran">Panadtaran</option>
    <option value="Poblacion">Poblacion</option>
    <option value="Sua">Sua</option>
    <option value="Sumaguan">Sumaguan</option>
    <option value="Tabayag">Tabayag</option>
    <option value="Talaga">Talaga</option>
    <option value="Talaytay">Talaytay</option>
    <option value="Talo-ot">Talo-ot</option>
    <option value="Tiguib">Tiguib</option>
    <option value="Tulang">Tulang</option>
    <option value="Tulic">Tulic</option>
    <option value="Ubaub">Ubaub</option>
    <option value="Usmad">Usmad</option>
    			</select>
						      <button class="btn btn-outline-success" type="submit" value="search">Search</button>
						    </form>
					</div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4" style="margin-left:24px;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Accidents (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php include('monthly.php');?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4" style="margin-left:34px;">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Accidents (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php include('anualy.php');?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-table fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4" style="margin-left:34px;">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Accidents (Daily)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php include('daily.php');?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4" style="margin-left:34px;">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Accidents (Weekly)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php include('weekly.php');?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4" style="margin-left:34px;">
                        	<a href = "data - Copy.php" style="color:red;">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pending Request
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php include('count_emergency.php');?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	 </a>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawCharts);

  function drawCharts() {
    // Pie Chart
    var data1 = google.visualization.arrayToDataTable([
      ['emer_type', 'count'],
      <?php
      $query = "SELECT emer_type, COUNT(*) as count FROM tb_data WHERE status='Accepted' GROUP BY emer_type ORDER BY count DESC";
      $res = mysqli_query($conn, $query);
      while($data = mysqli_fetch_array($res)){
        $emer_type = $data['emer_type'];
        $count = $data['count'];
      ?>
      ['<?php echo $emer_type; ?>', <?php echo $count; ?>],   
      <?php   
      }
      ?> 
    ]);

    var options1 = {
      chart: {
        title: 'Emergency Types in Argao',
        subtitle: 'Emergency Types and Count,: 2022-2023',
      },
      is3D: true,
    };

    var chart1 = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart1.draw(data1, options1);

    // Bar Chart
    var data2 = google.visualization.arrayToDataTable([
      ['date', 'emer_loc'],
      <?php
           $query="SELECT emer_loc, COUNT(*) as count FROM tb_data WHERE status='Accepted' GROUP BY emer_loc ORDER BY count DESC";
        $res=mysqli_query($conn,$query);
        while($data=mysqli_fetch_array($res)){
          $emer_loc=$data['emer_loc'];
          $count=$data['count'];
        ?>
        ['<?php echo $emer_loc;?>', <?php echo $count;?>],   
        <?php   
        }
       ?> 
    ]);

    var options2 = {
      hAxis: {
        title: 'Emergency Location',
      },
      vAxis: {
        title: 'Count'
      },
    };

    var chart2 = new google.charts.Bar(document.getElementById('barchart_material'));
    chart2.draw(data2, google.charts.Bar.convertOptions(options2));

  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>


<div class="dropdown d-flex justify-content-center">
  <button class="dropbtn btn btn-outline-primary" style="padding:10px 452px 10px 452px;">Generate Report</button>
  <div class="dropdown-content">
    <a href="report_generate.php">Annualy</a>
    <a href="monthly_report.php">Monthly</a>
    <a href="weekly_report.php">Weekly</a>
  	<a href="daily_report.php">Daily</a>
  </div>
</div>


<script>
function generateReport() {
    var chart1 = document.getElementById("chart_div");
    var chart2 = document.getElementById("barchart_material");
    domtoimage.toPng(chart1)
        .then(function (dataUrl1) {
            var img1 = new Image();
            img1.src = dataUrl1;
            domtoimage.toPng(chart2)
                .then(function (dataUrl2) {
                    var img2 = new Image();
                    img2.src = dataUrl2;
                    var doc = new jsPDF();
					var centerX = (doc.internal.pageSize.width / 2);
                    doc.text(centerX, 20, 'Generated report', null, null, 'center');
                    doc.addImage(img1, 'PNG', 10, 30, 180, 100);
                    doc.addImage(img2, 'PNG', 10, 150, 180, 100);
                    doc.save("report.pdf");
                });
        })
        .catch(function (error) {
            console.error('oops, something went wrong!', error);
        });
}
</script>

                        <div class="col-xl-8 col-lg-7 mt-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                    


                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Emergency Location count in Argao</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>

                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                            <div class="container-fluid mt-3" id="barchart_material" style="width: 675px; height: 330px; "></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 mt-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Accident Type in Argao</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <div class="container-fluid mt-3" id="chart_div" style="width: 370px; height: 300px; margin-left:-44px;"></div>
                                    </div>
                                    <div class="mt-4 text-center small">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
		
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../geolocation/homepage.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>