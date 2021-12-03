@extends('web.includes.master')
@section('title', 'Snob '.$category->name)
@section('content')

<!-- Category Banner  Section Starts Here -->
   <section class="category-banner cat-bg1 text-center">
      <div class="container">
         <h1> SNOB {{strtoupper($category->name)}} </h1>
         <h4> {{$category->title}}  </h4>
         <p> {{$category->description}} </p>
      </div>
   </section>
   <!-- Category Banner  Section Ends Here -->
   <!-- Featured Vendors Section Starts Here -->
   <section class="our-team-sec">
      <div class="container">
         <div class="sec-head text-center">
            <h3> Featured Vendors </h3>
         </div>
         <div class="feature-slider no-arrows">
            @foreach ($users as $key =>$val )

            <div>
               <a href="{{empty($val->website_link) ? '#' : $val->website_link}}" target="_blank">
                  <div class="products-box vender-box">
                     <div class="product-image">
                       <center> <img src="{{URL::to('/public/storage/vendor/logo/'.$val->logo)}}" onerror="this.src='{{URL::to('/public/website')}}/images/product-placeholder.png';"> </center>
                     </div>
                     <div class="product-title" >
                        <p class="feature-cut-text" > {{$val->description}} </p>

                        <div class="" style='text-align:right;'>
                           @if(Auth::check())
                              <a href="javascript:void(0)" class="btn btn-success custom-tag4 favouriteVendor"  data-id="{{base64_encode($val->id)}}">
                                 @if(empty($val->favVender->id))
                                 <i class="material-icons md-18"> favorite_border </i>
                                 @else
                                <i class="material-icons md-18"> favorite</i>
                                 @endif
                              </a>
                           @endif
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            @endforeach

            @if(count($users) == '0')
                <div class="col-md-12">
                   <h4 class="not-found">No Favourite Available.</h4>
                </div>
             @endif


         </div>
      </div>
   </section>
   <!-- Featured Vendors Section Ends Here -->
   <!-- Featured Products Section Starts Here -->
   <section class="category-products">
      <div class="container" style="max-width: 1060px;">
         <div class="sec-head text-center">
            <h3> Featured Products </h3>
         </div>
         <div class="row">
      @foreach($users as $key => $value) 
    @php $i=0; @endphp
     @foreach($products as $key => $val)  
            @if($val->seller_id == $value->id)
               @if($i<4)       
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="product-box4">
                        <div class="product-image4">
                           <img src="{{URL::to('/public/storage/product/'.$val->image)}}" onerror="this.src='{{URL::to('/public/website')}}/images/product-placeholder.png';">
                        </div>
                        <div class="product-title4">
                           <h4> {{$val->title}}<br><small>{{@$val->category->name}} </small></h4>
                           <p class="cut-text"> {{$val->description}} </p>
                        </div>
                        <div class="product-btn2">
                              <a href="{{$val->product_url}}" target="_blank"> Buy Now </a>
                           @if(Auth::check())
                              <a href="javascript:void(0)" class="btn btn-success gold-b favproduct"  data-id="{{base64_encode($val->id)}}">
                                 @if(empty($val->favprod->id))
                                 <i class="material-icons md-18"> favorite_border </i>
                                 @else
                                <i class="material-icons md-18"> favorite</i>
                                 @endif
                              </a> 
                           @endif
                        </div>
                        <div class="product-tag4">
                           SPECIAL OFFER
                        </div>
                     </div>
                  </div>
                  @php $i++; @endphp
               @endif
            @endif
 
         @endforeach
        
      @endforeach
            @if(count($products) == '0')
               <div class="col-md-12">
                  <h4 class="not-found">No Products Available.</h4>
               </div>
            @endif
         </div>
      </div>
   </section>
   <!-- Featured Products Section Ends Here -->

@endsection
