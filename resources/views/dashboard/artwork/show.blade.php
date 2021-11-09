@extends('dashboard.layouts.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <section id="content">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <a href="/dashboard/artwork" class="btn btn-success"><span data-feather="arrow-left"></span></a>
                    <a href="/dashboard/artwork" class="btn btn-primary"><span data-feather="edit"></span></a>
                    <a href="/dashboard/artwork" class="btn btn-danger"><span data-feather="x-circle"></span></a>
                </div>
            </div>
            <div class="row my-4 justify-content-center">
                <div class="col-md-7">
                    <img src="{{ $post->img }}" class="img-fluid" width="800px" height="600px" alt="..." />
                    <figure class="text-center">
                        <h4 class="mt-1">{{ $post->title }}</h4>
                        <figcaption class="blockquote">{{ $post->caption }}</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection