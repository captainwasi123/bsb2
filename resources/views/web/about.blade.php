@extends('web.includes.master')
@section('title', 'About Us')
@section('content')

<!-- Banner Image Only Section Starts Here -->
   <section class="block-image">
      <img src="{{URL::to('/public/website')}}/images/about-banner.jpg">
   </section>
   <!-- Banner Image Only Section Ends Here -->
   <!-- Our Story Section Starts Here -->
   <section class="our-story-sec">
      <div class="container">
         <div class="row center-row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-12">
               <div class="story-image">
                  <img src="{{URL::to('/public/website')}}/images/story-image.jpg">
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-12">
               <div class="experience-text about-text">
                  <h3 class="col-yellow"> About Us  </h3>
                  <p class="col-white"> Connecting Small Businesses To Their Ideal Customers </p>
                  <p class="col-white"> BSB Collaborative LLC is one of the fastest-growing eCommerce stores in the digital space and is on a mission to help minority-owned and small businesses improve the visibility of their products, services, and online stores. </p>
                  <p class="col-white"> Through cross-marketing we collaborate with small businesses and give them access to a boutique of powerful marketing tools and potential buyers, increasing sales and their brand’s digital exposure. </p>
                  <a href="" class="custom-btn1"> Know Our Story </a>
                  <!-- <p class="collapse-text1 col-white"> BSB Collaborative LLC is an online business that provides an engaging virtual space for Beautè Snob Boîte box subscribers with exclusive access to thousands of small and minority-owned entrepreneurs and businesses looking for collaboration and support in today’s retail space  </p>
                  <a   class="custom-btn1 collapse-anchor1"> READ MORE </a> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Our Story Section Ends Here -->
   <!-- Team Section Starts Here -->
   <section class="our-team-sec">
      <div class="container">
         <div class="sec-head text-center">
            <h3> Our Team </h3>
            <p class="col-white" style="max-width: 750px;"> Meet the people behind the success of the small businesses we partner with and the phenomenal online shopping experiences we deliver to our customers.  </p>
         </div>
         <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
               <div class="team-box">
                  <div class="team-image">
                     <img src="{{URL::to('/public/website')}}/images/team-1.jpg">
                  </div>
                  <div class="team-info">
                     <h6> <b>    A'MeraFrieman </b> <br/> <b> Chief Development Officer </b> </h6>
                     <h5>
                        <a href=""> <i class="fab fa-facebook-f"> </i> </a>
                        <a href=""> <i class="fab fa-twitter"> </i> </a>
                        <a href=""> <i class="fab fa-instagram"> </i> </a>
                     </h5>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
               <div class="team-box">
                  <div class="team-image">
                     <img src="{{URL::to('/public/website')}}/images/team-2.jpg">
                  </div>
                  <div class="team-info">
                     <h6> <b> Meko Krout</b> <br/> <b> Chief Administrative Officer </b> </h6>
                     <h5>
                        <a href=""> <i class="fab fa-facebook-f"> </i> </a>
                        <a href=""> <i class="fab fa-twitter"> </i> </a>
                        <a href=""> <i class="fab fa-instagram"> </i> </a>
                     </h5>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
               <div class="team-box">
                  <div class="team-image">
                     <img src="{{URL::to('/public/website')}}/images/team-3.jpg">
                  </div>
                  <div class="team-info">
                     <h6> <b> Natalia Carey </b> <br/> <b> Chief Engagement Officer </b> </h6>
                     <h5>
                        <a href=""> <i class="fab fa-facebook-f"> </i> </a>
                        <a href=""> <i class="fab fa-twitter"> </i> </a>
                        <a href=""> <i class="fab fa-instagram"> </i> </a>
                     </h5>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
          <div class="col-md-12 col-lg-12 col-12 text-center">
         <a href="{{route('web.register')}}" class="custom-btn1 m-t-40"> Become A BSB Collaborative LLC Exclusive Member </a>
          </div>
         </div>
      </div>
   </section>
   <!-- Team Section Ends Here -->
   <!-- Contact Us Section Starts Here -->
   <section class="our-team-sec" id="contact-us">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
               <div class="contact-form2-head">
                  <h3 class="col-yellow"> Contact Us </h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
               <div class="contact-form2">
                  <form>
                     <div class="form-field">
                        <input type="text" placeholder="First Name" class="form-control2" name="">
                     </div>
                     <div class="form-field">
                        <input type="text" placeholder="Last Name" class="form-control2" name="">
                     </div>
                     <div class="form-field">
                        <input type="email" placeholder="Email Address" class="form-control2" name="">
                     </div>
                     <div class="form-field">
                        <input type="password" placeholder="Password" class="form-control2" name="">
                     </div>
                     <div class="form-field">
                        <input type="submit" class="submit-btn1" value="Submit" style="min-width: 180px;" name="" value="Login">
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
               <div class="contact-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.815973795637!2d-96.45383604879515!3d32.90303348476184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864eaa7c8ac8551b%3A0x39fa8d93c676c719!2sStaples!5e0!3m2!1sen!2s!4v1634565003466!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  {{--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.2889612081344!2d-0.08991633469162817!3d51.507914468487265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876035159bb13c5%3A0xa61e28267c3563ac!2sLondon%20Bridge!5e0!3m2!1sen!2s!4v1627642578547!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  --}}
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact Us Section Ends Here -->

@endsection
