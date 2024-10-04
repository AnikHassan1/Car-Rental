<div class="container contact-section mt-5">
    <div class="row shadow-lg rounded mb-4">
        <div class="col-lg-6 text-center pt-2">
            <h4>Let’s Tolk About <br> Everything !</h4>
            <p>it’s a specific topic, a car rental,  let’s dive in. </p>
    
           <img class="img-fluid h-auto w-80 shadow-lg rounded" src="{{ asset('assets/images/contact-Img.jpg') }}" alt="contact_img">
            {{--  <h4>Follow Us</h4>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="btn btn-outline-primary">Facebook</a></li>
                <li class="list-inline-item"><a href="#" class="btn btn-outline-info">Twitter</a></li>
                <li class="list-inline-item"><a href="#" class="btn btn-outline-danger">Instagram</a></li>
            </ul>  --}}
        </div>
        <div class="col-lg-6 pt-4">
          
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Number</label>
                    <input type="text" class="form-control" id="number" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button onclick="submitContact()" type="submit" class="btn btn-primary">Send Message</button>
           
        </div>
      
    </div>
</div>

<script>
async function submitContact(){
    let name =document.getElementById('name').value;
    let email =document.getElementById('email').value;
    let number =document.getElementById('number').value;
    let message =document.getElementById('message').value;
   // console.log(name);
    if(name.length === 0){
        errorToast("name is Required");
    }else if(email.length === 0){
        errorToast("email is Required");
    }
    else if(number.length === 0){
        errorToast("number is Required");
    }
    else if(message.length === 0){
        errorToast("message is Required");
    }else{
    let res = await axios.post('/contact',{name:name,email:email,number:number,message:message});
    console.log(res);
    if(res.status === 200 && res.data.status === 'success'){
        successToast(res.data.message);
        setTimeout(()=>{
           window.location.href='/homePage';
        },1000);
    }else{
        errorToast(res.data.message);
    }
}

}
</script>