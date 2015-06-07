@extends('layouts.default')

@section('content')
    <!-- /.container -->
     
     <div id="page-top" class="container-fluid">
        <div style="padding-left: 100px;" class="col-sm-8">

        <!-- query -->
        @foreach($promos as $promo)
        <div class="row">
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details">{{ HTML::image($promo->image, '', ['width' => 'promotion-img img-responsive img-center']) }}</a>
                <strong>{{ $promo->name }}</strong>
                <p>{{ $promo->details }}</p>
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
          @endforeach
        <!-- end query -->

          <div class="row">
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details"><img class="promotion-img img-responsive img-center" src="img/frappe.jpg"></a>
                <strong>Starbucks Frappucino</strong>
                <p>First 120 persons to redeem gets to enjoy a Starbucks Frappucino</p>
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

          <div class="row">
            
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details"><img class="promotion-img img-responsive" src="img/shirt.jpg"></a>
                <strong>Globe Shirt Giveaway</strong>
                <p>Globe is giving away 100 shirts to new subscribers</p>
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

          <div class="row">
            
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details"><img class="promotion-img img-responsive img-center" src="img/dreamproject.jpg"></a>
                <strong>Dream Project</strong>
                <p>THE DREAM PROJECT PH, a non-profit, volunteer based community initiative which helps build the nation by shaping the dreams of the Filipino youth.</p>
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

          <div class="row">

            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details"><img class="promotion-img img-responsive" src="img/innovationsummit.jpg"></a>
                <strong>Social Innovation Summit</strong>
                <p>The Social Innovation Summit is a twice annual event taking place in Washington,  DC and Silicon Valley, that represents a global convening of black swans and wayward thinkers. Where most bring together luminaries to explore the next big idea, we bring together those hungry not just to talk about the next big thing, but to build it</p>
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
            <div class="col-sm-3"></div>
          </div>

           <div class="row">
            
            <div id="promotion-cards" class="col-xs-12 col-sm-8">
                <a href="details"><img class="promotion-img img-responsive" src="img/oktoberfest.jpg"></a>
                <strong>Oktoberfest</strong>
                <p>Oktoberfest is an annual event filled with music, revelry, beer, and good music.</p>
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
          </div>
          <div class="col-sm-4"></div>
      </div>


      <div id="sidebar" class="col-sm-4">
          <div class="sidebar-cta" class="row">
            <div id="call-to-action-promotion">
              <a href="create-promotion "><button class="btn btn-danger">
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
@stop