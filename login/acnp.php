<?php
session_start();
if(isset($_SESSION['ID']) && isset($_SESSION['Fname'])) {
    include 'db.php';
    if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['cnp'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    }
        $op = validate($_POST['op']);
        $np = validate($_POST['np']);
        $cnp = validate($_POST['cnp']);

    
        if(empty($op)) {
            header ("location: acp.php?error=Old Password is Required.");
            exit();
        }else if(empty($np)){
            header ("location: acp.php?error=New Password is Required.");
            exit();
        }else if(empty($cnp)){
            header ("location: acp.php?error=The Confirm Password does not match.");
            exit();
        }else {
            $op = md5($op);
            $np = md5($np);
            $ID = $_SESSION['ID'];
            $sql = "SELECT Password FROM users WHERE ID='$ID' AND Password='$op'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1) {
                $sql_2 = "UPDATE users SET Password ='$np' WHERE ID='$ID'";
                mysqli_query($conn, $sql_2);
                header ("location: acp.php?success=Your password has been changed successfully");
            exit();
            }else {
                header ("location: acp.php?error=Incorrect Password");
            exit();
            }
    
    
            header("location: adminhome.php");
            exit();
        }
        
        ?>