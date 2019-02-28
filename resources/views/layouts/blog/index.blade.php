<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eshop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('web/images/icons/icon_logo.png')}}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/colors.css')}}">
    </head>
    <body>
        <div class="wrapper home-one">
            <!-- HEADER AREA START -->
            @include('layouts.blog.snippets.header')
            <!-- HRADER AREA END -->
            <!-- Slider area -->
            @include('layouts.blog.snippets.sidebar')
            <!-- Slider area end -->
            <!-- Best sellers -->
            <div class="product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title">
                                <h3>Best Sellers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-area-inner">
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel">
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/1.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Aliquam lobortis est</a></h2>
                                                    <span class="price">
                                                        $ 80.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Aliquam lobortis</a></h2>
                                                    <span class="price">
                                                        <del>$ 150.00</del> $ 145.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/3.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Tincidunt malesuada</a></h2>
                                                    <span class="price">
                                                        <del>$ 80.00</del> $ 50.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/9.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                                    <span class="price">
                                                        <del>$ 85.00</del> $ 75.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <span class="onsale">Sale!</span>
                                                        <img src="{{asset('web/images/product/5.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Donec eu libero</a></h2>
                                                    <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/6.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                                    <span class="price">
                                                        $ 45.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/7.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                    <span class="price">
                                                         $ 70.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{asset('web/images/product/8.jpg')}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                    <span class="price">
                                                        $ 80.00
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <a href="cart.html">Add to cart</a>
                                                    </div>
                                                    <div class="star-actions">
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <ul class="actions">
                                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Best sellers end -->
            <!-- footer start -->
            @include('layouts.blog.snippets.footer')
            <!-- footer end -->
           </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
        <script src="{{asset('web/js/jquery-3.2.1.min.js')}}" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>

        <!-- Popper min js -->
        <script src="{{asset('web/js/popper.min.js')}}"></script>
        <!-- Bootstrap min js  -->
        <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
		<!-- nivo slider pack js  -->
        <script src="{{asset('web/js/jquery.nivo.slider.pack.js')}}"></script>
        <!-- All plugins here -->
        <script src="{{asset('web/js/plugins.js')}}"></script>
        <!-- Main js  -->
        <script src="{{asset('web/js/main.js')}}"></script>



        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/bege-v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 06:02:59 GMT -->
</html>
