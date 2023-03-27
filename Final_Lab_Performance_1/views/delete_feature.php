<!DOCTYPE html>
<html>
<head>
	<title>Delete Feature</title>
</head>
<body>
	<fieldset>
        <legend><h1>Delete Feature</h1></legend>
        <form action="../views/delete_feature.php" method="post">
		<label for="feature_id">Feature ID:</label>
		<input type="text" id="feature_id" name="feature_id"><br><br>
		<label for="feature_name">Feature Name:</label>
		<input type="text" id="feature_name" name="feature_name"><br><br>
		<input type="submit" name="submit" value="Delete">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$feature_id = $_POST['feature_id'];
		$feature_name = $_POST['feature_name'];

		$features = file('features.txt');
		$new_features = array();

		foreach ($features as $feature) {
			$feature_parts = explode('|', $feature);
			if ($feature_parts[1] != $feature_id && $feature_parts[0] != $feature_name) {
				$new_features[] = $feature;
			}
		}

		$file = fopen("features.txt", "w");
		fwrite($file, implode("", $new_features));
		fclose($file);

		echo "<p>Feature deleted successfully!</p>";
	}
	?>

<a href="../views/featureManagement.php">Feature Management</a>
    </fieldset>
</body>
</html>