<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?> twoscore</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	<link href="<?php bloginfo( "template_url" ) ?>/css/main.css" rel="stylesheet" type="text/css">
</head>
<body <?php body_class(); ?>>
	<nav>
		<button class="menu-toggle">menu</button>
		<ul>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#consulting">Consulting</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#results">Results</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#speaking">Speaking</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#press">Press</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>/blog"<?php print ( !is_front_page() ? ' class="current"' : '' ) ?>>Blog</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#about">About</a></li>
			<li><a href="<?php print ( !is_front_page() ? get_bloginfo( 'home' ) : '' ) ?>#connect">Connect</a></li>
		</ul>
	</nav>

	<header id="header" class="header">
		
		<a href="/"><img src="<?php bloginfo( 'template_url' ) ?>/img/logo.png" class="logo" title="Two Score Consulting - Helping Credit Unions Thrive"></a>
		
	</header>
