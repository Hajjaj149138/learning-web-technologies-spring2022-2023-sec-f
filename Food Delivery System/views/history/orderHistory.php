<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link rel="stylesheet" href="orderHistory.css">
</head>
<body>
    <fieldset>
        <legend><h1>Order History</h1></legend>
        <div class="dashboard"><h3>
                <a href="../views/admindashboard.php">Dashboard</a>
                <a href="../views/vendordashboard.php">Dashboard</a>
            </h3></div><br>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php if ($orders): ?>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['item_name']; ?></td>
                    <td><?php echo $order['quantity']; ?></td>
                    <td><?php echo '$' . number_format($order['total_price'], 2); ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo $order['time']; ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No orders found.</td>
                </tr>
            <?php endif; ?>
        </table>
    </fieldset>
</body>
</html>
