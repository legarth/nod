<?php

    //quries
    $branchranking ="SELECT br.name, COUNT(*) as nods FROM incoming i INNER JOIN users u on i.user = u.username INNER JOIN branch br on u.branch = br.id
INNER JOIN business bu on bu.id = br.businessid WHERE bu.id = 1 GROUP BY u.branch ORDER BY COUNT(*) DESC";
  function foo()
  {
      
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        echo "fetching";
        $rank_result = mysqli_query($con,$branchranking);
         
         echo "rowsDAAA ". mysqli_num_rows($rank_result);
         
            if(!$rank_result)
            {
               // echo "Error";
                die('Error: ' . mysqli_error($con));
            }
         
         
         if(!$rank_result)
            echo "Database error<p>";
        else if(!mysqli_num_rows($rank_result))
            echo "No resultsot found<p>";
        else
        {
            
        }  
    }   
  }
?>