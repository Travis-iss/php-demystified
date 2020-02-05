<?php
	function foo() {
		echo 'foo function';
	}
	
	$func_name = 'foo';

	call_user_func($func_name);

	
	$year = 'Hello 2020!';
	$var_name = 'year';

	echo($$var_name); // silly!
?>