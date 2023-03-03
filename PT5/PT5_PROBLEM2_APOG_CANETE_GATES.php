<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
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