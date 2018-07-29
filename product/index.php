<?php
require("/connect.php");
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
			<li class="selected"><a href="index.php">home</a></li>
			<li><a href="">handling &amp; delivery</a></li>
			<li><a href="flowers.php?ID=1">our flowers</a></li>
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
		<div class="featured">
			<div>
				<ul>
					<li><a href=""><img src="images/backyard.jpg" alt="" /></a></li>
					<li><a href=""><img src="images/garden.jpg" alt="" /></a></li>		
				</ul>		
				<div class="section">
					<div>
						<a href=""><img src="images/bridal-bouquet.jpg" alt="" /></a>
						<h2>latest work</h2>	
					</div>	
				</div>
			</div>
		</div>
		<div class="content">
			<span class="heading"><img src="images/special-occasions-flowers.gif" alt="" /></span>
			<div>
				<div>
					<ul>
					<?php 
					$query = mysql_query("select * from flower", $connect);
					while($row = mysql_fetch_array($query)) { ?>   
						<li>
							<a href="flowers.php?ID=<?php echo $row["ID"] ?>">
							<img src="<?php echo $row['IMG'] ?>" alt="" />
							<span><?php echo $row['NAME'] ?></span>
							</a>
						</li>

                    <?php }; ?>						
								
					</ul>
					<h4><a href="">view all flowers</a></h4>
				</div>
				<ul>
					<li>
						<h3>This website template has been designed by Free Website Templates for you, for free.</h3>
						<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p>
					</li>		
					<li>
						<h3>Looking for more templates?</h3>
						<p>Just browse through all our Free Website Templates and find what you’re looking for. But if you don’t find any website template you can use, you can try our Free Web Design service and tell us all about it. Maybe you’re looking for something different, something special. And we love the challenge of doing something different and something special.</p>
					</li>	
					<li>
						<h3>We Have Free Templates for Everyone</h3>
						<p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the Terms of Use. You can even remove all our links if you want to.</p>
					</li>		
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<h4>Follow us:</h4>
				<ul>
					<li class="facebook"><a href="http://facebook.com" target="_blank">facebook</a></li>
					<li class="twitter"><a href="http://twitter.com" target="_blank">twitter</a></li>		
				</ul>
			</div>
			<p>Copyright &copy; 2018. All rights reserved.</p>
		</div>
	</div>
</body>
</html>