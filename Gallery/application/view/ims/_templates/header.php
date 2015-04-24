<div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.html"><span>Art gallery</span></a>

                    <!-- HEADER MENU -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <!-- USER DROPDOWN -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php echo $_SESSION['username'] ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="<?php echo URL . 'portal/login/'?>"><i class="halflings-icon off"></i> Log Off</a></li>
                                </ul>
                            </li>
                            <!-- END USER DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END HEADER -->

                </div>
            </div>
        </div>