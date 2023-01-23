<?php

include 'connect.php';
if(isset($_GET['deleterno'])){
    $rno = $_GET['deleterno'];

    $sql = "delete from `bsc` where rollno=$rno";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo 'Deleted Successfully!';
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>