@extends('layouts.main')

@section('container')
	<h1>Read</h1>
	<article>
		<h2>{{ $baca->title }}</h2>
		<p>By Afandi <a href="/kategori/{{ $baca->kategori->slug }}"><strong>{{ $baca->kategori->name }}</strong></p></a>
		{!! $baca->body !!}
	</article>
	<a href="/">Beranda</a>
	@endsection