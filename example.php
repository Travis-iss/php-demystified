<?php
$DEFAULT_NAME = 'Ron Flower';

class User {
	private $name;
	private $age;
	
	// constructor
	function __construct($first_name, $last_name, $age) {
		$this->name = $first_name . ' ' . $last_name;
		$this->age = intval($age);
	}

	function get_name() {
		return $this->name;
	}

	function get_age() {
		return $this->age;
	}
}

function name_from_get() {
	global $DEFAULT_NAME;

	$first = htmlspecialchars($_GET['first'] ?? '');
	$last = htmlspecialchars($_GET['last'] ?? '');
	
	if ($first != '' && $last != '') {
		return $first . ' ' . $last;
	} else {
		return $DEFAULT_NAME;
	}
}

// get a name from GET superglobal or default
$name = name_from_get();

// split array on space character
$name_array = explode(' ', $name);

foreach($name_array as $word) {
	// append to new array
	$new_name_array[] = $word . 'y';
}

// create new instance of User
$user = new User(
	$new_name_array[0], 
	$new_name_array[1], 
	43
);

?>

<html lang='en'>
	<head title='More Examples of PHP'>
		<style>
			body {
				font-family: sans-serif;
			}

			input {
				margin: 10px;
			}

			.output {
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<h1>The name is: <span class='output'><?php echo $user->get_name(); ?></span></h1>
		
		<form method='get'>
			<label for='first'>First name: </label>
			<input id='first' name='first'>
			<br>
			<label for='last'>Last name: </label>
			<input id='last' name='last'>
			<br>
			<input type='submit'>
		</form>
	</body>
</html>