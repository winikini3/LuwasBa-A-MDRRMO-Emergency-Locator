<!DOCTYPE html>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='userlogin_reg';
$conn=mysqli_connect($servername, $username, $password, $dbname);
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
<style>
	.navbar_kin {
		margin-left:30px;
		margin-right:30px;
		font-family: 'Poppins', sans-serif;
}
	.bg_kin{
        background-color:  #1B3061;
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
                <button type="button" class="btn btn-warning  btn-xs"><a href="#" class="nav-item nav-link navbar_kin">Admin</a></button>
            </div>
        </div>
    </div>
</nav>
<!-- End Header -->
<div class='container mt-5'style="font-family: 'Poppins', sans-serif;">
	<div class='row'> 
	<div class='col-lg-4' ></div> 
	<div class='col-lg-4'style="border-style: inset; background-color: white; border-radius:10px; padding-top:20px;">
		<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Admin Log-in Here</h4>
  <p>Please Login your credentials</p>
</div>
<?php
if(isset($_POST['login']))
{
	$email_user=$_POST['email_user'];
	$password=$_POST['password'];
	$query='SELECT email_user, password FROM user WHERE email_user=? AND password=?';
	$stmt=mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, 'ss', $email_user, $password);
	mysqli_stmt_execute($stmt);
	if(mysqli_stmt_fetch($stmt))
	{
		echo "<script type='text/javascript'>window.location.href='Adminpage.php';</script>";
	}
	else
	{
	echo '<div class="alert alert-danger" role="alert">
  		Wrong Password!
		</div>';
	}
}
?>
		<form class="px-4 py-3" method='POST'>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name='email_user'>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name='password'>
    </div>
    <button type="submit" class="btn btn-primary" name='login'>Sign in</button>
  </form>


 </div>
	</div> 
</div>


</body>
</html>