<?php
  require 'connection.php';
     echo $_POST['query'];
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];

    $sql = "SELECT Client_Name FROM clients where Client_Name like '%$inpText%'";
     $result= $conn->query($sql);


    if ($result->num_rows>0) {
      while($row=$result->fetch_assoc()){
        echo "<a href='#'>".$row['Client_Name']."</a>";
      }
    }
      else{
        echo"<p class='list-group-item border-1'>No Record</p>";
      }
  }
?>
