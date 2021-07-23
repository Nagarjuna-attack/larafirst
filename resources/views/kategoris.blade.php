@extends('layouts.main')

	@section('container')
	<h1>All Kategori </h1>
		<div class="list-group">
			@foreach($kategoris as $list)
			<a href="/kategori/{{ $list->slug }}" class="list-group-item list-group-item-action"><strong>{{ $list->name }}</strong></a>
			@endforeach
		</div>
	@endsection
