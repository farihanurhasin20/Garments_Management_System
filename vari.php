<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/inv.css">
  <link rel="stylesheet" href="css/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body >
  <div class="container">



        <form action="inven.php" method="post" >
 <div >
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." required>
              <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
 <div class="input-group-append" id="show-list">

</div>
</div>

      </div>
      <div class="col-md-5" style="position: relative;margin-top:-38px; margin-left: 215px;">
        <div >



        </div>
          </form>
      </div>
    </div>
  </div>
  <script type= "text/javascript">
  $(document).ready(function () {
    // Send Search Text to the server
    $("#search").keyup(function () {
      var searchText = $(this).val();
      if (searchText !='') {
        $.ajax({
          url: 'Actioni.php',
          method: "post",
          data: {
            query: searchText
          },
          success: function (response) {
            $("#show-list").html(response);
          }
        });
      } else {
        $("#show-list").html('');
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });
</script>

</body>

</html>
