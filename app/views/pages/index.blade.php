@extends('layouts.default')

@section('content')
    <!-- /.container -->
     
     <div id="page-top" class="container-fluid">
        <div style="padding-left: 100px;" class="col-sm-8" id="promos-container" data-get-url="{{route('api.promos.index')}}">

          <div class="row hide" id="promo-content">
            
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details" data-content="image"><img class="promotion-img img-responsive img-center" src="../img/frappe.jpg"></a>
                <strong data-content="name">Title Goes Here.</strong>
                <p data-content="details">Detail Goes Here</p>
                <div id="promotion-buttons" class="col-sm-12">
                   <div class="col-sm-4">
                       <a href="#"><span class="fui-check"></span>
                       avail</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="#"><span class="fui-new"></span>
                      comments</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="#"><span class="fui-plus"></span>follow</a>
                    </div>
                </div> 
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="col-sm-4"></div>
      </div>


      <div id="sidebar" class="col-sm-4">
          <div class="sidebar-cta" class="row">
            <div id="call-to-action-promotion">
              <a href="{{route('page.promos.create')}}"><button class="btn btn-danger">
                want to promote something?
              </button></a>
            </div>
          </div>
          <div  class="row">
            <div id="sidebar-categories" class="col-xs-12">
                        <div class="todo">
            <div class="todo-search">
              <input id="sidebar-search" class="todo-search-field" type="search" value="" placeholder="Search Category" />
            </div>
            <ul>
              <li>
                
                <div class="todo-content">
                  <h4 class="todo-name"><span class="fui-arrow-right"></span>
                     <strong>Events</strong>
                  </h4>
                </div>
              </li>
              <li>
                
                <div class="todo-content">
                  <h4 class="todo-name"><span class="fui-arrow-right"></span>
                    <strong>Products</strong>
                  </h4>
                </div>
              </li>
              <li>
                
                <div class="todo-content">
                  <h4 class="todo-name"><span class="fui-arrow-right"></span>
                    <strong>Services</strong>
                  </h4>
                </div>
              </li>
            </ul>
          </div><!-- /.todo -->
        </div
          </div> 
       </div>
     </div>
@show

@content('scripts')
   <script src="dist/js/dynamic_promos.js"></script>
@stop