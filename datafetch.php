<?php

    //quries
    
function getNodRankForBranch($branch)
  {
    $nodRank = "SELECT u.username, u.name, COUNT(*) as nods FROM users u INNER JOIN incoming i ON i.user = u.username WHERE u.branch = ". $branch ." GROUP BY u.username, u.name ORDER BY COUNT(*) DESC LIMIT 1";
   
  
   // echo $branchranking;
    
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        $nodrank_result = mysqli_query($con,$nodRank);
         
         //echo "rowsDAAA ". mysqli_num_rows($nodrank_result);
         

         
         if(!$nodrank_result)
            echo "Database error<p>";
        else if(!mysqli_num_rows($nodrank_result))
            echo "No resultsot found<p>";
        else
        {
            //echo '<table style= "width:300px">';
            
            while ($row = mysqli_fetch_assoc($nodrank_result)) {
                  echo "<tr><td>". $row['name']. "</td><td>". $row['nods'] ."</td></tr>";
            }
            //echo "</table>";
            
        }  
    }   
  }
  
  function getBranchRank()
  {
    $branchranking = "SELECT br.name, COUNT(*) as nods FROM incoming i INNER JOIN users u on i.user = u.username INNER JOIN branch br on u.branch = br.id INNER JOIN business bu on bu.id = br.businessid WHERE bu.id = 1 GROUP BY u.branch ORDER BY COUNT(*) DESC";
   // echo $branchranking;
    
    $con=mysqli_connect("127.3.124.2","adminX8wp3r5","NSQp-43aGVXv","nod");
    
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<p>";
    }
    else 
    {
        $rank_result = mysqli_query($con,$branchranking);
         
         //echo "rowsDAAA ". mysqli_num_rows($rank_result);
         

         
         if(!$rank_result)
            echo "Database error<p>";
        else if(!mysqli_num_rows($rank_result))
            echo "No resultsot found<p>";
        else
        {
            //echo '<table style= "width:300px">';
            
            while ($row = mysqli_fetch_assoc($rank_result)) {
                  echo "<tr><td>". $row['name']. "</td><td align='center'>". $row['nods'] ."</td></tr>";
            }
            //echo "</table>";
            
        }  
    }   
  }
?>