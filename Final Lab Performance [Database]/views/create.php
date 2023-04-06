<?php
require_once('../models/productsModel.php');
if (isset($_POST['submit'])) {
	if (isset($_POST['display'])) {
		$product_name = $_POST['product_name'];
		$product_buying_price = $_POST['product_buying_price'];
		$product_selling_price = $_POST['product_selling_price'];
		$displayStatus = $_POST['display'];

		if ($product_name != "") {
			if ($product_buying_price != "") {
				if ($product_selling_price != "") {

					$product = ['product_name' => $product_name, 'product_buying_price' => $product_buying_price, 'product_selling_price' => $product_selling_price, 'displayable' => $displayStatus];
					$status = addProduct($product);
					if ($status) {
						header('location: ../views/productList.php');
					}
				} else {
					echo "Invalid Selling price is occured here!!!";
				}
			} else {
				echo "Invalid Buying price is given here!!!";
			}
		} else {
			echo "Error product name!!!";
		}
	} else {
		$product_name = $_POST['product_name'];
		$product_buying_price = $_POST['product_buying_price'];
		$product_selling_price = $_POST['product_selling_price'];
		$displayStatus = 'No';

		if ($product_name != "") 
        {
			if ($product_buying_price != "") 
            {
				if ($product_selling_price != "") 
                {

					$product = ['product_name' => $product_name, 'product_buying_price' => $product_buying_price, 'product_selling_price' => $product_selling_price, 'displayable' => $displayStatus];
					$status = addProduct($product);
					if ($status) 
                    {
						header('location: ../views/productList.php');
					}
				} 
                else 
                {
					echo "Invalid Selling price is occured here!!!";
				}
			} 
            else 
            {
				echo "Invalid Buying price is given here!!!";
			}
		} 
        else 
        {
			echo "Error product name!!!";
		}
	}
}
?>
<html>
<head>
	<title>ADD Product Page</title>
</head>

<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend><h1>ADD PRODUCT</h1></legend>

            <b>Name</b><br>
            <input type="text" name="product_name" value=""><br>

            <b>Buying Price</b><br>
            <input type="text" name="product_buying_price" value=""><br>

            <b>Selling Price</b><br>
            <input type="text" name="product_selling_price" value=""><br>

            <hr>
            <input type="checkbox" name="display" id="display" value="Yes">Display
            <hr>
            <input type="submit" name="submit" value="Save">
			
		</fieldset>
	</form>
</body>


</html>