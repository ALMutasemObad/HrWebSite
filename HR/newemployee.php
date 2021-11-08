<html>
<head>
   <?php require_once "navigationbar.php"; ?>
    

</head>
<body>
 <?php require_once "header.php ";?>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        
     


<h2>New Employee Form</h2>
<p>Please enter the data of the new employee and then click on the Save button..</p>

<div class="container">
  <form action="/employees.php">
   <div class="row">
    <div class="col-25">
      <label for="id">ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="id" name="firstname" 
             <?php echo "value= " . $_GET['id'];?> disabled readonly>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="enter the employee First name.." autofocus>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="enter the employee last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Role</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="admin">admin</option>
        <option value="employee">employee</option>
        <option value="volunteer">volunteer</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname"Salary</label>
    </div>
    <div class="col-75">
      <input type="number" id="fname" name="firstname" placeholder="Enter the salary amount..">
    </div>
  </div>
      <div class="row">
    <div class="col-25">
      <label for="fname">Join Date</label>
    </div>
    <div class="col-75">
      <input type="datetime-local" id="fname" name="firstname" placeholder="Enter the date the employee joined your company..">
    </div>
  </div>
       <div class="row">
    <div class="col-25">
      <label for="fname">ِAdd Image</label>
    </div>
    <div class="col-75">
      <input type="file" id="fname" name="firstname" placeholder="Your name..">
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