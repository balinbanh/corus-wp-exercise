<?php get_header();
/*
* Template Name: Single
*/
?>

<h1><?php the_title(); ?></h1>

<?php
// Slider Images
$sliderImage1 = get_field('slider_image_1');
$sliderImage2 = get_field('slider_image_2');
$sliderImage3 = get_field('slider_image_3');

//Make sure at least 1 image exists.
if ($sliderImage1 || $sliderImage2 || $sliderImage3):
  ?>
  <div class="slick-container">
    <?php

    /*
     * If image1 exists, display
     */
    echo ($sliderImage1 ? '<img src="' . $sliderImage1['url'] .'" alt="' . $sliderImage1['alt'] . '">' : '');
    echo ($sliderImage2 ? '<img src="' . $sliderImage2['url'] .'" alt="' . $sliderImage2['alt'] . '">' : '');
    echo ($sliderImage3 ? '<img src="' . $sliderImage3['url'] .'" alt="' . $sliderImage3['alt'] . '">' : '');
    ?>
  </div>
  <?php
endif;

 ?>


<?php get_footer(); ?>
