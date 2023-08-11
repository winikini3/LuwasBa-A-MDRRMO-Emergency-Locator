<?php
require_once("connection.php");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT MONTH(date) as month, COUNT(*) as count FROM tb_data WHERE status='Accepted' GROUP BY MONTH(date)";
$query = $conn->query($sql);

if($row = $query->fetch_assoc()){
    echo   $row["count"] ;
}

?>