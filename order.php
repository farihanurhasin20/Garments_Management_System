<?php
require 'connection.php';
if(isset($_POST['submit'])){
  $data=$_POST['search'];
  $sqli="select * FROM New_Order where Buyer_Name='$data'";
  $result=$conn->query($sqli);
  $row=$result->fetch_assoc();
  echo "id:" .$row['Buyer_Name']."<br>";
    session_start();
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee.css">
<link rel="stylesheet" href="css/inv.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body >
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a  href="profileA.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
      <a href="employee1.php"><i class="fa fa-users" aria-hidden="true"></i>Empolyees</a>
      <a href="Add Inv1.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Inventory</a>
      <a href="Add Order1.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Order</a>
      <a href="Add Client1.php"><i class="fa fa-users" aria-hidden="true"></i>Clients</a>
      <a href="hasin.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>Monthly activity</a>

      <a href="index.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
  </div>
  <div id="main" style="background-color:black; color:white;>
  <span  style="font-size:30px; cursor:pointer; "  class="openbtn" onclick="openNav()">&#9776; </span>
  </div>

<div class="header">
<h1>LAMOL</h1>

</div>


<div class="column" style="background-color:black;">
  <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Order details</button>
<div id="myDropdown" class="dropdown-content">
  <?php

  require 'varo.php';

 ?>
</div>
</div>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
var input, filter, ul, li, a, i;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
div = document.getElementById("myDropdown");
a = div.getElementsByTagName("a");
for (i = 0; i < a.length; i++) {
  txtValue = a[i].textContent || a[i].innerText;
  if (txtValue.toUpperCase().indexOf(filter) > -1) {
    a[i].style.display = "";
  } else {
    a[i].style.display = "none";
  }
}
}
</script>




<div class="row">
<div class="col-75">
  <div class="container">


      <div class="row">
        <div class="col-50">
          <h3> Order info</h3>
          <form action="Add Order1.php" method="post">
          <label for="fname"><i class="fa fa-user"></i> ID</label>
          <input type="text" id="fname" name="Order_ID" value="<?=$row['Order_ID'];?>">
          <label for="email"><i class="fa fa-envelope"></i>Buyer Name</label>
          <input type="text" id="email" name="Buyer_Name" value="<?=$row['Buyer_Name'];?>">
          <a  href="details.php"
          <?php

            $_SESSION['Client']=$row['Buyer_Name']; ?>

          <button class="btn clickherefordetails" name="details"> details</button>
      </a>
          <label for="adr"><i class="fa fa-address-card-o"></i>Product_Id</label>
          <input type="text" id="adr" name="Product_ID" value="<?=$row['Product_ID'];?>">
          <label for="adr"><i class="fa fa-address-card-o"></i> quantity</label>
          <input type="text" id="adr" name="Quantity" value="<?=$row['Quantity'];?>">
          <label for="Address"><i class="fa fa-calendar-o" aria-hidden="true"></i> Shipment date</label>
          <input type="text" id="city" name="Shipment_Date" value="<?=$row['Shipment_Date'];?>">
          <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i> buyers pays</label>
          <input type="text" id="Phone" name="Buyer_Pays" value="<?=$row['Buyer_Pays'];?>">

          <div class="row">
            <div class="col-50">
              <label for=""><i class="fa fa-money" aria-hidden="true"></i>Estimated cost</label>
              <input type="text" id="Salary" name="Profit" value="<?=$row['Profit'];?>">

            </div>
            <div class="col-50">



            </div>
            <div class="col-50">
              <a
            <button class="btn Addneworder">Add new order</button>
               </a>
          <button  class="btn Updateorder" name="update_order">Update order</button>


            </div>
          </div>
        </div>
</form>
      </div>






      <div class="footer">
        <h2>we serve</h2>
      </div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

  </body>
</html>
