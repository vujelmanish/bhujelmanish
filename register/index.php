<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <title>G-97 Saving Group</title>
<body style="background-color:lightblue;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/saving/index.php">G-97 Saving</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-0 mb-0 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/saving/index.php">Home</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Downloads</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">Contact</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/saving/register/index.php">Register</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/saving/login/index.php">Login</span></a>
          </li>
        </ul>
      </div>
    </nav>
        <header>
          <h1>Registration Form</h1>
      </header>
    </body>
    </div>
    <form action="register.php" method="post">
      <div class="col-md-10">
        <div class="row">
    </div>
    <div class="main">
          <form>
            <div class="row">
              <div class="col">
                  <label for="name">First Name:</label>
                    <input type="text" class="form-control" name="Fname" maxlength="20" placeholder="Enter Your First name" required>
              </div>
              <div class="col">
                <label for="name">Middle Name:</label>
                  <input type="text" class="form-control" name="Mname" maxlength="20" placeholder="Enter Your Middle name">
              </div>
              <div class="col">
                <label for="name">Last Name:</label>
                  <input type="text" class="form-control" name="Lname" maxlength="20" placeholder="Enter Your Last name" required> <br>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="col">
                    <label for="name">Email Id:</label>
                      <input type="email" class="form-control" name="Email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="col">
                  <label for="name">Phone No:</label>
                    <input type="number" class="form-control" name="Contact" minlength="10" maxlength="10" placeholder="Enter Your Phone Number" required>
                </div>
                <div class="col">
                  <label for="name">Address:</label>
                    <input type="text" class="form-control" name="Address" maxlength="50" placeholder="Enter Your Address" required><br>
                </div>
            </div>
          </div>
            <div class="col">
                <label for="name">Password:</label>
                  <input type="password" class="col-sm-2 form-control" name="Password" minlength="8" maxlength="20" htmlspecialcharac="@!#$%^&*" placeholder="Enter Password" required><br>
            </div>
          </div>
        </div>
            <div class="col">
            <label for="name">Confirm Password:</label>
              <input type="password" class="col-sm-2 form-control" name="Password" minlength="8" maxlength="20" placeholder="Enter Password Again" required><br>
           </div>
        </div>
              </div>
              <div class="col-md-10">
                  <button type="submit" class="form-control-center" id="success">Register</button>
                  <button type="submit" class="form-control-center" id="success"><a href="/saving">Back</a></button><br><br>
                  <label for="submit" class="form-control-center" id="success"><a href="/saving/login/index.php">Already Have an Account.</a></button>
    </form>
  </div>
</div>
</html>
