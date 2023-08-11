<?php
session_start();
require 'connection.php';
if(isset($_POST["submit"])){
		$emer_type=$_POST['emer_type'];
		$name=$_POST['name'];
		$emer_des=$_POST['emer_des'];
		$mob_no=$_POST['mob_no'];
		$time=$_POST['time'];
		$date=$_POST['date'];
		$emer_loc=$_POST['emer_loc'];
		$status=$_POST['status'];
		$status1=$_POST['status1'];
		$counter=$_POST['counter'];
		$latitude=$_POST["latitude"];
		$longitude=$_POST["longitude"];
  if($_FILES["image"]["error"] == 4){
    $_SESSION['flash_message1'] = "Image does not exist";
    echo "<div class='flash-message1 text-center bg-danger'>" . $_SESSION['flash_message1'] . "</div>";
  unset($_SESSION['flash_message1']);
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      $_SESSION['flash_message1'] = "Invalid image extension";
      echo "<div class='flash-message1 text-center bg-danger'>" . $_SESSION['flash_message1'] . "</div>";
  unset($_SESSION['flash_message1']);
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_data VALUES('', '$emer_type', '$name', '$emer_des', '$mob_no', '$time', '$date', '$emer_loc','$status','$status1','$counter', '$latitude', '$longitude', '$newImageName')";
      mysqli_query($conn, $query);
      $_SESSION['flash_message'] = "You have successfully submitted a form";
      header('Location: homepage.php');
      exit;
    }
  }
}
?>

<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial scale=1.0">
	<title>Request Emergency Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<style>
	.navbar_kin {
		margin-left:30px;
		margin-right:30px;
		font-family: 'Poppins', sans-serif;
}
	.bg_kin{
        background-color:  #1B3061;
	}
	.flash-message1 {
    position: fixed;
    top: 16%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 10px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    animation: fadeOut 5s forwards;
  }
  @keyframes fadeOut {
    0% { opacity: 1; }
    100% { opacity: 0; }
  }
</style>
<script>
  setTimeout(function() {
    $('.flash-message1').fadeOut();
  }, 5000);
</script>
		<body onload="getLocation();" class="bg_kin">
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
<!-- End Header -->
<div class='container mt-2' style="font-family: 'Poppins', sans-serif;"> 
	<div class="alert alert-success" role="alert">
  		<h4 class="alert-heading">Request Rescue!</h4>
  		<p>Please Input the Necessary Information</p>
  			<div class="row">
  				<div class="card">
  					<div class="card-header">
  						<h4>Request Rescue Here
  						<a href="homepage.php" class="btn btn-danger float-end">BACK</a>
  						</h4>
  					</div>

			<form class="myForm row g-3" action="" method="post" autocomplete="off" enctype="multipart/form-data">
			 <div class="col-md-6">
  				<i class="fa fa-user icon"></i>
 				<label for="inputState" class="form-label"><b>Emergency Type</b></label>
   				<select id="inputState" class="form-select" name='emer_type'>
   				<option value=""></option>
          <option  value="Health Related Accident" >Health Related Accident</option>
 				<option  value="Crime Related Accident" >Crime Related Accident</option>
 				<option  value="Natural Made Related Accident" >Natural Related Accident</option>
 				<option  value="Vehicular Related Accident" >Vehicular Related Accident</option>
    			</select>
 			 </div>
			  <div class="col-md-6">
			  	<i class="fa fa-user icon"></i>
			    <label for="inputPassword4" class="form-label"><b>Date</b></label>
			    <input type="date" class="form-control" id="inputPassword4" name='date' placeholder="yyyy-mm-dd">
			  </div>
    <div class="col-md-6">
    	<i class="fa fa-user icon"></i>
    <label for="inputfname" class="form-label"><b>Full Name</b></label>
    <input type="text" class="form-control" id="inputfname" name='name' placeholder="Full Name">
  </div>
      <div class="col-md-6">
  	<i class="fa fa-user icon"></i>
    <label for="inputlname" class="form-label"><b>Time</b></label>
    <input type="time" class="form-control" id="inputlname" name='time' placeholder="H-M-S">
  </div>
    <div class="col-md-6">
  	<i class="fa fa-user icon"></i>
    <label for="inputlname" class="form-label"><b>Live Files</b></label>
    <input type="file" class="form-control" id="inputlname" name='image' accept=".jpg, .jpeg, .png">
  </div>
      <div class="col-md-6">
    <i class="fa fa-user icon"></i>
    <label for="inputfname" class="form-label"><b>Emergency Description</b></label>
    <input type="text" class="form-control" id="inputfname" name='emer_des' placeholder="Description">
  </div>
			 <div class="col-md-6">
  				<i class="fa fa-user icon"></i>
 				<label for="inputState" class="form-label"><b>Emergency Location</b></label>
   				<select id="inputState" class="form-select" name='emer_loc'>
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
 			 </div>
  <div class="col-md-6">
    <i class="fa fa-user icon"></i>
    <label for="inputfname" class="form-label"><b>Mobile Number</b></label>
    <input type="text" class="form-control" id="inputfname" name='mob_no' value="+639">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name='submit'>Request Rescue</button>
  </div>
  			<input type="hidden" name="status" required value="Pending">
  			<input type="hidden" name="status1" required value="On-Going">
  			<input type="hidden" name="counter" required value="counters">
			<input type="hidden" name="latitude" required value=" "> 
			<input type="hidden" name="longitude" required value=" "> 
				</form>
			</form>
				</div>
			</div>
	</div>
</div>			
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
		</body>	
</html>