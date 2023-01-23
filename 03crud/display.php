<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>

        <table class="table">
  <thead>
    <tr>
      <th>Student Number</th>
      <th>Student Name</th>
      <th>Class</th>
      <th>Address</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql = "select * from `bsc`";
    $result = mysqli_query($conn, $sql);
    if($result){
      // $row = mysqli_fetch_assoc($result);
      // echo $row['name'];
      while($row = mysqli_fetch_assoc($result)){
        $rollno = $row['rollno'];
        $name = $row['name'];
        $class = $row['class'];
        $address = $row['address'];
        echo '<tr>
        <th scope="row">'.$rollno.'</th>
        <td>'.$name.'</td>
        <td>'.$class.'</td>
        <td>'.$address.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updaterno='.$rollno.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleterno='.$rollno.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
      }
    }

    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>Doe</td>
      <td>johndoe@example.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jane</td>
      <td>Smith</td>
      <td>janesmith@example.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Bob</td>
      <td>Johnson</td>
      <td>bobjohnson@example.com</td>
    </tr> -->
    
  </tbody>
</table>

    </div>
</body>
</html>