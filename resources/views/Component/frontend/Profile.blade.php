@extends('layout.app')
@section('content')
@section('title','profile-update')


<section class="vh-100 mt-5">
    <div class="container card py-5 h-80 mt-5 shadow-lg">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-center h-100 ">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('assets/images/login.webp') }}" class="img-fluid shadow-lg rounded" alt="Sign Up Image">
                </div>
                <div class="col-md-4 col-lg-5 col-xl-4">
                    <h2 class="text-center mb-4"> Profile Update </h2>
                    <div class="form-outline mb-4">

                        <label class-"form-label">Name</label>
                        <input type="text" id="name" class="form-control form-control-lg" placeholder="name" readonly>

                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" readonly>

                        <label class="form-label" for="Number">Number</label>
                        <input type="text" id="Number" class="form-control form-control-lg" placeholder="Number" required>
                        
                        <label class="form-label" for="address">Address</label>
                        <input type="text" id="address" class="form-control form-control-lg" placeholder="address" required>

                        <button onclick="updateProfile()" class="btn btn-primary btn-lg btn-block mt-3">Update </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    userById();
    async function userById(){
        let res   =await axios.get('/userId');
       // console.log(res);
       document.getElementById('name').value = res.data.name;
       document.getElementById('email').value= res.data.email;


    }
    async function updateProfile(){
        let name  =document.getElementById('name').value;
        let email =document.getElementById('email').value;
        let number =document.getElementById('Number').value;
        let Address =document.getElementById('address').value;

        if(number.length === 0){
            errorToast('number Is Required');
        }else if(Address.length === 0){
            errorToast('Address Is Required');
        }else{
            let res =await axios.post('/profile-update',{number:number,address:Address});
            if(res.status === 200 && res.data.status ==='success'){
                successToast(res.data.message);
                setTimeout(()=>{
                    window.location.href='/';
                },1000);
            }
        }
    }
    getPeofile()
  async function getPeofile(){
    let res   =await axios.get('/profile-get');
     console.log(res);
    document.getElementById('name').value = res.data.user.name;
    document.getElementById('email').value= res.data.user.email;
    document.getElementById('Number').value = res.data.number;
    document.getElementById('address').value = res.data.address
  }
</script>












@endsection