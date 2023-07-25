<?php


$db_server="localhost";

$db_user="root";
$db_pass="";
$db_name="project311";

$conn =new mysqli($db_server,$db_user,$db_pass,$db_name) or die("unable to connect");

if($conn){

}


$qur="select SUM(Buyer_Pays) as  'sumsalary' from New_Order";
$res =mysqli_query($conn,$qur);
$data=mysqli_fetch_assoc($res);


$qury ="select SUM(Profit) as 'cost' from New_Order";
$resl =mysqli_query($conn,$qury);
$dat=mysqli_fetch_assoc($resl);

$qurey ="select SUM(salary) as 'salary' from employee";
$reslt =mysqli_query($conn,$qurey);
$da=mysqli_fetch_assoc($reslt);


 $total=$da['salary']+$dat['cost'];

$qurey1 ="select COUNT(Order_ID) as 'order' from New_Order";
$reslt1 =mysqli_query($conn,$qurey1);
$da1=mysqli_fetch_assoc($reslt1);
$order=$da1['order'];

$qurey1="SELECT SUM(Buyer_Pays) as 'dec' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/12/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$dec=mysqli_fetch_assoc($reslt1);


$qurey1="SELECT SUM(Buyer_Pays) as 'nov' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/11/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$nov=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'oct' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/10/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$oct=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'sep' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/09/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$sep=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'aug' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/08/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$aug=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'july' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/07/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$july=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'jun' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/06/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$jun=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'may' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/05/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$may=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'ap' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/04/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$ap=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'mar' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/03/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$mar=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'feb' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/02/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$feb=mysqli_fetch_assoc($reslt1);

$qurey1="SELECT SUM(Buyer_Pays) as 'jan' FROM new_order GROUP BY Shipment_Date
HAVING Shipment_Date LIKE '%/01/%'";
$reslt1 =mysqli_query($conn,$qurey1);
$jan=mysqli_fetch_assoc($reslt1);

 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="css/h.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript">
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload=function(){null};
  </script>

</head>

<body id="page-top">
    <div id="wrapper">
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
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                               <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.png"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a cla


                                            class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"><b>Monthly Activity</b></h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$<?php echo $data['sumsalary']; ?></span></div>
                                    </div>

                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Estimated cost</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$<?php echo $total; ?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Tasks</span></div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>50%</span></div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Order Requests</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $order; ?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[
                                  &quot;Jan&quot;,
                                  &quot;Feb&quot;,
                                  &quot;Mar&quot;,
                                  &quot;Apr&quot;,
                                  &quot;May&quot;,
                                  &quot;Jun&quot;,
                                  &quot;Jul&quot;,
                                  &quot;Aug&quot;,
                                  &quot;sep&quot;,
                                  &quot;oct&quot;,
                                  &quot;nov&quot;,
                                  &quot;Dec&quot;
                                  ],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[
                                    &quot;<?php echo $jan['jan']; ?>&quot;,
                                    &quot;<?php echo $feb['feb']; ?>&quot;,
                                    &quot;<?php echo $mar['mar']; ?>&quot;,
                                    &quot;<?php echo $ap['ap']; ?>&quot;,
                                    &quot;<?php echo $may['may']; ?>&quot;,
                                    &quot;<?php echo $jun['jun']; ?>&quot;,
                                    &quot;<?php echo $july['july']; ?>&quot;,
                                    &quot;<?php echo $aug['aug']; ?>&quot;,
                                    &quot;<?php echo $sep['sep']; ?>&quot;,
                                    &quot;<?php echo $oct['oct']; ?>&quot;,
                                    &quot;<?php echo $nov['nov']; ?>&quot;,
                                    &quot;<?php echo $dec['dec']; ?>&quot;
                                    ],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[
                                  &quot;clients&quot;,

                                  &quot;donation&quot;
                                  ],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                                <div
                                    class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;clients</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;donation</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <!--
                            <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Todo List</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <h6 class="mb-0"><strong>Order #14 Delivery</strong></h6><span class="text-xs">5 January</span></div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <h6 class="mb-0"><strong>Receving Raw Raterials</strong></h6><span class="text-xs">15 January</span></div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2"></label></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <h6 class="mb-0"><strong>Quality check</strong></h6><span class="text-xs">30 January</span></div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3"></label></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary font-weight-bold m-0">Todo List</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row align-items-center no-gutters">
                                <div class="col mr-2">
                                  <div >
                                  <table>
                                    <tr>
                                      <th>ID</th>
                                      <th>product name</th>
                                      <th> Needed_Amount</th>

                                    </tr>
                                    <?php
                                    require 'connection.php';
                                 $sql="SELECT * from inv_needed";
                                  $get_data= mysqli_query($conn, $sql);
                                  if($get_data){

                                  }
                                  else{
                                    echo"error";
                                  }
                              while($row=mysqli_fetch_assoc($get_data)){

                              echo  '<tr>


                              <td>'.$row['ID'].'</td>
                              <td>'.$row['Product_name'].'</td>
                              <td>'.$row['Needed_Amount'].'</td>



                                </tr>';

                              }
                               ?>
                                  </table>
                                  </div>
                                </div>


                                    
                                <div class="col-auto">
                                    <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                                </div>
                            </div>

            </div>
                <!--<div class="col">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <p class="m-0">Primary</p>
                                    <p class="text-white-50 small m-0">#4e73df</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <p class="m-0">Success</p>
                                    <p class="text-white-50 small m-0">#1cc88a</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-info shadow">
                                <div class="card-body">
                                    <p class="m-0">Info</p>
                                    <p class="text-white-50 small m-0">#36b9cc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-warning shadow">
                                <div class="card-body">
                                    <p class="m-0">Warning</p>
                                    <p class="text-white-50 small m-0">#f6c23e</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-danger shadow">
                                <div class="card-body">
                                    <p class="m-0">Danger</p>
                                    <p class="text-white-50 small m-0">#e74a3b</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-secondary shadow">
                                <div class="card-body">
                                    <p class="m-0">Secondary</p>
                                    <p class="text-white-50 small m-0">#858796</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
        </div>
    </footer>
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
