@extends('web.includes.master')
@section('title', 'Categories')
@section('content')
<!-- Banner Image Only Section Starts Here -->
   <section class="block-image">
      <img src="{{URL::to('/public/website')}}/images/about-banner.jpg">
   </section>
   <!-- Banner Image Only Section Ends Here -->
  
   <!-- Team Section Starts Here -->
   <section class="our-team-sec">
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
   <!-- Team Section Ends Here -->










   <!-- Contact Us Section Starts Here -->
   <section class="contact-sec2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
               <div class="sec-head text-center no-margin">
                  <h3 class="col-yellow m-b-20"> Maximize Your Sales and Increase Your Brand Visibility </h3>
                  <p class="col-white m-b-10" style="max-width: 700px;"> Get your products featured on BSB Collaborative and accelerate your business. We give you exposure to hundreds of potential customers in search of your products and services, ready to engage in business with you through our cross-marketing services. </p>
                  <p class="col-white m-b-10"  style="max-width: 700px;"> At BSB Collaborative, we partner with small and minority-owned businesses and give them the tools and resources they need for increased sales and brand visibility at the most affordable prices. We have collaborated with several small and minority-owned businesses just like yours to expand their digital reach, and we are ready to do the same for you. </p>
                  <p class="col-white" style="max-width: 700px;"> Ready to get your products and services featured for increased sales? </p>
               </div>
               <div class="cat-buttons block-element text-center m-t-30 ">
               <a href="{{route('web.register')}}" class="cat-btn1"> Register Now </a>
               <a href="{{route('web.about')}}#contact-us" class="cat-btn2"> Contact Us </a>
               </div>
            </div>
         </div>
          
      </div>
   </section>
   <!-- Contact Us Section Ends Here -->
@endsection