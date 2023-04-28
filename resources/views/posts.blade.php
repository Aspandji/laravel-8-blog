@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <form action="/post" method="GET">
            @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-dark" type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @if($posts->count())
      <div class="card mb-3">
        
        @if ($posts[0]->image)
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid" style="max-height: 500px; overflow:hidden">
        @else
          <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="" class="img-fluid" style="max-height: 500px; overflow:hidden">
        @endif
        
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary">
                   <p class="text-muted">By <a href="/post?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in {{ $posts[0]->category->name ?? 'No Categories' }} {{ $posts[0]->created_at->diffForHumans() }}</p>
                </small>
            </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $post->category->name ?? 'No Categories' }}</div>
                    
                    @if ($post->image)
                      <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark"><img src="{{ asset('storage/' . $post->image) }}" alt="" class="card-img-top" style="max-height: 200px; overflow:hidden"></a>
                    @else
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark"><img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img-top" alt="..." style="max-height: 200px; overflow:hidden"></a>
                    @endif
                    
                    <div class="card-body">
                      <h3 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h3>
                      <p>
                        <small class="text-body-secondary">
                          <p class="text-muted">By <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
      <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>

@endsection