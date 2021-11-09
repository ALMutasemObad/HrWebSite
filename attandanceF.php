<?php require_once "config.php";



 $sql = "INSERT INTO attendance(empID, date, logType) VALUES ( ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
             $param_id= $_GET["id"];
            $param_firstname=$_GET["type"];
            $param_lastname=date("Y/m/d");
            
      
            
            
            mysqli_stmt_bind_param($stmt, "sss", $param_id, $param_firstname, $param_lastname);
            
            $param_id= $_GET["id"];
            $param_firstname= date("Y/m/d");
            $param_lastname=$_GET["type"];
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:attendance.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }





?>
 
