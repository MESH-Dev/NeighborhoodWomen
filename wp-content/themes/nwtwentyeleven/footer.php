<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<div id="site-credits"><p>&copy; 2012 Neighborhood Women</p></div>
				<?php do_action( 'twentyeleven_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>-->
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php /* If this is the frontpage */ if ( is_page(38)) { ?>	
<!--<script type='text/javascript' src='http://neighborhoodwomen.org/wp/wp-includes/js/jquery/jquery.cycle.all.min.js'></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.rotator').cycle({
			fx: 'fade',
			speed: 4000
		});
	});
</script>-->
<?php } else {   } ?>
</body>
</html>