<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{URL::to('/public/admin')}}/images/users/placeholder.png" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth::user()->name}}</h5>
                @if(Auth::user()->vendor_status == '0')
                    <a href="" class="btn btn-rounded btn-primary btn-outlined" style="color:#fff !important;" data-toggle="modal" data-target="#becomeVenderModal">
                        Become a Vendor
                    </a>
                @elseif(Auth::user()->vendor_status == '1')
                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary btn-outlined" style="color:#fff !important;">
                        Vendor In-Review
                    </a>
                @elseif(Auth::user()->vendor_status == '2')
                    <a href="{{route('vendor.index')}}" class="btn btn-rounded btn-primary btn-outlined" style="color:#fff !important;">
                        Vendor Dashboard
                    </a>
                @elseif(Auth::user()->vendor_status == '1')
                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary btn-outlined" style="color:#fff !important;">
                        Vendor Rejected
                    </a>
                @endif
                
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-gauge"></i>Dashboard</a>
                </li>
                <li class="nav-small-cap">MEMBERSHIP</li>
                <li><a href="{{route('user.membership.memberPlan')}}">MEMBERSHIP PLAN</a></li>
                <li><a href="{{route('user.membership.memberStatus')}}">MEMBERSHIP STATUS</a></li> 

                <li class="nav-small-cap">MY WHISLIST</li>
                <li><a href="{{route('user.whishlist.whishlistProduct')}}">FAVORITE PRODUCTS</a></li>
                <li><a href="{{route('user.whishlist.whishlistVendors')}}">FAVORITE VENDORS</a></li> 

                <li class="nav-small-cap">SETTING</li>
                <li><a href="{{route('user.setting.settingProfile')}}">EDIT PROFILE</a></li> 
                <li><a href="{{route('user.setting.settingPassword')}}">CHANGE PASSWORD</a></li> 
                <li class="nav-small-cap">LOGOUT</li>                
            </ul>            
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>