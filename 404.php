<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Autua
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Sivua ei löydy</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Etsimääsi sivua ei löydy.</p>

					<p>Jos kirjoitit osoitteen itse, tarkistathan, että se meni oikein.</p>

					<p>Jos klikkasit linkkiä, voit ilmoittaa toimimattomasta linkistä meille, niin yritämme korjata asian.</p>

					<p>Voit <a href="<?php echo esc_url( home_url( '/' ) ); ?>">siirtyä etusivulle tästä</a> tai etsiä sisältöä alla olevalla hakulomakkeella.</p>

					<?php
					get_search_form();
					?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
