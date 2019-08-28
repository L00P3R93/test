
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>


                <div class="float-right">
                    <?php
                    if(isset($_SESSION['username'])){ ?>
                        <a href="#" class="" ><span class="mr-2 icon-account_circle"></span> <span class="d-none d-md-inline-block"><?php echo $_SESSION['username']; ?></span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="components/logout.php" class=""><span class="mr-2 icon-exit_to_app"></span> <span class="d-none d-md-inline-block">Sign Out</span></a>
                    <?php }else{ ?>
                        <a href="#" class="" data-toggle="modal" data-target="#loginModal"><span class="mr-2 icon-account_circle"></span> <span class="d-none d-md-inline-block">Sign In</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="" data-toggle="modal" data-target="#registerModal"><span class="mr-2 icon-add_alert"></span> <span class="d-none d-md-inline-block">Sign Up</span></a>
                    <?php } ?>


                </div>

            </div>

        </div>

    </div>
</div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a href="#" class="text-black"><span class="text-primary">Test Sys</span></a>
                </div>

                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">

                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <?php
                            if($_GET['level'] == 'user'){ ?>
                            <li><a href="home.php?user_name=<?php echo $_SESSION['username']?>&level=<?php echo $_GET['level'] ?>" class="nav-link">Home</a></li>
                            <li><a href="profile.php?user_name=<?php echo $_SESSION['username']?>&level=<?php echo $_GET['level'] ?>" class="nav-link">Profile</a></li>
                            <?php }else{ ?>
                            <li><a href="index.php" class="nav-link">Home</a></li>
                            <?php } ?>
                        </ul>
                    </nav>

                </div>

                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>