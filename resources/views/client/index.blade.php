@extends('client.template.layout')
@section('content')


<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2018</h2>
                                <h1>NICE CHAIR</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/1.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2018</h2>
                                <h1>NICE CHAIR</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/2.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Sản phẩm đang đấu giá</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    @foreach ($product as $item)
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="{{ route('client.product.detail', ['id'=>$item->dg_id]) }}">
                                    <img src="{{asset($item->hasp_duongdan)}}" width="290" height="385" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info"></div>
                            <div class="fr__product__inner">
                                <h4><a href="{{ route('client.product.detail', ['id'=>$item->dg_id]) }}">{{ $item->sp_ten }}</a></h4>
                                @if($item->isAuction)
                                <ul class="fr__pro__prize">
                                    <li data-countdown="{{ $item->dg_thoigianketthuc}}"></li>
                                </ul>
                                @else
                                <p>Chưa đến thời gian đấu giá</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Bài viết</h2>
                    <p>Cập nhật kịp thời các thông tin nổi bật của sàn</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ht__blog__wrap clearfix">
                @foreach ($post as $item)
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src={{asset($item->bv_hinhanh)}} alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>{{ $item->bv_ngaytao }}</span>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
<!-- End Banner Area -->
@endsection
