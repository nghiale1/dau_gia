@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
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
                                    <img src="images/product-2/big-img/1.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                    <img src="images/product-2/big-img/2.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                    <img src="images/product-2/big-img/3.jpg" alt="full-image">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="images/product-2/sm-img-3/3.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="images/product-2/sm-img-3/1.jpg" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="images/product-2/sm-img-3/2.jpg" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <h2>jean shirt to sassy girl</h2>
                        <h6>Model: <span>MNG001</span></h6>
                        <ul  class="pro__prize">
                            <li class="old__prize">Thời gian còn lại: </li>
                            <li data-countdown="{{ $detail->dg_thoigianketthuc}}"></li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Giá khởi điểm: </li>
                            <li>{{ number_format($detail->dg_giakhoidiem) }}</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Giá cao nhất: </li>
                            <li id="maxPrice">{{ number_format($maxPrice->ctdg_giatien) }}</li>
                        </ul>



                        {{-- <p class="pro__info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p> --}}
                        <div class="ht__pro__desc">
                            <div class="sin__desc">
                                <p><span>Availability:</span> In Stock</p>
                            </div>
                            <div class="sin__desc align--left">
                                <form action="{{ route('client.product.audit') }}" method="GET">

                                    <input type="number" name="auditPrice">
                                    <input type="text" name="auditId" value="{{ $detail->dg_id }}">
                                    <input type="text" name="userId" value="{{ Auth::guard('nguoidung')->id() }}">
                                    <div class="pro__more__btn">
                                        <button>Đấu giá</button>
                                    </div>
                                </form>
                                {{-- <p><span>color:</span></p>
                                <ul class="pro__color">
                                    <li class="red"><a href="#">red</a></li>
                                    <li class="green"><a href="#">green</a></li>
                                    <li class="balck"><a href="#">balck</a></li>
                                </ul> --}}

                            </div>
                            {{-- <div class="sin__desc align--left">
                                <p><span>size</span></p>
                                <select class="select__size">
                                    <option>s</option>
                                    <option>l</option>
                                    <option>xs</option>
                                    <option>xl</option>
                                    <option>m</option>
                                    <option>s</option>
                                </select>
                            </div>
                            <div class="sin__desc align--left">
                                <p><span>Categories:</span></p>
                                <ul class="pro__cat__list">
                                    <li><a href="#">Fashion,</a></li>
                                    <li><a href="#">Accessories,</a></li>
                                    <li><a href="#">Women,</a></li>
                                    <li><a href="#">Men,</a></li>
                                    <li><a href="#">Kid,</a></li>
                                    <li><a href="#">Mobile,</a></li>
                                    <li><a href="#">Computer,</a></li>
                                    <li><a href="#">Hair,</a></li>
                                    <li><a href="#">Clothing,</a></li>
                                </ul>
                            </div>
                            <div class="sin__desc align--left">
                                <p><span>Product tags:</span></p>
                                <ul class="pro__cat__list">
                                    <li><a href="#">Fashion,</a></li>
                                    <li><a href="#">Accessories,</a></li>
                                    <li><a href="#">Women,</a></li>
                                    <li><a href="#">Men,</a></li>
                                    <li><a href="#">Kid,</a></li>
                                </ul>
                            </div>

                            <div class="sin__desc product__share__link">
                                <p><span>Share this:</span></p>
                                <ul class="pro__share">
                                    <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
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
                    <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
                    <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">review</a></li>
                    <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">shipping</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ht__pro__details__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                        <div class="pro__tab__content__inner">
                            <table class="table table-light" id="auditDetail">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Thời gian</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audit as $item)
                                    <tr class="item-audit">
                                        <td>{{ $item->ctdg_thoigian }}</td>
                                        <td>{{ number_format($item->ctdg_giatien) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Description -->
<!-- End Blog Area -->
<!-- End Banner Area -->
@push('audit-pusher')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    var mainTable = $('#auditDetail');
    var detailTable = mainTable.find('tbody');
    var maxPrice = $('#maxPrice');
    //Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
    var pusher = new Pusher('93855d1d3bab4b932281', {
        encrypted: true,
        cluster: "ap1"
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('audit');


    // Bind a function to a Event (the full Laravel class)
    channel.bind('audit-action', function(data) {
        console.log(data);
        var newRecord = `
            <tr class="item-audit">
                <td>`+ data.auditTime +`</td>
                <td>`+ data.auditPrice +`</td>
            </tr>
        `;
        detailTable.prepend(newRecord);
        maxPrice.html(data.maxPrice);
    });
</script>
@endpush
@endsection
