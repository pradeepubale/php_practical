<?php

$conn = new mysqli('localhost', 'root', '', 'student');

if(!$conn){
    die(mysqli_error($conn));
    // echo "connection successfull";
}

?>