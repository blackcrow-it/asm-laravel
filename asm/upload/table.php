<?php
include "config.php";
if (isset($_POST["process"])) {
    $name = mysqli_escape_string($con, $_POST["name"]);
    $anh = $_FILES['c_img']['name'];
    $price = mysqli_escape_string($con, $_POST["price"]);
    $desc = mysqli_escape_string($con, $_POST["desc"]);
    if ($anh != null) {
        $path = "up/";
        $tmp_name = $_FILES['c_img']['tmp_name'];
        $anh = $_FILES['c_img']['name'];

        move_uploaded_file($tmp_name, $path . $anh);
        $sql = "insert into csdl(name,img,price,descrybe) values('$name','$anh','$price','$desc')";
        mysqli_query($con, $sql);
    }
}
?>

<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: \asm\admin\login.php");
  exit;
}
?>


<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/asm" class="simple-text">
                        Creative Tim
                    </a>
                </div>

                <ul class="nav">
                <!-- li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li> -->
                <li class="active">
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Table List</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i>
                        <b class="caret hidden-sm hidden-xs"></b>
                        <span class="notification hidden-sm hidden-xs">5</span>
                        <p class="hidden-lg hidden-md">
                          5 Notifications
                          <b class="caret"></b>
                      </p>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Notification 1</a></li>
                    <li><a href="#">Notification 2</a></li>
                    <li><a href="#">Notification 3</a></li>
                    <li><a href="#">Notification 4</a></li>
                    <li><a href="#">Another notification</a></li>
                </ul>
            </li>
            <li>
             <a href="">
                <i class="fa fa-search"></i>
                <p class="hidden-lg hidden-md">Search</p>
            </a>
        </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li>
         <a href="">
             <p>Account</p>
         </a>
     </li>
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <p>
          Dropdown
          <b class="caret"></b>
      </p>

  </a>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
</ul>
</li>
<li>
    <a href="/asm/admin/logout.php">
        <p>Log out</p>
    </a>
</li>
<li class="separator hidden-lg hidden-md"></li>
</ul>
</div>
</div>
</nav>
<div class="content">
    <div class="container-fluid">
        <h2 style="font-weight: bold; text-align: center;"> Upload Product </h2>
        <form  action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Tên">
          </div>
          <div class="form-group">
              <input type="file" class="form-control" id="image" name="c_img" placeholder="Ảnh">
          </div>
          <div class="form-group">
              <input type="number" class="form-control" id="price" name="price" placeholder="Giá">
          </div>
          <div class="form-group">
              <textarea class="form-control" id="desc" name="desc" placeholder="Mô tả"></textarea>
          </div>
          <button type="submit" name="process" class="btn btn-success">Thêm</button>
      </form>
  </div>
</div>

<?php
include "config.php";
$sql = "select *from csdl";
$result = mysqli_query($con, $sql);
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Table on Plain Background</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hình Ảnh</th>
                                <th>Gía</th>
                                <th>Mô tả</th>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row ['id']; ?> </td>
                                        <td><?php echo $row ['name']; ?></td>
                                        <td><img src="up/<?php echo $row['img']; ?>" style="max-width: 50px;"></td>
                                        <td><?php echo $row ['price']; ?></td>
                                        <td><?php echo $row ['descrybe']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                     Blog
                 </a>
             </li>
         </ul>
     </nav>
     <p class="copyright pull-right">
        &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
    </p>
</div>
</footer>


</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

