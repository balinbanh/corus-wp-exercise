<?php
/**
 * Footer
 */
?>


<?php
wp_footer();

//Only load if singular. Load inline to optimize load time.
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
