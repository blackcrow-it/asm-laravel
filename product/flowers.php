<?php
require("/connect.php");
$id = $_GET["ID"];
$result = mysql_query("select * from flower where ID = ".$id,$connect);
$row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Flower Shop</title>

<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

</head>
<body>



	<div id="header">
		<ul>
			<li><a href="index.php">home</a></li>
			<li><a href="">handling &amp; delivery</a></li>
			<li class="selected"><a href="flowers.php?ID=1">our flowers </a></li>
			<li><a href="">payment &amp; ordering</a></li>
			<li><a href="">about</a></li>
			<li><a href="">blog</a></li>
			<li><a href="">contact us</a></li>			
		</ul>
		<div class="logo">
			<a href=""><img src="images/logo.gif" alt="" /></a>
		</div>
	</div>
	<div id="body">
		<div class="handling">
			<h1>our flowers</h1>	
			<div>			

				<ul>
					<li><p> <?php echo $row['NAME'] ?> </p></li>					<li><p><?php echo $row['PRICE'] ?></p></li>					<li><p><?php echo $row['DETAIL'] ?></p></li>				
				</ul>		
				<div><img src="<?php echo $row['IMG'] ?>" alt="" /></div>	
				

			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<h4>Follow us:</h4>
				<ul>
					<li class="facebook"><a href="http://facebook.com/" target="_blank">facebook</a></li>
					<li class="twitter"><a href="http://twitter.com/" target="_blank">twitter</a></li>		
				</ul>
			</div>
			<p>Copyright &copy; 2018. All rights reserved.</p>
		</div>
	</div>
</body>
</html>