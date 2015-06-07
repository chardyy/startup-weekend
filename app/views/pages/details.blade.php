@extends('layouts.default')

@section('content')
    <!-- /.container -->

    @foreach($promos as $promo)
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2"></div>
        <div id="promotion-area" class="col-sm-8">
          {{ HTML::image($promo->image, '', ['width' => 'promotion-img img-responsive img-center']) }}
          <h1>{{$promo->name}}</h1>
          <p>{{$promo->details}}</p>
          <a ><button class="btn">Avail Now!</button></a>
        </div>
        <div class="col-sm-2"></div>
      </div>
    @endforeach

      <div class="row">

        <div class="col-sm-2"></div>
        <div id="comment-area" class="col-sm-8">
          <div class="row">
            <strong>Comment below</strong>
          </div>
          <div class="col-sm-10"><textarea></textarea></div>
          <div class="col-sm-2"><button class="btn">Post</button></div>
        </div>  
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div id="comment-users" class="col-sm-8">
          <strong>John Doe</strong>
          <p>This is awesome</p>
        </div>  
        <div class="col-sm-2"></div>
      </div>
@stop