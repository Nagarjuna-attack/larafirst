  @extends('dashboard.layouts.main')
  @section('container')
    <div class="container">
      <div class="row my-3">
        <div class="col-lg-8">
          <h2>{{ $baca->title }}</h2>
          <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali Ke post</a>
          <a href="/dashboard/posts/{{ $baca->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/posts/{{ $baca->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><span data-feather="x-circle"></span> Delete</button>
                </form>
          @if($baca->image)
          <img src="{{ asset('storage/'.$baca->image) }}" class="img-fluid my-4" alt="{{ $baca->name }}">
          @else
          <img src="https://source.unsplash.com/900x300?{{ $baca->kategori->name }}" class="img-fluid my-4" alt="{{ $baca->name }}">
          @endif
          <p class="card-text"><small class="text-muted">Last updated {{ $baca->created_at->diffForHumans() }}</small></p>
          {{ $baca->user->name }}</a> In <a class="text-decoration-none" href="/?kategori={{ $baca->kategori->slug }}"><strong>{{ $baca->kategori->name }}</strong></p></a>
          {!! $baca->body !!}
        </div>
      </div>
    </div>
  @endsection()
