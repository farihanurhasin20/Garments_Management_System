<?php
    require 'includes/dbh.inc.php';
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

$sqli="UPDATE inv SET Stock_Amount='$pre' where Inv_ID='$Product_ID'";
$update = mysqli_query($conn,$sqli);

 $sql= "INSERT  INTO new_order ( Buyer_Name,Product_ID, Quantity, Shipment_Date,Buyer_Pays,Profit)
        values('$Buyer_Name','$Product_ID','$Quantity','$Shipment_Date','$uyer_Pays','$Profit');";
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
  <a  href="clientview.php"><i class="fa fa-home" aria-hidden="true"></i></i>Home</a>
  <a href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
  <a href="invenc.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Inventory</a>
  <a href="add inventoryc.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Order</a>

  <a href="clientview.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>Monthly activity</a>
  <a href="../index.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
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
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">hasin</a>
    <a href="#base">SIAM</a>
    <a href="#blog">SWARNA</a>

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
      require 'includes/dbh.inc.php';
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
