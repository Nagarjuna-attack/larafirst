@extends('dashboard.layouts.main')
@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
      <form method="post" action="/dashboard/posts">
      	@csrf
      <div class="mb-3">
	   <label for="title" class="form-label">Title</label>
	   <input type="text" class="form-control" id="title" placeholder="Title" name="title">
	  </div>
	  <div class="mb-3">
	  	<label for="slug" class="form-label">Slug</label>
	  	<input type="text" class="form-control" id="slug" placeholder="contoh-dari-slug" name="slug">
	  </div>
	  <div class="mb-3">
	  	<label for="kategori" class="form-label">Kategori</label>
	  	<select class="form-select" id="kategori" name="id_kategori">
	  	  @foreach($kategoris as $ktg)
		  <option value="{{ $ktg->id }}">{{ $ktg->name }}</option>
		  @endforeach
		</select>
	  </div>
	  <div class="mb-3">
	   <label for="Body" class="form-label">Body</label>
	   <input id="body" type="hidden" name="body">
  	   <trix-editor input="body"></trix-editor>
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Create Post</button>	
      </form>	
    </div>

    <script>
    	const title = document.querySelector('#title');
    	const slug = document.querySelector('#slug');

    	title.addEventListener('change', function(){

    		fetch('/dashboard/posts/checkSlug?title=' + title.value)
    		.then(response => response.json())
    		.then(data => slug.value = data.slug)
    	});

    	document.addEventListener('trix-file-accept', function(e){
    		e.preventDefault();
    	});
    </script>
@endsection