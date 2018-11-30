<!DOCTYPE html>
<html lang="en" class="full-screen">



<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script-->
<link rel="icon" sizes="180x180" href="../assets/images/favicon.png" type="image/png">
    <title>Chef Login</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="../cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    
    <link rel="stylesheet" href="styles/lib/bootstrap.min.css">
    <link rel="stylesheet" href="styles/ncms.min.css">
    <link rel="stylesheet" href="styles/site.min.css">
     <link rel="stylesheet" href="styles/lib/icomoon.css" />
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>

    <!-- <link rel="stylesheet" href="styles/lib/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/foundation-icons.css"> -->

</head>

<body class="login warning-theme danger-complement primary-logo-demo">   
    <!--Start of Card Center-->
    <div class="wrapper-card">
        <div class="card centered-signup-card signup-lg">
            <div class="card-header text-xs-center">
            <a href="index.html"><img width="225" src="../assets/images/logo.png" alt="n-cms" /></a>
            </div>
            <div class="card-block">
            <form class="" method="post" id="login-form">
            <fieldset>
            <div class="input-group ">
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        </div>
            </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="E-mail" name="user_email_address"
                                id="user_email_address" type="email" required>
                        
                        
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6"><a href="#">Forgot Password</a></div>
                            <div class="col-md-6 text-xs-right">
                                <label class="custom-control custom-checkbox reverse">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description"> Remember Me</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="button-action text-xs-right">
                        <button type="submit" class="btn btn-info btn-block" name="btn-login" id="btn-login">Login</button>
                    </div>
                    <div class="col-md-12 text-xs-center mt-2">Don't have an account? <a href="register1.html" class="text-info">Sign Up here</a></div>
                </form>
            </div>
        </div>
    </div>
    <!--End of Card Center-->
    <div class="backdrop"></div>
    <footer class="footer">
        
        <p>©  <?php echo Date('Y'); ?> COOKFINDER. </p>
        <div class="social">
            <ul class="social-media list-inline">
                <li class="list-inline-item"><a href="#" class="text-info"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-info"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-info"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>


    <!--script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script-->
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>



    <!--script src="js/lib/jquery.min.js"></script-->
    <script src="js/lib/tether.min.js"></script>    
    <script src="js/lib/bootstrap.min.js"></script>

    
    <script src="js/lib/jquery.nicescroll.js"></script>
    <script src="js/lib/jquery.nicescroll.plus.js"></script>
    <script src="js/lib/js.cookie.js"></script>
    <script src="js/ncms.min.js"></script>
    <script src="js/site-config.js"></script>
</body>



</html>

