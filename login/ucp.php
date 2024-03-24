<?php
session_start();
if(isset($_SESSION['ID']) && isset($_SESSION['Fname'])) {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>G-97 Saving Group</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:white;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="G-97 Saving">
    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/saving/Login/userhome.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/saving/details/details.php">Member Details</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/saving/stmt/stmt.php">Statement</a>
      </li>
    </ul>
    <div class="wrapper"><!--!-->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm "><!--!-->
    <ul class="navbar-nav"><li class="nav-item"><i class="fas fa-bars"></i></a></li></ul>
    <ul class="navbar-nav ml-auto"><li>
      <div class="custom-control custom-switch" style="padding: 0.2rem;">
      <input type="checkbox" class="custom-control-input" id="customSwitch1"><!--!-->
    <li class="user-footer"><!--!--><div class="float-right"><!--!-->
    <p><a href="/saving/login/logout.php" class="text-light bg-dark">Log Out</a></p></div></li></ul></li></ul></nav><!--!-->
</nav><br>
<div class="col-md-0"></div>
    <div class="col-md-0">
        <div class="row">
    </div>
</body>
    <form action="ucnp.php" method="post">
      <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) {?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
          
          <div class="col">
          <label>Old Password</label>
            <input type="password" name="op" class="col-sm-2 form-control" placeholder=" Old Password" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted"><br>
</small>
<label>New Password</label>
            <input type="password" name="np" class="col-sm-2 form-control" placeholder=" New Password" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted"><br>
</small>
              </div>
              <div class="col">

            <label>Confirm New Password</label>
            <input type="password" name="cnp" class="col-sm-2 form-control" placeholder=" Confirm New Password" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted"><br>
</small>
            </div>
            <div class="col">

            <button type="submit" class="form-control-center" id="success">Save</button>
            <button type="submit" class="form-control-center" id="success"><a href="/saving/login/userhome.php">Cancel</button>
                  </form>
    
</body>
</html>
<?php

} else{
      header("location: userhome.php");
      exit();

}
?>