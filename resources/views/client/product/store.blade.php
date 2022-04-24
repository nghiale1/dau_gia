@extends('client.template.layout')
@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
        style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Trang chủ</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <a class="breadcrumb-item" href="product-grid.html">Cửa hàng</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                {{-- vn_str_filter("Xin chào tôi tên là Đức") --}}
                                <span class="breadcrumb-item active">{{ $storeInfo->ch_ten }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details Area -->
    <section class="htc__product__details bg__white ptb--100">
        <!-- Start Product Details Top -->
        <div class="htc__product__details__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="htc__product__details__tab__content">
                            <!-- Start Product Big Images -->
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                        <img src="{{ asset('client/images/product-2/big-img/1.jpg') }}" alt="full-image">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Big Images -->
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="ht__product__dtl">
                            <h2>{{ $storeInfo->ch_ten }}</h2>
                            <h6>Sản phẩm: {{ count($product) }}</span></h6>
                            <h6>Tỉ bán hàng bán được: {{ count($product) }}</span></h6>
                            <h6>Thông tin cửa hàng</span></h6>
                            <p class="pro__info">{{ $storeInfo->ch_thongtin }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Details Top -->
    </section>
    <!-- End Product Details Area -->
    <!-- Start Product Description -->
    <section class="htc__produc__decription bg__white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Start List And Grid View -->
                    <ul class="pro__details__tab" role="tablist">
                        <li role="presentation" class="all active"><a href="#all" role="tab"
                                data-toggle="tab">Tất cả sản phẩm</a></li>
                        @foreach ($category as $item)
                            <li role="presentation" class="{{ $item->dm_id }}"><a href="#{{ $item->dm_id }}" role="tab"
                                data-toggle="tab">{{ $item->dm_ten }}</a></li>
                        @endforeach
                    </ul>
                    <!-- End List And Grid View -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="ht__pro__details__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="all" class="pro__single__content tab-pane fade in active">
                            <div class="pro__tab__content__inner">
                                <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight
                                    but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s
                                    label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued
                                    bodysuits.</p>
                                <h4 class="ht__pro__title">Description</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                    odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                    nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                    doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                    est usus legentis in iis qui facit eorum claritatem</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor
                                    in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                                    nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                                    luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                <h4 class="ht__pro__title">Standard Featured</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                    odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                    nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                    doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                    est usus legentis in</p>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        @foreach ($category as $item)
                        <div role="tabpanel" id="{{ $item->dm_id }}" class="pro__single__content tab-pane fade">
                            <div class="pro__tab__content__inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="htc__product__leftsidebar">
                                                <div class="htc__category">
                                                    <h4 class="title__line--4">Loại sản phẩm</h4>
                                                    <ul class="ht__cat__list" role="tablist">
                                                        <!-- TODO: chia theo product type, set lại cái href theo id của product type-->
                                                        @foreach ($productType as $item => $value)
                                                            <li role="presentation" class="grid-view {{ $item == 0 ? "active" : "" }}"><a href="#{{ vn_str_filter($value->lsp_ten) }}" role="tab" data-toggle="tab">{{ $value->lsp_ten }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="htc__product__rightidebar">
                                                <div class="htc__grid__top">
                                                    {{-- <div class="ht__pro__qun">
                                                        <span>Showing 1-12 of 1033 products</span>
                                                    </div> --}}
                                                    {{--<ul class="view__mode" role="tablist">
                                                        <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                                        <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                                    </ul> --}}
                                                </div>
                                                <div class="row">
                                                    <div class="shop__grid__view__wrap">
                                                        @foreach ($productType as $item => $value)
                                                            <div role="tabpanel" id="{{ vn_str_filter($value->lsp_ten) }}" class="single-grid-view tab-pane fade {{ $item == 0 ? "in active" : "" }} clearfix">
                                                               @php $productByType = DB::table('sanpham')->join('hinhanhsanpham','hinhanhsanpham.sp_id','sanpham.sp_id')->where('hasp_anhdaidien',1)->where('lsp_id', $value->lsp_id)->get(); @endphp
                                                               @foreach ($productByType as $item)
                                                                    <!-- Start Single Product -->
                                                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                                                        <div class="category">
                                                                            <div class="ht__cat__thumb">
                                                                                <a href="{{ route('client.product.detail', ['id'=>$item->sp_id]) }}">
                                                                                    <img src="{{ asset($item->hasp_duongdan) }}" alt="product images">
                                                                                </a>
                                                                            </div>
                                                                            <div class="fr__product__inner">
                                                                                <h4><a href="{{ route('client.product.detail', ['id'=>$item->sp_id]) }}">{{ $item->sp_ten }}</a></h4>
                                                                                <ul class="fr__pro__prize">
                                                                                    <li class="old__prize">{{ number_format($item->sp_gia) }}</li>
                                                                                    {{-- <li>$25.9</li> --}}
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Single Product -->
                                                               @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- End Product View -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Description -->
    <!-- Start Product Area -->
    {{-- <section class="htc__product__area--2 pb--100 product-details-res">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">New Arrivals</h2>
                        <p>But I must explain to you how all this mistaken idea</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Product -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html">Product Title Here </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html">Product Title Here </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/3.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html">Product Title Here </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/4.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html">Product Title Here </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area -->
    <!-- Start Banner Area -->
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
    </div> --}}
    <!-- End Banner Area -->
    <!-- End Banner Area -->
@endsection
