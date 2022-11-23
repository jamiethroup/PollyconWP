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
    $small_heading = get_sub_field('small_heading');
    $large_heading = get_sub_field('large_heading');
    $include_button = get_sub_field('include_button');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
    $background_image = get_sub_field('background_image');
    $section_id = get_sub_field('section_id');
?>
<section id="hero-section" data-id="<?php echo $section_id; ?>">
    <?php 
        if( $background_image ) {
            echo wp_get_attachment_image( $background_image, 'full' );
        }
    ?>
    <div class="content"  data-aos="fade-up">
        <?php
            if(!empty($small_heading)) {
                echo '<h4>' . $small_heading . '</h4>';
            }
            if(!empty($large_heading)) {
                echo '<h1>' . $large_heading . '</h1>';
            }
            if($include_button && !(empty($button_url))) {
                echo '<a href="' . $button_url .'" class="button light">' . $button_text . '</a>';
            }
        ?>
    </div>
    <div class="absolute bottom-20 right-10 p-6 md:p-0 pb-10 w-4 h-4 m-0 motion-safe:animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2" viewBox="0 0 47 97"><path d="M3.058 12.465a3.012 3.012 0 0 1 0-4.263c10.943-10.936 28.945-10.936 39.888 0 .565.565.883 1.333.883 2.132a3.043 3.043 0 0 1-3.014 3.014 3.017 3.017 0 0 1-2.132-.883c-8.605-8.596-22.757-8.596-31.362 0a3.012 3.012 0 0 1-4.263 0Zm8.902 3.179a3.017 3.017 0 0 0-.776 2.019 3.04 3.04 0 0 0 3.013 3.012c.749 0 1.472-.279 2.026-.783 3.721-3.714 9.837-3.714 13.558 0a3.014 3.014 0 0 0 2.124.888 3.014 3.014 0 0 0 2.139-.888 3.043 3.043 0 0 0 0-4.248 15.614 15.614 0 0 0-11.042-4.578c-4.14 0-8.115 1.648-11.042 4.578Zm34.044 36.152v21.556c0 12.619-10.383 23.002-23.002 23.002C10.384 96.354 0 85.971 0 73.352V51.796c0-12.618 10.384-23.002 23.002-23.002 12.619 0 23.002 10.384 23.002 23.002Zm-6.025 0c0-9.313-7.664-16.976-16.977-16.976S6.025 42.483 6.025 51.796v21.556c0 9.313 7.664 16.977 16.977 16.977s16.977-7.664 16.977-16.977V51.796ZM23.002 41.508a3.042 3.042 0 0 0-3.013 3.013v11.448a3.042 3.042 0 0 0 3.013 3.013 3.042 3.042 0 0 0 3.013-3.013V44.521a3.042 3.042 0 0 0-3.013-3.013Z" style="fill:#fff;fill-rule:nonzero"/></svg>
    </div>
</section>