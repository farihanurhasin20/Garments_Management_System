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
    <div class="row">
      <div class="col-75">
        <div class="container">


            <div class="row">
              <div class="col-50">
                <h3>inventory info </h3>
                  <form action="Add Inv1.php" method="post">
              
                <label for="email"><i class="fa fa-envelope"></i>product name</label>
                <input type="text" id="email" name="Product_Name" placeholder="Fariha Nur Hasin">
                <label for="adr"><i class="fa fa-address-card-o"></i> Product price</label>
                <input type="text" id="adr" name="Product_Price" placeholder="Accountant">
                <label for="Address"><i class="fa fa-institution"></i> stock  Amount</label>
                <input type="text" id="city" name="Stock_Amount" placeholder="542 W. 15th Street">
                <label for="Phone"><i class="fa fa-money" aria-hidden="true"></i> Price of the stock</label>
                <input type="text" id="Phone" name="Pots" placeholder="0173792085">

                <div class="row">
                  <div class="col-50">

                  </div>
                  <div class="col-50">

                  </div>

                      <button class="btn Add" name="addi">ADD</button>



                  </div>
                </div>
              </form>
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
