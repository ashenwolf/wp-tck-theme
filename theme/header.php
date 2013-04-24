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
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/modernizr.custom.17475.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/hotspot.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jani.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquerypp.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.elastislide.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/app.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/hotspot.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/elastislide.min.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); // wp_head ?>

<script type="text/javascript">
    var slide_num = 0;
    $(document).ready(function() {
		//$("#hotspot").makeHotspot(imagelist["55"]);
		$("#slider").elastislide({start: slide_num > 2 ? slide_num - 3 : 0 });

		/*$("#slider li a").click(function() {
			var href = $(this).attr('href').substr(1);
			$("#hotspot").makeHotspot(imagelist[href]);
		});*/

      	initialize();
	animateSpots();
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
							<?php if (is_archive()) {
								$cat_query = $wp_query;
								$location = 0;
							} else {
								$count = 0;
								$location = $count;
								$postid = get_the_ID();
								$category = get_the_category();
								$cat_query = new WP_Query('cat='.$category[0]->cat_ID.'&posts_per_page=100');
							} ?>
						        <?php while ($cat_query->have_posts()) : $cat_query->the_post(); ?>
							<?php   $count++;
								if ($postid == get_the_ID()) { $location = $count; } 
							?>
						  	<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></li>
						        <?php endwhile; ?>
						</ul>
						<script type="text/javascript">
							slide_num = <?php echo $location; ?>
						</script>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="span4" id="nav-background"></div>

				<h1 id="logo"><a href="/"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
			</div>
		</div>
