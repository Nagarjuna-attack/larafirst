@extends('layouts.main')

	@section('container')
	<h1>Kategori : {{ $ktgori }}</h1>
	<article>
		@foreach($posts as $list)
		<h2><a class="text-decoration-none" href="/read/{{ $list->slug }}">{{ $list->title }}</a></h2>
		<h5>{{ $list->excerpt }}</h5>
		@endforeach
	</article>
	@endsection
