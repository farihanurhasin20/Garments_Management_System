<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LAMOL - Signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gradient-primary">

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">LAMOL</label>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../aboutus.html">About</a></li>
        <li><a href="../feedback.html">Feedback</a></li>
          <li><a href="login.php">login</a></li>

      </ul>
    </nav>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/realmvp.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center"><br>
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>

  </form>
<form  action="includes/signup.inc.php" method="post">

<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Full Name..." name="name"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Username..." name="uid"></div>
<div class="form-group"><input class="form-control form-control-user" type="email"  placeholder="Enter Email Address..." name="email"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Company name" name="Company_name"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Address" name="Address"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Phone" name="Phone"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Country" name="Country"></div>
<div class="form-group"><input class="form-control form-control-user" type="password"  placeholder="Password" name="pwd"></div>
<div class="form-group"><input class="form-control form-control-user" type="password"  placeholder="Confirm Password" name="pwdRepeat"></div>
<button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit" value="Insert">Register Account</button><br>
<?php
if(isset($_GET["error"])){

  if($_GET["error"] == "emptyinput"){
    echo '<script>
    alert("Please Fill-up Everything");
    window.location.href="signup.php";
    </script>';
  }
else if ($_GET["error"] == "invaliduid"){
  echo '<script>
  alert("Please Use a Proper Username");
  window.location.href="signup.php";
  </script>';
}
else if ($_GET["error"] == "invalidemail"){
  echo '<script>
  alert("The Email You entered is invalid");
  window.location.href="signup.php";
  </script>';
}
else if ($_GET["error"] == "passworddontmatch"){
  echo '<script>
  alert("Passwords Doesnt match");
  window.location.href="signup.php";
  </script>';
}
else if ($_GET["error"] == "stmtfailed"){
  echo '<script>
  alert("Something Went Wrong , Please Try Again");
  window.location.href="signup.php";
  </script>';
}
else if ($_GET["error"] == "usernameexists"){
  echo '<script>
  alert("Same username already exists");
  window.location.href="signup.php";
  </script>';

}
else if ($_GET["error"] == "none"){

  echo '<script>
  alert("congrats!! you have signed up. please click ok to go into the login page to log into your account");
  window.location.href="login.php";
  </script>';
}

}


 ?>
</form>


                         <hr>

                            <div><a class="btn btn-login btn-block text-blue btn-user" href="login.php">Already have an account? Login!</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
