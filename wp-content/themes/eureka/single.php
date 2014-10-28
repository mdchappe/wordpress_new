<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Eureka
 * @since Eureka 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" class="single-post-container bubble" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php eureka_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php eureka_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>