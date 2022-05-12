@extends('client.template.layout')
@section('content')
    <div class="body__overlay"></div>
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
                                <span class="breadcrumb-item active">Sản phẩm</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Grid -->
    <section class="htc__product__grid bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="htc__product__rightidebar">
                        <div class="htc__grid__top">
                            <div class="htc__select__option">
                                <select class="ht__select">
                                    <option value="">Trạng thái</option>
                                    <option value="1">Đang đấu giá</option>
                                    <option value="3">Đã kết thúc</option>
                                </select>

                            </div>
                            <div class="ht__pro__qun">
                                Thời gian bắt đầu
                                <input type="date" name="" class="" id="">
                                Thời gian kết thúc
                                <input type="date" name="" class="" id="">
                            </div>
                            <!-- Start List And Grid View -->
                            <ul class="view__mode" role="tablist">
                                <button type="submit" class="fv-btn">Lọc</button>
                            </ul>
                            <!-- End List And Grid View -->
                        </div>
                        <!-- Start Product View -->
                        <div class="row">
                            <div class="shop__grid__view__wrap">
                                <div role="tabpanel" id="grid-view"
                                    class="single-grid-view tab-pane fade in active clearfix">
                                    @foreach ($product as $item)

                                    <!-- Start Single Product -->
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                        <div class="category">
                                            <div class="ht__cat__thumb">
                                                <a href="{{ route('client.product.detail', ['id'=>$item->dg_id]) }}">
                                                    <img src="{{asset($item->hasp_duongdan)}}" width="290" height="385" alt="product images">
                                                </a>
                                            </div>
                                            <div class="fr__hover__info">
                                            </div>
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
                                    <!-- End Single Product -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End Product View -->
                    </div>
                    <!-- Start Pagenation -->
                    <div class="row">
                        {{-- <div class="col-xs-12">
                            <ul class="htc__pagenation">
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">19</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <!-- End Pagenation -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Grid -->
@endsection
