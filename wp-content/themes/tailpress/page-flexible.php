<?php
    /* Template Name: Flexible Template */
    get_header();
    if( have_rows('flexible_content') ):
        while ( have_rows('flexible_content') ) : the_row();
            if( get_row_layout() == 'timeline_section' ):
                get_template_part( 'template-parts/section', 'timeline' );
            elseif( get_row_layout() == 'hero_section' ): 
                get_template_part( 'template-parts/section', 'hero' );
            elseif( get_row_layout() == 'single_column' ): 
                get_template_part( 'template-parts/section', 'single-column' );
            elseif( get_row_layout() == 'portfolio' ): 
                get_template_part( 'template-parts/section', 'portfolio' );
            elseif( get_row_layout() == 'posts_loop' ): 
                get_template_part( 'template-parts/section', 'posts-loop' );
            endif;
        endwhile;
    endif;
    get_footer();
?>
