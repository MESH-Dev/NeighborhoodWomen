<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

				<?php if ( in_category('nwwg-timeline')) { ?>	
					<h2><a href="http://neighborhoodwomen.org/category/nwwg/nwwg-timeline/">NWWG -Timeline</a></h2>
					<?php } elseif ( in_category('nwwg-bios')) { ?><h2><a href="http://neighborhoodwomen.org/category/nwwg/nwwg-bios/">NWWG - Bios &gt;</a></h2><?php }
					elseif ( in_category('nwwg-media')) { ?><h2><a href="http://neighborhoodwomen.org/category/nwwg/nwwg-media/">NWWG - Media &gt;</a></h2><?php } 
					elseif ( in_category('nwwg-history')) { ?><h2><a href="http://neighborhoodwomen.org/category/nwwg/nwwg-history/">NWWG - History &gt;</a></h2><?php } 
					elseif ( in_category('movies-nwwg')) { ?><h2><a href="http://neighborhoodwomen.org/category/nwwg/movies-nwwg/">NWWG - Movies &gt;</a></h2><?php } 
					elseif ( in_category('ncnw-bios')) { ?><h2><a href="http://neighborhoodwomen.org/category/ncnw/ncnw-bios/">NCNW - Bios &gt;</a></h2><?php }
					elseif ( in_category('ncnw-media')) { ?><h2><a href="http://neighborhoodwomen.org/category/ncnw/ncnw-media/">NCNW - Media &gt;</a></h2><?php } 
					elseif ( in_category('ncnw-history')) { ?><h2><a href="http://neighborhoodwomen.org/category/ncnw/ncnw-history/">NCNW - History &gt;</a></h2><?php }else { }  ?>
					
<?php get_sidebar('two'); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->
					
					


					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>