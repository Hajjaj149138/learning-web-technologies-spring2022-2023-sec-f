<?php
require_once('../models/inventory_model.php');

$product_serial = $_POST['product_serial'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price_per_unit = $_POST['price_per_unit'];

$status = addProduct($product_serial, $product_name, $quantity, $price_per_unit);

if ($status) {
    header("Location: ../views/ReportGenerate/show_inventory.php");
} else {
    echo "Error: Could not add product. Please try again.";
}
?>
