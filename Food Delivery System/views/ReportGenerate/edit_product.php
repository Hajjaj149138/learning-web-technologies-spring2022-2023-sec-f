<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="edit_product.css">
    <script>
        function validateForm() {
            const productName = document.editProductForm.product_name;
            const quantity = document.editProductForm.quantity;
            const pricePerUnit = document.editProductForm.price_per_unit;

            if (productName.value.trim() === "") {
                alert("Product Name must be filled out");
                productName.focus();
                return false;
            }

            if (quantity.value.trim() === "") {
                alert("Quantity must be filled out");
                quantity.focus();
                return false;
            }

            if (pricePerUnit.value.trim() === "") {
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
        <h1>Edit Product</h1>
        <form name="editProductForm" action="../controllers/update_product_controller.php" method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="product_serial" value="<?php echo htmlspecialchars($product['product_serial']); ?>">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" id="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" value="<?php echo htmlspecialchars($product['quantity']); ?>">
            </div>
            <div class="form-group">
                <label for="price_per_unit">Price per Unit:</label>
                <input type="number" step="0.01" name="price_per_unit" id="price_per_unit" value="<?php echo htmlspecialchars($product['price_per_unit']); ?>">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
