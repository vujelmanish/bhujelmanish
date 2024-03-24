<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "g-97 saving";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die();

if(!$conn) {
    echo "Connection Failed";  
}
?>