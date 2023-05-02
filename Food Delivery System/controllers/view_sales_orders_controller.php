<?php
require_once '../models/order.php';

$orders = getOrders();
include '../views/ReportGenerate/view_sales_orders.php';
?>

<link rel="stylesheet" href="../views/ReportGenerate/sales_order_report.css">
