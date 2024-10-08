<section class="vh-100 mt-5">
    <div class="container card py-5 h-80 mt-5 shadow-lg">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-center h-100 ">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('assets/images/login.webp') }}" class="img-fluid shadow-lg rounded" alt="Sign Up Image">
                </div>
                <div class="col-md-4 col-lg-5 col-xl-4">
                    <h2 class="text-center mb-4"> Account Log In</h2>
                    <div class="form-outline mb-4">

                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" required>

                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                         <div class="d-flex justify-content-between pt-4">
                            <div class="form-check">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                <label class="form-check-label" for="customCheckbox1">
                                    Remember Me
                                </label>
                            </div>
                            <div>
                                <a href="{{ url('/forget') }}" class="login-link">Reset Password</a>
                            </div>
                         </div>
                        <button onclick="login()" class="btn btn-primary btn-lg btn-block mt-3">Sign In</button>
                    </div>
                    <h5>You are not a member? 
                        <a href="{{ url('/SignUp') }}" class="login-link">Sign Up </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    async function login(){
        let lemail=document.getElementById('email').value;
        let lpassword=document.getElementById('password').value;
     
        if(lemail.length === 0){
            errorToast('email Is Required');
        }else if(lpassword.length === 0){
            errorToast('Password Is Required');
        }else{
            
          let res =await axios.post('/login-User',{email:lemail,password:lpassword});
          if(res.status === 200 && res.data.url ==="/"){
           successToast(res.data.message);
           setTimeout(()=>{
            window.location.href='/';
           });
          }else if(res.status === 200 && res.data.url == 'user'){
            successToast(res.data.message);
            setTimeout(()=>{
                window.location.href='/';
               });
          }
          else{
            errorToast("Login Fail");
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
        color: #dc3545; /* Danger color */
        text-decoration: underline;
    }

    .login-link:hover {
        color: #c82333; /* Darker red on hover */
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