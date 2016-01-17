

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SETEC</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/core.css" rel="stylesheet" type="text/css">
  <link href="css/components.css" rel="stylesheet" type="text/css">
  <link href="css/colors.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  
 
</head>

<body>

  <!-- Page container -->
  <div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">
              <div style="background-image: url(img/login_background.jpg); position:absolute; width: 100%; height: 100%;top:0;opacity:0.8;"></div>


        <!-- Content area -->
        <div class="content">

          <!-- Simple login form -->
          <form method="post" action="accaologin.php">
            <div class="panel panel-body login-form" style="background:rgba(255, 255, 255, 0.5)">
              <div class="text-center">
                <div>
                <img src="img/oie_transparent.png" width=70%>
                </div>
                <h5 class="content-group">Login to your account <small class="display-block" style="color:#672835; font-weight:bold;">Enter your credentials below</small></h5>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <input type="text" class="form-control" placeholder="Username" name="nome">
                <div class="form-control-feedback">
                  <i class="fa fa-user"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <input type="password" class="form-control" name ="pass" placeholder="Password">
                <div class="form-control-feedback">
                  <i class="fa fa-lock"></i>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign in <i class="fa fa-chevron-right"></i></button>
              </div>

              <div class="text-center">
                <a href="login_password_recover.html">Forgot password?</a>
              </div>
            </div>
          </form>
          <!-- /simple login form -->


          <!-- Footer -->
          <div class="footer text-muted" style="font-weight:bolder;color:black;">
            &copy; 2016. <a href="#" style="font-weight:bolder;">Grupo A</a> by <a  target="_blank" style="font-weight:bolder;"> SETEC</a>
          </div>
          <!-- /footer -->

        </div>
        <!-- /content area -->

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->

  </div>
  <!-- /page container -->

</body>
</html>
