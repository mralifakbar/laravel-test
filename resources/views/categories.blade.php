{{-- @dd($posts); --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}" class="">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title flex-fill text-center py-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>

@endsection
