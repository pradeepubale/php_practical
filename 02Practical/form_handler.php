<!DOCTYPE html>
<html>
<head>
<title>Thank You</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for registering. Here is the information you submitted:</p>

First name: <?php 
if(!isset($_GET["exampleInputEmail1"])){
    echo "Name is mandatory";
} else {
    echo $_GET["exampleInputEmail1"];
}
?> <br/>
Password: <?php 
if(!isset($_GET["exampleInputPassword1"])){
    echo "Password shold not be blank";
} else{
    echo $_GET["exampleInputPassword1"];
}
?><br/>
Gender: <?php
	echo $_GET["flexRadioDefault"]; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
