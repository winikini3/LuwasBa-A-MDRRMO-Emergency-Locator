<?php require 'connection.php';?>
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
    <script type="text/javascript">
 google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['emer_type', 'count'],
    <?php
    $query = "SELECT emer_type, COUNT(*) as count FROM tb_data GROUP BY emer_type ORDER BY count DESC";
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

  var options = {
    chart: {
      title: 'Emergency Types in Argao',
      subtitle: 'Emergency Types and Count,: 2022-2023',
    },
    is3D: true,
  };

  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

    </script>
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
  	<form action="search.php" method="get">
  <input type="text" name="search" placeholder="Search">
  <input type="submit" value="Search">
</form>

    <div class="container-fluid mt-3" id="chart_div" style="width: 900px; height: 500px; "></div>
  </body>
</html>

