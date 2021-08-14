@extends('layouts.main')

	@section('container')
	<h1>Beranda </h1>
	@if($posts->count())
	<div class="card mb-3">
	  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->kategori->name }}" class="card-img-top img-responsive" alt="foto coy">
	  <div class="card-body text-center">
	    <a href="/read/{{ $posts[0]->slug }}"><h3 class="card-title">{{ $posts[0]->title }}</h3></a>
	    <p class="card-text">{{ $posts[0]->excerpt }}</p>
	    <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
	  </div>
	</div>
	<div class="container">
		<div class="row">
			@foreach($posts->skip(1) as  $list)
			<div class="col-md-4 mb-3">
				<div class="card" style="width: 18rem;">
  					<img src="https://source.unsplash.com/500x400?{{ $list->kategori->name }}" class="card-img-top" alt="kategori-name">
  					<div class="card-body">
    					<h5 class="card-title">{{ $list->title }}</h5>
    					<p class="card-text">{{ $list->excerpt }}</p>
    					<a href="/read/{{ $list->slug }}" class="btn btn-primary">Go somewhere</a>
  					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@else
	<p>Belum ada artikel yang dipost</p>
	@endif
	@endsection
