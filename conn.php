<?php
// Database configuration


    $server = "localhost";
$username = "root";
$password = "";
$database = "vaccination";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>