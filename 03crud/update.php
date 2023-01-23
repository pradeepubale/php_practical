<?php
include 'connect.php';
$rno = $_GET['updaterno'];
$sql = "select * from `bsc` where rollno=$rno";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$class = $row['class'];
$address = $row['address'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    $sql = "update `bsc` set rollno=$rno, name='$name', class='$class', 
    address='$address' where rollno=$rno";

    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Data Updated successfully...";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Welcome to student portal!</h1>
    </div>

    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Student Name:</label>
                <input type="text" name="name" class="form-control" autocomplete="off" value=<?php echo $name; ?>> 
            </div>
            <div class="form-group">
                <label>Class:</label>
                <input type="text" name="class" class="form-control" autocomplete="off" value=<?php echo $class; ?>>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" name="address" class="form-control" autocomplete="off" value=<?php echo $address; ?>>
            </div><br/>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
