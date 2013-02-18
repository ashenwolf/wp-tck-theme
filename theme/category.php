<?php
get_header(); // Loads the header.php template. ?>

	<div class="row" id="item-container">
		<div class="span8">
			<div class="row">
				<div class="span8" id="item-furniture" >
					<?php $i = 0; ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php 
						if ($i==0)
							get_template_part( 'content', get_post_format() ); 
						$i++;
					?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>

		<div class="span4">
			<?php get_sidebar('primary'); ?>
		</div>				
	</div>				

<?php get_footer(); // Loads the footer.php template. ?>
