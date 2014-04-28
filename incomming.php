<?php

$number = $_GET["number"];
$explodedmsg = explode(" ", $_GET["message"]);
$network = $_GET["network"];



// Create connection
$con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
    echo "getting user". $explodedmsg[1];
    $user_result = mysqli_query($con,"SELECT * FROM users where username='". $explodedmsg[1] ."'");
    
    var_dump($user_result);
    
    
}
/*
mysqli_query($con,"INSERT INTO incoming (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");
*/
}
?>