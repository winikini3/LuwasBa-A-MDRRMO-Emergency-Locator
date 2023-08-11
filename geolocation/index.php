<?php
require 'connection.php';
if(isset($_POST["submit"])){
 		$name = $_POST["name"];
  		$email=$_POST["email"];
		$latitude=$_POST["latitude"];
		$longitude=$_POST["longitude"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_data VALUES('', '$name', '$email', '$latitude', '$longitude', '$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'data.php';
      </script>
      ";
    }
  }
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert Me</title>
	</head>
		<body onload="getLocation();">
			<form class="myForm" action="" method="post" autocomplete="off" enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" name="name" required value=""> <br>
			<label>Email</label>
			<input type="email" name="email" required value=""> <br>
			<input type="hidden" name="latitude" required value=" "> 
			<input type="hidden" name="longitude" required value=" "> <br>
			<label for="image">Image : </label>
      		<input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
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