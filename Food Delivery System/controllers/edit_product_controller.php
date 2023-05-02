<?php
require_once('../models/inventory_model.php');

if (!isset($_GET['product_serial'])) {
    header("Location: ../views/ReportGenerate/show_inventory.php");
    exit;
}

$product_serial = $_GET['product_serial'];
$product = getProductBySerial($product_serial);

if (!$product) {
    header("Location: ../views/ReportGenerate/show_inventory.php");
    exit;
}

require_once('../views/ReportGenerate/edit_product.php');
?>


<link rel="stylesheet" href="../views/ReportGenerate/edit_product.css">
