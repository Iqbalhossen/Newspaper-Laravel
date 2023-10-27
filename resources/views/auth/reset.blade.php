@extends('frontend.master_home')    
    @section('home')
    <div class="container py-5">
    <form>
    <div id="login_alert"></div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Reset</button>
</form>
    </div>
    @endsection

    @section('script')

		


		@endsection