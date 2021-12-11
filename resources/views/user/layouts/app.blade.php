<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('admin/frontend/template/assets/images/favicon.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{url('admin/frontend/template/assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/frontend/template/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{url('admin/frontend/template/assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{url('admin/frontend/template/assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('admin/frontend/template/html/css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{url('admin/frontend/template/html/css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('admin/frontend/template/html/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Mini Project</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            {{-- Navbar --}}
                @include('user.includes.navbar')
            {{-- End navbar --}}
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                {{-- Side bar --}}
                    @include('user.includes.sidebar')
                {{-- End Side bar --}}
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                {{-- Content --}}
                    @yield('content')
                {{-- End Content --}}
            </div>
            <footer class="footer"> © 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
        </div>
    </div>
    <script src="{{url('admin/frontend/template/assets/node_modules/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{url('admin/frontend/template/assets/node_modules/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('admin/frontend/template/html/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('admin/frontend/template/html/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('admin/frontend/template/html/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('admin/frontend/template/html/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{url('admin/frontend/template/assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{url('admin/frontend/template/assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{url('admin/frontend/template/assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{url('admin/frontend/template/assets/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{url('admin/frontend/template/html/js/dashboard1.js')}}"></script>
</body>

</html>