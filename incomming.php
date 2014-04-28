<?php

$number = $_GET["number"];
$message = $_GET["message"];
$network = $_GET["network"];

echo "Number:" . $number;
echo "Message:" . $message;
echo "Network:" . $network;

// Create connection
$con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>