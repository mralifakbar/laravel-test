{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="mb-4">{{ $post->title }}</h2>
            {{-- <h5>{{ $post->author }}</h5> --}}

            <p>By. <a href="/blog?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                in <a href="/blog?category={{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            {{-- agar html spesial char tidak di print  --}}
            
            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->title }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $post["body"] !!}
            </article>
            <a href="/blog" class="text-decoration-none mt-2">Back to blog</a>
        </div>
    </div>
</div>


<br>


@endsection
