<?php get_header(); ?>

<div class="site-content-wrapper">
	<?php get_sidebar('sticky'); ?> <!-- This will be your sidebar on the left -->

    <main id="primary" class="site-main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
    </main><!-- #primary -->
</div><!-- .site-content-wrapper -->

<?php get_footer(); ?>
