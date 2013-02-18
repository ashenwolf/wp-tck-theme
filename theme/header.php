<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/holder.js"></script>-->
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/hotspot.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jani.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/app.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/hotspot.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/elastislide.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); // wp_head ?>

<script type="text/javascript">
    $(document).ready(function() {
		//$("#hotspot").makeHotspot(imagelist["55"]);
		$("#slider").elastislide();

		$("#slider li a").click(function() {
			var href = $(this).attr('href').substr(1);
			$("#hotspot").makeHotspot(imagelist[href]);
		});

      	initialize();
		//animateSpots();
    });
</script>

</head>

<body>
<div id="main">
	<div class="container" style="position: relative;">
		<div class="dark-background" id="top-background"></div>
		<div class="row" id="header">
			<div class="span8" id="top-slider-container">
				<div class="row">
					<div class="span8">
						<ul id="slider">
							<?php while ( have_posts() ) : the_post(); ?>
						  		<li>
						    		<a href="<?php the_permalink(); ?>">
						      			<?php the_post_thumbnail('thumbnail'); ?>
						    		</a>
						  		</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="span4" id="nav-background"></div>

				<h1 id="logo"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
			</div>
		</div>
