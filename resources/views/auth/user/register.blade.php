@extends('frontend.master_home')    
    @section('home')
  

    <!-- Loader -->
    <!-- <div id="global-loader">
      <img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div> -->
    <!-- End Loader -->

  <!-- Page -->
    <div class="page main-signin-wrapper">

      <!-- Row -->
      <div class="row signpages  justify-content-center  sign-3 p-5">
        <div class="col-md-12 col-xl-7">
          <div class="sign3">
            <div class="card">
              <div class="p-5">
                  <form method="POST" action="#"  id="register_form">
                    @csrf
                    <h2 class="text-left mb-4">Sign Up</h2>
                    <div class="form-group text-left">
                      <label class="">Full Name</label>
                      <input class="form-control rounded-11" name="name" id="name" placeholder="Users Name" type="text">
                      <div class="invalid-feedback"></div>

                    </div>
                    <div class="form-group text-left">
                      <label class="">Email Address</label>
                      <input class="form-control rounded-11" name="email" id="email" placeholder="Users email" type="email">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group text-left">
                      <label class="">Password</label>
                      <input class="form-control rounded-11" name="password" id="password" placeholder="password" type="password">
                      <div class="invalid-feedback"></div>
                    </div>
                      <div class="form-group text-left">
                      <label class="">Confirm Password</label>
                      <input class="form-control rounded-11" name="cpassword" id="cpassword" placeholder="Confirm password" type="password">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mb-4 mt-4 text-left">
                      <label class="custom-control custom-checkbox mb-0">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label">By creating an account you agree to the <a href="#">Terms and Services</a>and our <a href="#">Privacy Policy</a></span>
                      </label>
                    </div>
                    <div class="col-12 mt-3">
                      <input type="submit"  id="register_btn" value="Register" class="btn btn-primary rounded-11 btn-block">
                    <div class="text-center tx-15 text-muted mt-4">Already Have an Acoount ? <a class="btn-link font-weight-normal text-primary" href="{{route('login')}}">Sign IN</a></div>
                    <div class="error-2 text-center">Forgot Password ?</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->

    </div>
    <!-- End Page -->



    @endsection

        @section('script')

      <script>
   
        $(function(){
          $("#register_form").submit(function(e){
            e.preventDefault();
            
            $("#register_btn").val('Please Wait....');
            $.ajax({
              url: "{{route('store')}}",
              method: "POST",
              data: $(this).serialize(),
               dataType: 'json',
              success: function(res){
                 
                 if(res.status == 400){
                  showError('name',res.message.name);
                  showError('email',res.message.email);
                  showError('password',res.message.password);
                  showError('cpassword',res.message.cpassword);
                  $("#register_btn").val('Register');
                 }else if(res.status == 200){
                    removeValidationClass("#register_form");
                 }
                
              }

            });


          });

        });


      </script>

    @endsection