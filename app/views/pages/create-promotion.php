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

    <link rel="shortcut icon" href="dist/img/favicon.ico">
    <link rel="stylesheet" href="dist/css/create-promotion.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- /.container -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4"></div>
        <div id="create-form" class="col-sm-4">
          <div id="login-header">
            <h4>Create a promotion</h4> 
          <div id="login-container">
            <div id="login">
              <form id="login-form" class="form-horizontal" action='/' method="POST">
                <fieldset>
                  <div class="form-group has-feedback">
                    <input type="text" id="dob" name="promo" placeholder="Name of promotion" class="form-control">
                  </div>
                  <div class="form-group has-feedback">
                    <textarea type="text" name="promo" placeholder="Description" class="form-control"></textarea>
                  </div>
                  <div class="form-group has-feedback">
                      <select class="form-control select" data-toggle="select">
                        <option value="0">Choose Category</option>
                        <option value="1">Events</option>
                        <option value="2">Products</option>
                        <option value="3">Services</option>
                      </select>
                  </div>
                  <div class="form-group has-feedback">
                      <select class="form-control select" data-toggle="select">
                        <option value="0">Quantity</option>
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="3">30</option>
                        <option value="4">40</option>
                        <option value="5">50</option>
                      </select>
                  </div>
                  <div class="form-group has-feedback">
                    <input id="form-ftu" type="file" name="fileToUpload" id="fileToUpload">
                  </div>
                  <div class="form-group has-feedback">
                      <label class="checkbox" for="checkbox4">
                        <input type="checkbox" checked="checked" value="" id="checkbox4" data-toggle="collapse" data-target="#paypal">
                        Bump this page.
                      </label>
                      <div>
                        <button id="paypal" class="collapse out">PAYPAL</button>
                      </div>
                  </div>
                  <center><button class="btn btn-success">Promote</button></center>
                </fieldset>
              </form>
            </div>
          </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </div>
</div>



    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>

  </body>

</html>
