<section class="vh-100 mt-5">
    <div class="container card py-5 h-80 mt-5 shadow-lg">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('images/logout.jpg') }}" class="img-fluid rounded" alt="Log Out Image">
                </div>
                <div class="col-md-4 col-lg-5 col-xl-4">
                    <h2 class="text-center mb-4">Log Out</h2>
                    <p class="text-center mb-4">Are you sure you want to log out?</p>
                    <div class="d-flex justify-content-center">
                        <button onclick="logout()" class="btn btn-danger btn-lg btn-block mt-3">Log Out</button>
                    </div>
                    <h5 class="mt-4">Want to stay logged in? 
                        <a href="{{ url('/homePage') }}" class="login-link">Cancel</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

//<script>
//    async function logout(){
//        try {
//            let res = await axios.post('/logout-User');
//            if (res.status === 200) {
//                successToast(res.data.message);
//                setTimeout(() => {
//                    window.location.href = '/';
//                }, 2000);
//            } else {
//                errorToast("Logout Failed");
//            }
//        } catch (error) {
//            errorToast("Logout Failed");
//        }
//    }
//</script>

<style>
    body {
        background-color: #f8f9fa;
    }

    .vh-100 {
        background: url('https://example.com/your-background-image.jpg') no-repeat center center fixed; /* Background Image */
        background-size: cover;
    }

    .card {
        border-radius: 15px;
        opacity: 0.95; /* Slightly transparent card */
    }

    .btn-danger {
        border-radius: 10px;
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .login-link {
        color: #007bff; /* Bootstrap primary color */
        text-decoration: underline;
    }

    .login-link:hover {
        color: #0056b3; /* Darker blue on hover */
    }

    h5 {
        text-align: center;
    }

    @media (max-width: 768px) {
        .vh-100 {
            padding: 20px;
        }
    }
</style>
