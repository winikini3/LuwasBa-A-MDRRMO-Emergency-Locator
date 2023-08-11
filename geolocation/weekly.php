<?php
require_once("connection.php");
$current_week = date("W");

if (!$conn) {
    die("Connection Failed");
}

$sql = "SELECT COUNT(*) as count FROM tb_data WHERE status='Accepted' AND WEEK(date) = '$current_week'";
$query = $conn->query($sql);

$row = $query->fetch_assoc();
echo $row["count"];
?>
