				<?php
					require 'connection.php';
				?>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial scale=1.0">
	<title>Admin Database</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
		<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">GPS Location<a href="data - Copy.php" class="btn btn-danger float-end">BACK</a></th>
    </tr>
  </thead>
				<?php
					$row = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id DESC");
				?>
				<?php foreach($row as $row):?>
			  <tbody class="table-group-divider">
				<tr>
					<td style="width: 650px; height:650px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"];?>&hl=es;z=14&output=embed' style="width:100%; height:100%;"></td>  
				</tr>
			</tbody>
				<?php endforeach; ?>
			</table>
		</body>	
</html>