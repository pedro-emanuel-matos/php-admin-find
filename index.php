
<?php 
	error_reporting(0);


	if (!isset($_POST['site'])){


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>ADMIN FINDER  V1.0</title>
 	<meta charset="utf-8">
 	<style type="text/css">
 	body{
 		background-color: #95a5a6;
 	}

 	#form{
 		background-color: #D3D3D3;
 		border:none;
 		border-radius: 4px;
 		font-family: consolas;
 		height: 40px;
 		width: 300px;
 		font-size: 25px;
 		text-align: center;
 	}
 	#btn{
 		height: 40px;
 		width: 300px;
 		background-color: #34495e;
 		border:none;
 		border-radius: 4px;
 		top: 0;

 	}#btn:hover{
 		background-color: #2980b9;
 	} 	


 	</style>
 </head>
 <body>
 	<center>
 	<center><H3>Admin finder v1.0 </H3></center>
	 <form method="post">
	 		<br>
		 	<input type="text" name="site" placeholder="yoursite.com" id="form"><br><br>
		 	<input type="submit" id="btn" value="scan"> 	
	 </form>
	</center>
 </body>
 </html>
 <?php

} else{
	$site = $_POST['site']."/";
	$apage = array(put web panels here);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>RESULTS</title>
		<meta  charset="utf-8">
		<style type="text/css">
		body{
			background-color: black;
		}
		#not-found{
	 		color: red;
	 		font-size: 20px;
	 		font-family: consolas;

 		}
 		#found{
 			color: green;
 			font-family: consolas;
 			font-size: 20px;
 			
 		}
		</style>
	</head>
	<body>
	<center>
	<?php
		foreach ($apage as $page) {
			$way = $site.$page;
			$return = get_headers($way);
			if (eregi('200', $return[0])) {
				echo  '<div id="found">[+]'.htmlspecialchars($way).' FOUND</div><br>';
			}else{
				echo '<div id="not-found">[-]'.htmlspecialchars($way).' not found </div><br>';
				}
			}
	?>
	</center>
	</body>
	</html>
		
	<?php 
		}
	 ?>
  
