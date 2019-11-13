<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autua
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_sidebar( 'footer-1' ); ?>
		<?php get_sidebar( 'footer-2' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
