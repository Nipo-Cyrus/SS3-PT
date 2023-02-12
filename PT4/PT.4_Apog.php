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
    </style>
        <title>CD Store</title>
</head>
<body class="bg-color">
   

   <?php
    echo '<div class="instruction">';
    echo "<p>If the Customer Bought 120 CDs or More</p>";
    echo "</div>";
  $cdBought = 120000;

    if($cdBought >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you for your Purchase.</p>";
      } 
        elseif ($cdBought >=50){
        echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong></p> Thank you for your Purchase.";    
    } 
        elseif ($cdBought >=15){
            echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
        } 
  
  
  echo "<br>";
  echo '<div class="instruction">';
  echo "<p>If the Customer bought 50 CDs or more:</div></p>"; 
    $cdBought2 = 60;
 
    if($cdBought2 >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you for your Purchase.</p>";
      } 
        elseif ($cdBought2 >=50){
        
            echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong> Thank you for your Purchase.</p>";    
    } 
        elseif ($cdBought2 >=15){
            echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
        } 
  
echo "<br>";
echo '<div class="instruction">';
echo "<p>If the Customer bought 15 CDs or more:</div></p>"; 
    $cdBought3 = 20;
       
            if($cdBought3 >=150){
              echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you for your Purchase.</p>";
            } 
              elseif ($cdBought3 >=50){
              
                  echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong> Thank you for your Purchase.</p>";    
          } 
              elseif ($cdBought3 >=15){
                  echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
              }
         else{
          echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
              } 
echo "<br>";
echo '<div class="instruction">';
echo "<p>If the Customer bought 14 CDs or Less:</div></p>"; 
    $cdBought4 = 10;
       
            if($cdBought4 >=150){
              echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you for your Purchase.</p>";
            } 
              elseif ($cdBought4 >=50){
              
                  echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong></p> Thank you for your Purchase.";    
          } 
              elseif ($cdBought4 >=15){
                  echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
              }
         else{
          echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
              } 
   
  
  ?>
 
