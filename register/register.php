<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "g-97 saving";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
if(mysqli_connect_error()) {
    exit('Error connecting to the database'. mysqli_connect_error());
}
if(!isset($_POST['Fname'], $_POST['Mname'], $_POST['Lname'], $_POST['Email'], $_POST['Contact'], $_POST['Address'], $_POST['Password'])) {
    exit('Empty Field(s)');
}
if(empty($_POST['Fname'] || empty($_POST['Mname'] || empty($_POST['Lname'] || empty($_POST['Email'] || empty($_POST['Contact'] || empty($_POST['Address'] || empty($_POST['Password'])))))))) {
    exit('values Empty');
}

if($stmt = $conn->prepare('SELECT id, password FROM users WHERE Email = ?')){
    $stmt->bind_param('s', $_POST['Email']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows>0) {
        echo 'Email Already Registered. Try Again.';
}
else {
    if($stmt = $conn->prepare('INSERT INTO users (Fname, Mname, Lname, Email, Contact, Address, Password) VALUES (?, ?, ?, ?, ?, ?, ?)')) {
        $Password = md5($_POST['Password']);
        $stmt->bind_param('sssssss', $_POST['Fname'], $_POST['Mname'], $_POST['Lname'], $_POST['Email'], $_POST['Contact'], $_POST['Address'], $Password);
        $stmt->execute();
        if($stmt){
        echo 'Successfully Registered.';
    }
    else {
        echo 'Error Occured';
    }
}
$stmt->close();
}
}
else {
    echo 'Error Occured';
}

$conn->close();
if($stmt){
    header('Location:index.php');
}
?>