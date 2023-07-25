<?php


if(isset($_POST["submit"])) {


$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdRepeat"];
$company=$_POST["Company_name"];
$Address=$_POST["Address"];
$Phone=$_POST["Phone"];
$Country=$_POST["Country"];

require_once 'dbh.inc.php';




require_once 'functions.inc.php';

if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat ) !== false){
  header("location: ../signup.php?error=emptyinput");
  exit();
}

if(invalidUid($username ) !== false){
  header("location: ../signup.php?error=invaliduid");
  exit();
}

if(invalidEmail($email ) !== false){
  header("location: ../signup.php?error=invalidEmail");
  exit();
}

if(pwdMatch($pwd, $pwdRepeat) !== false){
  header("location: ../signup.php?error=passworddontmatch");
  exit();
}

if(uidExists($conn,$username,$email ) !== false){
  header("location: ../signup.php?error=usernameexists");
  exit();
}

$sql= "INSERT  INTO clients (Client_Name, Company_Name,Address, Phone, Country, Email)
       values('$name','$company','$Address','$Phone','$Country','$email');";
$is_inserted = mysqli_query($conn, $sql);
if($is_inserted){

}
else{
 echo"error";
}

createUser($conn, $name, $email, $username, $pwd);
}
else {
  header("location: ../signup.php");
  exit();
}
