<?php
session_start();
if (isset($_SESSION['flash_message'])) {
  echo "<div class='flash-message text-center bg-success'>" . $_SESSION['flash_message'] . "</div>";
  unset($_SESSION['flash_message']);
}
?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial scale=1.0">
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="css2/bootstrap_css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
</head>
<style>

 .flash-message {
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
    font-size: 47px;
    margin-right: -3500px;
    
  }
}
	.post_kin{
		  float: left;
		  margin: -23 1.5%;
		  width: 63%;
	}

	.logo1{
		width:800px;
		height:500px;
		margin-left:500px;
		margin-top: 10px;
	}
	@media screen and (min-width: 601px) {
  .logo1 {
    width:800px;
		height:500px;
  }
}

@media screen and (max-width: 600px) {
  .logo1 {
    width:100px;
		height:500px;
    
  }
}
</style>
<script>
  setTimeout(function() {
    $('.flash-message').fadeOut();
  }, 5000);
</script>
<body class="bg_kin">
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
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
<img src="images/bgpic.png" alt="" class="logo1">
<!-- Start Body -->
<div style="margin-top: -470px; margin-left: 15px;" class="font_kin ">
	<div class="post_kin"><p>Luwas ba?:</p></div>
	<div class="post_kin"><p >A NDRRMO</p></div>
	<div class="post_kin"><p >EMERGENCY</p></div>
	<div class="post_kin"><p >LOCATOR</p></div>
</div>
<div style="color:white; margin-top: 280px; margin-left: 40px;">
	<div style="margin: 10 1.5%; width: 63%;"><p>How safe is your area?</p></div>
	<div style="margin: -20 1.5%; width: 63%;"><p >Are you having thoughts of walking on a certain street?</p></div>
	<div style="margin: -5 1.5%; width: 63%;"><p >Dont worry Luwas Ba? is here to help you contact incase of emergency</p></div>
</div>
<div>
	<button type="button" class="btn btn-warning btn-lg" style="margin-top: 20px; margin-left: 50px; box-shadow: -3px 8px #999; font-family: 'Poppins', sans-serif;"><a href="index - Copy.php" class="nav-item nav-link"><b style="font-size: 30px;">Report Emergency</b></a></button>
</div>




<!-- End Body -->

<!-- Start Footer -->







<!-- End Footer -->
</body>
</html>