<?php
/**
 * The sidebar containing the upper (or left) footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autua
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</aside>
