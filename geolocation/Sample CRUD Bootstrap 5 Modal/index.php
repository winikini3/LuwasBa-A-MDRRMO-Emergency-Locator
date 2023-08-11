//index.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP PDO CRUD (Create Read Update and Delete) with Bootstrap 5 Modall</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">PHP PDO CRUD (Create Read Update and Delete) with Bootstrap 5 Modal</h1>
    <div class="row">
        <div class="col-12">
        	<div class="col-12">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew">
			  Add New
			</button>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>Id</th>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>Email</th>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>Password</th>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>First Name</th>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>Last Name</th>
      <th scope="col" style="color:  #1B3061; width:150px;"><b>Position</th>
                </thead>
                <tbody>
                    <?php
                        include_once('connection.php');
 
                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM user';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td> 
									<td><?php echo $row["email_user"]; ?></td> 
									<td><?php echo $row["password"]; ?></td> 
									<td><?php echo $row["fname"]; ?></td> 
									<td><?php echo $row["lname"]; ?></td> 
									<td><?php echo $row["position"]; ?></td> 
                                    <td>
                                        <a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"> Edit</a>
                                        <a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"> Delete</a>
                                    </td>
                                    <?php include('edit_delete_modal.php'); ?>
                                </tr>
                                <?php 
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }
 
                        //close connection
                        $database->close();
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>