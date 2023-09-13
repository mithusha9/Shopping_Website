<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/fandom.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<title>Choose your Category</title>
<style type="text/css">
		#logo{			
			width: 20.1%;
			float: left;
		}
		body{
			margin-top: 3em;
			margin-left: 3em;
		}
	</style>
</head>
<body bgcolor=black>

<div id=login>
	<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
	<?php echo $_SESSION['username'];?>
</div>
<br>

<div id="header"> <strong>Choose Your Category!</strong></div>

<table cellspacing="30px" cellpadding="10px">
<tr>

<td><div id="got"> 
<a href="got.php" style="text-decoration: none;">
<img class="circle" src="res/main/2.png">
<p><strong>Clothing</strong></p>
</a>
</div></td>

<td><div id="hp">
<a href="hp.php" style="text-decoration: none;">
<img class="circle" src="res/main/3.png">
<p><strong>Grocery</strong></p>
</a>
</div></td>

<td><div id="hg">
<a href="hg.php" style="text-decoration: none;">
<img class="circle" src="res/main/4.jpg">
<p><strong>Electronics</strong></p>
</a>
</div></td>

</tr>

</table>

</body>
</html>