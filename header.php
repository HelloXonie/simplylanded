<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<?php wp_head();?>


</head>
<body>

<header>
	<div class='container'>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'main-menu',
			'menu_class' => 'top-bar'
		)
	
	);	
	?>
	</div>


</header>
