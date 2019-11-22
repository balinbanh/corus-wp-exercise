<?php get_header();
/*
* Template Name: Single
*/
?>

<h1><?php the_title(); ?></h1>

<?php

$post_id = get_the_ID();

// Slider Images. Ensure to grab field based on post id
$sliderImage1 = get_field('slider_image_1', $post_id);
$sliderImage2 = get_field('slider_image_2', $post_id);
$sliderImage3 = get_field('slider_image_3', $post_id);

//Make sure at least 1 image exists.
if ($sliderImage1 || $sliderImage2 || $sliderImage3):
  ?>
  <div class="slick-container">
    <?php

    /*
     * If image exists, display.
     */
    echo ($sliderImage1 ? '<div><img src="' . $sliderImage1['url'] .'" alt="' . $sliderImage1['alt'] . '"></div>' : '');
    echo ($sliderImage2 ? '<div><img src="' . $sliderImage2['url'] .'" alt="' . $sliderImage2['alt'] . '"></div>' : '');
    echo ($sliderImage3 ? '<div><img src="' . $sliderImage3['url'] .'" alt="' . $sliderImage3['alt'] . '"></div>' : '');
    ?>
  </div>
  <?php
endif;

 ?>


<?php get_footer(); ?>
