<?php

if ( is_active_sidebar( 'primary' ) ) : ?>

			<div class="row">
				<div class="span4">
					<div class="nav-section">
						<h4>Каталог продукции</h4>
						<ul class="nav nav-pills nav-stacked">
					 	<?php wp_list_categories( array(
				 			'hide_empty'         => 0,
							'hierarchical'       => 0,
							'title_li'           => '',
					 	) ); ?> 
					 	</ul>
					</div>

					<?php dynamic_sidebar( 'primary' ); ?>
				</div>						
			</div>

<?php endif; ?>
