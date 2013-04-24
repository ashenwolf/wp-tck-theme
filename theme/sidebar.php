<?php
/**
 * Primary Sidebar Template
 *
 * The Primary sidebar template houses the HTML used for the 'Primary' sidebar.
 * It will first check if the sidebar is active before displaying anything.
 *
 * @package Hybrid
 * @subpackage Template
 * @link http://themehybrid.com/themes/hybrid/widget-areas
 */

if ( is_active_sidebar( 'primary' ) ) : ?>

			<div class="row">
				<div class="span4">
					<div class="nav-section">
						<h4>Каталог продукции</h4>
						<ul class="nav nav-pills nav-stacked">
						<?php $cat = get_the_category(); ?>
					 	<?php wp_list_categories( array(
				 			'hide_empty'         => 0,
							'hierarchical'       => 0,
							'title_li'           => '',
							'current_category'   => (is_archive() ? 0 : $cat[0]->cat_ID),
							'orderby'	     => 'ID',
					 	) ); ?> 
					 	</ul>
					</div>

					<?php dynamic_sidebar( 'primary' ); ?>
				</div>						
			</div>

<?php endif; ?>
