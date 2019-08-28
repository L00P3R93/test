<?php include 'controllers/base/header.php'; ?>
    <style type="text/css">
        :root {
            --input-padding-x: .75rem;
            --input-padding-y: .75rem;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 720px;
            padding: 15px;
            margin: 0 auto;
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
         padding-left: 27px !important;
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
            if(form.username.value==""){
                alert("Error: Username cannot be blank");
                form.username.focus();
                return false;
            }
            re = /^\w+$/;
            if(!re.test(form.username.value)){
                alert("Error: Username must contain only letters, numbers and underscore!");
                form.username.focus();
                return false;
            }
            if(form.password.value != "" && form.password.value == form.cpassword.value){
                if(!checkPassword(form.password.value)){
                    alert("The Password must contain one Number, one Lowercase and one Uppercase letter");
                    form.password.focus();
                    return false;
                }else{
                    return true;
                }
            }else{
                alert("Error: Password do not match!");
                form.userpassword.focus();
                return false;
            }

        }

    </script>
    <body>
        <form class="form-signin" action="components/registration.php" method="post" enctype="multipart/formdata" onsubmit="return checkForm(this);">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">User Registration</h1>

            </div>
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
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-label-group col-md-6">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="form-label-group col-md-6">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-label-group col-md-6">
                    <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Password" required>
                    <label for="cpassword">Confirm Password</label>
                </div>
            </div>

            <button class="btn btn-lg btn-primary" type="submit" name="signup_button" value="Sign Up">Sign up</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
            <p class="mt-5 mb-3 text-muted text-center"><a href="index.php">Home</a></p>
        </form>
    </body>
</html>
