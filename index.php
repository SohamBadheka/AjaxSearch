<?php
session_start();

$hot_city=$_POST['cities'];
$_SESSION['hot_city'] = $hot_city;
echo $_SESSION['hot_city'];
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Delicious</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
<body>
<div>
	<center><h1>Search engines for hotels in your city!</h1></center>
	<form id="searchform">
		<div>
			<br/>
			<center>
			<label>Type the hotel name :</label> 
			<input type="text" size="30" value="" id="inputString" onkeyup="lookup(this.value)"/>
			<div id="suggestions"></div>
			
		</center>
		</div>
		
	</form>
</div>
</body>
</html>
