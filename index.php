<?php
	/* This unifies and simplifies site somewhat
	 * This could even be taken further (make a function to make divs with right classes, etc
	 */
	$page_name = $_GET["page_name"];
	if (empty($page_name))
		$page_name = "home";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hosni Berker</title>
	<script src="./popup.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="ISO-8859-1"> 
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body data-gr-c-s-loaded="true">
	<div class="center headerbar">
		<a href="index.php">Home</a>
		<a href="index.php?page_name=projects">Projects</a>
		<a href="index.php?page_name=about">About</a>
		<a href="index.php?page_name=contact">Contact</a>
	</div>
	<div class="center">
</div>
	<?php
		include "./$page_name.php";
	?>
</body>
</html>
