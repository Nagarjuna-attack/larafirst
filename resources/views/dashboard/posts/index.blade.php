  @extends('dashboard.layouts.main')
  @section('container')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
      </div>
      <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $ps)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ps->title }}</td>
              <td>{{ $ps->kategori->name }}</td>
              <td>
                <a href="/dashboard/posts/{{ $ps->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $ps->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="/dashboard/posts/{{ $ps->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  @endsection()
