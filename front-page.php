<?php
get_header();

// Check if the flexible content field has rows of data
if (have_rows('sections')):

    // Loop through each section layout
    while (have_rows('sections')): the_row();
        // Render the Carousel section
        if (get_row_layout() == 'carousel'):
            get_template_part('template-parts/sections/carousel');

        // Render the About section
        elseif (get_row_layout() == 'about'):
            get_template_part('template-parts/sections/about');

        // Render the Counter section
        elseif (get_row_layout() == 'counter'):
            get_template_part('template-parts/sections/counter');

        // Render the Feature section
        elseif (get_row_layout() == 'feature'):
            get_template_part('template-parts/sections/feature');

        // Render the Why US section
        elseif (get_row_layout() == 'whyus'):
            get_template_part('template-parts/sections/whyus');

        // Render the Projects section
        elseif (get_row_layout() == 'projects'):
            get_template_part('template-parts/sections/projects');

        // Render the quote section
        elseif (get_row_layout() == 'quote'):
            get_template_part('template-parts/sections/quote');

        // Render the floatingcard section
        elseif (get_row_layout() == 'floatingcard'):
            get_template_part('template-parts/sections/floatingcard');


        // Render the quote section
        elseif (get_row_layout() == 'teams'):
            get_template_part('template-parts/sections/teams');

        // Render the Testimonials section
        elseif (get_row_layout() == 'testimonials'):
            get_template_part('template-parts/sections/testimonials');

        // Render the Services section
        elseif (get_row_layout() == 'services'):
            get_template_part('template-parts/sections/services');

        // Add other sections as needed

        endif;

    endwhile;

else:
    echo '<p>No sections selected.</p>';
endif;

get_footer();
