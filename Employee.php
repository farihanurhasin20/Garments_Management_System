<?php
  require 'connection.php';

if(isset($_POST['Emoployee_name']) && isset($_POST['Add_employee'])){
$Full_name = $_POST['Emoployee_name'];
$Designation = $_POST['Designation'];
$Salary = $_POST['Salary'];
$Email = $_POST['Email'];
$Mobile_number  = $_POST['Mobile_number'];
$DOB = $_POST['DOB'];
$Manager_Id = $_POST['Manager_Id'];
$Department_ID = $_POST['Department_ID'];
$Address = $_POST['Address'];

 $sql= "INSERT  INTO employee (Employee_Name, Desingnation, salary, Email, Mobile_Number, DOB, Manager_ID, Department_ID, Address)
        values('$Full_name','$Designation','$Salary','$Email','$Mobile_number','$DOB','$Manager_Id','$Department_ID','$Address');";
        echo $sql;
$is_inserted = mysqli_query($conn, $sql);
if($is_inserted){
  echo "inserted";

}
else{
  echo"error";
}
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
                 <h3>Employee info</h3>
                 <form action="Employee.php" method="post">
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
                      <a href="employee1.php"
                       <button class="btn Add" name="Add_employee">ADD</button>
 </a>
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
