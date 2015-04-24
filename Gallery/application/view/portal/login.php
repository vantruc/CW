

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Login</title>
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo URL ?>ims/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL ?>ims/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo URL ?>ims/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo URL ?>ims/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->

        <style type="text/css">
        body { background: url(<?php echo URL ?>ims/img/bg-login.jpg) !important; }
        </style>
    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="login-box">
                        <h2>Login to your account</h2>
                        <form class="form-horizontal" action="<?php echo URL ?>portal/login" method="post">
                            <fieldset>
                                <?php if($error){ ?>
                                <h2 style="color: red;">Username or password incorrect.</h2>
                                <?php } ?>
                                <div class="input-prepend" title="Username">
                                    <span class="add-on"><i class="halflings-icon user"></i></span>
                                    <input class="input-large span10" name="username" id="username" type="text" placeholder="Username"/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password">
                                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                                    <input class="input-large span10" name="password" id="password" type="password" placeholder="Password"/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="button-login">	
                                    <button type="login" name="login" class="btn btn-primary">Login</button>
                                </div>
                                <div class="clearfix"></div>
                        </form>	
                    </div><!--/span-->
                </div><!--/row-->


            </div><!--/.fluid-container-->
        </div><!--/fluid-row-->

    </body>
</html>
