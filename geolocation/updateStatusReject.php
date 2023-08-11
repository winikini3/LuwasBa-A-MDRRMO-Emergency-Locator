<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'userlogin_reg');

if(isset($_POST['rejectdata']))
{
    $id = $_POST['reject_id'];

    $query = "UPDATE tb_data SET status='Rejected'  WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:data - Copy.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>