@extends('dashboard.layouts.main')
@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit {{ $postedit->title }}</h1>
    </div>
    <a href="/dashboard/posts" class="btn btn-success mb-4"><span data-feather="arrow-left"></span> Kembali Ke post</a>
    <div class="col-lg-8">
      <form method="post" action="/dashboard/posts/{{ $postedit->slug }}" enctype="multipart/form-data">
      	@method('put')
      	@csrf
      <div class="mb-3">
	   <label for="title" class="form-label">Title</label>
	   <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ old('title',$postedit->title) }}">
	   @error('title')
	   <div class="invalid-feedback">
	   	{{ $message }}
	   </div>
	   @enderror
	  </div>
	  <div class="mb-3">
	  	<label for="slug" class="form-label">Slug</label>
	  	<input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="contoh-dari-slug" name="slug" value="{{ old('slug',$postedit->slug) }}">
	  	@error('slug')
	   <div class="invalid-feedback">
	   	{{ $message }}
	   </div>
	   @enderror
	  </div>
	  <div class="mb-3">
	  	<label for="kategori" class="form-label">Kategori</label>
	  	<select class="form-select" id="kategori" name="kategori_id">
	  	  @foreach($kategoris as $ktg)
	  	  	@if( old('kategori_id',$postedit->kategori_id)== $ktg->id)
		  	<option value="{{ $ktg->id }}" selected>{{ $ktg->name }}</option>
		  	@else
		  	<option value="{{ $ktg->id }}">{{ $ktg->name }}</option>
		  	@endif
		  @endforeach
		</select>
	  </div>
	  <div class="mb-3">
		<label for="image" class="form-label">Image Post</label>
		@if($postedit->image)
		<img src="{{ asset('storage/'.$postedit->image) }}" class="img-preview img-fluid mb-3 d-block" alt="{{ $postedit->image }}">
		@else
		<img class="img-preview img-fluid mb-3">
		@endif
		<input type="hidden" name="oldImage" value="{{ $postedit->image }}">
		<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
		@error('image')
		   <div class="invalid-feedback">
		   	{{ $message }}
		   </div>
		   @enderror
	  </div>
	  <div class="mb-3">
	   <label for="Body" class="form-label">Body</label>
	   @error('body')<p class="text-danger">{{ $message }}</p>@enderror
	   <input id="body" type="hidden" name="body" value="{{ old('body',$postedit->body) }}">
  	   <trix-editor input="body"></trix-editor>
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Edit Post</button>	
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

    	function previewImage(){
    		const image = document.querySelector('#image');
    	  const imgPreview = document.querySelector('.img-preview');

    	  imgPreview.style.display='block';

    	  const fReader = new FileReader();
    	  fReader.readAsDataURL(image.files[0]);
    	  fReader.onload = function(oFREvent)
    	  {
    	  	imgPreview.src = oFREvent.target.result;
    	  }
    	}
    </script>
@endsection