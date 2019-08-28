<?php //include 'components/session-check-index.php' ?>
<?php include 'controllers/base/header.php' ?>

<style type="text/css">
        .form-signin {
            width: 100%;
            max-width: 420px;
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
        .login-main {
                max-width: 320px;
                margin: 0 auto;
        }
        .logger{
                color: #3bc492;
        }

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


        .form-control {
                display: block !important;
                width: 100% !important;
                padding: .375rem .75rem;
                font-size: 1rem !important;
                line-height: 1.5 !important;
                color: #495057 !important;
                background-color: #fff !important;
                background-clip: padding-box !important;
                border: 1px solid #ced4da !important;
                border-radius: .25rem !important;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
        }

</style>
<body>
        <form class="form-signin" role="form" action="update-pass.php" method="post">

                <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">Fill in Your Username or Email and Your Reset Code: </h1>
                </div>

                <div class="form-label-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                        <label for="username">Username</label>
                </div>

                <div class="form-label-group">
                        <input type="text" id="reset" name="reset" class="form-control" placeholder="Reset Code" required>
                        <label for="reset">Reset Code</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="reset_button">Reset</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
                <p class="mt-5 mb-3 text-muted text-center"><a href="index.php">Home</a></p>
</form>
</body>