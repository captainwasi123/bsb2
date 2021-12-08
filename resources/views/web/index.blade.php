@extends('web.includes.master')
@section('title', 'Home')
@section('meta')
   <meta name="facebook-domain-verification" content="xcmzlkxyf1yi3xtf60r1kq5edlwftz" />
@endsection
@section('content')

<!-- Banner Section Starts Here -->
  <section class="banner-sec home-banner-sec">
     <div class="container">

        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-2">
              <div class="banner-image">
                 <img src="{{URL::to('/public/website')}}/images/gift-box.png">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-12 col-12 order-lg-1">
              <div class="banner-text">
                 <h3 class="col-yellow"> The bsb Collaborative LLC
                 </h3>
                 <p class="col-white"> BSB Collaborative LLC is an online business that provides an engaging virtual space for Beautè Snob Boîte box subscribers with exclusive access to thousands of small and minority-owned entrepreneurs and businesses looking for collaboration and support in today’s retail space </p>
                 <a href="{{ url('register') }}" class="custom-btn1"> Register as Vendor </a>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Banner Section Ends Here -->
  <!-- About Us Section Starts Here -->
  <section class="about-us-sec">
     <div class="container">
        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="about-image">
                 <img src="{{URL::to('/public/website')}}/images/about-image.png">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-text about-text">
                 <h3 class="col-yellow"> Connecting Small Businesses To Their Ideal Customers </h3>
                 <p class="col-white"> BSB Collaborative LLC is one of the fastest-growing eCommerce stores in the digital space and is on a mission to help minority-owned and small businesses improve the visibility of their products, services, and online stores. </p>
                 <p class="col-white"> Through cross-marketing we collaborate with small businesses and give them access to a boutique of powerful marketing tools and potential buyers, increasing sales and their brand’s digital exposure. </p>
                 <a href="{{ url('about') }}" class="custom-btn1"> Know Our Story </a>
                 <!-- <p class="collapse-text1 col-white"> BSB Collaborative LLC is an online business that provides an engaging virtual space for Beautè Snob Boîte box subscribers with exclusive access to thousands of small and minority-owned entrepreneurs and businesses looking for collaboration and support in today’s retail space  </p>
                 <a   class="custom-btn1 collapse-anchor1"> READ MORE </a> -->
              </div>
           </div>
        </div>
     </div>
  </section>

  <section class="categories-sec">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Categories </h3>
           <p class="col-white" style="max-width: 750px;"> Get your products featured on BSB Collaborative and accelerate your business. We give you exposure to hundreds of potential customers in search of your products and services, ready to engage in business with you through our cross-marketing services. </p>
        </div>


         <div class="row">
            @foreach($categories as $val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                  <div class="cat-box">
                     <a href="{{route('web.category', [base64_encode($val->id), $val->name])}}">
                        <img src="{{URL::to('/public/website')}}/images/categories/{{$val->id.'.jpg'}}">
                     </a>
                  </div>
               </div>
            @endforeach
        </div>
     </div>
  </section>



  <!-- Categories Section Ends Here -->
  <!-- Featured Products Section Starts Here -->
  <section class="featured-products">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Featured Vendors </h3>
        </div>

      <div class="feature-slider no-arrows">
            @foreach ($users as $key =>$val )

            <div>
               <a href="{{empty($val->website_link) ? '#' : 'https://'.$val->website_link}}" target="_blank">
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
                   <h4 class="not-found">No Featured Vendors Available.</h4>
                </div>
             @endif


         </div>
     </div>
  </section>
  <!-- Featured Products Section Ends Here -->
  <!-- Experience the Best Service Section Starts Here -->
  <section class="experience-sec pad-top-60 pad-bot-60">
     <div class="container">
        <div class="row center-row">
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-image">
                 <img style="max-width:300px;" src="{{URL::to('/public/website')}}/images/logo.png">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-6 col-12">
              <div class="experience-text">
                 <h3 class="col-yellow upper"> Experience the best Selling
                    service with benefit
                 </h3>
                 <p class="col-white">From the comfort of your home or office, you can browse our large catalog of small and minority businesses while enjoying exclusive products delivered to your door in our signature black Beauty Snob Boxes </p>
                 <a href="{{ url('about') }}" class="custom-btn1"> READ MORE </a>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Experience the Best Service Section Ends Here -->



  <!-- Page Content Section Starts Here -->
  <section class="our-team-sec">
     <div class="container">


     <div class="row">

     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
     <div class="snob-box">
                 <h3 class="col-yellow "> Snob Customers
                 </h3>
                 <p class="col-black m-b-10">  Unbox Something Exciting Every Month! </p>
                 <p class="col-black m-b-10"> From beauty and fashion to food and everything in between, get quality products from 1000+ brands delivered to your doorstep each month. With a recurring monthly subscription, you will receive the Beaute Snob Boite box and exclusive discount coupons that allow you to get your new favorite products from undiscovered brands at a fraction of the price, all while supporting small and minority-owned businesses. </p>
                 <p class="col-black m-b-10"> Not one for surprises? We’ve got you covered! </p>
                 <p class="col-black m-b-10"> You can explore our online eCommerce platform and discover thousands of products and services we have to offer. </p>
                 <p class="col-black m-b-10"> Ready To Take A Look? Subscribe Below! </p>
              </div>
     </div>

     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
     <div class="snob-box">
                 <h3 class="col-yellow "> Snob Vendors  </h3>
                 <p class="col-black m-b-10">  Give Your Brand More Visibility and Exposure </p>
                 <p class="col-black m-b-10"> Expanding your digital reach can be difficult, especially for small businesses. Let us give your products and services more visibility and give you a competitive edge in your business domain. </p>
                 <p class="col-black m-b-10"> Through our eCommerce store, we give you access to customers in search of the products and services you offer, allowing you to improve your online visibility. What sets us apart are our subscription boxes with quarterly featured vendor products. As a result, more people experience the benefits your products have to offer, allowing you to develop a loyal customer base. </p>
                 <p class="col-black m-b-10"> Collaborate with us to give your products and services the visibility they deserve. </p>
                 <p class="col-black m-b-10"> Choose Your Subscription Plan and Get Started Today! </p>
              </div>
     </div>

     </div>

     </div>
  </section>
  <!-- Page Content Section Ends Here -->



  <!-- Pricing Plan Section Starts Here -->
  <section class="pricing-sec">
     <div class="container" style="max-width: 1100px;">
        <div class="sec-head text-center">
           <h3> Pricing Plan </h3>
        </div>
        <div class="row">
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box">
                 <div class="pricing-box-head">
                  <br>
                     <h5> Exclusive Experience </h5>
                     <h4> $40 </h4>
                  </div>
                  <form method="post" action="{!! URL::route('vendor.paypal') !!}">
                     @csrf
                     <input type="hidden" name="pid" value="MQ==">
                     <div class="pricing-box-features">
                       <ul>
                          <li> <i class="fa fa-check"> </i>  Low Monthly Service fee </li>
                          <li> <i class="fa fa-check"> </i>  List up to 4 products </li>
                          <li> <i class="fa fa-check"> </i> Customer Buy direct from
                             your website
                          </li>
                          <li> <i class="fa fa-check"> </i> No inventory fees  </li>
                          <li> <i class="fa fa-check"> </i> No Profit Share  </li>
                          <li> <i class="fa fa-check"> </i> Cross marketing with other
                             vendor
                          </li>
                          <li> <i class="fa fa-check"> </i>  A Personalized Vendor Portal </li>
                          <li> <i class="fa fa-check"> </i>  Business development training </li>
                          <li> <i class="fa fa-check"> </i> Onsite Advertising Tools  </li>
                          <li> <i class="fa fa-check"> </i>  Virtual BSB experience </li>
                          <li> <i class="fa fa-check"> </i> Monthly drawing for Physical BSB
                             add o Personalized vendor portal
                          </li>
                       </ul>
                     </div>
                     <div class="pricing-box-button">

                       @if(Auth::check('vendor_status',2))
                       <button class="custom-btn1"> DISCOVER NOW </a>

                       @else
                       <a href="{{url('login')}}" class="custom-btn1"> DISCOVER NOW </a>

                       @endif
                     </div>
                  </form>
              </div>
           </div>
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box bg-yellow active">
                 <div class="pricing-box-head">
                     <h5 class="col-white"> BSB Box </h5>
                     <h4 class="col-white"> $45 </h4>
                  </div>

                  <form method="post" action="{!! URL::route('user.paypal') !!}">
                     @csrf
                     <input type="hidden" name="pid" value="MQ==">
                     <div class="pricing-box-features">
                        <ul>
                          <li class="col-white"> <i class="fa fa-check col-white"> </i>  Monthly Male  or Female Box  </li>
                          <li class="col-white"> <i class="fa fa-check col-white"> </i> Recurring  Subscription w/30 day cancellation   </li>
                          <li class="col-white"> <i class="fa fa-check col-white"> </i>  Access to over 10k business and services  </li>
                          <li class="col-white"> <i class="fa fa-check col-white"> </i> Exclusive Customer experience Portal   </li>
                          <li class="col-white"> <i class="fa fa-check col-white"> </i>  Monthly Promo codes to vendor website Special
                             dedicated Customer service Team.
                          </li>
                          <li class="col-white">
                              <input class="form-check-input" type="checkbox" value="10" id="flexCheckDefault0" name="addons[]">
                              <label class="form-check-label"  for="flexCheckDefault0">
                                 <p><span>   w/$10 add on to be BSB Product Tester  </span></p>
                              </label>
                          </li>
                          <li class="col-white">
                              <input class="form-check-input" type="checkbox" value="10" id="flexCheckDefault1" name="addons[]">
                              <label class="form-check-label"  for="flexCheckDefault1">
                                 <p><span>   w/$10 add on for BSB T-shirt or other marketing product  </span></p>
                              </label>
                          </li>
                        </ul>
                     </div>

                     <div class="pricing-box-button">
                      @if(Auth::check())
                       <button type="submit" class="custom-btn1" style="background:white;color:#c98827;"> DISCOVER NOW </button>

                       @else
                       <a href="{{url('login')}}" class="custom-btn1" style="background:white;color:#c98827;"> DISCOVER NOW </a>

                       @endif
                     </div>
                  </form>
              </div>
           </div>
           <div class="col-md-4 col-lg-4 col-sm-4 col-12 no-pad">
              <div class="pricing-box">
                 <div class="pricing-box-head">
                  <br>
                     <h5> Basic Experience </h5>
                     <h4> $20 </h4>
                  </div>
                  <form method="post" action="{!! URL::route('vendor.paypal') !!}">
                     @csrf
                     <input type="hidden" name="pid" value="Mg==">
                     <div class="pricing-box-features">
                       <ul>
                          <li> <i class="fa fa-check"> </i>  Low monthly service fee </li>
                          <li> <i class="fa fa-check"> </i>  List your biggest seller or
                             new product
                          </li>
                          <li> <i class="fa fa-check"> </i> Customer Buy direct from
                             your website
                          </li>
                          <li> <i class="fa fa-check"> </i> No investory fees  </li>
                          <li> <i class="fa fa-check"> </i> No Profit Share  </li>
                          <li> <i class="fa fa-check"> </i> Cross marketing with other
                             vendor
                          </li>
                       </ul>
                     </div>
                     <div class="pricing-box-button">
                       @if(Auth::check('vendor_status',2))
                       <button class="custom-btn1"> DISCOVER NOW </button>

                       @else
                       <a href="{{url('login')}}" class="custom-btn1"> DISCOVER NOW </a>

                       @endif
                     </div>
                  </form>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Pricing Plan Section Ends Here -->
  <!-- Contact Us Section Starts Here -->
  <section class="contact-sec" id="contact-us-sec">
     <div class="container">
        <div class="sec-head text-center">
           <h3> Get In Touch With Us </h3>
        </div>
      <div class="contact-data">
           <form method="POST">
              <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="First Name" class="form-control1" name="fname">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Last Name" class="form-control1" name="lname">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="email" placeholder="Email Address" class="form-control1" name="email">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="number" placeholder="Phone Number" class="form-control1" name="phone">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Company Name" class="form-control1" name="company">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="Country Name" class="form-control1" name="country">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="State Name" class="form-control1" name="state">
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="text" placeholder="City Name" class="form-control1" name="city">
                    </div>
                 </div>

                 <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <label class="package-radio">Select Packages: </label>
                    <div class="form-field">
                        <input type="radio" id="Vendorside40" name="fav_language" value="Vendorside40">
                        <label for="Vendorside40" class="radio-text">Vendor side 40$</label>
                        <input type="radio" id="Consumerside20" name="fav_language" value="Consumerside20">
                        <label for="Consumerside20" class="radio-text">Consumer Side 20$</label>
                        <input type="radio" id="Vendorside20" name="fav_language" value="Vendorside20">
                        <label for="Vendorside20" class="radio-text">Vendor side 20$</label>
                    </div>
                 </div> -->
                 <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <textarea placeholder="Drop us a line! If you are a vendor, please fill out the form and click your package option." name="message" class="form-control1"></textarea>
                    </div>
                 </div> -->
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="form-field">
                       <input type="submit" value="Send Message" class="submit-btn1" name="submit">
                    </div>
                 </div>
              </div>
           </form>
                          </div>
     </div>
  </section>
  <!-- Contact Us Section Starts Here -->

@endsection
