@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Literatur</h1>
    </div>
    @if (session()->has('success'))    
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
    <a href="/dashboard/literatur/create" class="btn btn-info mb-3">Tambah Literatur Baru</a>
    <div class="bg-light">
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" class="text-start">Title</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($literaturs as $literatur) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $literatur->title }}</td>
                    <td>{{ $literatur->category->name }}</td>
                    <td>
                        <a href="/dashboard/literatur/{{ $literatur->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
                        <a href="/dashboard/literatur/{{ $literatur->slug }}/edit" class="badge bg-primary"><span data-feather="edit"></span></a>
                        <form action="/dashboard/literatur/{{ $literatur->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Apa anda yakin?')"><span data-feather="x-circle"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </div>
</main>
@endsection