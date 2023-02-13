<?php
$success = 0;
$user = 0;
//echo $user;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $user = $_POST['username'];
        $pwd = $_POST['password'];

        // $sql = "insert into `registration` (username, password)
        // values('$user', '$pwd')";

        // $result = mysqli_query($con, $sql);

        // if($result){
        //     echo "Data inserted successfully!";
        // } else {
        //     die(mysqli_error($con));
        // }
        $sql = "select * from `registration` where 
        username= '$user'";

        $result = mysqli_query($con, $sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                // echo 'User already exists!';
                $user = 1;
                // echo $user;
            } else {
                $sql = "insert into `registration` (username, password) values('$user', '$pwd')";
                $result = mysqli_query($con, $sql);
                if($result){
                    //echo "SignUp successfully!";
                    $success = 1;
                    $user = 0;
                } else {
                    die(mysqli_error($con));
                }
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

    <title>Sign Up Page</title>
  </head>
  <body>
<?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successful !</strong> You have created account successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
<?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> User Already exists...
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

    <div class="container my-5">
    <h1 class="text-center">Sign Up </h1>
    <form action="sign.php" method="post">
        <div class="mb-3">
            <label class="form-label">User Name:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter user name:">
        </div>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your Password" >
        </div>
        
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
