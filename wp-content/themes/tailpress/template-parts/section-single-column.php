<?php
/**
    * Output a single column of central text with .
    *
    * @since 1.0
    *  
    * @param string   $heading    Optional. Large title that appears first in the section
    *                           Default 'What do I do?'
    * @param string   $content  Optional. Smaller text that describes the message
    *                           Default 'Hi, I’m Jamie! I’m a twenty nine year old Shopify developer based in the UK'
    * @param object   $statistics  Posts Loop for Statistics to show under the content. Maximum of 3
    * @param string   $large_text  Large text used for statistics i.e. 40%
    *                           Default '40<span>%</span>'
    * @param string   $content  Shows the content for the statistics
    *                           Default 'Learn More'
*/

$heading = get_sub_field('heading');
$content = get_sub_field('content');
$section_id = get_sub_field('section_id');

echo '<section id="single-column" data-id="' . $section_id . '">';
    echo '<div class="container">';
            if(!empty($heading)) {
                echo '<h2 data-aos="fade-up">' . $heading . '</h2>';
            }
            if(!empty($content)) {
                echo '<article data-aos="fade-up"><p>' . $content . '</p></article>';
            }
            if( have_rows('statistics') ):
                echo '<div class="statistics-grid">';
                $counter = 0;
                while( have_rows('statistics') ) : the_row();
                    $counter = $counter + 300;
                    $large_text = get_sub_field('large_text');
                    $content = get_sub_field('content');
                    echo '<div data-aos="fade-up" data-aos-delay="' . $counter . '">';
                    if(!empty(get_sub_field('large_text'))) {
                        echo '<h5 class="large-number">' . $large_text . '</h2>';
                    }
                    if(!empty(get_sub_field('content'))) {
                        echo '<p>' . $content . '</p>';
                    }
                    echo '</div>';
                endwhile;
                echo '</div>';
            endif;
    echo '</div>';
echo '</section>';