@extends('layouts.blog.index')
@section('content')
<!-- Slider area -->
@include('layouts.blog.snippets.sidebar')
<!-- Slider area end -->

<div class="product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title">
                                <h3>Best Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-area-inner">
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel">
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    @foreach($products as $product)
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="{{route('public.show',['id',$product->id])}}">
                                                        <img src="{{asset("images/$product->featured_image")}}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="single-product.html">{{!! str_limit($product->description,100)}}</a></h2>
                                                    <span class="price">
                                                        {{$product->price}}
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
@endsection