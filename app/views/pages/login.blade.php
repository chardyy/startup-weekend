@extends('layouts.default')

@section('content')
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

@stop