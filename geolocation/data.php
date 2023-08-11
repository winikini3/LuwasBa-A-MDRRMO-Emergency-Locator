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
      <th scope="col">Emergency Number</th>
      <th scope="col">Emergency Type</th>
      <th scope="col">Full Name</th>
      <th scope="col">Emergency Description</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Date</th>
      <th scope="col">Emergency Location</th>
      <th scope="col">Live Pictures</th>
      <th scope="col">GPS Location</th>
    </tr>
  </thead>
				<?php
					$i=1;
					$row = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id DESC");
				?>
				<?php foreach($row as $row):?>
			  <tbody class="table-group-divider">
				<tr>
					<td><?php echo $row["id"]; ?></td> 
					<td><?php echo $row["emer_type"]; ?></td> 
					<td><?php echo $row["name"]; ?></td> 
					<td><?php echo $row["emer_des"]; ?></td> 
					<td><?php echo $row["mob_no"]; ?></td> 
					<td><?php echo $row["date"]; ?></td>
					<td><?php echo $row["emer_loc"]; ?></td> 
					<td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
					<td style="width: 150px; height:150px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"];?>&hl=es;z=14&output=embed' style="width:100%; height:100%;"></td>  
				</tr>
			</tbody>
				<?php endforeach; ?>
			</table>
		</body>	
</html>