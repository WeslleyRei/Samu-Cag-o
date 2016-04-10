<?php
	require_once('_modules/auto_load.php');
	require_once('_modules/settings_load.php');

	ob_start();

	session_name(SESSION_NAME);

	session_start();

	$Connection = new Connection();
?>

			<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="author" content="Yuri Sanas">
		<meta name="description" content="No Content">

		<title></title>

		<link rel="shortcut icon" href="_modules/_images/favicon.ico">

		<link rel="stylesheet" href="_modules/_css/bootstrap.min.css">
		<link rel="stylesheet" href="_modules/_css/style.min.css">
	</head>

	<body>
		<script src="_modules/_javascripts/jquery.min.css"></script>
		<script src="_modules/_javascripts/bootstrap.min.css"></script>
	</body>
			</html>
