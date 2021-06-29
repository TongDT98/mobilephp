<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo bg-primary">
            <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse">
                        <stop stop-opacity=".25" offset="0"></stop>
                        <stop stop-opacity=".1" offset=".3"></stop>
                        <stop stop-opacity="0" offset=".9"></stop>
                    </linearGradient>
                    <linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient>
                    <linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a">
                    </linearGradient>
                </defs>
                <path style="fill: #fff;" transform="translate(-.1)"
                    d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z">
                </path>
                <path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z"
                    fill="url(#a)"></path>
                <path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z"
                    fill="url(#e)"></path>
                <path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z"
                    fill="url(#d)"></path>
            </svg>
        </span>
        <a href="/mobile/admin/Index.php"
            class="app-brand-text demo sidenav-text font-weight-normal ml-2">Eco-Mobile</a>
        <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>

    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item open active">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon ion ion-md-speedometer"></i>
                <div>Quản lý sản phẩm</div>
            </a>

            <ul class="sidenav-menu">
                <li class="sidenav-item active">
                    <a href="index.php?controller=sanpham&action=index" class="sidenav-link">
                        <div>Sản phẩm</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="index.php?controller=loaisanpham&action=index" class="sidenav-link">
                        <div>Loại sản phẩm </div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="index.php?controller=nhasanxuat&action=index" class="sidenav-link">
                        <div>Nhà sản xuất</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="index.php?controller=hedieuhanh&action=index" class="sidenav-link">
                        <div>Hệ điều hành</div>
                    </a>
                </li>

                <li class="sidenav-item">
                    <a href="index.php?controller=manhinh&action=index" class="sidenav-link">
                        <div>Màn hình</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="sidenav-item ">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon ion ion-md-speedometer"></i>
                <div>Quản lý hóa đơn</div>
            </a>

            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="index.php?controller=hoadon&action=index" class="sidenav-link">
                        <div>Hóa đơn</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- / ONLY_DEMO -->
        <li class="sidenav-item  ">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon ion ion-md-speedometer"></i>
                <div>Quản lý người dùng</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item ">
                    <a href="index.php?controller=nguoidung&action=index" class="sidenav-link">
                        <div>Người dùng</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>