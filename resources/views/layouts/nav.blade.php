        <!-- section-4 logo start-->
        <div class="section4_logo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 hidden-xs">
                        <div class="logo_wrapper">
                            <a href="{{route('index')}}"><img src="{{ asset('images/logo_white.png')}}" alt="logo_img" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 hidden-xs">
                        <div class="header_search_wrapper">
                            <input type="text" placeholder="Search here">
                            <select>
                                <option value="0" selected="selected">All Categories</option>
                                <option value="1">Computers &amp; Accessories</option>
                                <option value="2">Cameras</option>
                                <option value="3">Mobiles &amp; Tablets</option>
                                <option value="3">TV Audio &amp; Video</option>
                                <option value="3">Watches &amp; Tablets</option>
                                <option value="3">Music &amp; Video Games</option>
                                <option value="3"> Car Accessories</option>
                            </select>
                            <button>
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="logo_wrapper visible-xs">
                            <a href="{{route('index')}}"><img src="{{ asset('images/logo_white.png')}}" alt="logo_img" /></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-1 hidden-xs">
                        <div class="nav pull-right">
                            <ul class="list-inline">
                                <li>
                                    <div class="header_contact hidden-sm hidden-xs">
                                        <span>Call us now</span>
                                        <a href="#">
                                            <strong>+123 5678 890</strong>
                                        </a>
                                    </div>
                                    <!-- End .header_contact -->
                                </li>
                                <!-- Cart Option -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <span>
											<i class="fa fa-shopping-cart"></i>
										</span>
                                        <i class="fa fa-angle-down hidden-sm"></i>
                                    </a>
                                    <span class="section2_cart_badge">{{Cart::Count()}}</span>
                                    <div class="section2_cart_dropdown dropdown-menu">
                                        <div class="dropdown-cart-products">
                                            @foreach (Cart::content() as $item)
                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                    <a href="{{ route('product.show', $item->model->product_id)}}">{{$item->model->product_name}}</a>
													</h4>
                                                    <span class="cart-product-info">
														<span class="cart-product-qty">{{$item->qty}}</span> x {{$item->model->presentPrice()}}
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->
                                                <figure class="product-image-container">
                                                    <a href="#" class="product-image">
                                                        <img src="{{ asset('images/product/' . $item->model->product_img1)}}" alt="product">
                                                    </a>
                                                <form action="{{ route('cart.destroy', $item->rowId)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-remove" title="Remove Product" type="submit">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </form>
                                                </figure>
                                            </div>
                                            <!-- End .product -->
                                            @endforeach
                                        </div>
                                        <!-- End .cart-product -->
                                        <div class="dropdown-cart-total">
                                            <span>Total before tax</span>
                                            <span class="cart-total-price">${{Cart::subtotal()}}</span>
                                        </div>
                                        <div class="dropdown-cart-total">
                                            <span>Tax</span>
                                            <span class="cart-total-price">${{Cart::tax()}}</span>
                                        </div>
                                        <div class="dropdown-cart-total">
                                            <span>Total</span>
                                            <span class="cart-total-price">${{Cart::total()}}</span>
                                        </div>
                                        <!-- End .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <a href="{{route('cart.index')}}" class="btn btn_left">View Cart</a>
                                            <button class="btn">Checkout</button>
                                        </div>
                                        <!-- End .dropdown-cart-total -->
                                    </div>
                                </li>
                                <!-- /.Cart Option -->
                            </ul>

                        </div>
                    </div>
                    <div class="col-xs-12 visible-xs">
                        <div class="section4_search_box">
                            <input type="text" placeholder="Search here">
                            <button><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-4 logo end-->
		
		<div class="main_menu_wrapper hidden-xs hidden-sm">
            <nav class="navbar mega-menu navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{route('index')}}">
									Home
								</a>
                            </li>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									  Laptop & Computer
									<span class="angle_down">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
                                <ul class="dropdown-menu">
									<li>
                                        <a href="#">
											Apple iMac
										</a>
                                    </li>
									<li>
                                        <a href="#">
											Dell Inspiron i3
										</a>
                                    </li>
                                    <li>
                                       <a href="#">
											Lenovo - (Pentium Quad Core)
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											 HP 15 Core i3
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Acer Aspire 3
										</a>
                                    </li>
									<li>
                                        <a href="#">
											Lenovo Ideapad 330 
										</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									Cameras
									<span class="angle_down">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
											DSLR
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Compact & Bridge Cameras
										</a>
                                    </li>
                                    <li>
                                       <a href="#">
											Sports & Action Cameras
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Camera Lens
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Camera Tripods
										</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown m-menu-fw">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle"> 
									Mobiles & Tablets
									<span class="angle_down">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-lg-3 col-md-4">
												<li class="dropdown-header">Smart Phone</li>
												<li>
													<a href="#">All Mobile Phones</a>
                                                </li>
                                                <li>
													<a href="#">Smart phones</a>
                                                </li>
												<li>
													<a href="#">Android Mobiles</a>
                                                </li>
												<li>
													<a href="#">Windows Mobiles</a>
                                                </li>
												<li>
													<a href="#">Refurbished Mobiles</a>
                                                </li>
												<li>
													<a href="#">All Mobile Accessories</a>
                                                </li>
												<li>
													<a href="">Cases &amp; Covers</a>
                                                </li>
                                            </ul>
											<ul class="col-lg-3 col-md-4">
												<li class="dropdown-header">Note Book</li>
												<li>
													<a href="#">All Note Books</a>
                                                </li>
                                                <li>
													<a href="#">Smart notebooks</a>
                                                </li>
												<li>
													<a href="#">Android Note Book</a>
                                                </li>
												<li>
													<a href="#">Windows Note Book</a>
                                                </li>
												<li>
													<a href="#">Refurbished Note Book</a>
                                                </li>
												<li>
													<a href="#">Note Books Accessories</a>
                                                </li>
												<li>
													<a href="">Cases &amp; Covers</a>
                                                </li>
                                            </ul>
											<ul class="col-lg-3 col-md-4">
												<li class="dropdown-header">Tablets</li>
												<li>
													<a href="#">All Tablets</a>
                                                </li>
                                                <li>
													<a href="#">Smart Tablets</a>
                                                </li>
												<li>
													<a href="#">Android Tablets</a>
                                                </li>
												<li>
													<a href="#">Windows Tablets</a>
                                                </li>
												<li>
													<a href="#">Refurbished Tablets</a>
                                                </li>
												<li>
													<a href="#">Tablets Accessories</a>
                                                </li>
												<li>
													<a href="">Cases &amp; Covers</a>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-3 col-md-4">
												<li>
													<div class="sidebar_widget">
														<div class="sidebar_ad_wrapper">
															<a href="#">
																<img src="images/shop/electronics/sidebar_banner_img.jpg" title="banner" alt="banner">
															</a>
														</div>
														<!-- /.sidebar_ad_wrapper-->
													</div>
												</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									 Home Entertainment
									<span class="angle_down">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
											Home Audio Speakers
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Home Theatres
										</a>
                                    </li>
                                    <li>
                                       <a href="#">
											Bluetooth Speakers 
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											DTH Set Top Box
										</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									Accessories
									<span class="angle_down">
										<i class="fa fa-angle-down"></i>
									</span>
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
											Mobile Cases
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Memory Cards
										</a>
                                    </li>
                                    <li>
                                       <a href="#">
											Smart Headphones
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Pendrives
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Laptop Bags
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
											Laptop Skins & Decals
										</a>
                                    </li>
									<li>
                                        <a href="#">
											Mouse
										</a>
                                    </li>
                                </ul>
                            </li>
							
						</ul>
					</div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
		<div class="mobail_menu_main visible-xs visible-sm">
            <div class="navbar-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                            <a class="navbar-brand" href="index.html"><img src="images/logo_white.png" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                            <button type="button" class="navbar-toggle collapsed" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <a class="sidebar_logo" href="index.html"><img src="images/logo.png" alt=""></a>
                <div id="toggle_close">&times;</div>
                <div id='cssmenu'>
                    <ul>
						<li><a href='shop_sport.html'>Home</a></li>
                        <li class='has-sub'><a href='#'>Laptop & Computer</a>
							<ul>
								<li>
									<a href="#">
										Apple iMac
									</a>
                                </li>
								<li>
                                   <a href="#">
										Dell Inspiron i3
									</a>
                                </li>
                                <li>
									<a href="#">
										Lenovo - (Pentium Quad Core)
									</a>
                                </li>
                                <li>
                                   <a href="#">
										HP 15 Core i3
									</a>
                                </li>
								<li>
									<a href="#">
										Acer Aspire 3
									</a>
                                </li>
								<li>
                                   <a href="#">
										Lenovo Ideapad 330 
									</a>
                                </li>
                            </ul>
                        </li>
						<li class='has-sub'><a href='#'>Cameras</a>
							<ul>
								<li>
                                   <a href="#">
										DSLR
								   </a>
                               </li>
                               <li>
                                    <a href="#">
										Compact &amp; Bridge Cameras
									</a>
                                </li>
                                <li>
                                   <a href="#">
										Sports &amp; Action Cameras
								   </a>
                                </li>
                                <li>
                                   <a href="#">
										Camera Lens
								   </a>
                                </li>
                                <li>
                                   <a href="#">
										Camera Tripods
								   </a>
								</li>
							</ul>
						</li>
						<li class='has-sub'><a href='#'>Smart Phones</a>
							<ul>
								<li>
									<a href="#">All Mobile Phones</a>
								</li>
                                <li>
									<a href="#">Smart Phones</a>
								</li>
								<li>
									<a href="#">Android Mobiles</a>
								</li>
								<li>
									<a href="#">Windows Mobiles</a>
								</li>
								<li>
									<a href="#">Refurbished Mobiles</a>
								</li>
								<li>
									<a href="#">All Mobile Accessories</a>
								</li>
								<li>
									<a href="#">Cases &amp; Coverss</a>
								</li>	
							</ul>
						</li>
						<li class='has-sub'><a href='#'>Note Book</a>
							<ul>
								<li>
									<a href="#">All Note Book</a>
								</li>
                                <li>
									<a href="#">Smart Note Books</a>
								</li>
								<li>
									<a href="#">Android Note Books</a>
								</li>
								<li>
									<a href="#">Windows Note Books</a>
								</li>
								<li>
									<a href="#">Refurbished Note Books</a>
								</li>
								<li>
									<a href="#">Note Books Accessories</a>
								</li>
								<li>
									<a href="#">Cases &amp; Coverss</a>
								</li>	
							</ul>
						</li>
						<li class='has-sub'><a href='#'>Tablets</a>
							<ul>
								<li>
									<a href="#">All Tablets</a>
								</li>
                                <li>
									<a href="#">Smart Tablets</a>
								</li>
								<li>
									<a href="#">Android Tablets</a>
								</li>
								<li>
									<a href="#">Windows Tablets</a>
								</li>
								<li>
									<a href="#">Refurbished Tablets</a>
								</li>
								<li>
									<a href="#">Tablets Accessories</a>
								</li>
								<li>
									<a href="#">Cases &amp; Coverss</a>
								</li>	
							</ul>
						</li>
						<li class='has-sub'><a href='#'> Home Entertainment</a>
							<ul>
								<li>
                                    <a href="#">							
										Home Audio Speakers
									</a>
                                </li>
                                <li>
									<a href="#">
										Home Theatres
									</a>
                                </li>
                                <li>
                                    <a href="#">
										Bluetooth Speakers 
									</a>
                                </li>
                                <li>
                                   <a href="#">
										 DTH Set Top Box
									</a>
                                </li>
                            </ul>
                        </li>
						<li class='has-sub'><a href='#'>Accessories</a>
							<ul>
								<li>
                                    <a href="#">							
										Mobile Cases	
									</a>
                                </li>
								<li>
                                    <a href="#">							
										Memory Cards	
									</a>
                                </li>
                                <li>
									<a href="#">
										Smart Headphones
									</a>
                                </li>
                                <li>
                                    <a href="#">
										Pendrives
									</a>
                                </li>
                                <li>
                                   <a href="#">
										 Laptop Bags
									</a>
                                </li>
                                <li>
                                    <a href="#">
										Laptop Skins &amp; Decals
									</a>
                                </li>
                                <li>
									<a href="#">
										Mouse
									</a>
								</li>
                            </ul>
                        </li>
					</ul>
				</div>
			</div>
		</div>
    </div>
    <!-- header end -->