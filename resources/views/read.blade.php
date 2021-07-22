@extends('layouts.main')

@section('container')
	<h1>Read</h1>
	<article>
		<h2>{{ $baca->title }}</h2>
		{!! $baca->body !!}
	</article>
	<a href="/">Beranda</a>
	@endsection