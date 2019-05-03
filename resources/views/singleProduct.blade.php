@extends('master')
@section('title', $product->product_name)
@section('css')
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" />
    <!-- Product Css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" />
@endsection
@section('content')
    <!-- page_header start -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="{{route('index')}}"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> <a href="{{route('product.index')}}"> Shop </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> {{ $product->product_name }} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_header end -->
	
	<!-- product single wrapper start -->
    <div class="product_single_wrapper">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<!-- shop_sidebar start -->
                    @include('layouts.sidebar')
                    <!-- shop_sidebar end -->
                </div>
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<div class="row">
						<!-- sidebar_shop_right start -->
                        <div class="sidebar_shop_right">
							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="video_img_section_wrapper">
									<div class="slider-for">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<img class="magniflier" src="{{asset('/images/product/' . $product->product_img1)}}" alt="one"/>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<img class="magniflier" src="{{asset('/images/product/' . $product->product_img2)}}" alt="two"/>
                                        </div>
                                        @if (!empty($product->product_img3))
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
											<img class="magniflier" src="{{asset('/images/product/' . $product->product_img3)}}" alt="three">
                                        </div>
                                        @endif
									</div>
									<div class="slider-nav hidden-xs">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
											<img src="{{asset('/images/product/' . $product->product_img1)}}" alt="one">
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
											<img src="{{asset('/images/product/' . $product->product_img2)}}" alt="two">
                                        </div>
                                        @if (!empty($product->product_img3))
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
											<img src="{{asset('/images/product/' . $product->product_img3)}}" alt="three">
										</div> 
                                        @endif
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
								<div class="btc_shop_single_prod_right_section">
									<h1>{{$product->product_name}}</h1>
									<div class="btc_shop_product_price_wrapper">
										<div class="btc_shop_product_price">{{$product->presentPrice()}}</div>
										<div class="btc_shop_product_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<i class="fa fa-star-o"></i>
                                        </div>
                                        @if ($product->product_quan <1)
                                        <div class="btc_shop_price btc_shop_product_availability btc_stock"><small>Sold</small></div>
                                        @else
                                        <div class="btc_shop_product_availability"><small>In Stock</small></div>
                                        @endif
									</div>
									<div class="btc_shop_sin_pro_icon_wrapper">
										<h5>{{$product->product_des}}</h5>
										<span class="cc_ps_heading">Color</span>
										<ul class="cc_ps_list">
											<li>
												<a href="#" title="Black">
													<img src="{{asset('images/shop/electronics/product_single_3.jpg')}}" alt="">
												</a>
											</li>
											<li class="active">
												<a href="#" title="Blue">
													<img src="{{asset('images/shop/electronics/product_single_3.jpg')}}" alt="">
												</a>
											</li>
											<li>
												<a href="#" title="Gray">
													<img src="{{asset('images/shop/electronics/product_single_3.jpg')}}" alt="">
												</a>
											</li>
										</ul>
										<div class="cc_ps_storage">
											<span class="cc_ps_heading heading2">Storage</span>
											<ul class="cc_ps_list storage">
												<li class="active" >
													<a href="#" title="32 GB">
														32 GB
													</a>
												</li>
												<li>
													<a href="#" title="64 GB">
														64 GB
													</a>
												</li>
											</ul>
										</div>
										<div class="cc_ps_ram">
											<span class="cc_ps_heading">RAM</span>
											<ul class="cc_ps_list storage">
												<li class="active" >
													<a href="#" title="3 GB">
														3 GB
													</a>
												</li>
												<li>
													<a href="#" title="4 GB">
														4 GB
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="cc_ps_cart_btn_wrapper">
										<div class="cc_ps_cart_btn">
											<span>Quantity</span>
											<ul>
												<li>
													<div class="cc_ps_quantily_info">
														<div class="select_number">
														   <button onclick="changeQty(1); return false;" title="increase" class="increase">
																<i class="fa fa-angle-up"></i>
														   </button>
														   <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
														   <button onclick="changeQty(0); return  false;" title="decrease" class="decrease">
																<i class="fa fa-angle-down"></i>
														   </button>
														</div>
														<input type="hidden" name="product_id" />
													</div>
												</li>
												<li>
                                                    <form method="post" action="{{ route('cart.store')}}">
                                                        @csrf
                                                        <input name="product_id" type="hidden" value="{{$product->product_id}}">
                                                        <input name="product_name" type="hidden" value="{{$product->product_name}}">
                                                        <input name="product_price" type="hidden" value="{{$product->product_price}}">
                                                        <button title="Add to Cart" class="btn add-btn" type="submit">
                                                            <i class="fa fa-shopping-cart"></i> 
														    Add to Cart
                                                        </button>
                                                    </form>
												</li>
												<li>
													<a href="#" class="product_btn" title="Add to Wishlist">
														<i class="fa fa-heart"></i>
													</a>
												</li>
												<li>
													<a href="#" class="product_btn" title="Add to Compare">
														<i class="fa fa-random"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<!-- product_tab_section start -->
								<div class="product_tab_section">
									<div role="tabpanel">
										 <!-- Nav tabs -->
										 <ul id="product_tab" class="nav nav-tabs">
											<li>
											   <a href="#product_tab_1" data-toggle="tab">
													Description

											   </a>
											</li>
											<li>
												<a href="#product_tab_2" data-toggle="tab">
													 Specifications
												</a>
											</li>
											<li class="active">
											   <a href="#product_tab_3" data-toggle="tab">
													Reviews (3)
												</a>
											</li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade" id="product_tab_1">
												<div class="tab_content_text">
													<p>{{$product->product_des}}</p>
												</div>  
											</div>
											<div class="tab-pane fade" id="product_tab_2">
												<table class="table table-striped table-bordered">
													<tbody>
														<tr>
															<th>In The Box</th>
															<td>{{$product->product_in_box}}</td>
														</tr>
														<tr>
															<th>Model Number</th>
															<td>{{$product->product_model_number}}</td>
														</tr>
														<tr>
															<th>Model Name</th>
															<td>{{$product->product_model_name}}</td>
														</tr>
														<tr>
															<th>Color</th>
															<td>{{$product->product_color}}</td>
														</tr>
														<tr>
															<th>Browse Type</th>
															<td>Smartphones</td>
														</tr>
													</tbody>
												</table>    
											</div>
											<div class="tab-pane fade in active" id="product_tab_3">
												<div class="comment_box_blog">
													<div class="comments_Box">
														<div class="img_wrapper">
															<img src="{{asset('images/shop/electronics/author1.jpg')}}" class="" alt="author_img">
														</div>
														<div class="text_wrapper">
															<div class="author_detail"> 
																<span class="author_name"> Jhon Doe - </span>
																<span class="publish_date">25 August, 2018 </span>
															</div>
															<div class="customer_rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
															<div class="author_content">
																<p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus. </p>
															</div>
														</div>
													</div>
													<div class="comments_Box">
														<div class="img_wrapper">
															<img src="{{asset('images/shop/electronics/author2.jpg')}}" class="" alt="author_img">
														</div>
														<div class="text_wrapper">
															<div class="author_detail">
																<span class="author_name">Matin Lauran - </span>
																<span class="publish_date"> July 3, 2018 </span>
															</div>
															<div class="customer_rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
															<div class="author_content">
																<p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus. </p>
															</div>
														</div>
													</div>
													<div class="comments_Box last_comment_box">
														<div class="img_wrapper">
															<img src="{{asset('images/shop/electronics/author3.jpg')}}" class="" alt="author_img">
														</div>
														<div class="text_wrapper">
															<div class="author_detail">
																<span class="author_name"> Eva Marilla - </span>
																<span class="publish_date"> July 5, 2018 </span>
															</div>
															<div class="customer_rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
															<div class="author_content">
																<p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus. </p>
															</div>
														</div>
													</div>
												 </div>    
											</div>
										</div>
									</div>
								</div>
								<!-- product_tab_section end -->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="product_contect_wrapper">
										<div class="btc_shop_single_prod_right_section">
											<h1>Add a Review</h1>
											<p>Your email address will not be published. Required fields are marked *</p>
											<div class="wrap">
												Your Rating: 
												<div class="inputs"></div>
											</div>
										</div>
										<div class="shop_pdt_form">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<input type="text" placeholder="Your Name*"><i class="fa fa-user"></i>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<input type="email" placeholder="Your Email*"><i class="fa fa-envelope"></i>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="shop_pdt_textarea">
														<textarea rows="4" placeholder=" Your Review*"></textarea><i class="fa fa-question-circle"></i>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="shop_btn_wrapper">
														<button class="btn">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="section_heading">
									<h2>related products</h2>
									<span class="border center"></span>
								</div>
								<div class="elect_related_prod_slider">
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
                                                                <form method="post" action="{{ route('cart.store')}}">
                                                                    {{ csrf_field() }}
                                                                    <input name="product_id" type="hidden" value="{{$product1->product_id}}">
                                                                    <input name="product_name" type="hidden" value="{{$product1->product_name}}">
                                                                    <input name="product_price" type="hidden" value="{{$product1->product_price}}">
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
                                                                <a href="{{route('product.show', $product1->product_id)}}">
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
                                                            <a href="{{route('product.show', $product1->product_id)}}" title="{{$product2->product_name}}">
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
                                                                <form method="post" action="{{ route('cart.store')}}">
                                                                    {{ csrf_field() }}
                                                                    <input name="product_id" type="hidden" value="{{$product2->product_id}}">
                                                                    <input name="product_name" type="hidden" value="{{$product2->product_name}}">
                                                                    <input name="product_price" type="hidden" value="{{$product2->product_price}}">
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
								</div>
							</div>
						</div>
						<!-- sidebar_shop_right end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- product single wrapper end -->
	
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

@endsection
@section('js')
    <!-- Megnify js -->
	<script src="{{ asset('js/megnify.js')}}"></script>
	<!-- Rating js -->
	<script src="{{ asset('js/rating.js')}}"></script>

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
	</script>
@endsection
