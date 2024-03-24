<?php
session_start();
include "db.php";

if(isset($_POST['Email']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
    $email = $_POST['Email'];
    $pass = md5($_POST['password']);

    if(empty($email)) {
        header ("location: index.php?error=Incorrect Email ID.");
        exit();
    }
    if(empty($pass)) {
        header ("location: index.php?error=Password is Required.");
        exit();
    }
   $sql = "SELECT * FROM users WHERE Email ='$email' AND Password ='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_array($result);
    if($row['Email'] === $email && $row['Password'] === $pass) {
        echo "Logged In!";
        $_SESSION['Fname'] = $row['Fname'];
        $_SESSION['Password'] = $row['Password'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Address'] = $row['Address'];
        $_SESSION['Contact'] = $row['Contact'];
        $_SESSION['Image'] = $row['Image'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['ID'] = $row['ID'];
        
        if($row["usertype"] == "admin"){
        header("location: adminhome.php?id='$id'");
        exit();}
        elseif($row["usertype"] == "user"){
            header("location: userhome.php?id='$id'");
            exit();
        }
    }
    else{
        header("location: index.php?error=Incorrect Username or Password");
        exit();
        }
    }
    else{
        header("location: login.php");
    exit();
    }
    
    ?>
    