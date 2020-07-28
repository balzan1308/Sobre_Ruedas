<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sobre Ruedas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
           

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="{{ asset ('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">System Team</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                @else
                                {{ Auth::user()->name }}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>

                            

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/settings.png"/>
                                    <p>Settings<i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        
                                     <li class="nav-item">
                                         <a href="{{url('/users')}}"
                                                class="{{ Request::path() === 'users' ? 'nav-link active' : 'nav-link' }}">
                                                <img src="https://img.icons8.com/windows/32/000000/users-settings.png"/>
                                             <p>
                                                 Users
                                                 <?php use App\User; $users_count = User::all()->count(); ?>
                                                 <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                             </p>
                                        </a>
                                     </li>
                                    </li>
                                   
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        
                                     <li class="nav-item">
                                         <a href="{{url ('product')}}"
                                                class="{{ Request::path() === 'products' ? 'nav-link active' : 'nav-link' }}">
                                                <img src="https://img.icons8.com/material-outlined/24/000000/product.png"/>
                                             <p>
                                                 Products
                                                 <?php use App\Product; $products_count = product::all()->count(); ?>
                                                 <span class="right badge badge-danger">{{ $products_count ?? '0' }}</span>
                                             </p>
                                        </a>
                                     </li>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <img src="https://img.icons8.com/ios/50/000000/dirt-bike.png"/>
                                    <p>Products<i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        
                                     <li class="nav-item">
                                         <a href="{{route ('products/indexClient')}}"
                                                class="{{ Request::path() === 'products' ? 'nav-link active' : 'nav-link' }}">
                                                <img src="https://img.icons8.com/material-outlined/24/000000/product.png"/>
                                             <p> All Products</p>
                                             
                                        </a>
                                     </li>
                                    </li>
                                   
                                </ul>
                            </li>
                            

                        </ul>
                        
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>Sobre Ruedas
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
</body>

</html>
