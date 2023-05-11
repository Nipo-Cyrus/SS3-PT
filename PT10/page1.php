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
<body>  
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
    
    <?php   
    $name = $_SESSION['username'];   
    echo '<h2 class="right" id="styleN">Welcome to Hyphinx Cafe:  ' . $name . '!</h2><br>' ; 
    ?>
    <hr>
    <br><br><br><hr>
   
</head>
<body>
    <h1 align="center">Please Select Your Order</h1>
    <hr><br><br>

  <form action="" method="post">
  <table id = "at">
    <tr>
          <th>Order</th>
          <th>Item</th>
          <th>Price</th>
          <th>Quantity</th>                
    </tr>
    <tr>
      <td  id= "td">
        <label>
          <input type="checkbox" name="order[]" value="Cappuccino">
        </label>
      </td>
      <td id= "td">
        <label>
          Cappuccino   
        </label>
      </td>
      <td  id= "td">
        <label>
          &nbsp;  &nbsp;  &nbsp; $2.00   
        </label>
      </td>
      <td  id= "td">
        <input type="number" name="quantity[]" value="" min="1">
      </td>
    </tr>
    <tr>
      <td >
        <label>
          <input  type="checkbox" name="order[]" value="Espresso">   
        </label>
        <td id= "td">
        <label>
        Espresso    
        </label>
      </td>
      </td>
      <td  id= "td">
        <label>
          &nbsp;  &nbsp;  &nbsp; $2.25   
        </label>
      </td>
      <td id = "td">
        <input type="number" name="quantity[]" value="" min="1">
      </td>
    </tr>
    <tr>
      <td>
        <label>
          <input type="checkbox" name="order[]" value="Latte">
        
        </label>
      </td>
      <td id= "td">
        <label>
        Latte    
        </label>
      <td  id= "td">
        <label>
          &nbsp;  &nbsp;  &nbsp; $1.75 
        </label>
      <td id = "td">
        <input  type="number" name="quantity[]" value="" min="1">
      </td>
    </tr>
    <tr>
      <td>
        <label>
          <input type="checkbox" name="order[]" value="Iced Cappuccino">
          
        </label>
      </td>
      <td id= "td">
        <label>
        Iced Cappuccino     
        </label>
        </td>
        <td><label>
          &nbsp;  &nbsp;  &nbsp; $2.50 
        </label></td>
      <td id = "td">
        <input  type="number" name="quantity[]" value="" min="1">
      </td>
    </tr>
    <tr>
      <td id = "td">
        <label>
          <input type="checkbox" name="order[]" value="Iced Latte">
        </label>
      </td>
      <td id= "td">
        <label>
        Iced Latte     
        </label>
      </td>
      <td  id= "td">
        <label>
          &nbsp;  &nbsp;  &nbsp; $2.50 
        </label>
      </td>
      <td id = "td">
        <input type="number" name="quantity[]" value="" min="1">
      </td>
    </tr>
    <tr>
    <td></td>
      <td>
      <label>
          <input type="radio" id="ass" name="dine-in-or-take-out" value="Dine-in" required>Dine&nbsp;In
          <input type="radio" id="ass" name="dine-in-or-take-out" value="Take-out" required>Take&nbsp;out
      </label>
      </td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button id="style0" type="submit">Calculate Total</button>
      </td>
    </tr>
</form>

 <br><br>
</center>
<?php

define("PRICE_LIST", array(
  "Cappuccino" => 2.00,
  "Espresso" => 2.25,
  "Latte" => 1.75,
  "Iced Cappuccino" => 2.50,
  "Iced Latte" => 2.50
));


function calculateTotalAmount() {
  $selectedOrders = array();
  $quantities = array();

  if (isset($_POST["order"])) {
    $selectedOrders = $_POST["order"];
  }
  
  if (isset($_POST["quantity"])) {
    foreach ($_POST["quantity"] as $quantity) {
      $quantity = (int)$quantity;
      if ($quantity > 0) {
        $quantities[] = $quantity;
      }
    }
  }

  if (empty($selectedOrders) || empty($quantities)) {
    return null;
  }
  
  function getDineInOrTakeOut() {
    if (isset($_POST["dine-in-or-take-out"])) {
      return $_POST["dine-in-or-take-out"];
    } else {
      return null;  
    }

  }
  $totalAmount = 0;
  for ($i = 0; $i < count($selectedOrders); $i++) {
    $selectedOrder = $selectedOrders[$i];
    $quantity = $quantities[$i];
    $price = PRICE_LIST[$selectedOrder];
    $totalAmount += $quantity * $price;
  }
  $dineInOrTakeOut = getDineInOrTakeOut();
  if ($dineInOrTakeOut === "Take-out") {
    $tax = $totalAmount * 0.12;
    $totalAmount += $tax;
  }
  
  return number_format($totalAmount, 2);
}

function generateReceipt($selectedOrders, $quantities , $dineInOrTakeOut) {
  $receipt = "<table>\n";
  $receipt .= "<tr><th>Selected Order</th><th>Quantity</th><th>Price</th><th>Subtotal</th></tr>\n";

  for ($i = 0; $i < count($selectedOrders); $i++) {
    $selectedOrder = $selectedOrders[$i];
    $quantity = $quantities[$i];
    $price = PRICE_LIST[$selectedOrder];
    $subtotal = $quantity * $price;
    $receipt .= "<tr><p>$dineInOrTakeOut</p><td>$selectedOrder</td><td align='center'>$quantity</td><td align='center'>$$price</td><td align='center'>$$subtotal</td></tr>\n";
  }
  return $receipt;
}
function removeButton() {
  if (isset($_POST["remove"])) {
    //remove the clicked item from the cart}
    

   
  }
  
  return number_format($totalAmount, 2);
}

function Ordertype($dineInOrTakeOut) {
  if (isset($_POST["dine-in-or-take-out"])) {
    $dineInOrTakeOut = $_POST["dine-in-or-take-out"];
    return $dineInOrTakeOut;
  }
  
  return number_format($totalAmount, 2);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $totalAmount = calculateTotalAmount();
  if (is_null($totalAmount)) {
    $_SESSION["error"] = '<table id="table3"><tr><th><h5>Error: Please select at least one order and specify a quantity for each selected order.</h3></th></tr></table>';
    
    echo $_SESSION["error"];
  } else {
    $selectedOrders = $_POST["order"];
    $quantities = array();
    foreach ($_POST["quantity"] as $quantity) {
      $quantity = (int)$quantity;
      if ($quantity > 0) {
        $quantities[] = $quantity;
      }
    }

    $receipt = generateReceipt($selectedOrders, $quantities ,$dineInOrTakeOut);
    $ordertype = Ordertype($dineInOrTakeOut);
    $_SESSION["selectedOrders"] = $selectedOrders;
    $_SESSION["quantities"] = $quantities;
    $_SESSION["ordertype"] = $ordertype;
    $_SESSION["receipt"] = $receipt;
    $_SESSION["totalAmount"] = $totalAmount;
    echo "<script> window.location.href='page2.php'</script>";
    
}
}
    
?>
<script>
window.onload = function() {
    var checkboxes = document.querySelectorAll("input[type=checkbox][name='order[]']");
    var quantityInputs = document.querySelectorAll("input[type=number][name='quantity[]']");
    
    checkboxes.forEach(function(checkbox, index) {
        var quantityInput = quantityInputs[index];
        quantityInput.disabled = !checkbox.checked;
        
        checkbox.addEventListener("change", function() {
            quantityInput.disabled = !this.checked;
        });
    });
}

</script>
</table>
</body>
</html>