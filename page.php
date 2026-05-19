<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rakesh_WP
 */

get_header();
?>
<?php get_template_part('template-parts/page-banner'); ?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		// get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		// if ( comments_open() || get_comments_number() ) :
		// 	comments_template();
		// endif;

		if (have_rows('page_sections')) :

			while (have_rows('page_sections')) : the_row();

				$layout = get_row_layout();

				get_template_part('template-parts/sections/' . $layout);

			endwhile;

		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
