
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
	$apage = array('admin.php','admin/','admin/login.jsp','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/','memberadmin/','administratorlogin/','adm/','admin/account.php','admin/index.php','admin/login.php','admin/admin.php','admin/account.php','joomla/administrator','login.php',
'admin_area/admin.php','admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html','admin_area/index.php','bb-admin/index.php','bb-admin/login.php','bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html','admin/controlpanel.php','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html','webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html','admin/cp.php','cp.php','administrator/index.php','administrator/login.php','nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','administrator/account.php','administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php','bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','modelsearch/login.php','moderator.php','moderator/login.php','moderator/admin.php','account.php','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php',
'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php','adminarea/index.html','adminarea/admin.html','webadmin.php','webadmin/index.php','webadmin/admin.php','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html','administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html','panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','adminarea/index.php','adminarea/admin.php','adminarea/login.php','panel-administracion/index.php','panel-administracion/admin.php','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php','adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php');
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
  