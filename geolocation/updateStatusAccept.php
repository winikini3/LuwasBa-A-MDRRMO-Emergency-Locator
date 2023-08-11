<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'userlogin_reg');

if(isset($_POST['updatedata']))
{
    $id = $_POST['update_id'];

    $query = "UPDATE tb_data SET status='Accepted'  WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);


}
header('location: data - Copy.php');
?>