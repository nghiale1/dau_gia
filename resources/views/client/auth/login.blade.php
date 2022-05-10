@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Đăng nhập</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row bilinfo">
                <div class="row">
                    <div class="col-md-3"></div>
                    <form action="{{ route('login.handle') }}">
                        @csrf
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="single-input">
                                    <input type="text" name="username" placeholder="Tên đăng nhập">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <input type="password" name="password" placeholder="Mật khẩu">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input dark-btn">
                                    <button type="submit" class="fv-btn">Đăng nhập</button>
                                    <a href="{{ route('register.view') }}" class="fv-btn">Đăng ký</a>
                                </div>
                                <a href="{{ route('forget.pass') }}">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
@endsection
