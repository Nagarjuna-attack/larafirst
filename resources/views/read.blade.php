@extends('layouts.main')

@section('container')
	<h1>Read</h1>
	<article>
		<h2>{{ $baca->title }}</h2>
		<img src="https://source.unsplash.com/900x300?{{ $baca->kategori->name }}" class="img-responsive mb-4" alt="{{ $baca->name }}">
		<p class="card-text"><small class="text-muted">Last updated {{ $baca->created_at->diffForHumans() }}</small></p>
		<p>By <a class="text-danger text-decoration-none" href="/author/{{ strtolower($baca->user->name) }}">{{ $baca->user->name }}</a> In <a class="text-decoration-none" href="/?kategori={{ $baca->kategori->slug }}"><strong>{{ $baca->kategori->name }}</strong></p></a>
		{!! $baca->body !!}
	</article>
	<a class="text-decoration-none" href="/">Beranda</a>
	@endsection