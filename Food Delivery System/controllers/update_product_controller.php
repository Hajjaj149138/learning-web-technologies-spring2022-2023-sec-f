<?php
require_once('../models/inventory_model.php');

if (!isset($_POST['product_serial']) || !isset($_POST['product_name']) || !isset($_POST['quantity']) || !isset($_POST['price_per_unit'])) {
    header("Location: ../views/ReportGenerate/show_inventory.php");
    exit;
}

$product_serial = $_POST['product_serial'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price_per_unit = $_POST['price_per_unit'];

$status = updateProduct($product_serial, $product_name, $quantity, $price_per_unit);

if ($status) {
    header("Location: ../views/ReportGenerate/show_inventory.php");
} else {
    echo "Error updating product.";
}
?>
