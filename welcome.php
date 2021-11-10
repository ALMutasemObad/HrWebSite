<?php require_once "navigationbar.php"; ?>
 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

</head>
<body >
    
   
     
    <div style="margin-left:25%;padding:1px 16px;height:1000px;text-align: center;">
        <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
    <h1 >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to My demo website.</h1>
    <p>
        
        <a href="logout.php" class="button">Sign Out of Your Account</a>
        </p></div>
        
</body>
</html>