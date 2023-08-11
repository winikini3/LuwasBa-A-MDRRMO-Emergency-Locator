<?php
    session_start();
    include_once('connection3.php');
 
    if(isset($_POST['edit'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $id = $_GET['id'];
            $email_user = $_POST['email_user'];
            $password = $_POST['password'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $position = $_POST['position'];
 
            $sql = "UPDATE user SET email_user = '$email_user', password = '$password', fname = '$fname' , lname = '$lname' , position = '$position'  WHERE id = '$id'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Member updated successfully' : 'Something went wrong. Cannot update member';
 
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
    }
    else{
        $_SESSION['message'] = 'Fill up edit form first';
    }
 
    header('location: Accountdata.php');
 
?>