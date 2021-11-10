@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Artwork Baru</h1>
    </div>
    <div class="col-lg-6">
        <form action="/dashboard/artwork" method="post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value= "" >
            </div>
            <div class="mb-3">
              <label for="data_name" class="form-label">Kategori</label>
              <select class="form-select" name="data_name" >
                <option selected>Open this select menu</option>
                <option value="1">Nature</option>
                <option value="2">Building</option>
                <option value="3">People</option>
                <option value="4">Drawing</option>
                <option value="5">Miniature</option>
                <option value="6">Abstrak</option>
                <option value="7">Pixel</option>
                <option value="8">Other</option>
              </select>
            </div>
            <div class="mb-3">
              {{-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button> --}}
              <label for="img" class="form-label">File</label>
              <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="mb-3">
              <label for="caption" class="form-label">Caption</label>
              <textarea class="form-control" id="caption" name="caption" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</main>
 
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
      fetch('/dashboard/artwork/cek?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection