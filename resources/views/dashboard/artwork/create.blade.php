@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Artwork Baru</h1>
    </div>
    <div class="col-lg-7 bg-light p-3">
        <form action="/dashboard/artwork" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" >
              @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            {{-- Kategori belum sempurna ganti switch --}}
            <div class="mb-3">
              <label for="data_name" class="form-label">Kategori</label>
              <select class="form-select" id="data_name" name="data_name" required value="{{ old('data_name') }}" >
                <option selected disabled value="">Pilih Kategori</option>
                <option value="nature">Nature</option>
                <option value="building">Building</option>
                <option value="people">People</option>
                <option value="drawing">Drawing</option>
                <option value="miniature">Miniature</option>
                <option value="abstrak">Abstrak</option>
                <option value="pixel">Pixel</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">File Artwork</label>
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
              @error('image')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="caption" class="form-label">Caption</label>
              
              <input id="caption" type="hidden" name="caption" value="{{ old('caption') }}">
              <trix-editor input="caption"></trix-editor>
              @error('caption')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>

            {{-- <div class="mb-3">
              <label for="caption" class="form-label">Caption</label>
              <textarea class="form-control  @error('caption') is-invalid @enderror" id="caption" name="caption" value="{{ old('caption') }}" rows="3" required ></textarea>           
              @error('caption')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> --}}

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

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
</script>
@endsection