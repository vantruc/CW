<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Art gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="<?php echo URL; ?>cms/css/main.css" rel="stylesheet" type="text/css">
    <!-- END CSS-->
    <!-- SCRIPT -->
    <script src="<?php echo URL; ?>cms/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>cms/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>cms/js/jquery.isotope.min.js"></script>
    <script src="<?php echo URL; ?>cms/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo URL; ?>cms/js/easing.js"></script>
    <script src="<?php echo URL; ?>cms/js/jquery.ui.totop.js"></script>
    <script src="<?php echo URL; ?>cms/js/selectnav.js"></script>
    <script src="<?php echo URL; ?>cms/js/ender.js"></script>
    <script src="<?php echo URL; ?>cms/js/custom.js"></script>
    <script src="<?php echo URL; ?>cms/js/responsiveslides.min.js"></script>
    <!-- END CSRIPT-->
    <script>
        // You can also use "
        $(window).load(function() {
        //$(function () {
          // Slideshow 4
          $(".pic_slider").responsiveSlides({
            auto: false,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });
        });
  </script>
</head>
<body>
    <!-- HEADER -->
    <?php
        require APP . 'view/cms/_templates/header.php';
    ?>
    <!-- END HEADER -->
    
    <!-- FEATURED -->
    <?php
        require APP . $content;
    ?>
    <!-- END FUATURED -->
    
    <!-- FOOTER -->
    <?php
        require APP . 'view/cms/_templates/footer.php';
    ?>
    <!-- END FOOTER -->

</body>
</html>
