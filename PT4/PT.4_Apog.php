<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
    <style>
      .instruction{color:#d41919}
      .bg-color {background-color: lightblue;}
      td {
        text-align: center;
        color : #d41919;
        }
      table {margin: auto;}
      th {
        text-align: center;
        color :#164754;
        }
    </style>
        <title>CD Store</title>
</head>
<body class="bg-color">
  
<?php
echo "<center><h1>CD Store ni Apog</h1></center>";
echo "<table border='1' width='80%'>"
    . "<tr>"
    . "<th>CD's Bought</th>"
    . "<th>Discount</th>"
    . "<th>Partial Amount</th>"
    . "<th>Total Amount</th>"
    . "</tr>";

 $Cdbought = 120;
 $price = 10;
    
      if($Cdbought >= 120){
      $totalAmount = $Cdbought * $price;
      $discount =  $totalAmount * 0.10;
      $discountedAmount = $totalAmount - $discount;
      
      echo "<tr>"
      . "<td>" . $Cdbought  . "</td>"
      . "<td>" . $discount . "</td>"
      . "<td>" . number_format ($totalAmount)  . "</td>"
      . "<td>" . number_format ($discountedAmount) . "</td>"
       . "</tr>";
    }
    elseif($Cdbought >= 50 && $Cdbought <= 119){
      $totalAmount = $Cdbought * $price;
      $discount =  $totalAmount * 0.05;
      $discountedAmount = $totalAmount - $discount;
      
      echo "<tr>"
      . "<td>" . $Cdbought . "</td>"
      . "<td>" . $discount . "</td>"
      . "<td>" . number_format ($totalAmount) .  "</td>"
       . "<td>" . number_format ($discountedAmount) . "</td>"
      . "</tr>";
    } 
    elseif($Cdbought >= 15 && $Cdbought <= 49){
      $totalAmount = $Cdbought * $price;
      $discount =  $totalAmount * 0.01;
      $discountedAmount = $totalAmount - $discount;
      
      echo "<tr>"
      . "<td>" . $Cdbought ."</td>"
      . "<td>" . $discount . "</td>"
      . "<td>" . number_format ($totalAmount) . "</td>"
      . "<td>" . number_format ($discountedAmount) .  "</td>"
      . "</tr>";
    }
    
    elseif($Cdbought <= 14){
      $totalAmount = $Cdbought * $price;
      $discount =  $totalAmount * 0;
      $discountedAmount = $totalAmount - $discount;
      echo "<tr>"
      . "<td>" .$Cdbought ."</td>"
      . "<td>" . $discount ." </td>"
      . "<td>" . number_format ($totalAmount) ."</td>"
      . "<td>" .number_format ($discountedAmount). "</td>"
      . "</tr>";
    }
    echo "</table>";


?>
</body>
</html>
