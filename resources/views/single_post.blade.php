@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p class="text-muted">By <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in {{ $post->category->name ??  'No Categories' }}</p>

                @if ($post->image)
                     <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">   
                @else
                    <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="" class="img-fluid"> 
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/post" class="d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>
@endsection