<header>
   <div class="container">
      <div class="logo">
         <a href="{{route('web.index')}}"> <img src="{{URL::to('/public/website')}}/images/logo.png"> </a>
      </div>
         @if(Auth::check())
            <div class="menu-item user-btn">
               <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="{{Auth::user()->name}}">
                  <i class="fa fa-user"> </i> 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{route('user.dashboard')}}">Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{route('web.logout')}}">Logout</a>
                  </div>
               </div>
            </div>
         @endif
         <div class="navbar-handler">
         <img src="{{URL::to('/public/website')}}/images/hamburger.png">
      </div>
      <div class="navbar-custom">
         <div class="menu-item ">
            <a href="{{route('web.index')}}"> HOME </a>
         </div>
         <div class="menu-item">
            <a href="{{route('web.about')}}"> ABOUT US </a>
         </div>
         <div class="menu-item">
            <a href="{{route('web.categories')}}"> CATEGORIES </a>
            <ol class="sub-menu">
               <li> <a href="{{route('web.category', [base64_encode('1'), 'Accessories'])}}"> Accessories </a> </li>
               <li> <a href="{{route('web.category', [base64_encode('2'), 'Services'])}}"> Services </a> </li>
               <li> <a href="{{route('web.category', [base64_encode('3'), 'Beauty'])}}"> Beauty </a> </li>
               <li> <a href="{{route('web.category', [base64_encode('4'), 'Closet'])}}"> Closet </a> </li>
               <li> <a href="{{route('web.category', [base64_encode('5'), 'Customs'])}}"> Customs </a> </li>
               <li> <a href="{{route('web.category', [base64_encode('6'), 'Pantry'])}}"> Pantry </a> </li>
            </ol>
         </div>
         <div class="menu-item">
            <a href="{{route('web.physical_box')}}"> PHYSICAL BOX </a>
         </div>

         @if(!Auth::check())
            <div class="menu-item authLinks">
               <a class="reg-btn1" href="{{route('web.login')}}"> LOGIN </a>
              <!-- <a href="javascript:void(0)">/</a>-->
               <a class="reg-btn2" href="{{route('web.register')}}"> REGISTER </a>
            </div>
         @endif
        
      </div>
   </div>
</header>