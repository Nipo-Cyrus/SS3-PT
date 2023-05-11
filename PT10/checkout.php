<?php
 session_name('store');
 session_start();

// Calculate the total cost of the items in the cart
$total = 0;
foreach ($_SESSION["cart"] as $item) {
    $total += $item["price"] * $item["quantity"];
}

// Check if the user wants to take out their order and apply the tax
if (isset($_SESSION["takeout"]) && $_SESSION["takeout"]) {
    $total *= 1.12;
}

// Check if the user submitted the form to complete their purchase
if (isset($_POST["purchase"])) {
    // Clear the shopping cart
    $_SESSION["cart"] = [];
    
    // Redirect to the confirmation page
    header("Location: confirmation.php");
    exit();
}
?>

<!-- Add some CSS to style the form -->
<style>
    label {
        display: block;
        margin-top: 8px;
    }
</style>

<!-- Display the total cost -->
<h2>Your Total is: <?= number_format($total, 2) ?></h2>
<h3><i>Thank Your for Purchasing at Hyphinx Cafe </i> </h3>

<!-- Display a form for entering shipping information -->
<h1>Shipping Information</h1>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required>
    
    <label for="city">City:</label>
    <input type="text" name="city" id="city" required>
    
    <label for="state">State:</label>
    <input type="text" name="state" id="state" required>
    
    <label for="zip">Zip Code:</label>
    <input type="text" name="zip" id="zip" required>
    <br><br>
    <input type="submit" name="purchase" value="Complete Purchase">
</form>
