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
               <h3 class="col-white"> Recover  Password </h3>

               @if(session()->has('success'))
                   <div class="alert alert-success">
                       {{ session()->get('success') }}
                   </div>
               @endif
               @if(session()->has('error'))
                   <div class="alert alert-danger">
                       {{ session()->get('error') }}
                   </div>
               @endif
            </div>

            <div class="login-screen-content">

              <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                 
                  
                  <div class="form-label5">
                     <h6 class="col-white"> Password </h6>
                     <input type="password" placeholder="Your Password" id="password" class="form-field5"  name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                  </div>


                  <div class="form-label5">
                     <h6 class="col-white"> Confirm Password </h6>

                      <input type="password" id="confirmation_password"  placeholder="Confirm Password" name="confirmation_password" class="form-field5"  required>
                                  @if ($errors->has('confirmation_password'))
                                      <span class="text-danger">{{ $errors->first('confirmation_password') }}</span>
                                  @endif
                  </div>
                  
                  <div class="form-label5 m-t-20">
                     <input type="submit" value="Resert Password" class="submit-btn3" name="">
                  </div>
               </form>
            </div>
            <div class="already-account">
               <h4 class="col-white m-b-15"> OR </h4>
               <p class="m-b-25"> <a href="{{route('web.register')}}" class="col-white"> Create an Account </a> </p>
            </div>
             <div class="already-account">
               <h4 class="col-white m-b-15"> OR </h4>
               <p class="m-b-25"> <a href="{{route('web.login')}}" class="col-white"> Login </a> </p>
            </div>
         </div>
      </section>
      <!-- Page Content Section Ends Here -->
      <!-- Bootstrap Javascript -->
      @include('web.includes.script')
   </body>
</html>