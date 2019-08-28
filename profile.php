<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/header.php'; ?>
<style type="text/css">
    body{
        margin-top: auto;
        background-color: #f1f1f1;
    }
    .border{
        border-bottom:1px solid #F1F1F1;
        margin-bottom:10px;
    }
    .main-secction{
        box-shadow: 10px 10px 10px;
    }
    .image-section{
        padding: 0px;
    }
    .image-section img{
        width: 100%;
        height:250px;
        position: relative;
    }
    .user-image{
        position: absolute;
        margin-top:-50px;
    }
    .user-left-part{
        margin: 0px;
    }
    .user-image img{
        width:100px;
        height:100px;
    }
    .user-profil-part{
        padding-bottom:30px;
        background-color:#FAFAFA;
    }
    .follow{
        margin-top:70px;
    }
    .user-detail-row{
        margin:0px;
    }
    .user-detail-section2 p{
        font-size:12px;
        padding: 0px;
        margin: 0px;
    }
    .user-detail-section2{
        margin-top:10px;
    }
    .user-detail-section2 span{
        color:#7CBBC3;
        font-size: 20px;
    }
    .user-detail-section2 small{
        font-size:12px;
        color:#D3A86A;
    }
    .profile-right-section{
        padding: 20px 0px 10px 15px;
        background-color: #FFFFFF;
        width: 800px !important;
    }
    .profile-right-section-row{
        margin: 0px;
    }
    .profile-header-section1 h1{
        font-size: 25px;
        margin: 0px;
    }
    .profile-header-section1 h5{
        color: #0062cc;
    }
    .req-btn{
        height:30px;
        font-size:12px;
    }
    .profile-tag{
        padding: 10px;
        border:1px solid #F6F6F6;
    }
    .profile-tag p{
        font-size: 12px;
        color:black;
    }
    .profile-tag i{
        color:#ADADAD;
        font-size: 20px;
    }
    .image-right-part{
        background-color: #FCFCFC;
        margin: 0px;
        padding: 5px;
    }
    .img-main-rightPart{
        background-color: #FCFCFC;
        margin-top: auto;
    }
    .image-right-detail{
        padding: 0px;
    }
    .image-right-detail p{
        font-size: 12px;
    }
    .image-right-detail a:hover{
        text-decoration: none;
    }
    .image-right img{
        width: 100%;
    }
    .image-right-detail-section2{
        margin: 0px;
    }
    .image-right-detail-section2 p{
        color:#38ACDF;
        margin:0px;
    }
    .image-right-detail-section2 span{
        color:#7F7F7F;
    }

    .nav-link{
        font-size: 1.2em;
    }

</style>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap" id="home-section">
            <?php include 'controllers/nav/nav.php'; ?>
            <div class="ftco-blocks-cover-1">
                <?php
                  $username = $_SESSION['username'];


                ?>
                <div class="container main-secction">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                            <img src="assets/images/background.jpg" width="800" height="333" alt="BACKGROUND_IMG">
                        </div>
                        <div class="row user-left-part">
                            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                                <div class="row ">
                                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                        <img src="userfiles/avatars/<?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'avatar'); ?>" class="rounded-circle">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                        <a href="update.registration.php?user_name=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level']; ?>&ty=ed1t" class="btn btn-primary btn-block follow">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                                <div class="row profile-right-section-row">
                                    <div class="col-md-12 profile-header">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left mb-3">
                                                <h1><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'f_name'); ?> <?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'l_name'); ?></h1>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Personal Details</a>
                                                    </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>ID</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'id'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'f_name'); ?> <?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'l_name'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'email'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'phone'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Gender</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'gender'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Password Reset Code</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'reset_phrase'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Last Updated</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <p><?php echo get_specific_data($dbconn,'users','username',$_SESSION['username'],'add_date'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
