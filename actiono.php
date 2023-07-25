<?php
  require 'connection.php';
     echo $_POST['query'];
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];

    $sql = "SELECT Buyer_Name FROM New_Order where Buyer_Name like '%$inpText%'";
     $result= $conn->query($sql);


    if ($result->num_rows>0) {
      while($row=$result->fetch_assoc()){
        echo "<a href='#'>".$row['Buyer_Name']."</a>";
      }
    }
      else{
        echo"<p class='list-group-item border-1'>No Record</p>";
      }
  }
?>
