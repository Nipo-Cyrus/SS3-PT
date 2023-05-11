<?php 
 session_name('store');
 session_start();
 include('includes/style.php')
 ?>
   <ul>
    <?php
        $user = $_SESSION['username'];
        if (empty($user)){
            echo "<script> window.location.href='front.php'</script>";
        }
        echo '<li id = "user"><strong> User: '.  $user . '</strong></li>'; 
        ?>
      <li><a href="front.php">Log Out</a></li>
  </ul>

<?php


// Create an array to hold the products
$products = [
    ["id" => 1, "name" => "Cappuccino", "description" => "A delicious cappuccino", "price" => 2.00],
    ["id" => 2, "name" => "Espresso", "description" => "A strong espresso", "price" => 2.25],
    ["id" => 3, "name" => "Latte", "description" => "A creamy latte", "price" => 1.75],
    ["id" => 4, "name" => "Iced Cappuccino", "description" => "A refreshing iced cappuccino", "price" => 2.50],
    ["id" => 5, "name" => "Iced Latte", "description" => "A delicious iced latte", "price" => 2.50]
];

// Check if the cart exists in the session, if not create it
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Check if the user submitted the form to add an item to the cart
if (isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $product = $products[array_search($product_id, array_column($products, 'id'))];
    $product["quantity"] = 1;
    
    // Check if the item is already in the cart
    $index = array_search($product_id, array_column($_SESSION["cart"], 'id'));
    if ($index !== false) {
        // If the item is already in the cart, update its quantity
        $_SESSION["cart"][$index]["quantity"]++;
    } else {
        // If the item is not in the cart, add it
        array_push($_SESSION["cart"], $product);
    }
}
?>

<!-- Add some CSS to style the table -->
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<!-- Display the products in a table -->
<h1>Products</h1>
<table class="table1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th></th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product["name"] ?></td>
            <td><?= $product["description"] ?></td>
            <td><?= $product["price"] ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="product_id" value="<?= $product["id"] ?>">
                    <input type="submit" name="add_to_cart" value="Add to Cart" id="buttoncart">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Link to the shopping cart page -->
<a href="cart.php" id="cartwrap">View Cart</a>
