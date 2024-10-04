<section class="vh-100 mt-5">
    <div class="container card py-5 h-80 mt-5 shadow-lg">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('assets/images/sign up.jfif') }}" class="img-fluid rounded" alt="Sign Up Image">
                </div>
                <div class="col-md-4 col-lg-5 col-xl-4">
                    <h2 class="text-center mb-4">Create Account</h2>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control form-control-lg" placeholder="Your Name" required>

                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" required>

                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" required>

                        <button onclick="submit()" class="btn btn-primary btn-lg btn-block mt-3">Sign Up</button>
                    </div>
                    <h5>Already a member? 
                        <a href="{{ url('/login-page') }}" class="login-link">Login here</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    async function submit(){
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value;
        let password=document.getElementById('password').value;
        if(name.length === 0){
            errorToast('name Is Required');
        }else if(email.length === 0){
            errorToast('email Is Required');
        }else if(password.length === 0){
            errorToast(' Password Is Required');
        }else{
         let res = await axios.post('/SignUp-User',{name:name,password:password,email:email});
          if(res.status === 200 && res.data.status === 'success'){
            successToast(res.data.message);
            setTimeout(()=>{
                window.location.href ='/login-page';
            },1000);
           
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