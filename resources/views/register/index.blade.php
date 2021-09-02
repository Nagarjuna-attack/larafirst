@extends('layouts.main')
@section('container')
<div class="row">
	<div class="col-md-5 col-lg-5 mx-auto">
	 	<main class="form-signin">
		  <form action="/register" method="POST">
		  	@csrf
		    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
		    <div class="form-floating mb-3">
		      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name" id="floatingInput" placeholder="Input Your Name" required value="{{ old('name') }}">
		      <label for="floatingInput">Nama</label>
		      @error('name')
		       <div class="invalid-feedback text-center">
			      {{ $message }}
			   </div>
			  @enderror
		    </div>
		    <div class="form-floating mb-3">
		      <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" id="floatingPassword" placeholder="Password" required value="{{ old('email') }}">
		      <label for="floatingPassword">Email</label>
		      @error('email')
		       <div class="invalid-feedback text-center">
			      {{ $message }}
			   </div>
			  @enderror
		    </div>
		    <div class="form-floating mb-3">
				<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
				<label for="floatingPassword">Password</label>
				@error('password')
		       <div class="invalid-feedback text-center">
			      {{ $message }}
			   </div>
			  @enderror
			</div>
		    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
		  </form>
		  <small class="d-block text-center mt-3">Account Already Exist? <a class="text-decoration-none" href="/login">Login Now</a></small>
		</main>
	</div>
</div>
@endsection