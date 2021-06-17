<html>
	<head>
		<title>Home Page !</title>
		<style>
			*{
				margin:0;
				padding:0;
				box-sizing:border-box;
				}
			a{
				width:40px;
				height:40px;
				line-height:40px;
				position: fixed;
				left:80%;
				top:90%;
				background: yellow;
				color:red;
				font-size:60px;
				}
			</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
			</head>
  <body bgcolor="gray">
  	
  <center>
  	<?php
 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 echo $name;
 echo "<br>";
 echo $mobile;
 echo "<br>";
$con=mysqli_connect('0.0.0.0:3306','root','root','PhpLogin',);
if($con){
	echo "ok ! connect !";
	}
	else{
		echo "Bad connection !";
		}
$qry="INSERT INTO 'Login' ('Name', 'Mobile') VALUES ($name, $mobile)";
$RUN=mysqli_query($con,$qry);
if($RUN === TRUE){
	echo "Data inserted successfully !";
	}
	else{
		echo "Oh no ! There was a temporary problem in data insertion";
		}
		echo "<br>";
		
		echo "<br>";
		echo gethostname();
		echo "<br>";
		echo "<h1>My php code is missing a little wrong but I can't find it<marquee> properly 😭😭😭</marquee></h1>";
?>
  <a href="#">Top</a>
  </center>
  </body></html>