<?php
  require 'connection.php';
if(isset($_POST['new_order'])){

$Order_ID= $_POST['Order_ID'];
$Buyer_Name= $_POST['Buyer_Name'];
$Product_ID = $_POST['Product_ID'];
$Quantity = $_POST['Quantity'];
$Shipment_Date  = $_POST['Shipment_Date'];
$uyer_Pays = $_POST['Buyer_Pays'];
$Profit = $_POST['Profit'];

$sqli="SELECT Stock_Amount FROM
inv where Inv_ID='$Product_ID'";
$result=$conn->query($sqli);
$row=$result->fetch_assoc();
echo "id:" .$row['Stock_Amount']."<br>";

$pre=$row['Stock_Amount']-$Quantity;
if($pre>0){
$sqli="UPDATE inv SET Stock_Amount='$pre' where Inv_ID='$Product_ID'";
$update = mysqli_query($conn,$sqli);
}
if($pre<0){
  $sqli="SELECT Needed_Amount FROM
  inv_needed where ID='$Product_ID'";
  $result=$conn->query($sqli);
  $row=$result->fetch_assoc();
  echo "id:" .$row['Needed_Amount']."<br>";
  $che=$row['Needed_Amount'];
  $pre=abs($pre);
  $pre=$pre+$che;
$sqli="UPDATE inv_needed SET Needed_Amount='$pre' where ID='$Product_ID'";
$update = mysqli_query($conn,$sqli);
$pre=0;
$sqli="UPDATE inv SET Stock_Amount='$pre' where Inv_ID='$Product_ID'";
$update = mysqli_query($conn,$sqli);

}

 $sql= "INSERT  INTO new_order (Order_ID, Buyer_Name,Product_ID, Quantity, Shipment_Date,Buyer_Pays,Profit)
        values('$Order_ID','$Buyer_Name','$Product_ID','$Quantity','$Shipment_Date','$uyer_Pays','$Profit');";
echo $sql;
$is_inserted = mysqli_query($conn, $sql);
if($is_inserted){
  echo "<script>
        alert('Data Added!');
        window.location.href= 'Add Order1.php';
        </script>
  ";
  exit;
}
else{
  echo"error";
}
}
if (isset($_POST['update_order'])) {

  $Order_ID= $_POST['Order_ID'];
  $Buyer_Name= $_POST['Buyer_Name'];
  $Product_ID = $_POST['Product_ID'];
  $Quantity = $_POST['Quantity'];
  $Shipment_Date  = $_POST['Shipment_Date'];
  $uyer_Pays = $_POST['Buyer_Pays'];
  $Profit = $_POST['Profit'];

  $sqli = "UPDATE new_order SET Buyer_Name = '$Buyer_Name',Product_ID = '$Product_ID',Quantity='$Quantity',Shipment_Date='$Shipment_Date',Buyer_Pays='$uyer_Pays',Profit='$Profit' WHERE Order_ID ='$Order_ID'";
  $update = mysqli_query($conn,$sqli);

  if($update){
    echo "<script>
          alert('Data updated!');
          window.location.href= 'Add Order1.php';
          </script>
    ";
    exit;
  }
  else{
    echo "error";
  }


}

if (isset($_POST['d'])) {

  echo $_POST['Buyer_Name'];
  $Buyer_Name= $_POST['Buyer_Name'];


    $sqli="SELECT Client_id FROM
clients WHERE Client_Name='$Buyer_Name'";
    $result=$conn->query($sqli);
    $row=$result->fetch_assoc();
    echo "id:" .$row['Client_id']."<br>";
     $siam=$row['Client_id'];
     session_start();
     $_SESSION['Client']=$siam;
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
       <a  href="profileA.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
       <a href="employee1.php"><i class="fa fa-users" aria-hidden="true"></i>Empolyees</a>
       <a href="Add Inv1.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Inventory</a>
       <a href="Add Order1.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Order</a>
       <a href="Add Client1.php"><i class="fa fa-users" aria-hidden="true"></i>Clients</a>
       <a href="hasin.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>Monthly activity</a>
  <a href="Prac.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>feedback</a>
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
           <label for="fname"><i class="fa fa-user"></i> ID</label>
           <input type="text" id="fname" name="firstname" placeholder="10">

           <label for="email"><i class="fa fa-envelope"></i>Buyer Name</label>
           <input type="text" id="email" name="email" placeholder="Fariha Nur Hasin">
           <a href="details.html"
           <button class="btn clickherefordetails"> details</button>
         </a>
           <label for="adr"><i class="fa fa-address-card-o"></i> quantity</label>
           <input type="text" id="adr" name="address" placeholder="10">
           <label for="Address"><i class="fa fa-calendar-o" aria-hidden="true"></i> Shipment date</label>
           <input type="text" id="city" name="city" placeholder="10/2/2020">
           <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i> buyers pays</label>
           <input type="text" id="Phone" name="Phone" placeholder="0173">

           <div class="row">
             <div class="col-50">
               <label for=""><i class="fa fa-money" aria-hidden="true"></i>Profit</label>
               <input type="text" id="Salary" name="Salary" placeholder="click here for profit">

             </div>
             <div class="col-50">



             </div>
             <div class="col-50">
               <a href="add order.php"
             <button class="btn Addneworder">Add new order</button>
                </a>
           <button href="index.html" class="btn Updateorder">Update order</button>


             </div>
           </div>
         </div>

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
