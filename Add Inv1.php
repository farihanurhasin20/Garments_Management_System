<?php
  require 'connection.php';
if(isset($_POST['addi'])){
echo $_POST['Inv_Id'];
$Product_Name= $_POST['Product_Name'];
$Product_Price = $_POST['Product_Price'];
$Stock_Amount = $_POST['Stock_Amount'];
$Pots  = $_POST['Pots'];
$Inv_Id = $_POST['Inv_Id'];

 $sql= "INSERT  INTO inv ( Product_Name,Product_Price, Stock_Amount, Price_Of_The_Stock)
        values('$Product_Name','$Product_Price','$Stock_Amount','$Pots ');";
        echo $sql;
$is_inserted = mysqli_query($conn, $sql);
if($is_inserted){
  echo "<script>
        alert('Data Added!');
        window.location.href= 'Add Inv1.php';
        </script>
  ";
  exit;
}
else{
  echo"error";
}
}
if (isset($_POST['update_inv'])) {

  $ID = $_POST['Inv_Id'];
  $Client_name = $_POST['Product_Name'];
  $Company_name = $_POST['Product_Price'];
  $Address = $_POST['Stock_Amount'];
  $Phone  = $_POST['Pots'];

  $sqli = "UPDATE inv SET Product_Name ='$Client_name',Product_Price = '$Company_name',Stock_Amount = '$Address',Price_Of_The_Stock ='$Phone'  WHERE Inv_ID =' $ID'";
  $update = mysqli_query($conn,$sqli);

  if($update){
    echo "<script>
          alert('Data updated!');
          window.location.href= 'Add Inv1.php';
          </script>
    ";
    exit;
  }
  else{
    echo "error";
  }


}
if(isset($_POST['delete_inv'])){
  $ID=$_POST['Inv_Id'];
  $sql = "DELETE FROM inv WHERE Inv_ID='$ID'";
  $delete = mysqli_query($conn,$sql );
  if($delete){
    echo "<script>
          alert('Data Deleted!');
          window.location.href= 'Add Inv1.php';
          </script>
    ";
    exit;
  }
  else{
    echo"error";
  }
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

</head>
<body>







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
  <p></p>
</div>

<div class="rowa" >
  <div class="side">

    <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Inventory details</button>
    <div id="myDropdown" class="dropdown-content">
      <?php

      require 'vari.php';

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

            <label for="fname"><i class="fa fa-user"></i> ID</label>
            <input type="text" id="fname" name="firstname" placeholder="10">
            <label for="email"><i class="fa fa-envelope"></i> product name</label>
            <input type="text" id="email" name="email" placeholder="Fariha Nur Hasin">
            <label for="adr"><i class="fa fa-address-card-o"></i> Product price</label>
            <input type="text" id="adr" name="address" placeholder="Accountant">
            <label for="Address"><i class="fa fa-institution"></i>Amount in stock</label>
            <input type="text" id="city" name="city" placeholder="542 W. 15th Street">
            <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i>Price of the stock</label>
            <input type="text" id="Phone" name="Phone" placeholder="0173792085">

            <div class="row">
              <div class="col-50">

              </div>
              <div class="col-50">


              </div>

              <div class="col-50">
                <a href="add inventory.php"
                <button class="btn AddProduct">Add Product</button>

                 </a>
                <button href="index.html" class="btn Updateinv">Update inv</button>
                <button class="btn Deleteinv">Delete inv</button>
              </div>
            </div>

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
