<?php require_once "config.php";

if ($_GET["type"]==1){

 $sql = "INSERT INTO attendance(empID, date, time, logType) VALUES ( ?, current_date(),CURRENT_TIME(), 1)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
      
            
            
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            $param_id= $_GET["id"];
           
            
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:attendance.php");
               
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }

}
else if ($_GET["type"]==2){

 $sql = "INSERT INTO attendance(empID, date, time, logType) VALUES ( ?, current_date(),CURRENT_TIME(), 2)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
      
            
            
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            $param_id= $_GET["id"];
           
          
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:attendance.php");
               
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }

}
else if ($_GET["type"]==3){

 $sql = "DELETE FROM `attendance` WHERE `empID`=? and`date`= current_date() and `logType`=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
      
            
            
            mysqli_stmt_bind_param($stmt, "ss", $param_id, $param_logType);
            
            $param_id= $_GET["id"];
            
            $param_logType= $_GET["logtype"];
           
          
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:attendance.php");
              
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }

}



?>
 
