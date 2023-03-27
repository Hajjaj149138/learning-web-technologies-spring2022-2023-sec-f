<html>
<head>
	<title>Create Feature</title>
</head>
<body>
	<fieldset>
        <legend><h1>Create Feature</h1></legend>

        <form action="../views/create_feature.php" method="post">
		<label for="feature_name">Feature Name:</label>
		<input type="text" id="feature_name" name="feature_name"><br><br>
		<label for="feature_id">Feature ID:</label>
		<input type="text" id="feature_id" name="feature_id"><br><br>
		<label for="feature_details">Feature Details:</label><br>
		<textarea id="feature_details" name="feature_details"></textarea><br><br>
		<input type="submit" name="submit" value="Create">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$feature_name = $_POST['feature_name'];
		$feature_id = $_POST['feature_id'];
		$feature_details = $_POST['feature_details'];

		$file = fopen("../views/features.txt", "a");
		fwrite($file, $feature_name . "|" . $feature_id . "|" . $feature_details . "\n");
		fclose($file);

		echo "<p>Feature created successfully!</p>";
	}
    
	?>
    <a href="../views/featureManagement.php">Feature Management</a>
    </fieldset>
	
</body>
</html>