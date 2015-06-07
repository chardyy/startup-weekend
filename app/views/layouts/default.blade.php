<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Libre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../dist/css/flat-ui.min.css" rel="stylesheet">
    @yield('styles')
    <link rel="shortcut icon" href="../dist/img/favicon.ico">
    <link rel="stylesheet" href="../dist/css/index.css">
    <link rel="stylesheet" href="../dist/css/login.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

       <nav class="navbar navbar-fixed-top">
        <div id="header" class="col-xs-12 col-sm-2">
          <img class="img-responsive" src="../dist/img/libre.png">
        </div>

        <div class="col-sm-2">
        </div>
        <div class="col-sm-6"></div>

        <div id="nav-signin" class="col-sm-2">
        <form action="/login">
          <a href="login"><button id="menu" class="btn btn-default dropdown-toggle" type="button">
              <span class="fui-user"></span>
          </button></a>
        </form>
        </div>        
     </nav>
     
      @yield('content')


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="../dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../dist/js/vendor/video.js"></script>
    <script src="../dist/js/flat-ui.min.js"></script>
     <script src="dist/js/dynamic_promos.js"></script>
    @yield('scripts')
  </body>
</html>
