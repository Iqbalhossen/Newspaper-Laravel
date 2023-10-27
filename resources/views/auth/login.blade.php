@extends('frontend.master_home')    
    @section('home')
  

		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/loader.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- End Loader -->

			<!-- Row -->
			<div class="row signpages  justify-content-center text-center sign-2 p-5">
				<div class="col-md-12 col-xl-6">
					<div class="sign1">
						<div class="card">
							<div class="">
								<div class="card-body mt-2 mb-2 p-5">
									<div class="clearfix"></div>

									<div id="login_alert"></div>

									<form action="{{route('user.login')}}" method="POST" id="login_form">
										@csrf

                    <input name="admin" value="admin" type="hidden">
                    <input name="text" id="user" name="user" value="user" type="hidden">
              

										<h5 class="text-left mb-2">Sign In</h5>
										<p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to Continue in our website</p>
										<div class="form-group text-left">
											<label class="">Email Address</label>
											<input class="form-control rounded-11" placeholder="Users email" name="email" id="email" type="email">
											 <div class="invalid-feedback"></div>
										</div>
										<div class="form-group text-left">
											<label class="">Password</label>
											<input class="form-control rounded-11" placeholder="password" name="password" id="password" type="password">
											 <div class="invalid-feedback"></div>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group mb-0 text-left">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-label">Remember me</span>
													</label>
												</div>
											</div>
											<div class="col-6 text-right mt-1">
												<a href="{{route('user.forgot')}}" class="text-dark">Forgot password?</a>
											</div>
											<div class="col-12 mt-3">
												<input type="submit" id="login_btn" value="Login" class="btn btn-primary rounded-11 btn-block">
											</div>
										</div>
										<div class="text-center tx-15 text-muted mt-3">You Don't have an Account <a class="btn-link font-weight-normal text-primary" href="{{route('user.register')}}">Sign Up</a></div>
									</form>
									<hr class="divider mt-4">
									<div class="coming-form d-flex justify-content-center mt-4">
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->


		@endsection

		@section('script')
<!-- 
		<script type="text/javascript">
			
			$(function(){
				$("#login_form").submit(function(e){
					e.preventDefault();
					$("#login_btn").val('Please Wait...');
					$.ajax({
						url: "{{route('user.login')}}",
						method: 'POST',
						data: $(this).serialize(),
						dataType:'json',
						success:function(res){
							if(res.status == 400){
                  showError('email',res.message.email);
                  showError('password',res.message.password);
                  $("#login_btn").val('Login');
                 }else if(res.status == 401){ 
                 	$("#login_alert").html(ShowMessage('danger', res.message));               	
                 	 $("#login_btn").val('Login');
						}else{
						if(res.status == 200){
         
                 }
                 }
                 }

					});
				});

			});




		</script> -->



		@endsection