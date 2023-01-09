<!DOCTYPE html>
<html>
<head>
<title>A Simple Login Form</title>
<?php include "header.php" ;?>

</head>
<body>
    <form action="form_handler.php" method="get">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="exampleInputPassword1"  id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="form-check">
  	    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="F">
  	    <label class="form-check-label" for="flexRadioDefault1">
    		Female
  		</label>
	    </div>
	    <div class="form-check">
  		<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="M" checked>
  		<label class="form-check-label" for="flexRadioDefault2">
    		Male
  		</label>
	</div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
