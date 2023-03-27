<html>
<head>
	<title>Update Feature</title>
</head>
<body>
	<fieldset>
        <legend><h1>Update Feature</h1></legend>
        <form action="../views/update_feature.php" method="post">
		<label for="feature_id">Feature ID:</label>
		<input type="text" id="feature_id" name="feature_id"><br><br>
		<label for="new_feature_name">New Feature Name:</label>
		<input type="text" id="new_feature_name" name="new_feature_name"><br><br>
		<label for="new_feature_details">New Feature Details:</label><br>
		<textarea id="new_feature_details" name="new_feature_details"></textarea><br><br>
		<input type="submit" name="submit" value="Update">

<br><br><br>
        <a href="../views/featureManagement.php">Feature Management</a>
	</form>
    </fieldset>
</body>
</html>
    
    <?php
	if (isset($_POST['submit'])) {
		$feature_id = $_POST['feature_id'];
		$new_feature_name = $_POST['new_feature_name'];
		$new_feature_details = $_POST['new_feature_details'];

		$features = file('features.txt');
		$new_features = array();

		foreach ($features as $feature) {
			$feature_parts = explode('|', $feature);
			if ($feature_parts[1] == $feature_id) {
				$feature_parts[0] = $new_feature_name;
				$feature_parts[2] = $new_feature_details;
				$new_features[] = implode('|', $feature_parts);
			} else {
				$new_features[] = $feature;
			}
		}

		$file = fopen("features.txt", "w");
		fwrite($file, implode("", $new_features));
		fclose($file);
    }