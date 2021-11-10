@extends('dashboard.layouts.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <section id="content">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <a href="/dashboard/artwork" class="btn btn-success"><span data-feather="arrow-left"></span></a>
                    <a href="/dashboard/artwork/{{ $post->slug }}/edit" class="btn btn-primary"><span data-feather="edit"></span></a>
                    <form action="/dashboard/artwork/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apa anda yakin?')"><span data-feather="x-circle"></button>
                      </form>
                </div>
            </div>
            <div class="row my-4 justify-content-center">
                <div class="col-md-7">
                    @if ($post->image)
                    <div style="max-height: 500px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1280x1080/?{{ $post->data_name }}" class="img-fluid" alt="..." />    
                    @endif
                    <figure class="text-center">
                        <h4 class="mt-1">{{ $post->title }}</h4>
                        <figcaption class="blockquote">{!! $post->caption !!}</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection