<?php
require 'connection.php';


if(isset($_POST['submit'])){
  $lan=$_POST["experience"];
$Full_name = $_POST['name'];
$Designation = $_POST['email'];
$Salary = $_POST['age'];
$Email = $_POST['phone'];
$Mobile_number  = $_POST['msz'];


 $sql= "INSERT  INTO feedback(Name,Email,Age,phone,Message,Experiance)
        values('$Full_name','$Designation','$Salary','$Email','$Mobile_number','$lan');";

$is_inserted = mysqli_query($conn, $sql);

}



?>








<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">LAMOL</label>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="aboutus.html">About</a></li>
      <li><a href="feedback.html">Feedback</a></li>
        <li><a href="mockup/login.php">login</a></li>
            <li><a href="Mockup/signup.php">Register</a></li>
    </ul>
  </nav>

  <div class="view">
	<img src="cutee.jpg">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h1 class="text-center mt-4 font-weight-bold">Feedback<br><br><br><br></h1>

			<h6 class="text-center"><br><h1>Please write your feedback below:</h1>
			<h4 class="mt-4"><b>How do you rate your overall experience?<br><br></b></h4>

			<form action="feedback.php" method="post">
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Good</label>

			</div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name*<br>
					<input type="text" id="text" required="" name="name" placeholder="name"></label>

					<label class="col-md-4">Email*<br>
					<input type="text" id="text" required="" name="email" placeholder="theprovider@gmail.com"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Age*<br>
					<input type="number" id="text" required="" name="age" placeholder="00"></label>

					<label class="col-md-4">Phone*<br>
					<input type="number" id="text" required="" name="phone" placeholder="+1231456789"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message*<br>
					<textarea id="message" required="" placeholder="Write yor message here" name="msz"cols="48" rows="5"></textarea></label>
			</div>

						<div class="row">
				<div class="col-md-2"></div>
				<button class="btn btn-primary" style="width: 53.5%; position: absolute;; margin-left: 5.5%;" name="submit">Submit</button>
			</div>
			</form>
</div>

</body>
</html>
