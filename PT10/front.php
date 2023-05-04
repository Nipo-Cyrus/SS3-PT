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
    <form action="" method="get">
    <input type="text" name="username" id="user" >
    <input type="submit" value="submit" >

    </form>
    <?php
        if(isset($_GET['username'])){
            $_SESSION['username'] = $_GET['username'];
            echo "<script> window.location.href='page1.php'</script>";
        }
    
    ?>
</body>
</html>