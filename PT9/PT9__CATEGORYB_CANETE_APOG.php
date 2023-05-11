<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Font for the Paragpraph */
    p { font-size: 20px;}
     
    
      /* Style checkboxes and number inputs */
input[type="checkbox"],
input[type="number"] {
  margin: 0;
  vertical-align: middle;
}

/* Style the what would you like to do text */
td[align="right"] {
  font-weight: bold;
  padding: 20px;
  border-top: 1px solid #ccc;
  text-align: right;
}

/* Style the dropdown choices */
select {
  padding: 10px;
  border-radius: 5px;
  border: none;
  width: 50%;
  font-size: 18px;
  margin: 20px 0;
  background-color: #f8f8f8;
  color: #333;
  border: 1px solid #ccc;
  appearance: none;
}

/* Style the button */
button[type="submit"] {
  background-color: #6fbd80;
  border: none;
  color: white;
  padding: 20px 30px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 15px;
  border-radius: 5px;
  cursor: pointer;
  margin: 30px 0;
  transition: background-color 0.3s ease-in-out;
  width: 50%;
}

/* Style button hover */
button[type="submit"]:hover {background-color: #4aa964;}
  
table {
  border-collapse: collapse;
  width: 50%;
  max-width: 800px;
  margin-top: 70px;
  background-color: #fff;
  border-radius: 5px;
  font-size: 18px;
  line-height: 1.5;
  overflow: hidden;
  box-shadow: 0 2px 10px #eabeb4;
}

/* Style table headers */
th {
  background-color: #f5deb3;
  font-weight: bold;
  text-align: left;
  padding: 20px;
  color: #333;
  text-transform: uppercase;
  letter-spacing: 1px;
  border-bottom: 1px solid #ccc;
}

/* Style table rows */
tr {
  border-bottom: 1px solid #ccc;
}

/* Style the first cell in each row */
td:first-child {
  font-weight: bold;
  padding: 20px;
}
/* add some additional changes to the parts that is lacking */
body {background-color: white;}      
h1 {text-align: center;}
hr { width: 80%;}
input[type="checkbox"] {margin-right: 10px;}
input[type="number"] { width: 50px; }
#style0 { width: 300px;  }  

form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
fieldset {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-width: 350px;
  width: 80%;
}
legend {
  text-align: center;
}
label {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 300px;
  margin-bottom: 10px;
}
         
#total-amount {           
  margin-top: 20px; 
  font-size: 1.2rem;
}  
/* css styling for a error message inside a table when no form inputted */
#table3 {
  color: red;
  font-size: 1.2rem;
  font-weight: bold;
  text-align: center;
  padding: 20px;
  border-top: 1px solid #ccc;
  text-align: right;
}
/* Margin for the Prices in the Reciept */
.receipt {
  margin-left: 60px;
}
.receipt1 {
  margin-left: 86px;
} 
.receipt2 {
  margin-left: 113px;
}
.receipt3 {
  margin-left: 24px;
}
.receipt4 {
  margin-left: 75px;
}
    </style>
</head>
<body>
    <h1>Hyphinx Cafe</h1>
    <hr><br><br>
    <form action="" method="post">
        <fieldset>
            <legend>Select your orders:</legend>
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
                    <input type="number" name="quantity[]" value="" min="0">
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
                    <select id="style0" name="dine-in-or-take-out" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option name="dine-in" value="Dine-in">Dine-in</option>
                        <option name="take-out" value="Take-out">Take-out</option>
                    </select>
                </label>
            </p>
            <p>
                <button id="style0" type="submit">Calculate Total</button>
            </p>
        </fieldset>
 <br><br>
</center>
<?php

$priceList = array(
  "Cappuccino" => 2.00,
  "Espresso" => 2.25,
  "Latte" => 1.75,
  "Iced Cappuccino" => 2.50,
  "Iced Latte" => 2.50
);

function getSelectedOrders() {
  $selectedOrders = array();
  if (isset($_POST["order"])) {
    foreach ($_POST["order"] as $order) {
      $selectedOrders[] = $order;
    }
  }
  if (empty($selectedOrders)) {
    return null;
  }
  return $selectedOrders;
}

function getQuantities() {
  $quantities = array();
  if (isset($_POST["quantity"])) {
    foreach ($_POST["quantity"] as $quantity) {
      $quantity = (int)$quantity;
      if ($quantity > 0) {
        $quantities[] = $quantity;
      }
    }
  }
  if (empty($quantities)) {
    $quantities = "0";
    return null;
  }
  return $quantities;
}

function getDineInOrTakeOut() {
  if (isset($_POST["dine-in-or-take-out"])) {
    return $_POST["dine-in-or-take-out"];
  } else {
    return null;  
  }
}

function calculateTotalAmount() {
  global $priceList;
  $selectedOrders = getSelectedOrders();
  $quantities = getQuantities();
  $dineInOrTakeOut = getDineInOrTakeOut();
  if (is_null($selectedOrders) || is_null($quantities)) {
    return null;
  }
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $totalAmount = calculateTotalAmount();
  $quantities = getQuantities();
  if (is_null($totalAmount) || is_null($quantities)) {
    echo '<table id="table3"><td><th><h5>Error: Please select at least one order and specify a quantity for each selected order.</h3></th></td></table>';
  } else {
    // create an echo where it will display the each quantity of each order and the total amount
echo '<table border="1" width="100%"><tr><th colspan="2"><i><h3 align="center">Thank you for your order!</h3></i></th></tr>';
echo '<tr><th><p>Order</p></th><th><p align="center">Quantity</p></th></tr>';
echo '<tr><td>Order Type</td><td align="center">' . (isset($_POST["dine-in-or-take-out"]) ? $_POST["dine-in-or-take-out"] : '') . '</td></tr>';	
echo '<tr><td>Cappuccino <b class="receipt">($2.00)</b></td><td align="center">' . (isset($quantities[0]) && $quantities[0] == 0 ? '0' : (isset($quantities[0]) ? $quantities[0] : '')) . '</td></tr>';
echo '<tr><td>Espresso <b class="receipt1">($2.25)</b></td><td align="center">' . (isset($quantities[1]) && $quantities[1] == 0 ? '0' : (isset($quantities[1]) ? $quantities[1] : '')) . '</td></tr>';
echo '<tr><td>Latte <b class="receipt2">($1.75)</b></td><td align="center">' . (isset($quantities[2]) && $quantities[2] == 0 ? '0' : (isset($quantities[2]) ? $quantities[2] : '')) . '</td></tr>';
echo '<tr><td>Iced Cappuccino <b class="receipt3">($2.50)</b></td><td align="center">' . (isset($quantities[3]) && $quantities[3] == 0 ? '0' : (isset($quantities[3]) ? $quantities[3] : '')) . '</td></tr>';
echo '<tr><td>Iced Latte <b class="receipt4">($2.50)</b></td><td align="center">' . (isset($quantities[4]) && $quantities[4] == 0 ? '0' : (isset($quantities[4]) ? $quantities[4] : '')) . '</td></tr>';
echo '<tr><th>Order Total</th><th><i><h3 align="center">$' . $totalAmount . '</h3></i></th></tr></table>';
  }
}


ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



</body>
</html>