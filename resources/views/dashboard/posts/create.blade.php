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
	   <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
	   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    </script>
@endsection