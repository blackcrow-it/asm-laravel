<?php
// include "upload/config.php";
?>
 <?php
  $_SESSION['username'] = "Admin";
  $query = $_GET['txtsearch'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <?php include 'includes/menu.php'?>
    <div class="bg-most">
        <h1 class="page-title"><span>Result search for "<?php echo $query ?>"</span></h1>
        <p>Most Pupolar</p>
        <img src="img/title-decor.png" alt="blog" class="img">
    </div>
    <main>
        <div class="wrapper">
          <div class="gallery-container">         
            <?php
            include_once 'includes/dbh.inc.php';
            $sql = "SELECT * FROM csdl WHERE name LIKE '%".$query."%'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
                $rowCount = mysqli_num_rows($result);
                // echo '<div class="total-shows">Showing: '.$rowCount.'</div>';
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div><a href="flowers.php?id='.$row["id"].'">
                  <div style="background-image: url(upload/up/'.$row["img"].');"></div>
                  <h3>'.$row["name"].'</h3>
                  <p>'.$row["price"].' vnd</p>
                </a></div>';
              }
            }
            ?>
          </div>
        </div>

    </main>
    <div class="wrapper">
    </div>
  </body>
</html>
