<?php 
// Create the Functions that is needed for the program
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style text/css>
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Hyphinx Cafe</h1>
    <hr>
    <center> <br><br>
    <form action="" method="post">
  <fieldset>
    <legend align="center"></legend>
    <p>
      <label>
        <input type="checkbox" name="order[]" value="Cappuccino">
        Cappuccino ($2.00)
        <input type="number" name="quantity[]" value="" min="0">
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="order[]" value="Espresso">
        Espresso ($2.25)
        <input type="number" name="quantity[]" value="" min="0">

      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="order[]" value="Latte">
        Latte ($1.75)
        <input type="number" name="quantity[]" value="" min="0">
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="order[]" value="Iced Cappuccino">
        Iced Cappuccino ($2.50)
        <input type="number" name="quantity[]"  min="0" value="">
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="order[]" value="Iced Latte">
        Iced Latte ($2.50)
        <input type="number" name="quantity[]" value="" min="0">
      </label>
    </p>
  
    <p>
      <label>
      <select name="dine-in-or-take-out" required>
      <option disabled selected value> -- select an option -- </option>
  <option name="dine-in" value="Dine-in">Dine-in</option >
  <option name="take-out" value="Take-out">Take-out</option>
</select>
      </label>
    </p>
    <p>
      <button type="submit">Calculate Total</button>
    </p>
  </fieldset>

</center>
<?php

// Define the price list
$priceList = array(
  "Cappuccino" => 2.00,
  "Espresso" => 2.25,
  "Latte" => 1.75,
  "Iced Cappuccino" => 2.50,
  "Iced Latte" => 2.50
);

// Define a function to get the selected orders
function getSelectedOrders() {
  $selectedOrders = array();
  if (isset($_POST["order"])) {
    foreach ($_POST["order"] as $order) {
      $selectedOrders[] = $order;
    }
  }
  return $selectedOrders;
}

// Define a function to get the quantities of the selected orders
function getQuantities() {
  $quantities = array();
  if (isset($_POST["quantity"])) {
    foreach ($_POST["quantity"] as $quantity) {
      $quantities[] = (int)$quantity;
    }
  }
  return $quantities;
}

// Define a function to check if the customer wants to dine in or take out
function getDineInOrTakeOut() {
  if (isset($_POST["dine-in-or-take-out"])) {
    return $_POST["dine-in-or-take-out"];
  } else {
    return null;
  }
}
// Define a function to calculate the total amount due
function calculateTotalAmount() {
  global $priceList;
  $selectedOrders = getSelectedOrders();
  $quantities = getQuantities();
  $dineInOrTakeOut = getDineInOrTakeOut();
  $totalAmount = 0;
  for ($i = 0; $i < count($selectedOrders); $i++) {
    $selectedOrder = $selectedOrders[$i];
    $quantity = $quantities[$i];
    $price = $priceList[$selectedOrder];
    $totalAmount += $quantity * $price;
  }
  if ($dineInOrTakeOut === "Take-out") {
    $tax = $totalAmount * 0.12;
    $totalAmount += $tax;
  }
  return number_format($totalAmount, 2);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $totalAmount = calculateTotalAmount();
  echo "<p>Total amount due: $" . $totalAmount . "</p>";

}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



</body>
</html>