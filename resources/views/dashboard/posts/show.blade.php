@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            
            <a href="/dashboard/posts" class="btn btn-success btn-sm"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to My All Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span> Delete</button>
              </form>

              @if ($post->image)
              <div style="max-height: 350px; overflow:hidden" class="mt-3">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">   
              </div>
              @else
                <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="" class="img-fluid mt-3"> 
              @endif
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection