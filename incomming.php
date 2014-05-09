<?php

$allgood = 1;

if (!empty($_GET['number']))
    $number = $_GET["number"];
else
    $allgood = 0;

if (!empty($_GET['message']))
    $explodedmsg = explode(" ", $_GET["message"]);
else
    $allgood = 0;

if (!empty($_GET['network']))
    $network = $_GET["network"];
else
    $allgood = 0;
    
if(count($explodedmsg) < 2)
    $allgood = 0;
    else
{    
    $message = implode(" ",array_slice($explodedmsg, 2));
}    


if($allgood)
{
    // Create connection
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        echo "getting user". $explodedmsg[1] . "<p>";
        
        $user_result = mysqli_query($con,"SELECT * FROM users where username='". $explodedmsg[1] ."'");
        
        echo "rows ". mysqli_num_rows($user_result);
        if(!$user_result)
            echo "Database error<p>";
        else if(!mysqli_num_rows($user_result))
            echo "User not found<p>";
        else
        {
             $user_result  = mysqli_fetch_array($user_result);
             /*
             echo $user_result['id'] ."<p>";
             echo $user_result['username'] ."<p>";
             echo $user_result['name'] ."<p>";
             echo $user_result['number'] ."<p>";
             echo $user_result['branch'] ."<p>";
            */
            echo "Saving message to DB<p>";
            
            $insertstr = "INSERT INTO incoming (user, message, sender, network) VALUES ('".
                                                                                            $user_result['username']."', '".
                                                                                            $message."','".
                                                                                            $number."','".
                                                                                            $network."')";
            echo $insertstr ."<p>";
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
            }
            else
            {
                echo "inserting";
                $insertresult = mysqli_query($con, $insertstr);
                
                if(!$insertresult)
                {
                   // echo "Error";
                    die('Error: ' . mysqli_error($con));
                }
                else
                {
                    echo "Insert done";
                }
            }
        }
     
        
        
    }
    /*
    mysqli_query($con,"INSERT INTO incoming (FirstName, LastName, Age)
    VALUES ('Peter', 'Griffin',35)");
    
    }
    */

}  
else
{
    echo "Incorrect data.";
}  


?>