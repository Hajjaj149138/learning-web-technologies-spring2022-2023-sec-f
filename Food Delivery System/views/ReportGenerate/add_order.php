<html>
<head>
    <title>Add Order</title>
    <link rel="stylesheet" href="add_order.css">
    <script>
        function validateForm() {
            const orderSerial = document.getElementById("order_serial");
            const productName = document.getElementById("product_name");
            const quantity = document.getElementById("quantity");
            const pricePerUnit = document.getElementById("price_per_unit");

            if (orderSerial.value.trim() === "") {
                alert("Order Serial must be filled out");
                orderSerial.focus();
                return false;
            }

            if (productName.value.trim() === "") {
                alert("Product Name must be filled out");
                productName.focus();
                return false;
            }

            if (quantity.value === "") {
                alert("Quantity must be filled out");
                quantity.focus();
                return false;
            }

            if (pricePerUnit.value === "") {
                alert("Price per Unit must be filled out");
                pricePerUnit.focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Add Order</h1>
        <form action="../../controllers/add_order_controller.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="order_serial">Order Serial:</label>
                <input type="text" name="order_serial" id="order_serial">
            </div>
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" id="product_name">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity">
            </div>
            <div class="form-group">
                <label for="price_per_unit">Price per Unit:</label>
                <input type="number" step="0.01" name="price_per_unit" id="price_per_unit">
            </div>
            <button type="submit">Submit</button>
        </form>
        <a href="view_sales_orders.php">View Sales & Order Report</a>
         | <a href="../views/admindashboard.php">Dashboard</a>
    </div>
</body>
</html>
