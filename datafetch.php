<?php

    //quries
    
  function foo()
  {
    $branchranking = "SELECT br.name, COUNT(*) as nods FROM incoming i INNER JOIN users u on i.user = u.username INNER JOIN branch br on u.branch = br.id INNER JOIN business bu on bu.id = br.businessid GROUP BY u.branch ORDER BY COUNT(*) DESC";
   // echo $branchranking;
    
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        $rank_result = mysqli_query($con,$branchranking);
         
         echo "rowsDAAA ". mysqli_num_rows($rank_result);
         

         
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