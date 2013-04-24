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

<!-- hit.ua -->
<a href='http://hit.ua/?x=102978' target='_blank'>
<script type="text/javascript"><!--
Cd=document;Cr="&"+Math.random();Cp="&s=1";
Cd.cookie="b=b";if(Cd.cookie)Cp+="&c=1";
Cp+="&t="+(new Date()).getTimezoneOffset();
if(self!=top)Cp+="&f=1";
if(navigator.javaEnabled())Cp+="&j=1";
if(typeof(screen)!='undefined')Cp+="&w="+screen.width+"&h="+
screen.height+"&d="+(screen.colorDepth?screen.colorDepth:screen.pixelDepth);
Cd.write("<sc"+"ript src='http://c.hit.ua/hit?i=102978&g=0&x=3"+Cp+Cr+
"&r="+escape(Cd.referrer)+"&u="+escape(window.location.href)+"'></sc"+"ript>");
</script>
</a>
<!-- / hit.ua -->


<?php wp_footer(); // wp_footer ?>

</body>
</html>