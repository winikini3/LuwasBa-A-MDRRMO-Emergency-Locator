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
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['date', 'emer_loc'],
          <?php
               $query="SELECT emer_loc, COUNT(*) as count FROM tb_data WHERE status='Pending' GROUP BY emer_loc ORDER BY count DESC";
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

		var options = {
		    hAxis: {
		        title: 'Emergency Location',
		    },
		    vAxis: {
		        title: 'Count'
		    },
		  
		};


        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
        
      }
    </script>
  </head>
<body class="bg_kin">


    <div class="container-fluid mt-3" id="barchart_material" style="width: 670px; height: 300px; "></div>
  </body>
</html>

