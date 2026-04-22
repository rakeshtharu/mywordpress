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
        
        // Render the Testimonial section
        elseif (get_row_layout() == 'testimonial'):
            get_template_part('template-parts/sections/testimonial');
        
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