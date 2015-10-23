<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>

		<div id="tertiary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-6' ) ) : ?>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #tertiary .widget-area -->
		
<?php endif; ?>