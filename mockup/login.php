<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="flex-grow-1 bg-login-image"></div>
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                          <div class="col-lg-6 d-none d-lg-flex"><img src="assets/img/dogs/capture.png" width=100% height=79%></div>
                            <div class="col-lg-6">
                              <div class="p-5">
                                <div class="text-center">
                                  <h3 class="text-dark mb-4"><strong>LAMOL</strong></h3>
                                   </div>
<form  action="includes/login.inc.php" method="post">

<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Email Address / Username..." name="name"></div>
<div class="form-group"><input class="form-control form-control-user" type="password"  placeholder="Password..." name="pwd"></div>
<button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Login</button><br>

  login as: <select name="chapter" id="login1">
 <option value="Admin" name='admin' selected="selected">Admin</option>
  <option value="client" name='client' selected="selected">client</option>
</select>
<?php
if(isset($_GET["error"])){

  if($_GET["error"] == "emptyinput"){
    echo"<p>fill everything</p>";
  }
else if ($_GET["error"] == "invaliduid"){
  echo"<p>choose a proper username</p>";
}
else if ($_GET["error"] == "invalidemail"){
  echo"<p>Choose a proper Email</p>";
}
else if ($_GET["error"] == "passdontmatch"){
  echo"<p>password doesnt match</p>";
}
else if ($_GET["error"] == "stmtfailed"){
  echo"<p>Something went wrong, please try again!</p>";
}
else if ($_GET["error"] == "usernametaken"){
  echo"<p>Same username already exists</p>";
}
else if ($_GET["error"] == "none"){
  echo"<p>congrats!! you have signed up. please go into the login page to log into your account</p>";
}

}


 ?>
</form>
<form class="user" action='includes/login.inc.php'>  <div class="form-group">
                                              <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                              </div>
                                           </div>


                                      <hr>

                                    </form>
                                  <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                <div class="text-center"><a class="small" href="signup.php">Create an Account!</a></div>
                              </div>
                            </div>
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
