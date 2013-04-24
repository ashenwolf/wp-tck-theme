<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h3 id="title-box" class="entry-title"><?php the_title(); ?></h3>
	</header>

	<div id="hotspot-container">
		<div id="image-container">
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<div class="entry-content" style="position: absolute; bottom: 32px; color: #fff; text-align: center;">
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->
		<?php endif; ?>
		</div>
	</div>

	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
	<div class="featured-post">
		<?php _e( 'Featured post', 'twentytwelve' ); ?>
	</div>
	<?php endif; ?>

	</article><!-- #post -->
