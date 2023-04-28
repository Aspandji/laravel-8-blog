@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Catagories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <a href="/post?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        @if ($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" class="card-img" alt="" style="max-height: 200px; overflow:hidden">
                        @else
                        <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="card-img" alt="" style="max-height: 200px; overflow:hidden">
                        @endif
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>
    @endforeach --}}
@endsection