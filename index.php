<?php
error_reporting(0);
include 'controllers/base/header.php'; ?>
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

        #registerModal .form-label-group > input{
          padding-left: 6px !important;
        }

        #registerModal .form-label-group > label {
            padding-left: 20px !important;
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
    <script type="text/javascript">
        function checkPassword(str){
            //at least one number, one lowercase and one uppercase letter
            //at least six characters
            var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
            return re.test(str);
        }
        function checkForm(form){
            if(form.rusername.value==""){
                alert("Error: Username cannot be blank");
                form.username.focus();
                return false;
            }
            re = /^\w+$/;
            if(!re.test(form.rusername.value)){
                alert("Error: Username must contain only letters, numbers and underscore!");
                form.username.focus();
                return false;
            }
            if(form.rpassword.value != "" && form.rpassword.value == form.cpassword.value){
                if(!checkPassword(form.password.value)){
                    alert("The Password must contain one Number, one Lowercase and one Uppercase letter");
                    form.rpassword.focus();
                    return false;
                }else{
                    return true;
                }
            }else{
                alert("Error: Password do not match!");
                form.rpassword.focus();
                return false;
            }

        }

    </script>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <?php include 'controllers/nav/nav.php'; ?>
      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('assets/images/depot_hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-lg-6">
                <h1>Test System</h1>
                <p class="mb-5">To access the System Functionalities, <a href="login.php">Sign In</a> or <a href="register.php">Sign Up</a></p>
                <!--<form action="#">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Your tracking number">
                    <input type="submit" class="btn btn-primary text-white px-4" value="Track Now">
                  </div>
                </form>-->
              </div>
            </div>
          </div>
        </div>
        <!-- END .ftco-cover-1 -->
      </div>
    <?php include 'controllers/base/footer.php' ?>

    </div>

    <?php include 'controllers/base/javascript.php'; ?>
    <!-- loginModal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h3 mb-3 font-weight-normal" id="loginModalTitle">Test SYS</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="components/login-process.php" method="post" enctype="multipart/formdata">
                        <div class="form-label-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                            <label for="username">Username</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <a href="forgot.php">Forgot Your Password?</a>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_button" value="Sign in">Sign in</button>

                    </form>
                </div>
                <div class="modal-footer">
                     <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
                </div>
            </div>
        </div>
    </div>

     <!-- registerModal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="text-center h3 mb-3 font-weight-normal" id="registerModalTitle">User Registration</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="components/registration.php" method="post" enctype="multipart/formdata" onsubmit="return checkForm(this);">
                        <div class="row">
                           <div class="form-label-group col-md-6">
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name" required autofocus>
                                <label for="fname"> First Name</label>
                            </div>

                            <div class="form-label-group col-md-6">
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" required>
                                <label for="lname"> Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-label-group col-md-6">
                                <input type="text" id="rusername" name="username" class="form-control" placeholder="Username" required>
                                <label for="rusername">Username</label>
                            </div>
                            <div class="form-label-group col-md-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-label-group col-md-6">
                                <input type="password" id="rpassword" name="password" class="form-control" placeholder="Password" required>
                                <label for="rpassword">Password</label>
                            </div>
                            <div class="form-label-group col-md-6">
                                <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Password" required>
                                <label for="cpassword">Confirm Password</label>
                            </div>
                        </div>

                        <button class="btn btn-lg btn-primary" type="submit" name="signup_button" value="Sign Up">Sign up</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
                    <p class="mt-5 mb-3 text-muted text-center"><a href="index.php">Home</a></p>
                </div>
            </div>
        </div>
    </div>

  </body>

</html>
