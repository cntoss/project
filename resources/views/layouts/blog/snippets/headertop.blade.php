 <header class="header-area">
                <!-- Header middle area start -->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-md-12">
                                <!-- site-logo -->
                                <div class="site-logo">
                                    <a href="index.html"><img src="{{asset('web/images/logo/logo-white.png')}}" alt="Nikado"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <!-- header-search -->
                                <div class="header-search clearfix">
                                    <div class="category-select pull-right">
                                        <select class="nice-select-menu">
                                            <option data-display="All Categories">All Categories</option>
                                            <option value="1">Decor & Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Fashion & clothings</option>
                                            <option value="4" disabled>Sport & Outdoors</option>
                                            <option value="5">Toy, Kids & Baby</option>
                                        </select> 
                                    </div> 
                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search product...">
                                            <input type="submit" name="submit" value="Search">
                                        </form>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <!-- shop-cart-menu -->
                                <div class="shop-cart-menu pull-right">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a href="#">
                                            <span class="cart-icon">
                                                <i class="ion-bag"></i><sup>3</sup>
                                            </span>
                                            <span class="cart-text">
                                                <span class="cart-text-title">My cart <br> <strong>$ 145.00</strong> </span>
                                            </span>
                                        </a>
                                            <ul>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('web/images/product/1.jpg')}}" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">sport t-shirt men</a></h5>
                                                            <span class="price">£515.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('web/images/product/2.jpg')}}" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">sport coat amet</a></h5>
                                                            <span class="price">£100.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('web/images/product/3.jpg')}}" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="cart.html">Pellentesque men</a></h5>
                                                            <span class="price">£265.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- shop-cart-total -->
                                                    <div class="shop-cart-total">
                                                        <p>Subtotal: <span class="pull-right">£880.00</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cart-btn">
                                                        <a href="checkout.html">Checkout</a>
                                                        <a href="cart.html" class="pull-right">View Cart</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header middle area end -->
                <!-- Header bottom area start -->
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="row">                            
                            <div class="col-lg-9">
                                <!-- main-menu -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li class="current"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                                                                           </li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="{{route('home')}}">Dashboard</a></li>
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Header bottom area end -->
  </header>
           