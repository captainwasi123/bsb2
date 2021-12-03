<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   <title> @yield('title') | {{env('APP_NAME')}} </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Collaborate, cross-marketing, increased sales, subscription with benefits, small business, beauty, minority owned">
      <meta name="host" content="{{ URL::to('/') }}">
      @yield('meta')
      
      @include('web.includes.style')
      @yield('addStyle')

   </head>
   <body>
      <!-- Header Section Starts Here -->
         @include('web.includes.header')
      <!-- Header Section Ends Here -->
      

         @yield('content')


      <!-- Footer Section Starts Here -->
         @include('web.includes.footer')
      <!-- Footer Section Ends Here -->
      <!-- Bootstrap Javascript -->
         @include('web.includes.script')
         @yield('addScript')
   </body>
</html>