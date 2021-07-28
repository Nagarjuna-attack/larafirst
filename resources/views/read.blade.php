@extends('layouts.main')

@section('container')
	<h1>Read</h1>
	<article>
		<h2>{{ $baca->title }}</h2>
		<p>By <a class="text-danger text-decoration-none" href="/user/{{ strtolower($baca->user->name) }}">{{ $baca->user->name }}</a> <a class="text-decoration-none" href="/kategori/{{ $baca->kategori->slug }}"><strong>{{ $baca->kategori->name }}</strong></p></a>
		{!! $baca->body !!}
	</article>
	<a class="text-decoration-none" href="/">Beranda</a>
	@endsection