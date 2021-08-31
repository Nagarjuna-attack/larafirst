@extends('layouts.main')

	@section('container')
	<h1 class="text-center mb-5">Beranda </h1>
	<div class="row">
		<div class="col-md-6 mx-auto mb-3">
			<form action="/">
				@if(request('kategori'))
					<input type="hidden" name="kategori" value="{{ request('kategori') }}">
				@endif
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search..." name="search">
				  <button class="btn btn-outline-primary" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>
	@if($posts->count())
	<div class="card mb-3">
	  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->kategori->name }}" class="card-img-top img-responsive" alt="foto coy">
	  <div class="card-body text-center">
	    <a href="/read/{{ $posts[0]->slug }}"><h3 class="card-title">{{ $posts[0]->title }}</h3></a>
	    @if(request('search'))
	    <a href="?search={{ request('search') }}&kategori={{ $posts[0]->kategori->slug }}"><h3 class="card-title">{{ $posts[0]->kategori->name }}</h3></a>
	    @else
	    <a href="?kategori={{ $posts[0]->kategori->slug }}"><h3 class="card-title">{{ $posts[0]->kategori->name }}</h3></a>
	    @endif
	    <p class="card-text">{{ $posts[0]->excerpt }}</p>
	    <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
	  </div>
	</div>
	<div class="container mb-3">
		<div class="row">
			@foreach($posts->skip(1) as  $list)
			<div class="col-md-4 mb-3">
				<div class="card" style="width: 18rem;">
  					<img src="https://source.unsplash.com/500x400?{{ $list->kategori->name }}" class="card-img-top" alt="kategori-name">
  					<div class="card-body">
    					<h5 class="card-title">{{ $list->title }}</h5>
    					<p class="card-text">{{ $list->excerpt }}</p>
    					@if(request('search'))
    					<a href="?search={{ request('search') }}&kategori={{ $list->kategori->slug }}"><h3 class="card-title">{{ $list->kategori->name }}</h3></a>
    					@else
    					<a href="?kategori={{ $list->kategori->slug }}"><h3 class="card-title">{{ $list->kategori->name }}</h3></a>
    					@endif
    					<p class="card-text"><small class="text-muted">Last updated {{ $list->created_at->diffForHumans() }}</small></p>
    					<a href="/read/{{ $list->slug }}" class="btn btn-primary">Go somewhere</a>
  					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@else
	<p class="text-center">Belum ada artikel yang dipost</p>
	@endif
	<div class="d-flex justify-content-center">
		{{ $posts->links() }}
	</div>
	@endsection
