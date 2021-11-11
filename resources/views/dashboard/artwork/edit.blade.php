@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Artwork</h1>
    </div>
    <div class="col-lg-7 bg-light p-3 ">
        <form action="/dashboard/artwork/{{ $post->slug }}" method="post" enctype="multipart/form-data">
          @method('put')  
          @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}" >
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Kategori</label>
              <select class="form-select" name="category_id" >
                @foreach ($categories as $category)    
                  @if (old('category_id', $post->category_id) == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>    
                  @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">File Artwork</label>
              <input type="hidden" name="oldArtwork" value="{{ $post->image }}">
              @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-preview img-fluid mb-3 d-block">
              @else
              <img class="img-preview img-fluid mb-3">                
              @endif
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="caption" class="form-label">Caption</label>
              
              <input id="caption" type="hidden" name="caption" value="{{ old('caption', $post->caption) }}">
              <trix-editor input="caption"></trix-editor>
              @error('caption')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</main>
 
@endsection