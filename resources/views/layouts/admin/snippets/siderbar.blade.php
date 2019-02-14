 <div class="sidebar-wrapper">
     <div class="profile-sidebar">
        <div class="profile-userpic">
            @if(Auth::check())
            <img src="{{asset('images/'.auth()->user()->image)}}" class="img-responsive" alt="">
            @endif

        </div>
        <div class="profile-usertitle">
            @if(Auth::check())
            <div class="profile-usertitle-name">{{auth()->user()->name}}</div>
            @else
            <div class="profile-usertitle-name">Santosh Adhikari</div>
            @endif
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
        <br><br><br><br>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-config"></i>
                        <p>Setting</p>
                    </a>
                </li>        
                <li>
                    <a href="{{route('product.index')}}">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('brand.index')}}">
                        <i class="fa fa-etsy" aria-hidden="true"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('buyer.index')}}">
                        <i class="fas fa-truck"></i>
                        <p>Buyer</p>
                    </a>
                </li>
                 <li>
                    <a href="{{route('roles.index')}}">
                        <i class="fas fa-truck"></i>
                        <p>Roles</p>
                    </a>
                </li>
            </ul>
      </div>
    