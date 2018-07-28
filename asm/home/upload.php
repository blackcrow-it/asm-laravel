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
	<div class="d-nav">
	<?php
          if (isset($_SESSION['username'])) {
            echo '<div class="d-nav-left">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="Name..."><br/>
                <input type="text" name="price" placeholder="Price..."><br/>
                <input type="text" name="description" placeholder="Description..."><br/>
                <input type="file" name="file"><br/>
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>
		  <div class="d-nav-right">
			   <table>
					<tr>
						<th style="width:5%;">STT</th>
						<th style="width:15%;">Tên</th>
						<th style="width:10%;">Giá</th>
						<th style="width:30%;">Mô tả</th>
						<th>Image</th>
						<th style="width:15%;">Chức năng</th>
					</tr>							
					<?php
						include_once 'includes/dbh.inc.php';
						$sql = "SELECT * FROM PRODUCT ORDER BY sort DESC;";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
						  echo '<td colspan="5">SQL statement failed!</td>';
						} else {
						  mysqli_stmt_execute($stmt);
						  $result = mysqli_stmt_get_result($stmt);
						  $i = 1;
						  while ($row = mysqli_fetch_assoc($result)) {
							echo '	
							<tr>
								<td>'.$i.'</td>
								<td>'.$row["name"].'</td>
								<td>'.$row["price"].'</td>
								<td>'.$row["description"].'</td>
								<td>'.$row["url_Image"].'</td>
								<td></td>
							</tr>';
								$i++;
						  }
						}
						?>
					
			  </table>
		  </div>
		  </div>
            
        </div>

    </main>

  </body>
</html>
