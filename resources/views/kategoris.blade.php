@extends('layouts.main')
	@section('container')
		<h1 class="mb-5">All Kategori </h1>
		<div class="row">
			@foreach($kategoris as $list)
			<div class="col-md-4 col-lg-4">
				<a href="/?kategori={{ $list->slug }}">
				<div class="card bg-dark text-white">
				  <img src="https://source.unsplash.com/500x500?{{ $list->name }}" class="card-img" alt="{{ $list->name }}">
				  <div class="card-img-overlay d-flex align-items-center p-0">
				    <h5 class="fs-2 text-white card-title text-center flex-fill p-4"><strong>{{ $list->name }}</strong></h5>
				  </div>
				</div>
				</a>
			</div>
			@endforeach
		</div>
	@endsection
