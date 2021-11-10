<?php
// Include config file
require_once "navigationbar.php"; 
 
// Define variables and initialize with empty values


$id=$firstname=$lastname=$Role=$salary=$JoinDate=$Image="";
$id_err=$firstname_err=$lastname_err=$Role_err=$salary_err=$JoinDate_err=$Image_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["id"]))){
        $username_err = "Please enter Employee ID.";
    } elseif(!preg_match('/^[0-9_]+$/', trim($_POST["id"]))){
        $username_err = "Employee ID can only contain  numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM employee WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            // Set parameters
            $param_id = trim($_POST["id"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $id_err = "This ID is already taken.";
                } else{
                    $id = trim($_POST["id"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter a first name.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["firstname"]))){
        $firstname_err = "first name can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM employee WHERE firstname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_firstname);
            
            // Set parameters
            $param_firstname = trim($_POST["firstname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $firstname_err = "This firstname is already taken.";
                } else{
                    $firstname = trim($_POST["firstname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
     if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter a last name.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["lastname"]))){
        $lastname_err = "last name can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM employee WHERE lastname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lastname);
            
            // Set parameters
            $param_lastname = trim($_POST["lastname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $lastname_err = "This lastname is already taken.";
                } else{
                    $lastname = trim($_POST["lastname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
   
    
    
    
    
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($firstname_err) && empty($lastname_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO employee (id ,firstname, lastname ,Role ,salary,JoinDate) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            
            $param_Role =trim($_POST["Role"]);
            $param_salary =trim($_POST["salary"]);
            $param_JoinDate=trim($_POST["JoinDate"]);
            $Role =trim($_POST["Role"]);
            $salary =trim($_POST["salary"]);
            $JoinDate=trim($_POST["JoinDate"]);
            
            mysqli_stmt_bind_param($stmt, "ssssss", $param_id, $param_firstname, $param_lastname,$param_Role ,$param_salary, $param_JoinDate);
            
            $param_id= $id;
            $param_firstname=$firstname;
            $param_lastname=$lastname;
            $param_Role =$Role;
            $param_salary =$salary;
            $param_JoinDate=$JoinDate;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: employees.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
<<<<<<< Updated upstream
=======
               
>>>>>>> Stashed changes
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<html>
<head>

    

</head>
<body>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        
    

<div style="text-align:center;">
<h2>New Employee Form</h2>
<p>Please enter the data of the new employee and then click on the Save button..</p>
</div>
<div class="container">
  <form action="newemployee.php" method="post">
   <div class="row">
    <div class="col-25">
      <label for="id">ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="id" name="id" 
             <?php
             if(!empty( $_GET['maxid']))
<<<<<<< Updated upstream
             echo "value= " . $_GET['maxid'];
             
             
             ?>
             
             
             

             disabled readonly>
=======
             echo "value= " . $_GET['maxid'];   
             ?>   Required>
>>>>>>> Stashed changes
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
<<<<<<< Updated upstream
      <input type="text" id="firstname" name="firstname" placeholder="enter the employee First name.." autofocus>
=======
      <input type="text" id="firstname" name="firstname" placeholder="enter the employee First name.." autofocus Required>
>>>>>>> Stashed changes
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
<<<<<<< Updated upstream
      <input type="text" id="lastname" name="lastname" placeholder="enter the employee last name..">
=======
      <input type="text" id="lastname" name="lastname" placeholder="enter the employee last name.." Required>
>>>>>>> Stashed changes
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Role</label>
    </div>
    <div class="col-75">
      <select id="Role" name="Role">
        <option value="admin">admin</option>
        <option value="employee">employee</option>
        <option value="volunteer">volunteer</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Salary</label>
    </div>
    <div class="col-75">
<<<<<<< Updated upstream
      <input type="number" id="salary" name="salary" placeholder="Enter the salary amount..">
=======
      <input type="number" id="salary" name="salary" placeholder="Enter the salary amount.." Required>
>>>>>>> Stashed changes
    </div>
  </div>
      <div class="row">
    <div class="col-25">
      <label for="fname">Join Date</label>
    </div>
    <div class="col-75">
<<<<<<< Updated upstream
      <input type="datetime-local" id="JoinDate" name="JoinDate" placeholder="Enter the date the employee joined your company..">
=======
      <input type="datetime-local" id="JoinDate" name="JoinDate" VALUE="" placeholder="Enter the date the employee joined your company.." Required>
>>>>>>> Stashed changes
    </div>
  </div>
       <div class="row">
    <div class="col-25">
      <label for="fname">ِAdd Image</label>
    </div>
    <div class="col-75">
      <input type="file" id="image" name="image" placeholder="image file name..">
    </div>
  </div>
      
  <br>
  <div class="row">
    <input type="submit" value="seve">
  </div>
  </form>
</div>


    
    </div>
    
    <div class="footer">
  <h2>Footer</h2>
</div>
 
</body>
</html>