<html>
<head>
   <?php require_once "navigationbar.php"; ?>

</head>
<body>
    
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        
        <br><br><br><br><br><br>
    <?php


$sql = "SELECT id, firstname, lastname  FROM employee";
$result = $link->query($sql);

if ($result->num_rows > 0) {

    echo"<table><tr><th>ID</th><th>Frst Name</th><th>Last Name</th> <th>salary</th></tr>";
  while($row = $result->fetch_assoc()) { 
  echo "<tr><td>". $row["id"]."</td> <td>".$row["firstname"]." ".$row["lastname"]."</td> <td>";
      
    


 $sql = "SELECT  empID FROM attendance WHERE logType= ? and date=? and empID=?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",$logType,$paramDate,$pramId );
            
            // Set parameters
            $logType=1;
           $pramId= $row["id"];
            $paramDate =  date("Y/m/d");
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) ==0 ){
         echo ' <a href="attandanceF.php?id='. $row["id"].'&type=1" style="background-color: #008CBA;"  class="button">presence </a></td> <td> ';
                } else{
                   echo ' <a href="attandanceF.php?id='. $row["id"].'&type=1" style="background-color: #00ff00;"  class="button">Present </a></td> <td> ';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

   

    echo ' <a href="attandanceF.php?id='. $row["id"].'&type=2" style="background-color: #7c4b15cf;"   class="button">leave  </a></td>  </tr>';
  
   $MaxID= $row["id"]+1;      
    }
    echo "</table>";
} 
        else {
  echo "0 results";
}
$link->close();
?>
    <div style="float:right;">  
        <a class="button"  <?php   echo 'href="newemployee.php?maxid='.$MaxID.'"'; ?>>Add New Employee</a></div>
    
    </div>
    
    <div class="footer">
  <h2>Footer</h2>
</div>
    </body>
