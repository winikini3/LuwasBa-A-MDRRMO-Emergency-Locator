<?php
require_once("connection.php");
$current_date = date("Y-m-d");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT COUNT(*) as count FROM tb_data WHERE status='Accepted' AND DATE(date) = '$current_date'";
$query = $conn->query($sql);

$row = $query->fetch_assoc();
echo  $row["count"];

?>
