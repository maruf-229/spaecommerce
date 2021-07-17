<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/plugins/toaster/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-sweetalert/dist/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
    <div id="app">
        <!-- Authentication Links -->
                        @guest
                        @else
                            <div class="hold-transition sidebar-mini layout-fixed">
                                <div class="wrapper">
                                    <!-- Navbar -->
                                    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                                        <!-- Left navbar links -->
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                                            </li>
                                        </ul>

                                        <!-- Right navbar links -->
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Messages Dropdown Menu -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" data-toggle="dropdown" href="#">
                                                    <i class="far fa-comments"></i>
                                                    <span class="badge badge-danger navbar-badge">3</span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">
                                                        <!-- Message Start -->
                                                        <div class="media">
                                                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                                            <div class="media-body">
                                                                <h3 class="dropdown-item-title">
                                                                    Brad Diesel
                                                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                                                </h3>
                                                                <p class="text-sm">Call me whenever you can...</p>
                                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                                            </div>
                                                        </div>
                                                        <!-- Message End -->
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <!-- Message Start -->
                                                        <div class="media">
                                                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                                            <div class="media-body">
                                                                <h3 class="dropdown-item-title">
                                                                    John Pierce
                                                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                                                </h3>
                                                                <p class="text-sm">I got your message bro</p>
                                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                                            </div>
                                                        </div>
                                                        <!-- Message End -->
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <!-- Message Start -->
                                                        <div class="media">
                                                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                                            <div class="media-body">
                                                                <h3 class="dropdown-item-title">
                                                                    Nora Silvester
                                                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                                                </h3>
                                                                <p class="text-sm">The subject goes here</p>
                                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                                            </div>
                                                        </div>
                                                        <!-- Message End -->
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                                                </div>
                                            </li>
                                            <!-- Notifications Dropdown Menu -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" data-toggle="dropdown" href="#">
                                                    <i class="far fa-bell"></i>
                                                    <span class="badge badge-warning navbar-badge">15</span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                                                        <span class="float-right text-muted text-sm">3 mins</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="fas fa-users mr-2"></i> 8 friend requests
                                                        <span class="float-right text-muted text-sm">12 hours</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="fas fa-file mr-2"></i> 3 new reports
                                                        <span class="float-right text-muted text-sm">2 days</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                                                    <i class="fas fa-th-large"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /.navbar -->

                                    <!-- Main Sidebar Container -->
                                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                                        <!-- Brand Logo -->
                                        <a href="{{ route('admin.dashboard') }}" class="brand-link">
                                            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                            <span class="brand-text font-weight-light">Maruf Hossain</span>
                                        </a>

                                        <!-- Sidebar -->
                                        <div class="sidebar">
                                            <!-- Sidebar user panel (optional) -->
                                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                                <div class="image">
                                                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                                                </div>
                                                <div class="info">
                                                    <a href="{{ route('admin.dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
                                                </div>
                                            </div>

                                            <!-- Sidebar Menu -->
                                            <nav class="mt-2">
                                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                    <!-- Add icons to the links using the .nav-icon class
                                           with font-awesome or any other icon font library -->
                                                    <li class="nav-item has-treeview menu-open">
                                                        <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                                            <p>
                                                                Dashboard
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('products') }}" class="nav-link">
                                                            <i class="nav-icon fas fa-th"></i>
                                                            <p>
                                                                Products
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('category') }}" class="nav-link">
                                                            <i class="nav-icon fas fa-th"></i>
                                                            <p>
                                                                Category
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('subcategory') }}" class="nav-link">
                                                            <i class="nav-icon fas fa-th"></i>
                                                            <p>
                                                                Sub Category
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('brands') }}" class="nav-link">
                                                            <i class="nav-icon fas fa-th"></i>
                                                            <p>
                                                                Brand
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-header">LABELS</li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('admin.logout') }}" class="nav-link">
                                                            <i class="nav-icon far fa-circle text-danger"></i>
                                                            <p class="text">Logout</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="nav-icon far fa-circle text-warning"></i>
                                                            <p>Warning</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="nav-icon far fa-circle text-info"></i>
                                                            <p>Informational</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!-- /.sidebar-menu -->
                                        </div>
                                        <!-- /.sidebar -->
                                    </aside>
                                </div>
                            </div>
                        @endguest

        <main class="py-4">
            @yield('admin_content')
        </main>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>

    <script  src="{{ asset('assets/plugins/toaster/toastr.min.js')}}"></script>
    <script  src="{{ asset('assets/plugins/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
        @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    <script>
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                },
                function(isConfirm) {
                    if (isConfirm) {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        window.location.href = link;
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        });
    </script>
</body>
</html>
