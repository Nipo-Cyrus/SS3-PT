<?php 
      session_name('store');
      session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <a href="front.php">Login</a> |
    <a href="page1.php">Menu </a> |
    <a href="page2.php">Store</a> <br><br>
    <?php 
  
         $name = $_SESSION['username'];
        echo 'Welcome, ' . $name ;
    ?>
</body>
</html>