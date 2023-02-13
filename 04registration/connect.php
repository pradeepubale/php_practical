<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PWD = '';
$DB = 'employee';

$con = mysqli_connect($HOSTNAME,$USERNAME,$PWD,$DB);

if(!$con){
    //echo "Connection Successful";
    die(mysqli_error($con));
} 
// else {
//     die(mysqli_error($con));
// }
?>