// Send an SMS using Twilio's REST API and PHP
<?php
$sid = "ACb7137c693d1695cfefd03096ed1dd041"; // Your Account SID from www.twilio.com/console
$token = "0e5b87427ecd6e9d6a0d81757af6bc22
"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '+639503409419', // Text this number
  [
    'from' => '+18507559540', // From a valid Twilio number
    'body' => 'Hello from Twilio!'
  ]
);

print $message->sid;