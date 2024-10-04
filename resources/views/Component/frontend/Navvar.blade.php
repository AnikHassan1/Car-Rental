<nav class="navbar navbar-expand-lg fixed-top px-0 mb-5 shadow-lg bg-light">
    <div class="container-fluid">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img class="nav-logo mx-2" src="{{ asset('assets/images/logo (1).svg') }}" alt="Logo" />
        </a>

        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img class="navbar-toggler-icon" src="{{ asset('assets/images/menu.svg') }}" alt="Logo" />
        </button>

        <!-- Nav List Items (Responsive) -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/homePage') }}">Home</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rentals') }}">Rentals</a>
                </li>
           
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login-page') }}">Log out</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login-page') }}">Sign In</a>
                </li>
               

            </ul>
         
                <!-- User Dropdown Menu -->
                <div class="ml-auto h-auto d-flex align-items-center float-end">
                    <div class="dropdown">
                        <a href="#" class="align-items-center text-dark text-decoration-none"
                            id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle me-2" src="{{ asset('assets/images/user.webp') }}"
                                alt="User" style="width: 40px; height: 40px;">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-center shadow-lg border-0"
                            aria-labelledby="userDropdown" style="min-width: 200px;">
                            <li>
                                <div class="py-3">
                                    <img class="rounded-circle mb-2" src="{{ asset('images/user.webp') }}"
                                        alt="User" style="width: 60px; height: 60px;">
                                    <h6 class="mb-0">User Name</h6>
                                </div>
                                <hr class="dropdown-divider mx-2" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/ProfilePage') }}">
                                    <i class="bi bi-person-fill me-2"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ url('/userLogOut') }}">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
             
        </div>
    </div>
</nav>