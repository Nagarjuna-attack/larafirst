@extends('layouts.main')
@section('container')
<div class="row">
	<div class="col-md-5 col-lg-5 mx-auto">
		@if(session()->has('sukses'))
			{!! session('sukses') !!}
		@endif
	 	<main class="form-signin">
		  <form action="/login" method="post">
		  	@csrf
		    <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
		    <div class="form-floating mb-3">
		      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required autofocus>
		      <label for="email">Email address</label>
		    </div>
		    <div class="form-floating mb-3">
		      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		      <label for="password">Password</label>
		    </div>
		    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
		  </form>
		  <small class="d-block text-center mt-3">Not Register? <a class="text-decoration-none" href="/register">Register Now</a></small>
		</main>
	</div>
</div>
@endsection