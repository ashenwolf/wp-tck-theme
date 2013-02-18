<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid
 * @subpackage Template
 */
?>
	<footer>
		<div class="dark-background" id="footer-background"></div>
		<?php get_sidebar('footer'); ?>
	</footer>

	</div><!-- #container -->
</div><!-- #main -->

<?php wp_footer(); // wp_footer ?>

</body>
</html>