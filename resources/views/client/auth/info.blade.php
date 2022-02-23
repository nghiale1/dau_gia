@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('client') }}/images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Trang chủ</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Thông tin cá nhân</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <div class="accordion__title">
                                        Thông tin cá nhân
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipinfo">
                                            <p><b>Họ tên:</b> {{ Auth::guard('nguoidung')->user()->nd_hoten }}</p>
                                            <p><b>Năm sinh:</b> {{ Auth::guard('nguoidung')->user()->nd_namsinh }}</p>
                                            <p><b>Số điện thoại:</b> {{ Auth::guard('nguoidung')->user()->nd_sdt }}</p>
                                            <p><b>Email:</b> {{ Auth::guard('nguoidung')->user()->nd_email }}</p>
                                            <p><b>Địa chỉ:</b> {{ Auth::guard('nguoidung')->user()->nd_diachi }}</p>
                                            @if ($storeInfo->count() > 0)

                                            <a href="{{ route('store.detail') }}" ><i class="zmdi zmdi-long-arrow-right"></i>Xem gian hàng</a>
                                            @else
                                            <a href="#" class="ship-to-another-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Đăng ký gian hàng</a>
                                            @endif

                                            <div class="ship-to-another-content">
                                                <form action="{{ route('store.register') }}" method="POST">
                                                    @csrf
                                                    <input hidden type="text" name="nd_id" value="{{ Auth::guard('nguoidung')->user()->nd_id }}">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="ch_ten" placeholder="Tên cửa hàng">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="ch_diachi" placeholder="Địa chỉ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <textarea name="ch_thongtin" id="" cols="30" rows="10" style="background: unset; border-color: #888"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input dark-btn">
                                                                <button type="submit" class="fv-btn">Tạo cửa hàng</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        Thông tin đơn hàng mua
                                    </div>
                                    <div class="accordion__body">
                                        <div class="bilinfo">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input mt-0">
                                                            <select name="bil-country" id="bil-country">
                                                                <option value="select">Select your country</option>
                                                                <option value="arb">Arab Emirates</option>
                                                                <option value="ban">Bangladesh</option>
                                                                <option value="ind">India</option>
                                                                <option value="uk">United Kingdom</option>
                                                                <option value="usa">United States</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="First name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Street Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Apartment/Block/House (optional)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="City/State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Post code/ zip">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="email" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Phone number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        shipping information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipinfo">
                                            <p><b>Họ tên:</b> Bootexperts, Banasree D-Block, Dhaka 1219, Bangladesh</p>
                                            <a href="#" class="ship-to-another-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Ship to another address</a>
                                            <div class="ship-to-another-content">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input mt-0">
                                                                <select name="bil-country" id="another-bil-country">
                                                                    <option value="select">Select your country</option>
                                                                    <option value="arb">Arab Emirates</option>
                                                                    <option value="ban">Bangladesh</option>
                                                                    <option value="ind">India</option>
                                                                    <option value="uk">United Kingdom</option>
                                                                    <option value="usa">United States</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="First name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Last name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Company name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Street Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Apartment/Block/House (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="City/State">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Post code/ zip">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="email" placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Phone number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        Giỏ hàng
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipmethod">
                                            <form action="#">
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-fast">
                                                        <label for="ship-fast">First shipping</label>
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum quaerat totam hic suscipit quam repellat debitis ad sed aperiam quisquam quibusdam enim labore, ipsa illo, natus ipsam temporibus officia.</p>
                                                </div>
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-normal">
                                                        <label for="ship-normal">Normal shipping</label>
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam maxime, eaque eos! Quidem officia similique, fuga consequatur vero? Quis autem dicta voluptatibus veniam temporibus rem reprehenderit placeat quaerat sunt ducimus.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        Sản phẩm đã đấu giá
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Check/ Money Order</a>
                                            </div>
                                            <div class="single-method">
                                                <a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                            </div>
                                            <div class="paymentinfo-credit-content">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input mt-0">
                                                                <input type="text" placeholder="Name on card">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <select name="bil-country" id="payment-info-type">
                                                                    <option value="select">Card type</option>
                                                                    <option value="card-1">Card type 1</option>
                                                                    <option value="card-2">Card type 2</option>
                                                                    <option value="card-3">Card type 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Credit Card Number*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Month</option>
                                                                    <option>Jan</option>
                                                                    <option>Feb</option>
                                                                    <option>Mar</option>
                                                                    <option>Apr</option>
                                                                    <option>May</option>
                                                                    <option>Jun</option>
                                                                    <option>Jul</option>
                                                                    <option>Aug</option>
                                                                    <option>Sep</option>
                                                                    <option>Oct</option>
                                                                    <option>Nov</option>
                                                                    <option>Dec</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Year</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Card verification number*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
@endsection
