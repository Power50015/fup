@extends('master')
@section('title', 'fup')
@section('content')
    <!-- shop_fulwidth_wrapper start -->
    <div class="shop_fulwidth_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!-- shop_full_width start -->
                    <div class="shop_full_width">
                        <!-- shop_slider_wrapper start -->
                        <div class="shop_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item main_slide1">
                                    <div class="plumb_slider_cont1_wrapper">
                                        <div class="slider_content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>OVER <span>200+</span></h3>
                                                        <h1>GREAT DEALS</h1>
                                                        <p>While they last!</p>
                                                        <a href="#" class="btn">Shop Now</a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container -->
                                        </div>
                                        <!-- /.slider_content -->
                                    </div>
                                    <!-- /.plumb_slider_cont1_wrapper -->
                                </div>
                                <!-- /.main_slide1 -->
                                <div class="item main_slide2">
                                    <div class="plumb_slider_cont1_wrapper">
                                        <div class="slider_content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>Up To <span>30%</span>Off</h3>
                                                        <h1>NEW ARRIVALS</h1>
                                                        <p>Starting at $10</p>
                                                        <a href="#" class="btn">Shop Now</a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container -->
                                        </div>
                                        <!-- /.slider_content -->
                                    </div>
                                    <!-- /.plumb_slider_cont1_wrapper -->
                                </div>
                                <!-- /.main_slide2 -->
                                <div class="item main_slide3">
                                    <div class="plumb_slider_cont1_wrapper">
                                        <div class="slider_content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>Get Up To <span>50%</span>Off</h3>
                                                        <h1>Winter Sale</h1>
                                                        <p>Limited items are available.</p>
                                                        <a href="#" class="btn">Shop Now</a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container -->
                                        </div>
                                        <!-- /.slider_content -->
                                    </div>
                                    <!-- /.plumb_slider_cont1_wrapper -->
                                </div>
                                <!-- /.main_slide3 -->
                            </div>
                        </div>
                        <!-- shop_slider_wrapper start -->

                        <!-- products_category_wrapper start -->
                        <div class="products_category_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="product_cat_image m-40">
                                        <div class="product_cat_image_overlay"></div>
                                        <img src="images/shop/electronics/cat_image1.jpg" alt="">
                                        <div class="effect-apollo-overlay">
                                        </div>
                                        <div class="product_cat_text">
                                            <h3>New Trendy </h3>
                                            <h2>Tablets</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="product_cat_image">
                                        <figure class="effect-apollo">
                                            <img src="images/shop/electronics/cat_image2.jpg" alt="">
                                            <div class="effect-apollo-overlay">
                                            </div>
                                        </figure>
                                        <div class="product_cat_text">
                                            <h3>New Trendy </h3>
                                            <h2>Watches</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- products_category_wrapper end -->

                        <!-- btc_shop_index_content_main start -->
                        <div class="btc_shop_index_content_main">
                            <div class="section_heading">
                                <h2>Computers & Accessories</h2>
                                <span class="border center"></span>
                            </div>
                            <!-- product_main_slider_wrapper start -->
                            <div class="product_main_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price">new</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img1.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price btc_hot">Hot</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img2.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 hidden-md col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img3.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img4.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price btc_stock">Sold</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img5.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img5.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 hidden-md col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price">New</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img6.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img6.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product_main_slider_wrapper end -->
                        </div>
                        <!-- btc_shop_index_content_main end -->

                        <!-- btc_shop_index_content_main start -->
                        <div class="btc_shop_index_content_main">
                            <div class="section_heading">
                                <h2>Cameras</h2>
                                <span class="border center"></span>
                            </div>
                            <!-- product_main_slider_wrapper start -->
                            <div class="product_main_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="row">
                                            @foreach ($products1 as $product1)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        @if ($product1->product_quan < 1)
                                                        <ul>
                                                            <li class="btc_shop_price btc_stock">Sold</li>
                                                        </ul>
                                                        @endif
                                                        <div class="product_img">
                                                            <a href="{{route('product.show', $product1->product_id)}}">
                                                                <img class="first-img" src="{{ asset('images/product/' . $product1->product_img1)}}" alt="" width="300" height="300">
                                                                <img class="hover-img" src="{{ asset('images/product/' . $product1->product_img2)}}" alt="" width="300" height="300">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="{{route('product.show', $product1->product_id)}}" title="{{$product1->product_name}}">
                                                            @if (strlen($product1->product_name) > 20)
                                                                {{substr($product1->product_name, 0 , 20) . ".."}}
                                                            @else
                                                                {{$product1->product_name}}
                                                            @endif                                                                
														</a>
                                                        </div>
                                                        <p class="price">
                                                            {{$product1->presentPrice()}}
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            @foreach ($products2 as $product2)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                         @if ($product2->product_quan < 1)
                                                        <ul>
                                                            <li class="btc_shop_price btc_stock">Sold</li>
                                                        </ul>
                                                        @endif
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="{{ asset('images/product/' . $product2->product_img1)}}" alt="" width="300" height="300">
                                                                <img class="hover-img" src="{{ asset('images/product/' . $product2->product_img2)}}" alt="" width="300" height="300">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                           <a href="#" title="{{$product2->product_name}}">
                                                            @if (strlen($product2->product_name) > 20)
                                                                {{substr($product2->product_name, 0 , 20) . ".."}}
                                                            @else
                                                                {{$product2->product_name}}
                                                            @endif                                                                
														</a>
                                                        </div>
                                                        <p class="price">
                                                            {{$product2->presentPrice()}}
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product_main_slider_wrapper end -->
                        </div>
                        <!-- btc_shop_index_content_main end -->

                        <!-- product_banner_wrapper start -->
                        <div class="product_banner_wrapper">
                            <img src="images/shop/electronics/product_banner_img.jpg" alt="">
                        </div>
                        <!-- product_banner_wrapper end -->

                        <!-- btc_shop_index_content_main start -->
                        <div class="btc_shop_index_content_main">
                            <div class="section_heading">
                                <h2>Mobiles & Tablets</h2>
                                <span class="border center"></span>
                            </div>
                            <!-- product_main_slider_wrapper start -->
                            <div class="product_main_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img13.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img13.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price">new</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img14.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img14.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 hidden-md col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price btc_stock">Sold</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img15.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img15.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price btc_hot">hot</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img16.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img16.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <ul>
                                                            <li class="btc_shop_price">new</li>
                                                        </ul>
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img17.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img17.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 hidden-md col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <img class="first-img" src="images/shop/electronics/li_img18.jpg" alt="">
                                                                <img class="hover-img" src="images/shop/electronics/li_hover_img18.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="#" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                            <a href="#">
																Black Mini F1 Samrt NX
															</a>
                                                        </div>
                                                        <p class="price">
                                                            $156.00
                                                        </p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product_btn_wrapper">
                                                            <a href="#" class="product_btn add_wishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <button class="btn" type="button">
                                                                Add to Cart
                                                            </button>
                                                            <a href="#" class="product_btn add_compare" title="Add to Compare">
                                                                <i class="fa fa-bar-chart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product_main_slider_wrapper end -->
                        </div>
                        <!-- btc_shop_index_content_main end -->
                    </div>
                    <!-- shop_full_width end -->
                </div>
            </div>
        </div>
    </div>
    <!-- shop_fulwidth_wrapper end -->
        <!-- sale_box_section start -->
    <div class="sale_box_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sale_box_wrapper m-40">
                        <div class="sale_box_overlay"></div>
                        <a href="#">
                            <img src="images/shop/electronics/cat_image3.jpg" alt="" />
                        </a>
                        <div class="sale_box_text">
                            <div class="sale_box_text_info">
                                <h2>
									Camera On Sale
									<br>
									<span>Up to 25% off</span>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sale_box_wrapper m-40">
                        <div class="sale_box_overlay"></div>
                        <a href="#">
                            <img src="images/shop/electronics/cat_image1.jpg" alt="" />
                        </a>
                        <div class="sale_box_text">
                            <div class="sale_box_text_info">
                                <h2>
									Mobiles & Tablets 
									<br>
									<span>Up to 45% off</span>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sale_box_wrapper">
                        <div class="sale_box_overlay"></div>
                        <a href="#">
                            <img src="images/shop/electronics/cat_image2.jpg" alt="" />
                        </a>
                        <div class="sale_box_text">
                            <div class="sale_box_text_info">
                                <h2>
									Brand New Watches 
									<br>
									<span>Up to 75% off</span>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog_section end -->

    <!-- product_slider_main_wrapper start -->
    <div class="product_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="product_slider_heading">
                        <h4>LATEST</h4>
                    </div>
                    <!-- product_slider_wrapper start -->
                    <div class="product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_1.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_2.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_3.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_4.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_5.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_6.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="product_slider_heading">
                        <h4>BEST SELLERS </h4>
                    </div>
                    <!-- product_slider_wrapper start -->
                    <div class="product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_7.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_8.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_9.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_10.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_11.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_12.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="product_slider_heading">
                        <h4>SALE OFF</h4>
                    </div>
                    <!-- product_slider_wrapper start -->
                    <div class="product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_13.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_14.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_15.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_16.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											iPhone Case
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_17.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Digital Cámara	
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                                <div class="product_wrapper">
                                    <div class="product_image">
                                        <img src="images/shop/electronics/sidebar_product_18.jpg" alt="">
                                    </div>
                                    <div class="product_text">
                                        <a href="#">
											Computer Speakers
										</a>
                                        <div class="product_price">
                                            <span>$16.51</span>
                                        </div>
                                    </div>
                                    <a class="add_to_wishlist" href="#" title="Add to Wishlist">
                                        <span class="fa fa-heart-o"></span>
                                        <span class="fa fa-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product_slider_main_wrapper end -->
	
    <!-- blog_section start -->
    <div class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="section_heading">
                        <h2>Latest News</h2>
                        <span class="border center"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <article class="blog-post-wrapper clearfix">
                        <div class="post-thumbnail">
                            <figure>
                                <img src="images/shop/electronics/blog-1.jpg" alt="services-1">
                            </figure>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">Creative Web Design</a></h4>
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Adipiscing laoreet dui sed sceleri enas pellentesque ac justo. Lectu feltrumn Placerat arcu dolor laoreet</p>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <article class="blog-post-wrapper clearfix">
                        <div class="post-thumbnail">
                            <figure>
                                <img src="images/shop/electronics/blog-2.jpg" alt="services-1">
                            </figure>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">A Better Way To Ask </a></h4>
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Adipiscing laoreet dui sed sceleri enas pellentesque ac justo. Lectu feltrumn Placerat arcu dolor laoreet</p>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <article class="blog-post-wrapper clearfix">
                        <div class="post-thumbnail">
                            <figure>
                                <img src="images/shop/electronics/blog-3.jpg" alt="services-1">
                            </figure>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">Pre-Designed Content </a></h4>
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Adipiscing laoreet dui sed sceleri enas pellentesque ac justo. Lectu feltrumn Placerat arcu dolor laoreet</p>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <article class="blog-post-wrapper clearfix">
                        <div class="post-thumbnail">
                            <figure>
                                <img src="images/shop/electronics/blog-4.jpg" alt="services-1">
                            </figure>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">Executives Corporate</a></h4>
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Adipiscing laoreet dui sed sceleri enas pellentesque ac justo. Lectu feltrumn Placerat arcu dolor laoreet</p>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                    </article>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- blog_section start -->
	
	<!-- features_section start -->
    <div class="features_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="features_wrapper m-40">
                        <i class="flaticon-delivery" aria-hidden="true"></i>
						<div class="features_info_content">
							<h4><a href="#">FREE SHIPPING </a></h4>
							 <p>on all orders over $99.</p>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="features_wrapper m-40">
						<div Class="wobble-horizontal">
							<i class="flaticon-coin" aria-hidden="true"></i>
						</div>
						<div class="features_info_content">
							  <h4><a href="#">CASH BACK OFFER </a></h4>
							  <p>WHEN YOU USE CREDIT CARD</p>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="features_wrapper">
                     <i class="flaticon-24-hours" aria-hidden="true"></i>
						<div class="features_info_content">
							 <h4><a href="#">24/7 SUPPORT</a></h4>
							 <p>Lorem ipsum dolor.</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_section end -->
	
	<!-- shop_sidebar_warpper start -->
    <div class="shop_sidebar_warpper">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-xs-12 visible-sm visible-xs">
					<div class="shop_sidebar">
						<div class="sidebar_widget hidden-xs">
                            <h4>Categories</h4>
                            <div class="shop_sidebar_category">
                                <ul class="shop_sidebar_cate">
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="fa fa-home"></i>
                                            <a class="title" href="#">
											 Home
										  </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-laptop"></i>
                                            <a class="title" href="#">
											Computers & Accessories
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu_title">
                                                            <a href="#">
																Computers
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Personal computer
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Laptops
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                    <div class="col-md-6">
                                                        <div class="menu_title padd-10">
                                                            <a href="#">
																Accessories
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Pen Drives
																<span class="shop_price hot">
																	Hot!
																</span>
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Hard Drives 
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Memory Cards
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-photo-camera"></i>
                                            <a class="title" href="#">
											Cameras
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner one_item_menu">
                                                <div class="menu_title">
                                                    <a href="#">
														Cameras
													</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">
															Personal computer
														</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
															Laptops
														</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-hand-graving-smartphone"></i>
                                            <a class="title" href="#">
											Mobiles & Tablets
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu_title">
                                                            <a href="#">
																Mobiles
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Personal computer
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Laptops
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                    <div class="col-md-6">
                                                        <div class="menu_title  padd-10">
                                                            <a href="#">
																Tablets
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Pen Drives

																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Hard Drives
																<span class="shop_price hot">
																	Hot!
																</span>	
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Memory Cards
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-television"></i>
                                            <a class="title" href="#">
											TV Audio & Video
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu_title">
                                                            <a href="#">
																TV Audio
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Personal computer
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Laptops
																<span class="shop_price hot">
																	Hot!
																</span>
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                    <div class="col-md-6">
                                                        <div class="menu_title padd-10">
                                                            <a href="#">
																TV Vedio
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Pen Drives

																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Hard Drives

																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Memory Cards
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-watch-with-blank-face"></i>
                                            <a class="title" href="#">
											Watches & Eyewear
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu_title">
                                                            <a href="#">
																Watches
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Personal computer
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Laptops
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                    <div class="col-md-6">
                                                        <div class="menu_title padd-10">
                                                            <a href="#">
																Eyewear
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Pen Drives

																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Hard Drives
																<span class="shop_price new">
																	New!
																</span>		
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Memory Cards
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-gamepad-controller"></i>
                                            <a class="title" href="#">
											 Music & Video Games
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu_title">
                                                            <a href="#">
																Music
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Personal computer
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Laptops
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                    <div class="col-md-6">
                                                        <div class="menu_title padd-10">
                                                            <a href="#">
																Video Games
															</a>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Pen Drives

																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Hard Drives
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
																	Memory Cards
																<span class="shop_price new">
																	New!
																</span>	
																</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End .col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop_sidebar_title">
                                            <i class="flaticon-car-steering-wheel"></i>
                                            <a class="title" href="#">
											Car Accessories
											  <span>
												<i class="fa fa-angle-right"></i>
											  </span>
										  </a>
                                        </div>
                                        <div class="shop_sidebar_submenu">
                                            <div class="shop_sidebar_submenu_inner one_item_menu">
                                                <div class="menu_title">
                                                    <a href="#">
														Car Accessories
													</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">
															Personal computer
														</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
															Laptops
														</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.shop_sidebar_cate end -->
                            </div>
                            <!-- /.shop_sidebar_category end -->
                        </div>
                        <!-- sidebar_widget end -->
						<div class="sidebar_widget">
							<div class="sidebar_ad_wrapper">
								<a href="#">
									<img src="images/shop/electronics/sidebar_banner_img.jpg" title="banner" alt="banner">
								</a>
								<div class="text-info">
									<span class="small-text text-1">Hurry Up!</span>
									<span class="large-text">Save 45%</span>
									<span class="small-text text-2">Buy many Items</span>
									<a href="#" class="btn-shopnow">Shop Now</a>
								</div>
							</div>
							<!-- /.sidebar_ad_wrapper-->
						</div>
						<div class="sidebar_widget">
							<h4>Best Sellers</h4>
							<div class="sidebar_product_wrapper">
								<div class="sidebar_product_image">
									<img src="images/shop/electronics/sidebar_product_1.jpg" alt="">
								</div>
								<div class="sidebar_product_text">
									<a href="#">
													iPhone Case
												</a>
									<div class="sidebar_product_price">
										<span>$16.51</span>
									</div>
								</div>
							</div>
							<div class="sidebar_product_wrapper">
								<div class="sidebar_product_image">
									<img src="images/shop/electronics/sidebar_product_2.jpg" alt="">
								</div>
								<div class="sidebar_product_text">
									<a href="#">
													 Digital Cámara 
												</a>
									<div class="sidebar_product_price">
										<span>$16.51</span>
									</div>
								</div>
							</div>
							<div class="sidebar_product_wrapper">
								<div class="sidebar_product_image">
									<img src="images/shop/electronics/sidebar_product_3.jpg" alt="">
								</div>
								<div class="sidebar_product_text">
									<a href="#">
													Speakers
												</a>
									<div class="sidebar_product_price">
										<span>$16.51</span>
									</div>
								</div>
							</div>

						</div>
						<!-- sidebar_widget end -->
						<!-- sidebar_widget end -->
						<div class="sidebar_widget">
							<h4>offer products</h4>
							<div class="latest_post_wrapper">

								<div class="blog_wrapper2">
									<div class="blog_image">
										<img src="images/blog/blog-5/blog_img2.jpg" class="img-responsive" alt="blog_img2" />
									</div>
									<div class="blog_text">
										<h5><a href="#">EOS 450D Camera</a></h5>
										<div class="blog_date">$ 200 - $ 150</div>
									</div>
								</div>
								<div class="blog_wrapper3">
									<div class="blog_image">
										<img src="images/blog/blog-5/blog_img3.jpg" class="img-responsive" alt="blog_img3" />
									</div>
									<div class="blog_text">
										<h5><a href="#">EOS 450D Camera</a></h5>
										<div class="blog_date">$ 200 - $ 150</div>
									</div>
								</div>
							</div>
						</div>
						<!-- sidebar_widget end -->
						<div class="sidebar_widget">
							<h4>filter by price</h4>
							<div class="widget price-range">
								<ul>
									<li class="range">

									<div id="responsive_range_price" class="range-box"></div>
									<span>from:</span>
									<input type="text" id="responsive_price" class="price-box" readonly/>
									</li>
									<li class="shop_btn_wrapper">
										<ul>
											<li>
												<a href="#" class="btn">filter</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- sidebar_widget end -->
						<div class="sidebar_widget sidebar_img">
							<a href="#">
								<img src="images/shop/electronics/add.jpg" title="banner" alt="banner">
							</a>
						</div>
						<!-- sidebar_widget end -->
						<div class="sidebar_widget">
							<h4>Testimonials</h4>
							<div class="sidebar_testimonial_slider">
								<div class="owl-carousel owl-theme">
									<div class="item ">
										<div class="item_image">
											<img src="images/shop/electronics/testi_1.png" class="img-responsive" alt="t1_img">
										</div>
										<div class="item_content">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
											</blockquote>
										</div>
										<div class="item_content_bottom">
											<h5>Martin Gips</h5>
										</div>
									</div>
									<div class="item">
										<div class="item_image">
											<img src="images/shop/electronics/testi_2.png" class="img-responsive" alt="t1_img">
										</div>
										<div class="item_content">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
											</blockquote>
										</div>
										<div class="item_content_bottom">
											<h5>Martin Gips</h5>
										</div>
									</div>
									<div class="item">
										<div class="item_image">
											<img src="images/shop/electronics/testi_3.png" class="img-responsive" alt="t1_img">
										</div>
										<div class="item_content">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
											</blockquote>
										</div>
										<div class="item_content_bottom">
											<h5>Martin Gips</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- sidebar_widget end -->
					</div>
					<!-- shop_sidebar end -->
				</div>
			</div>
		</div>
	</div>
	<!-- shop_sidebar_warpper end -->
	
@endsection
@section('js')
    <script>
        function changeQty(increase) {
            var qty = parseInt($('.select_number').find("input").val());
            if (!isNaN(qty)) {
                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                $('.select_number').find("input").val(qty);
            } else {
                $('.select_number').find("input").val(1);
            }
        }

        function goToByScroll(id) {
            $('html,body').animate({
                scrollTop: $("#" + id).offset().top
            }, 'slow');
        }
    </script>
@endsection
