<!-- Start Header Style -->
<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <div class="logo">
                             <a href="index.html"><img src={{asset("client/images/logo/4.png")}} alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-7 col-xs-7">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{route("client.index")}}">Trang chủ</a></li>
                                <li class="drop"><a href="#">Cuộc đấu giá</a></li>
                                <li class="drop"><a href="{{route("post.list")}}">Tin tức</a></li>
                                <li class="drop"><a href="#">Giới thiệu</a></li>
                                <li class="drop"><a href="#">Liên hệ & Góp ý</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <div class="header__account">
                                @if (Auth::guard('nguoidung')->check())
                                <p>Xin chào, <a href="{{ route('user.info') }}">{{ Auth::guard('nguoidung')->user()->nd_hoten }}</a></p>
                                @else
                                <a href="{{ route('login.view') }}"><i class="icon-user icons"></i></a>
                                @endif
                            </div>
                            <div class="htc__shopping__cart">
                                @if (Auth::guard('nguoidung')->check())
                                <p><a href="{{ route('logout') }}" style="color: red;">Đăng xuất</a></p>
                                @endif
                            </div>
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
