<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content=""/>
			<title>Jozien Wijkhuijs</title>
			<?php wp_head(); ?>
			
			
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Karla:700|Space+Mono" rel="stylesheet"> 
	
	
	</head>

<body <?php body_class(); ?>> 
				
			


	<!-- site-header -->

<header class="site-header">
	
		<div id="maintitle"><h1 id="title">Jozien Wijkhuijs</h1></div><br>
		<div id="subtitleblock"><h3 id="subtitle">Journalist en tekstschrijver<span class="blinking-cursor">_</span></h3></div>

	
	<!-- navigation -->
			<nav class="frontnav">
				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			</nav>
			<div class="titlemenu">Menu</div>
		
	<!-- /navigation -->

</header>

<div class="container">
	<!-- /site-header -->