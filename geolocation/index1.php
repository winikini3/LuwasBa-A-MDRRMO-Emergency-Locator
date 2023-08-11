<?php
	require 'connection.php';

	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$latitude=$_POST["latitude"];
		$longitude=$_POST["longitude"];

		$query="INSERT INTO tb_data VALUES ('', '$name', '$email', '$latitude', '$longitude')";
		mysqli_query($conn, $query);

		echo
		"
			<script>alert('DATA ADDED SUCCESSFULLY');</script>
		"
		;
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert Me</title>
	</head>
		<body onload="getLocation();">
			<form class="myForm" action="" method="post" autocomplete="off">
			<label>Name</label>
			<input type="text" name="name" required value=""> <br>
			<label>Email</label>
			<input type="email" name="email" required value=""> <br>
			<input type="hidden" name="latitude" required value=" "> 
			<input type="hidden" name="longitude" required value=" "> <br>
			<button type="submit" name="submit">Submit</button>
			</form>
		<script type="text/javascript">
			function getLocation(){
				if(navigator.geolocation){
					navigator.geolocation.getCurrentPosition(showPosition, showError);
				} 
			}
			function showPosition(position){
				document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude; 
				document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
			}
			function showError(error){
				switch(error.code){
					case error.PERMISSION_DENIED:
					alert("You Must Allow The Request For geolocation to proceed");
					location.reload();	
					break;
				}
			}
		</script>
		<br>
		<a href="data.php">DATABASE PAGE</a>
		</body>	
</html>