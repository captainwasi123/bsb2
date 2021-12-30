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
                <h5>{{Auth::guard('admin')->user()->fullname}}</h5>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a class="waves-effect waves-dark" href=""><i class="mdi mdi-gauge"></i>Dashboard</a>
                </li>
                <li class="nav-small-cap">VENDORS</li>
                <li><a href="{{route('admin.vendor.vendorNew')}}">NEW REQUEST </a></li>
                <li><a href="{{route('admin.vendor.vendorActive')}}">ACTIVE</a></li>
                <!-- <li><a href="{{route('admin.vendor.vendorFeatured')}}">FEATURED</a></li>  -->
                <li><a href="{{route('admin.vendor.vendorBlocked')}}">BLOCKED</a></li>

                <li class="nav-small-cap">USERS</li>
                <li><a href="{{route('admin.users.usersAll')}}">ALL</a></li>
                <li><a href="{{route('admin.users.usersPremium')}}">PREMIUM</a></li>
                <li><a href="{{route('admin.users.usersBlocked')}}">BLOCKED</a></li>

                <li class="nav-small-cap">FEATURED MEMBERSHIP</li>
                <li><a href="{{route('admin.featured_member.memberPending')}}">QUE</a></li>
                <li><a href="{{route('admin.featured_member.memberPublish')}}">PUBLISHED</a></li>
                <li><a href="{{route('admin.featured_member.memberExpired')}}">UPCOMING EXPIRED</a></li>

                <li class="nav-small-cap"> PRODUCTS</li>
                <li><a href="{{route('admin.featured_product.productPending')}}">PENDING</a></li>
                <li><a href="{{route('admin.featured_product.productPublish')}}">All APPROVE</a></li>
                <li><a href="{{route('admin.featured_product.productBlocked')}}">BLOCKED</a></li>


                <li class="nav-small-cap">  PRODUCTS</li>
                <li><a href="{{route('admin.featured_product.featproductApprove')}}">All PRODUCT</a></li>
                <li><a href="{{route('admin.featured_product.featproductPending')}}"> PENDING</a></li>



                <li class="nav-small-cap">SETTING</li>
                <li><a href="{{route('admin.setting.settingRole')}}">ADMIN ROLE</a></li>

                <li class="nav-small-cap">LOGOUT</li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
