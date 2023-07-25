<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">LAMOL</label>
    <ul>

            <li><a href="hasin.php">back</a></li>
    </ul>
  </nav>

  <div class="view">
	<img src="cutee.jpg">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h1 class="text-center mt-4 font-weight-bold">Feedback<br><br><br><br></h1>


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



      <div >
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Experiance</th>

        </tr>
        <?php
        require 'connection.php';
      $sql="SELECT * from feedback";
      $get_data= mysqli_query($conn, $sql);

      while($row=mysqli_fetch_assoc($get_data)){

      echo  '<tr>
      <td>'.$row['Name'].'</td>

      <td>'.$row['Email'].'</td>
      <td>'.$row['Age'].'</td>
      <td>'.$row['phone'].'</td>
      <td>'.$row['Message'].'</td>
      <td>'.$row['Experiance'].'</td>

      </tr>';

      }
      ?>



      </table>

</div>

</body>
</html>
