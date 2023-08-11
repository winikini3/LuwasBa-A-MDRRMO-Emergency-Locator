<?php require 'connection.php';?>
<?php
if(isset($_GET['search'])) {
  $search = $_GET['search'];
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
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">
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

.hidden {
    display: none;
}
.show {
    display: block;
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
<!-- Start Body -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="modal fade" id="geomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">GeoLocation Map</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times</span>
				</button>
			</div>
				<form action="location_code2.php" method="post">
					<div class="modal-body">
						<input type="hidden" name="geo_id" id="geo_id">
						<h4>Do you want to See this Data?</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">  NO</button>
						<button type="submit" name="geodata" class="btn btn-primary"> Yes! </button>
					</div>
				</form>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-right">
                <div class="btn-group">
   
                </div>
            </div>
        </div>
    </div> 
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 navbar_kin">
                        <h1 class="h1 mb-0 text-gray-800 font_kin" style="color:white; margin-left:-35px; margin-top:-20px;">Live Reports<span style="color:red;">!</span></h1>
                        <form action="search_grid.php" method="get" class="d-flex" style="margin-right:-40px; margin-top:10px;">
						      <select id="inputState" class="form-select" name='search' style="height:40px; margin-right:10px;">
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
						      <button class="btn btn-outline-success" type="submit" value="search" style="height:40px;">Search</button>
						      <a class="nav-link" href="archive.php">
                    			<i class="fa fa-folder fa-xs" title="Archive Reports" style="margin-top:-11px; color:white; font-size:50px; text-shadow: 6px 4px black;"></i></a>
						    </form>

                    </div>
    <div id="products" class="row view-group navbar_kin" style="margin-top:-5px;">
    	        		<?php
	$row = mysqli_query($conn, "SELECT * FROM tb_data WHERE status='Accepted' AND emer_loc = '$search' AND date = CURDATE() ORDER BY id DESC");
?>
<?php foreach($row as $row):?>
<div class="item col-xs-4 col-lg-4 mt-2 search-result">
    <div class="thumbnail card" style="background-color: #13205A; color:white;">
        <div class="img-event img-fluid object-fit- cover" style="padding-top:15px;">
            <a href="img/<?php echo $row["image"]; ?>" data-fancybox="images" data-caption="<a href='javascript:;' onclick='$.fancybox.close()' class='btn btn-danger'>Back</a>">
                <img class="img-fluid" src="img/<?php echo $row["image"]; ?>" alt="" style="width:100%; height:200px; object-fit:cover;"/>
            </a>
        </div>
        <div class="caption card-body">
            <h4 class="group card-title inner list-group-item-heading">
                <?php echo $row["emer_type"]; ?></h4>
            <h5 class="group card-title inner list-group-item-heading" style="font-size:15px;"><span style="color:grey;">Location:</span>
                <?php echo $row["emer_loc"]; ?></h5>
                        <div class="row">
                <div class="col-xs-12">
                    <p class="group inner list-group-item-text hidden" data-id="<?php echo $row["id"]; ?>" style="font-size:15px;" >
                        <span style="color:grey;">Description:</span> <?php echo $row["emer_des"]; ?></p>
                    <p class="group inner list-group-item-text hidden" data-id="<?php echo $row["id"]; ?>" style="font-size:15px;" >
                        <span style="color:grey;">Status:</span> <?php echo $row["status1"]; ?></p>
                        
                </div>
            </div>
            <p class="group inner list-group-item-text hidden" data-id="<?php echo $row["id"]; ?>" style="font-size:15px;"><span style="color:grey;">Date:</span> <?php echo $row["date"]; ?> <br><span style="color:grey;">Time:</span> <?php echo $row["time"]; ?></p>
            <button type="button" class="btn btn-outline-primary" id="see-more-<?php echo $row["id"]; ?>" onclick="toggleData(this.id)">See more</button>

        </div>
    </div>
</div>

<?php endforeach; ?>
<?php
  mysqli_close($conn);
}
?>
<script>
function toggleData(id) {
  var buttonId = id;
  var dataId = buttonId.split("-")[2];
  var hiddenElements = document.querySelectorAll("[data-id='" + dataId + "']");
  for (var i = 0; i < hiddenElements.length; i++) {
    hiddenElements[i].classList.toggle("show");
  }
}
</script>
<script>
  function searchData(){
    var searchValue = document.getElementById("searchField").value.toLowerCase();
    var dataItems = document.querySelectorAll(".data-item");
    var searchResults = "";
    dataItems.forEach(function(item) {
        if(item.getAttribute("data-date").toLowerCase().includes(searchValue) || item.getAttribute("data-loc").toLowerCase().includes(searchValue)) {
            searchResults += item.outerHTML;
        }
    });
    document.getElementById("search-result").innerHTML = searchResults;
  }
</script>





                <script> 

        $(document).ready(function () {

            $('.updatebtn').on('click', function () {

                $('#updatemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);

            });
        });

        $(document).ready(function () {

            $('.rejectbtn').on('click', function () {

                $('#rejectmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#reject_id').val(data[0]);

            });
        });

            $(document).ready(function () {

            $('.geobtn').on('click', function () {

                $('#geomodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#geo_id').val(data[0]);

            });
        });
</script>
</div>
     <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
<script>            
            $(document).ready(function () {

            $('.geobtn1').on('click', function () {

                $('#geomodal1').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#geo_id1').val(data[0]);

            });
        });
</script> 
<!-- End Body -->
<!-- Start Footer -->
<!-- End Footer -->
</body>
</html>