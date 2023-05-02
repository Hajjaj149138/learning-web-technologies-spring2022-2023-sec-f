<?php
require_once('../models/orderHistoryModel.php');

$orders = getOrders();

if (!empty($orders)) {
    require_once('../views/history/orderHistory.php');
} else {
    echo "No orders found.";
}
?>


<link rel="stylesheet" href="../views/history/orderHistory.css">

