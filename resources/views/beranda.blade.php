@extends('layouts.main')

	@section('container')
	<h1>Beranda</h1>
	<article>
		@foreach($post as $list)
		<h2><a href="/read/{{ $list['url'] }}">{{ $list['judul'] }}</a></h2>
		<h5>{{ $list['deskripsi'] }}</h5>
		<p>{{ $list['isi'] }}</p>
		@endforeach
	</article>
	@endsection
