
<?php

session_start();

$weatherJ = $_SESSION['weatherJson'];

$parseJ = json_decode($weatherJ, true);	
//echo $parseJ["lf"][0];

?>
<!DOCTYPE html>
<html>
<head>  

	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<link href="style2.css" rel="stylesheet" type="text/css" media="all"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">   
		<form action="showweather.php" method="post">   
			<input style="background: #81bd60;color: white;" type="text" name="zip" required placeholder="Enter Location to view weather report">
			<span class="highlight"></span>
			<span class="bar"></span> <br>
			<input type="submit" value="search">
		</form>
	</div>
	<div class="header">
		<div class="header-top">
			<h2><img class="whe" src="sun.png" alt="" />Weather</h2>
			<ul>
				<li><p>°F</p></li>
			</ul>
			<div class="clear"> </div>
		</div>
		<div class="header-bottom">
			<div class="header-bottom1">
				<div class="header-head">
					<h4><?php	echo $parseJ["cond"][0]; ?></h4>
					<img src="rain.png" alt="" />
					<h6><?php	echo $parseJ["lf"][0]; ?></h6>
					<div class="bottom-head">
						<p><?php	echo $parseJ["dates"][0]; ?></p>
					</div>
				</div>
			</div>
			<div class="header-bottom1 header-bottom2">
				<div class="header-head">
				<h4><?php	echo $parseJ["cond"][1]; ?></h4>
					<img src="rain.png" alt="" />
					<h6><?php	echo $parseJ["lf"][1]; ?></h6>
					<div class="bottom-head">
						<p><?php	echo $parseJ["dates"][1]; ?></p>
					</div>
				</div>
			</div>
			<div class="header-bottom1">
				<div class="header-head">
					<h4><?php	echo $parseJ["cond"][2]; ?></h4>
					<img src="rain.png" alt="" />
					<h6><?php	echo $parseJ["lf"][2]; ?></h6>
					<div class="bottom-head">
						<p><?php	echo $parseJ["dates"][2]; ?></p>
					</div>
				</div>
			</div>
			<div class="header-bottom1 header-bottom2">
				<div class="header-head">
					<h4><?php	echo $parseJ["cond"][3]; ?></h4>
					<img src="rain.png" alt="" />
					<h6><?php	echo $parseJ["lf"][3]; ?></h6>
					<div class="bottom-head">
						<p><?php	echo $parseJ["dates"][3]; ?></p>
					</div>
				</div>
			</div>

			<div class="clear"> </div>
		</div>
	</div>
</div>
</body>
</html>

