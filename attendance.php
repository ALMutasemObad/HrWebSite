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
      
    


 $sql2 = "SELECT empID, time FROM attendance WHERE logType=1 and date= current_date() and empID=".$row["id"];
        
        $result2 = $link->query($sql2);

if ($result2->num_rows ==0) {
         echo ' <a href="attandanceF.php?id='. $row["id"].'&type=1" style="background-color: #008CBA;"  class="button">presence </a></td> <td> ';
                } 
      else if ($result2->num_rows >0){  while($row1 = $result2->fetch_assoc()) {                   
                   echo ' <a  href="attandanceF.php?id='. $row["id"].'&type=3 &logtype=1" style="background-color: #00ff00;"  class="button">Present at '.$row1["time"].' </a></td> <td> ';
      }
                }else{
                echo "Oops! Something went wrong. Please try again later.";
            

            // Close statement
            mysqli_stmt_close($stmt);
        }

   $sql3 = "SELECT empID, time FROM attendance WHERE logType=2 and date= current_date() and empID=".$row["id"];
        
        $result3 = $link->query($sql3);

if ($result3->num_rows ==0) {

    echo ' <a href="attandanceF.php?id='. $row["id"].'&type=2" style="background-color: #7c4b15cf;"   class="button">leave  </a></td>  </tr>';
     } 
      else if ($result3->num_rows >0){  while($row3 = $result3->fetch_assoc()) {                   
                   echo ' <a  href="attandanceF.php?id='. $row["id"].'&type=3 &logtype=2" style="background-color: #EECD15;"  class="button">left at '.$row3["time"].' </a></td> <td> ';
      }
                }else{
                echo "Oops! Something went wrong. Please try again later.";
            

            // Close statement
            mysqli_stmt_close($stmt);
        }
  
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
