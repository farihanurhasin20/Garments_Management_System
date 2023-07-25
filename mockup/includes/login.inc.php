<?php
 $lan=$_POST["chapter"];

if(isset($_POST["submit"])&& $lan=="client")
{

$username = $_POST["name"];
$pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if(emptyInputlogin($username,$pwd) !== false){
  header("location: ../signup.php?error=emptyinput");
  exit();
}
session_start();
$_SESSION['name']=$username;

loginUser($conn,$username,$pwd);

}
if(isset($_POST["submit"])&& $lan=="Admin")
{
  require_once 'dbh.inc.php';
  $username = $_POST["name"];
  $pwd = $_POST["pwd"];


$sql="SELECT * from admin";
$get_data= mysqli_query($conn, $sql);
if($get_data){

}
else{
  echo"error";
}
while($row=mysqli_fetch_assoc($get_data)){


if(($username==$row['Admin_Name'] ||$username==$row['Email']) )
{

}
else{
  echo "<script>
        alert('wrong username or email!');
        window.location.href= '../login.php';
        </script>
  ";
  exit();
}
if(($username==$row['Admin_Name'] || $username==$row['Email']) && $pwd==$row['Password'] )
{
  echo "<script>
        alert('connected');
        window.location.href= '../../hasin.php';
        </script>
  ";
  exit();
}
else{
  echo "<script>
        alert('wrong password');
        window.location.href= '../login.php';
        </script>
  ";
  exit();
}
}

}
else {
  header("location: ../login.php");
  exit();
}
