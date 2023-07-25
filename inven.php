<?php
require 'connection.php';
if(isset($_POST['submit'])){
  $data=$_POST['search'];
  $sqli="select * FROM inv where Product_Name='$data'";
  $result=$conn->query($sqli);
  $row=$result->fetch_assoc();
  echo "id:" .$row['Product_Name']."<br>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/inv.css">
  <link rel="stylesheet" href="css/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>







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
  <p></p>
</div>

<div class="rowa" >
  <div class="side">

    <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Inventory details</button>
    <?php

    require 'varc.php';

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
            <h3>Inventory</h3>
             <form action="Add Inv1.php" method="post">
               <label for="fname"><i class="fa fa-user"></i> ID</label>
               <input type="text" id="fname" name="Inv_Id"  value="<?=$row['Inv_ID'];?>">
               <label for="email"><i class="fa fa-envelope"></i>product name</label>
               <input type="text" id="email" name="Product_Name"  value="<?=$row['Product_Name'];?>">
               <label for="adr"><i class="fa fa-address-card-o"></i> Product price</label>
               <input type="text" id="adr" name="Product_Price"  value="<?=$row['Product_Price'];?>">
               <label for="Address"><i class="fa fa-institution"></i> stock  Amount</label>
               <input type="text" id="city" name="Stock_Amount"  value="<?=$row['Stock_Amount'];?>">
               <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i> Price of the stock</label>
               <input type="text" id="Phone" name="Pots"  value="<?=$row['Price_Of_The_Stock'];?>">

            <div class="row">
              <div class="col-50">

              </div>
              <div class="col-50">


              </div>

              <div class="col-50">
                <a
                <button class="btn AddProduct">Add Product</button>

                 </a>
                <button  class="btn Updateinv" name='update_inv'>Update inv</button>
                <button class="btn Deleteinv" name='delete_inv'>Delete inv</button>
              </div>
            </div>
         </form>
          </div>

        </div>




    </div>


  </div>
</div>





  <div class="main">
    <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;

      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    </style>


    <h2 >INV Table</h2>
    <div >
    <table>
      <tr>
        <th>ID</th>
        <th>product name</th>
        <th> Product price</th>
          <th>Amount in stock</th>
          <th>Price of the stock</th>

      </tr>
      <?php
      require 'connection.php';
   $sql="SELECT * from inv";
    $get_data= mysqli_query($conn, $sql);
    if($get_data){

    }
    else{
      echo"error";
    }
while($row=mysqli_fetch_assoc($get_data)){

echo  '<tr>


<td>'.$row['Inv_ID'].'</td>
<td>'.$row['Product_Name'].'</td>
<td>'.$row['Product_Price'].'</td>
<td>'.$row['Stock_Amount'].'</td>
<td>'.$row['Price_Of_The_Stock'].'</td>


  </tr>';

}
 ?>

    </table>
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


  </body>
</html>

<div class="footer">
  <h3>we serve</h3>
</div>
</body>
</html>
