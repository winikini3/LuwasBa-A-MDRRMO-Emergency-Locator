<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'userlogin_reg');

if(isset($_POST['geodata']))
{
	 $id1 = $_POST['geo_id1'];
$query = "SELECT * FROM tb_data WHERE id='$id1'";

if ($result = $connection->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["latitude"];
        $field2name = $row["longitude"];

        echo '<b>'.$field1name.','.$field2name.'</b>';
        echo '<div style="width: 1100px; height: 430px;"><iframe src="https://www.google.com/maps?q='.$field1name.','.$field2name.'&hl=es;z=14&output=embed" style="width:100%; height:100%"></div>';
    }

/*freeresultset*/
$result->free();
}
}
?>