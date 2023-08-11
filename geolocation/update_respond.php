<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'userlogin_reg');

if(isset($_POST['rejectdata']))
{
    $id = $_POST['reject_id'];

    $query = "UPDATE tb_data SET status1='Responded'  WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

	$query1 = "SELECT * FROM tb_data WHERE id='$id'";

	if ($result = $connection->query($query1)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["mob_no"];


        $sid = "ACb7137c693d1695cfefd03096ed1dd041"; // Your Account SID from www.twilio.com/console
		$token = "0e5b87427ecd6e9d6a0d81757af6bc22
		"; // Your Auth Token from www.twilio.com/console

		require __DIR__ . '/vendor/autoload.php';
		$client = new Twilio\Rest\Client($sid, $token);
		$message = $client->messages->create(
		  $field1name, // Text this number
		  [
		    'from' => '+18507559540', // From a valid Twilio number
		    'body' => 'An Emergency Responder Is Coming!'
		  ]
		);
}
/*freeresultset*/
$result->free();
}
}
header('location: respond.php');
?>