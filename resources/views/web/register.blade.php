<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Collaborate, cross-marketing, increased sales, subscription with benefits, small business, beauty, minority owned">
      <title> Login |  BBC Collaborative LLC </title>
      @include('web.includes.style')
   </head>
   <body>
      <!-- Page Content Section Starts Here -->
      <section class="login-screen pad-top-80 pad-bot-80">
         <div class="container login-container">
            <div class="login-screen-head m-b-20">
               <a href="{{URL::to('/')}}">
                  <img src="{{URL::to('/public/website')}}/images/logo.png">
               </a>
               <h3 class="col-white m-b-5"> SIGN UP NOW </h3>
               <p class="col-white"> Already have an account? <a href="{{route('web.login')}}" class="col-yellow"> Sign in </a>  </p>

               @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif
            </div>
            <div class="login-screen-content">
               <form method="post">
                  @csrf
                  <div class="form-label5">
                     <h6 class="col-white"> Name </h6>
                     <input type="text" class="form-field5" name="fullname" required>
                  </div>
                  <div class="form-label5">
                     <h6 class="col-white"> Email </h6>
                     <input type="email" class="form-field5" name="email" required>
                  </div>
                   <div class="form-label5">
                     <h6 class="col-white"> Password </h6>
                     <input type="password" class="form-field5" name="password" required>
                  </div>
                  <div class="form-label5">
                     <h6 class="col-white"> Confirm Password </h6>
                     <input type="password" class="form-field5" name="password_confirmation" required>
                  </div>
                  <div class="form-label5">
                    <input type="checkbox" class="form-field5 termc" name="terms" value="1"  required>
                  <span  class="col-white"> By clicking Create Account, you agree to our 
                  <a href="{{URL::to('/public/storage')}}/term-condition/BSBTERMSCONDITIONS.pdf" class="col-white"  target="_blank"><strong>Terms and Conditions</strong></a>
                      and 
                      <a href="{{URL::to('/public/storage')}}/term-condition/BSBPrivacyPolicy.pdf" class="col-white"  target="_blank"><strong>Privacy Policy</strong></a> </span>  
                     
                  </div>
                  <div class="form-label5 m-t-20">
                     <input type="submit" value="SIGN UP" class="submit-btn3" name="">
                  </div>
                   <div >
                 
                  
               </form>
            </div>   
         </div>
      </section>
      <!-- Page Content Section Ends Here -->
      <!-- Bootstrap Javascript -->
      @include('web.includes.script')
   </body>
</html>