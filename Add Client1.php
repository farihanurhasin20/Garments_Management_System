<?php
  require 'connection.php';
if(isset($_POST['addc']) &&isset($_POST['Email'])){
echo $_POST['Client_name'];
$Client_name = $_POST['Client_name'];
$Company_name = $_POST['Company_name'];
$Address = $_POST['Address'];
$Phone  = $_POST['Phone'];
$Country = $_POST['Country'];
$Email = $_POST['Email'];
 $sql= "INSERT  INTO clients (Client_Name, Company_Name,Address, Phone, Country, Email)
        values('$Client_name','$Company_name','$Address','$Phone','$Country','$Email');";
        echo $sql;
$is_inserted = mysqli_query($conn, $sql);
if($is_inserted){
  echo "<script>
        alert('Data Added!');
        window.location.href= 'Add Client1.php';
        </script>
  ";
  exit;
}
else{
  echo"error";
}
}
if (isset($_POST['update_client'])) {
  echo $_POST['Client_name'];
  $ID = $_POST['Client_id'];
  $Client_name = $_POST['Client_name'];
  $Company_name = $_POST['Company_name'];
  $Address = $_POST['Address'];
  $Phone  = $_POST['Phone'];
  $Country = $_POST['Country'];
  $Email = $_POST['Email'];
  $sqli = "UPDATE clients SET Client_Name ='$Client_name',Company_Name = '$Company_name',Address = '$Address',Phone ='$Phone' ,Country ='$Country', Email='$Email' WHERE Client_id =' $ID'";
  $update = mysqli_query($conn,$sqli);

  if($update){
    echo "<script>
          alert('Data updated!');
          window.location.href= 'Add Client1.php';
          </script>
    ";
    exit;
  }
  else{
    echo "error";
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

       <label for="fname"><i class="fa fa-user"></i> ID</label>
       <input type="text" id="fname" name="firstname" placeholder="10">
       <label for="email"><i class="fa fa-envelope"></i> Full name</label>
       <input type="text" id="email" name="email" placeholder="Fariha Nur Hasin">
       <label for="Company name"><i class="fa fa-address-card-o"></i>Company name</label>
       <input type="text" id="adr" name="Company name" placeholder="Accountant">
       <label for="Address"><i class="fa fa-institution"></i> Address</label>
       <input type="text" id="city" name="city" placeholder="542 W. 15th Street">
       <label for="Phone"><i class="fa fa-institution"></i> Phone</label>
       <input type="text" id="Phone" name="Phone" placeholder="0173792085">

             <div class="row">
               <div class="col-50">
                 <label for="Country">Country</label>
                     <input type="text" id="Country" name="Country" placeholder="1000000">
                 <label for="Email">Email</label>
                 <input type="text" id="Email" name="Email" placeholder="karim@gmail.com">
               </div>
               <div class="col-50">



               </div>

               <div class="col-50">

                         <button href="index.html" class="btn Updateclient">Update client</button>
                         <a href="Add client.php">
                         <button class="btn Addclient">Add client</button>
                         </a>
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
