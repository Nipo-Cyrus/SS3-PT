<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional Statements </title>
</head>
<body>
  
<?php
$subtotal = 0; 
$value =  6;  

//Enter an integer between 1 and 10
for ($i = 1; $subtotal <= 100; $i++) {
   $subtotal = $subtotal + $value ; 
    echo "Subtotal: " . $subtotal . "<br>";
    if ($subtotal > 100) {
        echo "Previous subtotal: " . ($subtotal - $value) ;
    }
}
?>

</body>
</html> 