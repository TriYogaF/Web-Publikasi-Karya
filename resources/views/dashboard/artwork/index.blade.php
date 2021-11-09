@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Artwork</h1>
    </div>
    <a href="/dashboard/artwork/create" class="btn btn-info mb-3">Add New Artwork</a>
    <div class="bg-light">
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" class="text-start">Title</th>
              <th scope="col">Kategori</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $post->title }}</td>
                    <td>{{ $post->data_name }}</td>
                    <td><img src="{{ $post->img }}" alt="" width="80px" height="80px"></td>
                    <td>
                        <a href="/dashboard/artwork/{{ $post->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
                        <a href="/dashboard/artwork/{{ $post->id }}" class="badge bg-primary"><span data-feather="edit"></span></a>
                        <a href="/dashboard/artwork/{{ $post->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                    </td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </div>
</main>
@endsection