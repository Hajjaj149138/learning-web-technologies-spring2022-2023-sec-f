<?php
if (!isset($orders)) 
    {
        header("Location: ../../controllers/view_sales_orders_controller.php");
        exit;
    }
?>

<html>
<head>
    <title>Sales & Order Report</title>
    <link rel="stylesheet" href="sales_order_report.css">
</head>
<body>
    <div class="container">
        <h1>Sales & Order Report</h1>
        <table>
            <thead>
                <tr>
                    <th>Order Serial</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo htmlspecialchars($order['order_serial']); ?></td>
                    <td><?php echo htmlspecialchars($order['product_name']); ?></td>
                    <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                    <td><?php echo htmlspecialchars($order['price_per_unit']); ?></td>
                    <td><?php echo htmlspecialchars($order['quantity'] * $order['price_per_unit']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../views/ReportGenerate/add_order.php">Add another order</a>
        | <a href="../views/admindashboard.php">Dashboard</a>
        | <a href="../views/vendorashboard.php">Dashboard</a>
    </div>
</body>
</html>
