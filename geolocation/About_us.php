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
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
</head>
<style>
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
		font-size:20px;
		
		margin-top:30px;
	}
	.post_kin{
		  float: left;
		  margin: -23 1.5%;
		  width: 63%;
	}

      .kin {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      h1, p {
        text-align: center;
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
<!-- End Header -->

<div>
      <div class=" font_kin"><h1>About Us</h1></div>
      <div class=" font_kin"><p>We are a team of dedicated professionals committed to providing reliable and accurate information on the location of emergency response units in the Municipality of Argao, Philippines.</p></div>
      <div class=" font_kin"><p>At Luwas Ba? A MDRRMO Emergency Locator, we understand the importance of quick and efficient emergency response. That's why we have developed a comprehensive database of emergency response units and their locations, allowing you to easily find the help you need in times of crisis.</p></div>
      <div class=" font_kin"><p>Our team is constantly updating and maintaining our database to ensure that the information we provide is accurate and up-to-date. We also have a dedicated support team available to assist you with any questions or concerns you may have.</p></div>
      <div class=" font_kin"><p>Thank you for choosing Luwas Ba? A MDRRMO Emergency Locator. We hope that our services can help you stay safe and secure in times of emergency.</p></div>
</div>

<!-- End Body -->

<!-- Start Footer -->













<!-- End Footer -->
</body>
</html>