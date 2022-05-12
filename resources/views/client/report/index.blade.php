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
    <!-- End Bradcaump area --><section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">Góp ýL</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            @if (Auth::guard('nguoidung')->check())
                            <form id="contact-form" action="{{ route('client.report.handle') }}" method="post">
                                @csrf
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="nd_ten" value="{{ Auth::guard('nguoidung')->user()->nd_hoten }}" readonly >
                                        <input type="email" name="nd_email" value="{{ Auth::guard('nguoidung')->user()->nd_email }}" readonly>
                                        <input type="email" name="nd_id" hidden value="{{ Auth::guard('nguoidung')->user()->nd_id }}" readonly>
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <select class="js-example-basic-single " name="ch_id" required>
                                        <option value="">Chọn tên cửa hàng</option>
                                        @foreach ($store as $item)
                                            <option value="{{ $item->ch_id }}">{{ $item->ch_ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="bc_noidung" placeholder="Nội dung góp ý"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">Gửi</button>
                                </div>
                            </form>
                            @else
                                <p>Vui lòng đăng nhập để thực hiện góp ý</p>
                            @endif

                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
