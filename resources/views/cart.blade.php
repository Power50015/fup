@extends('master')
@section('title', 'fup')
@section('css') 
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('css/shop.css')}}" />
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
                            <li> Shopping Cart  </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_header end -->
	
	<!--cart product wrapper Wrapper Start -->
    <div class="cart_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                        <h1>Your cart Products ({{ Cart::count()}})</h1>
                    </div>
                </div>
                <div class="shop_cart_page_wrapper">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="table-responsive cart-calculations">
                            <table class="table">

                                <thead class="cart_table_heading">
                                    <tr>
                                        <th>item</th>

                                        <th>product</th>
                                        <th>&nbsp;</th>
                                        <th> price</th>

                                        <th>Quantity</th>

                                        <th>Total price</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                    ?>
                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td>
                                            {{$i}}
                                        </td>
                                        <td>
                                            <div class="table_cart_img">
                                                <figure>
                                                    <img src="{{ asset('images/product/' . $item->model->product_img1)}}" alt="" width="66" height="65"/>
                                                </figure>
                                            </div>
                                            <div class="table_cart_cntnt">
                                                <h1>{{$item->model->product_name}}</h1>
                                                <p>color : {{$item->model->product_color}} </p>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td class="cart_page_price">{{$item->model->presentPrice()}}</td>
                                        <td>
                                            <input value="1" type="number" />
                                        </td>
                                        <td class="cart_page_totl">${{$item->total}}</td>
                                        <td>
                                            <form action="{{ route('cart.destroy', $item->rowId)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-delete" title="Remove Product" type="submit">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                        $i++ 
                                    ?>
                                    @endforeach
                                    <tr>

                                        <td> </td>
                                        <td class="shop_btn_wrapper shop_car_btn_wrapper">

                                            <ul>
                                            <li><a href="{{route('product.index')}}">continue shopping</a>
                                                </li>
                                            </ul>

                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>

                                        <td class="cart_btn_cntnt"> Total : <span>${{Cart::total()}} </span> </td>
                                        <td></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_2">
                            <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                <h1>coupan code enetr here : </h1>
                                <div class="lr_nl_form_wrapper">
                                    <input type="text" placeholder="Type Your Code">
                                    <button type="submit">apply</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                        <div class="shipping_Wrapper">
                            <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                <h1>estimate shipping : </h1>
                            </div>
                            <div class="estimate_shiping_Wrapper_cntnt">
                                <div class="custome-select style2">
                                    <span>Select country <i class="fa fa-angle-down"></i></span>
                                    <select>
                                        <option>United States</option>
                                        <option>Austraila</option>
                                        <option>London</option>
                                    </select>
                                </div>

                                <div class="custome-select style2">
                                    <span>Select State <i class="fa fa-angle-down"></i></span>
                                    <select>
                                        <option>United States</option>
                                        <option>Austraila</option>
                                        <option>London</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter ZIP code" />
                                <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                                    <ul>
                                        <li><a href="#">check</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_repsnse">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Sub Total : </th>
                                            <td><span class="price">${{Cart::subtotal()}}</span></td>
                                        </tr>
                                        <tr>
                                            <th>Tax 18% :</th>
                                            <td><span class="price">${{Cart::tax()}}</span></td>
                                        </tr>
                                        <tr>
                                            <th> Discount:</th>
                                            <td><span class="price">-0</span></td>
                                        </tr>
                                        <tr>
                                            <th class="cart_btn_cntnt"> Sub Total :</th>
                                            <td><span class="cart_btn_cntnt_clr">${{Cart::total()}} </span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                                    <ul>
                                        <li><a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- cart product wrapper end -->
	
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