<?php
$login = 0;
$invalid = 0;
//echo $user;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $sql = "select * from `registration` where 
        username= '$username' and password='$pwd'";

        $result = mysqli_query($con, $sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                // echo 'Login Successful';
                $login = 1;
                // create a session
                session_start();
                $_SESSION['username'] = $username;
                header('location:home.php');
            } else {
                // echo 'Invalid Data';
                $invalid = 1;
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>

<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have successfully login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !</strong> Invalid Credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
    <div class="container my-5">
    <h1 class="text-center">Login to our Page </h1>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label class="form-label">User Name:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter user name:">
        </div>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your Password" >
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
