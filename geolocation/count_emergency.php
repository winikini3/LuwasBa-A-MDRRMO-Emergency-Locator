    <?php

require_once("connection.php");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM tb_data WHERE status='Pending'";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>