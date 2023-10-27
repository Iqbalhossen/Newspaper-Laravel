@extends('frontend.master_home')    
    @section('home')
    <div class="container py-5">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <a href="{{route('user.register')}}" class="btn btn-danger">Register</a>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    @endsection

    @section('script')

	



		@endsection