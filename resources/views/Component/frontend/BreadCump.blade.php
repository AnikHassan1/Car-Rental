<section class="banner-section bg-light py-5 mt-5 shadow-lg">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text Content -->
            <div class="col-md-6">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="@yield('url')" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb-page')</li>
                    </ol>
                </nav>
                <h1 class="mt-4 text-success-emphasis">@yield('breadcrumb-title')</h1>
                <p class="lead">@yield('breadcrumb-message')</p>
            </div>
            <!-- Right Side: Banner Image -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('assets/images/car-right.png') }}" class="img-fluid rounded " alt="Banner Image">
            </div>
        </div>
    </div>
</section>

  
  

