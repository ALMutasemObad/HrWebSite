<html>
<head>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    require_once "config.php ";
    require_once "header.php ";?>


<ul>
  <li style="text-align: center;">
      <img src="img/1.jpg" alt="Mutasem" style="width:50px ">
      <a href="logout.php"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Log Out</a>
    </li> 
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="employees.php">Employees</a></li>
  <li><a href="attendance.PHP">attendance</a></li>
  <li><a href="reset-password.php">change Password</a></li>
</ul>
    </body>

