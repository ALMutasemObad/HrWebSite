<?php require_once "config.php";

<<<<<<< Updated upstream


 $sql = "INSERT INTO attendance(empID, date, logType) VALUES ( ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
             $param_id= $_GET["id"];
            $param_firstname=$_GET["type"];
            $param_lastname=date("Y/m/d");
=======
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
            
>>>>>>> Stashed changes
            
      
            
            
<<<<<<< Updated upstream
            mysqli_stmt_bind_param($stmt, "sss", $param_id, $param_firstname, $param_lastname);
            
            $param_id= $_GET["id"];
            $param_firstname= date("Y/m/d");
            $param_lastname=$_GET["type"];
=======
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            $param_id= $_GET["id"];
           
          
>>>>>>> Stashed changes
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:attendance.php");
<<<<<<< Updated upstream
=======
               
>>>>>>> Stashed changes
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
              mysqli_stmt_close($stmt);
        }

<<<<<<< Updated upstream

=======
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
>>>>>>> Stashed changes



?>
 
