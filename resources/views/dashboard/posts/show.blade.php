{{-- @dd($post) --}}

@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>
            {{-- <h5>{{ $post->author }}</h5> --}}

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
            {{-- agar html spesial char tidak di print  --}}

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post["body"] !!}
            </article>
            <a href="/blog" class="text-decoration-none mt-2">Back to blog</a>
        </div>
    </div>
</div>
<br>
@endsection
