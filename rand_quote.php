<!DOCTYPE html>
<html>
<head>
	<title>Random Quote Generator</title>
</head>
<body>
	<h1>Random Quote Generator</h1>
	<?php
		// Define an array of quotes
		$quotes = array(
			"Be yourself; everyone else is already taken. - Oscar Wilde",
			"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe. - Albert Einstein",
			"Be the change that you wish to see in the world. - Mahatma Gandhi",
			"If you tell the truth, you don't have to remember anything. - Mark Twain",
			"I have not failed. I've just found 10,000 ways that won't work. - Thomas A. Edison"
		);
		
		// Select a random quote from the array
		$quote = $quotes[array_rand($quotes)];
		
		// Output the quote
		echo "<p>$quote</p>";
	?>
</body>
</html>
