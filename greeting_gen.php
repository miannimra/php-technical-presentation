<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Greeting Generator</h1>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			echo "<p>Hello, $name!</p>";
		}
	?>
	<form method="post">
		<label for="name">Enter your name:</label>
		<input type="text" name="name" id="name" required>
		<button type="submit">Submit</button>
	</form>
</body>
</html>
