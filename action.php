<?php
  require 'connection.php';
     echo $_POST['query'];
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];

    $sql = "SELECT Employee_Name FROM employee where Employee_Name like '%$inpText%'";
     $result= $conn->query($sql);


    if ($result->num_rows>0) {
      while($row=$result->fetch_assoc()){
        echo "<a href='#'>".$row['Employee_Name']."</a>";
      }
    }
      else{
        echo"<p class='list-group-item border-1'>No Record</p>";
      }
  }
?>
