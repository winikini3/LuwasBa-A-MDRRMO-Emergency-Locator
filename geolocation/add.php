
<?php
    session_start();
    include_once('connection3.php');
 
    if(isset($_POST['add'])){
        $database = new Connection();
        $db = $database->open();
        try{
            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("INSERT INTO user (email_user, password, fname, lname, position) VALUES (:email_user, :password, :fname, :lname, :position)");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':email_user' => $_POST['email_user'] , ':password' => $_POST['password'] , ':fname' => $_POST['fname'], ':lname' => $_POST['lname'], ':position' => $_POST['position'])) ) ? 'Member added successfully' : 'Something went wrong. Cannot add member';  
         
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
    }
 
    else{
        $_SESSION['message'] = 'Fill up add form first';
    }
 
    header('location: Accountdata.php');
     
?>