<html>
<head>
   <?php require_once "navigationbar.php"; ?>

</head>
<body>
    
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        
        <br><br><br><br><br><br>
    <?php
require_once "config.php";

$sql = "SELECT id, firstname, lastname , salary FROM employee";
$result = $link->query($sql);

if ($result->num_rows > 0) {

    echo"<table><tr><th>ID</th><th>Frst Name</th><th>Last Name</th> <th>salary</th></tr>";
  while($row = $result->fetch_assoc()) { 
  echo "<tr><td>". $row["id"]."</td> <td>".$row["firstname"]."</td> <td>".$row["lastname"]."</td> <td>".$row["salary"]."</td>  </tr>";
  
   $MaxID= $row["id"]+1;      
    }
    echo "</table>";
} else {
  echo "0 results";
}
$link->close();
?>
    <div style="float:right;">  
        <a class="button"  <?php  echo 'href="newemployee.php?id='.$MaxID.'"'; ?>>Add New Employee</a></div>
    
    </div>
    
    <div class="footer">
  <h2>Footer</h2>
</div>
    </body>
