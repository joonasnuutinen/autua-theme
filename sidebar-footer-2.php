<?php
/**
 * The sidebar containing the lower (or right) footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autua
 */

if ( ! is_active_sidebar( 'footer-2' ) ) {
	return;
}
?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'footer-2' ); ?>
</aside>
