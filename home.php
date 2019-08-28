<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/header.php'; ?>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap" id="home-section">
            <?php include 'controllers/nav/nav.php'; ?>
            <div class="ftco-blocks-cover-1">
                <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/depot_hero_1.jpg')">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                            <div class="col-lg-6">
                                <h1>Test System</h1>
                                <p class="mb-5">To access the System Functionalities, Sign In or Sign Up</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END .ftco-cover-1 -->

            </div>
        <?php include 'controllers/base/footer.php' ?>

        </div>

        <?php include 'controllers/base/javascript.php'; ?>


    </body>

</html>
