<?php
  $_SESSION['username'] = "Admin";
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
        <h1 class="page-title"><span>Most Pupolar</span></h1>
        <p>Most Pupolar</p>
        <img src="img/title-decor.png" alt="blog" class="img">
    </div>
    <main>
        <div class="wrapper">
          <div class="gallery-container">		  
            <?php
            include "upload/config.php";
            $sql = "select *from csdl";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_query($con, $sql);
				$rowCount = mysqli_num_rows($result);
				echo '<div class="total-shows">Showing: '.$rowCount.'</div>';
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div><a href="#">
                  <div></div>
                  <div style="background-image: url("upload/up/'.$row["img"].'");"></div>
                  <h3>'.$row["name"].'</h3>
                  <p>'.$row["price"].' vnd</p>
                </a></div>';
              }
            }
            ?>
          </div>

          <?php
          include "upload\config.php";
          $sql = "select *from csdl";
          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result)) {
            ?>
            <div><a href="#">
                  <div></div>
                  <div style="background-image: url("upload/up/<?php echo $row['img']; ?>");"></div>
                  <h3><?php echo $row ['name']; ?></h3>
                  <p><?php echo $row ['price']; ?> vnd</p>
                  <p><?php echo $row ['price']; ?></p>
                </a></div>';
          <?php } ?>

          <!--<?php
          if (isset($_SESSION['username'])) {
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>-->

        </div>

    </main>
	<div class="wrapper">
<footer>
            <ul class="footer-links-main">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Catalog me</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>
            <ul class="footer-links-cases">
                <li><p>Cases</p></li>
                <li><a href="#">Shopping Guide</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">New Arrival</a></li>
            </ul>
            <div class="footer-sm">
                <a href="#">
                    <img src="img/youtube-symbol.png" alt="youtube icon">
                </a>
                <a href="#">
                    <img src="img/twitter-logo-button.png" alt="youtube icon">
                </a>
                <a href="#">
                    <img src="img/facebook-logo-button.png" alt="youtube icon">
                </a>
            </div>
        </footer>
    </div>
  </body>
</html>
