<?php
	// make a greeting with a name
	function get_greeting($name) {
		$greeting = 'Hello';
		if (strlen($name) > 0) {
			$greeting .= ' ' . $name; // string concatenation
		}
		return $greeting . '!';
	}

	// retrieve the value of querystring name=value e.g. index.php?name=value
	$name = htmlspecialchars($_GET['name'] ?? ''); // htmlspecialchars() escapes html code (sanitation)
	$greeting = get_greeting($name);
?>

<html lang='en'>
	<head title='Simple PHP Example'>
		<style>
			body {
					font-family: sans-serif;
				}
		</style>
	</head>
	<body>
		<?php 
			echo "<h1>$greeting</h1>"; // string interpolation
		?>
	</body>
</html>