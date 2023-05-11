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
    <style>
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .table1{
            text-align: center;
            margin-top: 190px;
            margin-left:  500px;
        }
        table {
            width:20%;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        td {
            padding: 3px;
            height: 10px;
        }
        h2 {
            margin-left: 500px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .text {
            color: red;
        }
        
        

    </style>
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Hyphinx Store!! <hr></h1>
    <form action="" method="get">
        <table class="table1">
            <tr>
                <td colspan="2" align="left"><h3>Please Enter Your Username:</td>
            </tr>
            <tr>
                <td><input type="text" name="username" id="user" ></td>
                <td><input type="submit" value="submit" ></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['username'])){

            
            $_SESSION['username'] = $_GET['username'];
            $user = trim($_SESSION['username']);
            if (empty($user)){
                echo '<br<br><h2 class="text"><i>Please Input your Username<i></h2>';
            }
            else {
            echo "<script> window.location.href='index.php'</script>";
        }
    }
   
   ?>
</body>
</html>