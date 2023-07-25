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
                <h3>clinet info </h3>

                <form action="Add Client1.php" method="post">
                <label for="email"><i class="fa fa-envelope"></i> Client_name</label>

             <input type="text"  name="Client_name" required><br>

                <label for="adr"><i class="fa fa-address-card-o"></i> Company_name</label>
                <input type="text" id="adr" name="Company_name" required><br>
                <label for="Address"><i class="fa fa-institution"></i> Address</label>
                <input type="text" id="city" name="Address" placeholder="542 W. 15th Street">
                <label for="Phone"><i class="fa fa-institution"></i> Phone</label>
                <input type="text" id="Phone" name="Phone" placeholder="0173792085">

                <div class="row">
                  <div class="col-50">
                    <label for="Salary">Country</label>
                    <input type="text" id="Salary" name="Country" placeholder="1000000">
                    <label for="Email">Email</label>
                    <input type="text" id="Email" name="Email" placeholder="karim@gmail.com">
                  </div>
                  <div class="col-50">

                  </div>

                      <button class="btn Add" name='addc'>ADD</button>



                  </div>
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
