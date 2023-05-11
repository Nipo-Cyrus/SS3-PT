<?php 
      session_name('store');
      session_start();
      include('includes/style.php');
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <ul>
  
  <?php 
    $user = $_SESSION['username'];
      if (empty($user)){
       echo "<script> window.location.href='front.php'</script>";
        }
        echo '<li id = "user"><strong> User: '.  $user . '</strong></li>'; 
   ?>
      <li id = "right"><a href="front.php">Log Out</a></li>
  </ul>
  <body>
  <?php $user = $_SESSION['username']; if (empty($user)){ echo "<script> window.location.href='front.php'</script>"; } 
  $ordertype = $_SESSION["ordertype"]; 
  $receipt = $_SESSION["receipt"]; 
  $totalAmount = $_SESSION["totalAmount"]; 

  echo '<center>'; 
  echo '<h1 >Hyphinx Cafe Receipt</h1>'; 
  echo $receipt; 
  echo '<tr><td colspan="3" align="right">Order Type: </td><td align="center">' . $ordertype . '</td></tr>';  
  echo '<tr><td colspan="3" align="right">Total Amount: </td><td align="center">$' . $totalAmount . '</td></tr> </table>';
  echo '<h2>Thank you for your Purchase, &nbsp;<i class="sddw">' . $user . '</i></h2>'; 
  echo '<form method="" action="page1.php">
  <button type="tp" id = "order">Order Again?</button>
</form>'

  ?>
  <?php
  session_unset();
  session_destroy();
  ?>


<body> 
</html>