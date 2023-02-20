<?php
	// create cookie with PHP (must be before html tag)
	$cookie_name = "abc";
	$cookie_value = "ABCD";
	setcookie($cookie_name, $cookie_value, time() + (86400 * -1), "/" );
	# to set and modify cookie use the same function.
	# to delete the cookie usef same function with past date.
	
?>

<html>
<body>
<?php
	include '03header.php';
	
	if(!isset($_COOKIE[$cookie_name])){
		echo "Cookie named " . $cookie_name . " is not set!";
	} else {
		echo "Cookie " . $cookie_name . " is set. <br>";
		echo "Value is ". $_COOKIE[$cookie_name];
	}
		
	include '02footer.php';
?>
</body>
</html>
