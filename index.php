<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Rodrigo Rivera</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  	<link rel="stylesheet" type="text/css" href="/css/styles.css">
		
	</head>

	<body>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="/js/scripts.js"></script>
		<script src="js/jquery.simplePagination.js"></script>
		<?php include 'header.php'; ?>
		<div class="row">
			<?php include 'body.php'; ?>
			<?php //include ("includes/pagination.php"); ?>
			<?php include 'lateral-bar.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
</body>
</html>