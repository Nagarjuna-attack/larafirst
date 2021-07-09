@extends('layouts.main')

@section('container')
	<h1>Read</h1>
	<article>
		<h2>{{ $baca['judul'] }}</h2>
		<h4>{{ $baca['deskripsi'] }}</h4>
		<p>{{ $baca['isi'] }}</p>
	</article>
	<a href="/">Beranda</a>
	@endsection