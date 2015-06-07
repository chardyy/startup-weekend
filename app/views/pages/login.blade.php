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
              {{ Form::open(['route' => 'login_path']) }}
                <fieldset>
                  <div class="form-group has-feedback">
                    {{ Form::text('username', null, ['id' => 'username', 'class' => 'form-control', 'placeholder' => 'Username']) }}
                  </div>
                  <div class="form-group has-feedback">
                    {{ Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) }}
                  </div>
                  {{ Form::button('Log In',array('type' => 'submit','class' => 'btn btn-success')) }}
                  
                </fieldset>
              {{ Form::close() }}
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