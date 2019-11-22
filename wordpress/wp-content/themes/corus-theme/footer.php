<?php
/**
 * Footer
 */
?>


<?php
wp_footer();

//Only load if singular.
if (is_singular()):
  ?>
  <script type="text/javascript">
  //compatability mode
  (function($) {
    $(document).ready(function() {
      if ($('.slick-container')) {
        $('.slick-container').slick();
      }
    });
  })(jQuery);
  </script>
  <?php
endif;

?>


</body>
</html>
