@extends('master')
@section('title', 'fup')
@section('content')
<div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="/"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> Shop </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop_fulwidth_wrapper start -->
    <div class="shop_fulwidth_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    @include('layouts.sidebar')
                </div>
                    <!-- shop_sidebar end -->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!-- shop_full_width start -->
                    <div class="shop_full_width">
                        <!-- btc_shop_index_content_main start -->
                        <div class="btc_shop_index_content_main">
                            <div class="section_heading">
                                <h2>All Products</h2>
                                <span class="border center"></span>
                            </div>
                            <!-- product_main_slider_wrapper start -->
                            <div class="product_main_slider_wrapper">
                                    <div class="item">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="btc_shop_indx_cont_box_wrapper">
                                                    <div class="btc_shop_indx_img_wrapper">
                                                        @if ($product->product_quan <= 0)
                                                        <ul>
                                                            <li class="btc_shop_price btc_stock">Sold</li>
                                                        </ul>
                                                        @endif
                                                        <div class="product_img">
                                                            <a href="{{route('product.show', $product->product_id)}}">
                                                                <img class="first-img" src="{{ asset('images/product/' . $product->product_img1)}}" alt="" width="300" height="300">
                                                                <img class="hover-img" src="{{ asset('images/product/' . $product->product_img2)}}" alt="" width="300" height="300">
                                                            </a>
                                                        </div>
                                                        <div class="cc_li_img_text">
                                                            <a href="{{route('product.show', $product->product_id)}}" data-toggle="modal" data-target="#product_view" title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="btc_shop_indx_img_cont_wrapper">
                                                        <div class="name">
                                                        <a href="{{route('product.show', $product->product_id)}}" title="{{$product->product_name}}">
                                                            @if (strlen($product->product_name) > 20)
                                                                {{substr($product->product_name, 0 , 20) . ".."}}
                                                            @else
                                                                {{$product->product_name}}
                                                            @endif                                                                
														</a>
                                                        </div>
                                                        <p class="price">
                                                            {{$product->presentPrice()}}
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
                                                        <form method="post" action="{{ route('cart.store')}}">
                                                                {{ csrf_field() }}
                                                                <input name="product_id" type="hidden" value="{{$product->product_id}}">
                                                                <input name="product_name" type="hidden" value="{{$product->product_name}}">
                                                                <input name="product_price" type="hidden" value="{{$product->product_price}}">
                                                                <button class="btn" type="submit">
                                                                    Add to Cart
                                                                </button>
                                                            </form>
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
