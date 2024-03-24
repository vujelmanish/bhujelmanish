<?php
session_start();

if(isset($_SESSION['ID']) && isset($_SESSION['Fname']) && isset($_SESSION['Password']) && isset($_SESSION['Email']) && isset($_SESSION['Address']) && isset($_SESSION['Contact'])) {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-97 Saving</title>
    <base href="/">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css?v=2H3fkXt6FEmrReK448mDVGKb3WW2ZZw35gI7vqHOE4Y">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css?v=fxxvNo_vOD88AQfrGh88D74wgYex47k9-sa3bWmCelI">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=FQ-k0mIFfWXVTaW1arh3qKx8IXX5Bm5f6QG-0pkUjaE">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css?v=WKijf8KI68sbq8Znd6yMepIuFF0wdWfIt6gk3JWcQfk">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css?v=Kdn8cW3YayN1SFg_Og5wyiItM0U_X7h1Mxw91Z2AcjI">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css?v=R91pD48xW-oHbpJYGn5xR0Q7tMhH4xOrWn1QqMRINtA">
    <link href="css/dropzone.css?v=0Z6mOrdLEtgqvj7tidYQnCYWG3G2GAIpatAWKhDx-VM" rel="stylesheet">
    <!-- Form Wizard -->
    <link rel="stylesheet" type="text/css" href="plugins/wizard/wizard.css?v=IZ3wVZtan892X_dohmQfzurYtAtHa31NIcbRax0JDws">
    <link rel="manifest" href="manifest.json">
    <link href="plugins/nepali.datepicker.v2.2/nepali.datepicker.v2.2.min.css?v=hBY1sKAkLfXIEZXWBxPLUb_tdcSHfyEL1jvtb3zrFh0" rel="stylesheet">
    <link href="plugins/select2/css/select2.css?v=kalgQ55Pfy9YBkT-4yYYd5N8Iobe-iWeBuzP7LjVO0o" rel="stylesheet">
    <link href="plugins/animate/animate.min.css?v=X7rrn44l1-AUO65h1LGALBbOc5C5bOstSYsNlv9MhT8" rel="stylesheet">
    <link href="css/site.css?v=bgtnV2Wf8ay6FeurCAd80NJjQjfVrY2wk-2zbbbGv9w" rel="stylesheet">
    <link href="css/jquery-idle-hands.css?v=VuHA9Ans3tDG5speajQZVpYmo3BZ8nmzz4denvKVsDM" rel="stylesheet">
</head>
<body>
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
        <a class="nav-link" href="/saving/details/udetails.php">Member Details</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/saving/stmt/ustatement.php">Statement</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/saving/lc/ulc.php">Loan Calculation</a>
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
<section class="content">
  <div class="container-fluid" id="panel"><!--!-->
  <div class="row"><div class="col-md-6 col-lg-5 col-sm-12"><!--!-->
  <div class="card card-primary animate__animated animate__fadeIn">
    <div class="card-body box-profile">
            <ul class="list-group list-group-unbordered mb-3"><li class="list-group-item"><!--!-->
                    Username<span class="float-right"><?php echo $_SESSION['Fname']; ?></span></li><!--!-->
                <li class="list-group-item"><!--!-->
                    Email<span class="float-right"><?php echo $_SESSION['Email']; ?></span></li><!--!-->
                <li class="list-group-item"><!--!-->
                Address<span class="float-right"><?php echo $_SESSION['Address']; ?></span></li><!--!-->
                <li class="list-group-item"><!--!-->
                Contact<span class="float-right"><?php echo $_SESSION['Contact']; ?></span></li><!--!-->
                <li class="list-group-item"><!--!-->
                Password<span class="float-right"><?php echo '**********'; ?><div class="left"><a href="/saving/login/ucp.php" class="btn btn-default btn-flat">Change Password</a></div>
                      </span></li><!--!-->
        </app>
        <script src="_framework/blazor.polyfill.min.js"></script>
        <script src="/js/Blazor.Server.js"></script>
        <!-- ./wrapper -->
        <script src="js/basil.js"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js?v=_xUj-3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej_m4"></script>
        <script src="js/jquery-idle-hands.min.js?v=oDTrJBYoyV_ZjUqoGHrrA6B2uzJN_0DEk0VcWID2968"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js?v=KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="js/Duplicate.js?v=Fmre8hLsAqG8AeXCB9FRVyg6rhFV6igxtaIk0DClDpY"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js?v=sCElQ8xaSgoxwbWp0eiXMmGZIRa0z94-ffzzO06BqXs"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js?v=tBd38uWlvgfps3zHPrUb2ePBg-Z8EjMf0QloFONzpvU"></script>
        <!-- jquery-validation -->
        <script src="plugins/jquery-validation/jquery.validate.min.js?v=TAzGN4WNZQPLqSYvi-dXQMKehTYFoVOnveRqbi42frA"></script>
        <script src="plugins/jquery-validation/additional-methods.min.js?v=-NPi2ReKyI6yhNClJ78JSzbMmihq7Kjml84LwR631hM"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js?v=u48IADL1yBFYTA8PqnxogL0B9HfOVI3frq0ow7V5r_M"></script>
        <!-- ProgressBar -->
        <script src="js/topbar.min.js?v=2CWebaaq_W_k9iMQrhL7a-1wx6F5P7MGhDt82mr6YEE"></script>
        <!-- SweetAlert2 -->
        <script src="plugins/sweetalert2/sweetalert2.min.js?v=ytBPHlXtZUPR29lnLm6p-dZYwAU-g0XpyMsWD4i0lH4"></script>
        <script src="plugins/toastr/toastr.min.js?v=Hgwq1OBpJ276HUP9H3VJkSv9ZCGRGQN-JldPJ8pNcUM"></script>
        <script src="js/CustomScript.js?v=O930gH_g9BBPRd0P_wu8sqEQuD_XoC8GAv08OnvmOm0"></script><canvas class="topbar" width="709" height="12" style="position: fixed; padding: 0px; margin: 0px; right: 0px; left: 0px; top: 0px; z-index: 100001; display: none; opacity: 0.05;"></canvas>
        <script src="plugins/nepali.datepicker.v2.2/nepali.datepicker.v2.2.min.js?v=iTqadOgFelYB5Qj_RCjCngwsMKZHB4HFMBvqJipDK84"></script>
        <script src="plugins/wizard/wizard.js?v=N04PQ8BaD9U1M5snl16kx3f4oOlD-v-_dgunIlfdERk"></script>
        <script src="plugins/select2/js/select2.js?v=feUJGh1MRQlkCqFnQ3QLSHjkndq7KWV59z2L5lbvXI0"></script>
        <script src="js/dropzone.js?v=eC6KAQHwv09kXg2qFbFjmuBKu75VAqfLhx2M02-SssE"></script>
        <script src="js/OnlinePayment1.js?v=w1xCZx_tllYXhWauhhPmIZnkd6QjcreAty6n9nRqrys"></script>
        <script>navigator.serviceWorker.register('service-worker.js');</script>


<div id="jquery-idle-hands" style="display: none;"><div id="jquery-idle-hands-overlay"></div><div id="jquery-idle-hands-dialog"><div id="jquery-idle-hands-dialog-title">Session Expiration Warning</div><div id="jquery-idle-hands-message-container"><p id="jquery-idle-hands-message">Your session is about to expire due to inactivity.</p><p id="jquery-idle-hands-time-remaining-label">Time remaining: <span id="jquery-idle-hands-time-remaining">588 seconds</span></p></div><hr><div id="jquery-idle-hands-button-container"><button id="jquery-idle-hands-stay-logged-in-button">I'm still here!</button><button id="jquery-idle-hands-logout-button">I'm done.</button></div></div></div></body></html>
<?php
}  

else {
    header("location: index.php");
    exit();
}    
?>