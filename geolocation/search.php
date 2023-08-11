<?php require 'connection.php';?>
<?php
if(isset($_GET['search'])) {
  $search = $_GET['search'];
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial scale=1.0">
	<title>Login Form</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="css2/bootstrap_css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>	
  </head><style>
	.navbar_kin {
		margin-left:30px;
		margin-right:30px;
		font-family: 'Poppins', sans-serif;
}
	.bg_kin{
        /*background-image: linear-gradient(to bottom right, #1B3061,#1B3061,#1B3061,#191970,black,white);*/
        background-color:  #1B3061;
	}
	.font_kin{
		font-family: 'Poppins', sans-serif;
		color: white;
		font-size:50px;
		text-shadow: 6px 4px black;
	}
	@media screen and (min-width: 601px) {
  .font_kin {
    font-size: 65px;
  }
}

@media screen and (max-width: 600px) {
  .font_kin {
    font-size: 54px;
  }
}
	.post_kin{
		  float: left;
		  margin: -23 1.5%;
		  width: 63%;
	}
form {
      display: flex;
      align-items: flex-start;
      width: 20%;
  }
  input[type="text"] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    width: 100px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }

</style>
<body class="bg_kin">
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="homepage.php" class="navbar-brand navbar_kin"><img src="images/logo1.png" alt="" width="170" height="50"></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
            	<a href="homepage.php" class="nav-item nav-link active navbar_kin" style="	margin-top:8px;">Home</a>
                <a href="grid_data.php" class="nav-item nav-link active navbar_kin" style="	margin-top:8px;">Live Reports</a>
                <a href="barchart.php" class="nav-item nav-link active navbar_kin" style="	margin-top:8px;">Analytics</a>
                <a href="About_us.php" class="nav-item nav-link active navbar_kin" style="	margin-top:8px;">About Us</a>
                <button type="button" class="btn btn-warning  btn-xs"><a href="login.php" class="nav-item nav-link navbar_kin">Admin</a></button>
            </div>
        </div>
    </div>
</nav>
  <body>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 navbar_kin font_kin mt-3">
                        <h1 class="h1 text-gray-800" style="color:white; margin-left:10px; margin-bottom:90px;">Data Analytics in <?php echo $search?></h1>
                            
                    </div>


                <div class="container-fluid" style="margin-top:-85;">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row navbar_kin">
<form action="search.php" method="get" class="d-flex" style="margin-bottom:15px;">
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
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Accidents (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php 
                                            $sql = "SELECT MONTH(date) as month, COUNT(*) as count FROM tb_data WHERE emer_loc='$search' AND status='Accepted' GROUP BY MONTH(date)";

                                            $query = $conn->query($sql);

										if($row = $query->fetch_assoc()){
    									echo   $row["count"] ;
									    }?> 
</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Accidents (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php $current_year = date("Y");
                                            	$sql = "SELECT COUNT(*) as count FROM tb_data WHERE emer_loc='$search' AND status='Accepted' AND YEAR(date) = $current_year";
												$query = $conn->query($sql);

												$row = $query->fetch_assoc();
												echo  $row["count"];?> 
</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-table fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Accidents (Daily)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill" style="background-color:#2196f3;"><?php $current_date = date("Y-m-d");
                                                   	$sql = "SELECT COUNT(*) as count FROM tb_data WHERE emer_loc='$search' AND status='Accepted' AND DATE(date) = '$current_date'";
													$query = $conn->query($sql);

													$row = $query->fetch_assoc();
													echo  $row["count"];
                                                    ?> 
                                                </span></div>
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


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4" style="margin-right: -17px;">
                                <!-- Card Header - Dropdown -->
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<?php
  //Code for bar chart
  $query1 = "SELECT emer_loc, date, COUNT(*) as count FROM tb_data WHERE emer_loc='$search' AND status='Accepted' GROUP BY date ORDER BY count ASC";
  $result1 = mysqli_query($conn, $query1);
  //create an array to hold the data
  $data1 = array();
  $data1[] = ['date', 'count'];
  while($row = mysqli_fetch_array($result1)) {
    $data1[] = [$row['date'], $row['count']];
  }
  //encode the data array into json format 
  $jsonTable1 = json_encode($data1);

  //Code for pie chart
  $query2 = "SELECT emer_type, COUNT(*) as count FROM tb_data WHERE emer_loc='$search' AND status='Accepted' GROUP BY emer_type";
  $result2 = mysqli_query($conn, $query2);
  //create an array to hold the data
  $data2 = array();
  $data2[] = ['emer_type', 'count'];
  while($row = mysqli_fetch_array($result2)) {
    $data2[] = [$row['emer_type'], $row['count']];
  }
  //encode the data array into json format 
  $jsonTable2 = json_encode($data2);
?>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawCharts);
  
  function drawCharts() {
    //code for bar chart
    var data1 = new google.visualization.arrayToDataTable(<?php echo $jsonTable1; ?>);
    var options1 = {
        hAxis: {
            title: 'Dates',
        },
        vAxis: {
            title: 'Count'
        },
    };
    var chart1 = new google.charts.Bar(document.getElementById('chart1'));
    chart1.draw(data1, google.charts.Bar.convertOptions(options1));

    //code for pie chart
    var data2 = new google.visualization.arrayToDataTable(<?php echo $jsonTable2; ?>);
var options2 = {
title: 'Emergency Type Rate in <?php echo $search?>',
subtitle: 'Emergency Type and Location: 2022-2023',
is3D: true,
};
var chart2 = new google.visualization.PieChart(document.getElementById('chart2'));
chart2.draw(data2, options2);
}
</script>
<?php
  mysqli_close($conn);
}
?>
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Emergency Location count in <?php echo $search?></h6>
                                    <div class="dropdown no-arrow">


                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                            <div class="container-fluid mt-3" id="chart1" style="width: 700px; height: 330px; "></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4" style="margin-left: 14px; margin-right: -27px;">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Accident Type</h6>
                                    <div class="dropdown no-arrow">

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
                                        <div class="container-fluid mt-3" id="chart2" style="width: 389px; height: 300px; margin-left:-29px;"></div>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
            <!-- End of Footer -->

        </div>

  </body>
</html>

