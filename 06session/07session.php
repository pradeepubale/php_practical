<?php
// start a session
// it must be the very first thing in your document, before any html tags
	session_start();
	// imp functions
	echo session_id()."<br>";
	echo session_name(). "<br>";
	// to remove all session variables
	session_unset();
	// to destroy session
	session_destroy();
?>
<! DOCTYPE html>
<html>
<?php include '03header.php';?>
<body>
<?php
	// set sesssion variables.
	$_SESSION["user"] = "Johny Bravo";
	$_SESSION["pwd"] = "cat";
	echo "session variables are set !";
	include '02footer.php';
?>
</body>
</html>
