@extends('web.includes.master')
@section('title', 'Physical Box')
@section('content')

<!-- About Physical Box Section Starts Here -->
   <section class="our-team-sec">
      <div class="container">
         <div class="row ">
            <div class="col-md-6 col-lg-6 col-sm-6 col-12">
               <div class="video-wrapper1">
               <video   class="custom-video1" autoplay="" muted="" loop="">
                  <source src="{{URL::to('/public/website')}}/images/physical-box.mov" type="video/mp4">
               </video>
            </div>
        </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-12">
               <div class="experience-text about-text">
                  <h3 class="col-yellow"> Physical Box  </h3>
                  <p class="col-white"> Get Something Exciting To Look Forward To Every Month, Delivered To Your Doorstep </p>
                  <p class="col-white"> Get the BSB collective subscription box for both him and her and discover your next favorite products and essentials from undiscovered brands. From effective beauty products and stylish apparel to delectable food products and more, our Beaute Snob Boite box was designed to give you access to exclusive products while helping minority-owned and small businesses break into the digital retail space. </p>
                  <p class="col-white"> Shop with a purpose while enjoying quality products, exclusive offers, and more from our Beaute Snob Boite box subscription with benefits. </p>
                  <a class="custom-btn1 upper"> Subscribe Now </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Physical Box Section Ends Here -->
   <!-- FAQ Section Starts Here -->
   <section class="our-story-sec pad-top-60 pad-bot-60">
      <div class="container">
         <div class="sec-head text-center">
            <h3> Frequently Asked Questions</h3>
            <p class="col-white" style="max-width: 750px;"> Take a look at our most asked questions for quick help at a glance. </p>
         </div>
         <div class="faqs-all">
            <div class="set">
               <a  >   What’s inside the physical box? <i class="fa fa-plus"></i> </a>
               <div class="content">
                  <p> The Beute Snob Boite comes with select products from over a thousand minority-owned brands and small businesses, tailored to your gender and preferences. Each month, you get products from different featured brands, allowing you to enjoy a variety of products.  </p>
               </div>
            </div>
            <div class="set">
               <a  >   How does it work? <i class="fa fa-plus"></i> </a>
               <div class="content">
                  <p> All you have to do is pay your monthly subscription fee, tell us your preferences, and expect to see a Beaute Snob Boite subscription box at your doorstep each month.   </p>
               </div>
            </div>
            <div class="set">
               <a  >   I’m a vendor and I would like to collaborate with you to promote my products, how do I get started? <i class="fa fa-plus"></i> </a>
               <div class="content">
                  <p> To collaborate with us in our cross-marketing program through our subscription with benefits select a plan that works for you. After subscribing, you can connect with us to get your products featured in the Beaute Snob Boite box to increase sales and your brand exposure. </p>
               </div>
            </div>
            
            
             
         </div>
      </div>
   </section>
   <!-- FAQ Section Ends Here -->
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

@endsection