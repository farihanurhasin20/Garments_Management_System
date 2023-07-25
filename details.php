<?php
require 'connection.php';
session_start();


$data=$_SESSION['Client'];
$sqli="select * FROM clients where Client_Name='$data'";
$result=$conn->query($sqli);
$row=$result->fetch_assoc();


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee.css">
<link rel="stylesheet" href="css/inv.css">
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
    <div class="row">
      <div class="col-75">
        <div class="container">


            <div class="row">
              <div class="col-50">
                <h3>clinet info </h3>
                <label for="fname"><i class="fa fa-user"></i> ID</label>
                <input type="text" id="fname" name="Client_id"  value="<?=$row['Client_id'];?>">
                <label for="email"><i class="fa fa-envelope"></i> Full name</label>
                <input type="text" id="email" name="Client_name"  value="<?=$row['Client_Name'];?>" >
                <label for="Company name"><i class="fa fa-address-card-o"></i>Company name</label>
                <input type="text" id="adr" name="Company_name"  value="<?=$row['Company_Name'];?>">
                <label for="Address"><i class="fa fa-institution"></i> Address</label>
                <input type="text" id="city" name="Address"  value="<?=$row['Address'];?>">
                <label for="Phone"><i class="fa fa-institution"></i> Phone</label>
                <input type="text" id="Phone" name="Phone" value="<?=$row['Phone'];?>">

                      <div class="row">
                        <div class="col-50">
                          <label for="Country">Country</label>
                              <input type="text" id="Country" name="Country"  value="<?=$row['Country'];?>">
                          <label for="Email">Email</label>
                          <input type="text" id="Email" name="Email" value="<?=$row['Email'];?>">
                        </div>
                  <div class="col-50">

                  </div>



                  </div>
                </div>
              </div>

            </div>

            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>

            <div class="footer">
              <h2>we serve</h2>
            </div>
  </body>
</html>
