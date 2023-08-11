<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'userlogin_reg');

if(isset($_POST['deletedata']))
{
    $id1 = $_POST['delete_id'];

    $query = "DELETE FROM tb_data WHERE id='$id1'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:emergency_history.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>