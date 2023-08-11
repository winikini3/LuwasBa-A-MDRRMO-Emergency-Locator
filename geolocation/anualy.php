<?php
require_once("connection.php");
$current_year = date("Y");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT COUNT(*) as count FROM tb_data WHERE status='Accepted' AND YEAR(date) = $current_year";
$query = $conn->query($sql);

$row = $query->fetch_assoc();
echo  $row["count"];

?>
