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

echo '<section id="' . $section_id . '" class=py-20" data-id="' . $section_id . '">';
    echo '<div id="portfolio-intro" class="container">';
        echo '<div data-aos="fade-up" class="grid">';
            echo '<div class="portfolio-intro__title">';
                if(!empty($heading)) {
                    echo '<h2 >' . $heading . '</h2>';
                }
                if(!empty($content)) {
                    echo '<article><p>' . $content . '</p></article>';
                }
            echo '</div>';
            echo '<div class="portfolio-intro__github">';
                echo '<a href="https://github.com/jamiethroup" class="">View My Github Projects<span class="arrow"></span></a>';
            echo '</div>';
        echo '</div>';
        echo '<div id="portfolio-slider">';
        echo '<div class="col-span-12"> <div class="swiper mySwiper"> <div class="swiper-wrapper">';
            if( have_rows('portfolio_piece') ):
                while( have_rows('portfolio_piece') ) : the_row();
                    $counter = 300; 
                    $type_of_work = get_sub_field('type_of_work');
                    $title = get_sub_field('title');
                    $background_colour = get_sub_field('background_colour');
                    $background_image = get_sub_field('background_image');
                    $link = get_sub_field('link');
                    echo '<div class="swiper-slide">';
                        echo '<div class="portfolio-box" style="'; 
                        if(!empty($background_image)) {
                            echo 'background-image: url(' . $background_image . ');';
                        }
                        if(!empty($background_colour)) {
                            echo 'background-color:' . $background_colour . '";';
                        }
                    echo '</div>';
                    echo '<div class="portfolio-slider__content">';
                        if(!empty($type_of_work)) {
                            echo '<h3>' . $type_of_work  . '</h3>';
                        }
                        if(!empty($title)) {
                            echo '<p>' . $title .  '</p>';
                        }
                        if(!empty($link)) {
                            echo '<a href="' . $link . '" class="project-link">View Project</a>';
                        }
                        echo '</div>';
                    echo '</div>';
                    echo '</div>';
                endwhile;
            endif; 
        echo '</div> </div> </div>';
        echo '</div>';
    echo '</div>';
echo '</section>';