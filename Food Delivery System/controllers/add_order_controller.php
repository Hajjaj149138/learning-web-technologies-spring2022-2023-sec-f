<?php
require_once '../models/order.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_serial = $_POST['order_serial'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price_per_unit = $_POST['price_per_unit'];

    addOrder($order_serial, $product_name, $quantity, $price_per_unit);

    header('Location: view_sales_orders_controller.php');
} else {
    include '../views/ReportGenerate/add_order.php';
}
