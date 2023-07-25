<?php
require 'connection.php';

if(isset($_POST['Update_employee'])){
  echo $_POST['Emoployee_name'];

    $ID=$_POST['Emoloyee_id'];
  $Full_name = $_POST['Emoployee_name'];
  $Designation = $_POST['Designation'];
  $Salary = $_POST['Salary'];
  $Email = $_POST['Email'];
  $Mobile_number  = $_POST['Mobile_number'];
  $DOB = $_POST['DOB'];
  $Manager_Id = $_POST['Manager_Id'];
  $Department_ID = $_POST['Department_ID'];
  $Address = $_POST['Address'];
  $sqli = "UPDATE employee SET Employee_Name ='$Full_name',Desingnation = '$Designation',salary = '$Salary',Email ='$Email' ,Mobile_Number ='$Mobile_number'  ,DOB= '$DOB'  ,Manager_ID ='$Manager_Id',Department_ID ='$Department_ID' ,Address ='$Address' WHERE Employee_ID =' $ID'";
echo"$sqli";
$update = mysqli_query($conn,$sqli );
if($update){
  echo "<script>
        alert('Data updated!');
        window.location.href= 'employee1.php';
        </script>
  ";
  exit;
}
else{
  echo "error";
}

}
if(isset($_POST['DELETE_EMPLOYEE'])){


  $ID=$_POST['Emoloyee_id'];
  $sql = "DELETE FROM employee WHERE Employee_ID='$ID'";
  $delete = mysqli_query($conn,$sql );
  if($delete){
    echo "<script>
          alert('Data Deleted!');
          window.location.href= 'employee1.php';
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

</div>

<div class="rowa" >
  <div class="side">

    <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn"> Employee details</button>
    <div id="myDropdown" class="dropdown-content">


    <?php

    require_once 'var.php';

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
            <h3>Employee info</h3>

              <label for="fname"><i class="fa fa-user"></i> ID</label>
              <input type="text" id="fname" name="Emoloyee_id" placeholder="10">
              <label for="email"><i class="fa fa-envelope"></i>Emoployee_name</label>
              <input type="text" id="email" name="Emoployee_name" placeholder="Fariha Nur Hasin">
              <label for="adr"><i class="fa fa-address-card-o"></i> Designation</label>
              <input type="text" id="adr" name="Designation" placeholder="Accountant">
              <label for="Address"><i class="fa fa-institution"></i>Salary</label>
              <input type="text" id="city" name="Salary" placeholder="542 W. 15th Street">
              <label for="Phone"><i class="fa fa-phone" aria-hidden="true"></i></i>Email</label>
              <input type="text" id="Phone" name="Email" placeholder="karim@gmail.com">
              <label for="Salary"><i class="fa fa-money" aria-hidden="true"></i>Mobile_number</label>
              <input type="text" id="Salary" name="Mobile_number" placeholder="1000000">
              <label for="Salary"><i class="fa fa-money" aria-hidden="true"></i>DOB</label>
              <input type="text" id="Salary" name="DOB" placeholder="10/10/10">
              <label for="Salary"><i class="fa fa-money" aria-hidden="true"></i>Manager_Id</label>
              <input type="text" id="Salary" name="Manager_Id" placeholder="10">
              <div class="row">
                <div class="col-50">
                  <label for="Salary"><i class="fa fa-money" aria-hidden="true"></i>Department_ID</label>
                  <input type="text" id="Salary" name="Department_ID" placeholder="1000000">
                  <label for="Email"><i class="fa fa-envelope"></i>Address</label>
                  <input type="text" id="Email" name="Address" placeholder="karim@gmail.com">
                </div>
                <div class="col-50">



                </div>

                <div class="col-50">
                  <a href="Add Employee.php"
    <button class="btn ADDEMPLOYEE">ADD EMPLOYEE</button>
    </a>

                  <button href="index.html" class="btn Updatedata">Update data</button>
                  <button class="btn DELETEEMPLOYEE">DELETE EMPLOYEE</button>
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


    <h1 >Empolyees</h1>
    <div >
    <table>
      <tr>
        <th>ID</th>
        <th>Full_name</th>
        <th>Designation</th>
          <th>Salary</th>
          <th>Email</th>
          <th>Mobile_number</th>
          <th>DOB</th>
            <th>Manager_Id</th>
              <th>Dept_id</th>
                <th>Adress</th>
      </tr>
      <?php
      require 'connection.php';
   $sql="SELECT * from employee";
    $get_data= mysqli_query($conn, $sql);
    if($get_data){
    

    }
    else{
      echo"error";
    }
while($row=mysqli_fetch_assoc($get_data)){

echo  '<tr>
    <td>'.$row['Employee_ID'].'</td>

<td>'.$row['Employee_Name'].'</td>
<td>'.$row['Desingnation'].'</td>
<td>'.$row['salary'].'</td>
<td>'.$row['Email'].'</td>
<td>'.$row['Mobile_Number'].'</td>
<td>'.$row['DOB'].'</td>
<td>'.$row['Manager_ID'].'</td>
<td>'.$row['Department_ID'].'</td>
<td>'.$row['Address'].'</td>
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
