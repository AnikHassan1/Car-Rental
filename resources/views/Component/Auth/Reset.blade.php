<section class="vh-100 mt-5">
    <div class="container card py-5 h-80 mt-5 shadow-lg">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-7">
                    <img src="{{ asset('assets/images/forget.jpeg') }}" class="img-fluid shadow-lg rounded" alt="Forget Password Image">
                </div>
                <div class="col-md-4 col-lg-5 col-xl-5">
                    <h2 class="text-center mb-4">Forgot Password</h2>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="oldPassword">Old Password</label>  
                        <input type="text" id="oldPassword" class="form-control form-control-lg" placeholder="Old Password" required>
                    
                        <label class="form-label" for="newPassword">New Password</label>
                        <input type="text" id="newPassword" class="form-control form-control-lg" placeholder="new Password" required>
                    
                        <label class="form-label" for="rePassword">Return Password</label>
                        <input type="text" id="rePassword" class="form-control form-control-lg" placeholder="Return Password" required>
                    
                    </div>
                    <button onclick="ResetPassword()" class="btn btn-primary btn-lg btn-block mt-3"> Reset Password</button>
                    <h5 class="mt-4">Remember your password? 
                        <a href="{{ url('/login-page') }}" class="login-link">Log In</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    async function ResetPassword() {
        let oldPassword = document.getElementById('oldPassword').value;
        let newPassword = document.getElementById('newPassword').value;
        let rePassword = document.getElementById('rePassword').value;
        
        if (oldPassword.length === 0) {
            errorToast('old Password is required');
        }else if(newPassword.length === 0){
            errorToast('new Password is required');
        }else if(rePassword.length === 0){
            errorToast('Return Password is required');
        }else if(  newPassword != rePassword){
            errorToast(' Password does not match');
        }else{
            try {
                let res = await axios.post('/reset-Password', { oldpassword: oldPassword, newPassword:newPassword});
                if (res.status === 200) {
                    successToast(res.data.message);
                    setTimeout(() => {
                        window.location.href = '/login-page';
                    }, 2000);
                } else {
                    errorToast("Failed to send reset link");
                }
            } catch (error) {
                errorToast("An error occurred");
            }
        }

        
    }
</script>

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

    .form-outline label {
        font-weight: 500;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-primary {
        border-radius: 10px;
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
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
