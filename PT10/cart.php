<?php 
 session_name('store');
 session_start();
 include('includes/style.php')
 ?>
 <div id="header">
   <ul>
    <li><a href="index.php">Store</a></li>
    <?php
        $user = $_SESSION['username'];
        if (empty($user)){
            echo "<script> window.location.href='front.php'</script>";
        }
        echo '<li id = "user"><strong> User: '.  $user . '</strong></li>'; 
        ?>
      <li><a href="front.php">Log Out</a></li>
  </ul>
</div>
<?php


// Check if the user submitted the form to remove an item from the cart
if (isset($_POST["remove_from_cart"])) {
    $product_id = $_POST["product_id"];
    $index = array_search($product_id, array_column($_SESSION["cart"], 'id'));
    array_splice($_SESSION["cart"], $index, 1);
}

// Check if the user submitted the form to update an item's quantity in the cart
if (isset($_POST["update_quantity"])) {
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];
    
    // Check if the quantity is valid
    if ($quantity > 0) {
        // Update the item's quantity in the cart
        $index = array_search($product_id, array_column($_SESSION["cart"], 'id'));
        $_SESSION["cart"][$index]["quantity"] = $quantity;
    }
}

// Calculate the total cost of the items in the cart
$total = 0;
foreach ($_SESSION["cart"] as $item) {
    $total += $item["price"] * $item["quantity"];
}

// Check if the user wants to take out their order and apply the tax
if (isset($_POST["takeout"])) {
    $_SESSION["takeout"] = true;
    $total *= 1.12;
} else {
    $_SESSION["takeout"] = false;
}
?>


<!-- Display the shopping cart in a table -->
<h1>Shopping Cart</h1>
<table class="table2">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th></th>
    </tr>
    <?php foreach ($_SESSION["cart"] as $item) : ?>
        <tr>
            <td><?= $item["name"] ?></td>
            <td><?= $item["description"] ?></td>
            <td><?= number_format($item["price"], 2) ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="product_id" value="<?= $item["id"] ?>">
                    <input type="number" name="quantity" value="<?= $item["quantity"] ?>" min="1">
                    <input type="submit" name="update_quantity" value="Update Quantity" id="update_quantity">
                </form>
            </td>
            <td><?= number_format($item["price"] * $item["quantity"], 2) ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="product_id" value="<?= $item["id"] ?>">
                    <input type="submit" name="remove_from_cart" value="Remove from Cart" id="remove_cart">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Display the total cost -->
<h2><b>Total: <?= number_format($total, 2) ?></h2>

<!-- Ask if the user wants to take out their order -->
<div class="post2">
<form method="post">
    <input type="submit" name="dinein" value="Dine In">
    <input type="submit" name="takeout" value="Take Out">
</form>
</div>
<!-- Link to the checkout page -->
<a href="<?= isset($_SESSION['takeout']) && $_SESSION['takeout'] ? 'checkout.php' : 'confirmation.php' ?>">Checkout</a></b>