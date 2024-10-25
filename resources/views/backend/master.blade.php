<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบขายสินค้า</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('header')
    <style>
        .datepicker {
            z-index: 1190 !important;
        }

        .modal-backdrop {
            width: 100% !important;
            height: 100% !important;
        }

        thead {
            background-color: #ddd;
        }
    </style>
</head>


<body class="hold-transition sidebar-mini layout-fixed text-sm sidebar-collapse target">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="card-outline">
                            <div class="card-body box-profile">
                                <div class="dropdown-divider"></div>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar  sidebar-dark-orange elevation-4">
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">ระบบขายสินค้า</span><br>
                <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
                <span class="brand-text font-weight-light">เป็นผู้ใช้ระบบ</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header text-success"><i class="fas fa-caret-down"></i>สินค้า</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }} {{ (request()->is('chicken/history/create')) ? 'active' : '' }} {{ (request()->is('')) ? 'active' : '' }}">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    สินค้า
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ (request()->is('dashboard')) ? 'block' : '' }};">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รายการสินค้า</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header text-success"><i class="fas fa-caret-down"></i>รายงานการขาย</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link {{ (request()->is('report_sale')) ? 'active' : '' }} {{ (request()->is('chicken/history/create')) ? 'active' : '' }} {{ (request()->is('')) ? 'active' : '' }}">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    รายงานการขาย
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: {{ (request()->is('report_sale')) ? 'block' : '' }};">
                                <li class="nav-item">
                                    <a href="/report_sale" class="nav-link {{ (request()->is('report_sale')) ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รายการสินค้า</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>
    <!-- <script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script> -->
    <script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3//plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    @yield('footer')
    <script>
        $('form').submit(function(e) {
            if ($(this).hasClass('form-submitted')) {
                e.preventDefault();
                alert('กรุณารอสักครู่ (Please wait)')

                $(this).removeClass('form-submitted');
                return;
            }
            $(this).addClass('form-submitted');
        });
    </script>
</body>


</html>