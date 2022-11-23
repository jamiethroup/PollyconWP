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

$maximum_posts = get_field('maximum_posts');
$section_id = get_sub_field('section_id');
wp_reset_postdata();

echo '<section id="posts-loop" data-id="' . $section_id . '">';
    echo '<div class="container">';
    echo '<h2>Recent Words</h2>';
    echo "<p>Here are some of the most recent projects I've worked on.</p>";
    $the_query = new WP_Query( 'posts_per_page=5');
        if ( $the_query -> have_posts()):
        while ($the_query -> have_posts()) : $the_query -> the_post();
            $categories = get_the_category();
            $post_tags = get_the_tags();
            $reading_time = get_field('reading_time');
            echo '<article>';
            echo '<a href="' . get_the_permalink() . '" class="article__title">' . get_the_title() . '</a>';
            if ( ! empty( $categories ) ) {
                echo '<h3 class="article__category"> #' . esc_html( $categories[0]->name ) . '</h3>';
            }
            echo '<div class="article__reading">';
            if ( ! empty( $reading_time ) ) {
                echo '<p class="post--reading-time">' . $reading_time . ' reading time</p>';
            }
            if ( $post_tags ) {
                foreach( $post_tags as $tag ) {
                echo '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) .'" class="post--tag"> #' . $tag->name . '</a>'; 
                }
            }
            echo '</div>';
            echo '<div class="article__published_at"><time timedate="' . get_the_date() . '">';
            echo the_date();
            echo '</time></div>';
            echo '</article>';
        
        endwhile;
    else :
        echo "<p class='no-posts-message'>Sorry, there's no post's here at the moment... 😞</p>";
    endif;
    wp_reset_postdata();
    echo '</div>';
echo '</section>'; 

 