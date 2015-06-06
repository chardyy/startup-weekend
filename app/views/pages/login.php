<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Libre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="dist/css/login.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- /.container -->

<div id="login-body" class="container">
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-2"> </div>
        <div id="login-box" class="col-xs-12 col-sm-4">
          <div id="login-header">
            <h4>Log In</h4>
          </div>
          <div id="login-container">
            <div id="login">
              <form id="login-form" class="form-horizontal" action='' method="POST">
                <fieldset>
                  <div class="form-group has-feedback">
                    <input type="text" id="username" name="username" placeholder="username" class="form-control">
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" id="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <button class="btn btn-success">Log In</button>
                </fieldset>
              </form>
              <hr>
              <center><a>Don't have an account?</a></center>
            </div>
          </div>
        </div>
        <div class="col-sm-2"> </div>
        <div class="col-sm-3"> </div>
      </div>
    </div>


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>

  </body>
</html>
