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
               <h3 class="col-white"> LOGIN TO YOUR ACCOUNT <small>(Administration)</small> </h3>

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
               <form method="post">
                  @csrf
                  <div class="form-label5">
                     <h6 class="col-white"> User Name </h6>
                     <input type="text" class="form-field5" name="username" required>
                  </div>
                  <div class="form-label5">
                     <h6 class="col-white"> Password </h6>
                     <input type="password" class="form-field5" name="password" required>
                  </div>
                  <div class="form-label5 m-t-20">
                     <input type="submit" value="LOGIN" class="submit-btn3" name="">
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- Page Content Section Ends Here -->
      <!-- Bootstrap Javascript -->
      @include('web.includes.script')
   </body>
</html>