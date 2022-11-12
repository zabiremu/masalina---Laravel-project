<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="@sweetalert2/theme-dark/dark.css">
    @stack('cssLink')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img
                        src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('home.slide') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Home Slide
                        </span>
                        </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title">About Page</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About Page Setup</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('about.multi') }}">About Multi Image Setup</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('about.All.image') }}">About All Multi Image</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Portfolio Page</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('portfolio') }}"> All Portfolio </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-apps"></i>
                        </span>
                        <span class="menu-title">Blog Page</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('blog.category') }}"> All BLog  Category </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('all.blog') }}">All Blog</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add.blog') }}">Add Blog</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth3" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-animation"></i>
                        </span>
                        <span class="menu-title">Add Service</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth3">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add.service') }}"> Add Service</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('service.show') }}"> All Service</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('show.contact') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-blur"></i>
                        </span>
                        <span class="menu-title">Contact</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('show.Footer') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-checkerboard"></i>
                        </span>
                        <span class="menu-title">Footer</span>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper mt-5">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle"
                                        src="{{ !empty(auth()->user()->profile_image) ? auth()->user()->image_url : asset('backend/assets/images/Placeholder_view_vector.svg.png')}}" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}
                                    </p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">

                                <div class="py-3 pl-3 text-center d-flex align-items-center justify-content-start">
                                    <i class="mdi mdi-account-box-outline"
                                        style="font-size:24px;line-height:16px;"></i>
                                    <a href="{{ route('admin.profile') }}"class="preview-subject mb-1 pl-1 text-white text-bold d-block"
                                        style="line-height:16px;">Profile</a>
                                </div>
                                <div class="py-3 pl-3 text-center d-flex align-items-center justify-content-start">
                                    <i class="mdi mdi-account-box-outline"
                                        style="font-size:24px;line-height:16px;"></i>
                                    <a href="{{ route('admin.password') }}"class="preview-subject mb-1 pl-1 text-white text-bold d-block"
                                        style="line-height:16px;">Change Password</a>
                                </div>
                                <div class="dropdown-divider"></div>

                                <div class="py-3 pl-3 text-center d-flex align-items-center justify-content-start">
                                    <i class="mdi mdi-logout text-danger d-block"
                                        style="font-size:24px;line-height:16px;"></i>
                                    <a href="{{ route('admin.logout') }}"class="preview-subject mb-1 pl-1 text-white text-bold d-block"
                                        style="line-height:16px;">Log Out</a>
                                </div>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @stack('jsLink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/settings.js') }}"></script>
    <script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    @stack('customJs')
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
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
</body>

</html>
