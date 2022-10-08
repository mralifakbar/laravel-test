{{-- @dd($post) --}}

@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>
            {{-- <h5>{{ $post->author }}</h5> --}}

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my
                post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>
            {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a> --}}
            {{-- agar html spesial char tidak di print  --}}

            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden" class="mt-3">
                    <img src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->title }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            

            <article class="my-3 fs-5">
                {!! $post["body"] !!}
            </article>
        </div>
    </div>
</div>
<br>
@endsection
