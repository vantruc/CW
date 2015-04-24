<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- META -->
        <meta charset="utf-8">
        <title>Managing art gallery</title>
        <!-- END META -->
        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- END MOBILE SPECIFIC -->
        <!-- CSS -->
        <link id="bootstrap-style" href="<?php echo URL; ?>ims/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL; ?>ims/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo URL; ?>ims/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo URL; ?>ims/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- END CSS-->
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- END FAVICON -->
    </head>
    <body>
        <!-- HEADER -->
        <?php
            require APP . 'view/ims/_templates/header.php';
        ?>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- MAIN MENU -->
                <?php
                    require APP . 'view/ims/_templates/menu.php';
                ?>
                <!-- END MAIN MENU -->

                <!-- CONTENT -->
                
                <?php
                    require APP . $content;
                ?>
                
                <!-- END CONTENT -->
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- fOOTER -->
        <?php
            require APP . 'view/ims/_templates/footer.php';
        ?>
        <!-- END FOOTER-->
    </body>
</html>
