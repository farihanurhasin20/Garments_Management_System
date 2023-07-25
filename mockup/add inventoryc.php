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

</div>

<div class="column" style="background-color:black;">

</div>






<div class="row">
<div class="col-75">
  <div class="container">


      <div class="row">
        <div class="col-50">
          <h3> Order info</h3>
          <form action="invenc.php" method="post">
          <label for="email"><i class="fa fa-envelope"></i>Buyer Name</label>
          <input type="text" id="email" name="Buyer_Name" placeholder="Fariha Nur Hasin">
          <label for="adr"><i class="fa fa-address-card-o"></i>Product_Id</label>
          <input type="text" id="adr" name="Product_ID" placeholder="10">
          <label for="adr"><i class="fa fa-address-card-o"></i> quantity</label>
          <input type="text" id="adr" name="Quantity" placeholder="10">
          <label for="Address"><i class="fa fa-calendar-o" aria-hidden="true"></i> Shipment date</label>
          <input type="text" id="city" name="Shipment_Date" placeholder="10/2/2020">
          <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i> buyers pays</label>
          <input type="text" id="Phone" name="Buyer_Pays" placeholder="0173">

          <div class="row">
            <div class="col-50">
              <label for=""><i class="fa fa-money" aria-hidden="true"></i>Estimated cost</label>
              <input type="text" id="Salary" name="Profit" placeholder="">

            </div>
            <div class="col-50">



            </div>

            <button class="btn Addneworder" name="new_order">Add new order</button>


          </div>
        </div>
      </form>

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
