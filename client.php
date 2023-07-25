
<?php
require 'connection.php';
if(isset($_POST['submit'])){
  $data=$_POST['search'];
  $sqli="select * FROM clients where Client_Name='$data'";
  $result=$conn->query($sqli);
  $row=$result->fetch_assoc();
  echo "id:" .$row['Client_Name']."<br>";
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
    <a  href="profileA.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
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

<div class="rowa" >
  <div class="side">

    <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">client details</button>
    <div id="myDropdown" class="dropdown-content">
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

            <h3>Client info</h3>
          <form action="Add Client1.php" method="post">
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

              <div class="col-50">

                        <button  class="btn Updateclient" name="update_client">Update client</button>
                        <a href="Add client.php">
                        <button class="btn Addclient">Add client</button>
                        </a>
              </div>
            </div>
          </div>
        </form>

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


    <h1 >clients</h1>
    <div >
    <table>
      <tr>
        <th>ID</th>
        <th>Full name</th>
        <th>Company name</th>
          <th>Address</th>
  <th>phone</th>
            <th>Country</th>

                  <th>Email</th>
      </tr>
      <?php
      require 'connection.php';
   $sql="SELECT * from clients";
    $get_data= mysqli_query($conn, $sql);
    if($get_data){

    }
    else{
      echo"error";
    }
while($row=mysqli_fetch_assoc($get_data)){

echo  '<tr>


<td>'.$row['Client_id'].'</td>
<td>'.$row['Client_Name'].'</td>
<td>'.$row['Company_Name'].'</td>
<td>'.$row['Address'].'</td>
<td>'.$row['Phone'].'</td>
<td>'.$row['Country'].'</td>
<td>'.$row['Email'].'</td>

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
  <h2>we serve</h2>
</div>
</body>
</html>
