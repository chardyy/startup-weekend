@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="../dist/css/create-promotion.css">
@how

@section('content')
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

@stop
