<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COPROPPELED | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">CP</h1>

            </div>
            <h3>Register to Copropelled</h3>
            <p>Create account to see it in action.</p>
            
            <form class="m-t" role="form" action="signupvalid.php" method="post" name="signup">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks" ><label> <input type="checkbox" name="checkbox1" required="">
                          <em></em> Agree the terms and policy </label>
                        </div>
						
                </div>
                <button name="submit" type="submit" class="btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="index.php">Login</a>
            </form>
            <p class="m-t"> <small>Powered by Hexcoderz &copy; 2017</small> </p>
        </div>
    </div>
	
	

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
