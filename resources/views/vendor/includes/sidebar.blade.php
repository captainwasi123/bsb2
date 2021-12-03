<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{URL::to('/')}}/public/storage/vendor/logo/{{Auth::user()->logo}}" onerror="this.onerror=null;this.src='{{URL::to('/public/admin')}}/images/users/placeholder.png';"  alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth::user()->name}}e</h5>
      <a href="{{route('user.dashboard')}}" class="btn btn-rounded btn-primary btn-outlined" style="color:#fff !important;">
                        User Dashboard
                    </a>
            
                
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a class="waves-effect waves-dark" href="{{route('vendor.index')}}"><i class="mdi mdi-gauge"></i>Dashboard</a>
                </li>
                <li class="nav-small-cap">PROFILE</li>
                <li><a href="{{route('vendor.profile.basicInfo')}}">BASIC INFO </a></li>
                <li><a href="{{route('vendor.profile.passSecurity')}}">PASSWORD & SECURITY</a></li> 

                <li class="nav-small-cap">PRODUCTS</li>
                <li><a href="{{route('vendor.product.addNewProduct')}}">ADD NEW</a></li>
                <li><a href="{{route('vendor.product.allProduct')}}">ALL PRODUCTS</a></li> 
                <li><a href="{{route('vendor.product.pendingProduct')}}">PENDING</a></li> 
                <li><a href="{{route('vendor.product.approveProduct')}}">APPROVE</a></li>
                <li><a href="{{route('vendor.product.rejectProduct')}}">REJECTED</a></li>

                  <li class="nav-small-cap">FEATURE PRODUCTS</li>
                <li><a href="{{route('vendor.product.FeaturProPending')}}">PENDING</a></li>
                <li><a href="{{route('vendor.product.FeatureProApprove')}}">APPROVE</a></li>             
                <li><a href="{{route('vendor.product.FeatureProReject')}}">REJECTED</a></li>

                <li class="nav-small-cap">VIRTUAL BOX</li>
                <li><a href="{{route('vendor.virtual.memberPlan')}}">MEMBERSHIP PLAN</a></li> 
                <li><a href="{{route('vendor.virtual.memberStatus')}}">MEMBERSHIP STATUS</a></li> 
                <li class="nav-small-cap">LOGOUT</li>                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>