  @extends('dashboard.layouts.main')
  @section('container')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Kategori</h1>
      </div>
      <div class="table-responsive col-lg-10">
        <a href="/dashboard/kategoris/create" class="btn btn-primary mb-3">Create New Kategori</a>
        @if(session()->has('succes'))
        {!! session('succes') !!}
        @elseif(session()->has('delete'))
        {!! session('delete') !!}
        @elseif(session()->has('update'))
        {!! session('update') !!}
        @endif
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kategoris as $ktg)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ktg->name }}</td>
              <td>
                <a href="/dashboard/kategoris/{{ $ktg->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/kategoris/{{ $ktg->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/kategoris/{{ $ktg->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  @endsection()
