<?php
/**
    * Output the hero section ( homepage only)
    *
    * @since 1.0
    *  
    * @param string   $small_heading    Optional. Large title that appears first in the section
    *                           Default 'Yorkshire Based Shopify Developer'.
    * @param string   $large_heading  Optional. Smaller text that describes the message
    *                           Default 'I create bespoke online experiences, from worldwide to local clients'.
    * @param boolean   $include_button  Optional. Smaller text that describes the message
    *                           Default 'I create bespoke online experiences, from worldwide to local clients'.
    * @param string   $button_text  Optional. Text that appears in the button. Only displays if content exists
    *                           Default 'Learn More'.
    * @param string   $button_url  Optional. URL that will direct the user. Only displays if content exists
    * @param object   $background_image  Optional. Image Array for Responsive Use.
*/

$heading = get_sub_field('title');
$content = get_sub_field('content');
$section_id = get_sub_field('section_id');

echo '<section id="timeline" data-id="' . $section_id . '">';
    echo '<div class="container">';
            if(!empty($heading)) {
                echo '<h2 data-aos="fade-up">' . $heading . '</h2>';
            }
            if(!empty($content)) {
                echo '<article data-aos="fade-up"><p>' . $content . '</p></article>';
            }
            if( have_rows('job') ):
                while( have_rows('job') ) : the_row();
                    $counter = 300;
                    $company_name = get_sub_field('company_name');
                    $job_title = get_sub_field('job_title');
                    $years_active = get_sub_field('years_active');
                    $job_description = get_sub_field('job_description');
                    echo '<div class="timeline-grid">';
                        echo '<div class="timeline-grid__company">';
                        if(!empty($company_name)) {
                            echo '<h3 data-aos="fade-up" data-aos-delay="' . $counter + 200 .'">' . $company_name . '</h3>';
                        }
                        if(!empty($years_active)) {
                            echo '<h4 data-aos="fade-up" data-aos-delay="' . $counter + 500 .'">' . $years_active . '</h4>';
                        }
                        echo '</div>';
                        echo '<div data-aos="fade-up" class="timeline-grid__dot"><div class="timeline--line"></div></div>';
                        echo '<div class="timeline-grid__role">';
                        if(!empty($company_name)) {
                            echo '<h3 class="block md:hidden" data-aos="fade-up" data-aos-delay="' . $counter + 200 .'">' . $company_name . '</h3>';
                        }
                        if(!empty($years_active)) {
                            echo '<h4 class="block md:hidden" data-aos="fade-up" data-aos-delay="' . $counter + 500 .'">' . $years_active . '</h4>';
                        }
                        if(!empty($job_title)) {
                            echo '<h5 data-aos="fade-up" data-aos-delay="' . $counter + 700 .'">' . $job_title . '</h5>';
                        }
                        if(!empty($job_description)) {
                            echo '<p data-aos="fade-up" data-aos-delay="' . $counter + 1000 .'">' . $job_description . '</p>';
                        }
                        echo '</div>';
                    echo '</div>';
                endwhile;
            endif;
    echo '</div>';
echo '</section>';
?>
