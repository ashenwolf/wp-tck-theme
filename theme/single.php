<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage tck
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="row" id="item-container" role="main">
		<div class="span8">
			<div class="row">
				<div class="span8" id="item-furniture" >
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

<!--					<nav class="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
					</nav><!-- .nav-single -->
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>

		<div class="span4">
			<?php get_sidebar('primary'); ?>
		</div>				
	</div>				

<?php get_sidebar(); ?>
<?php get_footer(); ?>
