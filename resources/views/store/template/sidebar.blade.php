<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('store.detail') }}" class="brand-link">
        <img src={{asset("admin/img/AdminLTELogo.png")}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Audit Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{asset("admin/img/user2-160x160.jpg")}} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('nguoidung')->user()->nd_hoten}}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link
                        @if (Request::segment(1) == 'san-pham')
                            active
                        @endif
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('type.index') }}" class="nav-link
                        @if (Request::segment(1) == 'loai-san-pham')
                            active
                        @endif
                        ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Loại sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link
                        @if (Request::segment(1) == 'danh-muc')
                            active
                        @endif
                        ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Danh mục
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('order.getList') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thông tin cửa hàng
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brand.index') }}" class="nav-link
                        @if (Request::segment(1) == 'thuong-hieu')
                            active
                        @endif
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thương hiệu
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thống kê
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('stat.revenue')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doanh thu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.product')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản phẩm bán được</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.order')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.user')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Người dùng đăng ký</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.store')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top cửa hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
