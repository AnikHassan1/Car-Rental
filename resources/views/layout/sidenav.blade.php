<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rentals Admin || @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/toastify.min.css')}}" rel="stylesheet" />


    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>


    <script src="{{asset('assets/js/toastify-js.js')}}"></script>
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</head>
<body>
   

    <nav class="navbar fixed-top px-0 mb-5 shadow-lg bg-light">
        <div class="container-fluid">
            <!-- Brand and Menu Button -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                    <img class="nav-logo-sm mx-2" src="{{asset('assets/images/menu.svg')}}" alt="Menu" style="cursor: pointer;" />
                </span>
                <img class="nav-logo mx-2" src="{{asset('assets/images/logo.png')}}" alt="Logo" />
            </a>
    
            <!-- User Dropdown Menu -->
            <div class="ml-auto h-auto d-flex align-items-center">
                <div class="dropdown">
                    <a href="#" class=" align-items-center text-dark text-decoration-none " id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle me-2" src="{{asset('assets/images/user.webp')}}" alt="User" style="width: 40px; height: 40px;">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-center shadow-lg border-0" aria-labelledby="userDropdown" style="min-width: 200px;">
                            
                        <li>
                            <a class="dropdown-item text-danger" href="{{url('/userLogOut')}}">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div id="sideNav" class="mt-5 side-nav-open shadow-lg bg-light p-3 vh-100 shadow-lg">

        <a href="{{url('/dashboard')}}" class="side-bar-item mt-5">
            <i class="bi bi-graph-up"></i>
            <span class="side-bar-item-caption">Dashboard</span>
        </a>
    
        <a href="{{url('/customerPages')}}" class="side-bar-item">
            <i class="bi bi-people"></i>
            <span class="side-bar-item-caption">Customer</span>
        </a>
    
        <a href="{{url('/carPage')}}" class="side-bar-item">
            <i class="bi bi-ev-front"></i>
            <span class="side-bar-item-caption">Car</span>
        </a>
    
        <a href="{{url('/rentalsPages')}}" class="side-bar-item">
            <i class="bi bi-ev-front-fill"></i>
            <span class="side-bar-item-caption">Rentals</span>
        </a>
 
    </div>
    <div id="content" class="content">
        @yield('content')
    </div>

    <script>
        function MenuBarClickHandler() {
            let sideNav = document.getElementById('sideNav');
            let content = document.getElementById('content');
            if (sideNav.classList.contains("side-nav-open")) {
                sideNav.classList.add("side-nav-close");
                sideNav.classList.remove("side-nav-open");
                content.classList.add("content-expand");
                content.classList.remove("content");
            } else {
                sideNav.classList.remove("side-nav-close");
                sideNav.classList.add("side-nav-open");
                content.classList.remove("content-expand");
                content.classList.add("content");
            }
        }
    </script>
</body>
</html>