<!-- Start Header Style -->
<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                             <a href="index.html"><img src={{asset("client/images/logo/4.png")}} alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-sm-4 col-xs-2">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{route("client.index")}}">Trang chủ</a></li>
                                <li class="drop"><a href="{{route('client.search')}}">Cuộc đấu giá</a></li>
                                <li class="drop"><a href="{{route("post.list")}}">Tin tức</a></li>
                                <li class="drop"><a href="#">Giới thiệu</a></li>
                                <li class="drop"><a href="#">Liên hệ & Góp ý</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-5 col-xs-5">
                        <div class="header__right">
                            <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                            </div>
                            @if (Auth::guard('nguoidung')->check())
                            <div class="header__account">
                                <a href="{{ route('user.info') }}"><i class="icon-user icons"></i></a>
                            </div>
                            @else
                            <div class="header__account">
                                <a href="{{ route('login.view') }}"><i class="icon-user icons"></i></a>
                            </div>
                            @endif
                            @if (Auth::guard('nguoidung')->check())
                            <div class="htc__shopping__cart">
                                <a href="{{ route('logout') }}">Đăng xuất</a>
                            </div>
                            @else
                                <a href="{{ route('login.view') }}">Đăng nhập</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Area -->
