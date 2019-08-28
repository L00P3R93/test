<?php include 'controllers/base/header.php'; ?>
<?php
error_reporting(0);
    $user_name = mysqli_real_escape_string($dbconn,$_GET['user_name']);
    $level = mysqli_real_escape_string($dbconn,$_GET['level']);


    $sql = "SELECT * FROM users WHERE username='$user_name'";
    $result = mysqli_query($dbconn,$sql);
    $rws = mysqli_fetch_array($result);

    $resetMessage = "This is your <b>RESET CODE: ".$rws['reset_phrase']."</b> keep it safe and remember it incase you need to RESET your PASSWORD";

?>

    <style type="text/css">
        :root {
            --input-padding-x: .75rem;
            --input-padding-y: .75rem;
        }
        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group > input,
        .form-label-group > label {
            padding: var(--input-padding-y) var(--input-padding-x);


        }


        .form-label-group > label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0; /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown) ~ label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }
    </style>
    <body>
        <div class="container" style="padding-top:30px;">
            <div class="no-gutter row">
                <div class="col-md-12">
                     <center><h2 style="color:#65aeee;">Fill Up the details below to Continue</h2></center>
              	     <div class="panel panel-default" id="sidebar">
                        <div class="panel-body">
                            <form action="components/update.registration.php?level=<?php echo $_GET['level']; ?>" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
                                    <div class="alert alert-success">
                                        <p class="text-center"><?php echo $resetMessage; ?></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="First Name" id="user_firstname" name="user_firstname" value="<?php echo $rws['f_name'];?>" required>
                                                <label for="user_firstname"> First Name</label>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="Last Name" id="user_lastname" name="user_lastname" value="<?php echo $rws['l_name'];?>" required>
                                                <label for="user_lastname"> Last Name</label>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="Enter ID Number" id="user_id_no" name="user_id_no" value="<?php if($_GET['ty'] == 'ed1t'){echo $rws['id'];} ?>" required>
                                                <label for="user_id_no"> National ID/Passport:</label>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="Enter Phone Number" id="user_phone" name="user_phone" value="<?php if($_GET['ty'] == 'ed1t'){echo $rws['phone'];} ?>" required>
                                                <label for="user_phone"> Phone Number:</label>
                                            </div>

                                            <div class="form-group float-label-control">
                                                <label for="">Profile Image</label><br>

                                                <img src="userfiles/avatars/<?php echo $rws['avatar']; ?>" width="80" height="80" alt="PROFILE_IMG" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="hidden" id="avatar" name="avatar" value="<?php echo $rws['avatar']; ?>" />
                                                <input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file"/>

                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="Username" id="user_name" name="user_name" value="<?php echo $rws['username'];?>" readonly>
                                                <label for="user_name"> Username:</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder=" Password Reset Code" id="user_password" name="user_password" value="<?php echo $rws['reset_phrase'];?>" readonly>
                                                <label for="user_password"> Password Reset Code:</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="email" class="form-control" placeholder="Email" id="user_email" name="user_email" value="<?php echo $rws['email'];?>" readonly>
                                                <label for="user_email"> Email:</label>
                                            </div>

                                            <div class="form-group float-label-control">
                                                <label for="">Gender</label><br>
                                                <label for="">Male</label>&nbsp;
                                                <input type="radio" name="gender" id="gender" <?php if($rws['gender'] == 'Male'){echo "checked";} ?> value="Male"  />
                                                &nbsp;&nbsp;&nbsp;
                                                <label for="">Female</label>&nbsp;
                                                <input type="radio" name="gender" id="gender" <?php if($rws['gender'] == 'Female'){echo "checked";} ?> value="Female" />
                                            </div>

                                            <div class="form-label-group">
                                                <input type="text" class="form-control" placeholder="User Role" id="user_level" name="user_level" value="<?php echo $level;?>" readonly>
                                                <label for="user_level"> User Role:</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="submit">
                                        <center>
                                            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
                                            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
                                            <p class="mt-2 mb-3 text-muted text-center"><a href="profile.php?user_name=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level']; ?>">Profile</a></p>
                                        </center>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'controllers/base/javascript.php'; ?>
    </body>
</html>
